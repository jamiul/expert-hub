<?php

namespace App\Livewire\Admin\Contract\Dispute;

use App\Enums\ContractStatus;
use App\Enums\DisputeStatus;
use App\Enums\MilestoneStatus;
use App\Enums\ProfileType;
use App\Helpers\PaymentHelper;
use App\Models\Contract;
use App\Models\Profile;
use App\Notifications\ContractEndedClientNotification;
use App\Notifications\ContractEndedNotification;
use Livewire\Component;
use WireElements\Pro\Concerns\InteractsWithConfirmationModal;

class Decline extends Component
{
    use InteractsWithConfirmationModal;

    public $contract;

    public function mount(Contract $contract)
    {
        $this->contract = $contract;
    }
    
    public function declineDispute()
    {
        //Winner is Expert
        $this->askForConfirmation(
            callback: function () {
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

                $escrow_balance = ($this->contract->client->escrow_balance - $releasing_amount);

                Profile::find($this->contract->client_id)->update([
                    'escrow_balance' => $escrow_balance
                ]);

                $this->contract->update([
                    'status' => ContractStatus::Ended,
                    'reason' => 'Expert Won the dispute',
                ]);

                $this->contract->currentDispute()->update([
                    'status' => DisputeStatus::Closed,
                    'winner' => ProfileType::Expert,
                    'profile_id' => $this->contract->expert->id,
                ]);

                $this->expert->user->notify(new ContractEndedNotification($this->contract));
                $this->client->user->notify(new ContractEndedClientNotification($this->contract));
                toast('success', 'Dispute Declined');
                return redirect()->route('admin.contracts.index');
            },
            prompt: [
                'title' => 'Decline Dispute?',
                'message' => 'Are you sure to decline this dispute?',
                'confirm' => 'Accept',
                'cancel' => 'Cancel',
                'button' => 'btn-success',
            ],
        );
    }

    public function render()
    {
        return view('livewire.admin.contract.dispute.decline');
    }
}
