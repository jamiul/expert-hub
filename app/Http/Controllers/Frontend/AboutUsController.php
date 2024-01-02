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

        // team list
        $teamList = $this->fetchProfileData($aboutUsDTO->team_list);

        $teamList2 = $teamList->splice(0, 2);
        $teamList3 = $teamList;

        // add new line after 10 characters
        $aboutUsDTO->header_title =  Str::of($aboutUsDTO->header_title)->wordWrap(10, "\n");

        return view('frontend.about-us.index', compact(
            'about',
            'aboutUsDTO',
            'experts',
            'teamList2',
            'teamList3'
        ));
    }
}
