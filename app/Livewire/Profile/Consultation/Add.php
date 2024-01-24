<?php

namespace App\Livewire\Profile\Consultation;

use App\Livewire\Consultation\Form;
use WireElements\Pro\Components\Modal\Modal;

class Add extends Modal
{
    public Form $form;

    public function render()
    {
        return view('livewire.profile.consultation.add');
    }
}
