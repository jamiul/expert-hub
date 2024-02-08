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

class InviteMessage extends Modal
{
    public $projects;

    public $project;

    public $expert;

    public $project_id;
    public $message = '';

    public function mount(Profile $expert, $project)
    {
        if ($project) {
            $this->project = auth()->user()->profile->projects()->where('id', $project)->first();
        } else {
            $this->project = auth()->user()->profile->projects()->first();
        }
        $this->project_id = $this->project?->id;
        $this->expert = $expert;
        $this->projects = auth()->user()->profile->projects()->get();
        $this->message = 'Hello!' . PHP_EOL . 'I\'d like to invite you to take a look at the job I\'ve posted. Please submit a proposal if you\'re available and interested.' . PHP_EOL . auth()->user()->full_name;
    }

    public function inviteToDiscuss()
    {
        $this->validate([
            'project_id' => ['required'],
        ]);
        $this->project = Project::find($this->project_id);
        $conversation = Conversation::query()
            ->where('creator_profile_id', $this->project->client->id)
            ->where('reference_id', $this->project->id)
            ->wherehas('participants', function ($query) {
                $query->where('profile_id', $this->expert->id);
            })
            ->first();
        if (is_null($conversation)) {
            $conversation = createConversation(
                auth()->user()->profile,
                $this->expert,
                $this->message,
                $this->project
            );
        }

        return redirect()->route('messaging.conversation', $conversation);
    }

    public function render()
    {
        return view('livewire.project.invite-message');
    }
}
