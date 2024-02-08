<?php

namespace App\Livewire\Training;

use WireElements\Pro\Components\Modal\Modal;

class Register extends Modal
{
    public $training;
    
    public function mount($training)
    {
        
        $this->training= $training;
    }

   

    public function render()
    {
        return view('livewire.training.register');
    }
}
