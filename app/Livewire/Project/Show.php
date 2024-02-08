<?php

namespace App\Livewire\Project;

use App\Enums\InvitationStatus;
use App\Models\Conversation;
use App\Models\Invitation;
use App\Models\Project;
use Livewire\Component;
use WireElements\Pro\Concerns\InteractsWithConfirmationModal;

class Show extends Component
{
    use InteractsWithConfirmationModal;

    public Project $project;
    public $similarProjects;
    public $eoiAlreadySubmitted;
    public $invitedToSubmitEoi;

    public function mount()
    {
        $this->similarProjects = Project::query()
            ->where('expertise_id', $this->project->expertise_id)
            // ->orWhereHas('skills', function($query) use($project){
            //     $query->whereIn('expertise_id', $project->skills->pluck('id')->toArray());
            // })
            ->where('id', '!=', 12)
            ->limit(3)
            ->get();
        $this->eoiAlreadySubmitted = $this->project->eois()->where('expert_id', auth()->user()->profile->id)->exists();
        $this->invitedToSubmitEoi = $this->project->invitations()->where('expert_id', auth()->user()->profile->id)->first();
    }

    public function acceptInvitation()
    {
        return redirect()->route('eoi.create', ['project' => $this->project, 'invitation' => InvitationStatus::Accepted->value]);
    }

    public function declineInvitation()
    {
        $this->askForConfirmation(
            callback: function () {
                $this->invitedToSubmitEoi->update([
                    'status' => InvitationStatus::Declined
                ]);
                toast('success', 'Invitation Declined');
                return redirect('projects.show', $this->project);
            },
            prompt: [
                'title' => 'Decline Invitation?',
                'message' => 'Would you like to decline the Invitation?',
                'confirm' => 'Decline',
                'cancel' => 'Cancel',
            ],
        );
    }

    public function chatWithClient()
    {
        $conversation = Conversation::query()
            ->where('creator_profile_id', $this->project->client->id)
            ->where('reference_id', $this->project->id)
            ->wherehas('participants', function ($query) {
                $query->where('profile_id', $this->invitedToSubmitEoi->expert->id);
            })
            ->first();
        if($conversation){
            return redirect()->route('messaging.conversation', $conversation);
        }
    }

    public function render()
    {
        return view('livewire.project.show');
    }
}
