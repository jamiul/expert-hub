<?php

namespace App\Livewire\Admin\Contract\Dispute;

use App\Enums\ContractStatus;
use App\Enums\DisputeStatus;
use App\Enums\MilestoneStatus;
use App\Enums\ProfileType;
use App\Models\Contract;
use Livewire\Component;
use WireElements\Pro\Concerns\InteractsWithConfirmationModal;

class Approve extends Component
{
    use InteractsWithConfirmationModal;

    public $contract;

    public function mount(Contract $contract)
    {
        $this->contract = $contract;
    }

    public function approveDispute()
    {
        //Winner is Client
        $this->askForConfirmation(
            callback: function () {
                $releasing_amount = $this->contract->fundedMilestones()->sum('amount');
                foreach ($this->contract->fundedMilestones() as $milestone) {
                    $milestone->update([
                        'status' => MilestoneStatus::Declined,
                        'declined_at' => now(),
                    ]);
                }
                //TODO Refund Milestone fund to client
                $this->contract->update([
                    'status' => ContractStatus::Ended,
                    'reason' => 'Client Won the dispute',
                ]);
                $this->contract->currentDispute()->update([
                    'status' => DisputeStatus::Closed,
                    'winner' => ProfileType::Client,
                    'profile_id' => $this->contract->client->id,
                ]);
            
                toast('success', 'Dispute Approved');
                return redirect()->route('admin.contracts.index');
            },
            prompt: [
                'title' => 'Approve Dispute?',
                'message' => 'Are you sure to approve this dispute?',
                'confirm' => 'Accept',
                'cancel' => 'Cancel',
                'button' => 'btn-success',
            ],
        );
    }
    
    public function render()
    {
        return view('livewire.admin.contract.dispute.approve');
    }
}
