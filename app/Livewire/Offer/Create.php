<?php

namespace App\Livewire\Offer;

use App\Enums\ProjectStatus;
use App\Models\Profile;
use Livewire\Attributes\Url;
use Livewire\Component;

class Create extends Component
{
    public Profile $expert;

    public $type;

    public $client_id;

    #[Url()]
    public $project_id;
    public $project;

    public $projects;

    public $contract_title;
    public $amount;
    public $milestoneType;

    public $milestones = [];
    public $i = 1;
    public $milestone_description = [];
    public $milestone_due_date = [];
    public $milestone_amount = [];

    public function mount()
    {
        if($this->project_id){
            $this->project = auth()->user()->profile->projects()->where('id', $this->project_id)->first();
            $this->contract_title = $this->project?->title;
            $this->type = $this->project?->type->value;
            $this->amount = $this->project?->budget_start_amount;
        }
        $this->client_id = auth()->user()->profile->id;
        $this->projects = auth()->user()->profile->projects()->where('status', ProjectStatus::Published)->get();
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
            ]
        );
        array_push($this->milestones, $i);
        $i = $i + 1;
        $this->i = $i;
    }

    public function remove($i)
    {
        unset($this->milestones[$i]);
    }

    public function render()
    {
        return view('livewire.offer.create');
    }
}
