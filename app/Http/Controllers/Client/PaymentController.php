<?php

namespace App\Http\Controllers\Client;

use App\Helpers\PaymentHelper;
use App\Http\Controllers\Controller;
use App\Models\ClientTransaction;
use App\Models\Contract;
use App\Models\Milestone;
use App\Models\Offer;
use App\Models\PaymentMethod;
use App\Models\Profile;
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
        $user = auth()->user();

        $this->__setStripeCustomer();

        $payment_methods = PaymentMethod::where( 'user_id', $user->id )->get();

        return view( 'frontend.client.payment.index', compact( 'payment_methods' ) );
    }

    /*
     * List of transactions /payment/billing-report
     * */
    public function billingReport() {
        $user = auth()->user();

        $this->__setStripeCustomer();

        $transactions = ClientTransaction::where( 'client_id', $user->id )->orderby('id', 'desc')->latest()->get();

        return view( 'frontend.client.payment.billing-report', compact('transactions', 'user') );
    }

    /*
     * fund a milestone /payment/pay
     * */
    public function pay(Request $request) {
        $user = auth()->user();

        $payment_methods = PaymentMethod::where( 'user_id', $user->id )->get();

        //read payment type
        $reference = $request->reference;
        if($reference == 'contract'){
            $contract = Contract::where('id', $request->id)->where( 'client_id', $user->profile->id )->firstOrFail();
            $milestones = Milestone::where('contract_id', $contract->id)->where('status', 'Want to Pay')->get();
            $project = $contract->project;
        } else if($reference == 'offer'){
            $contract = Offer::where('id', $request->id)->where( 'client_id', $user->profile->id )->firstOrFail();
            $milestones = Milestone::where('offer_id', $contract->id)->where('status', 'Want to Pay')->get();
            $project = $contract->project;
        } else {
            abort(404);
        }
        $milestone_amount = $milestones->sum('amount');
        //breakdown charge into pieces
        $milestone_charges = PaymentHelper::calculateMilestoneCharge( $milestone_amount );

        return view( 'frontend.client.payment.summary', compact( 'payment_methods',
            'project',
            'contract',
            'milestones',
            'milestone_charges'
        ) );
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
            $milestone = Milestone::find(1);
            $CONNECTED_ACCOUNT_ID = $milestone->eoi->expert->profile->stripe_acct_id;

            $milestone_amount = $milestone->amount;

            $charge           = PaymentHelper::calculateMilestoneCharge( $milestone_amount );
            $intent           = $this->stripe->paymentIntents->create( [
                'customer'                  => $user->profile->stripe_client_id,
                'setup_future_usage'        => 'off_session',
                'automatic_payment_methods' => [ 'enabled' => true ],
                'amount'                    => number_format($charge['total_amount'], 2) * 100,
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

    public function chargeCardOffsession(Request $request) {
        $user = auth()->user();

        $this->__setStripeCustomer();

        //create payment intent
        try {
            $milestone = Milestone::find(1);
            $milestone_amount = $milestone->amount;
            $CONNECTED_ACCOUNT_ID = $milestone->eoi->expert->stripe_acct_id;

            $charge           = PaymentHelper::calculateMilestoneCharge( $milestone_amount );
            $intent           = $this->stripe->paymentIntents->create( [
                'customer'                  => $user->profile->stripe_client_id,
                'confirm' => true,
                'off_session' => true,
                'amount'                    => number_format($charge['total_amount'], 2) * 100,
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
            dd( $ex->getMessage() );
        }

        return response()->json( [
            'clientSecret' => $intent->client_secret
        ] );
    }

    /*
     * Make customer card default /payment/make-default
     * */
    public function makeDefault( Request $request ) {
        $user = auth()->user();

        $this->stripe->customers->update(
            $user->profile->stripe_client_id,
            [
                'invoice_settings' => [
                    'default_payment_method' => $request->payment_method_id
                ]
            ]
        );
        PaymentMethod::where( 'user_id', $user->id )->update( [
            'is_default' => 0
        ] );
        PaymentMethod::where( 'user_id', $user->id )->where( 'stripe_payment_id', $request->payment_method_id )->update( [
            'is_default' => 1
        ] );

        return response()->json( [
            'status'  => 'success',
            'message' => "Card set as default."
        ] );
    }

    /*
     * remove customer card from his account /payment/detach-card
     * */
    public function detachCard( Request $request ) {
        $user = auth()->user();

        $this->stripe->paymentMethods->detach(
            $request->payment_method_id,
            []
        );

        return response()->json( [
            'status'  => 'success',
            'message' => "Card removed successfully."
        ] );
    }

    /*
     * Accept requested milestone /payment/accept-milestone
     * */
    public function acceptMilestone() {
        $milestone = Milestone::find(1);
        $milestone_amount = $milestone->amount;
        $CONNECTED_ACCOUNT_ID = $milestone->eoi->expert->stripe_acct_id;

        //todo: first store inside schedule transfer job then process it in 3 days.
        $acceptMilestone = $this->stripe->transfers->create( [
            'amount'         => $milestone_amount * 100,
            'currency'       => 'aud',
            'destination'    => $CONNECTED_ACCOUNT_ID,
            'transfer_group' => $CONNECTED_ACCOUNT_ID,
            'metadata'                  => [
                'reference_id'   => $milestone->id,
                'reference_type' => 'milestone'
            ]
        ] );
        //todo: save transfer into db and implement through webhook

        dd( $acceptMilestone );
    }

}
