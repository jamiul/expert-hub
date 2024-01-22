<?php

namespace App\Livewire\FindProjects;

use App\Models\Country;
use Livewire\Component;
use App\Models\Expertise;
use Livewire\Attributes\Url;

class Filter extends Component
{
    public $filterByCategories = [];

    #[Url()]
    public $search = '';

    #[Url()]
    public $skills = [];
    public $expertSkills;

    #[Url()]
    public $projectTypes = [];

    #[Url()]
    public $startAmount = [];

    #[Url()]
    public $endAmount = [];

    #[Url()]
    public $selectedCountries = [];
    public $country = '';
    public $countries = null;
    public $searchCountry = '';



    public function mount()
    {
        $this->setcountries();
    }

    public function checkParent(Expertise $expertise)
    {
        $removeItems = [];

        foreach ($expertise->children as $child) {
            if (in_array($expertise->name, $this->filterByCategories)) {
                $this->skills[] = $child->name;
            } else {
                $removeItems[] = $child->name;
            }
        }

        $this->skills = array_diff($this->skills, $removeItems);

        $this->filter();
    }

    public function filter()
    {
        $filters = [
            'search' => $this->search,
            'skills' => $this->skills,
            'filterByCategories' => $this->filterByCategories,
            'projectTypes' => $this->projectTypes,
            'startAmount' => $this->startAmount,
            'endAmount' => $this->endAmount,
            'selectedCountries' => $this->selectedCountries,
        ];
        $this->dispatch('find-projects-filter', $filters);
    }

    public function resetFilter()
    {
        $this->search = '';
        $this->skills = [];
        $this->filterByCategories = [];
        $this->projectTypes = [];
        $this->startAmount = [];
        $this->endAmount = [];
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
        $projectCategories = Expertise::skill()->isParent()->orderBy('name')->get();

        return view('livewire.find-projects.filter', compact('projectCategories'));
    }
}
