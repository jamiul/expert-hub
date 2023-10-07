<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Frontend\Controller;
use App\Models\Address;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Session;
use Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('frontend.home.user_login');
    }

    public function handleProviderCallback(Request $request, $provider)
    {
        try {
            if ($provider == 'twitter') {
                $user = Socialite::driver('twitter')->user();
            } else {
                $user = Socialite::driver($provider)->stateless()->user();
            }
        } catch (\Exception $e) {
            flash("Something Went wrong. Try again.")->error();
            return redirect()->route('user.login');
        }

        // check if they're an existing user
        $existingUser = User::where('provider_id', $user->id)->orWhere('email', $user->email)->first();
        if ($existingUser) {
            // log them in
            auth()->login($existingUser, true);

            $userProfile = UserProfile::where('user_id', auth()->user()->id)->first();
        } else {
            // create a new user
            $newUser = new User;
            $newUser->name = $user->name;
            $newUser->user_name = Str::slug($user->name, '-') . date('Ymd-his');
            $newUser->email = $user->email;
            $newUser->email_verified_at = date('Y-m-d Hms');
            $newUser->provider_id = $user->id;

            $newUser->save();
            Session::put('new_user', true);

            $userProfile = new UserProfile;
            $userProfile->user_id = $newUser->id;
            $userProfile->save();

            $address = new Address;
            $newUser->address()->save($address);

            auth()->login($newUser, true);
        }
        if (session('link') != null) {
            return redirect(session('link'));
        } else {
            return redirect()->route('dashboard');
        }
    }

    public function authenticated()
    {
        if (auth()->user()->user_type == ' ' || auth()->user()->user_type == 'staff') {
            return redirect()->route('admin.dashboard');
        } else {
            if (auth()->user()->banned) {
                flash(translate('You are banned'))->warning();
                return redirect()->route('home');
            }
            if (auth()->user()->user_type == 'admin' || auth()->user()->user_type == 'staff') {
                return redirect()->route('admin.dashboard');
            }

            if (session('link') != null) {
                return redirect(session('link'));
            } else {
                return redirect()->route('dashboard');
            }
        }
    }

    public function logout(Request $request)
    {
        if (auth()->user() != null && (auth()->user()->user_type != null && auth()->user()->user_type == "admin" || auth()->user()->user_type == "staff")) {
            $redirectRoute = 'admin.login';
        } else {
            $redirectRoute = 'dashboard';
        }

        $this->guard()->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect()->route($redirectRoute);
    }
}
