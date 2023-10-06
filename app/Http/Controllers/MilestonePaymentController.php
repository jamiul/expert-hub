<?php

namespace App\Http\Controllers;

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
        $sort_search = null;

        $milestone_payments = DB::table('milestone_payments')
            ->join('projects', 'projects.id', '=', 'milestone_payments.project_id');

        if ($request->search != null) {
            $sort_search = $request->search;
            $milestone_payments->where('projects.name', 'like', "%$sort_search%");
        }

        $milestone_payments = $milestone_payments->whereNull('milestone_payments.deleted_at')->orderBy('milestone_payments.created_at', 'desc')->select('milestone_payments.id')->paginate(20);

        return view('admin.default.payment_history.index', compact('milestone_payments', 'sort_search'));
    }

    // Offline payment history
    public function offlineProjectPaymentsHistory(Request $request)
    {
        $sort_search = null;

        $milestone_payments = DB::table('milestone_payments')
            ->join('projects', 'projects.id', '=', 'milestone_payments.project_id');

        if ($request->search != null) {
            $sort_search = $request->search;
            $milestone_payments->where('projects.name', 'like', "%$sort_search%");
        }

        $milestone_payments = $milestone_payments->orderBy('milestone_payments.created_at', 'desc')->where('milestone_payments.offline_payment', 1)->select('milestone_payments.id')->paginate(20);

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
            $user_profile = Auth::user()->profile;
            if ($user_profile->balance >= $request->amount) {
                $user_profile->balance -= $request->amount;
                $user_profile->save();
                return $this->milestone_payment_done(Session::get('payment_data'), null);
            } else {
                flash(translate('You do not have enough wallet balance.'))->error();
                return back();
            }
        }
    }

    public function milestone_payment_done($payment_data, $payment)
    {
        $milestone_req = MilestonePayment::findOrFail($payment_data['milestone_request_id']);
        $project = ProjectUser::where('project_id', $milestone_req->project_id)->where('user_id', $milestone_req->freelancer_user_id)->first();
        $userProfile = UserProfile::where('user_id', $milestone_req->freelancer_user_id)->first();
        $package = Package::findOrFail($userProfile->user->userPackage->package_id);
        if ($milestone_req != null) {
            $milestone_req->payment_details = $payment;
            $milestone_req->payment_method = $payment_data['payment_method'];
            if ($package->commission_type == 'percent') {
                $milestone_req->admin_profit = ($payment_data['amount'] * $package->commission) / 100;
            } else {
                $milestone_req->admin_profit = $package->commission;
            }
            $milestone_req->freelancer_profit = $payment_data['amount'] - $milestone_req->admin_profit;
            $milestone_req->paid_status = 1;
            $milestone_req->save();

            $userProfile->balance += $milestone_req->freelancer_profit;
            $userProfile->save();

            try {
                $this->check_for_earning_badge($milestone_req->freelancer_user_id);
                $this->check_for_spent_badge($milestone_req->client_user_id);
            } catch (\Exception $e) {
            }
            //from admin to freelancer
            NotificationUtility::set_notification(
                "milestone_payments_done_to_freelancer",
                translate('Your milestone payment request has been accepted by'),
                route('sent-milestone-requests.all', [], false),
                $milestone_req->freelancer_user_id,
                Auth::user()->id,
                'freelancer'
            );
            EmailUtility::send_email(
                translate('Your milestone payment request has been accepted'),
                translate('Your milestone payment request has been accepted by ') . Auth::user()->name,
                get_email_by_user_id($milestone_req->freelancer_user_id)
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

    public function check_for_earning_badge($user_id)
    {
        $badges = Badge::where('type', 'earning_badge')->where('role_id', 'freelancer')->orderBy('value', 'desc')->get();
        foreach ($badges as $key => $badge) {
            if (MilestonePayment::where('freelancer_user_id', $user_id)->where('paid_status', 1)->sum('freelancer_profit') >= $badge->value) {
                $user_badge = UserBadge::where('user_id', $user_id)->where('type', 'earning_badge')->first();
                if ($user_badge == null) {
                    $user_badge = new UserBadge;
                }
                $user_badge->user_id = $user_id;
                $user_badge->type = 'earning_badge';
                $user_badge->badge_id = $badge->id;
                $user_badge->save();

                break;
            }
        }
    }

    public function check_for_spent_badge($user_id)
    {
        $badges = Badge::where('type', 'spent_badge')->where('role_id', 'client')->orderBy('value', 'desc')->get();
        foreach ($badges as $key => $badge) {
            if (MilestonePayment::where('client_user_id', $user_id)->where('paid_status', 1)->sum('amount') >= $badge->value) {
                $user_badge = UserBadge::where('user_id', $user_id)->where('type', 'spent_badge')->first();
                if ($user_badge == null) {
                    $user_badge = new UserBadge;
                }
                $user_badge->user_id = $user_id;
                $user_badge->type = 'earning_badge';
                $user_badge->badge_id = $badge->id;
                $user_badge->save();

                break;
            }
        }
    }

    // Offline Payment
    public function offlineMilestonePaymentToAdmin(Request $request)
    {
        $milestone_req = MilestonePayment::findOrFail($request->milestone_payment_id);
        $milestone_req->payment_method = $request->payment_option;
        $milestone_req->payment_details = $request->trx_id;
        $milestone_req->offline_payment = 1;
        $milestone_req->receipt = $request->photo;
        $milestone_req->approval = 0;

        $project = ProjectUser::where('project_id', $milestone_req->project_id)->where('user_id', $milestone_req->freelancer_user_id)->first();
        $userProfile = UserProfile::where('user_id', $milestone_req->freelancer_user_id)->first();
        $package = Package::findOrFail($userProfile->user->userPackage->package_id);

        if ($package->commission_type == 'percent') {
            $milestone_req->admin_profit = ($milestone_req->amount * $package->commission) / 100;
        } else {
            $milestone_req->admin_profit = $package->commission;
        }
        $milestone_req->freelancer_profit = $milestone_req->amount - $milestone_req->admin_profit;
        if ($milestone_req->save()) {
            flash(translate('Offline payment has been done. Please wait for admin approval.'))->success();
            return redirect()->route('milestone-requests.all');
        } else {
            flash(translate('Something went wrong'))->error();
            return back();
        }
    }

    public function approveOfflineProjectPayment($id)
    {
        $milestone_req = MilestonePayment::findOrFail($id);
        $project = ProjectUser::where('project_id', $milestone_req->project_id)->where('user_id', $milestone_req->freelancer_user_id)->first();
        $userProfile = UserProfile::where('user_id', $milestone_req->freelancer_user_id)->first();
        $package = Package::findOrFail($userProfile->user->userPackage->package_id);

        $milestone_req->approval = 1;
        $milestone_req->paid_status = 1;
        $milestone_req->save();

        $userProfile->balance += $milestone_req->freelancer_profit;
        $userProfile->save();

        try {
            $this->check_for_earning_badge($milestone_req->freelancer_user_id);
            $this->check_for_spent_badge($milestone_req->client_user_id);
        } catch (\Exception $e) {
        }
        //from admin to freelancer
        NotificationUtility::set_notification(
            "milestone_payments_done_to_freelancer",
            translate('Your milestone payment request has been accepted by'),
            route('sent-milestone-requests.all', [], false),
            $milestone_req->freelancer_user_id,
            $milestone_req->client_user_id,
            'freelancer'
        );
        EmailUtility::send_email(
            translate('Your milestone payment request has been accepted'),
            translate('Your milestone payment request has been accepted by ') . Auth::user()->name,
            get_email_by_user_id($milestone_req->freelancer_user_id)
        );

        flash(translate('Offline payment approved successfully.'))->success();
        return redirect()->route('offline_project_payments_history');
    }

    public function requestModal(Request $request)
    {
        $project_id = $request->project_id;
        $client_id = $request->client_id;
        return view('frontend.default.partials.milestone_payment_request_modal', compact('project_id', 'client_id'));
    }

    public function recievedMilestoneRequestIndex()
    {
        $milestones = MilestonePayment::where('client_user_id', Auth::user()->id)->orderBy('created_at', 'desc')->paginate(12);
        return view('frontend.default.user.client.milestone_payments.index', compact('milestones'));
    }

    public function sentMilestoneRequestIndex()
    {
        $milestones = MilestonePayment::where('freelancer_user_id', Auth::user()->id)->orderBy('created_at', 'desc')->paginate(12);
        return view('frontend.default.user.freelancer.milestone_payments.index', compact('milestones'));
    }

    public function recievedMilestonePaymentIndex()
    {
        $milestones = MilestonePayment::where('freelancer_user_id', Auth::user()->id)->where('paid_status', 1)->orderBy('created_at', 'desc')->paginate(12);
        return view('frontend.default.user.freelancer.earnings.history', compact('milestones'));
    }

    public function requestStore(Request $request)
    {
        $milestone = new MilestonePayment;
        $milestone->client_user_id = $request->client_id;
        $milestone->project_id = $request->project_id;
        $milestone->freelancer_user_id = Auth::user()->id;
        $milestone->amount = $request->amount;
        $milestone->message = $request->message;
        if ($milestone->save()) {
            //from freelancer to client
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

            //from freelancer to admin
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
        $milestone_payment = MilestonePayment::findOrFail(decrypt($id));
        return view('admin.default.milestone_payments.show', compact('milestone_payment'));
    }

    public function milestoneRequestMessage(Request $request)
    {
        $milestone = MilestonePayment::findOrFail($request->id);
        $role = auth()->user()->user_type;
        if ($role == 'client') {
            $milestone->client_seen = 1;
            $milestone->save();
        }
        return view('frontend.default.partials.milestone_request_message_show_modal', compact('milestone'));
    }

    public function showPaymentSelectModal(Request $request)
    {
        $milestone = MilestonePayment::findOrFail($request->id);
        return view('frontend.default.partials.milestone_pay_payment_select', compact('milestone'));
    }
}
