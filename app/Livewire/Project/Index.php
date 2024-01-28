<?php

namespace App\Livewire\Project;

use Livewire\Component;
use WireElements\Pro\Concerns\InteractsWithConfirmationModal;

class Index extends Component
{
    use InteractsWithConfirmationModal;
    
    public function deleteProject($id)
    {
        $this->askForConfirmation(
            callback: function () use ($id) {
                $project = auth()->user()->profile->projects()->where('id', $id)->first();
                $project->delete();
            },
            prompt: [
                'title' => 'Remove job post?',
                'message' => 'Do you want to remove the job post?',
                'confirm' => 'Remove',
                'cancel' => 'Cancel',
            ],
        );
    }
    public function render()
    {
        return view('livewire.project.index',[
            'projects' => auth()->user()->profile->projects()->orderByDesc('id')->get()
        ]);
    }
}
