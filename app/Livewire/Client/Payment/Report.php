<?php

namespace App\Livewire\Client\Payment;

use App\Models\ClientTransaction;
use Livewire\Component;

class Report extends Component
{
    public $transactions;

    public $balance;

    public $escrow_balance;

    public function mount() {
        $user = auth()->user();

        $this->balance = $user->profile->balance;
        $this->escrow_balance = $user->profile->escrow_balance;

        $this->transactions = ClientTransaction::where( 'client_id', $user->id )
                                               ->orderby( 'id', 'desc' )
                                               ->latest()
                                               ->get();
    }
    public function render()
    {
        return view('livewire.client.payment.report');
    }
}
