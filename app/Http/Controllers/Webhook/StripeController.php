<?php

namespace App\Http\Controllers\Webhook;

use App\Enums\MilestoneStatus;
use App\Enums\OfferStatus;
use App\Helpers\PaymentHelper;
use App\Http\Controllers\Controller;
use App\Models\ClientTransaction;
use App\Models\ExpertKYC;
use App\Models\ExpertPayout;
use App\Models\ExpertTransaction;
use App\Models\ExpertWithdrawal;
use App\Models\Milestone;
use App\Models\Offer;
use App\Models\PaymentMethod;
use App\Models\Profile;
use App\Models\Transaction;
use App\Models\User;
use App\Notifications\PaymentNotification;
use App\Notifications\SendOfferNotification;
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

            case 'charge.refunded': //refund to client if theres any refund request
                $charge = $event->data->object;
                $this->__chargeRefund( $charge );
                break;

            //============= CONNECT WEBHOOKS ==============//
            case 'account.application.authorized':
                $this->__handleApplicationAuthorized( $event );
                break;
            case 'account.application.deauthorized': //Occurs when a user disconnects from your account and can be used to trigger required cleanup on your server.
                $this->__handleApplicationDeauthorized( $event );
                break;

            case 'account.external_account.created':
                $paymentMethod = $event->data->object;
                $this->__externalAccountCreated( $paymentMethod );
                break;

            case 'account.external_account.updated': //Occurs when a bank account or debit card attached to a connected account is updated, which can impact payouts.
                $paymentMethod = $event->data->object;
                $this->__externalAccountUpdated( $paymentMethod );
                break;

            case 'account.external_account.deleted':
                $paymentMethod = $event->data->object;
                $this->__externalAccountDeleted( $paymentMethod );
                break;

            case 'account.updated': //Allows you to monitor changes to connected account requirements and status changes.
                $account = $event->data->object;
                $this->__accountUpdated($account);
                break;

            case 'balance.available': //Occurs when your Stripe balance has been updated (for example, when funds you’ve added from your bank account are available for transfer to your connected account).
                $paymentMethod = $event->data->object;
                $this->__paymentGeneric( $paymentMethod );
                break;

            case 'person.created': //connect account status update
                $account = $event->data->object;
                $this->__personCreated($account);
                break;

            case 'person.updated': //connect account status update
                $account = $event->data->object;
                $this->__personCreated($account);
                break;

            case 'payout.created': //payout to expert's external bank account created
                $payout = $event->data->object;
                $this->__payoutCreated( $payout );
                break;

            case 'payout.updated': //payout to expert's external bank account status updated
                $payout = $event->data->object;
                $this->__payoutUpdated( $payout );
                break;

            case 'payout.failed': //payout to expert's external bank account failed
                $payout = $event->data->object;
                $this->__payoutFailed( $payout );
                break;

            case 'payout.paid': //payout to expert's external bank account success
                $payout = $event->data->object;
                $this->__payoutPaid( $payout );
                break;

            case 'payment.created':
                $transfer = $event->data->object;
                $this->__paymentGeneric( $transfer );
                break;

            case 'transfer.created': //when money transferred to expert's stripe account
                $paymentMethod = $event->data->object;
                $this->__transferCreated( $paymentMethod );
                break;

            case 'transfer.reversed': //admin reveresed already transferred amount from expert's stripe account
                $transfer = $event->data->object;
                $this->__transferReversed( $transfer );
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

    /*
     * after any debit / credit occurs balance updated
     * */
    private function __paymentGeneric( $paymentMethod ) {
        Log::info($paymentMethod);
        try {

        } catch (\Exception $ex){
            echo $ex->getMessage();
            http_response_code( $ex->getCode() );
            exit();
        }
    }

    private function __paymentReceived( $paymentData ) {
        try {
            $reference_id   = @$paymentData->metadata->reference_id; //milestone id
            $reference_type = @$paymentData->metadata->reference_type; //milestone
            $contract_type  = @$paymentData->metadata->contract_type; //offer/contract
            $contract_id    = @$paymentData->metadata->contract_id; //offer_id
            $client_id      = @$paymentData->metadata->client_id; //client_id
            $expert_id      = @$paymentData->metadata->expert_id; //expert_id

            //save to generic transaction table
            $stripe_transaction = Transaction::updateOrCreate( [
                'charge_id' => $paymentData->latest_charge
            ], [
                'payment_intent_id'      => $paymentData->id,
                'reference_id'           => json_encode( $reference_id ),
                'reference_type'         => $reference_type,
                'object'                 => $paymentData->object,
                'amount'                 => $paymentData->amount,
                'amount_capturable'      => $paymentData->amount_capturable,
                'amount_received'        => $paymentData->amount_received,
                'application_fee_amount' => $paymentData->application_fee_amount,
                'currency'               => $paymentData->currency,
                'customer_id'            => $paymentData->customer,
                'description'            => $paymentData->description,
                'latest_charge_id'       => $paymentData->latest_charge_id,
                'on_behalf_of'           => $paymentData->on_behalf_of,
                'payment_method'         => $paymentData->payment_method,
                'payment_method_types'   => @$paymentData->payment_method_types[0],
                'transfer_group'         => $paymentData->transfer_group,
                'metadata'               => json_encode( $paymentData->metadata ),
                'created_time'           => $paymentData->created ? Carbon::createFromTimestamp( $paymentData->created )->format( 'Y-m-d H:i:s' ) : null,
                'canceled_at'            => $paymentData->canceled_at ? Carbon::createFromTimestamp( $paymentData->canceled_at )->format( 'Y-m-d H:i:s' ) : null,
                'cancellation_reason'    => $paymentData->cancellation_reason,
                'status'                 => $paymentData->status,
                'livemode'               => $paymentData->livemode
            ] );

            //update offer status based on payment = pending / not accepted
            if ( $contract_type == 'offer' ) {
                $offer         = Offer::find( $contract_id );
                $offer->status = OfferStatus::Pending;
                $offer->save();
                $conversation = createConversation(
                    $offer->client,
                    $offer->expert,
                    $offer->client->user->full_name . ' Sent an offer for ' . $offer->contract_title,
                    $offer->project
                );
                $offer->expert->user->notify(new SendOfferNotification($offer));
            }

            //save to client transaction table
            if ( $reference_type == 'milestone' ) {
                foreach ( json_decode( $reference_id ) as $ref_id ) {
                    //update milestone status to funded.
                    $milestone         = Milestone::find( $ref_id );
                    $milestone->status = MilestoneStatus::Funded;
                    $milestone->save();

                    $milestone_amount = $milestone->amount;;

                    //breakdown charge into pieces
                    $charge  = PaymentHelper::calculateMilestoneCharge( $milestone_amount, $offer->client_id, $offer->expert_id );
                    $profile = Profile::where( 'stripe_client_id', $paymentData->customer )->first();

                    //parent transaction - credit card charge
                    $transaction_data = [
                        'transaction_id' => $stripe_transaction->id,
                        'milestone_id'   => $ref_id,
                        'type'           => 'Payment',
                        'description'    => "Paid from Visa 0077 to escrow for funding request",
                        'client_id'      => $client_id,
                        'expert_id'      => null,
                        'amount'         => ( $paymentData->amount / 100 ),
                        'charge_type'    => 'credit',
                        'parent'         => null,
                        'status'         => ( $paymentData->status == 'succeeded' ) ? 1 : 0
                    ];
                    $transaction      = PaymentHelper::createClientTransaction( $transaction_data );
                    $parent_id = $transaction->id;

                    //escrow transaction
                    $transaction_data = [
                        'transaction_id' => $stripe_transaction->id,
                        'milestone_id'   => $ref_id,
                        'type'           => 'Fixed Price',
                        'description'    => "Funding request for " . $milestone->title,
                        'client_id'      => $client_id,
                        'expert_id'      => $expert_id,
                        'amount'         => $milestone_amount,
                        'charge_type'    => 'debit',
                        'parent'         => $parent_id,
                        'status'         => ( $paymentData->status == 'succeeded' ) ? 1 : 0
                    ];
                    $transaction      = PaymentHelper::createClientTransaction( $transaction_data );

                    //service fee transaction
                    $service_fee      = $charge['service_charge'];
                    $transaction_data = [
                        'transaction_id' => $stripe_transaction->id,
                        'milestone_id'   => $ref_id,
                        'type'           => 'Service Fee',
                        'description'    => "Funding request for Fixed Price - Ref ID $parent_id",
                        'client_id'      => $client_id,
                        'expert_id'      => $expert_id,
                        'amount'         => $service_fee,
                        'charge_type'    => 'debit',
                        'parent'         => $parent_id,
                        'status'         => ( $paymentData->status == 'succeeded' ) ? 1 : 0
                    ];
                    PaymentHelper::createClientTransaction( $transaction_data );

                    //contract initialization fee transaction
                    if ( $charge['contract_initialization_fee'] > 0 ) {
                        $contract_initialization_fee = $charge['contract_initialization_fee'];
                        $transaction_data            = [
                            'transaction_id' => $stripe_transaction->id,
                            'milestone_id'   => $ref_id,
                            'type'           => 'Contract Initialization Fee',
                            'description'    => "Contract Initialization Fee for Fixed Price - Ref ID $parent_id",
                            'client_id'      => $profile->user_id,
                            'expert_id'      => $expert_id,
                            'amount'         => $contract_initialization_fee,
                            'charge_type'    => 'debit',
                            'parent'         => $parent_id,
                            'status'         => ( $paymentData->status == 'succeeded' ) ? 1 : 0
                        ];
                        PaymentHelper::createClientTransaction( $transaction_data );
                    }

                    //payment gateway fee transaction
//                    $gateway_fee      = $charge['payment_gateway_fee'];
//                    $transaction_data = [
//                        'transaction_id' => $stripe_transaction->id,
//                        'milestone_id'   => $ref_id,
//                        'type'           => 'Payment Gateway Fee',
//                        'description'    => "Payment Gateway Fee for Fixed Price - Ref ID $stripe_transaction->id",
//                        'client_id'      => $profile->user_id,
//                        'expert_id'      => $expert_id,
//                        'amount'         => $gateway_fee,
//                        'charge_type'    => 'debit',
//                        'parent'         => $stripe_transaction->id,
//                        'status'         => ( $paymentData->status == 'succeeded' ) ? 1 : 0
//                    ];
//                    PaymentHelper::createClientTransaction( $transaction_data );

                    //gst transaction
                    $gst              = $charge['gst'];
                    $transaction_data = [
                        'transaction_id' => $stripe_transaction->id,
                        'milestone_id'   => $ref_id,
                        'type'           => 'GST',
                        'description'    => "GST for Fixed Price - Ref ID $parent_id",
                        'client_id'      => $profile->user_id,
                        'expert_id'      => $expert_id,
                        'amount'         => $gst,
                        'charge_type'    => 'debit',
                        'parent'         => $parent_id,
                        'status'         => ( $paymentData->status == 'succeeded' ) ? 1 : 0
                    ];
                    PaymentHelper::createClientTransaction( $transaction_data );
                }
            }

            //todo: send payment notification & email to Client, Expert & Admin
            $client = User::find( $client_id );
            $client->notify( new PaymentNotification( [
                'title'   => "Card charged",
                'message' => "Your credit card been charged " . $paymentData->amount / 100 . ' ' . $paymentData->currency,
                'link'    => route( 'client.payment.billing' ),
                'button'  => 'View Details',
                'avatar'  => asset( '/assets/frontend/img/fixed.png' ),
            ] ) );

        } catch ( \Exception $ex ) {
            echo $ex->getMessage();
            http_response_code( $ex->getCode() );
            exit();
        }
    }

    private function __paymentMethodAttached( $paymentMethod ) {
        try {
            $stripe_customer_id = $paymentMethod->customer;
            $customer           = Profile::where( 'stripe_client_id', $stripe_customer_id )->firstOrFail();
            $user_id            = $customer->user_id;

            //delete users payment method if exists.
            PaymentMethod::where( 'user_id', $user_id )->where( 'fingerprint', $paymentMethod->card->fingerprint )->delete();

            //set this card as default if there is no default.
            $is_default = 0;
            if ( ! PaymentMethod::where( 'user_id', $user_id )->where( 'is_default', 1 )->count() ) {
                $is_default = 1;
                $stripe     = new \Stripe\StripeClient( [
                    "api_key" => env( 'STRIPE_SECRET' ),
                ] );
                $stripe->customers->update(
                    $customer->stripe_client_id,
                    [
                        'invoice_settings' => [
                            'default_payment_method' => $paymentMethod->id
                        ]
                    ]
                );
            }

            //create or update.
            $stripe_card = PaymentMethod::updateOrCreate( [
                'user_id'     => $user_id,
                'fingerprint' => $paymentMethod->card->fingerprint
            ], [
                'stripe_payment_id' => $paymentMethod->id,

                'address_line1_check'       => $paymentMethod->card->checks->address_line1_check,
                'address_postal_code_check' => $paymentMethod->card->checks->address_postal_code_check,
                'three_d_secure_usage'      => $paymentMethod->card->three_d_secure_usage->supported,
                'cvc_check'                 => $paymentMethod->card->checks->cvc_check,

                'funding'   => $paymentMethod->card->funding,
                'brand'     => $paymentMethod->card->brand,
                'exp_month' => $paymentMethod->card->exp_month,
                'exp_year'  => $paymentMethod->card->exp_year,
                'last4'     => $paymentMethod->card->last4,

                'line1'       => $paymentMethod->billing_details->address->line1,
                'line2'       => $paymentMethod->billing_details->address->line2,
                'city'        => $paymentMethod->billing_details->address->city,
                'postal_code' => $paymentMethod->billing_details->address->postal_code,
                'state'       => $paymentMethod->billing_details->address->state,
                'country'     => $paymentMethod->billing_details->address->country ?: $paymentMethod->card->country,

                'name'  => ( $paymentMethod->billing_details->name ) ?: "n/a",
                'email' => $paymentMethod->billing_details->email,
                'phone' => $paymentMethod->billing_details->phone,

                'wallet'     => isset( $paymentMethod->card->wallet ) ? $paymentMethod->card->wallet->type : null,
                'is_default' => $is_default,
                'livemode'   => $paymentMethod->livemode
            ] );


        } catch ( \Exception $ex ) {
            echo $ex->getMessage();
            http_response_code( $ex->getCode() );
            exit();
        }
    }

    private function __paymentMethodDetached( $paymentMethod ) {
        try {
            //delete users payment method if exists.
            PaymentMethod::where( 'stripe_payment_id', $paymentMethod->id )->delete();
        } catch ( \Exception $ex ) {
            echo $ex->getMessage();
            http_response_code( $ex->getCode() );
            exit();
        }
    }

    private function __chargeRefund( $paymentData ) {
        try {
            $stripe_transaction = Transaction::updateOrCreate( [
                'charge_id' => $paymentData->id
            ], [
                'payment_intent_id'      => $paymentData->payment_intent,
                'object'                 => $paymentData->object,
                'amount'                 => $paymentData->amount,
                'amount_captured'        => $paymentData->amount_captured,
                'amount_refunded'        => $paymentData->amount_refunded,
                'application_fee_amount' => $paymentData->application_fee_amount,
                'currency'               => $paymentData->currency,
                'customer_id'            => $paymentData->customer,
                'description'            => $paymentData->description,
                'latest_charge_id'       => $paymentData->latest_charge_id,
                'on_behalf_of'           => $paymentData->on_behalf_of,
                'payment_method'         => $paymentData->payment_method,
                'payment_method_types'   => @$paymentData->payment_method_types[0],
                'transfer_group'         => $paymentData->transfer_group,
                'metadata'               => json_encode( $paymentData->metadata ),
                'created_time'           => $paymentData->created ? Carbon::createFromTimestamp( $paymentData->created )->format( 'Y-m-d H:i:s' ) : null,
                'canceled_at'            => $paymentData->canceled_at ? Carbon::createFromTimestamp( $paymentData->canceled_at )->format( 'Y-m-d H:i:s' ) : null,
                'cancellation_reason'    => $paymentData->cancellation_reason,
                'refunded'               => $paymentData->refunded,
                'status'                 => $paymentData->status,
                'livemode'               => $paymentData->livemode
            ] );
        } catch (\Exception $ex){
            echo $ex->getMessage();
            http_response_code( $ex->getCode() );
            exit();
        }
    }

    /*
     * connect webhooks
     * */

    private function __accountUpdated($account) {
        Log::info($account);
        try {

        } catch (\Exception $ex){
            echo $ex->getMessage();
            http_response_code( $ex->getCode() );
            exit();
        }
    }

    private function __externalAccountCreated( $paymentMethod ) {
        try {
            $stripe_customer_id = $paymentMethod->account;
            $customer           = Profile::where( 'stripe_acct_id', $stripe_customer_id )->firstOrFail();
            $user_id            = $customer->user_id;

            //delete users payment method if exists.
            ExpertWithdrawal::where( 'user_id', $user_id )->where( 'fingerprint', $paymentMethod->fingerprint )->delete();

            $is_default = 0;
            if ( ! ExpertWithdrawal::where( 'user_id', $user_id )->where( 'is_default', 1 )->count() ) {
                $is_default = 1;
            }

            ExpertWithdrawal::updateOrCreate( [
                'user_id'     => $user_id,
                'fingerprint' => $paymentMethod->fingerprint
            ], [
                'source_type'         => $paymentMethod->object,
                'bank_id'             => $paymentMethod->id,
                'account_holder_name' => $paymentMethod->account_holder_name,
                'account_holder_type' => $paymentMethod->account_holder_type,
                'account_type'        => $paymentMethod->account_type,
                'bank_name'           => $paymentMethod->bank_name,
                'country'             => $paymentMethod->country,
                'currency'            => $paymentMethod->currency,
                'last4'               => $paymentMethod->last4,
                'routing_number'      => $paymentMethod->routing_number,
                'is_default'          => $is_default,
                'status'              => $paymentMethod->status
            ] );
        } catch ( \Exception $ex ) {
            echo $ex->getMessage();
            http_response_code( $ex->getCode() );
            exit();
        }
    }

    private function __externalAccountUpdated( $paymentMethod ) {
        try {
            $stripe_customer_id = $paymentMethod->account;
            $customer           = Profile::where( 'stripe_acct_id', $stripe_customer_id )->firstOrFail();
            $user_id            = $customer->user_id;

            //delete users payment method if exists.
            ExpertWithdrawal::where( 'user_id', $user_id )->where( 'fingerprint', $paymentMethod->fingerprint )->delete();

            $is_default = 0;
            if ( ! ExpertWithdrawal::where( 'user_id', $user_id )->where( 'is_default', 1 )->count() ) {
                $is_default = 1;
            }

            ExpertWithdrawal::updateOrCreate( [
                'user_id'     => $user_id,
                'fingerprint' => $paymentMethod->fingerprint
            ], [
                'source_type'         => $paymentMethod->object,
                'bank_id'             => $paymentMethod->id,
                'account_holder_name' => $paymentMethod->account_holder_name,
                'account_holder_type' => $paymentMethod->account_holder_type,
                'account_type'        => $paymentMethod->account_type,
                'bank_name'           => $paymentMethod->bank_name,
                'country'             => $paymentMethod->country,
                'currency'            => $paymentMethod->currency,
                'last4'               => $paymentMethod->last4,
                'routing_number'      => $paymentMethod->routing_number,
                'is_default'          => $is_default,
                'status'              => $paymentMethod->status
            ] );
        } catch ( \Exception $ex ) {
            echo $ex->getMessage();
            http_response_code( $ex->getCode() );
            exit();
        }
    }

    private function __externalAccountDeleted( $paymentMethod ) {
        try {
            ExpertWithdrawal::where( 'bank_id', $paymentMethod->id )->delete();
        } catch ( \Exception $ex ) {
            echo $ex->getMessage();
            http_response_code( $ex->getCode() );
            exit();
        }
    }

    /*
     * payout to expert's external bank account created
     * */
    private function __payoutCreated( $payout ) {
        try {
            $destination_id   = $payout->destination;
            $withdrawalMethod = ExpertWithdrawal::where( 'bank_id', $destination_id )->firstOrFail();
            $user_id          = $withdrawalMethod->user_id;

            $expertpayout = ExpertPayout::updateOrCreate( [
                'payout_id' => $payout->id
            ], [
                'user_id'             => $user_id,
                'amount'              => $payout->amount,
                'arrival_date'        => $payout->created ? Carbon::createFromTimestamp( $payout->arrival_date )->format( 'Y-m-d' ) : null,
                'balance_transaction' => $payout->balance_transaction,
                'currency'            => $payout->currency,
                'description'         => $payout->description,
                'destination_id'      => $payout->destination,
                'method'              => $payout->method,
                'type'                => $payout->type,
                'status'              => $payout->status
            ] );

            //save transaction for expert
            $transaction_data = [
                'transaction_id' => $expertpayout->id,
                'milestone_id'   => null,
                'type'           => 'Withdrawal',
                'description'    => "Wire Transfer ($payout->currency) xxxx-$withdrawalMethod->last4",
                'client_id'      => null,
                'expert_id'      => $user_id,
                'amount'         => $payout->amount / 100,
                'charge_type'    => 'debit',
                'parent'         => null,
                'status'         => ( $payout->status == 'paid' ) ? 1 : 0
            ];
            $transaction      = PaymentHelper::createExpertTransaction( $transaction_data );

            //send notification
            $user = User::find( $user_id );
            $user->notify( new PaymentNotification( [
                'title'   => "Withdrawal request " . $payout->status,
                'message' => "Your recent withdraw request of amount " . $payout->amount / 100 . ' ' . $payout->currency . ' to your bank xxxx-' . $withdrawalMethod->last4 . ' was ' . $payout->status,
                'link'    => route( 'expert.payment.withdraw' ),
                'button'  => 'Make another withdraw',
                'avatar'  => asset( '/assets/frontend/img/fixed.png' ),
            ] ) );
        } catch ( \Exception $ex ) {
            echo $ex->getMessage();
            http_response_code( $ex->getCode() );
            exit();
        }
    }

    /*
     * payout to expert's external bank account status updated
     * */
    private function __payoutUpdated( $payout ) {
        try {
            $destination_id   = $payout->destination;
            $withdrawalMethod = ExpertWithdrawal::where( 'bank_id', $destination_id )->firstOrFail();
            $user_id          = $withdrawalMethod->user_id;

            ExpertPayout::updateOrCreate( [
                'payout_id' => $payout->id
            ], [
                'user_id'             => $user_id,
                'amount'              => $payout->amount,
                'arrival_date'        => $payout->created ? Carbon::createFromTimestamp( $payout->arrival_date )->format( 'Y-m-d' ) : null,
                'balance_transaction' => $payout->balance_transaction,
                'currency'            => $payout->currency,
                'description'         => $payout->description,
                'destination_id'      => $payout->destination,
                'method'              => $payout->method,
                'type'                => $payout->type,
                'status'              => $payout->status
            ] );

            //save transaction for expert
            ClientTransaction::where( 'transaction_id', $payout->id )->update( [
                'status' => ( $payout->status == 'paid' ) ? 1 : 0
            ] );

            //send notification
            $user = User::find( $user_id );
            $user->notify( new PaymentNotification( [
                'title'   => "Withdrawal request " . $payout->status,
                'message' => "Your recent withdraw request of amount " . $payout->amount / 100 . ' ' . $payout->currency . ' to your bank xxxx-' . $withdrawalMethod->last4 . ' was ' . $payout->status,
                'link'    => route( 'expert.payment.withdraw' ),
                'button'  => 'Make another withdraw',
                'avatar'  => asset( '/assets/frontend/img/fixed.png' ),
            ] ) );
        } catch ( \Exception $ex ) {
            echo $ex->getMessage();
            http_response_code( $ex->getCode() );
            exit();
        }
    }

    /*
     * payout to expert's external bank account failed
     * */
    private function __payoutFailed( $payout ) {
        try {
            $destination_id   = $payout->destination;
            $withdrawalMethod = ExpertWithdrawal::where( 'bank_id', $destination_id )->firstOrFail();
            $user_id          = $withdrawalMethod->user_id;

            ExpertPayout::updateOrCreate( [
                'payout_id' => $payout->id
            ], [
                'user_id'             => $user_id,
                'amount'              => $payout->amount,
                'arrival_date'        => $payout->created ? Carbon::createFromTimestamp( $payout->arrival_date )->format( 'Y-m-d' ) : null,
                'balance_transaction' => $payout->balance_transaction,
                'currency'            => $payout->currency,
                'description'         => $payout->description,
                'destination_id'      => $payout->destination,
                'method'              => $payout->method,
                'type'                => $payout->type,
                'status'              => $payout->status
            ] );

            //save transaction for expert
            ClientTransaction::where( 'transaction_id', $payout->id )->update( [
                'status' => ( $payout->status == 'paid' ) ? 1 : 0
            ] );

            //send notification
            $user = User::find( $user_id );
            $user->notify( new PaymentNotification( [
                'title'   => "Withdrawal request " . $payout->status,
                'message' => "Your recent withdraw request of amount " . $payout->amount / 100 . ' ' . $payout->currency . ' to your bank xxxx-' . $withdrawalMethod->last4 . ' was ' . $payout->status,
                'link'    => route( 'expert.payment.withdraw' ),
                'button'  => 'Make another withdraw',
                'avatar'  => asset( '/assets/frontend/img/fixed.png' ),
            ] ) );
        } catch ( \Exception $ex ) {
            echo $ex->getMessage();
            http_response_code( $ex->getCode() );
            exit();
        }
    }

    private function __payoutPaid( $payout ) {
        try {
            $destination_id   = $payout->destination;
            $withdrawalMethod = ExpertWithdrawal::where( 'bank_id', $destination_id )->firstOrFail();
            $user_id          = $withdrawalMethod->user_id;

            ExpertPayout::updateOrCreate( [
                'payout_id' => $payout->id
            ], [
                'user_id'             => $user_id,
                'amount'              => $payout->amount,
                'arrival_date'        => $payout->created ? Carbon::createFromTimestamp( $payout->arrival_date )->format( 'Y-m-d' ) : null,
                'balance_transaction' => $payout->balance_transaction,
                'currency'            => $payout->currency,
                'description'         => $payout->description,
                'destination_id'      => $payout->destination,
                'method'              => $payout->method,
                'type'                => $payout->type,
                'status'              => $payout->status
            ] );

            //save transaction for expert
            ClientTransaction::where( 'transaction_id', $payout->id )->update( [
                'status' => ( $payout->status == 'paid' ) ? 1 : 0
            ] );

            //send notification
            $user = User::find( $user_id );
            $user->notify( new PaymentNotification( [
                'title'   => "Withdrawal request " . $payout->status,
                'message' => "Your recent withdraw request of amount " . $payout->amount / 100 . ' ' . $payout->currency . ' to your bank xxxx-' . $withdrawalMethod->last4 . ' was ' . $payout->status,
                'link'    => route( 'expert.payment.withdraw' ),
                'button'  => 'Make another withdraw',
                'avatar'  => asset( '/assets/frontend/default/img/expert_dashboard/profile-img.png' ),
            ] ) );
        } catch ( \Exception $ex ) {
            echo $ex->getMessage();
            http_response_code( $ex->getCode() );
            exit();
        }
    }

    /*
     * when money transferred to expert's stripe account
     * */
    private function __transferCreated( $transfer ) {
        try {
            $reference_id   = @$transfer->metadata->reference_id; //milestone id
            $reference_type = @$transfer->metadata->reference_type; //milestone

            $stripe_transaction = Transaction::updateOrCreate( [
                'charge_id' => $transfer->destination_payment
            ], [
                'transfer_id' => $transfer->id,
                'object'                 => $transfer->object,
                'reference_id'           => json_encode( $reference_id ),
                'reference_type'         => $reference_type,
                'amount'                 => $transfer->amount,
                'amount_reversed' => $transfer->amount_reversed,
                'currency'               => $transfer->currency,
                'customer_id'            => $transfer->destination,
                'description'            => $transfer->description,
                'balance_transaction'       => $transfer->balance_transaction,
                'transfer_group'         => $transfer->transfer_group,
                'metadata'               => json_encode( $transfer->metadata ),
                'created_time'           => $transfer->created ? Carbon::createFromTimestamp( $transfer->created )->format( 'Y-m-d H:i:s' ) : null,
                'reversed'                 => $transfer->reversed,
                'livemode'               => $transfer->livemode
            ] );

            //todo: update expert funded milestone status
            if ( $reference_type == 'milestone' ) {
                $milestone = Milestone::find( $reference_id );
                $client_id = $milestone->contract->client_id;
                $expert_id = $milestone->contract->expert_id;

                //clean pending transactions
                ExpertTransaction::where('milestone_id', $milestone->id)->forceDelete();

                //calculate expert charge
                $charge = PaymentHelper::calculateExpertCharge($milestone->amount);

                //parent transaction
                $expert_payment = $charge['total_amount'];
                $transaction_data = [
                    'transaction_id' => $stripe_transaction->id,
                    'milestone_id'   => $milestone->id,
                    'type'           => 'Fixed Price',
                    'description'    => "Invoice for " . $milestone->title,
                    'client_id'      => $client_id,
                    'expert_id'      => $expert_id,
                    'amount'         => $expert_payment,
                    'charge_type'    => 'credit',
                    'parent'         => null,
                    'status'         => 1,
                ];
                $transaction = PaymentHelper::createExpertTransaction($transaction_data);
                $parent_id = $transaction->id;

                //charge platform fee
                $service_charge = $charge['service_charge'];
                $transaction_data = [
                    'transaction_id' => $stripe_transaction->id,
                    'milestone_id'   => $milestone->id,
                    'type'           => 'Service Fee',
                    'description'    => "Service Fee for Fixed Price - Ref ID " . $parent_id,
                    'client_id'      => $client_id,
                    'expert_id'      => $expert_id,
                    'amount'         => $service_charge,
                    'charge_type'    => 'debit',
                    'parent'         => $parent_id,
                    'status'         => 1,
                ];
                PaymentHelper::createExpertTransaction($transaction_data);

                //update milestone status
                $milestone->status = MilestoneStatus::Released;
                $milestone->save();
            }
        } catch (\Exception $ex){
            echo $ex->getMessage();
            http_response_code( $ex->getCode() );
            exit();
        }
    }

    private function __personCreated($person) {
        Log::info($person);
        try {
            $stripe_customer_id = $person->account;
            $customer           = Profile::where( 'stripe_acct_id', $stripe_customer_id )->firstOrFail();
            $user_id            = $customer->user_id;

            $kyc = ExpertKYC::updateOrCreate([
                'user_id' => $user_id
            ], [
                'future_requirements' => $person->future_requirements,
                'requirements' => $person->requirements,
                'verification' => $person->verification
            ]);
        } catch (\Exception $ex){
            Log::info($ex->getMessage());
            echo $ex->getMessage();
            http_response_code( $ex->getCode() );
            exit();
        }
    }

    /*
     * admin reveresed already transferred amount from expert's stripe account
     * */
    private function __transferReversed( $transfer ) {
        Log::info( $transfer );
        //todo: update existing transfer data status
    }

    private function __handleApplicationAuthorized( $account ) {
        Log::info($account);
        try {
            if ( ! empty( $account->account ) ) {
                $stripe          = new \Stripe\StripeClient( env( 'STRIPE_SECRET' ) );
                $connect_account = $stripe->accounts->retrieve( $account->account,
                    []
                );
//                Log::info( $connect_account );
//                date('Y-m-d H:i:s', $connect_account->created)
            }
        } catch ( \Exception $ex ) {
            echo $ex->getMessage();
            http_response_code( $ex->getCode() );
            exit();
        }
    }

    private function __handleApplicationDeauthorized( $account ) {
        Log::info($account);
        try {
            if ( ! empty( $account->account ) ) {
                $stripe          = new \Stripe\StripeClient( env( 'STRIPE_SECRET' ) );
                $connect_account = $stripe->accounts->retrieve( $account->account,
                    []
                );
//                Log::info( $connect_account );
//                date('Y-m-d H:i:s', $connect_account->created)
            }
        } catch ( \Exception $ex ) {
            echo $ex->getMessage();
            http_response_code( $ex->getCode() );
            exit();
        }
    }
}
