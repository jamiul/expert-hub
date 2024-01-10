<?php

namespace App\Livewire\Profile\Experience;

use App\Livewire\Profile\Experience\Form;
use WireElements\Pro\Components\Modal\Modal;

class Create extends Modal
{
    public Form $form;

    public $years = [];

    public function mount()
    {
        $this->years = years();
    }

    public function addExperience()
    {
        $this->form->create();
        $this->dispatch('refresh')->to(\App\Livewire\Profile\Experience::class);
        $this->dispatch('refresh')->to(\App\Livewire\Profile\Edit\Experience::class);
        $this->close();
    }

    public function render()
    {
        return view('livewire.profile.experience.create');
    }
}
