<?php

namespace App\Livewire\Scholarship;

use App\Models\Scholarship;
use App\Repositories\ScholarshipRepository;
use Illuminate\Support\Carbon;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class Lists extends Component
{
    use WithPagination;

    public $limit = 5;

    public $filtersArray;

    public $scholarshipCount;

    public function __construct()
    {
        $this->filtersArray = request()->only(
            'search',
            'level',
            'studyArea',
            'scholarshipType',
            'applicationDeadline',
            'studentType',
            'country',
            'selectedUniversities',
        );
    }

    public function paginationView()
    {
        return 'livewire.pagination';
    }

    #[On('scholarship-filter')]
    public function reloadFilter(array $filtersArray)
    {
        $this->filtersArray = $filtersArray;
        $this->resetPage();
    }

    public function render()
    {
        $scholarships = Scholarship::with(['university']);

        if (isset($this->filtersArray['search']) && $this->filtersArray['search']) {
            $scholarships = $scholarships->where('title', 'like', '%' . $this->filtersArray['search'] . '%');
        }
        if (isset($this->filtersArray['level']) && $this->filtersArray['level']) {
            $scholarships = $scholarships->whereHas('studyLevels', function($query){
                $query->whereIn('name', $this->filtersArray['level']);
            });
        }
        if (isset($this->filtersArray['studyArea']) && $this->filtersArray['studyArea']) {
            $scholarships = $scholarships->whereHas('studyAreas', function ($query) {
                $query->whereIn('expertise_id', $this->filtersArray['studyArea']);
            });
        }
        if (isset($this->filtersArray['studentType']) && $this->filtersArray['studentType']) {
            $studentTypes = $this->filtersArray['studentType'];
            $scholarships = $scholarships->where(function ($q) use ($studentTypes) {
                foreach ($studentTypes as $value) {
                    $q->orWhere('student_type', $value);
                }
            });
        }
        if (isset($this->filtersArray['scholarshipType']) && $this->filtersArray['scholarshipType']) {
            $scholarships = $scholarships->whereHas('fundTypes', function ($query) {
                $query->whereIn('name', $this->filtersArray['scholarshipType']);
            });
        }
        if (isset($this->filtersArray['applicationDeadline']) && $this->filtersArray['applicationDeadline']) {
            $scholarships = $scholarships->whereYear('deadline', '>=', $this->filtersArray['applicationDeadline'])
                ->whereDate('deadline', '>', now())
                ->orWhere('automatic_consideration', true);
        }
        if (isset($this->filtersArray['selectedCountries']) && $this->filtersArray['selectedCountries']) {
            $scholarships = $scholarships->whereHas('country', function ($query) {
                $query->whereIn('name', $this->filtersArray['selectedCountries']);
            });
        }
        if (isset($this->filtersArray['selectedUniversities']) && $this->filtersArray['selectedUniversities']) {
            $scholarships = $scholarships->whereHas('university', function ($query) {
                $query->whereIn('name', $this->filtersArray['selectedUniversities']);
            });
        }

        $this->scholarshipCount = $scholarships->count();
        $scholarships = $scholarships->orderByDesc('id')->paginate($this->limit);

        return view('livewire.scholarship.lists', compact('scholarships'));
    }
}
