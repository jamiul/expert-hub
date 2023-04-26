<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhyScholarshipController extends Controller
{
    function why_scholarship_review(){
        return view('frontend.default.review');
    }
    function why_scholarship_howToHire(){
        return view('frontend.default.howToHire');
    }
}
