<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Frontend\Controller;
use App\Models\Address;
use App\Models\ExpertAccount;
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
            } elseif (isExpert()) {
                return view('frontend.user.expert.setting.profile', compact('user', 'verification'));
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
        $expertAccount = ExpertAccount::where('user_id', Auth::user()->id)->first();

        return view('frontend.user.expert.setting.account', compact('expertAccount'));
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
            $userProfile = UserProfile::where('user_id', Auth::user()->id)->first();
            $userProfile->gender = $request->gender;
            $userProfile->nationality = $request->nationality;
            $userProfile->specialist = $request->specialist;

            if ($request->hourly_rate != null) {
                $userProfile->hourly_rate = $request->hourly_rate;
            }

            if ($userProfile->save()) {
                $userAddress = Address::where('addressable_id', $user->id)->first();
                $userAddress->street = $request->address;
                $userAddress->country_id = $request->country_id;
                $userAddress->city_id = $request->city_id;
                $userAddress->postal_code = $request->postal_code;
                $userAddress->phone = $request->phone;
                if ($user->address()->save($userAddress)) {
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

        $usernameAvailability = User::where('user_name', '=', Str::slug($request->username, '-'))->first();
        if ($usernameAvailability == null) {
            $user->user_name = Str::slug($request->username, '-');
            if ($request->new_password != null && ($request->new_password == $request->confirm_password)) {
                $user->password = Hash::make($request->new_password);
            }
            if ($user->save()) {
                $userProfile = UserProfile::where('user_id', Auth::user()->id)->first();
                $userProfile->bio = $request->bio;
                if ($request->skills != null) {
                    $userProfile->skills = json_encode($request->skills);
                }
                $userProfile->save();
                flash(translate('Your info has been updated successfully'))->success();
                return redirect()->route('user.profile');
            }
        } else {
            if ($request->new_password != null && ($request->new_password == $request->confirm_password)) {
                $user->password = Hash::make($request->new_password);
                $user->save();
            }
            $userProfile = UserProfile::where('user_id', Auth::user()->id)->first();
            $userProfile->bio = $request->bio;
            if ($request->skills != null) {
                $userProfile->skills = json_encode(array_slice($request->skills, 0, $user->userPackage->skill_add_limit));
            }
            $userProfile->save();
            flash(translate('Your info has been updated successfully'))->success();

            return redirect()->route('user.profile');
        }
    }
}
