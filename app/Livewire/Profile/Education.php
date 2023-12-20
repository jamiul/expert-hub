<?php

namespace App\Livewire\Profile;

use Livewire\Component;

class Education extends Component
{
    public $educations = [];
    public $education = null;
    public $institution = '';
    public $degree = '';
    public $field = '';
    public $start_year = '';
    public $end_year = '';

    public function mount()
    {
        $this->educations = $this->profile()->education;
    }

    public function addEducation()
    {
        $data = $this->validate([
            'institution' => ['required'],
            'degree' => ['required'],
            'field' => ['required'],
            'start_year' => ['required'],
            'end_year' => ['nullable'],
        ]);

        $this->profile()->education()->create($data);
        $this->reset('institution', 'degree', 'field', 'start_year', 'end_year');
        $this->educations = $this->profile()->education;
        $this->dispatch('educationAdded', 'addEducation');
    }

    public function editEducation($id)
    {
        $education = $this->profile()->education()->where('id', $id)->first();
        $this->education = $education;
        $this->institution = $education->institution;
        $this->degree = $education->degree;
        $this->field = $education->field;
        $this->start_year = $education->start_year;
        $this->end_year = $education->end_year;
        $this->dispatch('openEditEducationModal', 'editEducation');
    }

    public function updateEducation()
    {
        $data = $this->validate([
            'institution' => ['required'],
            'degree' => ['required'],
            'field' => ['required'],
            'start_year' => ['required'],
            'end_year' => ['nullable'],
        ]);
        $this->education->update($data);
        $this->educations = $this->profile()->education;
        $this->reset('institution', 'degree', 'field', 'start_year', 'end_year');
        $this->dispatch('closeEditEducationModal', 'editEducation');
    }

    public function removeEducation($id)
    {
        $education = $this->profile()->education()->where('id', $id)->first();
        $education->delete();
        $this->education = $this->profile()->education;
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
