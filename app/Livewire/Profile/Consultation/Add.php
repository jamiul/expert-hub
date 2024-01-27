<?php

namespace App\Livewire\Profile\Consultation;

use App\Models\Expertise;
use Livewire\WithFileUploads;
use App\Livewire\Profile\Consultation\Form;
use WireElements\Pro\Components\Modal\Modal;

class Add extends Modal
{
    use WithFileUploads;
    public Form $form;

    public $expertSkills;

    public $expertFields;

    public function mount()
    {
        $this->expertFields = Expertise::expertise()->isParent()->get();
        $this->expertSkills = Expertise::skill()->isParent()->get();
    }

    public function addConsultation()
    {
        $this->form->add();
    }

    public function profile()
    {
        return auth()->user()->profile;
    }


    public function render()
    {
        return view('livewire.profile.consultation.add');
    }
}
