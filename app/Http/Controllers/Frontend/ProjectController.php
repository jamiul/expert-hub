<?php

namespace App\Http\Controllers\Frontend;

use App\Enums\OptionGroupEnum;
use App\Http\Requests\ProjectRequest;
use App\Models\Badge;
use App\Models\HireInvitation;
use App\Models\MilestonePayment;
use App\Models\Option;
use App\Models\Project;
use App\Models\ProjectBid;
use App\Models\ProjectCategory;
use App\Models\ProjectUser;
use App\Models\Skill;
use App\Models\UserBadge;
use App\Utility\EmailUtility;
use App\Utility\NotificationUtility;
use Auth;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use function App\Http\Controllers\get_email_by_user_id;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::where('client_user_id', Auth::user()->id)->latest()->paginate(10);

        return view('frontend.user.client.projects.list', compact('projects'));
    }

    public function myOpenProject()
    {
        $projects = Project::where('client_user_id', Auth::user()->id)->open()->biddable()->notcancel()->latest()->paginate(10);

        return view('frontend.user.client.projects.my_open_projects', compact('projects'));
    }

    public function myRunningProject()
    {
        if (isClient()) {
            $projects = Project::where('client_user_id', Auth::user()->id)->where('biddable', '0')->open()->notcancel()->latest()->paginate(10);

            return view('frontend.user.client.projects.my_running_project', compact('projects'));
        } elseif (isExpert()) {
            $runningProjects = DB::table('projects')
                ->join('project_users', 'projects.id', '=', 'project_users.project_id')
                ->where('project_users.user_id', Auth::user()->id)
                ->where('projects.cancel_status', 0)
                ->where('projects.closed', 0)
                ->select('projects.id', 'project_users.hired_at')
                ->distinct()
                ->paginate(10);

            return view('frontend.user.expert.projects.my_running_project', compact('runningProjects'));
        }
    }

    public function biddedProjects()
    {
        $biddedProjects = ProjectBid::where('bid_by_user_id', Auth::user()->id)->paginate(10);
        $totalBiddedProjects = ProjectBid::where('bid_by_user_id', Auth::user()->id)->get();

        return view('frontend.user.expert.projects.bidded', compact('biddedProjects', 'totalBiddedProjects'));
    }

    public function myCancelledProject()
    {
        if (isClient()) {
            $projects = Project::where('client_user_id', Auth::user()->id)->where('cancel_status', '1')->latest()->paginate(10);

            return view('frontend.user.client.projects.my_cancelled_project', compact('projects'));
        } elseif (isExpert()) {
            $cancelledProjects = DB::table('projects')
                ->orderBy('projects.created_at', 'desc')
                ->join('project_users', 'projects.id', '=', 'project_users.project_id')
                ->where('projects.cancel_status', 1)
                ->where('project_users.user_id', Auth::user()->id)
                ->select('projects.id')
                ->distinct()
                ->paginate(10);

            return view('frontend.user.expert.projects.my_cancelled_project', compact('cancelledProjects'));
        }
    }

    public function myCompletedProject()
    {
        if (isClient()) {
            $projects = Project::where('client_user_id', Auth::user()->id)->closed()->latest()->paginate(10);

            return view('frontend.user.client.projects.my_completed_project', compact('projects'));
        } elseif (isExpert()) {
            $completedProjects = getCompletedProjectsByExpert(Auth::user()->id)->paginate(10);

            return view('frontend.user.expert.projects.my_completed_project', compact('completedProjects'));
        }
    }

    public function projectBids($slug)
    {
        $project = Project::where('slug', $slug)->first();
        $projectBids = $project->bids;
        $bidUsers = ProjectBid::where('project_id', $project->id)->latest()->paginate(10);

        return view('frontend.user.client.projects.bids', compact('project', 'projectBids', 'bidUsers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
/*        $budgetAud = Option::where('group', OptionGroupEnum::BudgetAUD)->where('status', 1)->pluck('value')->toArray();
        $budgetUsd = Option::where('group', OptionGroupEnum::BudgetUSD)->where('status', 1)->pluck('value')->toArray();
        $categories = ProjectCategory::all();
        $skills = Skill::all();
        $clientPackage = Auth::user()->userPackage;*/

        return view('frontend.user.client.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $request)
    {
        // dd($request->validated());
        $uploadAble = false;

        if ($request->projectType == 'Fixed') {
            $userPackage = Auth::user()->userPackage;
            if ($userPackage->fixed_limit > 0) {
                $userPackage->fixed_limit -= 1;
                $userPackage->save();

                $uploadAble = true;
            }
        } else {
            $userPackage = Auth::user()->userPackage;
            if ($userPackage->long_term_limit > 0) {
                $userPackage->long_term_limit -= 1;
                $userPackage->save();

                $uploadAble = true;
            }
        }

        if ($uploadAble) {
            $project = new Project;
            $project->name = $request->name;
            $project->description = $request->description;
            $project->attachments = $request->attachments;
            $project->skills = $request->skills;
            $project->type = $request->type;
            $project->currency = $request->currency;
            $project->budget = $request->budget;
            $project->project_category_id = $request->project_category_id;
            $project->client_user_id = Auth::user()->id;
            $project->slug = Str::slug($request->name, '-') . date('Ymd-his');
            $project->save();

            //to admin
            NotificationUtility::set_notification(
                "project_created_by_client",
                translate('A new Project has been created by'),
                route('project.details', ['slug' => $project->slug], false),
                0,
                Auth::user()->id,
                'admin'
            );
            EmailUtility::sendEmail(
                translate('A new Project has been created'),
                translate('A new Project has been created by') . Auth::user()->name,
                systemEmail(),
                route('project.details', ['slug' => $project->slug])
            );

            flash(translate('Project has been created successfully'))->success();

            return redirect()->route('projects.index');
        } else {
            flash(translate('Sorry! Project creating limit has been reached.'))->warning();

            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $budgetAud = Option::where('group', OptionGroupEnum::BudgetAUD)->where('status', 1)->pluck('value')->toArray();
        $budgetUsd = Option::where('group', OptionGroupEnum::BudgetUSD)->where('status', 1)->pluck('value')->toArray();
        $project = Project::findOrFail(decrypt($id));
        $categories = ProjectCategory::all();
        $skills = Skill::all();
        $clientPackage = Auth::user()->userPackage;

        if ($project->closed == '0') {
            return view('frontend.user.client.projects.edit', compact('categories', 'skills', 'project', 'clientPackage', 'budgetAud', 'budgetUsd'));
        } else {
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        $project->name = $request->name;
        $project->description = $request->description;
        $project->attachments = $request->attachments;
        $project->skills = $request->skills;
        $project->type = $request->type;
        $project->currency = $request->currency;
        $project->budget = $request->budget;
        $project->project_category_id = $request->project_category_id;
        $project->excerpt = $request->excerpt;
        $project->skills = $request->skills;
        $project->attachments = $request->attachments;
        $project->client_user_id = Auth::user()->id;

        if ($project->slug == null) {
            $project->slug = Str::slug($request->name, '-') . date('Ymd-his');
        }

        if ($project->save()) {
            flash(translate('Project has been updated successfully'))->success();
            return redirect()->route('projects.index');
        } else {
            flash(translate('Sorry! Something went wrong.'))->error();
            return back();
        }
    }

    public function projectCancel($id)
    {
        $activeProject = ProjectUser::where('project_id', $id)->first();
        $project = Project::findOrFail($id);

        if ($activeProject == null) {
            $project->cancel_status = '1';
            $project->cancel_by_user_id = Auth::user()->id;
            $project->save();
            if ($project->private == '1') {
                Project::destroy($project->id);
            }
            flash(translate('Project has been cancelled successfully'))->success();
            return redirect()->back();
        } elseif ($activeProject != null) {
            return view('frontend.user.projects.project_cancel_request', compact('project'));
        } else {
            flash(translate('Something went wrong'))->error();
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::findOrFail(decrypt($id));

        foreach ($project->projectBids as $key => $bid) {
            $bid->delete();
        }

        foreach ($project->reviews as $key => $review) {
            $review->delete();
        }

        if ($project->project_user != null) {
            $project->project_user->delete();
        }

        $invites = HireInvitation::where('project_id', $project->id)->get();

        if ($invites != null) {
            foreach ($invites as $key => $invite) {
                $invite->delete();
            }
        }

        $milestonePayments = MilestonePayment::where('project_id', $project->id)->get();
        if ($milestonePayments != null) {
            foreach ($milestonePayments as $key => $milestonePayment) {
                $milestonePayment->delete();
            }
        }

        $projectUsers = ProjectUser::where('project_id', $project->id)->get();

        if ($projectUsers != null) {
            foreach ($projectUsers as $key => $projectUser) {
                $projectUser->delete();
            }
        }

        if (Project::destroy(decrypt($id))) {
            flash(translate('Project has been deleted successfully'))->success();

            return redirect()->route('all_projects');
        } else {
            flash(translate('Something went wrong'))->error();

            return back();
        }
    }

    public function projectDone($id)
    {
        $project = Project::findOrFail($id);

        if (MilestonePayment::where('project_id', $project->id)->where('paid_status', 1)->sum('amount') >= $project->project_user->hired_at) {
            $project->closed = 1;
            $project->save();
            try {
                $this->check_for_client_project_badge($project->client_user_id);
                $this->check_for_expert_project_badge($project->project_user->user_id);
            } catch (\Exception $e) {
            }

            //to expert
            NotificationUtility::set_notification(
                "project_completed_by_client",
                translate('A Project has been marked as completed by'),
                route('project.details', ['slug' => $project->slug], false),
                $project->project_user->user_id,
                Auth::user()->id,
                'expert'
            );
            EmailUtility::send_email(
                translate('A Project has been marked as completed'),
                translate('A Project has been marked as completed by') . Auth::user()->name,
                get_email_by_user_id($project->project_user->user_id),
                route('project.details', ['slug' => $project->slug])
            );
        } else {
            flash(translate('Please complete the payments to end this project'))->warning();
        }

        return back();
    }

    public function checkForClientProjectBadge($userId)
    {
        $badges = Badge::where('type', 'project_badge')->where('role_id', 'client')->orderBy('value', 'desc')->get();
        foreach ($badges as $key => $badge) {
            if (Project::where('client_user_id', $userId)->where('closed', 1)->count() >= $badge->value) {
                $userBadge = UserBadge::where('user_id', $userId)->where('type', 'project_badge')->first();
                if ($userBadge == null) {
                    $userBadge = new UserBadge;
                }
                $userBadge->user_id = $userId;
                $userBadge->type = 'project_badge';
                $userBadge->badge_id = $badge->id;
                $userBadge->save();

                break;
            }
        }
    }

    public function checkForExpertProjectBadge($userId)
    {
        $badges = Badge::where('type', 'project_badge')->where('role_id', 'expert')->orderBy('value', 'desc')->get();
        $total = 0;
        foreach (ProjectUser::where('user_id', $userId)->get() as $key => $projectUser) {
            if ($projectUser->project != null) {
                if ($projectUser->project->closed) {
                    $total++;
                }
            }
        }
        foreach ($badges as $key => $badge) {
            if ($total >= $badge->value) {
                $userBadge = UserBadge::where('user_id', $userId)->where('type', 'project_badge')->first();
                if ($userBadge == null) {
                    $userBadge = new UserBadge;
                }
                $userBadge->user_id = $userId;
                $userBadge->type = 'project_badge';
                $userBadge->badge_id = $badge->id;
                $userBadge->save();

                break;
            }
        }
    }
    public function findProject(){
        return view('frontend.project.projects-listing');
    }
}
