<?php

namespace App\Http\Controllers\Webhook;

use App\Http\Controllers\Controller;
use App\Models\PaymentMethod;
use App\Models\Profile;
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

            case 'payment_method.attached':
                $paymentMethod = $event->data->object;
                $this->__paymentMethodAttached( $paymentMethod );
                break;

            case 'payment_method.detached':
                $paymentMethod = $event->data->object;
                $this->__paymentMethodDetached( $paymentMethod );
                break;

            case 'transfer.created':
                $paymentMethod = $event->data->object;
                $this->__paymentGeneric( $paymentMethod );
                break;

            case 'payment.created':
                $paymentMethod = $event->data->object;
                $this->__paymentGeneric( $paymentMethod );
                break;

            case 'balance.available':
                $paymentMethod = $event->data->object;
                $this->__paymentGeneric( $paymentMethod );
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

    private function __paymentGeneric($paymentMethod) {
        Log::info($paymentMethod);
    }

    private function __paymentMethodAttached($paymentMethod) {
        try {
            $stripe_customer_id = $paymentMethod->customer;
            $customer = Profile::where('stripe_client_id', $stripe_customer_id)->firstOrFail();
            $user_id = $customer->user_id;

            //delete users payment method if exists.
            PaymentMethod::where('user_id', $user_id)->where('fingerprint', $paymentMethod->card->fingerprint)->delete();

            //set this card as default if there is no default.
            $is_default = 0;
            if(!PaymentMethod::where('user_id',$user_id)->where('is_default', 1)->count()){
                $is_default = 1;
                $stripe = new \Stripe\StripeClient( [
                    "api_key" => env( 'STRIPE_SECRET' ),
                ] );
                $stripe->customers->update(
                    $customer->stripe_client_id,
                    ['invoice_settings' => [
                        'default_payment_method' => $paymentMethod->id]
                    ]
                );
            }

            //create or update.
            $stripe_card = PaymentMethod::updateOrCreate([
                'user_id' => $user_id,
                'fingerprint' => $paymentMethod->card->fingerprint
            ],[
                'stripe_payment_id' => $paymentMethod->id,

                'address_line1_check' => $paymentMethod->card->checks->address_line1_check,
                'address_postal_code_check' => $paymentMethod->card->checks->address_postal_code_check,
                'three_d_secure_usage' => $paymentMethod->card->three_d_secure_usage->supported,
                'cvc_check' => $paymentMethod->card->checks->cvc_check,

                'funding' => $paymentMethod->card->funding,
                'brand' => $paymentMethod->card->brand,
                'exp_month' => $paymentMethod->card->exp_month,
                'exp_year' => $paymentMethod->card->exp_year,
                'last4' => $paymentMethod->card->last4,

                'line1' => $paymentMethod->billing_details->address->line1,
                'line2' => $paymentMethod->billing_details->address->line2,
                'city' => $paymentMethod->billing_details->address->city,
                'postal_code' => $paymentMethod->billing_details->address->postal_code,
                'state' => $paymentMethod->billing_details->address->state,
                'country' => $paymentMethod->billing_details->address->country ? : $paymentMethod->card->country,

                'name' => ($paymentMethod->billing_details->name) ? : "n/a",
                'email' => $paymentMethod->billing_details->email,
                'phone' => $paymentMethod->billing_details->phone,

                'wallet' => isset($paymentMethod->card->wallet) ? $paymentMethod->card->wallet->type : null,
                'is_default' => $is_default,
                'livemode' => $paymentMethod->livemode
            ]);
        } catch (\Exception $ex){
            Log::info( $ex->getMessage() );
            http_response_code( $ex->getCode() );
            exit();
        }
        Log::info($paymentMethod);
    }

    private function __paymentReceived( $paymentData ) {
        try {
            $reference_id   = @$paymentData->metadata->reference_id; //milestone id
            $reference_type = @$paymentData->metadata->reference_type; //milestone

            //save to generic transaction table
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

            //todo: add data to client specific transaction table
            //todo: update milestone status
            //todo: send payment notification & email to Client, Expert & Admin

            Log::info( $paymentData );
        } catch ( \Exception $ex ) {
            Log::info( $ex->getMessage() );
            http_response_code( $ex->getCode() );
            exit();
        }
    }

    private function __paymentMethodDetached($paymentMethod) {
        Log::info( $paymentMethod->id);
        try {
            //delete users payment method if exists.
            PaymentMethod::where('stripe_payment_id', $paymentMethod->id)->delete();
        } catch (\Exception $ex){
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
