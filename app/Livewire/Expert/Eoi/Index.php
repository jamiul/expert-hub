<?php

namespace App\Livewire\Expert\Eoi;

use App\Models\Project;
use Livewire\Component;

class Index extends Component
{
    public $eois;
    public $invitations;
    public $interviewing;
    public $offers;
    public $savedProjects;

    public function mount()
    {
        $this->eois = auth()->user()->profile->eois;
        $this->invitations = auth()->user()->profile->invitations;
        $this->interviewing = $this->eois->where('is_messaged', true);
        $this->offers = auth()->user()->profile->offers;
        $this->savedProjects = auth()->user()->profile->savedProjects();
    }

    public function favourite(Project $project)
    {
        $redirectUrlIfNotAuthenticated = route('find.projects');
        $project->favourite($redirectUrlIfNotAuthenticated);
    }

    public function render()
    {
        return view('livewire.expert.eoi.index');
    }
}
