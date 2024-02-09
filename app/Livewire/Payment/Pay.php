<?php

namespace App\Livewire\Payment;

use App\Enums\MilestoneStatus;
use App\Helpers\PaymentHelper;
use App\Models\BookingSlot;
use App\Models\Consultation;
use App\Models\ConsultationBooking;
use App\Models\Contract;
use App\Models\Milestone;
use App\Models\Offer;
use App\Models\TrainingParticipant;
use Livewire\Attributes\Url;
use Livewire\Component;

class Pay extends Component
{
    #[Url]
    public $reference = '';

    #[Url]
    public $id = '';

    public $project;

    public $contract;

    public $milestones;

    public $milestone_charges;

    public function mount() {
        $user = auth()->user();

        if ( $this->reference == 'contract' ) {
            $this->contract   = Contract::where( 'id', $this->id )->where( 'client_id', $user->profile->id )->firstOrFail();
            $this->milestones = Milestone::where( 'contract_id', $this->contract->id )->where( 'status', MilestoneStatus::WantToPay )->get();
            $this->project    = $this->contract->project;

            $this->milestone_amount = $this->milestones->sum( 'amount' );
        } else if ( $this->reference == 'offer' ) {
            $this->contract   = Offer::where( 'id', $this->id )->where( 'client_id', $user->profile->id )->firstOrFail();
            $this->milestones = Milestone::where( 'offer_id', $this->contract->id )->where( 'status', MilestoneStatus::WantToPay )->get();
            $this->project    = $this->contract->project;

            $this->milestone_amount = $this->milestones->sum( 'amount' );
        } else if ( $this->reference == 'consultation' ) {
            $this->project   = ConsultationBooking::where( 'id', $this->id )->firstOrFail();
            $this->contract   = Consultation::where( 'id', $this->project->consultation_id )->firstOrFail();

            $this->milestones   = BookingSlot::where( 'consultation_booking_id', $this->project->id )->where( 'status', 'pending' )->get();

            $this->project->title = $this->contract->expertField->name;

            $this->milestones->map(function ($q){
                $q->title = $q->consultation_time;
            });
            $this->milestone_amount = $this->milestones->sum( 'amount' );
        } else if($this->reference == 'training'){
            $this->project = TrainingParticipant::where( 'id', $this->id )->firstOrFail();
            $this->milestones = TrainingParticipant::where( 'id', $this->id )->get();
            $this->contract = $this->project->training;

            $this->project->title = $this->project->training->title;

            $this->milestone_amount = $this->milestones->sum( 'amount' );
        } else {
            abort( 404 );
        }
        $this->milestone_charges = PaymentHelper::calculateMilestoneCharge( $this->milestone_amount, $this->contract->client_id, $this->contract->expert_id );
    }

    public function render()
    {
        return view('livewire.payment.pay');
    }
}
