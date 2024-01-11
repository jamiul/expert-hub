<?php

namespace App\Livewire\Profile\Biography;

use App\Livewire\Profile\Biography;
use App\Livewire\Profile\Biography\Form;
use WireElements\Pro\Components\Modal\Modal;

class Create extends Modal
{
    public Form $form;

    public $biography = '';

    public function mount()
    {
        $this->biography = auth()->user()->profile->biography;
    }

    public function addBiography()
    {
        $this->form->update();
        $this->dispatch('refresh')->to(Biography::class);
        $this->dispatch('notify', content: 'Biography Added', type: 'success');
        $this->close();
    }

    public function render()
    {
        return view('livewire.profile.biography.create');
    }
}
