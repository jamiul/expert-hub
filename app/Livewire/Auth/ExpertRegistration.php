<?php

namespace App\Livewire\Auth;

use App\Models\Country;
use App\Models\Title;
use Illuminate\Validation\Rules\Password;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Propaganistas\LaravelPhone\PhoneNumber;

class ExpertRegistration extends Component
{
    public int $currentStep = 1;
    public array $titles;
    public array $countries;

    #[Validate()]
    public $title = '';
    #[Validate()]
    public $full_name = '';
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
    public $country_id = '';
    #[Validate()]
    public $terms = '';

    public $expertCategories = [];
    public $expert_category_id;

    public $expertises = [];
    public $expertise_id;

    public $availableSkills = [];
    public $skills = [];

    public $biography;
    public $picture;
    public $pictureUrl = '';
    

    public function mount()
    {
        $this->titles    = Title::pluck('name')->toArray();
        $this->countries = Country::pluck('name', 'id')->toArray();
    }

    public function next()
    {
        if ($this->currentStep < 3) {
            $this->currentStep += 1;
        }
    }

    public function back()
    {
        if ($this->currentStep > 1) {
            $this->currentStep -= 1;
        }
    }

    public function createAccount()
    {
        $this->next();
        $this->stepOne();
    }

    public function stepOne()
    {
        $this->validate();
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
            'full_name' => ['required'],
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

    public function render()
    {
        return view('livewire.auth.expert-registration');
    }
}
