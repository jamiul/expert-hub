<?php

namespace App\Livewire;

use Livewire\Component;

class RequireSteps extends Component
{
    public $subtitle = '';
    public $title = '';
    
    public function render()
    {
        return view('livewire.require-steps');
    }
}
