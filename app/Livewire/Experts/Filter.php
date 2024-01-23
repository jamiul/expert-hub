<?php

namespace App\Livewire\Experts;

use App\Models\Country;
use App\Models\Expertise;
use Livewire\Attributes\Url;
use Livewire\Component;

class Filter extends Component
{
    public $filterByExpertField = [];
    public $filterByExpertSkill = [];

    #[Url()]
    public $search = '';

    #[Url()]
    public $hourlyRate = '';

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

    public function checkParentExpertField(Expertise $expertise)
    {
        if (in_array($expertise->name, $this->filterByExpertField)) {
            $this->fields = array_merge($this->fields, $expertise->children->pluck('name')->toArray());
        } else {
            $this->fields = array_diff($this->fields, $expertise->children->pluck('name')->toArray());
        }

        $this->fields = array_values($this->fields);

        $this->filter();
    }

    public function checkParentExpertSkill(Expertise $expertise)
    {
        if (in_array($expertise->name, $this->filterByExpertSkill)) {
            $this->skills = array_merge($this->skills, $expertise->children->pluck('name')->toArray());
        } else {
            $this->skills = array_diff($this->skills, $expertise->children->pluck('name')->toArray());
        }

        $this->skills = array_values($this->skills);

        $this->filter();
    }


    // public function checkParentExpertField(Expertise $expertise)
    // {
    //     $removeItems = [];

    //     foreach ($expertise->children as $child) {
    //         if (in_array($expertise->name, $this->filterByExpertField)) {
    //             $this->fields[] = $child->name;
    //         } else {
    //             $removeItems[] = $child->name;
    //         }
    //     }

    //     $this->fields = array_values(array_diff($this->fields, $removeItems));

    //     $this->filter();
    // }

    // public function checkParentExpertSkill(Expertise $expertise)
    // {
    //     $removeItems = [];

    //     foreach ($expertise->children as $child) {
    //         if (in_array($expertise->name, $this->filterByExpertSkill)) {
    //             $this->skills[] = $child->name;
    //         } else {
    //             $removeItems[] = $child->name;
    //         }
    //     }

    //     $this->skills = array_values(array_diff($this->skills, $removeItems));

    //     $this->filter();
    // }

    public function filter()
    {
        $filters = [
            'search' => $this->search,
            'hourlyRate' => $this->hourlyRate,
            'selectedCountries' => $this->selectedCountries,
            'filterByExpertField' => $this->filterByExpertField,
            'filterByExpertSkill' => $this->filterByExpertSkill,
            'fields' => $this->fields,
            'skills' => $this->skills,
        ];
        $this->dispatch('expert-filter', $filters);
    }

    public function resetFilter()
    {
        $this->search = '';
        $this->hourlyRate = '';
        $this->selectedCountries = [];
        $this->filterByExpertField = [];
        $this->filterByExpertSkill = [];
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
