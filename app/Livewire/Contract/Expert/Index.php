<?php

namespace App\Livewire\Contract\Expert;

use Livewire\Component;

class Index extends Component
{
    public $contracts;

    public function mount()
    {
        $this->contracts = auth()->user()->profile->expertContracts;
    }

    public function render()
    {
        return view('livewire.contract.expert.index');
    }
}
