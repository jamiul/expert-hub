<?php

namespace App\Livewire\Payment\Card;

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

        if ( $user->profile->stripe_client_id == '' ) {
            $stripe_account = $stripe->customers->create( [
                'name'  => $user->full_name,
                'email' => $user->email,
            ] );

            $profile                   = Profile::where( 'user_id', $user->id )->first();
            $profile->stripe_client_id = $stripe_account->id;
            $profile->save();
        }

        //create setup intent
        try {
            $intent = $stripe->setupIntents->create( [
                'customer'                  => $user->profile->stripe_client_id,
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

        return view('livewire.payment.card.add');
    }
}
