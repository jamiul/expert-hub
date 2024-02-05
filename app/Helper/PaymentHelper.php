<?php

namespace App\Helpers;

use App\Models\ClientTransaction;
use App\Models\Contract;
use App\Models\ExpertTransaction;
use App\Models\Profile;
use App\Models\User;
use Log;

class PaymentHelper {

    public static function expertRegisterToStripe( User $user ) {
        $api_key = env( 'STRIPE_SECRET' );
        $stripe  = new \Stripe\StripeClient( [
            "api_key" => $api_key,
        ] );

        $country = $user->country->code;

        if ( $user->profile->stripe_acct_id == '' ) {
            try {
                $url     = route( 'expert.profile.show', $user->profile );
                //todo: only for local use, while moving to live, change it
                $url = 'http://test.eduexperthub.com';

                $connected_account = $stripe->accounts->create( [
                    'country'          => $country,
                    'type'             => 'custom',
                    'capabilities'     => [
                        'card_payments' => [ 'requested' => true ],
                        'transfers'     => [ 'requested' => true ],
                    ],
                    'business_type'    => 'individual',
                    'business_profile' => [
                        'mcc' => '5734',
                        'url' => $url
                    ],
                    'email'            => $user->email,
                    'individual'       => [
                        'first_name' => $user->first_name,
                        'last_name'  => $user->last_name,
                        'email'      => $user->email,
                        'address' => [
                            'city'        => $user->expert_kyc->individual_registered_address_city,
                            'line1'       => $user->expert_kyc->individual_registered_address_line1,
                            'line2'       => $user->expert_kyc->individual_registered_address_line2,
                            'postal_code' => $user->expert_kyc->individual_registered_address_postal_code,
                            'state'       => $user->expert_kyc->individual_registered_address_state,
                        ],
                        'dob'     => [
                            'day'   => date( 'd', strtotime( $user->expert_kyc->individual_dob ) ),
                            'month' => date( 'm', strtotime( $user->expert_kyc->individual_dob ) ),
                            'year'  => date( 'Y', strtotime( $user->expert_kyc->individual_dob ) )
                        ]
                    ],
                    'tos_acceptance'   => [
                        'ip'   => \Request::ip(),
                        'date' => now()->timestamp
                    ],
                    'settings'         => [
                        'payouts' => [
                            'schedule'             => [ 'interval' => 'manual' ],
                            'statement_descriptor' => 'EduExHub'
                        ]
                    ],
                    'metadata' => [
                        'user_id' => $user->id,
                        'profile_id' => $user->profile->id
                    ]
                ] );

                $profile                 = $user->profile;
                $profile->stripe_acct_id = $connected_account->id;
                $profile->save();
            } catch ( \Exception $ex ) {
                return [
                    'status' => false,
                    'message' => $ex->getMessage()
                ];
                error_log( "An error occurred when calling the Stripe API to create an account session: {$ex->getMessage()}" );
            }
        }
    }

    public static function calculateMilestoneCharge( $milestone_amount, $client_id = null, $expert_id = null ) {
        $service_charge = ( $milestone_amount * env( 'SERVICE_CHARGE' ) ) / 100;

        //todo: check if its first milestone for a contact that Expert and Client, if yes, add 3$ contract initialization fee
        $contract_initialization_fee = env( 'CONTRACT_INITIALIZATION_FEE' );
//        if($client_id && $expert_id){
//            $contract_count = Contract::where('client_id', $client_id)->where('expert_id', $expert_id)->count();
//            if($contract_count > 0 ){
//                $contract_initialization_fee = 0;
//            } else {
//                $contract_initialization_fee = env( 'CONTRACT_INITIALIZATION_FEE' );
//            }
//        }

        $net_total           = $milestone_amount + $service_charge + $contract_initialization_fee;
        $payment_gateway_fee = ( ( $net_total ) * env( 'PAYMENT_GATEWAY_FEE' ) ) / 100;
        $gst                 = ( ( $service_charge + $contract_initialization_fee - $payment_gateway_fee) * env( 'GST' ) ) / 100;

        $gross_total = $net_total + $gst + $payment_gateway_fee;

        return [
            'milestone_amount'            => $milestone_amount,
            'service_charge'              => $service_charge,
            'contract_initialization_fee' => $contract_initialization_fee,
            'gst'                         => $gst,
            'payment_gateway_fee'         => $payment_gateway_fee,
            'total_amount'                => $gross_total,
        ];
    }

    public static function calculateExpertCharge($milestone_amount) {
        $service_charge = ( $milestone_amount * env( 'EXPERT_SERVICE_CHARGE' ) ) / 100;
        $net_total           = $milestone_amount - $service_charge;
        $gross_total = $net_total + $service_charge;

        return [
            'milestone_amount'            => $milestone_amount,
            'service_charge'              => $service_charge,
            'net_total'              => $net_total,
            'total_amount'                => $gross_total
        ];
    }

    public static function createClientTransaction( $transaction_data ) {

        $profile = Profile::find( $transaction_data['client_id'] );

        if ( $transaction_data['charge_type'] == 'debit' ) {
            $balance = $profile->balance - $transaction_data['amount'];
        } else {
            $balance = $profile->balance + $transaction_data['amount'];
        }

        Profile::find( $transaction_data['client_id'] )->update( [
            'balance' => $balance
        ] );

        if ( $transaction_data['type'] == 'Fixed Price' && $transaction_data['charge_type'] == 'debit' ) {
            $escrow_balance = $profile->escrow_balance + $transaction_data['amount'];
            Profile::find( $transaction_data['client_id'] )->update( [
                'escrow_balance' => $escrow_balance
            ] );
        }

        return ClientTransaction::create( [
            'transaction_id' => $transaction_data['transaction_id'],
            'milestone_id'   => $transaction_data['milestone_id'],
            'type'           => $transaction_data['type'],
            'description'    => $transaction_data['description'],
            'client_id'      => $transaction_data['client_id'],
            'expert_id'      => $transaction_data['expert_id'],
            'amount'         => $transaction_data['amount'],
            'balance'        => $balance,
            'charge_type'    => $transaction_data['charge_type'],
            'parent'         => $transaction_data['parent'],
            'status'         => $transaction_data['status'],
        ] );

    }

    public static function createExpertTransaction( $transaction_data ) {
        $profile        = Profile::find( $transaction_data['expert_id'] );
        $balance        = $profile->balance;
        $escrow_balance = $profile->escrow_balance;

        if ( $transaction_data['status'] ) {
            if ( $transaction_data['charge_type'] == 'credit' ) {
                $balance += $transaction_data['amount'];
            } else {
                $balance -= $transaction_data['amount'];
            }
            Profile::find( $transaction_data['expert_id'] )->update( [
                'balance' => $balance
            ] );

            //remove fund from pending balance
            if ( $transaction_data['type'] == 'Fixed Price' && $transaction_data['charge_type'] == 'credit' ) {
                $escrow_balance -= $transaction_data['amount'];
                Profile::find( $transaction_data['expert_id'] )->update( [
                    'escrow_balance' => $escrow_balance
                ] );
            }
        } else {
            if ( $transaction_data['type'] == 'Fixed Price' && $transaction_data['charge_type'] == 'credit' ) {
                $escrow_balance += $transaction_data['amount'];
                Profile::find( $transaction_data['expert_id'] )->update( [
                    'escrow_balance' => $escrow_balance
                ] );
            }
        }

        return ExpertTransaction::create( [
            'transaction_id' => $transaction_data['transaction_id'],
            'milestone_id'   => $transaction_data['milestone_id'],
            'type'           => $transaction_data['type'],
            'description'    => $transaction_data['description'],
            'client_id'      => $transaction_data['client_id'],
            'expert_id'      => $transaction_data['expert_id'],
            'amount'         => $transaction_data['amount'],
            'balance'        => $balance,
            'charge_type'    => $transaction_data['charge_type'],
            'parent'         => $transaction_data['parent'],
            'status'         => $transaction_data['status'],
        ] );
    }
}
