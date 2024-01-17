<?php

namespace App\Livewire\FindProjects;

use App\Models\Project;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;

class Lists extends Component
{
    use WithPagination;

    public $perPage = 6;

    public $filtersArray;

    public function mount()
    {
        $this->filtersArray = request()->only(
            'search',
            'hourlyRate',
            'selectedCountries',
            'fields',
            'skills',
        );
    }

    #[On('find-projects-filter')]
    public function reloadFilter(array $filtersArray)
    {
        $this->filtersArray = $filtersArray;
        $this->resetPage();
    }

    public function favourite(Project $project)
    {
        $redirectUrlIfNotAuthenticated = route('find.projects');
        $project->favourite($redirectUrlIfNotAuthenticated);
    }

    public function paginationView()
    {
        return 'livewire.pagination';
    }

    public function updatedPerPage()
    {
        $this->resetPage();
        $this->render();
    }

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

    public function render()
    {
        $projects = Project::with('client', 'expertise', 'skills');

        if (isset($this->filtersArray['search']) && $this->filtersArray['search']) {
            $projects = $projects->where('title', 'like', '%' . $this->filtersArray['search'] . '%');
        }

        if (!empty($this->filtersArray['selectedCountries'])) {
            $projects = $projects->whereHas('client.user', function($query){
                $query->whereHas('country', function($query){
                    $query->whereIn('name', $this->filtersArray['selectedCountries']);
                });
            });
        }

        if (isset($this->filtersArray['skills']) && $this->filtersArray['skills']) {
            $projects = $projects->whereHas('skills', function($query){
                $query->whereIn('name', $this->filtersArray['skills']);
            });
        };

        $projects = $projects->orderByDesc('id')->paginate($this->perPage);

        return view('livewire.find-projects.lists', compact('projects'));
    }
}
