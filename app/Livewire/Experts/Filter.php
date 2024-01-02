<?php

namespace App\Livewire\Experts;

use App\Models\Country;
use App\Models\Expertise;
use Livewire\Attributes\Url;
use Livewire\Component;

class Filter extends Component
{
    #[Url()]
    public $search = '';

    #[Url()]
    public $minimumHourlyRate = '';

    #[Url()]
    public $maximumHourlyRate = '';

    #[Url()]
    public $selectedCountries = [];
    public $country = '';
    public $countries = null;
    public $searchCountry = '';

    #[Url()]
    public $fields = [];
    public $expertFields;

    #[Url()]
    public $skills = [];
    public $expertSkills;

    public function mount()
    {
        $this->setcountries();
        $this->expertFields = Expertise::expertise()->isParent()->get();
        $this->expertSkills = Expertise::skill()->isParent()->get();
    }

    public function filter()
    {
        $filters = [
            'search' => $this->search,
            'minimumHourlyRate' => $this->minimumHourlyRate,
            'maximumHourlyRate' => $this->maximumHourlyRate,
            'selectedCountries' => $this->selectedCountries,
            'fields' => $this->fields,
            'skills' => $this->skills,
        ];
        $this->dispatch('expert-filter', $filters);
    }

    public function resetFilter()
    {
        $this->search = '';
        $this->minimumHourlyRate = '';
        $this->maximumHourlyRate = '';
        $this->selectedCountries = [];
        $this->fields = [];
        $this->skills = [];
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
