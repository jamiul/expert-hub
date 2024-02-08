<?php

namespace App\Livewire\Project;

use App\Enums\InvitationStatus;
use App\Models\Conversation;
use App\Models\Invitation;
use App\Models\Message;
use App\Models\MessageRecipient;
use App\Models\Participant;
use App\Models\Profile;
use App\Models\Project;
use App\Notifications\ProjectInvitationNotification;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use WireElements\Pro\Components\Modal\Modal;

class Invite extends Modal
{
    public $projects;

    public $project;

    public $expert;

    public $project_id;
    public $message = '';

    public function mount(Profile $expert, $project)
    {
        if($project){
            $this->project = auth()->user()->profile->projects()->where('id', $project)->first();
        }else{
            $this->project = auth()->user()->profile->projects()->first();
        }
        $this->project_id = $this->project?->id;
        $this->expert = $expert;
        $this->projects = auth()->user()->profile->projects()->get();
        $this->message = 'Hello!' . PHP_EOL . 'I\'d like to invite you to take a look at the job I\'ve posted. Please submit a proposal if you\'re available and interested.' . PHP_EOL . auth()->user()->full_name;
    }

    public function inviteToProject()
    {
        $this->validate([
            'project_id' => ['required'],
        ]);
        $this->project = Project::find($this->project_id);
        $invitation = Invitation::create([
            'expert_id' => $this->expert->id,
            'project_id' => $this->project_id,
            'status' => InvitationStatus::Pending
        ]);
        createConversation(
            auth()->user()->profile,
            $this->expert,
            $this->message,
            $this->project
        );

        $this->expert->user->notify(new ProjectInvitationNotification($this->project));
        toast('success', 'Invitation Sent Successfully', $this);
        $this->dispatch('invitation-sent');
        $this->close();
        //Todo Update invitation count
    }

    public function render()
    {
        return view('livewire.project.invite');
    }
}
