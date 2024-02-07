<?php

namespace App\Livewire\ExpertProfile\Consultation;

use Livewire\Component;

class Lists extends Component
{
    // public $consultations;
    public $expert;

    public function render()
    {
        return view('livewire.expert-profile.consultation.lists');
    }
}
