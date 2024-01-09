<?php

namespace App\Livewire\Profile\Biography;

use App\Livewire\Profile\Biography;
use App\Models\Profile;
use WireElements\Pro\Components\Modal\Modal;

class Edit extends Modal
{
    public int|Profile $profile;

    public Form $form;

    public $biography = '';

    public function mount(Profile $profile)
    {
        $this->profile = $profile;
        $this->form->set($profile);
    }

    public function updateBiography()
    {
        $this->form->update();
        $this->dispatch('refresh')->to(Biography::class);
        $this->dispatch('notify', content: 'Biography updated', type: 'success');
        $this->close();
    }

    public function render()
    {
        return view('livewire.profile.biography.edit');
    }
}
