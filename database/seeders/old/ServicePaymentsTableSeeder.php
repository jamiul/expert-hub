<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class ServicePaymentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_payments')->delete();

        DB::table('service_payments')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'service_package_id' => 1,
                    'service_package_type' => 'basic',
                    'user_id' => 5,
                    'service_owner_id' => 4,
                    'amount' => '10',
                    'payment_type' => 'service_payment',
                    'admin_profit' => '1.00',
                    'expert_profit' => '9.00',
                    'payment_method' => 'wallet',
                    'payment_details' => 'null',
                    'cancel_status' => 0,
                    'cancel_requested' => 0,
                    'refund_percentage' => NULL,
                    'cancel_reason' => NULL,
                    'created_at' => '2023-04-06 12:51:34',
                    'updated_at' => '2023-04-06 12:51:34',
                    'deleted_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 2,
                    'service_package_id' => 6,
                    'service_package_type' => 'premium',
                    'user_id' => 5,
                    'service_owner_id' => 6,
                    'amount' => '100',
                    'payment_type' => 'service_payment',
                    'admin_profit' => '5.00',
                    'expert_profit' => '95.00',
                    'payment_method' => 'wallet',
                    'payment_details' => 'null',
                    'cancel_status' => 1,
                    'cancel_requested' => 1,
                    'refund_percentage' => '10.00',
                    'cancel_reason' => 'Not completed.',
                    'created_at' => '2023-04-15 06:30:58',
                    'updated_at' => '2023-04-15 06:36:13',
                    'deleted_at' => NULL,
                ),
            2 =>
                array(
                    'id' => 3,
                    'service_package_id' => 4,
                    'service_package_type' => 'basic',
                    'user_id' => 5,
                    'service_owner_id' => 6,
                    'amount' => '30',
                    'payment_type' => 'service_payment',
                    'admin_profit' => '1.50',
                    'expert_profit' => '28.50',
                    'payment_method' => 'wallet',
                    'payment_details' => 'null',
                    'cancel_status' => 0,
                    'cancel_requested' => 0,
                    'refund_percentage' => NULL,
                    'cancel_reason' => NULL,
                    'created_at' => '2023-04-23 08:02:52',
                    'updated_at' => '2023-04-23 08:02:52',
                    'deleted_at' => NULL,
                ),
        ));
    }
}
