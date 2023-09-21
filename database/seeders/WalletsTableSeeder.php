<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class WalletsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('wallets')->delete();

        DB::table('wallets')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'user_id' => 4,
                    'amount' => 100.0,
                    'payment_method' => 'Offline Payment',
                    'payment_details' => 'Offline Payment',
                    'type' => 'Recharge By Engr. Shekh Shimul Ahmmed',
                    'created_at' => '2023-04-05 10:02:40',
                    'updated_at' => '2023-04-05 10:02:40',
                ),
            1 =>
                array(
                    'id' => 2,
                    'user_id' => 5,
                    'amount' => 200.0,
                    'payment_method' => 'stripe',
                    'payment_details' => '{"status":"Success"}',
                    'type' => 'Recharge',
                    'created_at' => '2023-04-06 12:36:15',
                    'updated_at' => '2023-04-06 12:36:15',
                ),
            2 =>
                array(
                    'id' => 3,
                    'user_id' => 6,
                    'amount' => 500.0,
                    'payment_method' => 'stripe',
                    'payment_details' => '{"status":"Success"}',
                    'type' => 'Recharge',
                    'created_at' => '2023-04-06 14:02:20',
                    'updated_at' => '2023-04-06 14:02:20',
                ),
            3 =>
                array(
                    'id' => 4,
                    'user_id' => 5,
                    'amount' => 10.0,
                    'payment_method' => '',
                    'payment_details' => '',
                    'type' => 'Service Cancellation Refund',
                    'created_at' => '2023-04-15 06:36:13',
                    'updated_at' => '2023-04-15 06:36:13',
                ),
            4 =>
                array(
                    'id' => 5,
                    'user_id' => 4,
                    'amount' => 100.0,
                    'payment_method' => 'Offline Payment',
                    'payment_details' => 'Offline Payment',
                    'type' => 'Recharge By Raihanul Islam',
                    'created_at' => '2023-05-17 20:18:03',
                    'updated_at' => '2023-05-17 20:18:03',
                ),
            5 =>
                array(
                    'id' => 6,
                    'user_id' => 13,
                    'amount' => 200.0,
                    'payment_method' => 'Offline Payment',
                    'payment_details' => 'Offline Payment',
                    'type' => 'Recharge By Raihanul Islam',
                    'created_at' => '2023-06-07 05:00:22',
                    'updated_at' => '2023-06-07 05:00:22',
                ),
        ));
    }
}
