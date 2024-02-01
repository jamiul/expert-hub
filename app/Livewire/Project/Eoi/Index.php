<?php

namespace App\Livewire\Project\Eoi;

use App\Enums\InvitationStatus;
use App\Models\Invitation;
use App\Models\Profile;
use App\Models\Project;
use Livewire\Attributes\On;
use Livewire\Component;
use WireElements\Pro\Concerns\InteractsWithConfirmationModal;
#[On('invitation-sent')]
#[On('offer-withdrawn')]
class Index extends Component
{
    use InteractsWithConfirmationModal;

    public Project $project;

    public $filteredExperts;
    public $savedExperts;
    public $contracts;
    public $myHires;

    public function mount()
    {
        $this->filteredExperts = Profile::expert()->get();
        $this->savedExperts = auth()->user()->profile->savedExperts();
        $this->contracts = $this->project->contracts;
        $this->myHires = auth()->user()->profile->clientContracts;
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

    public function declineInvitation($id)
    {
        $invitation = $this->project->invitations()->find($id);
        $this->askForConfirmation(
            callback: function () use($invitation) {
                $invitation->update([
                    'status' => InvitationStatus::Declined
                ]);
                toast('success', 'Invitation Declined');
            },
            prompt: [
                'title' => 'Decline Invitation?',
                'message' => 'Would you like to decline the Invitation?',
                'confirm' => 'Decline',
                'cancel' => 'Cancel',
            ],
        );
    }

    public function render()
    {
        return view('livewire.project.eoi.index');
    }
}
