<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
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
}
