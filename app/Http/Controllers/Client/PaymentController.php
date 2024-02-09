<?php

namespace App\Http\Controllers\Client;

use App\Enums\MilestoneStatus;
use App\Helpers\PaymentHelper;
use App\Http\Controllers\Controller;
use App\Models\BookingSlot;
use App\Models\ClientTransaction;
use App\Models\Consultation;
use App\Models\ConsultationBooking;
use App\Models\Contract;
use App\Models\Milestone;
use App\Models\Offer;
use App\Models\PaymentMethod;
use App\Models\Profile;
use App\Models\Training;
use App\Models\TrainingParticipant;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PaymentController extends Controller {
    public $api_key = null;

    public $stripe = null;

    public function __construct() {
        $this->api_key = env( 'STRIPE_SECRET' );

        $this->stripe = new \Stripe\StripeClient( [
            "api_key" => env( 'STRIPE_SECRET' ),
        ] );
    }

    private function __setStripeCustomer() {
        $user = auth()->user();

        if ( $user->profile->stripe_client_id == '' ) {
            $stripe_account = $this->stripe->customers->create( [
                'name'  => $user->first_name . ' ' . $user->last_name,
                'email' => $user->email,
            ] );

            $profile                   = Profile::where( 'user_id', $user->id )->first();
            $profile->stripe_client_id = $stripe_account->id;
            $profile->save();
        }
    }

    /*
     * List of payment methods /payment
     * */
    public function index() {
        $this->__setStripeCustomer();

        return view( 'frontend.client.payment.index' );
    }

    /*
     * List of transactions /payment/billing-report
     * */
    public function billingReport() {
        $this->__setStripeCustomer();

        return view( 'frontend.client.payment.billing-report' );
    }

    /*
     * fund a milestone /payment/pay
     * */
    public function pay( Request $request ) {
        return view( 'frontend.client.payment.summary' );
    }

    /*
     * create payment intent to generate pay /payment/create-payment-intent
     * */
    public function createPaymentIntent( Request $request ) {
        $user = auth()->user();

        $this->__setStripeCustomer();

        //create payment intent
        try {
//            $intent = $stripe->paymentIntents->create([
//                'customer' => $user->profile->stripe_acct_id,
//                'setup_future_usage' => 'off_session',
//                'amount' => 100 * 100,
//                'currency' => 'aud',
//                'automatic_payment_methods' => ['enabled' => true],
//                'metadata' => [
//                    'user_id' => $user->id,
//                ],
////                'application_fee_amount' => 10 * 100,
//                'on_behalf_of' => $CONNECTED_ACCOUNT_ID,
//            ]);$milestone_amount
            $milestone            = Milestone::find( 1 );
            $CONNECTED_ACCOUNT_ID = $milestone->eoi->expert->profile->stripe_acct_id;

            $milestone_amount = $milestone->amount;

            $charge = PaymentHelper::calculateMilestoneCharge( $milestone_amount );
            $intent = $this->stripe->paymentIntents->create( [
                'customer'                  => $user->profile->stripe_client_id,
                'setup_future_usage'        => 'off_session',
                'automatic_payment_methods' => [ 'enabled' => true ],
                'amount'                    => number_format( $charge['total_amount'], 2 ) * 100,
                'currency'                  => 'aud',
                'transfer_group'            => $CONNECTED_ACCOUNT_ID,
                'payment_method'            => $request->payment_method_id,
                'metadata'                  => [
                    'reference_id'   => $milestone->id,
                    'reference_type' => 'milestone'
                ]
            ] );

        } catch ( \Exception $ex ) {
            dd( $ex->getMessage() );
        }

        return response()->json( [
            'clientSecret' => $intent->client_secret
        ] );
    }

    public function chargeCardOffsession( Request $request ) {
        $user = auth()->user();

        $this->__setStripeCustomer();

        //create payment intent
        try {
            $reference = $request->reference;
            if ( $reference == 'contract' ) {
                $contract   = Contract::where( 'id', $request->id )->where( 'client_id', $user->profile->id )->firstOrFail();
                $milestones = Milestone::where( 'contract_id', $contract->id )->where( 'status', 'Want to Pay' )->get();

                $redirect   = route( 'contract.show', $contract->id );
            } else if ( $reference == 'offer' ) {
                $contract   = Offer::where( 'id', $request->id )->where( 'client_id', $user->profile->id )->firstOrFail();
                $milestones = Milestone::where( 'offer_id', $contract->id )->where( 'status', 'Want to Pay' )->get();

                $redirect   = route( 'offers.show', $contract->id );
            } else if ( $reference == 'consultation' ) {
                $project = ConsultationBooking::where( 'id', $request->id )->firstOrFail();
                $contract   = Consultation::where( 'id', $project->consultation_id )->firstOrFail();
                $milestones = BookingSlot::where( 'consultation_booking_id', $project->id )->where( 'status', 'pending' )->get();

                $redirect   = route( 'client.dashboard' );
            } else if ( $reference == 'training' ) {
                $project = TrainingParticipant::where( 'id', $request->id )->firstOrFail();
                $milestones = TrainingParticipant::where( 'id', $request->id )->get();
                $contract = $project->training;

                $redirect   = route( 'client.dashboard' );
            } else {
                return response()->json( [
                    'status' => false,
                    'message' => 'Invalid request'
                ] );
            }
            $milestone_amount = $milestones->sum( 'amount' );

            $CONNECTED_ACCOUNT_ID = $contract->expert->stripe_acct_id;

            $charge = PaymentHelper::calculateMilestoneCharge( $milestone_amount, $contract->client_id, $contract->expert_id );

            if($CONNECTED_ACCOUNT_ID){
                $intent = $this->stripe->paymentIntents->create( [
                    'customer'       => $user->profile->stripe_client_id,
                    'confirm'        => true,
                    'off_session'    => true,
                    'amount'         => round( number_format( $charge['total_amount'], 2, '.', '' ) * 100 ),
                    'currency'       => $user->profile->currency,
                    'transfer_group' => $CONNECTED_ACCOUNT_ID,
                    'payment_method' => $request->payment_method_id,
                    'metadata'       => [
                        'reference_id'   => $milestones->pluck( 'id' )->toJson(),
                        'reference_type' => 'milestone',
                        'contract_type'  => $reference,
                        'contract_id'    => $contract->id,
                        'client_id'      => $user->id,
                        'expert_id'      => $contract->expert->user->id
                    ]
                ] );
            } else {
                return response()->json( [
                    'status' => false,
                    'message' => 'Account is not active to recveive payment'
                ] );
            }
        } catch ( \Exception $ex ) {
            return response()->json( [
                'status' => false,
                'message' => $ex->getMessage()
            ] );
        }



        return response()->json( [
            'status' => true,
            'redirect'     => $redirect,
            'intent'       => $intent,
            'clientSecret' => $intent->client_secret
        ] );
    }

    /*
     * create setup intent to save card /payment/create-setup-intent
     * */
    public function createSetupIntent( Request $request ) {
        $user = auth()->user();

        $this->__setStripeCustomer();

        //create setup intent
        try {
            $intent = $this->stripe->setupIntents->create( [
                'customer'                  => $user->profile->stripe_client_id,
                'usage'                     => 'off_session',
                'automatic_payment_methods' => [ 'enabled' => true ],
                'metadata'                  => [
                    'reference_id'   => 1,
                    'reference_type' => 'customer'
                ]
            ] );

        } catch ( \Exception $ex ) {
            return toast('warning', $ex->getMessage(), $this);
        }

        return response()->json( [
            'clientSecret' => $intent->client_secret
        ] );
    }

}
