<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Profile;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Frontend\Controller;

class ProfileController extends Controller
{
    public function index(): View
    {
        return view('frontend.profile.index');
    }

    public function create(): View
    {
        return view('frontend.profile.create');
    }
}
