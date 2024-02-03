<?php

namespace App\Livewire\Training;

use App\Models\Country;
use App\Models\Language;
use App\Models\ProjectCategory;
use App\Models\Skill;
use App\Models\TrainingMode;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;

class Filter extends Component
{
    #[Url()]
    public $search = '';
    #[Url()]
    public $skillCategories = [];
    #[Url()]
    public $trainingDate = '';
    #[Url()]
    public $trainingMode = [];
    #[Url()]
    public $language = '';
    #[Url()]
    public $country = [];

    #[On('parent-filter')]
    public function filter()
    {
        $filters = [
            'search' => $this->search,
            'skillCategories' => $this->skillCategories,
            'trainingDate' => $this->trainingDate,
            'trainingMode' => $this->trainingMode,
            'language' => $this->language,
            'country' => $this->country,
        ];

        $this->dispatch('training-filter', $filters);
    }

    public function resetFilter()
    {
        $this->search = '';
        $this->skillCategories = [];
        $this->trainingDate = '';
        $this->trainingMode = [];
        $this->language = '';
        $this->country = [];

        $this->filter();
    }

    public function render()
    {
        $languages = Language::all();
        $countries = Country::all();
        // $trainingModes = TrainingMode::all();
        // $categories = Skill::isParent()->with('childrens')->get();

        return view('livewire.training.filter', compact('languages', 'countries'));
    }
}
