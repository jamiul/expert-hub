<?php

namespace App\Http\Controllers\Frontend;

use App\Models\AboutUs;
use App\Models\Profile;
use App\DTO\AboutUsData;
use Illuminate\Support\Str;
use App\Http\Controllers\Frontend\Controller;

class AboutUsController extends Controller
{

    private function fetchProfileData($ids)
    {
        return Profile::whereIn('id', $ids)
        ->with('user' ,'expertField')
        ->get();

    }

    public function index()
    {
        $about = AboutUs::first();
        $aboutUsDTO = new AboutUsData($about);

        // experts list
        $experts = $this->fetchProfileData($aboutUsDTO->instructor_list);

        // add new line after 10 characters
        $aboutUsDTO->header_title =  Str::of($aboutUsDTO->header_title)->wordWrap(10, "\n");

        return view('frontend.about-us.index', compact(
            'about',
            'aboutUsDTO',
            'experts'
        ));
    }
}
