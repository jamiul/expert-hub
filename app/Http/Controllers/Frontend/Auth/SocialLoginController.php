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
            'name' => $google_user->name,
            'email' => $google_user->email,
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

    public function googleRedirect() {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback() {
        $google_user = Socialite::driver('google')->user();
        dd($google_user);

        $profileType = ProfileType::Client;

        $user = User::updateOrCreate([
            'google_id' => $google_user->id,
        ], [
            'name' => $google_user->name,
            'email' => $google_user->email,
            'username' => Str::uuid(),
            'password' => Hash::make(Str::password(8)),
            'active_profile' => $profileType,
            'google_token' => $google_user->token,
            'google_refresh_token' => $google_user->refreshToken,
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
