<?php

namespace App\Http\Controllers\Frontend;

class TrainingController extends Controller
{
    public function index()
    {
        return view('frontend.training.landing-page');
    }

    public function details($slug)
    {
        return view('frontend.training.details');
    }
}
