<?php

namespace App\Livewire\Profile\Experience;

use App\Livewire\Profile\Experience\Form;
use App\Models\Experience;
use WireElements\Pro\Components\Modal\Modal;

class Edit extends Modal
{
    public int|Experience $experience;

    public Form $form;

    public $years = [];

    public function mount(Experience $experience)
    {
        $this->experience = $experience;
        $this->form->set($experience);
        $this->years = years();
    }

    public function updateExperience()
    {
        $this->form->update();
        $this->dispatch('refresh')->to(\App\Livewire\Profile\Experience::class);
        $this->dispatch('refresh')->to(\App\Livewire\Profile\Edit\Experience::class);
        $this->close();
    }

    public function render()
    {
        return view('livewire.profile.experience.edit');
    }
}
