<?php

namespace App\Livewire\ExpertProfile;

use App\Models\Project;
use Livewire\Component;
use App\Models\Favourite;
use Livewire\WithPagination;

class SaveProjects extends Component
{
    use WithPagination;

    public $perPage = 5;

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
        $favoriteProjectIDs = Favourite::where('loveable_type', 'App\Models\Project')
            ->pluck('loveable_id');

        $favoriteProjects = Project::with('client', 'expertise', 'skills')
            ->whereIn('id', $favoriteProjectIDs)
            ->orderByDesc('id')
            ->paginate($this->perPage);

        return view('livewire.expert-profile.save-projects', compact('favoriteProjects'));
    }
}
