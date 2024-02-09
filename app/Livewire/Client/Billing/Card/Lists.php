<?php

namespace App\Livewire\Client\Billing\Card;

use App\Models\PaymentMethod;
use Livewire\Attributes\On;
use Livewire\Component;

class Lists extends Component {
    public $payment_methods;

    #[On( 'refresh-the-component' )]
    public function refreshTheComponent() {
        $user = auth()->user();

        $this->payment_methods = PaymentMethod::where( 'user_id', $user->id )->get();
    }

    public function setPrimary( $id ) {
        $user = auth()->user();
        try {
            $stripe = new \Stripe\StripeClient( [
                "api_key" => env( 'STRIPE_SECRET' ),
            ] );

            $payment_method = PaymentMethod::where( 'id', $id )->where( 'user_id', $user->id )->firstOrFail();

            $stripe->customers->update(
                $user->profile->stripe_client_id,
                [
                    'invoice_settings' => [
                        'default_payment_method' => $payment_method->stripe_payment_id
                    ]
                ]
            );
            PaymentMethod::where( 'user_id', $user->id )->update( [
                'is_default' => 0
            ] );
            PaymentMethod::where( 'user_id', $user->id )->where( 'stripe_payment_id', $payment_method->stripe_payment_id )->update( [
                'is_default' => 1
            ] );
        } catch ( \Exception $ex ) {
            toast( 'warning', $ex->getMessage(), $this );
        }
    }

    public function removeCard( $id ) {
        $user = auth()->user();
        try {
            $stripe = new \Stripe\StripeClient( [
                "api_key" => env( 'STRIPE_SECRET' ),
            ] );

            $payment_method = PaymentMethod::where( 'id', $id )->where( 'user_id', $user->id )->firstOrFail();

            $stripe->paymentMethods->detach(
                $payment_method->stripe_payment_id,
                []
            );
        } catch ( \Exception $ex ) {
            toast( 'warning', $ex->getMessage(), $this );
        }
    }

    public function render() {
        $user = auth()->user();

        $this->payment_methods = PaymentMethod::where( 'user_id', $user->id )->get();

        return view( 'livewire.client.billing.card.lists' );
    }
}
