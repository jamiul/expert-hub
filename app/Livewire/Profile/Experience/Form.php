<?php

namespace App\Livewire\Profile\Experience;

use App\Models\Education;
use App\Models\Experience;
use Livewire\Attributes\Validate;
use Livewire\Form as BaseForm;

class Form extends BaseForm
{
    public $experience;

    #[Validate('required')]
    public $title = '';

    #[Validate('required')]
    public $institute = '';

    #[Validate('required')]
    public $address = '';

    #[Validate('required')]
    public $start_year = '';

    #[Validate('nullable|gte:start_year')]
    public $end_year = '';

    #[Validate('nullable')]
    public $description = '';

    public $currentExperience = false;

    public function create()
    {
        $data = $this->validate();

        if ($data['end_year'] == '') {
            $data['end_year'] = null;
        }

        if ($this->currentExperience) {
            $data['end_year'] = null;
        }

        $this->profile()->experiences()->create($data);
        $this->reset();
    }

    public function set(Experience $experience)
    {
        $this->experience = $experience;
        $this->title = $experience->title;
        $this->institute = $experience->institute;
        $this->address = $experience->address;
        $this->start_year = $experience->start_year;
        $this->end_year = $experience->end_year;
        $this->description = $experience->description;

        if(is_null($this->end_year)){
            $this->currentExperience = true;
        }
    }

    public function update()
    {
        $data = $this->validate();

        if ($this->currentExperience) {
            $data['end_year'] = null;
        }

        $this->experience->update($data);
        $this->reset();
    }

    public function profile()
    {
        return auth()->user()->profile;
    }
}
