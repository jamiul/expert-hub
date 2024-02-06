<?php

namespace App\Livewire\Contract\Client;

use App\Enums\ContractStatus;
use Livewire\Attributes\On;
use Livewire\Component;
#[On('contract-disputed')]
#[On('contract-ended')]
class Index extends Component
{
    public function render()
    {
        return view('livewire.contract.client.index',[
            'contracts' => auth()->user()->profile->clientContracts()->where('status', ContractStatus::Active)->get(),
            'endedContracts' => auth()->user()->profile->clientContracts()->where('status', ContractStatus::Ended)->get(),
            'disputedContracts' => auth()->user()->profile->clientContracts()->where('status', ContractStatus::Disputed)->get(),
        ]);
    }
}
