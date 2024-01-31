<?php

namespace App\Livewire\Offer;

use App\Enums\MilestoneStatus;
use App\Enums\OfferStatus;
use App\Enums\ProjectStatus;
use App\Enums\ProjectType;
use App\Models\Milestone;
use App\Models\Offer;
use App\Models\Profile;
use Illuminate\Support\Carbon;
use Livewire\Attributes\Url;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
    public Profile $expert;

    public $type;

    #[Validate('required')]
    public $client_id;

    #[Url()]
    public $eoi_id;

    #[Url()]
    #[Validate('required')]
    public $project_id;
    public $project;

    public $projects;

    #[Validate('required')]
    public $contract_title;
    #[Validate('required')]
    public $amount;
    public $milestoneType;

    public $milestones = [];
    public $i = 1;
    public $milestone_description = [];
    public $milestone_due_date = [];
    public $milestone_amount = [];

    #[Validate('accepted')]
    public $terms;

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
                'milestone_due_date.0' => 'nullable',
                'milestone_amount.0' => 'required',
                'milestone_description.*' => 'required',
                'milestone_due_date.*' => 'nullable',
                'milestone_amount.*' => 'required',
            ],
            [
                'milestone_description.0.required' => 'Description field is required',
                'milestone_amount.0.required' => 'Amount field is required',
                'milestone_description.*.required' => 'Description field is required',
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

    public function sendOffer()
    {
        $this->validate();
        $offer = Offer::create([
            'eoi_id' => $this->eoi_id,
            'project_id' => $this->project_id,
            'client_id' => auth()->user()->profile->id,
            'expert_id' => $this->expert->id,
            'contract_title' => $this->contract_title,
            'contract_type' => $this->type,
            'amount' => $this->amount,
            'deposit_amount' => $this->depositAmount(),
            'status' => OfferStatus::Draft,
        ]);
        
        if ($this->project->isFixed()) {
            if ($this->milestoneType == 'multiple') {
                foreach ($this->milestone_description as $key => $value) {
                    if(isset($this->milestone_amount[$key])){
                        Milestone::create([
                            'eoi_id' => $this->eoi_id,
                            'offer_id' => $offer->id,
                            'title' => $value,
                            'due_date' => isset($this->milestone_due_date[$key]) ? Carbon::parse($this->milestone_due_date[$key]) : null,
                            'amount' => $this->milestone_amount[$key],
                            'status' => MilestoneStatus::WantToPay,
                        ]);
                    }
                }
            } else {
                Milestone::create([
                    'eoi_id' => $this->eoi_id,
                    'offer_id' => $offer->id,
                    'title' => $this->contract_title,
                    'due_date' => null,
                    'amount' => $offer->amount,
                    'status' => MilestoneStatus::WantToPay,
                ]);
            }
        }
        return redirect()->route('client.payment.pay',['reference' => 'offer', 'id' => $offer->id]);
    }

    public function depositAmount()
    {
        if($this->type == ProjectType::Fixed){
            if($this->milestoneType == 'single'){
                return $this->amount;
            }
            if($this->milestoneType == 'multiple'){
                return $this->milestone_amount[0];
            }
        }
    }

    public function render()
    {
        return view('livewire.offer.create');
    }
}
