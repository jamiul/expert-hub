<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Enums\ProfileType;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Auth;

class SocialLoginController extends Controller
{
    public function linkedinRedirect() {
        return Socialite::driver('linkedin-openid')->redirect();
    }

    public function linkedinCallback() {
        $linkedin_user = Socialite::driver('linkedin-openid')->user();
        dd($linkedin_user);

        $user = User::updateOrCreate([
            'linkedin_id' => $linkedin_user->id,
        ], [
            'name' => $linkedin_user->name,
            'email' => $linkedin_user->email,
            'linkedin_token' => $linkedin_user->token,
            'linkedin_refresh_token' => $linkedin_user->refreshToken,
        ]);

        Auth::login($user);

        if(auth()->user()->active_profile == ProfileType::Expert){
            return route('expert.dashboard');
        }
        return route('client.dashboard');
    }

    public function facebookRedirect() {
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookCallback() {
        $facebook_user = Socialite::driver('facebook')->user();
        dd($facebook_user);

        $user = User::updateOrCreate([
            'facebook_id' => $facebook_user->id,
        ], [
            'name' => $facebook_user->name,
            'email' => $facebook_user->email,
            'facebook_token' => $facebook_user->token,
            'facebook_refresh_token' => $facebook_user->refreshToken,
        ]);

        Auth::login($user);

        if(auth()->user()->active_profile == ProfileType::Expert){
            return route('expert.dashboard');
        }
        return route('client.dashboard');
    }
}
