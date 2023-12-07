<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

class ExpertController extends Controller
{
    public function index()
    {
        return view('frontend.expert.index');
    }

    public function view()
    {
        return view('frontend.expert.details');
    }
}
