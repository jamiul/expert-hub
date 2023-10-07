<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Frontend\Controller;
use App\Models\ChatThread;
use App\Models\HireInvitation;
use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\ProjectUser;
use App\Models\User;
use App\Utility\EmailUtility;
use App\Utility\NotificationUtility;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HireController extends Controller
{
    //private project expert
    public function privateProjects()
    {
        $privateProjects = HireInvitation::where('sent_to_user_id', Auth::user()->id)->where('status', '=', 'pending')->paginate(8);

        return view('frontend.user.expert.projects.private', compact('privateProjects'));
    }

    //expert invition sending page
    public function expertInvitation($username)
    {
        $expert = User::where('user_name', $username)->first();
        $categories = ProjectCategory::all();
        $clientPackage = Auth::user()->userPackage;

        return view('frontend.user.expert_hire_invitation.create', compact('expert', 'categories', 'clientPackage'));
    }

    //Store sent info for hiring experts
    public function store(Request $request)
    {
        $project = new Project;
        $project->name = $request->name;
        $project->type = $request->projectType;
        $project->price = $request->price;
        $project->project_category_id = $request->category_id;
        $project->excerpt = $request->excerpt;
        $project->skills = '[]';
        $project->private = '1';
        $project->biddable = '0';
        $project->description = $request->description;
        if ($request->attachments != null) {
            $project->attachment = json_encode(explode(",", $request->attachment));
        }
        $project->client_user_id = Auth::user()->id;
        $project->slug = Str::slug($request->name, '-') . date('Ymd-his');
        if ($project->save()) {
            $hireInvitation = new HireInvitation;
            $hireInvitation->project_id = $project->id;
            $hireInvitation->sent_to_user_id = $request->expert_id;
            $hireInvitation->sent_by_user_id = Auth::user()->id;
            $hireInvitation->save();
            $existingChatThread = ChatThread::where('sender_user_id', Auth::user()->id)->where('receiver_user_id', $request->expert_id)->first();
            if ($existingChatThread == null) {
                $existingChatThread = new ChatThread;
                $existingChatThread->thread_code = $request->expert_id . date('Ymd') . Auth::user()->id;
                $existingChatThread->sender_user_id = Auth::user()->id;
                $existingChatThread->receiver_user_id = $request->expert_id;
                $existingChatThread->save();
            }

            //from client to expert
            NotificationUtility::set_notification(
                "expert_proposal_for_project",
                translate('You have recieved a proposal for a project by'),
                route('project.details', ['slug' => $project->slug], false),
                $request->expert_id,
                Auth::user()->id,
                'expert'
            );
            EmailUtility::send_email(
                translate('You got a new project proposal for project -') . $project->name,
                translate('You have recieved a proposal for a project by') . $project->client->name,
                get_email_by_user_id($request->expert_id),
                route('project.details', ['slug' => $project->slug])
            );

            flash(translate('Invitation has been sent successfully.'))->success();
            return redirect()->route('dashboard');
        } else {
            flash(translate('Sorry! Something went wrong.'))->error();
            return back();
        }
    }

    //after taking interview client hires expert
    public function hire(Request $request)
    {
        $project = Project::find($request->project_id);
        $project->biddable = 0;
        $project->save();

        if ($project->project_user == null) {
            $projectUser = new ProjectUser;
            $projectUser->project_id = $request->project_id;
            $projectUser->user_id = $request->user_id;
            $projectUser->hired_at = $request->amount;
            $projectUser->save();
        }

        $invitedProject = HireInvitation::where('project_id', $project->id)->first();
        if ($invitedProject != null) {
            $invitedProject->status = 'accepted';
            $invitedProject->save();
        }

        //from expert to client
        NotificationUtility::set_notification(
            "expert_hired_for_project",
            translate('You have been hired for a project by'),
            route('project.details', ['slug' => $project->slug], false),
            $request->user_id,
            Auth::user()->id,
            'expert'
        );
        EmailUtility::send_email(
            translate('You have been hired for project -') . $project->name,
            translate('You have been hired for a project by ') . $project->client->name,
            get_email_by_user_id($request->user_id),
            route('project.details', ['slug' => $project->slug])
        );

        flash(translate('You have hired successfully.'))->success();

        return back();
    }

    //rejecting a private project offer
    public function reject(Request $request)
    {
        $invitedProject = HireInvitation::findOrFail(decrypt($request->id));
        $invitedProject->status = 'rejected';
        $invitedProject->save();

        $project = $invitedProject->project;
        $project->cancel_status = 1;
        $project->cancel_by_user_id = Auth::user()->id;
        $project->save();

        flash(translate('You have rejected the private project offer'))->success();
        return back();
    }
}
