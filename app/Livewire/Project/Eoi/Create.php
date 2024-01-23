<?php

namespace App\Livewire\Project\Eoi;

use App\Enums\EoiStatus;
use App\Models\Milestone;
use App\Models\Project;
use App\Notifications\EOIClientNotification;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    
    public $project;

    #[Validate('required')]
    public $amount;
    public $serviceFee;
    public $amountAfterServiceFee;

    #[Validate('nullable')]
    public $duration;

    #[Validate('required')]
    public $cover_letter = '';

    #[Validate('nullable')]
    public $attachments = [];

    public $milestoneType = 'multiple';
    public $milestones = [];
    public $i = 1;
    public $milestone_description = [];
    public $milestone_due_date = [];
    public $milestone_amount = [];

    #[Validate('required')]
    public $agreement = false;

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
        
        $this->serviceFee = $this->amount * 0.1;
        $this->amountAfterServiceFee = $this->amount - $this->serviceFee;

        // $this->milestones[] = [
        //     'milestone_description' => '',
        //     'milestone_due_date' => '',
        //     'milestone_amount' => '',
        // ];
    }

    public function add($i)
    {
        // dd($this->milestone_description);
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
                        'status' => 'Pending',
                    ]);
                }
            }else{
                Milestone::create([
                    'eoi_id' => $eoi->id,
                    'title' => $this->project->title,
                    'due_date' => now(),
                    'amount' => $this->amount,
                    'status' => 'Pending',
                ]);
            }
        }
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
        toast('success', 'Eoi Submitted Successfully');
        $this->redirect(route('projects.show', $this->project));
    }

    public function render()
    {
        return view('livewire.project.eoi.create');
    }
}
