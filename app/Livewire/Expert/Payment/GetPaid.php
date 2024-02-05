<?php

namespace App\Livewire\Expert\Payment;

use Livewire\Component;

class GetPaid extends Component
{
    public function render()
    {
        $user = auth()->user();

        return view('livewire.expert.payment.get-paid', [
            'user' => $user
        ] );
    }
}
