<?php

namespace App\Livewire\Scholarship;

use App\Enums\Scholarship\FundType;
use App\Models\Country;
use Livewire\Attributes\Url;
use Livewire\Component;

class Filter extends Component
{
    #[Url()]
    public $search = null;
    #[Url()]
    public $scholarshipType = [];
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
            'scholarshipType' => $this->scholarshipType,
            'selectedCountries' => $this->selectedCountries,
        ];
        $this->dispatch('scholarship-filter', $filters);
    }

    public function resetFilter()
    {
        $this->search = '';
        $this->scholarshipType = [];
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
        }else{
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
        $scholarshipTypes = FundType::cases();
        return view('livewire.scholarship.filter',[
            'scholarshipTypes' => $scholarshipTypes,
        ]);
    }
}
