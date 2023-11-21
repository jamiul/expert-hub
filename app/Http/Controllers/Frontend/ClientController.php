<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return view('client.dashboard.landing-page');
    }
}
