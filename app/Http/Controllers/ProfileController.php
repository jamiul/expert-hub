<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\FreelancerAccount;
use App\Models\User;
use App\Models\UserProfile;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    // Show admin profile
    public function adminProfile()
    {
        return view('admin.profiles.index');
    }

    // Update admin profile
    public function updateAdminProfile(Request $request)
    {
        if (env("DEMO_MODE") == "On") {
            flash(translate('This action is blocked in demo version!'))->error();
            return back();
        }
        if (!User::where('email', $request->email)->where('id', '!=', auth()->user()->id)->first()) {
            $user = User::findOrFail(auth()->user()->id);
            $user->name = $request->name;
            $user->email = $request->email;
            if ($request->new_password != null && ($request->new_password == $request->confirm_password)) {
                $user->password = Hash::make($request->new_password);
            }
            $user->photo = $request->profile_photo;

            if ($user->save()) {
                flash(translate('Your Profile has been updated successfully!'))->success();
                return back();
            }
            flash(translate('Sorry! Something went wrong.'))->error();
            return back();
        }
        flash(translate('This Email is already used.'))->error();
        return back();
    }

    /**
     * Redirect to user profile page to update profile
     *
     * @return \Illuminate\View\View
     */
    public function userProfile(): \Illuminate\View\View
    {
        try {
            $user = Auth::user();
            $verification = $user->verifications()->where('type', 'identity_verification')->first();

            if (isClient()) {
                return view('frontend.user.client.settings.profile', compact('user', 'verification'));
            } elseif (isFreelancer()) {
                return view('frontend.user.freelancer.setting.profile', compact('user', 'verification'));
            } else {
                flash(translate('Sorry! Something went wrong.'))->error();
                return back();
            }
        } catch (\Exception $ex) {
            return back();
        }
    }

    public function userAccount()
    {
        $expert_account = FreelancerAccount::where('user_id', Auth::user()->id)->first();
        return view('frontend.user.freelancer.setting.account', compact('freelancer_account'));
    }

    public function basicInfoUpdate(Request $request)
    {
        if (env("DEMO_MODE") == "On") {
            flash(translate('This action is blocked in demo version!'))->error();
            return back();
        }

        $user = User::findOrFail(Auth::user()->id);
        if ($request->new_password != null && ($request->new_password == $request->confirm_password)) {
            $user->password = Hash::make($request->new_password);
        }
        $user->name = $request->name;
        if ($user->save()) {
            $user_profile = UserProfile::where('user_id', Auth::user()->id)->first();
            $user_profile->gender = $request->gender;
            $user_profile->nationality = $request->nationality;
            $user_profile->specialist = $request->specialist;
            if ($request->hourly_rate != null) {
                $user_profile->hourly_rate = $request->hourly_rate;
            }
            if ($user_profile->save()) {
                $user_address = Address::where('addressable_id', $user->id)->first();
                $user_address->street = $request->address;
                $user_address->country_id = $request->country_id;
                $user_address->city_id = $request->city_id;
                $user_address->postal_code = $request->postal_code;
                $user_address->phone = $request->phone;
                if ($user->address()->save($user_address)) {
                    flash(translate('Your Info has been updated successfully'))->success();
                    return redirect()->route('user.profile');
                } else {
                    flash(translate('Sorry! Something went wrong.'))->error();
                    return back();
                }
            } else {
                flash(translate('Sorry! Something went wrong.'))->error();
                return back();
            }
        } else {
            flash(translate('Sorry! Something went wrong.'))->error();
            return back();
        }
    }

    public function photoUpdate(Request $request)
    {
        $user = User::findOrFail(Auth::user()->id);
        $user->photo = $request->profile_photo;
        $user->cover_photo = $request->cover_photo;
        if ($user->save()) {
            flash(translate('Your Picture has been updated successfully'))->success();
            return redirect()->route('user.profile');
        } else {
            flash(translate('Sorry! Something went wrong.'))->error();
            return back();
        }
    }

    public function bioUpdate(Request $request)
    {
        if (env("DEMO_MODE") == "On") {
            flash(translate('This action is blocked in demo version!'))->error();
            return back();
        }

        $user = User::findOrFail(Auth::user()->id);
        $username_availability = User::where('user_name', '=', Str::slug($request->username, '-'))->first();
        if ($username_availability == null) {
            $user->user_name = Str::slug($request->username, '-');
            if ($request->new_password != null && ($request->new_password == $request->confirm_password)) {
                $user->password = Hash::make($request->new_password);
            }
            if ($user->save()) {
                $user_profile = UserProfile::where('user_id', Auth::user()->id)->first();
                $user_profile->bio = $request->bio;
                if ($request->skills != null) {
                    $user_profile->skills = json_encode($request->skills);
                }
                $user_profile->save();
                flash(translate('Your info has been updated successfully'))->success();
                return redirect()->route('user.profile');
            }
        } else {
            if ($request->new_password != null && ($request->new_password == $request->confirm_password)) {
                $user->password = Hash::make($request->new_password);
                $user->save();
            }
            $user_profile = UserProfile::where('user_id', Auth::user()->id)->first();
            $user_profile->bio = $request->bio;
            if ($request->skills != null) {
                $user_profile->skills = json_encode(array_slice($request->skills, 0, $user->userPackage->skill_add_limit));
            }
            $user_profile->save();
            flash(translate('Your info has been updated successfully'))->success();
            return redirect()->route('user.profile');
        }
    }
}
