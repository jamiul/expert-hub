<?php

namespace App\Livewire\Contract\Expert;

use App\Enums\ContractStatus;
use Livewire\Component;

class Index extends Component
{
    public $contracts;
    public $endedContracts;

    public function mount()
    {
        $this->contracts = auth()->user()->profile->expertContracts()->where('status', ContractStatus::Active)->get();
        $this->endedContracts = auth()->user()->profile->expertContracts()->where('status', ContractStatus::Ended)->get();
    }

    public function render()
    {
        return view('livewire.contract.expert.index');
    }
}
