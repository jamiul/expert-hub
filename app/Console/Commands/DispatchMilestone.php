<?php

namespace App\Console\Commands;

use App\Enums\MilestoneStatus;
use App\Helpers\PaymentHelper;
use App\Models\ExpertTransaction;
use App\Models\Milestone;
use App\Models\Profile;
use App\Models\User;
use App\Notifications\PaymentNotification;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Log;

class DispatchMilestone extends Command {
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dispatch-milestones';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Dispatch Available Milestones';

    /**
     * Execute the console command.
     */
    public function handle() {
        $milestones = Milestone::where( 'status', MilestoneStatus::Approved )
                               ->whereDate( 'approved_at', '>=', Carbon::now()->addMinutes( 5 ) )
                               ->get();

        foreach ( $milestones as $milestone ) {
            try {
                //release fund to expert
                $milestone_amount     = $milestone->amount;
                $CONNECTED_ACCOUNT_ID = $milestone->contract->expert->stripe_acct_id;

                $charge    = PaymentHelper::calculateExpertCharge( $milestone->amount );
                $net_total = $charge['net_total'];

                $stripe = new \Stripe\StripeClient( [
                    "api_key" => env( 'STRIPE_SECRET' ),
                ] );

                $acceptMilestone = $stripe->transfers->create( [
                    'amount'         => $net_total * 100,
                    'currency'       => $milestone->contract->expert->currency,
                    'destination'    => $CONNECTED_ACCOUNT_ID,
                    'transfer_group' => $CONNECTED_ACCOUNT_ID,
                    'metadata'       => [
                        'reference_id'   => $milestone->id,
                        'reference_type' => 'milestone'
                    ]
                ] );

                $milestone->update( [
                    'status' => MilestoneStatus::Released
                ] );

                $milestone->contract->expert->user->notify( new PaymentNotification( [
                        'title'   => 'Great news! You got paid.',
                        'message' => "Your available balance is " . $milestone->contract->expert->balance,
                        'link'    => route( 'expert.payment.billing' ),
                        'button'  => 'See available balance',
                        'avatar'  => asset( '/assets/frontend/default/img/expert_dashboard/profile-img.png' )
                    ]
                ) );

                Log::info( $CONNECTED_ACCOUNT_ID . ' payment released.' );

                Log::info( $acceptMilestone );
            } catch ( \Exception $ex ) {
                $milestone->contract->expert->user->notify( new PaymentNotification( [
                        'title'   => 'A Client is trying to pay you milestone',
                        'message' => 'A client is trying to pay you milestone. Please submit KYC to verify your account and receive payment. If already submitted please give us some time to verify it.',
                        'link'    => route( 'expert.payment.index' ),
                        'button'  => 'Submit KYC',
                        'avatar'  => asset( '/assets/frontend/default/img/expert_dashboard/profile-img.png' )
                    ]
                ) );
                Log::error( $ex );
            }
        }
    }
}
