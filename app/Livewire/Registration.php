<?php

namespace App\Livewire;

use App\Models\Country;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Registration extends Component
{
    protected array $availableTypes = ['Expert', 'Client'];

    public int $currentStep = 1;

    public array $titles;

    public array $countries;

    public string $type;

    #[Rule('required')]
    public string $title = '';

    #[Rule('required')]
    public string $first_name = '';

    #[Rule('required')]
    public string $last_name = '';

    #[Rule('required')]
    public string $email = '';

    #[Rule('required')]
    public string $password = '';

    #[Rule('required')]
    public string $country_id = '';

    #[Rule('nullable')]
    public ?bool $newsletter = null;

    #[Rule('required')]
    public bool $terms;

    public function mount()
    {
        $this->titles = ['Mr', 'Mrs'];
        $this->countries = Country::pluck('name', 'id')->toArray();
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
        Profile::create(['user_id' => $user->id]);
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
