<?php

namespace App\Livewire\Profile\Education;

use App\Livewire\Profile\Education\Form;
use App\Models\Degree;
use App\Models\Expertise;
use App\Models\University;
use WireElements\Pro\Components\Modal\Modal;

class Create extends Modal
{
    public Form $form;

    public $institutions = [];
    public $degrees = [];
    public $fields = [];
    public $years = [];

    public function mount()
    {
        $this->institutions = University::where('country_id', 12)->get();
        $this->degrees = Degree::get();
        $this->fields = Expertise::expertise()->isChild()->get();
        $this->years = years();
    }

    public function addEducation()
    {
        $this->form->create();
        $this->dispatch('refresh')->to(\App\Livewire\Profile\Education::class);
        $this->close();
    }
    
    public function render()
    {
        return view('livewire.profile.education.create');
    }
}
