<?php

namespace App\Http\Controllers\Frontend;

use App\Models\ChatThread;
use App\Models\ConsultantCategory;
use App\Models\ExpertAccount;
use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\Scholarship;
use App\Models\Skill;
use App\Models\Training;
use App\Models\Upload;
use App\Models\User;
use App\Models\UserProfile;
use Artisan;
use Auth;
use Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use function App\Http\Controllers\send_email_verification_email;

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
        /*$scholarships = Scholarship::all();
        $skills = Skill::with('childrens')->whereNull('parent_id')->get();
        $trainings = Training::all();
        $services = ProjectCategory::take(8)->get()->reverse();
        $consultantCategories = ConsultantCategory::take(8)->get();
        $subjectCounts = [];

        foreach ($scholarships as $scholarship) {
            $subject = $scholarship->fieldStudy_id;
            if (!isset($subjectCounts[$subject])) {
                $subjectCounts[$subject] = 0;
            }

            $subjectCounts[$subject] += $scholarship->available_slots;
        }

        return view('frontend.home.index', compact('subjectCounts', 'trainings', 'scholarships', 'services', 'consultantCategories', 'skills'));*/

        return view('frontend.home.landing-page');
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
        return view('frontend.home.user_login');
    }

    public function adminDashboard()
    {
        return view('admin.dashboard.dashboard');
    }

    //Redirect user-based dashboard
    public function dashboard()
    {
        if (isExpert()) {
            return view('frontend.user.expert.dashboard');
        } elseif (isClient()) {
            return view('frontend.user.client.dashboard');
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
        $similarTypes = Project::where('type', $project->type)->where('id', '!=', $project->id)->where('closed', '!=', 1)->limit(3)->get();

        foreach ($project->skills as $skillId) {
            $skill = Skill::find($skillId);
        }

        foreach (explode(',', $project->attachments) as $attachmentId) {
            $attachment = Upload::find($attachmentId);
        }

        return view('frontend.project.project-single', compact(
            'project',
            'jobPosted',
            'jobOpen',
            'similarTypes',
            'skill',
            'attachment'
        ));
    }

    //Show details info of specific project
    public function privateProjectDetails($slug)
    {
        $project = Project::where('slug', $slug)->first();
        if ($project != null) {
            $id = $project->id;
            $user = Auth::user()->id;
            $chatThread = ChatThread::where(
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
        return view('frontend.project.private_project_single', compact('project', 'chatThread'));
    }

    public function clientDetails($username)
    {
        $client = User::where('user_name', $username)->first();
        $openProjects = Project::where('client_user_id', $client->id)->biddable()->open()->notcancel()->latest()->get();

        return view('frontend.home.client-single', compact('client', 'openProjects'));
    }

    //Show all client's list to user
    public function clientList()
    {
        $clients = UserProfile::where('user_role_id', '3')->paginate(8);
        $totalClients = UserProfile::where('user_role_id', '3')->get();
        return view('frontend.home.clients-listing', compact('clients', 'totalClients'));
    }

    //Show all expert's list to user
    public function expertList()
    {
        $experts = UserProfile::where('user_role_id', '2')->paginate(8);
        $totalExperts = UserProfile::where('user_role_id', '2')->get();

        return view('frontend.expert.expert-listing', compact('experts', 'totalExperts'));
    }

    /**
     * Show specific expert details to user
     *
     * @param string $username
     * @return \Illuminate\View\View
     */
    public function expertDetails($username): \Illuminate\View\View
    {
        try {
            //TODO:: if expert set profile as private, do not display
            $expert = User::where('user_name', $username)
                ->where('user_type', 'expert')
                ->where('banned', 0)
                ->firstOrFail();
        } catch (\Exception $ex) {
            abort(404);
        }

        return view('frontend.expert.expert-single', compact('expert'));
    }

    // Expert meeting arrange
    public function expertMeeting($userName)
    {
        $user = User::where('user_name', $userName)->first();
        $userProfile = UserProfile::where('user_id', $user->id)->first();
        $userAccount = ExpertAccount::where('user_id', $user->id)->first();

        return view('frontend.expert.expert-details', compact('user', 'userProfile', 'userAccount'));
    }

    //check if username exists
    public function userNameCheck(Request $request)
    {
        $userName = User::where('user_name', '=', Str::slug($request->username, '-'))->first();

        if ($userName != null) {
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
