<?php

namespace App\Livewire\Project;

use App\Enums\InvitationStatus;
use App\Models\Invitation;
use App\Models\Profile;
use App\Models\Project;
use App\Notifications\ProjectInvitationNotification;
use Livewire\Component;
use WireElements\Pro\Components\Modal\Modal;

class Invite extends Modal
{
    public $project;

    public $expert;

    public $project_id;
    public $message = 'Hello!'. PHP_EOL. 'I\'d like to invite you to take a look at the job I\'ve posted. Please submit a proposal if you\'re available and interested.' . PHP_EOL . 'Dr Mohammad R.';

    public function mount(Profile $expert, Project $project)
    {
        $this->project = $project;
        $this->project_id = $project->id;
        $this->expert = $expert;
    }

    public function inviteToProject()
    {
        $invitation = Invitation::create([
            'expert_id' => $this->expert->id,
            'project_id' => $this->project_id,
            'status' => InvitationStatus::Pending
        ]);
        $this->expert->user->notify(new ProjectInvitationNotification([
            'title'   => 'Invitation to submit EOI',
            'message' => 'Submit EOI to this project',
            'link'    => route('eoi.create', $this->project_id),
            'button' => 'view invitation',
            'avatar'  => auth()->user()->profile->picture,
        ]));

        $this->close();
    }

    public function render()
    {
        return view('livewire.project.invite');
    }
}
