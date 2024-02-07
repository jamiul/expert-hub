<?php

namespace App\Livewire\Offer;

use App\Enums\OfferStatus;
use App\Models\Offer;
use App\Models\Transaction;
use Livewire\Component;

class Withdraw extends Component
{
    public Offer $offer;

    public function withdraw()
    {
        //refund amount to customer
        $stripe = new \Stripe\StripeClient( [
            "api_key" => env( 'STRIPE_SECRET' ),
        ] );

        foreach ($this->offer->transactions as $transaction){
            if($transaction->object = 'payment_intent' && $transaction->status == 'succeeded'){
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
                } catch(\Stripe\Exception\CardException $ex) {
                    toast('warning', $ex->getMessage(), $this);
                } catch (\Stripe\Exception\InvalidRequestException $ex) {
                    toast('warning', $ex->getMessage(), $this);
                } catch (\Exception $ex){
                    toast('warning', $ex->getMessage(), $this);
                }
            }
        }

        $this->dispatch('offer-withdrawn');

        toast('success', 'The offer withdrawn successfully', $this);
    }

    public function render()
    {
        return view('livewire.offer.withdraw');
    }
}
