<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Frontend\Controller;
use App\Models\Address;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function showRegistrationForm()
    {
        return view('frontend.home.register.sign-up');
    }

    public function registrationOptionForm()
    {
        return view('frontend.home.register.user-option');
    }

    public function registrationEmailVerify()
    {
        return view('frontend.home.register.verify-email');
    }

    public function registrationEmailVerifyComplete()
    {
        return view('frontend.home.register.verify-complete');
    }

    public function registerProfile()
    {
        return view('frontend.home.register.register-profile');
    }

    public function registerDetails()
    {
        return view('frontend.home.register.register-general-info');
    }

    public function registerExpertise()
    {
        return view('frontend.home.register.register-expertise');
    }

    public function register(Request $request)
    {
        $user = $this->create($request->all());

        $this->guard()->login($user);

        if ($user->email != null) {
            if (getSetting('email_verification') != 1) {
                $user->email_verified_at = date('Y-m-d H:m:s');
                $user->save();
                flash(translate('Registration successful.'))->success();
            } else {
                try {
                    $user->sendEmailVerificationNotification();
                    flash(translate('Registration successful. Please verify your email.'))->success();
                } catch (\Throwable $th) {
                    $user->delete();
                    flash(translate('Registration failed. Please try again later.'))->error();
                }
            }
        }

        return $this->registered($request, $user) ?: redirect($this->redirectPath());
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        // dd($data);
        $user = User::create(
            [
                'name' => $data['name'],
                'email' => $data['email'],
                'user_name' => Str::slug($data['name'], '-') . date('Ymd-his'),
                'password' => Hash::make($data['password']),
            ]
        );

        if (in_array('expert', $data['user_types'])) {
            $user->user_type = 'expert';
        }
        if (in_array('client', $data['user_types'])) {
            $user->user_type = 'client';
        }

        $user->save();

        $address = new Address;
        $user->address()->save($address);


        $userProfile = new UserProfile;
        $userProfile->user_id = $user->id;
        $userProfile->save();

        return $user;
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make(
            $data,
            [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:6', 'confirmed'],
            ]
        );
    }
}
