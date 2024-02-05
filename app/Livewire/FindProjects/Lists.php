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
            'skills',
            'projectTypes',
            'startAmount',
            'endAmount',
            'selectedCountries',
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

    public function render()
    {
        $projects = Project::published()->with('client', 'expertise', 'skills');

        if (isset($this->filtersArray['search']) && $this->filtersArray['search']) {
            $projects = $projects->where('title', 'like', '%' . $this->filtersArray['search'] . '%');
        }

        if (isset($this->filtersArray['projectTypes']) && $this->filtersArray['projectTypes']) {
            $projectTypes = $this->filtersArray['projectTypes'];
            $projects = $projects->where(function ($q) use ($projectTypes) {
                foreach ($projectTypes as $value) {
                    $q->orWhere('type', $value);
                }
            });
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
