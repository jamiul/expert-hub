<?php

namespace App\Http\Controllers\Frontend;

use App\Models\AboutUs;
use App\Models\Profile;
use App\DTO\AboutUsData;
use App\Models\AboutApart;
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
        $aboutApart = AboutApart::with('about_us')->get();

        // experts list
        $experts = $this->fetchProfileData($aboutUsDTO->instructor_list);

        // team list
        $teamList = $this->fetchProfileData($aboutUsDTO->team_list);

        $teamList2 = $teamList->splice(0, 2);
        $teamList3 = $teamList;

        // add new line after 10 characters
        $aboutUsDTO->header_subtitle =  Str::of($aboutUsDTO->header_subtitle)->wordWrap(10, "\n");

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
