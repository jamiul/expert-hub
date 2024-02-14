<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Profile;
use Illuminate\View\View;
use App\Enums\ProfileType;
use App\Models\Consultation;
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
        return view('frontend.expert.profile.edit', [
            'profile' => auth()->user()->profile,
        ]);
    }

    public function show(Profile $profile)
    {
        $expert = Profile::with('user')->where('id', $profile->id)->expert()->first();

        if($expert) {
            return view('frontend.expert.profile.show', compact('expert'));
        }

        abort(404);
    }

    public function viewConsultation(Consultation $consultation)
    {
        // dd($consultation->slots);
        return view('frontend.expert.profile.consultation', compact('consultation'));
    }
}
