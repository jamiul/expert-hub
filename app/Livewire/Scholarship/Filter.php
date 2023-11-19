<?php

namespace App\Livewire\Scholarship;

use App\Models\ScholarshipCountry;
use App\Models\ScholarshipLevel;
use App\Models\ScholarshipType;
use App\Models\ScholarshipUniversity;
use App\Models\StudentType;
use App\Models\StudyArea;
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
    #[Url()]
    public $university = '';

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

    public function render()
    {
        $levels = ScholarshipLevel::all();
        $studyAreas = StudyArea::all();
        $scholarshipTypes = ScholarshipType::all();
        $studentTypes = StudentType::all();
        $countries = ScholarshipCountry::all();
        $universities = ScholarshipUniversity::all();

        return view(
            'livewire.scholarship.filter',
            compact('levels', 'studyAreas', 'scholarshipTypes', 'studentTypes', 'countries', 'universities')
        );
    }
}
