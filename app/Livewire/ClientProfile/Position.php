<?php

namespace App\Livewire\ClientProfile;

use Livewire\Attributes\Validate;
use Livewire\Component;

class Position extends Component
{
    #[Validate('required')]
    public $current_role = '';

    #[Validate('nullable')]
    public $current_organization = '';

    public function save()
    {
        $this->validate();
        $profile = auth()->user()->profile;
        $profile->update([
            'current_role' => $this->current_role,
            'current_organization' => $this->current_organization,
        ]);
        return redirect()->route('client.profile');
    }

    public function render()
    {
        return view('livewire.client-profile.position');
    }
}
