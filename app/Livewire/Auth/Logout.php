<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class Logout extends Component
{
    public function logout()
    {
        auth()->guard('web')->logout();

        session()->invalidate();
        session()->regenerateToken();

        return redirect()->route('home');
    }
    public function render()
    {
        return view('livewire.auth.logout');
    }
}
