<?php

namespace App\Livewire\Payment\Card;

use App\Models\PaymentMethod;
use Livewire\Attributes\On;
use Livewire\Component;

class Lists extends Component
{
    public $payment_methods;

    #[On('refresh-the-component')]
    public function refreshTheComponent()
    {
        $user = auth()->user();

        $this->payment_methods = PaymentMethod::where( 'user_id', $user->id )->get();
    }

    public function render()
    {
        $user = auth()->user();

        $this->payment_methods = PaymentMethod::where( 'user_id', $user->id )->get();

        return view('livewire.payment.card.lists');
    }
}
