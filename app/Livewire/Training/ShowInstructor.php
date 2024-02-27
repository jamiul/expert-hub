<?php

namespace App\Livewire\Training;

use App\Models\Profile;
use Livewire\Component;

class ShowInstructor extends Component
{
    public $training;

    public function mount($training = null)
    {
        $this->training = $training;
    }

    public function favouriteIntructor(Profile $profile)
    {
        $redirectUrlIfNotAuthenticated = route('trainings.show', ['training' => $this->training]);
        $profile->favourite($redirectUrlIfNotAuthenticated);
    }

    public function render()
    {
        $instructors = $this->training->instructors;

        return view('livewire.training.show-instructor', compact('instructors'));
    }
}
