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
    public $countries = null;
    public $searchCountry = '';
    #[Url()]
    public $university = '';
    public $universities = null;
    public $searchUniversity = '';

    public function filter()
    {
        $filters = [
            'search' => $this->search,
            'level' => $this->level,
            'studyArea' => $this->studyArea,
            'scholarshipType' => $this->scholarshipType,
            'applicationDeadline' => $this->applicationDeadline,
            'studentType' => $this->studentType,
            'country' => $this->country,
            'university' => $this->university,
        ];
        $this->dispatch('scholarship-filter', $filters);
    }

    public function resetFilter()
    {
        $this->search = null;
        $this->level = [];
        $this->studyArea = [];
        $this->scholarshipType = [];
        $this->applicationDeadline = '';
        $this->studentType = [];
        $this->country = '';
        $this->university = '';

        $this->filter();
    }

    public function updatedCountry()
    {
        if($this->country){
            $this->countries = Country::where('name', 'like', '%' . $this->country . '%')->limit(5)->get();
        }
        $this->filter();
    }

    public function selectCountry($name)
    {
        $country = Country::where('name', $name)->first();
        $this->country = $country->name;
        $this->filter();
        $this->countries = null;
    }

    public function updatedUniversity()
    {
        if($this->university){
            $this->universities = University::where('name', 'like', '%' . $this->university . '%')->limit(5)->get();
        }
        $this->filter();
    }

    public function selectUniversity($name)
    {
        $university = University::where('name', $name)->first();
        $this->university = $university->name;
        $this->filter();
        $this->universities = null;
    }

    public function render()
    {
        $levels = StudyLevel::cases();
        $studyAreas = Expertise::expertise()->isParent()->get();
        $scholarshipTypes = FundType::cases();
        $studentTypes = StudentType::cases();
        $countries = null;
        $universities = null;

        return view(
            'livewire.scholarship.filter',
            compact('levels', 'studyAreas', 'scholarshipTypes', 'studentTypes', 'countries', 'universities')
        );
    }
}
