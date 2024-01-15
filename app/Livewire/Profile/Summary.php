<?php

namespace App\Livewire\Profile;

use Carbon\Carbon;
use Livewire\Component;

class Summary extends Component
{
    public $profile = [];
    public $expertDashboard = false;
    public $editable = true;
    // public $today = '';

    public function mount()
    {
        $this->profile = $this->profile();
        // $this->today = Carbon::now();
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
