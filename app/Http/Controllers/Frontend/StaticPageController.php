<?php

namespace App\Http\Controllers\Frontend;

class StaticPageController extends Controller
{
    public function waysToEarn()
    {
        return view('frontend.ob.waysToEarn');
    }

    public function promote()
    {
        return view('frontend.job.promote');
    }

    public function sendProposal()
    {
        return view('frontend.job.send-proposal');
    }

    public function badge()
    {
        return view('frontend.job.badge');
    }

    public function proposal()
    {
        return view('frontend.job.proposal');
    }

    public function skills()
    {
        return view('frontend.static-page.skills');
    }

    public function successStories()
    {
        return view('frontend.static-page.success-stories');
    }
}
