<?php

namespace App\Livewire\Training;

use App\Models\Country;
use App\Models\Expertise;
use App\Models\Language;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;

class Filter extends Component
{
    #[Url()]
    public $search = '';
    #[Url()]
    public $categories = [];
    #[Url()]
    public $date = '';
    #[Url()]
    public $mode = [];
    #[Url()]
    public $selectedLanguages = [];
    public $language;
    public $languages;
    #[Url()]
    public $selectedCountries = [];
    public $country;
    public $countries;

    public function mount()
    {
        $this->countries = Country::get();
        $this->languages = Language::get();
        // $this->date = now()->format('d M Y');
    }

    public function filter()
    {
        $filters = [
            'search' => $this->search,
            'categories' => $this->categories,
            'date' => $this->date,
            'mode' => $this->mode,
            'selectedLanguages' => $this->selectedLanguages,
            'selectedCountries' => $this->selectedCountries,
        ];

        $this->dispatch('training-filter', $filters);
    }

    public function resetFilter()
    {
        $this->search = '';
        $this->categories = [];
        $this->date = '';
        $this->mode = [];
        $this->selectedLanguages = [];
        $this->selectedCountries = [];

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

    public function updatedLanguage()
    {
        if ($this->language) {
            $this->languages = Language::where('name', 'like', '%' . $this->language . '%')
                ->whereNotIn('name', $this->selectedLanguages)
                ->limit(5)
                ->get();
        } else {
            $this->setLanguages();
        }
    }

    public function setLanguages()
    {
        $this->languages = Language::whereNotIn('name', $this->selectedLanguages)->limit(5)->get();
    }

    public function selectLanguage($name)
    {
        $language = Language::where('name', $name)->first();
        $this->selectedLanguages[] = $language->name;
        $this->setLanguages();
        $this->filter();
    }

    public function removeLanguage($name)
    {
        $this->selectedLanguages = array_diff($this->selectedLanguages, [$name]);
        $this->setLanguages();
        $this->filter();
    }

    public function render()
    {
        $availableCategories = Expertise::expertise()->isParent()->pluck('id', 'name')->toArray();
        return view('livewire.training.filter', compact('availableCategories'));
    }
}
