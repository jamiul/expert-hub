<?php

namespace App\Livewire\Profile;

use Livewire\Component;

class Summary extends Component
{
    public $profile = [];

    public function mount()
    {
        $this->profile = $this->profile();
        // dd($this->profile->user->full_name);
    }

    public function profile()
    {
        return auth()->user()->profile;
    }

    public function render()
    {
        return view('livewire.profile.summary');
    }
}
