<?php

namespace App\Http\Controllers\Frontend;

use App\DTO\AboutUsData;
use App\Http\Controllers\Frontend\Controller;
use App\Models\AboutUs;
use App\Models\Profile;
use App\Models\Training;

class HomeController extends Controller
{

    private function fetchProfileData($ids)
    {
        return Profile::whereIn('id', $ids)
        ->with('user' ,'expertField')->limit(10)->get();

    }

    public function index()
    {
        $about = AboutUs::first();
        $aboutUsDTO = new AboutUsData($about);

        // experts list
        $experts = $this->fetchProfileData($aboutUsDTO->instructor_list);

        // team list
        $teamList = $this->fetchProfileData($aboutUsDTO->team_list);

        $requireTitle = "Search Academic Expert Made Easy";
        $latestTrainings = Training::orderBy('id','desc')->limit(3)->get();
        return view('frontend.home.index', compact(
            'aboutUsDTO',
            'experts',
            'teamList',
            'requireTitle',
            'latestTrainings'
        ));
    }

    public function dashboard()
    {
        // if (isExpert()) {
            return view('frontend.user.expert.dashboard.landing-page');
        // } elseif (isClient()) {
            return view('frontend.user.client.dashboard.landing-page');
        // } else {
        //     abort(404);
        // }
    }
}
