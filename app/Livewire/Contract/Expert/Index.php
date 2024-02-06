<?php

namespace App\Livewire\Contract\Expert;

use App\Enums\ContractStatus;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.contract.expert.index',[
            'contracts' => auth()->user()->profile->expertContracts()->where('status', ContractStatus::Active)->get(),
            'endedContracts' => auth()->user()->profile->expertContracts()->where('status', ContractStatus::Ended)->get(),
            'disputedContracts' => auth()->user()->profile->expertContracts()->where('status', ContractStatus::Disputed)->get(),
        ]);
    }
}
