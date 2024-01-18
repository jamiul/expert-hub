<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\PaymentMethod;
use App\Models\Profile;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public $api_key = null;

    public $stripe = null;

    public function __construct()
    {
        $this->api_key = env( 'STRIPE_SECRET' );

        $this->stripe = new \Stripe\StripeClient( [
            "api_key" => env( 'STRIPE_SECRET' ),
        ] );
    }

    private function setStripeCustomer()
    {
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
    public function index()
    {
        $user = auth()->user();

        $this->setStripeCustomer();

        $payment_methods = PaymentMethod::where( 'user_id', $user->id )->get();

        return view( 'frontend.client.payment.index', compact( 'payment_methods' ) );
    }

    /*
     * List of transactions /payment/billing-report
     * */
    public function billingReport()
    {

        return view( 'frontend.client.payment.billing-report' );
    }

    /*
     * fund a milestone /payment/pay
     * */
    public function pay()
    {
        $user = auth()->user();

        //check if there is any document requires
        $stripe = new \Stripe\StripeClient( [
            "api_key" => env( 'STRIPE_SECRET' ),
        ] );

        if ( $user->profile->stripe_client_id == '' ) {
            $stripe_account = $stripe->customers->create( [
                'name'  => $user->first_name . ' ' . $user->last_name,
                'email' => $user->email,
            ] );

            $profile                   = Profile::where( 'user_id', $user->id )->first();
            $profile->stripe_client_id = $stripe_account->id;
            $profile->save();
        }

        return view( 'frontend.client.payment.pay' );
    }

    /*
     * create payment intent to generate pay /payment/create-payment-intent
     * */
    public function createPaymentIntent( Request $request )
    {
        $user = auth()->user();

        //check if there is any document requires
        $stripe = new \Stripe\StripeClient( [
            "api_key" => env( 'STRIPE_SECRET' ),
        ] );

        if ( $user->profile->stripe_client_id == '' ) {
            $stripe_account = $stripe->customers->create( [
                'name'  => $user->first_name . ' ' . $user->last_name,
                'email' => $user->email,
            ] );

            $profile                   = Profile::where( 'user_id', $user->id )->first();
            $profile->stripe_client_id = $stripe_account->id;
            $profile->save();
        }

        $CONNECTED_ACCOUNT_ID = 'acct_1OYlT8BCePPNtsZd';
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
//            ]);

            $intent = $stripe->paymentIntents->create( [
                'customer'                  => $user->profile->stripe_client_id,
                'setup_future_usage'        => 'off_session',
                'automatic_payment_methods' => [ 'enabled' => true ],
                'amount'                    => 115.36 * 100,
                'currency'                  => 'aud',
                'transfer_group'            => 'ORDER10',
                'metadata'                  => [
                    'reference_id'   => 1,
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
    public function createSetupIntent( Request $request )
    {
        $user = auth()->user();

        $this->setStripeCustomer();

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
    public function makeDefault( Request $request )
    {
        $user = auth()->user();

        $this->stripe->customers->update(
            $user->profile->stripe_client_id,
            [
                'invoice_settings' => [
                    'default_payment_method' => $request->payment_method_id
                ]
            ]
        );
        PaymentMethod::where('user_id', $user->id)->update([
            'is_default' => 0
        ]);
        PaymentMethod::where('user_id', $user->id)->where('stripe_payment_id', $request->payment_method_id)->update([
            'is_default' => 1
        ]);

        return response()->json([
            'status' => 'success',
            'message' => "Card set as default."
        ]);
    }

    /*
     * remove customer card from his account /payment/detach-card
     * */
    public function detachCard( Request $request )
    {
        $user = auth()->user();

        $this->stripe->paymentMethods->detach(
            $request->payment_method_id,
            []
        );

        return response()->json([
            'status' => 'success',
            'message' => "Card removed successfully."
        ]);
    }

    /*
     * Accept requested milestone /payment/accept-milestone
     * */
    public function acceptMilestone()
    {
        $stripe = new \Stripe\StripeClient( [
            "api_key" => env( 'STRIPE_SECRET' ),
        ] );

        $CONNECTED_ACCOUNT_ID = 'acct_1OYlT8BCePPNtsZd';

        $acceptMilestone = $stripe->transfers->create( [
            'amount'         => 90 * 100,
            'currency'       => 'aud',
            'destination'    => $CONNECTED_ACCOUNT_ID,
            'transfer_group' => 'ORDER10',
        ] );
        dd( $acceptMilestone );
    }

}
