<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Frontend\Controller;

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

    function whyEduExHub()
    {
        return view('frontend.about-us.about-us');
    }
}
