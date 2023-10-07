<?php

namespace App\Http\Controllers\Frontend;

use App\Models\CancelProject;
use App\Models\MilestonePayment;
use App\Models\Project;
use App\Models\Wallet;
use App\Utility\EmailUtility;
use App\Utility\NotificationUtility;
use Auth;
use Illuminate\Http\Request;
use function App\Http\Controllers\system_email;

class CancelProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:show project cancel requests'])->only('index');
    }

    //Admin can see Cancel Requests List
    public function index(Request $request)
    {
        $clientId = null;
        if ($request->search != null || $request->type != null) {
            if ($request->has('user_id') && $request->user_id != null) {
                $products = CancelProject::where('requested_user_id', $request->user_id);
                $clientId = $request->user_id;
            }
            $cancelProjects = CancelProject::orderBy('created_at', 'desc')->paginate(10);
        } else {
            $cancelProjects = CancelProject::orderBy('created_at', 'desc')->paginate(10);
        }

        return view('admin.project.project_cancel_request.request_lists', compact('cancelProjects', 'clientId'));
    }

    //Send Cancel Request by user
    public function store(Request $request)
    {
        $cancelProject = new CancelProject;
        $cancelProject->requested_user_id = Auth::user()->id;
        $cancelProject->project_id = $request->project_id;
        $cancelProject->reason = $request->reason;
        $cancelProject->viewed = 0;

        if ($cancelProject->save()) {
            //to admin
            NotificationUtility::set_notification(
                "project_cancel_request_by_client",
                translate('A Project cancellation is requested by'),
                route('cancel-project-request.index', [], false),
                0,
                Auth::user()->id,
                'admin'
            );
            EmailUtility::send_email(
                "A Project cancellation is  requested",
                translate('A Project cancellation is requested by') . Auth::user()->name,
                system_email(),
                route('cancel-project-request.index')
            );

            flash(translate('Request has been created successfully'))->success();
            return redirect()->route('dashboard');
        } else {
            flash(translate('Sorry! Something went wrong.'))->error();
            return back();
        }
    }

    public function show(Request $request)
    {
        $cancelProject = CancelProject::findOrFail($request->id);
        $cancelProject->viewed = 1;
        $cancelProject->save();

        return view('admin.project.project_cancel_request.request_details_modal', compact('cancelProject'));
    }

    //Cancel Request accepted by admin
    public function requestAccepted(Request $request)
    {
        $project = Project::findOrFail($request->project_id);
        $project->cancel_status = 1;
        $project->cancel_by_user_id = $request->cancel_by_user_id;
        if ($project->save()) {
            $milestonePayments = MilestonePayment::where('project_id', $project->id)->where('paid_status', 1)->get();
            $totalAmount = 0;
            $expertProfit = 0;
            foreach ($milestonePayments as $key => $milestonePayment) {
                $totalAmount += $milestonePayment->amount;
                $expertProfit += $milestonePayment->expert_profit;
            }
            if ($milestonePayments != null && $totalAmount > 0) {
                $deductExpertAmount = ($expertProfit * $request->refund_percentage) / 100;
                $refundToClientAmount = ($totalAmount * $request->refund_percentage) / 100;

                $expertProfile = $project->project_user->user->profile;
                $expertProfile->balance = $expertProfile->balance - $deductExpertAmount;
                $expertProfile->save();

                $clientProfile = $project->client->profile;
                $clientProfile->balance = $clientProfile->balance + $refundToClientAmount;
                $clientProfile->save();

                $cancelProject = CancelProject::where('id', $request->cancel_project_id)->first();
                $cancelProject->refund_percentage = $request->refund_percentage;
                $cancelProject->save();

                $wallet = new Wallet;
                $wallet->user_id = $project->client_user_id;
                $wallet->amount = $refundToClientAmount;
                $wallet->payment_method = "";
                $wallet->payment_details = "";
                $wallet->type = "Project Cancellation Refund";
                $wallet->save();
            }


            //admin to expert
            NotificationUtility::setNotification(
                "project_cancel_request_approved_by_admin",
                translate('A Project cancellation is approved by'),
                route('projects.my_cancelled_project', [], false),
                $project->project_user->user_id,
                Auth::user()->id,
                'expert'
            );
            EmailUtility::sendEmail(
                translate('A Project cancellation is approved'),
                translate('A Project cancellation is approved by') . Auth::user()->name,
                getEmailByUserId($project->project_user->user_id),
                route('projects.my_cancelled_project')
            );

            //admin to client
            NotificationUtility::setNotification(
                "project_cancel_request_approved_by_admin",
                translate('A Project cancellation is approved by'),
                route('projects.my_cancelled_project', [], false),
                $project->client_user_id,
                Auth::user()->id,
                'client'
            );

            EmailUtility::sendEmail(
                translate('A Project cancellation is approved'),
                translate('A Project cancellation is approved by') . Auth::user()->name,
                getEmailByUserId($project->client_user_id),
                route('projects.my_cancelled_project')
            );

            flash(translate('Request has been accepted successfully'))->success();

            return redirect()->route('cancel-project-request.index');
        } else {
            flash(translate('Sorry! Something went wrong.'))->error();

            return back();
        }
    }

    public function destroy($id)
    {
        CancelProject::destroy($id);
        flash(translate('Project Cancel Request has been deleted successfully'))->success();

        return redirect()->route('cancel-project-request.index');
    }
}
