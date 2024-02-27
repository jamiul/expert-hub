<?php

namespace App\Livewire\Training;

use Livewire\Component;
use App\Models\Training;

class Details extends Component
{
    public $training;

    public function mount($training = null)
    {
        $this->training = $training;
    }

    public function favouriteTraining(Training $training)
    {
        $redirectUrlIfNotAuthenticated = route('trainings.show', ['training' => $this->training]);
        $training->favourite($redirectUrlIfNotAuthenticated);
    }

    public function render()
    {
        return view('livewire.training.details');
    }
}
