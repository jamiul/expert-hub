<?php

namespace App\Http\Controllers\Expert;

use App\Http\Controllers\Controller;
use App\Models\ExpertKYC;
use App\Models\ExpertTransaction;
use App\Models\ExpertWithdrawal;
use App\Models\Profile;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Stripe\Exception\InvalidRequestException;

class PaymentController extends Controller {
    public $api_key = null;

    public $stripe = null;

    public function __construct() {
        $this->api_key = env( 'STRIPE_SECRET' );

        $this->stripe = new \Stripe\StripeClient( [
            "api_key" => env( 'STRIPE_SECRET' ),
        ] );
    }

    private function __checkStripeConnect() {
        $user = auth()->user();

        if ( $user->profile->stripe_acct_id == '' ) {
            return redirect()->route( 'expert.payment.onboard' );
        }
    }

    /*
     * Display summary of Experts Payment & Billing /payment
     * */
    public function index() {
        return view( 'frontend.expert.payment.index' );
    }

    /*
     * List of transactions /payment/billing-report
     * */
    public function billingReport() {
        $this->__checkStripeConnect();

        return view( 'frontend.expert.payment.billing-report');
    }

    public function refundMilestone( $milestone_id ) {
        $refund_amount = 100;

        //reverse already paid fund from freelancer to client
        $transfer_refund = $this->stripe->transfers->createReversal(
            'tr_1OaeGSBkKAerzo32ibZwrltw',
            [ 'amount' => 9000 ]
        );

        dd( $transfer_refund );
    }
}
