<?php

namespace App\Http\Controllers;

class StaticPageController extends Controller
{
    public function waysToEarn()
    {
        return view('frontend.find-job.waysToEarn');
    }

    public function promote()
    {
        return view('frontend.find-job.promote');
    }

    public function sendProposal()
    {
        return view('frontend.find-job.sendProposal');
    }

    public function badge()
    {
        return view('frontend.find-job.badge');
    }

    public function proposal()
    {
        return view('frontend.find-job.proposal');
    }

    public function skills()
    {
        return view('frontend.find-job.skills');
    }

    public function successStories()
    {
        return view('frontend.success-stories');
    }
}
