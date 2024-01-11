<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Frontend\Controller;

class ClientDashboardController extends Controller
{
    public function index()
    {
        return view('frontend.client.dashboard.index');
    }
}
