<?php

namespace App\Livewire\Client\Payment;

use App\Enums\TransactionType;
use App\Models\ClientTransaction;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Report extends Component
{
    use WithPagination;

    public $balance;

    public $escrow_balance;

    public $perPage = 10;

    public $types;

    public $type;

    public $experts;

    public $customer;

    public function updatedType() {

    }

    public function mount() {
        $user = auth()->user();

        $this->balance = $user->profile->balance;
        $this->escrow_balance = $user->profile->escrow_balance;
    }

    public function paginationView()
    {
        return 'livewire.pagination';
    }

    public function render()
    {
        $user = auth()->user();

        $transactions = ClientTransaction::where( 'client_id', $user->id );

        if($this->type){
            $transactions = $transactions->where('type', TransactionType::from($this->type));
        }

        if($this->customer){
            $transactions = $transactions->where('expert_id', $this->customer);
        }

        $transactions = $transactions->orderby( 'id', 'desc' )->paginate($this->perPage);

        $this->types = TransactionType::cases();
        $this->experts = ClientTransaction::with('expert')->where('client_id', $user->id)->get()->unique('expert_id');

        return view('livewire.client.payment.report', [
            'transactions' => $transactions
        ]);
    }
}
