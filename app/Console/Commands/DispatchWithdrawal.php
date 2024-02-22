<?php

namespace App\Console\Commands;

use App\Enums\MilestoneStatus;
use App\Helpers\PaymentHelper;
use App\Models\ExpertTransaction;
use App\Models\Milestone;
use App\Models\Profile;
use App\Models\User;
use App\Models\WithdrawSchedule;
use App\Notifications\PaymentNotification;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Log;

class DispatchWithdrawal extends Command {
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dispatch-withdrawal';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Dispatch Schedule Withdrawal';

    /**
     * Execute the console command.
     */
    public function handle() {
        $withdraw_schedules = WithdrawSchedule::where('status', true)->get();

        foreach ( $withdraw_schedules as $withdraw_schedule ) {
            $today = Carbon::now();

            //check what schedule is set
            $second_withdrawal_day = Carbon::parse('second Wednesday of F')->format('d m y');
            $last_withdrawal_day = Carbon::parse('last Wednesday of F')->format('d m y');

            if($withdraw_schedule->preferred_payment_schedule == 'weekly'){
                if($today->dayOfWeek == 1){
                    //wednesday
                    $this->withdraw($withdraw_schedule);
                }
            } else if($withdraw_schedule->preferred_payment_schedule == 'twice_per_month') {
                //every second wednesday & last wednesday
                if($today->format('d m Y') == $second_withdrawal_day || $today->format('d m Y') == $last_withdrawal_day){
                    $this->withdraw($withdraw_schedule);
                }
            } else if($withdraw_schedule->preferred_payment_schedule == 'monthly'){
                //every last wednesday
                if($today->format('d m Y') == $last_withdrawal_day){
                    $this->withdraw($withdraw_schedule);
                }
            } else if($withdraw_schedule->preferred_payment_schedule == 'quarterly'){
                //every second wednesday & last wednesday
                if($today->format('d m Y') == $second_withdrawal_day || $today->format('d m Y') == $last_withdrawal_day){
                    $this->withdraw($withdraw_schedule);
                }
            }
            exit();
        }
    }

    private function withdraw($withdraw_schedule) {
        $acct_id = $withdraw_schedule->user->profile->stripe_acct_id;
        $balance = $withdraw_schedule->user->profile->balance;
        $bank_info = $withdraw_schedule->expert_withdrawal;
        $balance_reach = $withdraw_schedule->balance_reach;
        $fee = env('WITHDRAW_FEE');
        $amount = $balance_reach - $fee;
        $reference = 'Schedule Withdraw';

        if($balance >= $balance_reach){
            try {
                $stripe = new \Stripe\StripeClient( [
                    "api_key" => env( 'STRIPE_SECRET' ),
                ] );

                $stripe->payouts->create( [
//                'source_type' => 'bank_account',
                    'destination' => $bank_info->bank_id,
                    'amount'      => $amount * 100,
                    'currency'    => $bank_info->currency,
                    'description' => $reference,
                    'metadata'    => [
                        'expert_id' => $withdraw_schedule->user->id
                    ]
                ], [ 'stripe_account' => $acct_id ] );

            } catch ( \Stripe\Exception\InvalidRequestException $ex ) {
                Log::info( $ex->getMessage() );
            } catch ( \Exception $ex ) {
                Log::info( $ex->getMessage() );
            }
        }
    }
}
