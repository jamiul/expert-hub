<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\FlutterwaveController;
use App\Http\Controllers\InstamojoController;
use App\Http\Controllers\PayPalController;
use App\Http\Controllers\PaystackController;
use App\Http\Controllers\PaytmController;
use App\Http\Controllers\PublicSslCommerzPaymentController;
use App\Models\User;
use App\Models\Wallet;
use Auth;
use Illuminate\Http\Request;
use session;

class WalletController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:show wallet history'])->only('admin_index');
    }

    public function adminIndex()
    {
        $wallets = Wallet::latest()->paginate(10);
        return view('admin.wallet_recharge_history.index', compact('wallets'));
    }

    public function rechage(Request $request)
    {
        $data['amount'] = round($request->amount);
        $data['payment_method'] = $request->payment_option;
        $data['payment_type'] = 'wallet_payment';

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
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wallets = Wallet::where('user_id', Auth::user()->id)->latest()->paginate(10);
        return view('frontend.user.wallet.index', compact('wallets'));
    }

    public function walletPaymentDone($paymentData, $paymentDetails)
    {
        $user = Auth::user();
        $userProfile = $user->profile;
        $userProfile->balance = $userProfile->balance + $paymentData['amount'];
        $userProfile->save();

        $wallet = new Wallet;
        $wallet->user_id = $user->id;
        $wallet->amount = $paymentData['amount'];
        $wallet->payment_method = $paymentData['payment_method'];
        $wallet->payment_details = $paymentDetails;
        $wallet->type = "Recharge";
        $wallet->save();

        Session::forget('payment_data');
        Session::forget('payment_type');

        flash(translate('Payment completed'))->success();
        return redirect()->route('wallet.index');
    }

    public function walletPaymentByAdmin(Request $request)
    {
        $data['amount'] = (float)$request->amount;
        $data['payment_method'] = "Offline Payment";

        $user = User::where('id', $request->user_id)->first();
        $userProfile = $user->profile;
        $userProfile->balance = $userProfile->balance + $data['amount'];
        $userProfile->save();

        $wallet = new Wallet;
        $wallet->user_id = $user->id;
        $wallet->amount = $data['amount'];
        $wallet->payment_method = $data['payment_method'];
        $wallet->payment_details = "Offline Payment";
        $wallet->type = "Recharge By " . Auth::user()->name;
        $wallet->save();

        flash(translate('Wallet balance has been added'))->success();
        return back();
    }
}
