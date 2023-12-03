<?php

namespace App\Livewire\Experts;

use App\Models\Country;
use App\Models\Expertise;
use App\Models\Skill;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;


class FilterExperts extends Component
{
    use WithPagination;
    #[Url()]
    public $search = '';
    #[Url()]
    public $expertsByArea = [];
    #[Url()]
    public $categoriesByExpertise = [];
    #[Url()]
    public $availableFor = [];
    #[Url()]
    public $hourlyRate = [];
    #[Url()]
    public $location = [];
    #[Url()]
    public $rating = 5;

    #[On('handleSubmitFilter')]
    public function handleSubmitFilter($filters)
    {
        $this->search = $filters['search'];
        $this->expertsByArea = $filters['selectedExpertsByArea'];
        $this->categoriesByExpertise = $filters['selectedCategoriesByExpertise'];
        $this->availableFor = $filters['selectedAvailableFor'];
        $this->hourlyRate = $filters['selectedHourlyRate'];
        $this->location = $filters['selectedLocation'];
        $this->rating = $filters['rating'];
        $this->dispatch('handleCompleteSubmitFilter', $filters);
    }

    #[On('handleClearFilter')]
    public function handleClearFilter()
    {
        $this->search = [];
        $this->expertsByArea = [];
        $this->categoriesByExpertise = [];
        $this->availableFor = [];
        $this->hourlyRate = [];
        $this->location = [];
        $this->rating = [];
        $this->dispatch('handleCompleteClearFilter');
    }

    public function render()
    {
        $countries = Country::all();
        $categories = Skill::isParent()->with('childrens')->get();
        $expertises = Expertise::isParent()->with('childrens')->get();
        return view('livewire.experts.filter-experts', compact('expertises', 'categories', 'countries'));
    }
}
