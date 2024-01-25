<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Profile;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Frontend\Controller;
use App\Models\User;

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

    public function show(Profile $profile)
    {
        $expert = Profile::with('user')->where('id', $profile->id)->expert()->first();

        if($expert->count() > 0) {
            return view('frontend.expert.profile.show', compact('expert'));
        }

        abort(404);
    }
}
