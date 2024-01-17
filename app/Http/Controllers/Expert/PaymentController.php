<?php

namespace App\Http\Controllers\Expert;

use App\Http\Controllers\Controller;
use App\Models\ExpertKYC;
use App\Models\ExpertWithdrawal;
use App\Models\Profile;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PaymentController extends Controller {
    public function index() {
        $user = auth()->user();

        //if user has no connected account forward to onboard.
        if ( $user->profile->stripe_acct_id == '' ) {
            return redirect()->route( 'expert.payment.onboard' );
        }
        $acct_id = $user->profile->stripe_acct_id;

        //check if there is any document requires
        $stripe                = new \Stripe\StripeClient( [
            "api_key" => env( 'STRIPE_SECRET' ),
        ] );
        $expert_stripe_account = $stripe->accounts->retrieve( $acct_id, [] );

        $balance = $stripe->balance->retrieve( [], [ 'stripe_account' => $acct_id ] );

        return view( 'frontend.expert.payment.index', compact( 'expert_stripe_account', 'balance' ) );
    }

    public function onboard( Request $request ) {
        $user = auth()->user();

        $stripe = new \Stripe\StripeClient( [
            "api_key" => env( 'STRIPE_SECRET' ),
        ] );

        //first create stripe connect account if there is no account
        if ( $user->profile->stripe_acct_id == '' ) {
            try {
                $connected_account = $stripe->accounts->create( [
                    'country'          => 'AU',
                    'type'             => 'custom',
                    'capabilities'     => [
                        'card_payments' => [ 'requested' => true ],
                        'transfers'     => [ 'requested' => true ],
                    ],
                    'business_type'    => 'individual',
                    'business_profile' => [
                        'mcc' => '5734',
                        'url' => 'https://eduexhub.com'
                    ],
                    'email'            => $user->email,
                    'individual'       => [
                        'first_name' => $user->first_name,
                        'last_name'  => $user->last_name,
                        'email'      => $user->email
                    ],
                    'tos_acceptance'   => [
                        'ip'   => $request->ip(),
                        'date' => now()->timestamp
                    ],
                    'settings'         => [
                        'payouts' => [
                            'schedule'             => [ 'interval' => 'manual' ],
                            'statement_descriptor' => 'EduExHub'
                        ]
                    ]
                ] );

                $profile                 = Profile::where( 'user_id', $user->id )->first();
                $profile->stripe_acct_id = $connected_account->id;
                $profile->save();

            } catch ( \Exception $ex ) {
                error_log( "An error occurred when calling the Stripe API to create an account session: {$ex->getMessage()}" );
            }
        }

        //submit new account
        if ( $request->isMethod( 'post' ) ) {
            $acct_id = $user->profile->stripe_acct_id;

            try {

                $acc_update = $stripe->accounts->update(
                    $acct_id,
                    [
                        'individual' => [
                            'address' => [
                                'city'        => $request->address_city,
                                'line1'       => $request->address_line1,
                                'postal_code' => $request->address_postal_code,
                                'state'       => $request->address_state,
                            ],
                            'phone'   => $request->phone,
                            'dob'     => [
                                'day'   => date( 'd', strtotime( $request->dob ) ),
                                'month' => date( 'm', strtotime( $request->dob ) ),
                                'year'  => date( 'Y', strtotime( $request->dob ) )
                            ]
                        ]
                    ]
                );

                $user_kyc = ExpertKYC::updateOrCreate( [
                    'user_id' => $user->id
                ], [
                    'individual_dob'                            => Carbon::parse( $request->dob ),
                    'individual_phone'                          => $request->phone,
                    'individual_registered_address_line1'       => $request->address_line1,
                    'individual_registered_address_line2'       => $request->address_line2,
                    'individual_registered_address_city'        => $request->address_city,
                    'individual_registered_address_state'       => $request->address_state,
                    'individual_registered_address_postal_code' => $request->address_postal_code,
                    'individual_registered_address_country'     => $request->address_country,
                    'status'                                    => $acc_update->details_submitted
                ] );

                if ( $request->hasFile( 'document_front' ) && $request->file( 'document_front' )->isValid() ) {
                    $user_kyc->addMediaFromRequest( 'document_front' )->toMediaCollection( 'individual_verification_document_front' );

                    $fp    = fopen( $user_kyc->getMedia( 'individual_verification_document_front' )->last()->getPath(), 'r' );
                    $files = $stripe->files->create( [
                        'purpose' => 'identity_document',
                        'file'    => $fp
                    ], [
                        "stripe_account" => $acct_id
                    ]);

                    fclose( $fp );;
                }
                if ( $request->hasFile( 'document_back' ) && $request->file( 'document_back' )->isValid() ) {
                    $user_kyc->addMediaFromRequest( 'document_back' )->toMediaCollection( 'individual_verification_document_back' );

                    $fp    = fopen( $user_kyc->getMedia( 'individual_verification_document_back' )->last()->getPath(), 'r' );
                    $files = $stripe->files->create( [
                        'purpose' => 'identity_document',
                        'file'    => $fp
                    ], [
                        "stripe_account" => $acct_id
                    ]);
                    fclose( $fp );
                }

                if ( $request->hasFile( 'additional_document_front' ) && $request->file( 'additional_document_front' )->isValid() ) {
                    $user_kyc->addMediaFromRequest( 'additional_document_front' )->toMediaCollection( 'individual_verification_additional_document_front' );

                    $fp = fopen( $user_kyc->getMedia( 'individual_verification_additional_document_front' )->last()->getPath(), 'r' );
                    $stripe->files->create( [
                        'purpose' => 'identity_document',
                        'file'    => $fp,
                    ], [
                        "stripe_account" => $acct_id
                    ]);
                    fclose();
                }
                if ( $request->hasFile( 'additional_document_back' ) && $request->file( 'additional_document_back' )->isValid() ) {
                    $user_kyc->addMediaFromRequest( 'additional_document_back' )->toMediaCollection( 'individual_verification_additional_document_back' );

                    $fp = fopen( $user_kyc->getMedia( 'individual_verification_additional_document_back' )->last()->getPath(), 'r' );
                    $stripe->files->create( [
                        'purpose' => 'identity_document',
                        'file'    => $fp,
                    ], [
                        "stripe_account" => $acct_id
                    ]);
                    fclose();
                }

                $notification = 'Information submitted successfully';

                return redirect()->route( 'expert.payment.index' )->with( [ 'message' => $notification ] );
            } catch ( \Exception $ex ) {
                error_log( "An error occurred when calling the Stripe API to create an account session: {$ex->getMessage()}" );

                return redirect()->back()->with( 'error', $ex->getMessage() )->withInput();
            }
        }

        if ( $user->profile->stripe_acct_id ) {
            $acct_id = $user->profile->stripe_acct_id;

            $expert_stripe_account = $stripe->accounts->retrieve( $acct_id, [] );

            view()->share( 'message', $expert_stripe_account->requirements->disabled_reason );
            view()->share( 'currently_due', $expert_stripe_account->requirements->currently_due );

            return view( 'frontend.expert.payment.onboard', compact( 'user' ) );
        }

        return view( 'frontend.expert.payment.onboard', compact( 'user' ) );
    }

    public function updateData( Request $request ) {
        $stripe = new \Stripe\StripeClient( [
            "api_key" => env( 'STRIPE_SECRET' ),
        ] );

        $acct_id = 'acct_1OY1WYPniY99fxGK';

        $stripe->accounts->update(
            $acct_id,
            [
                'business_profile' => [ 'url' => $request->business_profile ],
                'tos_acceptance'   => [
                    'date' => strtotime( $request->tos_acceptance_date ),
                    'ip'   => $request->ip,
                ],
            ]
        );
    }

    public function accountSession() {
        $stripe = new \Stripe\StripeClient( [
            "api_key" => env( 'STRIPE_SECRET' ),
        ] );

        try {
            $account_session = $stripe->accountSessions->create( [
                'account'    => 'acct_1OY1WYPniY99fxGK',
                'components' => [
                    'account_onboarding' => [ 'enabled' => true ],
//                    'payments' => [
//                        'enabled' => true,
//                        'features' => [
//                            'refund_management' => true,
//                            'dispute_management' => true,
//                            'capture_payments' => true,
//                        ],
//                    ],
                ],
            ] );

            return response()->json( array(
                'client_secret' => $account_session->client_secret
            ) );
        } catch ( \Exception $e ) {
            error_log( "An error occurred when calling the Stripe API to create an account session: {$e->getMessage()}" );
            http_response_code( 500 );

            return response()->json( [ 'error' => $e->getMessage() ] );
        }
    }

    public function withdrawalMethod( Request $request ) {
        $user = auth()->user();

        if ( $user->profile->stripe_acct_id == '' ) {
            return redirect()->route( 'expert.payment.onboard' );
        }

        $stripe = new \Stripe\StripeClient( [
            "api_key" => env( 'STRIPE_SECRET' ),
        ] );

        if ( $request->isMethod( 'post' ) ) {
            $bank_token = $stripe->tokens->create( [
                'bank_account' => [
                    'country'             => $request->country,
                    'currency'            => $request->currency,
                    'account_holder_name' => $request->account_holder_name,
                    'account_holder_type' => $request->account_holder_type,
                    'routing_number'      => $request->routing_number,
                    'account_number'      => $request->account_number,
                ],
            ] );
            if ( $bank_token->id ) {
                $bank_account = $stripe->accounts->createExternalAccount(
                    $user->profile->stripe_acct_id,
                    [ 'external_account' => $bank_token->id ]
                );
                if ( $bank_account ) {
                    $default=0;
                    if($user->expert_withdrawal()->where('default', 1)->count() == 0){
                        $default=1;
                    }
                    ExpertWithdrawal::create( [
                        'user_id'             => $user->id,
                        'type'                => 'bank_account',
                        'account_type'        => $request->account_type,
                        'country'             => $request->country,
                        'currency'            => $request->currency,
                        'account_holder_name' => $request->account_holder_name,
                        'account_holder_type' => $request->account_holder_type,
                        'routing_number'      => $request->routing_number,
                        'account_number'      => $request->account_number,
                        'default'             => $default,
                        'status'              => $bank_account->status
                    ] );

                    return redirect()->route( 'expert.payment.withdrawal' )->with( [ 'message' => 'Bank information added successfully.' ] );
                }
            }
        }

        return view( 'frontend.expert.payment.withdrawal', compact('user') );
    }

    public function withdraw(Request $request) {
        $user = auth()->user();

        if ( $user->profile->stripe_acct_id == '' ) {
            return redirect()->route( 'expert.payment.onboard' );
        }

        $stripe = new \Stripe\StripeClient( [
            "api_key" => env( 'STRIPE_SECRET' ),
        ] );

        $amount = $request->withdraw_amount * 100;
        $payout = $stripe->payouts->create([
            'amount' => $amount,
            'currency' => 'usd',
        ]);

        dd($payout);
    }

    public function payout() {
        $stripe = new \Stripe\StripeClient( [
            "api_key" => env( 'STRIPE_SECRET' ),
        ] );

        $acct_id = 'acct_1OY1WYPniY99fxGK';

        $amount = 100 * 100; //convert to cent

        $payout = $stripe->payouts->create(
            [
                'amount'   => $amount,
                'currency' => 'aud',
            ],
            [ 'stripe_account' => $acct_id ]
        );

        dd( $payout );
    }
}
