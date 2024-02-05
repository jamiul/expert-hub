<?php

namespace App\Livewire\Expert\Payment;

use Livewire\Component;

class GetPaid extends Component
{
//    public $expert_stripe_account;

//    public $balance;

//    public $stripe;

    public function mount() {
//        $this->stripe = new \Stripe\StripeClient( [
//            "api_key" => env( 'STRIPE_SECRET' ),
//        ] );
    }

    public function render()
    {
        $user = auth()->user();

        $acct_id = $user->profile->stripe_acct_id;

        //check if there is any document requires
//        $expert_acct = $this->stripe->accounts->retrieve( $acct_id, [] );
//        dd($expert_acct);

//        $expert_balance = $this->stripe->balance->retrieve( [], [ 'stripe_account' => $acct_id ] );
//        $this->balance = json_decode(json_encode($expert_balance), true);

        return view('livewire.expert.payment.get-paid', [
            'user' => $user
        ] );
    }
}
