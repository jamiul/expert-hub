<?php

namespace App\Http\Controllers\Frontend;

use App\Models\AboutUs;
use App\DTO\AboutUsData;
use App\DTO\AboutApartDTO;
use App\Models\AboutApart;
use App\Http\Controllers\Frontend\Controller;

class AboutUsController extends Controller
{
    public function index()
    {
        $about = AboutUs::first();
        $aboutUsDTO = new AboutUsData($about);
        $aboutApart = AboutApart::with('about_us')->get();
        // $aboutApartDTO = new AboutApartDTO($aboutApart);

        return view('frontend.about-us.index', compact('about', 'aboutApart', 'aboutUsDTO'));
    }
}
