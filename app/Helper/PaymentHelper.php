<?php

namespace App\Helpers;

use App\Models\ClientTransaction;
use App\Models\ExpertTransaction;
use App\Models\Profile;
use Log;

class PaymentHelper {
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
