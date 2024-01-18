<?php

namespace App\Http\Controllers\Webhook;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Log;

class StripeController extends Controller {
    public function receiveWebhook( Request $request ) {
        \Stripe\Stripe::setApiKey( env( 'STRIPE_SECRET' ) );

        $endpoint_secret = env( 'STRIPE_WEBHOOK_SECRET' );
        $sig_header      = $_SERVER['HTTP_STRIPE_SIGNATURE'];

        $payload = @file_get_contents( 'php://input' );

        $event = null;
        try {
            $event = \Stripe\Webhook::constructEvent(
                $payload, $sig_header, $endpoint_secret
            );
        } catch ( \UnexpectedValueException $e ) {
            http_response_code( 400 );
            exit();
        } catch ( \Stripe\Exception\SignatureVerificationException $e ) {
            http_response_code( 400 );
            exit();
        }
        switch ( $event->type ) {
            case 'payment_intent.succeeded':
                $paymentData = $event->data->object;
                $this->__paymentReceived( $paymentData );
                break;
            case 'account.application.authorized':
                $this->__handleApplicationAuthorized( $event );
                break;
            default:
                echo 'Received unknown event type ' . $event->type;
        }
        http_response_code( 200 );
    }

    public function receiveConnectWebhook( Request $request ) {
        \Stripe\Stripe::setApiKey( env( 'STRIPE_SECRET' ) );

        $endpoint_secret = env( 'STRIPE_WEBHOOK_SECRET' );
        $sig_header      = $_SERVER['HTTP_STRIPE_SIGNATURE'];

        $payload = @file_get_contents( 'php://input' );

        $event = null;
        try {
            $event = \Stripe\Webhook::constructEvent(
                $payload, $sig_header, $endpoint_secret
            );
            Log::info( $event );
        } catch ( \UnexpectedValueException $e ) {
            http_response_code( 400 );
            exit();
        } catch ( \Stripe\Exception\SignatureVerificationException $e ) {
            http_response_code( 400 );
            exit();
        }
        switch ( $event->type ) {
            case 'account.application.authorized':
                $this->__handleApplicationAuthorized( $event );
                break;
            default:
                echo 'Received unknown event type ' . $event->type;
        }
        http_response_code( 200 );
    }

    public function testWebhook() {

    }

    private function __paymentReceived( $paymentData ) {
        try {
            $reference_id   = @$paymentData->metadata->reference_id;
            $reference_type = @$paymentData->metadata->reference_type;
            Transaction::updateOrCreate( [
                'payment_intent_id' => $paymentData->id
            ], [
                'reference_id'           => $reference_id,
                'reference_type'         => $reference_type,
                'object'                 => $paymentData->object,
                'amount'                 => $paymentData->amount,
                'amount_capturable'      => $paymentData->amount_capturable,
                'amount_received'        => $paymentData->amount_received,
                'application_fee_amount' => $paymentData->application_fee_amount,
                'currency'               => $paymentData->currency,
                'customer_id'            => $paymentData->customer_id,
                'description'            => $paymentData->description,
                'latest_charge_id'       => $paymentData->latest_charge_id,
                'on_behalf_of'           => $paymentData->on_behalf_of,
                'payment_method'         => $paymentData->payment_method,
                'payment_method_types'   => @$paymentData->payment_method_types[0],
                'transfer_group'         => $paymentData->transfer_group,
                'metadata'               => json_encode( $paymentData->metadata ),
                'created_time'           => $paymentData->created ? Carbon::createFromTimestamp($paymentData->created)->format('Y-m-d H:i:s') : null,
                'canceled_at'            => $paymentData->canceled_at ? Carbon::createFromTimestamp($paymentData->canceled_at)->format('Y-m-d H:i:s') : null,
                'cancellation_reason'    => $paymentData->cancellation_reason,
                'status'                 => $paymentData->status,
                'livemode'               => $paymentData->livemode
            ] );

            Log::info( $paymentData );
        } catch ( \Exception $ex ) {
            Log::info( $ex->getMessage() );
            http_response_code( $ex->getCode() );
            exit();
        }
    }

    private function __handleApplicationAuthorized( $account ) {
        try {
            if ( ! empty( $account->account ) ) {
                $stripe          = new \Stripe\StripeClient( env( 'STRIPE_SECRET' ) );
                $connect_account = $stripe->accounts->retrieve( $account->account,
                    []
                );
                Log::info( $connect_account );
//                date('Y-m-d H:i:s', $connect_account->created)
            }
        } catch ( \Exception $ex ) {
            echo $ex->getMessage();
            http_response_code( $ex->getCode() );
            exit();
        }
    }
}
