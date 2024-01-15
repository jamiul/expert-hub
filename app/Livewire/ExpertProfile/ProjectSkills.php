<?php

namespace App\Livewire\ExpertProfile;

use Livewire\Component;

class ProjectSkills extends Component
{
    public $project;
    public $showMore = false;
    public $skills = [];
    public $skillCount;

    public function mount($project)
    {
        $this->project = $project;
    }

    public function toggleShowMore()
    {
        $this->showMore = !$this->showMore;
    }

    public function render()
    {
        $this->skills = $this->showMore
            ? $this->project->skills
            : $this->project->skills->take(3);

        $this->skillCount = count($this->project->skills) - count($this->project->skills->take(3));

        return view('livewire.expert-profile.project-skills');
    }
}
