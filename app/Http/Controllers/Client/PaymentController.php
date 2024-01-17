<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PaymentController extends Controller {
    public function index() {
        $user = auth()->user();

        //check if there is any document requires
        $stripe                = new \Stripe\StripeClient( [
            "api_key" => env( 'STRIPE_SECRET' ),
        ] );

        if ( $user->profile->stripe_acct_id == '' ) {
            $stripe_account = $stripe->customers->create([
                'name' => $user->first_name . ' ' . $user->last_name,
                'email'            => $user->email,
            ]);

            $profile                 = Profile::where( 'user_id', $user->id )->first();
            $profile->stripe_acct_id = $stripe_account->id;
            $profile->save();
        }

        return view( 'frontend.client.payment.index' );
    }

    public function createPaymentIntent(Request $request) {
        $user = auth()->user();

        //check if there is any document requires
        $stripe                = new \Stripe\StripeClient( [
            "api_key" => env( 'STRIPE_SECRET' ),
        ] );

        if ( $user->profile->stripe_acct_id == '' ) {
            $stripe_account = $stripe->customers->create([
                'name' => $user->first_name . ' ' . $user->last_name,
                'email'            => $user->email,
            ]);

            $profile                 = Profile::where( 'user_id', $user->id )->first();
            $profile->stripe_acct_id = $stripe_account->id;
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

            $intent = $stripe->paymentIntents->create([
                'customer' => $user->profile->stripe_acct_id,
                'setup_future_usage' => 'off_session',
                'automatic_payment_methods' => ['enabled' => true],
                'amount' => 115.36 * 100,
                'currency' => 'aud',
                'transfer_group' => 'ORDER10',
            ]);

        } catch (\Exception $ex){
            dd($ex->getMessage());
        }
        return response()->json([
            'clientSecret' => $intent->client_secret
        ]);
    }

    public function acceptMilestone() {
        $stripe                = new \Stripe\StripeClient( [
            "api_key" => env( 'STRIPE_SECRET' ),
        ] );

        $CONNECTED_ACCOUNT_ID = 'acct_1OYlT8BCePPNtsZd';

        $acceptMilestone = $stripe->transfers->create([
            'amount' => 90 * 100,
            'currency' => 'aud',
            'destination' => $CONNECTED_ACCOUNT_ID,
            'transfer_group' => 'ORDER10',
        ]);
        dd($acceptMilestone);
    }
}
