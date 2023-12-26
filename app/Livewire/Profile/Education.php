<?php

namespace App\Livewire\Profile;

use Livewire\Attributes\On;
use Livewire\Component;
use WireElements\Pro\Concerns\InteractsWithConfirmationModal;

class Education extends Component
{
    use InteractsWithConfirmationModal;
    
    public $educations = [];

    public function mount()
    {
        $this->educations = $this->profile()->education;
    }

    #[On('refresh')]
    public function updateEducationList()
    {
        $this->educations = $this->profile()->education;
    }

    public function deleteEducation($id)
    {
        $this->askForConfirmation(
            callback: function () use ($id) {
                $education = $this->profile()->education()->where('id', $id)->first();
                $education->delete();
                $this->updateEducationList();
            },
        );
    }

    public function profile()
    {
        return auth()->user()->profile;
    }

    public function render()
    {
        return view('livewire.profile.education');
    }
}
