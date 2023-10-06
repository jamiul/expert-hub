<?php

namespace App\Http\Controllers;

use App\Models\ChatThread;
use App\Models\ConsultantCategory;
use App\Models\FreelancerAccount;
use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\Scholarship;
use App\Models\Seminar;
use App\Models\Skill;
use App\Models\Upload;
use App\Models\User;
use App\Models\UserProfile;
use Artisan;
use Auth;
use Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $scholarships = Scholarship::all();
        $skills = Skill::with('childrens')->whereNull('parent_id')->get();
        $seminars = Seminar::all();
        $services = ProjectCategory::take(8)->get()->reverse();
        $consultant_categories = ConsultantCategory::take(8)->get();
        $subjectCounts = [];

        foreach ($scholarships as $scholarship) {
            $subject = $scholarship->fieldStudy_id;
            if (!isset($subjectCounts[$subject])) {
                $subjectCounts[$subject] = 0;
            }

            $subjectCounts[$subject] += $scholarship->available_slots;
        }

        return view('frontend.default.index', compact('subjectCounts', 'seminars', 'scholarships', 'services', 'consultant_categories', 'skills'));
    }

    //Admin login
    public function adminLogin()
    {
        if (Auth::check() && (auth()->user()->user_type == "admin" || auth()->user()->user_type == "staff")) {
            return redirect()->route('home');
        }
        return view('auth.login');
    }

    //User login
    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }
        return view('frontend.default.user_login');
    }

    public function admin_dashboard()
    {
        return view('admin.default.dashboard');
    }


    //Redirect user-based dashboard
    public function dashboard()
    {
        $user_profile = UserProfile::where('user_id', Auth::user()->id)->first();


        if (isFreelancer()) {
            return view('frontend.default.user.freelancer.dashboard');
        } elseif (isClient()) {
            return view('frontend.default.user.client.dashboard');
        } else {
            abort(404);
        }
    }

    //Show details info of specific project
    public function projectDetails($slug)
    {
        $project = Project::where('slug', $slug)->first();
        $jobPosted = Project::where('client_user_id', $project->client_user_id)->where('cancel_status', '=', 0)->count();
        $jobOpen = Project::where('client_user_id', $project->client_user_id)->where('closed', '=', 0)->where('cancel_status', '=', 0)->count();
        $similar_types = Project::where('type', $project->type)->where('id', '!=', $project->id)->where('closed', '!=', 1)->limit(3)->get();
        foreach ($project->skills as $skill_id) {
            $skill = Skill::find($skill_id);
        }
        foreach (explode(',', $project->attachments) as $attachment_id) {
            $attachment = Upload::find($attachment_id);
        }
        return view('frontend.default.project-details.project-single', compact('project', 'jobPosted', 'jobOpen', 'similar_types', 'skill', 'attachment'));
    }

    //Show details info of specific project
    public function privateProjectDetails($slug)
    {
        $project = Project::where('slug', $slug)->first();
        if ($project != null) {
            $id = $project->id;
            $user = Auth::user()->id;
            $chat_thread = ChatThread::where(
                function ($query) use ($id) {
                    $query->where('project_id', '=', $id);
                }
            )->where(
                function ($query) use ($user) {
                    $query->where('sender_user_id', '=', $user)
                        ->orWhere('receiver_user_id', '=', $user);
                }
            )->first();
        }
        return view('frontend.default.private_project_single', compact('project', 'chat_thread'));
    }

    public function clientDetails($username)
    {
        $client = User::where('user_name', $username)->first();
        $open_projects = Project::where('client_user_id', $client->id)->biddable()->open()->notcancel()->latest()->get();
        return view('frontend.default.client-single', compact('client', 'open_projects'));
    }

    //Show all client's list to user
    public function clientList()
    {
        $clients = UserProfile::where('user_role_id', '3')->paginate(8);
        $total_clients = UserProfile::where('user_role_id', '3')->get();
        return view('frontend.default.clients-listing', compact('clients', 'total_clients'));
    }

    //Show all freelancer's list to user
    public function freelancerList()
    {
        $freelancers = UserProfile::where('user_role_id', '2')->paginate(8);
        $total_freelancers = UserProfile::where('user_role_id', '2')->get();
        return view('frontend.default.freelancers-listing', compact('freelancers', 'total_freelancers'));
    }

    /**
     * Show specific freelancer details to user
     *
     * @param  string $username
     * @return \Illuminate\View\View
     */
    public function freelancerDetails($username): \Illuminate\View\View
    {
        try {
            //TODO:: if freelancer set profile as private, do not display
            $freelancer = User::where('user_name', $username)
                ->where('user_type', 'freelancer')
                ->where('banned', 0)
                ->firstOrFail();
        } catch (\Exception $ex) {
            abort(404);
        }

        return view('frontend.default.freelancer.freelancer-single', compact('freelancer'));
    }

    // Freelancer meeting arrange
    public function freelancer_meeting($user_name)
    {
        $user = User::where('user_name', $user_name)->first();
        $user_profile = UserProfile::where('user_id', $user->id)->first();
        $user_account = FreelancerAccount::where('user_id', $user->id)->first();
        return view('frontend.default.freelancer-details', compact('user', 'user_profile', 'user_account'));
    }

    //check if username exists
    public function user_name_check(Request $request)
    {
        $user_name = User::where('user_name', '=', Str::slug($request->username, '-'))->first();
        if ($user_name != null) {
            $response = "<span style='color: red; font-size: 8pt'>User name already Exist.</span>";
            return $response;
        } else {
            $response = "<span style='color: green; font-size: 8pt'>{{translate('Available')}}.</span>";
            return $response;
        }
    }

    public function sendEmailVerificationRequest(Request $request)
    {
        return send_email_verification_email();
    }

    public function verificationConfirmation($code)
    {
        $user = User::where('verification_code', $code)->first();
        if ($user != null) {
            $user->email_verified_at = Carbon::now();
            $user->save();

            flash(translate('Your email has been verified successfully'))->success();
        } else {
            flash(translate('Sorry, we could not verifiy you. Please try again'))->warning();
        }

        return redirect()->route('dashboard');
    }

    function clearCache(Request $request)
    {
        Artisan::call('cache:clear');
        Artisan::call('view:clear');
        flash(translate('Cache cleared successfully'))->success();
        return back();
    }
}
