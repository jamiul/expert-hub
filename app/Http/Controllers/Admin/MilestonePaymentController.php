<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Frontend\Controller;
use App\Http\Controllers\Frontend\EscrowPaymentController;
use App\Http\Controllers\Frontend\StripePaymentController;
use App\Http\Controllers\PayPalController;
use App\Models\Badge;
use App\Models\MilestonePayment;
use App\Models\Package;
use App\Models\ProjectUser;
use App\Models\UserBadge;
use App\Models\UserProfile;
use App\Utility\EmailUtility;
use App\Utility\NotificationUtility;
use Auth;
use DB;
use Illuminate\Http\Request;
use Session;

class MilestonePaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:show project payments'])->only('admin_index');
    }

    // online Payment history
    public function adminIndex(Request $request)
    {
        $sortSearch = null;

        $milestonePayments = DB::table('milestone_payments')
            ->join('projects', 'projects.id', '=', 'milestone_payments.project_id');

        if ($request->search != null) {
            $sortSearch = $request->search;
            $milestonePayments->where('projects.name', 'like', "%$sortSearch%");
        }

        $milestonePayments = $milestonePayments->whereNull('milestone_payments.deleted_at')->orderBy('milestone_payments.created_at', 'desc')->select('milestone_payments.id')->paginate(20);

        return view('admin.payment_history.index', compact('milestonePayments', 'sortSearch'));
    }

    // Offline payment history
    public function offlineProjectPaymentsHistory(Request $request)
    {
        $sortSearch = null;

        $milestonePayments = DB::table('milestone_payments')
            ->join('projects', 'projects.id', '=', 'milestone_payments.project_id');

        if ($request->search != null) {
            $sortSearch = $request->search;
            $milestonePayments->where('projects.name', 'like', "%$sortSearch%");
        }

        $milestonePayments = $milestonePayments->orderBy('milestone_payments.created_at', 'desc')->where('milestone_payments.offline_payment', 1)->select('milestone_payments.id')->paginate(20);

        return view('manual_payment.project_payments', compact('milestone_payments', 'sort_search'));
    }

    // Online Payment
    public function index(Request $request)
    {
        // dd($request->all());
        $data['amount'] = $request->amount;
        $data['payment_method'] = $request->payment_option;
        $data['milestone_request_id'] = $request->milestone_request_id;
        $data['user_name'] = Auth::user()->name;
        $data['payment_type'] = 'milestone_payment';
        $request->session()->put('payment_data', $data);

        if ($request->payment_option == 'paypal') {
            $paypal = new PayPalController;
            return $paypal->getCheckout();
        } elseif ($request->payment_option == 'stripe') {
            $stripe = new StripePaymentController;
            return $stripe->index();
        } elseif ($request->payment_option == 'escrow') {
            $escrow = new EscrowPaymentController;
            return $escrow->index();
        } elseif ($request->payment_option == 'sslcommerz') {
            $sslcommerz = new PublicSslCommerzPaymentController;
            return $sslcommerz->index($request);
        } elseif ($request->payment_option == 'paystack') {
            $paystack = new PaystackController;
            return $paystack->redirectToGateway($request);
        } elseif ($request->payment_option == 'instamojo') {
            $instamojo = new InstamojoController;
            return $instamojo->pay($request);
        } elseif ($request->payment_option == 'paytm') {
            $paytm = new PaytmController;
            return $paytm->index();
        } elseif ($request->payment_option == 'flutterwave') {
            $flutterwave = new FlutterwaveController;
            return $flutterwave->initialize();
        } elseif ($request->payment_option == 'wallet') {
            $userProfile = Auth::user()->profile;
            if ($userProfile->balance >= $request->amount) {
                $userProfile->balance -= $request->amount;
                $userProfile->save();
                return $this->milestone_payment_done(Session::get('payment_data'), null);
            } else {
                flash(translate('You do not have enough wallet balance.'))->error();
                return back();
            }
        }
    }

    public function milestonePaymentDone($paymentData, $payment)
    {
        $milestoneReq = MilestonePayment::findOrFail($paymentData['milestone_request_id']);
        $project = ProjectUser::where('project_id', $milestoneReq->project_id)->where('user_id', $milestoneReq->expert_user_id)->first();
        $userProfile = UserProfile::where('user_id', $milestoneReq->expert_user_id)->first();
        $package = Package::findOrFail($userProfile->user->userPackage->package_id);
        if ($milestoneReq != null) {
            $milestoneReq->payment_details = $payment;
            $milestoneReq->payment_method = $paymentData['payment_method'];
            if ($package->commission_type == 'percent') {
                $milestoneReq->admin_profit = ($paymentData['amount'] * $package->commission) / 100;
            } else {
                $milestoneReq->admin_profit = $package->commission;
            }
            $milestoneReq->expert_profit = $paymentData['amount'] - $milestoneReq->admin_profit;
            $milestoneReq->paid_status = 1;
            $milestoneReq->save();

            $userProfile->balance += $milestoneReq->expert_profit;
            $userProfile->save();

            try {
                $this->check_for_earning_badge($milestoneReq->expert_user_id);
                $this->check_for_spent_badge($milestoneReq->client_user_id);
            } catch (\Exception $e) {
            }
            //from admin to expert
            NotificationUtility::set_notification(
                "milestone_payments_done_to_expert",
                translate('Your milestone payment request has been accepted by'),
                route('sent-milestone-requests.all', [], false),
                $milestoneReq->expert_user_id,
                Auth::user()->id,
                'expert'
            );
            EmailUtility::send_email(
                translate('Your milestone payment request has been accepted'),
                translate('Your milestone payment request has been accepted by ') . Auth::user()->name,
                get_email_by_user_id($milestoneReq->expert_user_id)
            );

            //from client to admin
            NotificationUtility::set_notification(
                "milestone_payments_done_to_admin",
                translate('A milestone payment request has been accepted by'),
                route('payment_history_for_admin', [], false),
                0,
                Auth::user()->id,
                'admin'
            );
            EmailUtility::send_email(
                translate('A milestone payment request has been accepted'),
                translate('A milestone payment request has been accepted by ') . Auth::user()->name,
                system_email()
            );

            Session::forget('payment_data');
            flash(translate('Payment has been done successfully'))->success();
            return redirect()->route('dashboard');
        }
    }

    public function checkForEarningBadge($userId)
    {
        $badges = Badge::where('type', 'earning_badge')->where('role_id', 'expert')->orderBy('value', 'desc')->get();
        foreach ($badges as $key => $badge) {
            if (MilestonePayment::where('expert_user_id', $userId)->where('paid_status', 1)->sum('expert_profit') >= $badge->value) {
                $userBadge = UserBadge::where('user_id', $userId)->where('type', 'earning_badge')->first();
                if ($userBadge == null) {
                    $userBadge = new UserBadge;
                }
                $userBadge->user_id = $userId;
                $userBadge->type = 'earning_badge';
                $userBadge->badge_id = $badge->id;
                $userBadge->save();

                break;
            }
        }
    }

    public function checkForSpentBadge($userId)
    {
        $badges = Badge::where('type', 'spent_badge')->where('role_id', 'client')->orderBy('value', 'desc')->get();
        foreach ($badges as $key => $badge) {
            if (MilestonePayment::where('client_user_id', $userId)->where('paid_status', 1)->sum('amount') >= $badge->value) {
                $userBadge = UserBadge::where('user_id', $userId)->where('type', 'spent_badge')->first();
                if ($userBadge == null) {
                    $userBadge = new UserBadge;
                }
                $userBadge->user_id = $userId;
                $userBadge->type = 'earning_badge';
                $userBadge->badge_id = $badge->id;
                $userBadge->save();

                break;
            }
        }
    }

    // Offline Payment
    public function offlineMilestonePaymentToAdmin(Request $request)
    {
        $milestoneReq = MilestonePayment::findOrFail($request->milestone_payment_id);
        $milestoneReq->payment_method = $request->payment_option;
        $milestoneReq->payment_details = $request->trx_id;
        $milestoneReq->offline_payment = 1;
        $milestoneReq->receipt = $request->photo;
        $milestoneReq->approval = 0;

        $project = ProjectUser::where('project_id', $milestoneReq->project_id)->where('user_id', $milestoneReq->expert_user_id)->first();
        $userProfile = UserProfile::where('user_id', $milestoneReq->expert_user_id)->first();
        $package = Package::findOrFail($userProfile->user->userPackage->package_id);

        if ($package->commission_type == 'percent') {
            $milestoneReq->admin_profit = ($milestoneReq->amount * $package->commission) / 100;
        } else {
            $milestoneReq->admin_profit = $package->commission;
        }
        $milestoneReq->expert_profit = $milestoneReq->amount - $milestoneReq->admin_profit;
        if ($milestoneReq->save()) {
            flash(translate('Offline payment has been done. Please wait for admin approval.'))->success();
            return redirect()->route('milestone-requests.all');
        } else {
            flash(translate('Something went wrong'))->error();
            return back();
        }
    }

    public function approveOfflineProjectPayment($id)
    {
        $milestoneReq = MilestonePayment::findOrFail($id);
        $project = ProjectUser::where('project_id', $milestoneReq->project_id)->where('user_id', $milestoneReq->expert_user_id)->first();
        $userProfile = UserProfile::where('user_id', $milestoneReq->expert_user_id)->first();
        $package = Package::findOrFail($userProfile->user->userPackage->package_id);

        $milestoneReq->approval = 1;
        $milestoneReq->paid_status = 1;
        $milestoneReq->save();

        $userProfile->balance += $milestoneReq->expert_profit;
        $userProfile->save();

        try {
            $this->check_for_earning_badge($milestoneReq->expert_user_id);
            $this->check_for_spent_badge($milestoneReq->client_user_id);
        } catch (\Exception $e) {
        }
        //from admin to expert
        NotificationUtility::set_notification(
            "milestone_payments_done_to_expert",
            translate('Your milestone payment request has been accepted by'),
            route('sent-milestone-requests.all', [], false),
            $milestoneReq->expert_user_id,
            $milestoneReq->client_user_id,
            'expert'
        );
        EmailUtility::send_email(
            translate('Your milestone payment request has been accepted'),
            translate('Your milestone payment request has been accepted by ') . Auth::user()->name,
            get_email_by_user_id($milestoneReq->expert_user_id)
        );

        flash(translate('Offline payment approved successfully.'))->success();
        return redirect()->route('offline_project_payments_history');
    }

    public function requestModal(Request $request)
    {
        $projectId = $request->project_id;
        $clientId = $request->client_id;

        return view('frontend.partials.milestone_payment_request_modal', compact('projectId', 'clientId'));
    }

    public function recievedMilestoneRequestIndex()
    {
        $milestones = MilestonePayment::where('client_user_id', Auth::user()->id)->orderBy('created_at', 'desc')->paginate(12);
        return view('frontend.user.client.milestone_payments.index', compact('milestones'));
    }

    public function sentMilestoneRequestIndex()
    {
        $milestones = MilestonePayment::where('expert_user_id', Auth::user()->id)->orderBy('created_at', 'desc')->paginate(12);
        return view('frontend.user.expert.milestone_payments.index', compact('milestones'));
    }

    public function recievedMilestonePaymentIndex()
    {
        $milestones = MilestonePayment::where('expert_user_id', Auth::user()->id)->where('paid_status', 1)->orderBy('created_at', 'desc')->paginate(12);
        return view('frontend.user.expert.earnings.history', compact('milestones'));
    }

    public function requestStore(Request $request)
    {
        $milestone = new MilestonePayment;
        $milestone->client_user_id = $request->client_id;
        $milestone->project_id = $request->project_id;
        $milestone->expert_user_id = Auth::user()->id;
        $milestone->amount = $request->amount;
        $milestone->message = $request->message;
        if ($milestone->save()) {
            //from expert to client
            NotificationUtility::set_notification(
                "milestone_payment_request_to_client",
                translate('A milestone payment has been requested by'),
                route('milestone-requests.all', [], false),
                $request->client_id,
                Auth::user()->id,
                'client'
            );
            EmailUtility::send_email(
                translate('A milestone payment has been requested'),
                translate('A milestone payment has been requested by ') . Auth::user()->name,
                get_email_by_user_id($request->client_id),
                route('milestone-requests.all')
            );

            //from expert to admin
            NotificationUtility::set_notification(
                "milestone_payment_request_to_admin",
                translate('A milestone payment has been requested by'),
                route('payment_history_for_admin', [], false),
                0,
                Auth::user()->id,
                'admin'
            );
            EmailUtility::send_email(
                translate('A milestone payment has been requested'),
                translate('A milestone payment has been requested by ') . Auth::user()->name,
                system_email(),
                route('payment_history_for_admin')
            );

            flash(translate('Milestone request has been sent successfully'))->success();
            return redirect()->back();
        } else {
            flash(translate('Milestone request has been failed'))->error();
            return redirect()->back();
        }
    }

    public function milestoneRequestDetails($id)
    {
        $milestonePayment = MilestonePayment::findOrFail(decrypt($id));

        return view('admin.milestone_payments.show', compact('milestonePayment'));
    }

    public function milestoneRequestMessage(Request $request)
    {
        $milestone = MilestonePayment::findOrFail($request->id);
        $role = auth()->user()->user_type;

        if ($role == 'client') {
            $milestone->client_seen = 1;
            $milestone->save();
        }

        return view('frontend.partials.milestone_request_message_show_modal', compact('milestone'));
    }

    public function showPaymentSelectModal(Request $request)
    {
        $milestone = MilestonePayment::findOrFail($request->id);

        return view('frontend.partials.milestone_pay_payment_select', compact('milestone'));
    }
}
