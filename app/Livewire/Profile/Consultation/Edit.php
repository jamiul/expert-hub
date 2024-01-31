<?php

namespace App\Livewire\Profile\Consultation;

use App\Models\Expertise;
use App\Models\Consultation;
use Livewire\WithFileUploads;
use App\Livewire\Profile\Consultation\Form;
use Label84\HoursHelper\Facades\HoursHelper;
use WireElements\Pro\Components\Modal\Modal;

class Edit extends Modal
{
    use WithFileUploads;
    public int|Consultation $consultation;
    public Form $form;

    public $editable = true;
    public $expertSkills;

    public $expertFields;
    public $hours = [];

    public function mount(Consultation $consultation)
    {
        $this->consultation = $consultation;
        $this->form->set($consultation);
        $this->expertFields = Expertise::expertise()->isParent()->get();
        $this->expertSkills = Expertise::skill()->isParent()->get();
        $this->hours = HoursHelper::create('00:00', '23:00', 60, 'g:i A');
    }

    public function editSlot($hour)
    {
        $this->form->editConsultationSlot($hour);
    }

    public function setSelectedSlots()
    {
        $this->form->setSlots();
    }

    public function updateConsultation()
    {
        $this->form->update();
        $this->dispatch('refresh')->to(\App\Livewire\Profile\Consultation::class);
        $this->close();
    }
    public function render()
    {
        return view('livewire.profile.consultation.edit');
    }
}
