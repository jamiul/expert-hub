<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component
{
    public function logout()
    {
        if (auth()->check()) {
            auth()->logout();
            return redirect()->route('auth.login');
        }

        return redirect()->route('admin.login');
    }


    public function render()
    {
        return view('livewire.logout');
    }
}
