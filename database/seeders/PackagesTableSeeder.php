<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PackagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('packages')->delete();

        DB::table('packages')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'type' => 'freelancer',
                    'name' => 'Regular',
                    'price' => 0.0,
                    'number_of_days' => 180,
                    'commission' => 10.0,
                    'commission_type' => 'percent',
                    'badge' => NULL,
                    'photo' => NULL,
                    'hourly_limit' => 100,
                    'fixed_limit' => 100,
                    'long_term_limit' => 100,
                    'skill_add_limit' => 10,
                    'bio_text_limit' => 120,
                    'portfolio_add_limit' => 10,
                    'bookmark_project_limit' => 10,
                    'job_exp_limit' => 2,
                    'service_limit' => 5,
                    'following_status' => 1,
                    'recommended' => 1,
                    'active' => 1,
                    'created_at' => '2023-04-05 09:13:41',
                    'updated_at' => '2023-04-14 20:34:25',
                    'deleted_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 2,
                    'type' => 'client',
                    'name' => 'Regular',
                    'price' => 0.0,
                    'number_of_days' => 0,
                    'commission' => 0.0,
                    'commission_type' => 'amount',
                    'badge' => NULL,
                    'photo' => NULL,
                    'hourly_limit' => 100,
                    'fixed_limit' => 10,
                    'long_term_limit' => 10,
                    'skill_add_limit' => NULL,
                    'bio_text_limit' => 120,
                    'portfolio_add_limit' => NULL,
                    'bookmark_project_limit' => NULL,
                    'job_exp_limit' => NULL,
                    'service_limit' => 0,
                    'following_status' => 1,
                    'recommended' => 1,
                    'active' => 1,
                    'created_at' => '2023-04-05 09:15:22',
                    'updated_at' => '2023-04-05 09:15:22',
                    'deleted_at' => NULL,
                ),
            2 =>
                array(
                    'id' => 3,
                    'type' => 'client',
                    'name' => 'Gold',
                    'price' => 20.0,
                    'number_of_days' => 365,
                    'commission' => 0.0,
                    'commission_type' => 'amount',
                    'badge' => NULL,
                    'photo' => NULL,
                    'hourly_limit' => 50,
                    'fixed_limit' => 20,
                    'long_term_limit' => 20,
                    'skill_add_limit' => NULL,
                    'bio_text_limit' => 260,
                    'portfolio_add_limit' => NULL,
                    'bookmark_project_limit' => NULL,
                    'job_exp_limit' => NULL,
                    'service_limit' => 0,
                    'following_status' => 1,
                    'recommended' => 1,
                    'active' => 1,
                    'created_at' => '2023-04-05 09:57:54',
                    'updated_at' => '2023-04-05 09:57:54',
                    'deleted_at' => NULL,
                ),
            3 =>
                array(
                    'id' => 4,
                    'type' => 'freelancer',
                    'name' => 'Gold',
                    'price' => 20.0,
                    'number_of_days' => 365,
                    'commission' => 5.0,
                    'commission_type' => 'percent',
                    'badge' => NULL,
                    'photo' => NULL,
                    'hourly_limit' => 50,
                    'fixed_limit' => 200,
                    'long_term_limit' => 200,
                    'skill_add_limit' => 20,
                    'bio_text_limit' => 260,
                    'portfolio_add_limit' => 20,
                    'bookmark_project_limit' => 16,
                    'job_exp_limit' => 5,
                    'service_limit' => 15,
                    'following_status' => 1,
                    'recommended' => 1,
                    'active' => 1,
                    'created_at' => '2023-04-05 10:00:38',
                    'updated_at' => '2023-04-05 10:00:38',
                    'deleted_at' => NULL,
                ),
        ));
    }
}
