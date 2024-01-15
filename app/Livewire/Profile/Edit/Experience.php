<?php

namespace App\Livewire\Profile\Edit;

use Livewire\Attributes\On;
use Livewire\Component;
use WireElements\Pro\Concerns\InteractsWithConfirmationModal;

class Experience extends Component
{
    use InteractsWithConfirmationModal;

    public $experiences = [];
    public $experience = null;
    public $years = [];
    public $showReadMoreButton = null;
    public $editable = true;

    public function mount()
    {
        $this->experiences = $this->profile()->experiences;
        $this->years = years();
    }

    #[On('refresh')]
    public function updateExperienceList()
    {
        $this->experiences = $this->profile()->experiences;
    }

    public function deleteExperience($id)
    {
        $this->askForConfirmation(
            callback: function () use ($id) {
                $experience = $this->profile()->experiences()->where('id', $id)->first();
                $experience->delete();
                $this->updateExperienceList();
            },
        );
    }

    public function profile()
    {
        return auth()->user()->profile;
    }

    public function readLess()
    {
        $this->showReadMoreButton = null;
    }

    public function readMore($id)
    {
        $this->showReadMoreButton = $id;
    }

    public function render()
    {
        return view('livewire.profile.edit.experience');
    }
}
