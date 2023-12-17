<?php

namespace App\Livewire\Scholarship;

use App\Models\Scholarship;
use App\Repositories\ScholarshipRepository;
use Illuminate\Support\Carbon;
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
        $scholarships = Scholarship::with(['university']);

        if (isset($this->filtersArray['search']) && $this->filtersArray['search']) {
            $scholarships = $scholarships->where('title', 'like', '%' . $this->filtersArray['search'] . '%');
        }
        if (isset($this->filtersArray['level']) && $this->filtersArray['level']) {
            $scholarships = $scholarships->whereHas('eligibilities', function($query){
                $query->whereIn('study_level', $this->filtersArray['level']);
            });
        }
        if (isset($this->filtersArray['studyArea']) && $this->filtersArray['studyArea']) {
            $scholarships = $scholarships->whereHas('areas', function ($query) {
                $query->whereIn('expertise_id', $this->filtersArray['studyArea']);
            });
        }
        if (isset($this->filtersArray['studentType']) && $this->filtersArray['studentType']) {
            $studentTypes = $this->filtersArray['studentType'];
            $scholarships = $scholarships->where(function ($q) use ($studentTypes) {
                foreach ($studentTypes as $value) {
                    $q->orWhere('student_type', 'like', '%' . $value . '%');
                }
            });
        }
        if (isset($this->filtersArray['scholarshipType']) && $this->filtersArray['scholarshipType']) {
            $scholarships = $scholarships->whereHas('funds', function ($query) {
                $query->whereIn('fund_type', $this->filtersArray['scholarshipType']);
            });
        }
        if (isset($this->filtersArray['applicationDeadline']) && $this->filtersArray['applicationDeadline']) {
            $applicationDeadline = $this->filtersArray['applicationDeadline'];
            $applicationDeadline = Carbon::parse($applicationDeadline)->format('Y-m-d');

            $scholarships = $scholarships->whereDate('deadline', '>=', $applicationDeadline);
        }
        if (isset($this->filtersArray['country']) && $this->filtersArray['country']) {
            $scholarships = $scholarships->whereHas('university', function ($query) {
                $query->whereHas('country', function($query){
                    $query->where('name', $this->filtersArray['country']);
                });
            });
        }
        if (isset($this->filtersArray['university']) && $this->filtersArray['university']) {
            $scholarships = $scholarships->whereHas('university', function ($query) {
                $query->where('name', $this->filtersArray['university']);
            });
        }

        $scholarships = $scholarships->paginate($this->limit);

        return view('livewire.scholarship.lists', compact('scholarships'));
    }
}
