<?php

namespace App\Livewire\Project;

use Livewire\Component;
use Livewire\WithPagination;
use WireElements\Pro\Concerns\InteractsWithConfirmationModal;

class Index extends Component
{
    use InteractsWithConfirmationModal;
    use WithPagination;
    
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

    public function paginationView()
    {
        return 'livewire.pagination';
    }

    public function render()
    {
        $projects = auth()->user()->profile->projects()->orderByDesc('id')->paginate(5);
        return view('livewire.project.index',[
            'projects' => $projects,
        ]);
    }
}
