<?php

namespace App\Livewire\Project\Eoi;

use App\Models\Project;
use Livewire\Component;

class Index extends Component
{
    public Project $project;

    public $filteredExperts;

    public function mount()
    {
        
    }

    public function addToShortList($id)
    {
        $eoi = $this->project->eois()->find($id);
        if($eoi){
            $eoi->markAsShortListed();
        }
    }

    public function archive($id)
    {
        $eoi = $this->project->eois()->find($id);
        if($eoi){
            $eoi->markAsArchived();
        }
    }

    public function unArchive($id)
    {
        $eoi = $this->project->eois()->find($id);
        if($eoi){
            $eoi->markAsUnArchived();
        }
    }

    public function render()
    {
        return view('livewire.project.eoi.index');
    }
}
