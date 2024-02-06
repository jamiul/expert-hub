<?php

namespace App\Livewire\Expert\Payment;

use Livewire\Attributes\On;
use Livewire\Component;

class GetPaid extends Component {

    public $expert_withdrawal;

    public $withdraw_schedule;

    #[On( 'refresh' )]
    public function refreshBank() {
        $user                    = auth()->user();
        $this->expert_withdrawal = $user->expert_withdrawal;
    }

    public function mount() {
        $user                    = auth()->user();
        $this->expert_withdrawal = $user->expert_withdrawal;
        $this->withdraw_schedule = $user->withdraw_schedule;
    }

    public function render() {
        $user                    = auth()->user();
        $this->expert_withdrawal = $user->expert_withdrawal;

        return view( 'livewire.expert.payment.get-paid', [
            'user' => $user
        ] );
    }
}
