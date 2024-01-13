<?php

namespace App\Livewire\Project\Eoi;

use App\Enums\EoiStatus;
use App\Models\Project;
use App\Notifications\EOIClientNotification;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
    public $project;

    #[Validate('required')]
    public $amount;
    public $serviceFee;
    public $amountAfterServiceFee;

    #[Validate('required')]
    public $cover_letter = '';

    #[Validate('nullable')]
    public $attachments = [];

    #[Validate('required')]
    public $agreement = false;

    public function mount(Project $project)
    {
        $this->project = $project;
        $this->amount = auth()->user()->profile->hourly_rate;
        $this->serviceFee = $this->amount * 0.1;
        $this->amountAfterServiceFee = $this->amount - $this->serviceFee;
    }

    public function updatedAmount()
    {
        if ($this->amount) {
            $this->serviceFee = $this->amount * 0.1;
            $this->amountAfterServiceFee = $this->amount - $this->serviceFee;
        } else {
            $this->serviceFee = 0;
            $this->amountAfterServiceFee = 0;
        }
    }

    public function sendEoi()
    {
        $data = $this->validate();
        $eoi = $this->project->eois()->create([
            'expert_id' => auth()->user()->profile->id,
            'amount' => $data['amount'],
            'cover_letter' => $data['cover_letter'],
            'status' => EoiStatus::Submitted,
        ]);
        foreach ($this->attachments as $attachment) {
            $fileName = $attachment->getClientOriginalName() . '-' . time() . '.' . $attachment->extension();
            $eoi->addMedia($attachment->getRealPath())
                ->usingName($fileName)
                ->toMediaCollection('attachments');
        }
        $this->project->client->user->notify(new EOIClientNotification([
            'title'   => 'New Eoi Submitted',
            'message' => '',
            'link'    => $this->project->slug,
            'button' => 'View proposal',
            'avatar'  => auth()->user()->profile->picture,
        ]));
        $this->redirect(route('projects.show', $this->project));
    }

    public function render()
    {
        return view('livewire.project.eoi.create');
    }
}
