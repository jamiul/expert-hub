<?php

namespace App\Livewire\ExpertProfile;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;

class ProjectList extends Component
{
    use WithPagination;

    public $showReadMoreButton = null;

    public function readLess()
    {
        $this->showReadMoreButton = null;
    }

    public function readMore($id)
    {
        $this->showReadMoreButton = $id;
    }

    public function paginationView()
    {
        return 'livewire.pagination';
    }

    public function render()
    {
        $projects = Project::with('client', 'expertise', 'skills');
        $projects = $projects->orderByDesc('id')->paginate(6);

        return view('livewire.expert-profile.project-list', compact('projects'));
    }
}
