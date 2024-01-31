<?php

namespace App\Livewire\Favorite;

use App\Models\Profile;
use Livewire\Component;

class Expert extends Component
{
    public Profile $expert;

    public function render()
    {
        return view('livewire.favorite.expert');
    }

    public function favorite()
    {
        $redirectUrlIfNotAuthenticated = '';
        $this->expert->favourite($redirectUrlIfNotAuthenticated);
    }
}
