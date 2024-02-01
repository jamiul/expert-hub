<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Frontend\Controller;
use App\Models\Profile;

class ClientDashboardController extends Controller
{
    public function index()
    {
        return view('frontend.client.dashboard.index',[
            'projects' => auth()->user()->profile->projects()->orderByDesc('id')->get(),
            'experts' => Profile::expert()->orderByDesc('id')->limit(10)->get(),
        ]);
    }
}
