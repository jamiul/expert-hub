<?php

namespace App\Livewire\Profile\Consultation;

use App\Models\Expertise;
use Livewire\WithFileUploads;
use App\Livewire\Profile\Consultation\Form;
use WireElements\Pro\Components\Modal\Modal;
use Label84\HoursHelper\Facades\HoursHelper;

class Add extends Modal
{
    use WithFileUploads;
    public Form $form;

    public $expertSkills;

    public $expertFields;
    public $hours = [];

    public function mount()
    {
        $this->expertFields = Expertise::expertise()->isParent()->get();
        $this->expertSkills = Expertise::skill()->isParent()->get();
        $this->hours = HoursHelper::create('00:00', '23:00', 60, 'g:i A');
    }

    public function addConsultation()
    {
        $this->form->add();
        $this->dispatch('refresh')->to(\App\Livewire\Profile\Consultation::class);
        $this->close();
    }

    public function addConsultationSlot($hour)
    {
        $this->form->consultationSlot($hour);
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
