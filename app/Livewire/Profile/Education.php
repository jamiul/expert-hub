<?php

namespace App\Livewire\Profile;

use App\Models\Degree;
use App\Models\Expertise;
use App\Models\University;
use Livewire\Component;

class Education extends Component
{
    public $educations = [];
    public $education = null;
    public $institutions = [];
    public $degrees = [];
    public $fields = [];
    public $years = [];

    public $institution = '';
    public $degree = '';
    public $field = '';
    public $start_year = '';
    public $end_year = '';
    public $currentEducation = false;

    public function mount()
    {
        $this->educations = $this->profile()->education;
        $this->institutions = University::where('country_id', 14)->get();
        $this->degrees = Degree::get();
        $this->fields = Expertise::expertise()->isChild()->get();
        $this->years = years();
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

        if($this->currentEducation){
            $data['end_year'] = null;
        }

        $this->profile()->education()->create($data);
        $this->reset('institution', 'degree', 'field', 'start_year', 'end_year');
        $this->educations = $this->profile()->education;
        $this->dispatch('educationAdded');
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
        $this->dispatch('openEditEducationModal');
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
        $this->dispatch('educationUpdated');
    }


    public function deleteEducation($id)
    {
        $education = $this->profile()->education()->where('id', $id)->first();
        $this->education = $education;
    }

    public function destroyEducation()
    {
        $this->education->delete();
        $this->educations = $this->profile()->education;
        $this->dispatch('educationDeleted');
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
