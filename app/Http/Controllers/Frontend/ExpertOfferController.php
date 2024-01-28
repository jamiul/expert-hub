<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\Request;

class ExpertOfferController extends Controller
{
    public function show(Offer $offer)
    {
        if($offer->expert->id != auth()->user()->profile->id){
            abort(403);
        }
        return view('frontend.offer.expert.show', [
            'offer' => $offer,
        ]);
    }
}
