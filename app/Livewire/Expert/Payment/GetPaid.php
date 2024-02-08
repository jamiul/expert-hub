<?php

namespace App\Livewire\Expert\Payment;

use App\Enums\ExpertTransactionType;
use App\Helpers\PaymentHelper;
use App\Models\ExpertTransaction;
use Livewire\Attributes\On;
use Livewire\Component;

class GetPaid extends Component {

    public $expert_withdrawal;

    public $withdraw_schedule;

    public $last_withdrawal;

    public $tab_active = 'home';

    #[On( 'refresh' )]
    public function refreshBank() {
        $user                    = auth()->user();
        $this->expert_withdrawal = $user->expert_withdrawal;
    }

    public function tabChange($tab) {
        $this->tab_active = $tab;
    }

    public function mount() {
        $user                    = auth()->user();
        $this->expert_withdrawal = $user->expert_withdrawal;
        $this->withdraw_schedule = $user->withdraw_schedule;

        PaymentHelper::expertRegisterToStripe($user);
    }

    public function render() {
        $user                    = auth()->user();
        $this->expert_withdrawal = $user->expert_withdrawal;

        $this->last_withdrawal = ExpertTransaction::where('expert_id', $user->id)
                                                  ->where('type', ExpertTransactionType::Withdrawal)
                                                  ->latest()->first();

        return view( 'livewire.expert.payment.get-paid', [
            'user' => $user
        ] );
    }
}
