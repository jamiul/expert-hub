<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PackagePaymentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('package_payments')->delete();

        DB::table('package_payments')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'package_id' => 3,
                    'package_type' => 'client',
                    'user_id' => 5,
                    'amount' => 20.0,
                    'payment_type' => 'package_payment',
                    'payment_method' => 'wallet',
                    'payment_details' => NULL,
                    'created_at' => '2023-04-06 12:36:52',
                    'updated_at' => '2023-04-06 12:36:52',
                    'deleted_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 2,
                    'package_id' => 3,
                    'package_type' => 'client',
                    'user_id' => 7,
                    'amount' => 20.0,
                    'payment_type' => 'package_payment',
                    'payment_method' => 'stripe',
                    'payment_details' => '{"status":"Success"}',
                    'created_at' => '2023-04-06 14:09:31',
                    'updated_at' => '2023-04-06 14:09:31',
                    'deleted_at' => NULL,
                ),
            2 =>
                array(
                    'id' => 3,
                    'package_id' => 4,
                    'package_type' => 'expert',
                    'user_id' => 12,
                    'amount' => 20.0,
                    'payment_type' => 'package_payment',
                    'payment_method' => 'stripe',
                    'payment_details' => '{"status":"Success"}',
                    'created_at' => '2023-04-13 18:16:30',
                    'updated_at' => '2023-04-13 18:16:30',
                    'deleted_at' => NULL,
                ),
            3 =>
                array(
                    'id' => 4,
                    'package_id' => 4,
                    'package_type' => 'expert',
                    'user_id' => 6,
                    'amount' => 20.0,
                    'payment_type' => 'package_payment',
                    'payment_method' => 'wallet',
                    'payment_details' => NULL,
                    'created_at' => '2023-04-14 12:52:42',
                    'updated_at' => '2023-04-14 12:52:42',
                    'deleted_at' => NULL,
                ),
            4 =>
                array(
                    'id' => 5,
                    'package_id' => 4,
                    'package_type' => 'expert',
                    'user_id' => 14,
                    'amount' => 20.0,
                    'payment_type' => 'package_payment',
                    'payment_method' => 'stripe',
                    'payment_details' => '{"status":"Success"}',
                    'created_at' => '2023-04-14 12:54:03',
                    'updated_at' => '2023-04-14 12:54:03',
                    'deleted_at' => NULL,
                ),
            5 =>
                array(
                    'id' => 6,
                    'package_id' => 4,
                    'package_type' => 'expert',
                    'user_id' => 20,
                    'amount' => 20.0,
                    'payment_type' => 'package_payment',
                    'payment_method' => 'stripe',
                    'payment_details' => '{"status":"Success"}',
                    'created_at' => '2023-05-11 23:45:20',
                    'updated_at' => '2023-05-11 23:45:20',
                    'deleted_at' => NULL,
                ),
            6 =>
                array(
                    'id' => 7,
                    'package_id' => 4,
                    'package_type' => 'expert',
                    'user_id' => 21,
                    'amount' => 20.0,
                    'payment_type' => 'package_payment',
                    'payment_method' => 'stripe',
                    'payment_details' => '{"status":"Success"}',
                    'created_at' => '2023-05-21 18:58:50',
                    'updated_at' => '2023-05-21 18:58:50',
                    'deleted_at' => NULL,
                ),
            7 =>
                array(
                    'id' => 8,
                    'package_id' => 4,
                    'package_type' => 'expert',
                    'user_id' => 22,
                    'amount' => 20.0,
                    'payment_type' => 'package_payment',
                    'payment_method' => 'stripe',
                    'payment_details' => '{"status":"Success"}',
                    'created_at' => '2023-06-05 09:08:15',
                    'updated_at' => '2023-06-05 09:08:15',
                    'deleted_at' => NULL,
                ),
            8 =>
                array(
                    'id' => 9,
                    'package_id' => 3,
                    'package_type' => 'client',
                    'user_id' => 23,
                    'amount' => 20.0,
                    'payment_type' => 'package_payment',
                    'payment_method' => 'stripe',
                    'payment_details' => '{"status":"Success"}',
                    'created_at' => '2023-06-07 03:46:34',
                    'updated_at' => '2023-06-07 03:46:34',
                    'deleted_at' => NULL,
                ),
            9 =>
                array(
                    'id' => 10,
                    'package_id' => 4,
                    'package_type' => 'expert',
                    'user_id' => 13,
                    'amount' => 20.0,
                    'payment_type' => 'package_payment',
                    'payment_method' => 'stripe',
                    'payment_details' => '{"status":"Success"}',
                    'created_at' => '2023-06-07 05:05:16',
                    'updated_at' => '2023-06-07 05:05:16',
                    'deleted_at' => NULL,
                ),
            10 =>
                array(
                    'id' => 11,
                    'package_id' => 4,
                    'package_type' => 'expert',
                    'user_id' => 8,
                    'amount' => 20.0,
                    'payment_type' => 'package_payment',
                    'payment_method' => 'stripe',
                    'payment_details' => '{"status":"Success"}',
                    'created_at' => '2023-06-07 05:07:57',
                    'updated_at' => '2023-06-07 05:07:57',
                    'deleted_at' => NULL,
                ),
            11 =>
                array(
                    'id' => 12,
                    'package_id' => 4,
                    'package_type' => 'expert',
                    'user_id' => 4,
                    'amount' => 20.0,
                    'payment_type' => 'package_payment',
                    'payment_method' => 'stripe',
                    'payment_details' => '{"status":"Success"}',
                    'created_at' => '2023-06-07 05:13:51',
                    'updated_at' => '2023-06-07 05:13:51',
                    'deleted_at' => NULL,
                ),
            12 =>
                array(
                    'id' => 13,
                    'package_id' => 4,
                    'package_type' => 'expert',
                    'user_id' => 22,
                    'amount' => 20.0,
                    'payment_type' => 'package_payment',
                    'payment_method' => 'stripe',
                    'payment_details' => '{"status":"Success"}',
                    'created_at' => '2023-06-07 05:26:50',
                    'updated_at' => '2023-06-07 05:26:50',
                    'deleted_at' => NULL,
                ),
            13 =>
                array(
                    'id' => 14,
                    'package_id' => 4,
                    'package_type' => 'expert',
                    'user_id' => 12,
                    'amount' => 20.0,
                    'payment_type' => 'package_payment',
                    'payment_method' => 'stripe',
                    'payment_details' => '{"status":"Success"}',
                    'created_at' => '2023-06-07 05:33:26',
                    'updated_at' => '2023-06-07 05:33:26',
                    'deleted_at' => NULL,
                ),
            14 =>
                array(
                    'id' => 15,
                    'package_id' => 4,
                    'package_type' => 'expert',
                    'user_id' => 16,
                    'amount' => 20.0,
                    'payment_type' => 'package_payment',
                    'payment_method' => 'stripe',
                    'payment_details' => '{"status":"Success"}',
                    'created_at' => '2023-06-07 05:37:19',
                    'updated_at' => '2023-06-07 05:37:19',
                    'deleted_at' => NULL,
                ),
            15 =>
                array(
                    'id' => 16,
                    'package_id' => 4,
                    'package_type' => 'expert',
                    'user_id' => 21,
                    'amount' => 20.0,
                    'payment_type' => 'package_payment',
                    'payment_method' => 'stripe',
                    'payment_details' => '{"status":"Success"}',
                    'created_at' => '2023-06-07 05:41:54',
                    'updated_at' => '2023-06-07 05:41:54',
                    'deleted_at' => NULL,
                ),
        ));
    }
}
