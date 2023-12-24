<?php

namespace App\Http\Controllers\Frontend;

class ScholarshipController extends Controller
{
    public function __invoke()
    {
        return view('frontend.scholarship.index');
    }
}
