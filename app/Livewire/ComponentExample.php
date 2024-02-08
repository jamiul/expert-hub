<?php

namespace App\Livewire;

use App\Models\Country;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Livewire\Component;

class ComponentExample extends Component
{
    public array $names = [];
    public $email = '';
    public $timepicker = '';
    public $countries = [];
    public $selectedCountries = [];

    public function selectCountry($name)
    {
        $country = Country::where('name', $name)->first();
        $this->selectedCountries[] = $country->name;
    }

    public function removeCountry($name)
    {
        $this->selectedCountries = array_diff($this->selectedCountries, [$name]);
    }

    public function mount()
    {
        $this->countries = Country::all();
    }
    public function render()
    {
        return view('livewire.component-example');
    }

    public function showNotification($type)
    {
        toast($type, 'Testing', $this);
    }

    public function submit()
    {
        dd($this->timepicker);
    }
}
