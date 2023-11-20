<?php

namespace App\Livewire\Scholarship;

use App\Models\Scholarship;
use App\Repositories\ScholarshipRepository;
use Carbon;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Lists extends Component
{
    use WithPagination;

    public $limit = 4;

    public $filtersArray;

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
            'university',
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

    public function updateFavorite(string|int $id, bool $status)
    {
        $repository = app(ScholarshipRepository::class);
        $repository->updateFavorite($id, $status);
    }

    public function render()
    {
        $scholarships = Scholarship::with(['university', 'level', 'country']);

        if (isset($this->filtersArray['search']) && $this->filtersArray['search']) {
            $scholarships = $scholarships->where('title', 'like', '%' . $this->filtersArray['search'] . '%');
        }
        if (isset($this->filtersArray['level']) && $this->filtersArray['level']) {
            $scholarships = $scholarships->whereIn('level_id', $this->filtersArray['level']);
        }
        if (isset($this->filtersArray['studyArea']) && $this->filtersArray['studyArea']) {
            $studyAreas = $this->filtersArray['studyArea'];
            $scholarships = $scholarships->where(function($q) use ($studyAreas) {
                foreach ($studyAreas as $value) {
                    $q->orWhere('study_area', 'like', '%' . $value . '%');
                }
            });
        }
        if (isset($this->filtersArray['studentType']) && $this->filtersArray['studentType']) {
            $studentTypes = $this->filtersArray['studentType'];
            $scholarships = $scholarships->where(function($q) use ($studentTypes) {
                foreach ($studentTypes as $value) {
                    $q->orWhere('student_type', 'like', '%' . $value . '%');
                }
            });
        }
        if (isset($this->filtersArray['scholarshipType']) && $this->filtersArray['scholarshipType']) {
            $scholarshipTypes = $this->filtersArray['scholarshipType'];
            $scholarships = $scholarships->where(function($q) use ($scholarshipTypes) {
                foreach ($scholarshipTypes as $value) {
                    $q->orWhere('scholarship_type', 'like', '%' . $value . '%');
                }
            });
        }
        if (isset($this->filtersArray['applicationDeadline']) && $this->filtersArray['applicationDeadline']) {
            $applicationDeadline = $this->filtersArray['applicationDeadline'];
            $applicationDeadline = Carbon::parse($applicationDeadline)->format('Y-m-d');

            $scholarships = $scholarships->whereHas('applicationDeadline', function ($q) use ($applicationDeadline) {
                $q->whereDate('start_date', '<=', $applicationDeadline)
                    ->whereDate('end_date', '>=', $applicationDeadline);
            });
        }
        if (isset($this->filtersArray['country']) && $this->filtersArray['country']) {
            $scholarships = $scholarships->whereIn('country_id', $this->filtersArray['country']);
        }
        if (isset($this->filtersArray['university']) && $this->filtersArray['university']) {
            $scholarships = $scholarships->where('university_id', $this->filtersArray['university']);
        }

        $scholarships = $scholarships->paginate($this->limit);

        return view('livewire.scholarship.lists', compact('scholarships'));
    }
}
