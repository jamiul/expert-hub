<?php

namespace App\Livewire\Project\Eoi;

use App\Models\Eoi;
use App\Models\Project;
use Livewire\Component;

class Show extends Component
{
    public Project $project;
    public Eoi $eoi;

    public function mount(Project $project, Eoi $eoi)
    {
        $this->project = $project;
        $this->eoi = $eoi;
    }

    public function render()
    {
        return view('livewire.project.eoi.show');
    }
}
