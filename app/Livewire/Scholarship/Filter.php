<?php

namespace App\Livewire\Scholarship;

use App\Enums\Scholarship\FundType;
use App\Enums\Scholarship\StudentType;
use App\Enums\Scholarship\StudyLevel;
use App\Models\Country;
use App\Models\Expertise;
use App\Models\ScholarshipCountry;
use App\Models\ScholarshipLevel;
use App\Models\ScholarshipType;
use App\Models\ScholarshipUniversity;
use App\Models\StudyArea;
use App\Models\University;
use Livewire\Attributes\Url;
use Livewire\Component;

class Filter extends Component
{
    #[Url()]
    public $search = null;
    #[Url()]
    public $level = [];
    #[Url()]
    public $studyArea = [];
    #[Url()]
    public $studentType = [];
    #[Url()]
    public $scholarshipType = [];
    #[Url()]
    public $applicationDeadline = '';
    #[Url()]
    public $country = '';
    public $selectedCountries = [];
    public $countries = null;
    public $searchCountry = '';
    #[Url()]
    public $university = '';
    public $selectedUniversities = [];
    public $universities = null;
    public $searchUniversity = '';

    public $years;

    public function mount()
    {
        $this->setcountries();
        $this->setUniversities();
        $this->years = range(date('Y'), (date('Y')+5));
    }

    public function filter()
    {
        $filters = [
            'search' => $this->search,
            'level' => $this->level,
            'studyArea' => $this->studyArea,
            'scholarshipType' => $this->scholarshipType,
            'applicationDeadline' => $this->applicationDeadline,
            'studentType' => $this->studentType,
            'selectedCountries' => $this->selectedCountries,
            'selectedUniversities' => $this->selectedUniversities,
        ];
        $this->dispatch('scholarship-filter', $filters);
    }

    public function resetFilter()
    {
        $this->search = '';
        $this->level = [];
        $this->studyArea = [];
        $this->scholarshipType = [];
        $this->applicationDeadline = '';
        $this->studentType = [];
        $this->selectedCountries = [];
        $this->selectedUniversities = [];

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

    public function updatedUniversity()
    {
        if($this->university){
            $this->universities = University::where('name', 'like', '%' . $this->university . '%')
                ->whereNotIn('name', $this->selectedUniversities)
                ->limit(5)
                ->get();
        }else{
            $this->setUniversities();
        }
    }

    public function setUniversities()
    {
        $this->universities = University::whereNotIn('name', $this->selectedUniversities)->limit(5)->get();
    }

    public function selectUniversity($name)
    {
        $university = University::where('name', $name)->first();
        $this->selectedUniversities[] = $university->name;
        $this->setUniversities();
        $this->filter();
    }

    public function removeUniversity($name)
    {
        $this->selectedUniversities = array_diff($this->selectedUniversities, [$name]);
        $this->setUniversities();
        $this->filter();
    }

    public function render()
    {
        $levels = StudyLevel::cases();
        $studyAreas = Expertise::expertise()->isParent()->get();
        $scholarshipTypes = FundType::cases();
        $studentTypes = StudentType::cases();
        

        return view(
            'livewire.scholarship.filter',
            compact('levels', 'studyAreas', 'scholarshipTypes', 'studentTypes')
        );
    }
}
