<?php

namespace App\Livewire\Auth;

use App\Enums\ProfileStatus;
use App\Enums\ProfileType;
use App\Models\Country;
use App\Models\Profile;
use App\Models\Title;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Livewire\Component;

class Registration extends Component
{
    public int $currentStep = 1;

    public array $titles;
    public array $countries;

    public string $type;
    public string $title;
    public string $first_name;
    public string $last_name;
    public string $email;
    public string $phone;
    public string $password;
    public string $password_confirmation;
    public string $country_id;
    public ?bool $send_tips = false;
    public ?bool $terms_agreed;

    public function mount()
    {
        $this->titles = Title::pluck('name')->toArray();
        $this->countries = Country::pluck('name', 'id')->toArray();
    }

    public function rules()
    {
        return [
            'type' => ['required'],
            'title' => ['required'],
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'phone' => ['nullable'],
            'password' => [
                'required', 
                Password::min(8)
                    ->mixedCase()
                    ->numbers()
                    ->symbols(),
            ],
            'password_confirmation' => ['required_with:password', 'same:password'],
            'country_id' => ['required'],
            'send_tips' => ['nullable'],
            'terms_agreed' => ['required'],
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
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
            'title' => $this->title,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'username' => $this->username(),
            'email' => $this->email,
            'phone' => $this->phone,
            'password' => Hash::make($this->password),
            'active_profile' => $this->type,
            'country_id' => $this->country_id,
            'send_tips' => $this->send_tips,
            'terms_agreed' => $this->terms_agreed,
        ]);
        event(new Registered($user));
        Profile::create([
            'user_id' => $user->id,
            'type' => $this->type,
            'status' => ProfileStatus::Draft,
        ]);
        Auth::login($user);
        if($this->type === ProfileType::Expert->value){
            return redirect()->route('verification.notice');
        }
        return redirect()->route('client.profile.position');
    }

    public function render()
    {
        return view('livewire.auth.registration');
    }

    public function username()
    {
        return Str::uuid();
    }

    public function typeSelected()
    {
        $availableTypes = [
            ProfileType::Expert->value,
            ProfileType::Client->value,
        ];
        $this->validate([
            'type' => ['required', Rule::in($availableTypes)]
        ]);
        $this->currentStep = 2;
    }
}
