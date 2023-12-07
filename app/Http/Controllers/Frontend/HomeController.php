<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Frontend\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home.index');
    }

    public function dashboard()
    {
        // if (isExpert()) {
            return view('frontend.user.expert.dashboard.landing-page');
        // } elseif (isClient()) {
            return view('frontend.user.client.dashboard.landing-page');
        // } else {
        //     abort(404);
        // }
    }
}
