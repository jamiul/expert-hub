<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Conversation;
use App\Models\Offer;
use App\Models\Profile;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function create(Profile $expert)
    {
        return view('frontend.offer.create', [
            'expert' => $expert,
        ]);
    }

    public function show(Offer $offer)
    {
        $conversation = Conversation::query()
            ->where('creator_profile_id', $offer->client->id)
            ->where('reference_id', $offer->project->id)
            ->wherehas('participants', function ($query) use($offer) {
                $query->where('profile_id', $offer->expert->id);
            })
            ->first();
        return view('frontend.offer.show', [
            'offer' => $offer,
            'conversation' => $conversation
        ]);
    }
}
