<?php

namespace App\Livewire\Profile;

use Livewire\Component;

class Experience extends Component
{
    public $experiences = [];
    public $experience = null;
    public $title = '';
    public $institute = '';
    public $address = '';
    public $start_year = '';
    public $end_year = '';
    public $description = '';

    public function mount()
    {
        $this->experiences = $this->profile()->experiences;
    }

    public function addExperience()
    {
        $data = $this->validate([
            'title' => ['required'],
            'institute' => ['required'],
            'address' => ['required'],
            'start_year' => ['required'],
            'end_year' => ['nullable'],
            'description' => ['nullable'],
        ]);
        $this->profile()->experiences()->create($data);
        $this->reset('title', 'institute', 'address', 'start_year', 'end_year', 'description');
        $this->experiences = $this->profile()->experiences;
        $this->dispatch('experienceAdded', 'addExperience');
    }

    public function editExperience($id)
    {
        $experience = $this->profile()->experiences()->where('id', $id)->first();
        $this->experience = $experience;
        $this->title = $experience->title;
        $this->institute = $experience->institute;
        $this->address = $experience->address;
        $this->start_year = $experience->start_year;
        $this->end_year = $experience->end_year;
        $this->description = $experience->description;
        $this->dispatch('openEditExperienceModal', 'editExperience');
    }

    public function updateExperience()
    {
        $data = $this->validate([
            'title' => ['required'],
            'institute' => ['required'],
            'address' => ['required'],
            'start_year' => ['required'],
            'end_year' => ['nullable'],
            'description' => ['nullable'],
        ]);
        $this->experience->update($data);
        $this->experiences = $this->profile()->experiences;
        $this->reset('title', 'institute', 'address', 'start_year', 'end_year', 'description');
        $this->dispatch('closeEditExperienceModal', 'editExperience');
    }

    public function removeExperience($id)
    {
        $experience = $this->profile()->experiences()->where('id', $id)->first();
        $experience->delete();
        $this->experiences = $this->profile()->experiences;
    }

    public function profile()
    {
        return auth()->user()->profile;
    }

    public function render()
    {
        return view('livewire.profile.experience');
    }
}
