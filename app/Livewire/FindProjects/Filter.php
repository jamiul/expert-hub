<?php

namespace App\Livewire\FindProjects;

use App\Models\Country;
use Livewire\Component;
use App\Models\Expertise;
use Livewire\Attributes\Url;

class Filter extends Component
{
    #[Url()]
    public $search = '';

    #[Url()]
    public $hourlyRate = '';

    #[Url()]
    public $fixedPrice = '';

    #[Url()]
    public $selectedCountries = [];
    public $country = '';
    public $countries = null;
    public $searchCountry = '';

    #[Url()]
    public $skills = [];
    public $expertSkills;

    public function mount()
    {
        $this->setcountries();
    }

    public function filter()
    {
        $filters = [
            'search' => $this->search,
            'hourlyRate' => $this->hourlyRate,
            'fields' => $this->fields,
            'skills' => $this->skills,
            'selectedCountries' => $this->selectedCountries,
        ];
        $this->dispatch('find-projects-filter', $filters);
    }

    public function resetFilter()
    {
        $this->search = '';
        $this->hourlyRate = '';
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
        $projectCategories = Expertise::skill()->isParent()->orderBy('name')->get();

        return view('livewire.find-projects.filter', compact('projectCategories'));
    }
}
