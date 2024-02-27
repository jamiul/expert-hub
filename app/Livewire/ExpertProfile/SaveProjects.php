<?php

namespace App\Livewire\ExpertProfile;

use App\Models\Project;
use App\Models\Favourite;
use Livewire\WithPagination;
use WireElements\Pro\Components\Modal\Modal;
use WireElements\Pro\Concerns\InteractsWithConfirmationModal;

class SaveProjects extends Modal
{
    use InteractsWithConfirmationModal;

    use WithPagination;

    public $perPage = 5;

    public function favourite(Project $project)
    {
        $this->askForConfirmation(
            callback: function () use ($project) {
                $redirectUrlIfNotAuthenticated = route('auth.login');
                $project->favourite($redirectUrlIfNotAuthenticated);
            },
            prompt: [
                'title' => __('Unfavourite'),
                'message' => __('Are you sure you want to unfavourite this expert?'),
                'confirm' => __('Unfavourite'),
                'cancel' => __('Cancel'),
            ],
        );
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
