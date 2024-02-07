<?php

namespace App\Livewire\ExpertProfile\Consultation;

use WireElements\Pro\Components\Modal\Modal;
use App\Livewire\ExpertProfile\Consultation\Form;
use App\Models\Consultation;

class Book extends Modal
{
    public int|Consultation $consultation;
    public  Form $form;

    public function mount(Consultation $consultation)
    {
        $this->consultation = $consultation;
        $this->form->set($consultation);
    }

    public function bookConsultation()
    {
        $this->form->add();
    }

    public function filterDate()
    {
        $this->form->pickDate();
    }

    public function setSlot($id,$time)
    {
        // dd($id,$time);
        $this->form->selectedSlot($id, $time);
    }
    public function render()
    {
        return view('livewire.expert-profile.consultation.book');
    }

    public static function attributes(): array
    {
        return [
            'size' => '4xl',
        ];
    }
}
