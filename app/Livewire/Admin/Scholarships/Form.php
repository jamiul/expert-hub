<?php

namespace App\Livewire\Admin\Scholarships;

use App\Models\Education;
use App\Models\Scholarship;
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

    //Todo Conditional validation

    #[Validate('nullable')]
    public $deadline = '';

    #[Validate('required|array')]
    public $studyAreas = [];

    #[Validate('required|array')]
    public $studyLevels = [];

    #[Validate('required|array')]
    public $fundTypes = [];

    public $countries = [];
    public $universities = [];

    public function create()
    {
        $data = $this->validate();

        $scholarship = Scholarship::create([
            'title' => $data['title'],
            'link' => $data['link'],
            'university_id' => $data['university_id'],
            'country_id' => $data['country_id'],
            'student_type' => $data['student_type'],
            'automatic_consideration' => $data['automatic_consideration'],
            'deadline' => $data['deadline'],
        ]);
        if(is_array($data['studyAreas'])){
            foreach($data['studyAreas'] as $studyArea){
                $scholarship->studyAreas()->attach($studyArea);
            }
        }
        if(is_array($data['studyLevels'])){
            foreach ($data['studyLevels'] as $studyLevel) {
                $scholarship->studyLevels()->create([
                    'name' => $studyLevel,
                ]);
            }
        }
        if(is_array($data['fundTypes'])){
            foreach ($data['fundTypes'] as $fundType) {
                $scholarship->fundTypes()->create([
                    'name' => $fundType,
                ]);
            }
        }
        $this->reset();
    }

    public function setOptions()
    {
        
    }

    public function set(Scholarship $scholarship)
    {
        $this->scholarship = $scholarship;
        $this->title = $scholarship->title;
        $this->link = $scholarship->link;
        $this->university_id = $scholarship->university_id;
        $this->country_id = $scholarship->country_id;
        $this->student_type = $scholarship->student_type;
        $this->automatic_consideration = $scholarship->automatic_consideration;
        $this->deadline = $scholarship->deadline->format('Y-m-d');
        $this->studyAreas = $this->scholarship->studyAreas->pluck('id')->toArray();
        $this->studyLevels = $this->scholarship->studyLevels->pluck('name')->toArray();
        $this->fundTypes = $this->scholarship->fundTypes->pluck('name')->toArray();
    }

    public function update()
    {
        $data = $this->validate();

        $this->scholarship->update([
            'title' => $data['title'],
            'link' => $data['link'],
            'university_id' => $data['university_id'],
            'country_id' => $data['country_id'],
            'student_type' => $data['student_type'],
            'automatic_consideration' => $data['automatic_consideration'],
            'deadline' => $data['deadline'],
        ]);
        if (is_array($data['studyAreas'])) {
            $this->scholarship->studyAreas()->sync($data['studyAreas']);
        }
        if (is_array($data['studyLevels'])) {
            foreach ($data['studyLevels'] as $studyLevel) {
                $this->scholarship->studyLevels()->updateOrCreate([
                    'name' => $studyLevel,
                ]);
            }
        }
        if (is_array($data['fundTypes'])) {
            foreach ($data['fundTypes'] as $fundType) {
                $this->scholarship->fundTypes()->updateOrCreate([
                    'name' => $fundType,
                ]);
            }
        }
        $this->reset();
    }

    public function profile()
    {
        return auth()->user()->profile;
    }
}
