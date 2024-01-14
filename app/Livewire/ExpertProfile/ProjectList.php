<?php

namespace App\Livewire\ExpertProfile;

use App\Models\Project;
use Livewire\Component;

class ProjectList extends Component
{
    public $projects = [];
    public $showReadMoreButton = null;

    public function readLess()
    {
        $this->showReadMoreButton = null;
    }

    public function readMore($id)
    {
        $this->showReadMoreButton = $id;
    }

    public function render()
    {
        $this->projects = Project::with(
            'client',
            'expertise',
            'skills'
            )
            ->take(2)
            ->orderBy('id', 'desc')
            ->get();

        return view('livewire.expert-profile.project-list');
    }
}
