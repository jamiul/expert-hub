<?php

namespace App\Livewire\Admin\Scholarships;

use App\Models\Education;
use Livewire\Attributes\Validate;
use Livewire\Form as BaseForm;

class Form extends BaseForm
{
    public $scholarship;

    #[Validate('required|max:500')]
    public $title = '';

    #[Validate('required')]
    public $link = '';

    #[Validate('required')]
    public $university_id = '';

    #[Validate('required')]
    public $country_id = '';

    #[Validate('required')]
    public $student_type = '';

    #[Validate('nullable')]
    public $automatic_consideration = false;

    #[Validate('nullable')]
    public $deadline = '';

    #[Validate('nullable')]
    public $studyAreas = [];

    #[Validate('nullable')]
    public $fundTypes = [];

    #[Validate('nullable')]
    public $studyLevels = [];

    public $countries = [];
    public $universities = [];

    public function create()
    {
        $data = $this->validate();

        if($data['end_year'] == ''){
            $data['end_year'] = null;
        }
        
        if ($this->currentEducation) {
            $data['end_year'] = null;
        }

        $this->profile()->education()->create($data);
        $this->reset();
    }

    public function setOptions()
    {
        
    }

    public function set(Education $education)
    {
        $this->education = $education;
        $this->institution = $education->institution;
        $this->degree = $education->degree;
        $this->field = $education->field;
        $this->start_year = $education->start_year;
        $this->end_year = $education->end_year;

        if(is_null($this->end_year)){
            $this->currentEducation = true;
        }
    }

    public function update()
    {
        $data = $this->validate();

        if ($this->currentEducation) {
            $data['end_year'] = null;
        }

        $this->education->update($data);
        $this->reset();
    }

    public function profile()
    {
        return auth()->user()->profile;
    }
}
