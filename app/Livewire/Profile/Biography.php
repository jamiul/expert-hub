<?php

namespace App\Livewire\Profile;

use Livewire\Component;
use Livewire\Attributes\On;

class Biography extends Component
{
    public $profile = [];
    public $biography = '';
    public $showReadMoreButton = null;
    public $editable = true;

    public function mount()
    {
        $this->profile = $this->profile();
        $this->biography = $this->profile->biography;
    }

    #[On('refresh')]
    public function refreshBiography()
    {
        $this->biography = $this->profile()->biography;
    }

    public function readLess()
    {
        $this->showReadMoreButton = null;
    }

    public function readMore($id)
    {
        $this->showReadMoreButton = $id;
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
