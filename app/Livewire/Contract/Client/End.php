<?php

namespace App\Livewire\Contract\Client;

use App\Enums\ContractStatus;
use App\Enums\MilestoneStatus;
use App\Helpers\PaymentHelper;
use App\Models\Contract;
use App\Models\Profile;
use App\Models\Testimonial;
use App\Notifications\ContractEndedNotification;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Log;
use WireElements\Pro\Components\Modal\Modal;

class End extends Modal
{
    public $contract;
    public $expert;
    public $project;
    public $reasons;
    public $reason;
    public $recommendation;
    public $skill;
    public $availability;
    public $communication;
    public $deadlines;
    public $feedback;

    public function mount(Contract $contract)
    {
        $this->contract = $contract;
        $this->expert = $contract->expert;
        $this->project = $contract->project->title;
        $this->reasons = [
            'Project Completed successfully',
            'Problem working with expert',
            'I do not need the work completed',
            'Expert no longer available for this project',
            'Changes to this contract are needed',
        ];
    }

    public function endContract()
    {
        $this->validate();

        $releasing_amount = $this->contract->fundedMilestones()->sum('amount');

        foreach ($this->contract->fundedMilestones() as $milestone) {
            $milestone->update([
                'status' => MilestoneStatus::Approved,
                'approved_at' => now(),
            ]);

            //generate expert charge
            $charge = PaymentHelper::calculateExpertCharge($milestone->amount);
            $milestone_amount = $milestone->amount;

            //parent transaction
            $transaction_data = [
                'transaction_id' => null,
                'milestone_id'   => $milestone->id,
                'type'           => 'Fixed Price',
                'description'    => "Invoice for " . $milestone->title,
                'client_id'      => $this->contract->client->user_id,
                'expert_id'      => $this->contract->expert->user_id,
                'amount'         => $milestone_amount,
                'charge_type'    => 'credit',
                'parent'         => null,
                'status'         => 0,
            ];
            $transaction = PaymentHelper::createExpertTransaction($transaction_data);
            $parent_id = $transaction->id;

            //charge platform fee
            $service_charge = $charge['service_charge'];
            $transaction_data = [
                'transaction_id' => null,
                'milestone_id'   => $milestone->id,
                'type'           => 'Service Fee',
                'description'    => "Service Fee for Fixed Price - Ref ID " . $parent_id,
                'client_id'      => $this->contract->client->user_id,
                'expert_id'      => $this->contract->expert->user_id,
                'amount'         => $service_charge,
                'charge_type'    => 'debit',
                'parent'         => $parent_id,
                'status'         => 0,
            ];
            PaymentHelper::createExpertTransaction($transaction_data);
        }

        $escrow_balance = ( $this->contract->client->escrow_balance - $releasing_amount);

        Profile::find($this->contract->client_id)->update([
            'escrow_balance' => $escrow_balance
        ]);

        $testimonial = Testimonial::create([
            'contract_id' => $this->contract->id,
            'client_id' => $this->contract->client_id,
            'expert_id' => $this->contract->expert_id,
            'owner_id' => auth()->user()->profile->id,
            'feedback' => $this->recommendation,
            'skill' => $this->skill,
            'availability' => $this->availability,
            'communication' => $this->communication,
            'deadlines' => $this->deadlines,
        ]);

        $this->contract->update([
            'status' => ContractStatus::Ended,
            'reason' => $this->reason,
        ]);

        $this->expert->user->notify(new ContractEndedNotification($this->contract));
        toast('success', 'Contract ended successfully', $this);
        $this->dispatch('contract-ended');
        $this->close();
    }

    public function updateTotalScore()
    {
        $this->totalScore();
    }

    #[Computed()]
    public function totalScore()
    {
        $total = ($this->skill + $this->availability + $this->communication + $this->deadlines + $this->deadlines);
        $average = $total/5;
        return $average;
    }

    public function rules()
    {
        return [
            'reason' => ['required'],
            'recommendation' => ['required'],
            'skill' => ['required'],
            'availability' => ['required'],
            'communication' => ['required'],
            'deadlines' => ['required'],
            'feedback' => ['required'],
        ];
    }

    public function render()
    {
        return view('livewire.contract.client.end');
    }
}
