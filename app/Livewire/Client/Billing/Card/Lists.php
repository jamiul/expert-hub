<?php

namespace App\Livewire\Client\Billing\Card;

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

        return view('livewire.client.billing.card.lists');
    }
}
