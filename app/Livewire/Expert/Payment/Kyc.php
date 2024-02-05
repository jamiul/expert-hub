<?php

namespace App\Livewire\Expert\Payment;

use Livewire\Component;
use WireElements\Pro\Components\Modal\Modal;

class Kyc extends Modal
{
    public function render()
    {
        $user = auth()->user();

        if ( $user->profile->stripe_acct_id == '' ) {
            dd('no account');
        }

        return view('livewire.expert.payment.kyc');
    }
}
