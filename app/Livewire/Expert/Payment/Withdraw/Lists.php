<?php

namespace App\Livewire\Expert\Payment\Withdraw;

use App\Models\PaymentMethod;
use Livewire\Attributes\On;
use Livewire\Component;

class Lists extends Component
{
    public $withdrawal_methods;

    #[On('refresh-the-component')]
    public function refreshTheComponent()
    {
        $user = auth()->user();
        $this->withdrawal_methods = $user->expert_withdrawal;
    }

    public function render()
    {
        $user = auth()->user();
        $this->withdrawal_methods = $user->expert_withdrawal;

        return view('livewire.expert.payment.withdraw.lists');
    }
}
