<?php

namespace App\Livewire\Profile\Consultation;

use DateTimeZone;
use App\Models\Expertise;
use Livewire\WithFileUploads;
use App\Livewire\Profile\Consultation\Form;
use Label84\HoursHelper\Facades\HoursHelper;
use WireElements\Pro\Components\Modal\Modal;

class Add extends Modal
{
    use WithFileUploads;
    public Form $form;

    public $editable = false;
    public $expertSkills;

    public $expertFields;
    public $hours = [];
    public $timezoneIndetifiers = [];

    public function mount()
    {
        $this->expertFields = Expertise::expertise()->isParent()->get();
        $this->expertSkills = Expertise::skill()->isParent()->get();
        $this->hours = HoursHelper::create('00:00', '23:00', 60, 'g:i A');
        $this->timezoneIndetifiers = DateTimeZone::listIdentifiers( DateTimeZone::AUSTRALIA  );
    }

    public function addConsultation()
    {
        $this->form->add();
        $this->dispatch('refresh')->to(\App\Livewire\Profile\Consultation::class);
        $this->close();
    }

    public function addSlot($hour)
    {
        $this->form->addConsultationSlot($hour);
    }

    public function setSelectedSlots()
    {
        $this->form->setSlots();
    }

    public function filterDay()
    {
        $this->form->updatedDate();
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
