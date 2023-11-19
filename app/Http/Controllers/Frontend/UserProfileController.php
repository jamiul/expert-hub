<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Frontend\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserProfileController extends Controller
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
