<?php

namespace App\Livewire\Profile\Consultation;

use DateTimeZone;
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

    public int $currentStep = 1;
    public $editable = true;
    public $expertSkills;

    public $expertFields;
    public $hours = [];
    public $timezoneIndetifiers = [];

    public function mount(Consultation $consultation)
    {
        $this->consultation = $consultation;
        $this->form->set($consultation);
        $this->expertFields = Expertise::expertise()->isParent()->get();
        $this->expertSkills = Expertise::skill()->isParent()->get();
        $this->hours = HoursHelper::create('00:00', '23:00', 60, 'g:i A');
        $this->timezoneIndetifiers = DateTimeZone::listIdentifiers( DateTimeZone::AUSTRALIA  );
    }

    public function next()
    {
        if($this->currentStep === 1) {
            $this->form->saveExpertise();
        }
        if($this->currentStep === 2){
            $this->form->saveServiceFee();
        }
        if($this->currentStep === 3){
            $this->form->saveAvailability();
        }
        if($this->currentStep === 4){
            $this->form->saveSummary();
        }
        if($this->currentStep === 5){
            $this->form->previewService();
        }

        if ($this->currentStep < 6) {
            $this->currentStep += 1;
        }
    }

    public function back()
    {
        if ($this->currentStep > 1) {
            $this->currentStep -= 1;
        }
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

    public function filterDay()
    {
        $this->form->updatedDate();
    }
    public function render()
    {
        return view('livewire.profile.consultation.edit');
    }

    public static function attributes(): array
    {
        return [
            'size' => '4xl',
        ];
    }
}
