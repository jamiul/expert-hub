<?php

namespace App\Http\Controllers;

class WhyScholarshipController extends Controller
{
    function whyScholarshipReview()
    {
        return view('frontend.review');
    }

    function whyScholarshipHowToHire()
    {
        return view('frontend.howToHire');
    }

    function whyScholarshipHowToFindJob()
    {
        return view('frontend.how-to-find-job');
    }

    function whyFreelancerEdu()
    {
        return view('frontend.aboutUs.aboutUs');
    }
}
