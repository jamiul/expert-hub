<?php

namespace App\Livewire\Experts;

use App\Models\Country;
use Livewire\Attributes\Url;
use Livewire\Component;

class Filter extends Component
{
    #[Url()]
    public $search = '';

    #[Url()]
    public $minimumHourlyRate = 0;

    #[Url()]
    public $maximumHourlyRate = 1000;

    #[Url()]
    public $selectedCountries = [];
    public $country = '';
    public $countries = null;
    public $searchCountry = '';

    public function mount()
    {
        $this->setcountries();
    }

    public function filter()
    {
        $filters = [
            'search' => $this->search,
            'minimumHourlyRate' => $this->minimumHourlyRate,
            'maximumHourlyRate' => $this->maximumHourlyRate,
            'selectedCountries' => $this->selectedCountries,
        ];
        $this->dispatch('expert-filter', $filters);
    }

    public function resetFilter()
    {
        $this->search = '';
        $this->minimumHourlyRate = '';
        $this->maximumHourlyRate = '';
        $this->selectedCountries = [];
        $this->filter();
    }

    public function updatedSearch()
    {
        $this->filter();
    }

    public function updatedCountry()
    {
        if ($this->country) {
            $this->countries = Country::where('name', 'like', '%' . $this->country . '%')
                ->whereNotIn('name', $this->selectedCountries)
                ->limit(5)
                ->get();
        } else {
            $this->setCountries();
        }
    }

    public function setCountries()
    {
        $this->countries = Country::whereNotIn('name', $this->selectedCountries)->limit(5)->get();
    }

    public function selectCountry($name)
    {
        $country = Country::where('name', $name)->first();
        $this->selectedCountries[] = $country->name;
        $this->setCountries();
        $this->filter();
    }

    public function removeCountry($name)
    {
        $this->selectedCountries = array_diff($this->selectedCountries, [$name]);
        $this->setCountries();
        $this->filter();
    }

    public function render()
    {
        return view('livewire.experts.filter');
    }
}
