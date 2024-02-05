<?php

namespace App\Livewire\Expert\Payment\Withdraw;

use Livewire\Component;
use WireElements\Pro\Components\Modal\Modal;

class Schedule extends Modal
{
    public function render()
    {
        return view('livewire.expert.payment.withdraw.schedule');
    }
}
