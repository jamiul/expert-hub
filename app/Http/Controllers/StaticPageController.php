<?php

namespace App\Http\Controllers;

class StaticPageController extends Controller
{
    public function waysToEarn()
    {
        return view('frontend.default.find-job.waysToEarn');
    }

    public function promote()
    {
        return view('frontend.default.find-job.promote');
    }

    public function sendProposal()
    {
        return view('frontend.default.find-job.sendProposal');
    }

    public function badge()
    {
        return view('frontend.default.find-job.badge');
    }

    public function proposal()
    {
        return view('frontend.default.find-job.proposal');
    }

    public function skills()
    {
        return view('frontend.default.find-job.skills');
    }

    public function successStories()
    {
        return view('frontend.default.success-stories');
    }
}
