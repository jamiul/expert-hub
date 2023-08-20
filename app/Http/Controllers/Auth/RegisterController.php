<?php

namespace App\Http\Controllers\Auth;

use Session;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Address;
use App\Models\UserProfile;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\RegisterEmailSend;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm(Request $request, $code = null)
    {
        if(!empty($code)) {
            $user = $this->isRegister($code);
            if(empty($user)) {
                flash(translate('Ivalid code applied'))->error();
                return redirect()->back();
            }
        }
        return view('frontend.default.user_sign_up', compact('code'));
    }

    private function isRegister($code) {
        $user = User::where('confirmation_code', $code)->first();
        return $user;
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users' ,'regex:/(.+)@(.+)\.(.+)/i'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    public function registerMailStore(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email'
        ]);

        $input = $request->all();
        $string = Str::random(30);
        $input['confirmation_code'] = $string;
        $to = $input['email'];
        $url = url('register/' . $string);

        $details = [
            'url' => $url,
            'email' => $to,
            'body' => config('constants.email.register.body'),
        ];
        // dd($input);
        Mail::to($to)->send(new RegisterEmailSend($details));
        User::firstOrCreate(['email' => $to], $input);

        flash(translate('Invitation has been sent successfully.'))->success();

        return redirect()->back();
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        // dd($data);
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'user_name' =>Str::slug($data['name'], '-').date('Ymd-his'),
            'password' => Hash::make($data['password']),
        ]);

        if (in_array('freelancer', $data['user_types'])) {
            $user->user_type = 'freelancer';
        }
        if(in_array('client', $data['user_types'])) {
            $user->user_type = 'client';
        }

        $user->save();

        $address = new Address;
        $user->address()->save($address);


        $user_profile = new UserProfile;
        $user_profile->user_id = $user->id;
        $user_profile->save();

        // email data
        $email_data = array(
            'name' => $data['name'],
            'email' => $data['email'],
        );

        Mail::send('emails.welcome_email', $email_data, function ($message) use ($email_data) {
            $message->to($email_data['email'], $email_data['name'])
                ->subject('Welcome to MyNotePaper')
                ->from('info@mynotepaper.com', 'MyNotePaper');
        });

        return $user;
    }

    public function register(Request $request)
    {
        $user = $this->create($request->all());

        // $this->guard()->login($user);

        if($user->email != null){
            if(get_setting('email_verification') != 1){
                $user->email_verified_at = date('Y-m-d H:m:s');
                $user->save();
                flash(translate('Registration successful.'))->success();
            }
            else {
                try {
                    $user->sendEmailVerificationNotification();
                    flash(translate('Registration successful. Please verify your email.'))->success();
                } catch (\Throwable $th) {
                    $user->delete();
                    flash(translate('Registration failed. Please try again later.'))->error();
                }
            }
        }

        return $this->registered($request, $user)
            ?: redirect()->route('login');
    }

}
