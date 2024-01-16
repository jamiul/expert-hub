<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Frontend\Controller;
use Illuminate\Http\Request;

class ExpertDashboardController extends Controller
{
    public function index()
    {
        $consultationCount = count(auth()->user()->profile->consultation);
        $trainingCount = 0;
        return view('frontend.expert.dashboard.index', compact('consultationCount', 'trainingCount'));
    }
}
