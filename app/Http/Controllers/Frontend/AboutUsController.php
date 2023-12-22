<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Frontend\Controller;
use App\Models\AboutApart;
use App\Models\AboutUs;

class AboutUsController extends Controller
{
    public function index()
    {
        $aboutAparts = AboutApart::with('aboutUs')->get();
        $aboutUs = AboutUs::first();

        return view('frontend.about-us.index', compact('aboutAparts', 'aboutUs'));
    }
}
