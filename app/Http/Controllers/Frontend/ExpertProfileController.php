<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Profile;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Frontend\Controller;

class ExpertProfileController extends Controller
{
    public function index(): View
    {
        return view('frontend.expert.profile.index');
    }

    public function create(): View
    {
        return view('frontend.expert.profile.create');
    }

    public function edit()
    {
        return view('frontend.expert.profile.edit');
    }
}
