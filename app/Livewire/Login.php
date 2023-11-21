<?php

namespace App\Livewire;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Login extends Component
{
    protected array $availableTypes = ['Expert', 'Client'];

    public $type;

    public int $currentStep = 1;

    public string $email = '';
    public string $password = '';
    public bool $remember = false;

    public function rules()
    {
        return [
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
            'remember' => ['boolean'],
        ];
    }
    public function messages()
    {
        return [
            'type.required' => 'Please select a type',
        ];
    }

    public function render()
    {
        return view('livewire.login');
    }

    public function typeSelected()
    {
        $this->validate([
            'type' => ['required', \Illuminate\Validation\Rule::in($this->availableTypes)]
        ]);
        $this->currentStep = 2;
    }

    public function login()
    {
        $this->validate();

        $this->ensureIsNotRateLimited();

        if (!auth()->attempt($this->only(['email', 'password'], $this->remember))) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }

        RateLimiter::clear($this->throttleKey());

        session()->regenerate();

        $this->redirect(
            session('url.intended', '/dashboard'),
            navigate: true
        );
    }

    protected function ensureIsNotRateLimited(): void
    {
        if (!RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout(request()));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    protected function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->email) . '|' . request()->ip());
    }
<<<<<<< HEAD
    
=======

>>>>>>> 857788eb327b646ddefce64c019537ab37ee95ca
}
