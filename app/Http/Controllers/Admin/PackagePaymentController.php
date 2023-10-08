<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\FlutterwaveController;
use App\Http\Controllers\Frontend\Controller;
use App\Http\Controllers\Frontend\StripePaymentController;
use App\Http\Controllers\InstamojoController;
use App\Http\Controllers\PayPalController;
use App\Http\Controllers\PaystackController;
use App\Http\Controllers\PaytmController;
use App\Http\Controllers\PublicSslCommerzPaymentController;
use App\Http\Controllers\WalletPaymentController;
use App\Models\Package;
use App\Models\PackagePayment;
use App\Models\UserPackage;
use App\Utility\EmailUtility;
use App\Utility\NotificationUtility;
use Auth;
use Illuminate\Http\Request;
use Session;
use function App\Http\Controllers\system_email;

class PackagePaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:show package payments'])->only('admin_index');
    }

    //admin package payment history
    public function adminIndex(Request $request)
    {
        $minDate = null;
        $maxDate = null;
        $sortSearch = null;

        $packagePayments = PackagePayment::orderBy('created_at', 'desc');
        if ($request->date != null) {
            $sortSearch = $request->date;
            $var = explode(" / ", $request->date);
            $minDate = $var[0];
            $maxDate = $var[1];
            $packagePayments = $packagePayments->whereBetween('created_at', [$minDate, $maxDate])->paginate(12);
        } else {
            $packagePayments = $packagePayments->paginate(12);
        }

        return view('admin.package_payment.index', compact('packagePayments', 'sortSearch'));
    }

    //admin Offline package payment history
    public function manualPackagePaymentsHistory(Request $request)
    {
        $minDate = null;
        $maxDate = null;
        $sortSearch = null;

        $packagePayments = PackagePayment::orderBy('created_at', 'desc')->where('offline_payment', 1);
        if ($request->date != null) {
            $sortSearch = $request->date;
            $var = explode(" / ", $request->date);
            $minDate = $var[0];
            $maxDate = $var[1];
            $packagePayments = $packagePayments->whereBetween('created_at', [$minDate, $maxDate])->paginate(12);
        } else {
            $packagePayments = $packagePayments->paginate(12);
        }

        return view('manual_payment.package_payments', compact('packagePayments', 'sortSearch'));
    }

    // Online Package Purchase
    public function purchasePackage(Request $request)
    {
        $package = Package::findOrFail($request->package_id);
        $data['package_id'] = $package->id;
        $data['payment_method'] = $request->payment_option;
        $data['amount'] = $package->price;
        $data['user_id'] = Auth::user()->id;
        $data['payment_type'] = 'package_payment';
        $request->session()->put('payment_data', $data);

        if ($request->payment_option == 'paypal') {
            $paypal = new PayPalController;
            return $paypal->getCheckout();
        } elseif ($request->payment_option == 'stripe') {
            $stripe = new StripePaymentController;
            return $stripe->index();
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
            if ($userProfile->balance >= $package->price) {
                $userProfile->balance -= $package->price;
                $userProfile->save();
                return $this->package_payment_done(Session::get('payment_data'), null);
            } else {
                flash(translate('You do not have enough wallet balance.'))->error();
                return back();
            }
        }
    }

    public function packagePaymentDone($paymentData, $payment)
    {
        $package = Package::findOrFail($paymentData['package_id']);
        $packagePayment = new PackagePayment;
        $packagePayment->package_id = $package->id;
        $packagePayment->package_type = $package->type;
        $packagePayment->user_id = Auth::user()->id;
        $packagePayment->amount = $paymentData['amount'];
        $packagePayment->payment_type = $paymentData['payment_type'];
        $packagePayment->payment_method = $paymentData['payment_method'];
        $packagePayment->payment_details = $payment;
        if ($packagePayment->save()) {
            $userPackage = Auth::user()->userPackage;
            if ($userPackage == null) {
                $userPackage = new UserPackage;
                $userPackage->user_id = Auth::user()->id;
            }

            $userPackage->package_id = $package->id;
            if ($package->number_of_days > 0) {
                $userPackage->package_invalid_at = date('Y-m-d', strtotime('+ ' . $package->number_of_days . 'days'));
            }

            if ($userPackage->fixed_limit == null) {
                $userPackage->fixed_limit = $package->fixed_limit;
            } else {
                $userPackage->fixed_limit += $package->fixed_limit;
            }

            if ($userPackage->long_term_limit == null) {
                $userPackage->long_term_limit = $package->long_term_limit;
            } else {
                $userPackage->long_term_limit += $package->long_term_limit;
            }

            $userPackage->skill_add_limit = $package->skill_add_limit;
            $userPackage->portfolio_add_limit = $package->portfolio_add_limit;
            $userPackage->job_exp_limit = $package->job_exp_limit;
            $userPackage->bookmark_project_limit = $package->bookmark_project_limit;
            $userPackage->following_status = $package->following_status;
            $userPackage->bio_text_limit = $package->bio_text_limit;
            $userPackage->service_limit = $package->service_limit;

            $userPackage->save();

            //from expert/client to admin
            NotificationUtility::set_notification(
                "package_purchased",
                translate('A new package has been purchased by'),
                route('package_payment_history_for_admin', [], false),
                0,
                Auth::user()->id,
                'admin'
            );

            EmailUtility::send_email(
                translate('A new package has been purchased'),
                translate('A new package has been purchased by ') . Auth::user()->name,
                system_email(),
                route('package_payment_history_for_admin')
            );

            Session::forget('payment_data');
            flash(translate('Payment has been done successfully'))->success();
            return redirect()->route('dashboard');
        }
    }

    // Offline Package Purchase
    public function purchasePackageOffline(Request $request)
    {
        $package = Package::findOrFail($request->package_id);
        $packagePayment = new PackagePayment;
        $packagePayment->package_id = $package->id;
        $packagePayment->package_type = $package->type;
        $packagePayment->user_id = Auth::user()->id;
        $packagePayment->amount = $package->price;
        $packagePayment->payment_type = 'package_payment';
        $packagePayment->payment_method = $request->payment_option;
        $packagePayment->payment_details = $request->trx_id;
        $packagePayment->offline_payment = 1;
        $packagePayment->receipt = $request->photo;
        $packagePayment->approval = 0;
        $packagePayment->save();
        flash(translate('Offline payment has been done. Please wait for admin approval.'))->success();
        return redirect()->route('expert.packages.history');
    }

    // Offline package payment approval
    public function approveOfflinePackagePayment($id)
    {
        $packagePayment = PackagePayment::findOrFail($id);
        $packagePayment->approval = 1;

        $userPackage = $packagePayment->user->userPackage;
        if ($userPackage == null) {
            $userPackage = new UserPackage;
            $userPackage->user_id = $packagePayment->user_id;
        }

        $userPackage->package_id = $packagePayment->package_id;
        if ($packagePayment->package->number_of_days > 0) {
            $userPackage->package_invalid_at = date('Y-m-d', strtotime('+ ' . $packagePayment->package->number_of_days . 'days'));
        }

        if ($userPackage->fixed_limit == null) {
            $userPackage->fixed_limit = $packagePayment->package->fixed_limit;
        } else {
            $userPackage->fixed_limit += $packagePayment->package->fixed_limit;
        }

        if ($userPackage->long_term_limit == null) {
            $userPackage->long_term_limit = $packagePayment->package->long_term_limit;
        } else {
            $userPackage->long_term_limit += $packagePayment->package->long_term_limit;
        }

        $userPackage->skill_add_limit = $packagePayment->package->skill_add_limit;
        $userPackage->portfolio_add_limit = $packagePayment->package->portfolio_add_limit;
        $userPackage->job_exp_limit = $packagePayment->package->job_exp_limit;
        $userPackage->bookmark_project_limit = $packagePayment->package->bookmark_project_limit;
        $userPackage->following_status = $packagePayment->package->following_status;
        $userPackage->bio_text_limit = $packagePayment->package->bio_text_limit;
        $userPackage->service_limit = $packagePayment->package->service_limit;

        if ($userPackage->save()) {
            $packagePayment->save();
            flash(translate('Offline payment approved successfully.'))->success();
            return redirect()->route('offline_package_payments_history');
        } else {
            flash(translate('Something went wrong'))->error();
            return back();
        }
    }

    public function expertPackagePurchaseHistoryIndex()
    {
        $packagePayments = PackagePayment::where('user_id', Auth::user()->id)->latest()->paginate(12);

        return view('frontend.user.packages.history', compact('packagePayments'));
    }
}
