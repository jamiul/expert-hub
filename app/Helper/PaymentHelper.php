<?php

namespace App\Helpers;

use App\Models\ClientTransaction;
use App\Models\ExpertTransaction;
use App\Models\Profile;
use App\Models\User;
use Log;

class PaymentHelper {

    public static function expertRegisterToStripe( User $user ) {
        if ( $user->profile->stripe_acct_id == '' ) {
            try {
                $api_key = env( 'STRIPE_SECRET' );
                $stripe  = new \Stripe\StripeClient( [
                    "api_key" => $api_key,
                ] );

                $country = $user->country->code;
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
                        'email'      => $user->email
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
                    ]
                ] );

                $profile                 = Profile::where( 'user_id', $user->id )->first();
                $profile->stripe_acct_id = $connected_account->id;
                $profile->save();
            } catch ( \Exception $ex ) {
                error_log( "An error occurred when calling the Stripe API to create an account session: {$ex->getMessage()}" );
            }
        }
    }

    public static function calculateMilestoneCharge( $milestone_amount ) {
        $service_charge = ( $milestone_amount * env( 'SERVICE_CHARGE' ) ) / 100;

        //todo: check if its first contact for that Expert and Client, if yes, add 3$ contract initialization fee
        $contract_initialization_fee = env( 'CONTRACT_INITIALIZATION_FEE' );

        $net_total           = $milestone_amount + $service_charge + $contract_initialization_fee;
        $gst                 = ( $service_charge * env( 'GST' ) ) / 100;
        $payment_gateway_fee = ( ( $net_total + $gst ) * env( 'PAYMENT_GATEWAY_FEE' ) ) / 100;

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
