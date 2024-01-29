<?php

namespace App\Livewire\Contract\Client;

use Livewire\Component;

class Index extends Component
{
    public $contracts;

    public function mount()
    {
        $this->contracts = auth()->user()->profile->clientContracts;
    }
    public function render()
    {
        return view('livewire.contract.client.index');
    }
}
