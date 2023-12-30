<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Password;
use Livewire\Component;

class ForgotPassword extends Component
{
    public string $email = '';

    public function rules()
    {
        return [
            'email' => ['required', 'email'],
        ];
    }

    public function sendPasswordResetLink()
    {
        $this->validate();

        $status = Password::sendResetLink(
            $this->only('email')
        );
        if ($status != Password::RESET_LINK_SENT) {
            $this->addError('email', __($status));

            return;
        }
        session()->flash('status', __($status));
        
        $this->reset('email');

    }

    public function render()
    {
        return view('livewire.auth.forgot-password');
    }
}
