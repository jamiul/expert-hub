<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Frontend\Controller;
use Illuminate\Http\Request;

class ClientProfileController extends Controller
{
    public function index()
    {
        return view('frontend.client.profile.index');
    }

    public function position()
    {
        return view('frontend.client.profile.current-position');
    }

    public function edit()
    {
        return view('frontend.client.profile.edit');
    }
}
