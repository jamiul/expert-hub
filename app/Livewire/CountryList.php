<?php

namespace App\Livewire;

use App\Models\Country;
use Livewire\Component;

class CountryList extends Component
{
    public $countries;

    public function mount()
    {
        $this->countries = Country::all();
    }
    public function render()
    {
        return view('livewire.country-list');
    }
}
