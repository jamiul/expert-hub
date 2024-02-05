<?php

namespace App\Livewire\Expert\Payment;

use Livewire\Component;

class GetPaid extends Component
{
    public function render()
    {
        $user = auth()->user();

//        dd($user->expert_kyc->requirements);

        return view('livewire.expert.payment.get-paid', [
            'user' => $user
        ] );
    }
}
