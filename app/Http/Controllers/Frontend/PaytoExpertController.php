<?php

namespace App\Http\Controllers\Frontend;

use App\Models\ExpertAccount;
use App\Models\PayToExpert;
use App\Models\User;
use App\Models\UserProfile;
use App\Utility\EmailUtility;
use App\Utility\NotificationUtility;
use Auth;
use Illuminate\Http\Request;
use function App\Http\Controllers\get_email_by_user_id;

class PaytoExpertController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:show expert withdraw requests'])->only('withdraw_requests');
        $this->middleware(['permission:show expert payouts'])->only('index');
    }

    public function index(Request $request)
    {
        $sortSearch = null;
        $sortSearchByDate = null;
        $payToExperts = PayToExpert::orderBy('created_at', 'desc')->where('paid_status', 1);
        if ($request->search != null || $request->date != null) {
            if ($request->search != null) {
                $sortSearch = $request->search;
                $userIds = User::where(
                    function ($user) use ($sortSearch) {
                        $user->where('name', 'like', '%' . $sortSearch . '%')->orWhere('email', 'like', '%' . $sortSearch . '%');
                    }
                )->pluck('id')->toArray();
                $payToExperts = $payToExperts->where(
                    function ($expert) use ($userIds) {
                        $expert->whereIn('user_id', $userIds);
                    }
                );
                $payToExperts = $payToExperts->paginate(12);
            } elseif ($request->date != null) {
                $sortSearchByDate = $request->date;
                $var = explode(" / ", $request->date);
                $minDate = $var[0];
                $maxDate = $var[1];
                $payToExperts = $payToExperts->whereBetween('created_at', [$minDate, $maxDate])->paginate(12);
            }
        } else {
            $payToExperts = $payToExperts->paginate(12);
        }

        return view('admin.pay_to_expert.index', compact('payToExperts', 'sortSearch', 'sortSearchByDate'));
    }

    public function payToExpert($id)
    {
        $withdrawRequest = PayToExpert::find(decrypt($id));
        $user = $withdrawRequest->user;
        $userProfile = UserProfile::where('user_id', $user->id)->first();
        $userAccount = ExpertAccount::where('user_id', $user->id)->first();

        return view('admin.withdraw_request.pay', compact('user', 'userProfile', 'userAccount', 'withdrawRequest'));
    }

    public function pay(Request $request)
    {
        $payToExpert = PayToExpert::find($request->id);
        $payToExpert->paid_by = Auth::user()->id;
        $payToExpert->paid_amount = $request->amount;
        $payToExpert->payment_method = $request->type;
        $payToExpert->reciept = $request->reciept;
        $payToExpert->paid_status = 1;
        if ($payToExpert->save()) {
            $profile = UserProfile::where('user_id', $payToExpert->user_id)->first();
            $profile->balance = $profile->balance + $payToExpert->requested_amount - $request->amount;
            $profile->save();

            //from admin to expert
            NotificationUtility::set_notification(
                "expert_withdrawal_request_accepted_by_admin",
                translate('A new withdrawal request has been accepted by'),
                route('withdrawal_history_index', [], false),
                $payToExpert->user_id,
                Auth::user()->id,
                'expert'
            );
            EmailUtility::send_email(
                translate('A new withdrawal request has been accepted'),
                translate('A new withdrawal request has been accepted by') . Auth::user()->name,
                get_email_by_user_id($payToExpert->user_id),
                route('withdrawal_history_index')
            );

            flash(translate('Payment has been done successfully'))->success();
            return redirect()->route('withdraw_request.index');
        } else {
            flash(translate('Something went wrong'))->error();
            return back();
        }
    }

    public function cancelRequest($id)
    {
        $payToExpert = PayToExpert::find(decrypt($id));
        $payToExpert->delete();
        flash(translate('Payment has been cancelled'))->success();
        return redirect()->route('withdraw_request.index');
    }

    public function sendWithdrawalRequestIndex()
    {
        $profile = UserProfile::where('user_id', Auth::user()->id)->first();
        return view('frontend.user.expert.earnings.withdrawal-make', compact('profile'));
    }

    public function withdrawalHistoryIndex()
    {
        $withdrawRequests = PayToExpert::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->paginate(12);
        return view('frontend.user.expert.earnings.withdrawal-history', compact('withdrawRequests'));
    }

    public function withdrawRequests(Request $request)
    {
        $sortSearch = null;
        $colName = null;
        $query = null;
        $withdrawRequests = PayToExpert::where('paid_status', 0);
        if ($request->search != null || $request->type != null) {
            if ($request->has('search')) {
                $sortSearch = $request->search;
                $userIds = User::where(
                    function ($user) use ($sortSearch) {
                        $user->where('name', 'like', '%' . $sortSearch . '%')->orWhere('email', 'like', '%' . $sortSearch . '%');
                    }
                )->pluck('id')->toArray();
                $withdrawRequests = $withdrawRequests->where(
                    function ($withdrawRequest) use ($userIds) {
                        $withdrawRequest->whereIn('user_id', $userIds);
                    }
                );
            }
            if ($request->type != null) {
                $var = explode(",", $request->type);
                $colName = $var[0];
                $query = $var[1];
                $withdrawRequests = $withdrawRequests->orderBy($colName, $query);
            }

            $withdrawRequests = $withdrawRequests->paginate(10);
        } else {
            $withdrawRequests = $withdrawRequests->orderBy('created_at', 'desc')->paginate(10);
        }

        return view('admin.withdraw_request.index', compact('withdrawRequests', 'sortSearch', 'colName', 'query'));
    }

    public function sendWithdrawalRequestStore(Request $request)
    {
        if ($request->amount <= Auth::user()->profile->balance && $request->amount >= \App\Models\SystemConfiguration::where('type', 'min_withdraw_amount')->first()->value) {
            $payToExpert = new PayToExpert;
            $payToExpert->user_id = Auth::user()->id;
            $payToExpert->requested_amount = $request->amount;
            $payToExpert->payment_method = $request->payment_method;
            $payToExpert->descriptions = $request->descriptions;
            $payToExpert->save();

            $profile = UserProfile::where('user_id', $payToExpert->user_id)->first();
            $profile->balance -= $request->amount;
            $profile->save();

            //from expert to admin
            NotificationUtility::set_notification(
                "expert_withdrawal_request",
                translate('A new withdrawal has been requested by'),
                route('withdraw_request.index', [], false),
                0,
                Auth::user()->id,
                'admin'
            );

            EmailUtility::sendEmail(
                translate('A new withdrawal has been requested'),
                translate('A new withdrawal has been requested by') . Auth::user()->name,
                systemEmail(),
                route('withdraw_request.index')
            );

            flash(translate('Withdrawal request has been sent successfully'))->success();

            return redirect()->route('withdrawal_history_index');
        }

        flash(translate('You do not have enough balance'))->warning();

        return back();
    }
}
