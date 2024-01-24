<?php

namespace App\Livewire\Profile\Consultation;

use App\Models\Expertise;
use App\Livewire\Profile\Consultation\Form;
use WireElements\Pro\Components\Modal\Modal;

class Add extends Modal
{
    public Form $form;

    public $expertSkills;
    
    public $expertFields;

    public function mount()
    {
        $this->expertFields = Expertise::expertise()->isParent()->get();
        $this->expertSkills = Expertise::skill()->isParent()->get();
    }

    public function render()
    {
        return view('livewire.profile.consultation.add');
    }
}
