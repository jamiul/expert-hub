<?php

namespace App\Livewire\Contract\Client;

use App\Enums\ContractStatus;
use Livewire\Attributes\On;
use Livewire\Component;
#[On('contract-ended')]
class Index extends Component
{
    public $contracts;
    public $endedContracts;

    public function mount()
    {
        $this->contracts = auth()->user()->profile->clientContracts()->where('status', ContractStatus::Active)->get();
        $this->endedContracts = auth()->user()->profile->clientContracts()->where('status', ContractStatus::Ended)->get();
    }
    public function render()
    {
        return view('livewire.contract.client.index');
    }
}
