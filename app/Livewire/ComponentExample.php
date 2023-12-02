<?php

namespace App\Livewire;

use Livewire\Component;

class ComponentExample extends Component
{
    public array $names = [];
    public $email = '';
    public function render()
    {
        return view('livewire.component-example');
    }

    public function submit()
    {
        dd($this->names);
    }
}
