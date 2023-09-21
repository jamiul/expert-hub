<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class UserPackagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_packages')->delete();

        DB::table('user_packages')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'user_id' => 5,
                    'package_id' => 3,
                    'package_invalid_at' => '2024-04-05',
                    'number_of_days' => NULL,
                    'hourly_limit' => NULL,
                    'fixed_limit' => 26,
                    'long_term_limit' => 28,
                    'skill_add_limit' => NULL,
                    'bio_text_limit' => 260,
                    'portfolio_add_limit' => NULL,
                    'bookmark_project_limit' => NULL,
                    'bookmark_scholarship_limit' => NULL,
                    'job_exp_limit' => NULL,
                    'service_limit' => 0,
                    'following_status' => 1,
                    'created_at' => '2023-04-05 09:15:52',
                    'updated_at' => '2023-09-13 16:11:04',
                    'deleted_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 2,
                    'user_id' => 4,
                    'package_id' => 4,
                    'package_invalid_at' => '2024-06-06',
                    'number_of_days' => NULL,
                    'hourly_limit' => NULL,
                    'fixed_limit' => 299,
                    'long_term_limit' => 300,
                    'skill_add_limit' => 20,
                    'bio_text_limit' => 260,
                    'portfolio_add_limit' => 20,
                    'bookmark_project_limit' => 16,
                    'bookmark_scholarship_limit' => NULL,
                    'job_exp_limit' => 5,
                    'service_limit' => 15,
                    'following_status' => 1,
                    'created_at' => '2023-04-05 09:20:28',
                    'updated_at' => '2023-06-07 05:13:51',
                    'deleted_at' => NULL,
                ),
            2 =>
                array(
                    'id' => 3,
                    'user_id' => 6,
                    'package_id' => 4,
                    'package_invalid_at' => '2024-04-13',
                    'number_of_days' => NULL,
                    'hourly_limit' => NULL,
                    'fixed_limit' => 299,
                    'long_term_limit' => 295,
                    'skill_add_limit' => 20,
                    'bio_text_limit' => 260,
                    'portfolio_add_limit' => 20,
                    'bookmark_project_limit' => 17,
                    'bookmark_scholarship_limit' => NULL,
                    'job_exp_limit' => 5,
                    'service_limit' => 15,
                    'following_status' => 1,
                    'created_at' => '2023-04-06 13:09:15',
                    'updated_at' => '2023-08-09 19:55:57',
                    'deleted_at' => NULL,
                ),
            3 =>
                array(
                    'id' => 4,
                    'user_id' => 7,
                    'package_id' => 3,
                    'package_invalid_at' => '2024-04-05',
                    'number_of_days' => NULL,
                    'hourly_limit' => NULL,
                    'fixed_limit' => 18,
                    'long_term_limit' => 19,
                    'skill_add_limit' => NULL,
                    'bio_text_limit' => 260,
                    'portfolio_add_limit' => NULL,
                    'bookmark_project_limit' => NULL,
                    'bookmark_scholarship_limit' => NULL,
                    'job_exp_limit' => NULL,
                    'service_limit' => 0,
                    'following_status' => 1,
                    'created_at' => '2023-04-06 14:09:31',
                    'updated_at' => '2023-07-27 11:30:51',
                    'deleted_at' => NULL,
                ),
            4 =>
                array(
                    'id' => 5,
                    'user_id' => 8,
                    'package_id' => 4,
                    'package_invalid_at' => '2024-06-06',
                    'number_of_days' => NULL,
                    'hourly_limit' => NULL,
                    'fixed_limit' => 298,
                    'long_term_limit' => 300,
                    'skill_add_limit' => 20,
                    'bio_text_limit' => 260,
                    'portfolio_add_limit' => 20,
                    'bookmark_project_limit' => 16,
                    'bookmark_scholarship_limit' => NULL,
                    'job_exp_limit' => 5,
                    'service_limit' => 15,
                    'following_status' => 1,
                    'created_at' => '2023-04-06 17:49:23',
                    'updated_at' => '2023-06-07 05:07:57',
                    'deleted_at' => NULL,
                ),
            5 =>
                array(
                    'id' => 6,
                    'user_id' => 9,
                    'package_id' => 2,
                    'package_invalid_at' => NULL,
                    'number_of_days' => NULL,
                    'hourly_limit' => NULL,
                    'fixed_limit' => 7,
                    'long_term_limit' => 9,
                    'skill_add_limit' => NULL,
                    'bio_text_limit' => 120,
                    'portfolio_add_limit' => NULL,
                    'bookmark_project_limit' => NULL,
                    'bookmark_scholarship_limit' => NULL,
                    'job_exp_limit' => NULL,
                    'service_limit' => 0,
                    'following_status' => 1,
                    'created_at' => '2023-04-06 17:50:48',
                    'updated_at' => '2023-04-13 17:44:40',
                    'deleted_at' => NULL,
                ),
            6 =>
                array(
                    'id' => 7,
                    'user_id' => 10,
                    'package_id' => 1,
                    'package_invalid_at' => NULL,
                    'number_of_days' => NULL,
                    'hourly_limit' => NULL,
                    'fixed_limit' => 100,
                    'long_term_limit' => 100,
                    'skill_add_limit' => 10,
                    'bio_text_limit' => 120,
                    'portfolio_add_limit' => 10,
                    'bookmark_project_limit' => 10,
                    'bookmark_scholarship_limit' => NULL,
                    'job_exp_limit' => 2,
                    'service_limit' => 5,
                    'following_status' => 1,
                    'created_at' => '2023-04-06 18:56:15',
                    'updated_at' => '2023-04-06 18:56:15',
                    'deleted_at' => NULL,
                ),
            7 =>
                array(
                    'id' => 8,
                    'user_id' => 11,
                    'package_id' => 1,
                    'package_invalid_at' => NULL,
                    'number_of_days' => NULL,
                    'hourly_limit' => NULL,
                    'fixed_limit' => 100,
                    'long_term_limit' => 100,
                    'skill_add_limit' => 10,
                    'bio_text_limit' => 120,
                    'portfolio_add_limit' => 10,
                    'bookmark_project_limit' => 10,
                    'bookmark_scholarship_limit' => NULL,
                    'job_exp_limit' => 2,
                    'service_limit' => 5,
                    'following_status' => 1,
                    'created_at' => '2023-04-07 09:15:36',
                    'updated_at' => '2023-04-07 09:15:36',
                    'deleted_at' => NULL,
                ),
            8 =>
                array(
                    'id' => 9,
                    'user_id' => 12,
                    'package_id' => 4,
                    'package_invalid_at' => '2024-06-06',
                    'number_of_days' => NULL,
                    'hourly_limit' => NULL,
                    'fixed_limit' => 500,
                    'long_term_limit' => 500,
                    'skill_add_limit' => 20,
                    'bio_text_limit' => 260,
                    'portfolio_add_limit' => 20,
                    'bookmark_project_limit' => 16,
                    'bookmark_scholarship_limit' => NULL,
                    'job_exp_limit' => 5,
                    'service_limit' => 15,
                    'following_status' => 1,
                    'created_at' => '2023-04-13 18:14:39',
                    'updated_at' => '2023-06-07 05:33:26',
                    'deleted_at' => NULL,
                ),
            9 =>
                array(
                    'id' => 10,
                    'user_id' => 13,
                    'package_id' => 4,
                    'package_invalid_at' => '2024-06-06',
                    'number_of_days' => NULL,
                    'hourly_limit' => NULL,
                    'fixed_limit' => 300,
                    'long_term_limit' => 300,
                    'skill_add_limit' => 20,
                    'bio_text_limit' => 260,
                    'portfolio_add_limit' => 20,
                    'bookmark_project_limit' => 16,
                    'bookmark_scholarship_limit' => NULL,
                    'job_exp_limit' => 5,
                    'service_limit' => 15,
                    'following_status' => 1,
                    'created_at' => '2023-04-14 11:25:54',
                    'updated_at' => '2023-06-07 05:05:16',
                    'deleted_at' => NULL,
                ),
            10 =>
                array(
                    'id' => 11,
                    'user_id' => 14,
                    'package_id' => 4,
                    'package_invalid_at' => '2024-04-13',
                    'number_of_days' => NULL,
                    'hourly_limit' => NULL,
                    'fixed_limit' => 299,
                    'long_term_limit' => 300,
                    'skill_add_limit' => 20,
                    'bio_text_limit' => 260,
                    'portfolio_add_limit' => 20,
                    'bookmark_project_limit' => 16,
                    'bookmark_scholarship_limit' => NULL,
                    'job_exp_limit' => 5,
                    'service_limit' => 15,
                    'following_status' => 1,
                    'created_at' => '2023-04-14 11:56:05',
                    'updated_at' => '2023-04-15 01:38:20',
                    'deleted_at' => NULL,
                ),
            11 =>
                array(
                    'id' => 12,
                    'user_id' => 15,
                    'package_id' => 2,
                    'package_invalid_at' => NULL,
                    'number_of_days' => NULL,
                    'hourly_limit' => NULL,
                    'fixed_limit' => 9,
                    'long_term_limit' => 9,
                    'skill_add_limit' => NULL,
                    'bio_text_limit' => 120,
                    'portfolio_add_limit' => NULL,
                    'bookmark_project_limit' => NULL,
                    'bookmark_scholarship_limit' => NULL,
                    'job_exp_limit' => NULL,
                    'service_limit' => 0,
                    'following_status' => 1,
                    'created_at' => '2023-04-14 13:00:26',
                    'updated_at' => '2023-07-27 11:33:29',
                    'deleted_at' => NULL,
                ),
            12 =>
                array(
                    'id' => 13,
                    'user_id' => 16,
                    'package_id' => 4,
                    'package_invalid_at' => '2024-06-06',
                    'number_of_days' => NULL,
                    'hourly_limit' => NULL,
                    'fixed_limit' => 300,
                    'long_term_limit' => 300,
                    'skill_add_limit' => 20,
                    'bio_text_limit' => 260,
                    'portfolio_add_limit' => 20,
                    'bookmark_project_limit' => 16,
                    'bookmark_scholarship_limit' => NULL,
                    'job_exp_limit' => 5,
                    'service_limit' => 15,
                    'following_status' => 1,
                    'created_at' => '2023-04-15 12:15:29',
                    'updated_at' => '2023-06-07 05:37:19',
                    'deleted_at' => NULL,
                ),
            13 =>
                array(
                    'id' => 14,
                    'user_id' => 17,
                    'package_id' => 1,
                    'package_invalid_at' => '2023-10-12',
                    'number_of_days' => NULL,
                    'hourly_limit' => NULL,
                    'fixed_limit' => 100,
                    'long_term_limit' => 100,
                    'skill_add_limit' => 10,
                    'bio_text_limit' => 120,
                    'portfolio_add_limit' => 10,
                    'bookmark_project_limit' => 10,
                    'bookmark_scholarship_limit' => NULL,
                    'job_exp_limit' => 2,
                    'service_limit' => 5,
                    'following_status' => 1,
                    'created_at' => '2023-04-15 14:06:58',
                    'updated_at' => '2023-04-15 14:06:58',
                    'deleted_at' => NULL,
                ),
            14 =>
                array(
                    'id' => 15,
                    'user_id' => 18,
                    'package_id' => 2,
                    'package_invalid_at' => NULL,
                    'number_of_days' => NULL,
                    'hourly_limit' => NULL,
                    'fixed_limit' => 10,
                    'long_term_limit' => 9,
                    'skill_add_limit' => NULL,
                    'bio_text_limit' => 120,
                    'portfolio_add_limit' => NULL,
                    'bookmark_project_limit' => NULL,
                    'bookmark_scholarship_limit' => NULL,
                    'job_exp_limit' => NULL,
                    'service_limit' => 0,
                    'following_status' => 1,
                    'created_at' => '2023-04-15 17:14:36',
                    'updated_at' => '2023-04-15 17:29:08',
                    'deleted_at' => NULL,
                ),
            15 =>
                array(
                    'id' => 16,
                    'user_id' => 19,
                    'package_id' => 1,
                    'package_invalid_at' => '2023-10-12',
                    'number_of_days' => NULL,
                    'hourly_limit' => NULL,
                    'fixed_limit' => 100,
                    'long_term_limit' => 100,
                    'skill_add_limit' => 10,
                    'bio_text_limit' => 120,
                    'portfolio_add_limit' => 10,
                    'bookmark_project_limit' => 10,
                    'bookmark_scholarship_limit' => NULL,
                    'job_exp_limit' => 2,
                    'service_limit' => 5,
                    'following_status' => 1,
                    'created_at' => '2023-04-15 17:37:46',
                    'updated_at' => '2023-04-15 17:37:46',
                    'deleted_at' => NULL,
                ),
            16 =>
                array(
                    'id' => 17,
                    'user_id' => 20,
                    'package_id' => 4,
                    'package_invalid_at' => '2024-05-10',
                    'number_of_days' => NULL,
                    'hourly_limit' => NULL,
                    'fixed_limit' => 200,
                    'long_term_limit' => 200,
                    'skill_add_limit' => 20,
                    'bio_text_limit' => 260,
                    'portfolio_add_limit' => 20,
                    'bookmark_project_limit' => 16,
                    'bookmark_scholarship_limit' => NULL,
                    'job_exp_limit' => 5,
                    'service_limit' => 15,
                    'following_status' => 1,
                    'created_at' => '2023-05-11 23:45:20',
                    'updated_at' => '2023-05-11 23:45:20',
                    'deleted_at' => NULL,
                ),
            17 =>
                array(
                    'id' => 18,
                    'user_id' => 21,
                    'package_id' => 4,
                    'package_invalid_at' => '2024-06-06',
                    'number_of_days' => NULL,
                    'hourly_limit' => NULL,
                    'fixed_limit' => 400,
                    'long_term_limit' => 400,
                    'skill_add_limit' => 20,
                    'bio_text_limit' => 260,
                    'portfolio_add_limit' => 20,
                    'bookmark_project_limit' => 16,
                    'bookmark_scholarship_limit' => NULL,
                    'job_exp_limit' => 5,
                    'service_limit' => 15,
                    'following_status' => 1,
                    'created_at' => '2023-05-21 18:58:50',
                    'updated_at' => '2023-06-07 05:41:54',
                    'deleted_at' => NULL,
                ),
            18 =>
                array(
                    'id' => 19,
                    'user_id' => 22,
                    'package_id' => 4,
                    'package_invalid_at' => '2024-06-06',
                    'number_of_days' => NULL,
                    'hourly_limit' => NULL,
                    'fixed_limit' => 400,
                    'long_term_limit' => 400,
                    'skill_add_limit' => 20,
                    'bio_text_limit' => 260,
                    'portfolio_add_limit' => 20,
                    'bookmark_project_limit' => 16,
                    'bookmark_scholarship_limit' => NULL,
                    'job_exp_limit' => 5,
                    'service_limit' => 15,
                    'following_status' => 1,
                    'created_at' => '2023-06-05 09:08:15',
                    'updated_at' => '2023-06-07 05:26:50',
                    'deleted_at' => NULL,
                ),
            19 =>
                array(
                    'id' => 20,
                    'user_id' => 23,
                    'package_id' => 3,
                    'package_invalid_at' => '2024-06-06',
                    'number_of_days' => NULL,
                    'hourly_limit' => NULL,
                    'fixed_limit' => 19,
                    'long_term_limit' => 19,
                    'skill_add_limit' => NULL,
                    'bio_text_limit' => 260,
                    'portfolio_add_limit' => NULL,
                    'bookmark_project_limit' => NULL,
                    'bookmark_scholarship_limit' => NULL,
                    'job_exp_limit' => NULL,
                    'service_limit' => 0,
                    'following_status' => 1,
                    'created_at' => '2023-06-07 03:46:34',
                    'updated_at' => '2023-06-07 04:02:02',
                    'deleted_at' => NULL,
                ),
        ));
    }
}
