<?php

namespace App\Livewire\Offer;

use App\Enums\OfferStatus;
use App\Models\Offer;
use Livewire\Component;

class Withdraw extends Component
{
    public Offer $offer;

    public function withdraw()
    {
        $this->offer->update([
            'status' => OfferStatus::Withdrawn,
        ]);
        $this->dispatch('offer-withdrawn');
        toast('success', 'The offer withdrawn successfully', $this);
    }
    
    public function render()
    {
        return view('livewire.offer.withdraw');
    }
}
