<?php

namespace App\Livewire\Client\Billing\Card;

use App\Models\Profile;
use Livewire\Component;
use WireElements\Pro\Components\Modal\Modal;

class Add extends Modal
{
    public $clientSecret;

    public function render()
    {
        $user = auth()->user();

        $stripe = new \Stripe\StripeClient( [
            "api_key" => env( 'STRIPE_SECRET' ),
        ] );
        $stripe_account_id = $user->profile->stripe_client_id;

        if ( $user->profile->stripe_client_id == '' ) {
            $stripe_account = $stripe->customers->create( [
                'name'  => $user->full_name,
                'email' => $user->email,
            ] );

            $profile                   = Profile::where( 'user_id', $user->id )->first();
            $profile->stripe_client_id = $stripe_account->id;
            $profile->save();

            $stripe_account_id = $stripe_account->id;
        }

        //create setup intent
        try {
            $intent = $stripe->setupIntents->create( [
                'customer'                  => $stripe_account_id,
                'usage'                     => 'off_session',
                'automatic_payment_methods' => [ 'enabled' => true ],
                'metadata'                  => [
                    'reference_id'   => $user->id,
                    'reference_type' => 'customer'
                ]
            ] );

        } catch ( \Exception $ex ) {
            dd( $ex->getMessage() );
        }

        $this->dispatch('loadStripeElement', [
            'clientSecret' => $intent->client_secret,
        ]);

        return view('livewire.client.billing.card.add');
    }
}
