<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Frontend\Controller;
use App\Models\ChatThread;
use App\Models\ServicePackage;
use App\Models\ServicePackagePayment;
use App\Models\UserProfile;
use Auth;
use Illuminate\Http\Request;
use Session;

class ServicePaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:show service payments'])->only('admin_index');
    }

    // Online Service payment history
    public function adminIndex()
    {
        $servicePayments = ServicePackagePayment::orderBy('id', 'desc')->paginate(12);

        return view('admin.service_payment_history.index', compact('servicePayments'));
    }

    // Offline Service Payment history
    public function offlineServicePaymentsHistory(Request $request)
    {
        $minDate = null;
        $maxDate = null;
        $sortSearch = null;

        $servicePayments = ServicePackagePayment::orderBy('created_at', 'desc')->where('offline_payment', 1);
        if ($request->date != null) {
            $sortSearch = $request->date;
            $var = explode(" / ", $request->date);
            $minDate = $var[0];
            $maxDate = $var[1];
            $servicePayments = $servicePayments->whereBetween('created_at', [$minDate, $maxDate])->paginate(12);
        } else {
            $servicePayments = $servicePayments->paginate(12);
        }

        return view('manual_payment.service_payments', compact('servicePayments', 'sortSearch'));
    }

    public function servicePackagePaymentDone($paymentData, $payment)
    {
        $servicePackagePayment = new ServicePackagePayment;
        $servicePackage = ServicePackage::findOrFail($paymentData['service_package_id']);
        $userProfile = UserProfile::where('user_id', $servicePackage->service->user->id)->first();

        $servicePackagePayment->service_package_id = $servicePackage->id;
        $servicePackagePayment->service_package_type = $servicePackage->service_type;
        $servicePackagePayment->user_id = Auth::user()->id;
        $servicePackagePayment->amount = $paymentData["amount"];
        $servicePackagePayment->payment_method = $paymentData["payment_method"];
        $servicePackagePayment->service_owner_id = $servicePackage->service->user->id;

        $package = $servicePackage->service->user->userPackage->package;

        if ($package->commission_type == 'percent') {
            $servicePackagePayment->admin_profit = ($paymentData['amount'] * $package->commission) / 100;
        } else {
            $servicePackagePayment->admin_profit = $package->commission;
        }

        $servicePackagePayment->expert_profit = $paymentData['amount'] - $servicePackagePayment->admin_profit;
        $userProfile->balance += $servicePackagePayment->expert_profit;

        $servicePackagePayment->payment_details = json_encode($payment);

        if ($servicePackagePayment->save()) {
            if ($userProfile->save()) {
                $existingChatThread = ChatThread::where('sender_user_id', Auth::user()->id)->where('receiver_user_id', $servicePackage->service->user->id)->first();
                if ($existingChatThread == null) {
                    $existingChatThread = new ChatThread;
                    $existingChatThread->thread_code = $servicePackage->service->user->id . date('Ymd') . Auth::user()->id;
                    $existingChatThread->sender_user_id = Auth::user()->id;
                    $existingChatThread->receiver_user_id = $servicePackage->service->user->id;
                    $existingChatThread->save();
                }
            }

            flash(translate('Payment has been done successfully'))->success();
        } else {
            flash(translate('The payment was done without saving the info.'))->error();
        }

        Session::forget('payment_data');

        return redirect()->route('dashboard');
    }

    public function purchaseServicePackageOffline(Request $request)
    {
        $servicePackage = ServicePackage::findOrFail($request->service_package_id);
        $package = $servicePackage->service->user->userPackage->package;

        $servicePackagePayment = new ServicePackagePayment;
        $servicePackagePayment->service_package_id = $servicePackage->id;
        $servicePackagePayment->service_package_type = $servicePackage->service_type;
        $servicePackagePayment->user_id = Auth::user()->id;
        $servicePackagePayment->service_owner_id = $servicePackage->service->user->id;
        $servicePackagePayment->amount = $servicePackage->service_price;
        $servicePackagePayment->payment_type = 'service_payment';
        $servicePackagePayment->payment_method = $request->payment_option;
        if ($package->commission_type == 'percent') {
            $servicePackagePayment->admin_profit = ($servicePackage->service_price * $package->commission) / 100;
        } else {
            $servicePackagePayment->admin_profit = $package->commission;
        }
        $servicePackagePayment->expert_profit = $servicePackage->service_price - $servicePackagePayment->admin_profit;
        $servicePackagePayment->payment_details = $request->trx_id;
        $servicePackagePayment->offline_payment = 1;
        $servicePackagePayment->receipt = $request->photo;
        $servicePackagePayment->approval = 0;

        $servicePackagePayment->save();
        flash(translate('Offline Payment has been done successfully'))->success();

        return redirect()->route('client.purchased.services');
    }

    public function approveOfflineServicePayment($id)
    {
        $servicePackagePayment = ServicePackagePayment::findOrFail($id);
        $servicePackagePayment->approval = 1;

        if ($servicePackagePayment->save()) {
            $servicePackage = ServicePackage::findOrFail($servicePackagePayment->service_package_id);
            $userProfile = UserProfile::where('user_id', $servicePackage->service->user->id)->first();

            $userProfile->balance += $servicePackagePayment->expert_profit;
            if ($userProfile->save()) {
                $existingChatThread = ChatThread::where('sender_user_id', $servicePackagePayment->user_id)->where('receiver_user_id', $servicePackage->service->user->id)->first();
                if ($existingChatThread == null) {
                    $existingChatThread = new ChatThread;
                    $existingChatThread->thread_code = $servicePackage->service->user->id . date('Ymd') . $servicePackagePayment->user_id;
                    $existingChatThread->sender_user_id = $servicePackagePayment->user_id;
                    $existingChatThread->receiver_user_id = $servicePackage->service->user->id;
                    $existingChatThread->save();
                }
            }
            flash(translate('Offline payment approved successfully.'))->success();
            return redirect()->route('offline_service_payments_history');
        }
    }
}
