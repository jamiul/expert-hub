<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpertAnalyticsController extends Controller
{
    public function index()
    {
        $expert = auth()->user();
        $expertProfile = $expert->profile;
        return view('frontend.expert.analytics.index',[
            'expert' => $expert,
            'expertProfile' => $expertProfile,
        ]);
    }
}
