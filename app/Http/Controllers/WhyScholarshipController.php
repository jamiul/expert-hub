<?php

namespace App\Http\Controllers;

class WhyScholarshipController extends Controller
{
    function whyScholarshipReview()
    {
        return view('frontend.default.review');
    }

    function whyScholarshipHowToHire()
    {
        return view('frontend.default.howToHire');
    }

    function whyScholarshipHowToFindJob()
    {
        return view('frontend.default.how-to-find-job');
    }

    function whyFreelancerEdu()
    {
        return view('frontend.default.aboutUs.aboutUs');
    }
}
