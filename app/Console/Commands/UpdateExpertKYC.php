<?php

namespace App\Console\Commands;

use App\Enums\ProfileType;
use App\Models\User;
use Illuminate\Console\Command;

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

            $experts = User::whereHas('profile', function ($q){
                $q->where('type', ProfileType::Expert);
                $q->whereNotNull('stripe_acct_id');
            })->toSql();
            dd($experts);

            foreach ( $experts as $expert){
                $expert_acct = $stripe->accounts->retrieve( $acct_id, [] );

                //todo: update eKYC form status for expert
            }
        } catch (\Exception $ex){
            error_log($ex->getMessage());
        }

    }
}
