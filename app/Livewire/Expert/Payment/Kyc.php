<?php

namespace App\Livewire\Expert\Payment;

use Livewire\Component;
use WireElements\Pro\Components\Modal\Modal;

class Kyc extends Modal
{
    public function render()
    {
        return view('livewire.expert.payment.kyc');
    }
}
