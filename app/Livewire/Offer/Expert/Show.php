<?php

namespace App\Livewire\Offer\Expert;

use App\Enums\ContractStatus;
use App\Enums\OfferStatus;
use App\Models\Contract;
use App\Models\Offer;
use Livewire\Component;
use WireElements\Pro\Concerns\InteractsWithConfirmationModal;

class Show extends Component
{
    use InteractsWithConfirmationModal;

    public Offer $offer;

    public function accept()
    {
        $this->askForConfirmation(
            callback: function () {
                $escrow_amount = $this->offer->fundedMilestones()->sum('amount');

                $contract = Contract::create([
                    'project_id' => $this->offer->project_id,
                    'client_id' => $this->offer->client_id,
                    'expert_id' => $this->offer->expert_id,
                    'amount' => $this->offer->amount,
                    'escrow_amount' => $escrow_amount,
                    'status' => ContractStatus::Active,
                ]);
                foreach($this->offer->fundedMilestones() as $milestone){
                    $milestone->update(['contract_id' => $contract->id]);
                }

                $this->offer->update([
                    'status' => OfferStatus::Accepted,
                ]);
                //TODO Notification sending
                toast('success', 'New Contract Started');
                return redirect()->route('expert.contracts');
            },
            prompt: [
                'title' => 'Accept offer?',
                'message' => 'Paragraph: Archetype lets designers like you very quickly and easily create consistent',
                'confirm' => 'Accept',
                'cancel' => 'Cancel',
            ],
        );
    }

    public function decline()
    {
        $this->askForConfirmation(
            callback: function (){
                $this->offer->update([
                    'status' => OfferStatus::Declined,
                ]);
                toast('success', 'Offer Declined!');
            },
            prompt: [
                'title' => 'Decline offer?',
                'message' => 'Do you want to decline the offer?',
                'confirm' => 'Decline',
                'cancel' => 'Cancel',
            ],
        );
    }

    public function render()
    {
        return view('livewire.offer.expert.show');
    }
}
