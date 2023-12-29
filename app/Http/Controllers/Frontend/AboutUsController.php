<?php

namespace App\Http\Controllers\Frontend;

use App\Models\AboutUs;
use App\Models\Profile;
use App\DTO\AboutUsData;
use App\Models\AboutApart;
use App\Http\Controllers\Frontend\Controller;

class AboutUsController extends Controller
{
    public function index()
    {
        $about = AboutUs::first();
        $aboutUsDTO = new AboutUsData($about);
        $aboutApart = AboutApart::with('about_us')->get();

        $experts = Profile::whereIn('id', $aboutUsDTO->instructor_list)
            ->with('user')
            ->get();

        $teamList = Profile::whereIn('id', $aboutUsDTO->team_list)
            ->with('user')
            ->get();

        $teamList2 = $teamList->splice(0, 2);
        $teamList3 = $teamList;

        return view('frontend.about-us.index', compact(
            'about',
            'aboutApart',
            'aboutUsDTO',
            'experts',
            'teamList2',
            'teamList3'
        ));
    }
}
