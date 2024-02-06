<?php

namespace App\Livewire\Expert\Payment\Withdraw;

use App\Models\WithdrawSchedule;
use Livewire\Component;
use WireElements\Pro\Components\Modal\Modal;

class Schedule extends Modal
{
    public $withdrawal_methods;

    public $preferred_payment_schedule;

    public $withdrawal_method;

    public $balance_reach;

    public $minimum_reserve;

    public function submitPaymentSchedule() {
        $this->validate();
        $user = auth()->user();

        WithdrawSchedule::updateOrCreate([
            'user_id' => $user->id
        ], [
            'expert_withdrawal_id' => $this->withdrawal_method,
            'preferred_payment_schedule' => $this->preferred_payment_schedule,
            'balance_reach' => $this->balance_reach,
            'minimum_reserve' => $this->minimum_reserve,
            'status' => true
        ]);

        toast('success', 'Schedule updated', $this);

        $this->close();
    }

    public function updated( $propertyName ) {
        $this->validateOnly( $propertyName );
    }

    public function rules() {
        return [
            'withdrawal_method' => 'required',
            'preferred_payment_schedule' => 'required',
            'balance_reach' => 'required'
        ];
    }

    public function mount() {
        $user = auth()->user();

        $this->expert = $user->profile;

        $this->withdrawal_methods = $user->expert_withdrawal;

        $withdraw_schedule = $user->withdraw_schedule;

        $this->withdrawal_method = $withdraw_schedule?->expert_withdrawal_id;
        $this->preferred_payment_schedule = $withdraw_schedule?->preferred_payment_schedule;
        $this->balance_reach = $withdraw_schedule?->balance_reach;
        $this->minimum_reserve = $withdraw_schedule?->minimum_reserve;
    }
    public function render()
    {

        return view('livewire.expert.payment.withdraw.schedule');
    }
}
