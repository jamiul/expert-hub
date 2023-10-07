<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Frontend\Controller;
use App\Models\User;
use App\Models\Verification;
use Auth;
use Illuminate\Http\Request;
use Session;

class VerificationController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:show verification requests'])->only('index');
    }

    public function index(Request $request)
    {

        $sortSearch = null;
        $users = User::where('user_type', 'expert')->orWhere('user_type', 'client')->orderBy('created_at', 'desc');

        if ($request->has('search')) {
            $sortSearch = $request->search;
            $users = $users->where('name', 'like', '%' . $sortSearch . '%')->orWhere('email', 'like', '%' . $sortSearch . '%');
        }

        $users = $users->paginate(10);

        return view('admin.verification_request.index', compact('users', 'sortSearch'));
    }

    //Verification Info sent to admin
    public function verificationStore(Request $request)
    {
        if (!$request->verification_file) {
            flash(translate('Your verification file is required.'))->error();
            return back();
        }

        $verification = new Verification;
        $verification->type = $request->verification_type;
        $verification->user_id = Auth::user()->id;
        $verification->role_id = Session::get('role_id');
        $verification->attachment = $request->verification_file;
        if ($verification->save()) {
            flash(translate('Your verification file has been sent successfully'))->success();
            return back();
        } else {
            flash(translate('Sorry! Something went wrong.'))->error();
            return back();
        }
    }

    public function show($username)
    {
        $user = User::where('user_name', $username)->first();
        return view('admin.verification_request.show', compact('user'));
    }

    public function verificationAccept(Request $request)
    {
        $verification = Verification::findOrFail($request->id);
        $verification->verified = 1;
        if ($verification->save()) {
            return 1;
        } else {
            return 0;
        }
    }

    public function verificationReject(Request $request)
    {
        $verification = Verification::findOrFail($request->id);
        if (Verification::destroy($verification->id)) {
            return 1;
        } else {
            return 0;
        }
    }

    public function destroy($id)
    {
        $verification = Verification::findOrFail($id);
        if (Verification::destroy($id)) {
            flash(translate('Verification info has been deleted successfully'))->error();
            return redirect()->route('verification_requests');
        } else {
            flash(translate('Something went wrong'))->error();
            return back();
        }
    }
}
