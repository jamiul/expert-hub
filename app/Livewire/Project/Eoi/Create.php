<?php

namespace App\Livewire\Project\Eoi;

use App\Enums\EoiStatus;
use App\Enums\InvitationStatus;
use App\Enums\MilestoneStatus;
use App\Models\Milestone;
use App\Models\Project;
use App\Notifications\EOIClientNotification;
use Illuminate\Validation\Rules\File;
use Livewire\Attributes\Url;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    
    public $project;

    public $amount;
    public $serviceFee;
    public $amountAfterServiceFee;

    public $duration;
    public $availableDurations = [];
    public $cover_letter = '';
    public $attachments = [];

    public $milestoneType = 'single';
    public $milestones = [];
    public $i = 1;
    public $milestone_description = [];
    public $milestone_due_date = [];
    public $milestone_amount = [];

    public $agreement;

    public function mount(Project $project)
    {
        $this->project = $project;
        if($project->isHourly()){
            $this->amount = auth()->user()->profile->hourly_rate;
        }elseif($project->isFixed()){
            $this->amount = $project->budget_start_amount;
            if($this->milestoneType == 'multiple'){
                $this->amount = 0;
            }
        }
        $this->availableDurations = ['15 Days','30 Days','90 Days','180 Days'];
        $this->serviceFee = $this->amount * 0.1;
        $this->amountAfterServiceFee = $this->amount - $this->serviceFee;

    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function rules()
    {
        return [
            'amount' => ['required'],
            'duration' => ['required'],
            'cover_letter' => ['required', 'max:2000', 'min:200'],
            'agreement' => ['accepted'],
            'attachments.*' => [
                File::types(['jpg', 'png', 'jpeg', 'pdf', 'docx', 'xlsx'])
            ]
        ];
    }

    public function add($i)
    {
        $this->validate(
            [
                'milestone_description.0' => 'required',
                'milestone_due_date.0' => 'required',
                'milestone_amount.0' => 'required',
                'milestone_description.*' => 'required',
                'milestone_due_date.*' => 'required',
                'milestone_amount.*' => 'required',
            ],
            [
                'milestone_description.0.required' => 'Description field is required',
                'milestone_due_date.0.required' => 'Due date field is required',
                'milestone_amount.0.required' => 'Amount field is required',
                'milestone_description.*.required' => 'Description field is required',
                'milestone_due_date.*.required' => 'Due date field is required',
                'milestone_amount.*.required' => 'Amount field is required',
            ]);
        array_push($this->milestones, $i);
        $i = $i + 1;
        $this->i = $i;
        
    }

    public function remove($i)
    {
        unset($this->milestones[$i]);
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

    public function updatedMilestoneType()
    {
        if ($this->milestoneType == 'single') {
            $this->amount = $this->project->budget_start_amount;
        }
        if ($this->milestoneType == 'multiple') {
            $this->amount = 0;
        }
        $this->updatedAmount();
    }

    public function updatedMilestoneAmount()
    {
        $this->amount = 0;
        foreach($this->milestone_amount as $amount){
            $this->amount += $amount;
        }
        $this->updatedAmount();
    }

    public function sendEoi()
    {
        $data = $this->validate();
        $eoi = $this->project->eois()->create([
            'expert_id' => auth()->user()->profile->id,
            'amount' => $data['amount'],
            'duration' => $data['duration'],
            'cover_letter' => $data['cover_letter'],
            'status' => EoiStatus::Submitted,
        ]);
        if($this->project->isFixed()){
            if ($this->milestoneType == 'multiple') {
                foreach($this->milestone_description as $key => $value){
                    Milestone::create([
                        'eoi_id' => $eoi->id,
                        'title' => $value,
                        'due_date' => now(),
                        'amount' => $this->milestone_amount[$key],
                        'status' => MilestoneStatus::Pending,
                    ]);
                }
            }else{
                Milestone::create([
                    'eoi_id' => $eoi->id,
                    'title' => $this->project->title,
                    'due_date' => now(),
                    'amount' => $this->amount,
                    'status' => MilestoneStatus::Pending,
                ]);
            }
        }
        foreach ($this->attachments as $attachment) {
            $fileName = $attachment->getClientOriginalName() . '-' . time() . '.' . $attachment->extension();
            $eoi->addMedia($attachment->getRealPath())
                ->usingName($fileName)
                ->toMediaCollection('attachments');
        }
        $invitation = $this->project->invitations()->where('expert_id', auth()->user()->profile->id)->first();
        if($invitation){
            $invitation->update([
                'status' => InvitationStatus::Accepted
            ]);
        }
        
        $this->project->client->user->notify(new EOIClientNotification([
            'title'   => 'New Eoi Submitted',
            'message' => '',
            'link'    => route('client.eois.index', $this->project->id),
            'button' => 'View proposal',
            'avatar'  => auth()->user()->profile->picture,
        ]));
        toast('success', 'Eoi Submitted Successfully');
        $this->redirect(route('projects.show', $this->project));
    }

    public function render()
    {
        return view('livewire.project.eoi.create');
    }
}
