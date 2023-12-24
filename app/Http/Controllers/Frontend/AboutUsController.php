<?php

namespace App\Http\Controllers\Frontend;

use App\Models\AboutUs;
use App\DTO\AboutUsData;
use App\Models\AboutApart;
use App\Http\Controllers\Frontend\Controller;

class AboutUsController extends Controller
{
    public function index()
    {
        $about = AboutUs::first();
        $aboutUsDTO = new AboutUsData($about);
        $aboutAparts = AboutApart::with('aboutUs')->get();

        return view('frontend.about-us.index', compact('aboutAparts', 'aboutUs'));
    }
}
