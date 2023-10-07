<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Session;
use Stripe\Stripe;

class StripePaymentController extends Controller
{
    /**
     * Stripe initialize method.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.stripe.stripe');
    }

    public function createCheckoutSession(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $session = \Stripe\Checkout\Session::create(
            [
                'payment_method_types' => ['card'],
                'line_items' => [
                    [
                        'price_data' => [
                            'currency' => \App\Models\Currency::findOrFail(\App\Models\SystemConfiguration::where('type', 'system_default_currency')->first()->value)->code,
                            'product_data' => [
                                'name' => "Payment"
                            ],
                            'unit_amount' => round($request->session()->get('payment_data')['amount'] * 100),
                        ],
                        'quantity' => 1,
                    ]
                ],
                'mode' => 'payment',
                'success_url' => route('stripe.success'),
                'cancel_url' => route('stripe.cancel'),
            ]
        );

        return response()->json(['id' => $session->id, 'status' => 200]);
    }

    public function success(Request $request)
    {
        try {
            $payment = ["status" => "Success"];

            if (Session::get('payment_data')['payment_type'] == 'milestone_payment') {
                $milestonePayment = new MilestonePaymentController;
                return $milestonePayment->milestone_payment_done(Session::get('payment_data'), json_encode($payment));
            } elseif (Session::get('payment_data')['payment_type'] == 'package_payment') {
                $packagePayment = new PackagePaymentController;
                return $packagePayment->package_payment_done(Session::get('payment_data'), json_encode($payment));
            } elseif (Session::get('payment_data')['payment_type'] == 'service_payment') {
                $packagePayment = new ServicePaymentController;
                return $packagePayment->service_package_payment_done(Session::get('payment_data'), json_encode($payment));
            } elseif (Session::get('payment_data')['payment_type'] == 'wallet_payment') {
                return (new WalletController)->wallet_payment_done(Session::get('payment_data'), json_encode($payment));
            }
        } catch (\Exception $e) {
            flash($e->getMessage())->error();
            return redirect()->route('dashboard');
        }
    }

    public function cancel(Request $request)
    {
        flash(translate('Payment is cancelled'))->error();
        return redirect()->route('dashboard');
    }
}
