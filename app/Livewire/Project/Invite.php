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
        $this->sendMessage();
        $this->expert->user->notify(new ProjectInvitationNotification([
            'title'   => 'Invitation to submit EOI',
            'message' => 'Submit EOI to this project',
            'link'    => route('eoi.create', $this->project_id),
            'button' => 'view invitation',
            'avatar'  => auth()->user()->profile->picture,
        ]));
        toast('success', 'Invitation Sent Successfully', $this);
        $this->close();
        //Todo Update invitation count
    }

    public function sendMessage()
    {
        $authUser = Auth::user();
        $participantProfileIDs = [$authUser->profile->id, $this->expert->id]; //TODO:receive the second user from UI

        $conversation = Conversation::create(['creator_profile_id' => $authUser->profile->id, 'title' => $authUser->first_name]);

        foreach ($participantProfileIDs as $participantProfileID) {
            Participant::create(['conversation_id' => $conversation->id, 'profile_id' => $participantProfileID]);
        }

        $message = Message::create([
            'conversation_id' => $conversation->id, 'sender_profile_id' => $authUser->profile->id,
            'content' => $this->message,
        ]);

        MessageRecipient::create(['conversation_id' => $conversation->id, 'message_id' => $message->id, 'recipient_profile_id' => $this->expert->id]);
    }

    public function render()
    {
        return view('livewire.project.invite');
    }
}
