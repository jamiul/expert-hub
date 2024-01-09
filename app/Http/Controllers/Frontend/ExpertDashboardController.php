<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Frontend\Controller;
use Illuminate\Http\Request;

class ExpertDashboardController extends Controller
{
    public function index()
    {
        return view('frontend.expert.dashboard.index');
    }
}
