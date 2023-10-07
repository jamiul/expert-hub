<?php

namespace App\Http\Controllers;

class WhyScholarshipController extends Controller
{
    function whyScholarshipReview()
    {
        return view('frontend.home.review');
    }

    function whyScholarshipHowToHire()
    {
        return view('frontend.static-page.how-to-hire');
    }

    function whyScholarshipHowToFindJob()
    {
        return view('frontend.static-page.how-to-find-job');
    }

    function whyFreelancerEdu()
    {
        return view('frontend.aboutUs.aboutUs');
    }
}
