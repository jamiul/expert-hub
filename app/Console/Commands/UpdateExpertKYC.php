<?php

namespace App\Console\Commands;

use App\Enums\ProfileType;
use App\Models\ExpertKYC;
use App\Models\Profile;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Log;

class UpdateExpertKYC extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update-expert-kyc';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Keep Updated expert KYC Status';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try {
            $stripe = new \Stripe\StripeClient( [
                "api_key" => env( 'STRIPE_SECRET' ),
            ] );

            $experts = Profile::expert()->whereNotNull('stripe_acct_id')->get();

            foreach ( $experts as $expert){
                $expert_acct = $stripe->accounts->retrieve( $expert->stripe_acct_id, [] );

                //todo: update eKYC form status for expert
                $expert_kyc = ExpertKYC::updateOrCreate( [
                    'user_id' => $expert->user_id
                ], [
                    'details_submitted'                         => $expert_acct->details_submitted,
                    'payouts_enabled'                           => $expert_acct->payouts_enabled,
                    'charges_enabled'                           => $expert_acct->charges_enabled,
                    'requirements'                              => $expert_acct->requirements,
                    'future_requirements'                       => $expert_acct->future_requirements
                ] );
            }
        } catch (\Exception $ex){
            error_log($ex->getMessage());
        }

    }
}
