<?php

namespace App\Livewire\Scholarship;

use App\Models\Scholarship;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Lists extends Component
{
    use WithPagination;

    public $perPage = 12;

    public $filtersArray;

    public $scholarshipCount;

    public function __construct()
    {
        $this->filtersArray = request()->only(
            'search',
            'scholarshipType',
            'selectedCountries',
        );
    }

    public function favourite(Scholarship $scholarship)
    {
        $redirectUrlIfNotAuthenticated = route('scholarship-database');
        $scholarship->favourite($redirectUrlIfNotAuthenticated);
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

    public function updatedPerPage()
    {
        $this->resetPage();
        $this->render();
    }

    public function render()
    {
        $scholarships = Scholarship::query();

        if (isset($this->filtersArray['search']) && $this->filtersArray['search']) {
            $scholarships = $scholarships->where('title', 'like', '%' . $this->filtersArray['search'] . '%');
        }
        if (isset($this->filtersArray['scholarshipType']) && $this->filtersArray['scholarshipType']) {
            $scholarships = $scholarships->whereHas('fundTypes', function ($query) {
                $query->whereIn('name', $this->filtersArray['scholarshipType']);
            });
        }
        if (isset($this->filtersArray['selectedCountries']) && $this->filtersArray['selectedCountries']) {
            $scholarships = $scholarships->whereHas('country', function ($query) {
                $query->whereIn('name', $this->filtersArray['selectedCountries']);
            });
        }

        $this->scholarshipCount = $scholarships->count();
        $scholarships = $scholarships
            ->paginate($this->perPage);

        return view('livewire.scholarship.lists', compact('scholarships'));
    }
}
