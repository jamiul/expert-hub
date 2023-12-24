<?php

namespace App\Livewire\Profile\Education;

use App\Models\Education;
use Livewire\Attributes\Validate;
use Livewire\Form as BaseForm;

class Form extends BaseForm
{
    public $education;

    #[Validate('required')]
    public $institution = '';

    #[Validate('required')]
    public $degree = '';

    #[Validate('required')]
    public $field = '';

    #[Validate('required')]
    public $start_year = '';

    #[Validate('nullable')]
    public $end_year = '';

    public $currentEducation = false;

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
