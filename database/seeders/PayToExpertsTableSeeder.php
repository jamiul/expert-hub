<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PayToExpertsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('pay_to_experts')->delete();

        DB::table('pay_to_experts')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'paid_by' => 1,
                    'user_id' => 4,
                    'paid_amount' => 109.0,
                    'payment_method' => 'paypal',
                    'reciept' => NULL,
                    'requested_amount' => 109.0,
                    'descriptions' => 'Yes requested',
                    'paid_status' => 1,
                    'created_at' => '2023-04-06 12:56:39',
                    'updated_at' => '2023-04-15 06:38:10',
                    'deleted_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 2,
                    'paid_by' => NULL,
                    'user_id' => 4,
                    'paid_amount' => 0.0,
                    'payment_method' => 'paypal',
                    'reciept' => NULL,
                    'requested_amount' => 147.0,
                    'descriptions' => 'This is very important',
                    'paid_status' => 0,
                    'created_at' => '2023-07-24 12:00:24',
                    'updated_at' => '2023-07-24 12:00:24',
                    'deleted_at' => NULL,
                ),
        ));
    }
}
