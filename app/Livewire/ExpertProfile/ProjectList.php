<?php

namespace App\Livewire\ExpertProfile;

use App\Models\Project;
use Livewire\Component;
use App\Models\Favourite;
use Livewire\WithPagination;

class ProjectList extends Component
{
    use WithPagination;

    public $perPage = 5;
    public $showReadMoreButton = null;
    public $tab = 'feed';

    public function readLess()
    {
        $this->showReadMoreButton = null;
    }

    public function readMore($id)
    {
        $this->showReadMoreButton = $id;
    }

    public function favourite(Project $project)
    {
        $redirectUrlIfNotAuthenticated = route('auth.login');
        $project->favourite($redirectUrlIfNotAuthenticated);
    }

    public function paginationView()
    {
        return 'livewire.pagination';
    }

    public function render()
    {
        $projects = Project::with('client', 'expertise', 'skills');
        $projects = $projects->orderByDesc('id')->paginate($this->perPage);

        $favoriteProjectIDs = Favourite::where('loveable_type', 'App\Models\Project')
            ->pluck('loveable_id');

        $favoriteProjects = Project::with('client', 'expertise', 'skills')
            ->whereIn('id', $favoriteProjectIDs)
            ->orderByDesc('id')
            ->paginate($this->perPage);

        return view('livewire.expert-profile.project-list', compact('projects', 'favoriteProjects'));
    }
}
