<?php

namespace App\Livewire;

use App\Models\Country;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Livewire\Component;

class Registration extends Component
{
    protected array $availableTypes = ['expert', 'client'];

    public int $currentStep = 1;

    public array $titles;

    public array $countries;

    public string $type;
    public string $title;
    public string $first_name;
    public string $last_name;
    public string $email;
    public string $password;
    public string $country_id;
    public ?bool $newsletter = false;
    public ?bool $terms;

    public function mount()
    {
        $this->titles = ['Mr', 'Mrs'];
        $this->countries = Country::pluck('name', 'id')->toArray();
    }

    public function rules()
    {
        return [
            'title' => ['required'],
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required','email', 'unique:users'],
            'password' => ['required', Password::min(8)],
            'country_id' => ['required'],
            'newsletter' => ['nullable'],
            'terms' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'type.required' => 'Please select a type',
        ];
    }

    public function save()
    {
        $this->validate();
        $user = User::create([
            'name' => $this->fullName(),
            'title' => $this->title,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'user_type' => $this->type,
            'country_id' => $this->country_id,
            'newsletter' => $this->newsletter,
            'terms' => $this->terms,
        ]);
        event(new Registered($user));
        Profile::create([
            'user_id' => $user->id,
            'type' => $this->type,
        ]);
        Auth::login($user);
        return redirect()->route('verification.notice');
        // dd(auth()->user());
    }
    protected function fullName():string
    {
        return $this->first_name . ' ' . $this->last_name;
    }
    
    public function render()
    {
        return view('livewire.registration');
    }

    public function typeSelected()
    {
        $this->validate([
            'type' => ['required', \Illuminate\Validation\Rule::in($this->availableTypes)]
        ]);
        $this->currentStep = 2;
    }
}
