<?php

namespace App\Helpers;

use App\Models\ClientTransaction;

class PaymentHelper {
    public static function calculateMilestoneCharge( $milestone_amount ) {
        $service_charge = ( 100 * env( 'SERVICE_CHARGE' ) ) / 100;

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
        return ClientTransaction::create( [
            'transaction_id' => $transaction_data['transaction_id'],
            'milestone_id'   => $transaction_data['milestone_id'],
            'type'           => $transaction_data['type'],
            'description'    => $transaction_data['description'],
            'user_id'        => $transaction_data['user_id'],
            'amount'         => $transaction_data['amount'],
            'charge_type'    => $transaction_data['charge_type'],
            'parent'         => $transaction_data['parent'],
            'status'         => $transaction_data['status'],
        ] );
    }
}
