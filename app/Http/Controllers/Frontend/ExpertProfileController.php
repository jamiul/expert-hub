<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Frontend\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

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
}
