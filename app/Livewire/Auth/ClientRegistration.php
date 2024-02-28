<?php

namespace App\Livewire\Auth;

use App\Enums\ProfileStatus;
use App\Enums\ProfileType;
use App\Models\Country;
use App\Models\Profile;
use App\Models\Title;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Password;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Propaganistas\LaravelPhone\PhoneNumber;

class ClientRegistration extends Component
{
    public int $currentStep = 1;
    public array $titles;
    public array $countries;

    #[Validate()]
    public $title = '';
    #[Validate()]
    public $first_name = '';
    #[Validate()]
    public $last_name = '';
    #[Validate()]
    public $email = '';
    #[Validate()]
    public $phone = '';
    #[Validate()]
    public $phone_country = 'AU';
    #[Validate()]
    public $password = '';
    #[Validate()]
    public $password_confirmation = '';
    #[Validate()]
    public $country_id = '12';
    #[Validate()]
    public $terms = '';

    public function mount()
    {
        $this->titles    = Title::pluck('name')->toArray();
        $this->countries = Country::pluck('name', 'id')->toArray();
    }

    public function createAccount()
    {
        $this->validate();
        try {
            DB::transaction(function (): void {
                $profileType = ProfileType::Client;
                $phoneNumber = new PhoneNumber($this->phone, $this->phone_country);
                $user = User::create([
                    'title' => $this->title,
                    'first_name' => $this->first_name,
                    'last_name' => $this->last_name,
                    'username' => $this->username(),
                    'email' => $this->email,
                    'phone' => $phoneNumber->isOfCountry($this->phone_country) ? $phoneNumber->formatE164() : null,
                    'password' => Hash::make($this->password),
                    'active_profile' => $profileType,
                    'country_id' => $this->country_id,
                    'terms' => $this->terms,
                ]);

                Profile::create([
                    'user_id' => $user->id,
                    'type'    => $profileType,
                    'status'  => ProfileStatus::Draft,
                ]);

                Auth::login($user);
            });
            $this->redirectRoute('auth.client.profile-setup');
        } catch (Exception $e) {
            throw new Exception($e);
        }
    }

    public function messages()
    {
        return [
            'phone' => 'The :attribute field must be a valid number.',
        ];
    }

    public function rules()
    {
        return [
            'title' => ['required'],
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'phone' => ['required', 'phone:'. $this->phone_country],
            'password' => [
                'required',
                Password::min(8)
                    ->mixedCase()
                    ->numbers()
                    ->symbols(),
            ],
            'password_confirmation' => ['required_with:password', 'same:password'],
            'country_id' => ['required'],
            'terms' => ['accepted'],
        ];
    }

    public function username()
    {
        return Str::uuid();
    }

    public function render()
    {
        return view('livewire.auth.client-registration');
    }
}
