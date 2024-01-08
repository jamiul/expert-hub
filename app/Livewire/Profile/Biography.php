<?php

namespace App\Livewire\Profile;

use Livewire\Component;

class Biography extends Component
{
    public $profile = [];
    public $biography = '';

    public function mount()
    {
        $this->profile = $this->profile();
        $this->biography = $this->profile->biography;
    }
    public function render()
    {
        return view('livewire.profile.biography');
    }

    public function profile()
    {
        return auth()->user()->profile;
    }
}
