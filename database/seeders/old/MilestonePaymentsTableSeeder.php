<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class MilestonePaymentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('milestone_payments')->delete();

        DB::table('milestone_payments')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'project_id' => 3,
                    'client_user_id' => 9,
                    'expert_user_id' => 8,
                    'amount' => 300.0,
                    'message' => 'Please pay now',
                    'paid_status' => 1,
                    'client_seen' => 0,
                    'admin_profit' => 30.0,
                    'expert_profit' => 270.0,
                    'payment_details' => '{"status":"Success"}',
                    'payment_method' => 'stripe',
                    'created_at' => '2023-04-06 18:10:27',
                    'updated_at' => '2023-04-13 17:22:04',
                    'deleted_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 2,
                    'project_id' => 12,
                    'client_user_id' => 23,
                    'expert_user_id' => 6,
                    'amount' => 800.0,
                    'message' => 'I have finish you work',
                    'paid_status' => 1,
                    'client_seen' => 1,
                    'admin_profit' => 40.0,
                    'expert_profit' => 760.0,
                    'payment_details' => '{"status":"Success"}',
                    'payment_method' => 'stripe',
                    'created_at' => '2023-07-05 13:35:19',
                    'updated_at' => '2023-07-05 13:37:44',
                    'deleted_at' => NULL,
                ),
            2 =>
                array(
                    'id' => 3,
                    'project_id' => 13,
                    'client_user_id' => 5,
                    'expert_user_id' => 4,
                    'amount' => 50.0,
                    'message' => 'Your work is done',
                    'paid_status' => 1,
                    'client_seen' => 1,
                    'admin_profit' => 2.5,
                    'expert_profit' => 47.5,
                    'payment_details' => '{"status":"Success"}',
                    'payment_method' => 'stripe',
                    'created_at' => '2023-07-24 11:48:32',
                    'updated_at' => '2023-07-26 13:43:12',
                    'deleted_at' => NULL,
                ),
            3 =>
                array(
                    'id' => 4,
                    'project_id' => 13,
                    'client_user_id' => 5,
                    'expert_user_id' => 4,
                    'amount' => 50.0,
                    'message' => 'Your work is done',
                    'paid_status' => 1,
                    'client_seen' => 1,
                    'admin_profit' => 2.5,
                    'expert_profit' => 47.5,
                    'payment_details' => '{"status":"Success"}',
                    'payment_method' => 'stripe',
                    'created_at' => '2023-07-24 11:49:21',
                    'updated_at' => '2023-07-26 13:43:04',
                    'deleted_at' => NULL,
                ),
            4 =>
                array(
                    'id' => 5,
                    'project_id' => 16,
                    'client_user_id' => 5,
                    'expert_user_id' => 6,
                    'amount' => 50.0,
                    'message' => 'I have completed this project . please give me paymen.',
                    'paid_status' => 1,
                    'client_seen' => 0,
                    'admin_profit' => 2.5,
                    'expert_profit' => 47.5,
                    'payment_details' => '{"status":"Success"}',
                    'payment_method' => 'stripe',
                    'created_at' => '2023-08-09 19:59:19',
                    'updated_at' => '2023-08-09 20:00:38',
                    'deleted_at' => NULL,
                ),
        ));
    }
}
