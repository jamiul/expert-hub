<?php

namespace App\Http\Controllers\Expert;

use App\Http\Controllers\Controller;
use App\Models\ExpertKYC;
use App\Models\ExpertTransaction;
use App\Models\ExpertWithdrawal;
use App\Models\Profile;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Stripe\Exception\InvalidRequestException;

class PaymentController extends Controller
{
    public $api_key = null;

    public $stripe = null;

    public function __construct() {
        $this->api_key = env( 'STRIPE_SECRET' );

        $this->stripe = new \Stripe\StripeClient( [
            "api_key" => env( 'STRIPE_SECRET' ),
        ] );
    }

    private function __checkStripeConnect() {
        $user = auth()->user();

        if ( $user->profile->stripe_acct_id == '' ) {
            return redirect()->route( 'expert.payment.onboard' );
        }
    }
    /*
     * Display summary of Experts Payment & Billing /payment
     * */
    public function index()
    {
        return view( 'frontend.expert.payment.index' );
    }

    /*
     * List of transactions /payment/billing-report
     * */
    public function billingReport() {
        $user = auth()->user();

        $this->__checkStripeConnect();

        $transactions = ExpertTransaction::where( 'expert_id', $user->id )->orderby('id', 'desc')->latest()->paginate(5);

        return view( 'frontend.expert.payment.billing-report', compact('transactions', 'user') );
    }

    /*
     * Expert detailed onboard submit eKYC /payment/onboard
     * */
    public function onboard( Request $request )
    {
        $user = auth()->user();

        //first create stripe connect account if there is no account
        if ( $user->profile->stripe_acct_id == '' ) {
            try {
                $connected_account = $this->stripe->accounts->create( [
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
                return toast('error', $ex->getMessage(), $this);
                error_log( "An error occurred when calling the Stripe API to create an account session: {$ex->getMessage()}" );
            }
        }

        //submit new account
        if ( $request->isMethod( 'post' ) ) {
            $acct_id = $user->profile->stripe_acct_id;

            try {

                $acc_update = $this->stripe->accounts->update(
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
                    $files = $this->stripe->files->create( [
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
                    $files = $this->stripe->files->create( [
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
                    $this->stripe->files->create( [
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
                    $this->stripe->files->create( [
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

            $expert_stripe_account = $this->stripe->accounts->retrieve( $acct_id, [] );

            view()->share( 'message', $expert_stripe_account->requirements->disabled_reason );
            view()->share( 'currently_due', $expert_stripe_account->requirements->currently_due );

            return view( 'frontend.expert.payment.onboard', compact( 'user' ) );
        }

        return view( 'frontend.expert.payment.onboard', compact( 'user' ) );
    }

    /*
     * lists of withdrawal method & Add new withdrawal method /payment/withdrawal-methods
     * */
    public function withdrawalMethod( Request $request )
    {
        $user = auth()->user();

        $this->__checkStripeConnect();

        if ( $request->isMethod( 'post' ) ) {
            try {
                $bank_token = $this->stripe->tokens->create( [
                    'bank_account' => [
                        'country'             => $request->country,
                        'currency'            => $request->currency,
                        'account_holder_name' => $request->account_holder_name,
                        'account_holder_type' => $request->account_holder_type,
                        'routing_number'      => $request->routing_number,
                        'account_number'      => $request->account_number,
                    ],
                ] );
            } catch (\Stripe\Exception\InvalidRequestException $ex) {
                error_log($ex->getMessage());
                return redirect()->back()->withErrors([
                    'message' => $ex->getMessage()
                ])->withInput($request->all());
            } catch (\Exception $ex){
                error_log($ex->getMessage());
                return redirect()->back()->withErrors([
                    'message' => $ex->getMessage()
                ])->withInput($request->all());
            }

            if ( $bank_token->id ) {
                try {
                    $paymentMethod = $this->stripe->accounts->createExternalAccount(
                        $user->profile->stripe_acct_id,
                        [ 'external_account' => $bank_token->id ]
                    );
                } catch (\Stripe\Exception\InvalidRequestException $ex) {
                    error_log($ex->getMessage());
                    return redirect()->back()->withErrors([
                        'message' => $ex->getMessage()
                    ])->withInput($request->all());
                } catch (\Exception $ex){
                    error_log($ex->getMessage());
                    return redirect()->back()->withErrors([
                        'message' => $ex->getMessage()
                    ])->withInput($request->all());
                }

                if ( $paymentMethod ) {
                    return redirect()->route( 'expert.payment.withdrawal' )->with( [ 'message' => 'Bank information added successfully.' ] );
                }
            }
        }

        return view( 'frontend.expert.payment.withdrawal', compact('user') );
    }

    /*
     * Withdraw fund /payment/withdraw
     * */
    public function withdraw(Request $request)
    {
        $user = auth()->user();

        $withdrawal_methods = ExpertWithdrawal::where('user_id', $user->id)->get();

        $this->__checkStripeConnect();

        $acct_id = $user->profile->stripe_acct_id;

        $balance = $this->stripe->balance->retrieve( [], [ 'stripe_account' => $acct_id ] );

        if ( $request->isMethod( 'post' ) ) {
            $amount = $request->amount * 100;
            $reference = $request->reference;
            $save_reference = isset($request->save_reference) ? 1 : 0;

            $bank_info = ExpertWithdrawal::where('user_id', $user->id)
                                         ->where('bank_id', $request->bank_id)
                                         ->first();

            $payout = $this->stripe->payouts->create( [
//                'source_type' => 'bank_account',
                'destination' => $bank_info->bank_id,
                'amount'   => $amount,
                'currency' => $bank_info->currency,
                'description' => $reference
            ], ['stripe_account' => $acct_id] );

            try {


                return redirect()->route( 'expert.payment' )->with( [ 'message' => 'Withdraw request was successful.' ] );
            } catch (\Stripe\Exception\InvalidRequestException $ex) {
                error_log($ex->getMessage());
                return redirect()->back()->withErrors([
                    'message' => $ex->getMessage()
                ])->withInput($request->all());
            } catch (\Exception $ex){
                error_log($ex->getMessage());
                return redirect()->back()->withErrors([
                    'message' => $ex->getMessage()
                ])->withInput($request->all());
            }
        }

        return view( 'frontend.expert.payment.withdraw', compact('user', 'withdrawal_methods', 'balance') );
    }

    /*
     * Request client to release a milestone
     * */
    public function requestRelease(Request $request) {
        $user = auth()->user();

        if ( $request->isMethod( 'post' ) ) {
            //make milestone release request

        }

        return view( 'frontend.expert.payment.request_relesae', compact('user') );
    }

    /*
     * Admin will create payout
     * */
    public function payout()
    {
        $user = auth()->user();

        $this->__checkStripeConnect();

        $acct_id = $user->profile->stripe_acct_id;
//        $acct_id = 'acct_1OY1WYPniY99fxGK';

        $amount = 100 * 100; //convert to cent

        $payout = $this->stripe->payouts->create(
            [
                'amount'   => $amount,
                'currency' => 'aud',
            ],
            [ 'stripe_account' => $acct_id ]
        );

        dd( $payout );
    }

    public function refundMilestone($milestone_id) {
        $refund_amount = 100;

        //reverse already paid fund from freelancer to client
        $transfer_refund = $this->stripe->transfers->createReversal(
            'tr_1OaeGSBkKAerzo32ibZwrltw',
            ['amount' => 9000]
        );

        dd($transfer_refund);
    }


    public function refundToCustomer($milestone_id) {
        $payment_intent_id = "pi_3Oa9AnBkKAerzo320Zq0g2uK";

        $refund = $this->stripe->refunds->create([
            'payment_intent' => $payment_intent_id,
            'amount' => 10 * 100
        ]);
        dd($refund);
    }

    /*
     * temp: create account session
     * */
    public function accountSession()
    {
        $stripe = new \Stripe\StripeClient( [
            "api_key" => env( 'STRIPE_SECRET' ),
        ] );

        try {
            $account_session = $this->stripe->accountSessions->create( [
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
}
