<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

class ConsultantController extends Controller
{
    public function index()
    {
        return view('frontend.consultant.landing-page');
    }

    public function view()
    {
        return view('frontend.consultant.details');
    }
}
