<?php

namespace App\Livewire\Profile\Education;

use App\Livewire\Profile\Education\Form;
use App\Models\Degree;
use App\Models\Education;
use App\Models\Expertise;
use App\Models\University;
use WireElements\Pro\Components\Modal\Modal;

class Edit extends Modal
{
    public int|Education $education;

    public Form $form;

    public $institutions = [];
    public $degrees = [];
    public $fields = [];
    public $years = [];

    public function mount(Education $education)
    {
        $this->education = $education;
        $this->form->set($education);
        $this->institutions = University::where('country_id', 14)->get();
        $this->degrees = Degree::get();
        $this->fields = Expertise::expertise()->isChild()->get();
        $this->years = years();
    }

    public function updateEducation()
    {
        $this->form->update();
        $this->dispatch('refresh')->to(\App\Livewire\Profile\Education::class);
        $this->close();
    }

    public function render()
    {
        return view('livewire.profile.education.edit');
    }
}
