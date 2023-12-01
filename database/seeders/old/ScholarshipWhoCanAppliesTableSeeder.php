<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class ScholarshipWhoCanAppliesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('scholarship_who_can_applies')->delete();

        DB::table('scholarship_who_can_applies')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'title' => 'Sydney',
                    'slug' => 'Sydney',
                    'created_at' => '2023-05-24 15:43:19',
                    'updated_at' => '2023-05-24 15:43:27',
                    'deleted_at' => '2023-05-24 15:43:27',
                ),
            1 =>
                array(
                    'id' => 2,
                    'title' => 'Sydney_name',
                    'slug' => 'Sydneyname',
                    'created_at' => '2023-05-24 15:44:14',
                    'updated_at' => '2023-05-24 15:45:50',
                    'deleted_at' => '2023-05-24 15:45:50',
                ),
            2 =>
                array(
                    'id' => 3,
                    'title' => 'Sydney',
                    'slug' => 'Sydney',
                    'created_at' => '2023-05-24 15:45:57',
                    'updated_at' => '2023-05-24 16:01:59',
                    'deleted_at' => '2023-05-24 16:01:59',
                ),
            3 =>
                array(
                    'id' => 4,
                    'title' => 'Bruce',
                    'slug' => 'Bruce',
                    'created_at' => '2023-05-24 15:46:17',
                    'updated_at' => '2023-05-24 16:01:50',
                    'deleted_at' => '2023-05-24 16:01:50',
                ),
            4 =>
                array(
                    'id' => 5,
                    'title' => 'Melbourne',
                    'slug' => 'Melbourne',
                    'created_at' => '2023-05-24 15:46:39',
                    'updated_at' => '2023-05-24 16:01:55',
                    'deleted_at' => '2023-05-24 16:01:55',
                ),
            5 =>
                array(
                    'id' => 6,
                    'title' => 'Bachelors Degree',
                    'slug' => 'Bachelors-Degree',
                    'created_at' => '2023-05-24 16:05:17',
                    'updated_at' => '2023-05-27 18:31:41',
                    'deleted_at' => '2023-05-27 18:31:41',
                ),
            6 =>
                array(
                    'id' => 7,
                    'title' => 'Masters Degree',
                    'slug' => 'Masters-Degree',
                    'created_at' => '2023-05-24 16:05:29',
                    'updated_at' => '2023-05-27 18:33:01',
                    'deleted_at' => '2023-05-27 18:33:01',
                ),
            7 =>
                array(
                    'id' => 8,
                    'title' => 'nai degree',
                    'slug' => 'nai-degree',
                    'created_at' => '2023-05-24 16:06:00',
                    'updated_at' => '2023-05-24 16:06:19',
                    'deleted_at' => '2023-05-24 16:06:19',
                ),
            8 =>
                array(
                    'id' => 9,
                    'title' => 'Domestic and international applicants',
                    'slug' => 'Domestic-and-international-applicants',
                    'created_at' => '2023-05-27 18:31:46',
                    'updated_at' => '2023-05-27 18:36:13',
                    'deleted_at' => NULL,
                ),
            9 =>
                array(
                    'id' => 10,
                    'title' => 'International applicants',
                    'slug' => 'International-applicants',
                    'created_at' => '2023-05-27 18:33:12',
                    'updated_at' => '2023-09-07 11:53:25',
                    'deleted_at' => NULL,
                ),
            10 =>
                array(
                    'id' => 11,
                    'title' => 'Domestic applicants',
                    'slug' => 'Domestic-applicants',
                    'created_at' => '2023-05-27 20:34:50',
                    'updated_at' => '2023-05-27 20:34:50',
                    'deleted_at' => NULL,
                ),
        ));
    }
}
