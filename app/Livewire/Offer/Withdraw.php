<?php

namespace App\Livewire\Offer;

use App\Enums\OfferStatus;
use App\Models\Offer;
use App\Models\Transaction;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use WireElements\Pro\Concerns\InteractsWithConfirmationModal;

class Withdraw extends Component
{
    use InteractsWithConfirmationModal;
    
    public Offer $offer;

    public $currentRoute;

    public function mount()
    {
        $this->currentRoute = Route::getCurrentRoute()->getName();
    }

    public function withdraw()
    {
        if ($this->offer->status != OfferStatus::Pending) {
            return toast('warning', 'Offer already ' . $this->offer->status->value, $this);
        }
        $this->askForConfirmation(
            callback: function () {
                //refund amount to customer
                $stripe = new \Stripe\StripeClient([
                    "api_key" => env('STRIPE_SECRET'),
                ]);

                foreach ($this->offer->transactions as $transaction) {
                    if ($transaction->object = 'payment_intent' && $transaction->status == 'succeeded') {
                        try {
                            $stripe->refunds->create([
                                'charge' => $transaction->charge_id,
                                'metadata' => [
                                    'reference_type' => 'offer',
                                    'reference_id' => $this->offer->id,
                                    'client_id' => $this->offer->client_id
                                ]
                            ]);

                            $this->offer->update([
                                'status' => OfferStatus::Withdrawn,
                            ]);
                            
                        } catch (\Stripe\Exception\CardException $ex) {
                            toast('warning', $ex->getMessage(), $this);
                        } catch (\Stripe\Exception\InvalidRequestException $ex) {
                            toast('warning', $ex->getMessage(), $this);
                        } catch (\Exception $ex) {
                            toast('warning', $ex->getMessage(), $this);
                        }
                    }
                }

                //TODO Send notification to expert
                if($this->currentRoute == 'offers.show'){
                    toast('success', 'The offer withdrawn successfully');
                    return redirect()->route('offers.show', $this->offer);
                }else{
                    $this->dispatch('offer-withdrawn');
                    toast('success', 'The offer withdrawn successfully', $this);
                }
            },
            prompt: [
                'title' => 'Withdraw Offer?',
                'message' => 'Are you sure to withdraw the offer?',
                'confirm' => 'Accept',
                'cancel' => 'Cancel',
                'button' => 'btn-danger',
            ],
        );
    }

    public function render()
    {
        return view('livewire.offer.withdraw');
    }
}
