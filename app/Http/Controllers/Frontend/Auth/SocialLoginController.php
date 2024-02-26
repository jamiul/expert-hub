<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Enums\ProfileStatus;
use App\Enums\ProfileType;
use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
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

        $profileType = ProfileType::Client;

        $user = User::updateOrCreate([
            'linkedin_id' => $linkedin_user->id,
        ], [
            'name' => $facebook_user->name,
            'email' => $facebook_user->email,
            'username' => Str::uuid(),
            'password' => Hash::make(Str::password(8)),
            'active_profile' => $profileType,
            'linkedin_token' => $linkedin_user->token,
            'linkedin_refresh_token' => $linkedin_user->refreshToken,
        ]);

        Profile::updateOrCreate([
            'user_id' => $user->id
        ], [
            'type'    => $profileType,
            'status'  => ProfileStatus::Draft,
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

        $profileType = ProfileType::Client;

        $user = User::updateOrCreate([
            'facebook_id' => $facebook_user->id,
        ], [
            'name' => $facebook_user->name,
            'email' => $facebook_user->email,
            'username' => Str::uuid(),
            'password' => Hash::make(Str::password(8)),
            'active_profile' => $profileType,
            'facebook_token' => $facebook_user->token,
            'facebook_refresh_token' => $facebook_user->refreshToken,
        ]);

        Profile::updateOrCreate([
            'user_id' => $user->id
        ], [
            'type'    => $profileType,
            'status'  => ProfileStatus::Draft,
        ]);

        Auth::login($user);

        if(auth()->user()->active_profile == ProfileType::Expert){
            return route('expert.dashboard');
        }
        return route('client.dashboard');
    }
}
