<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class ScholarshipQualificationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('scholarship_qualifications')->delete();

        DB::table('scholarship_qualifications')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'qualification_name' => 'Sydney',
                    'slug' => 'Sydney',
                    'created_at' => '2023-05-24 15:43:19',
                    'updated_at' => '2023-05-24 15:43:27',
                    'deleted_at' => '2023-05-24 15:43:27',
                ),
            1 =>
                array(
                    'id' => 2,
                    'qualification_name' => 'Sydney_name',
                    'slug' => 'Sydneyname',
                    'created_at' => '2023-05-24 15:44:14',
                    'updated_at' => '2023-05-24 15:45:50',
                    'deleted_at' => '2023-05-24 15:45:50',
                ),
            2 =>
                array(
                    'id' => 3,
                    'qualification_name' => 'Sydney',
                    'slug' => 'Sydney',
                    'created_at' => '2023-05-24 15:45:57',
                    'updated_at' => '2023-05-24 16:01:59',
                    'deleted_at' => '2023-05-24 16:01:59',
                ),
            3 =>
                array(
                    'id' => 4,
                    'qualification_name' => 'Bruce',
                    'slug' => 'Bruce',
                    'created_at' => '2023-05-24 15:46:17',
                    'updated_at' => '2023-05-24 16:01:50',
                    'deleted_at' => '2023-05-24 16:01:50',
                ),
            4 =>
                array(
                    'id' => 5,
                    'qualification_name' => 'Melbourne',
                    'slug' => 'Melbourne',
                    'created_at' => '2023-05-24 15:46:39',
                    'updated_at' => '2023-05-24 16:01:55',
                    'deleted_at' => '2023-05-24 16:01:55',
                ),
            5 =>
                array(
                    'id' => 6,
                    'qualification_name' => 'Bachelors Degree',
                    'slug' => 'Bachelors-Degree',
                    'created_at' => '2023-05-24 16:05:17',
                    'updated_at' => '2023-05-24 16:05:17',
                    'deleted_at' => NULL,
                ),
            6 =>
                array(
                    'id' => 7,
                    'qualification_name' => 'Masters Degree',
                    'slug' => 'Masters-Degree',
                    'created_at' => '2023-05-24 16:05:29',
                    'updated_at' => '2023-05-24 16:05:29',
                    'deleted_at' => NULL,
                ),
            7 =>
                array(
                    'id' => 8,
                    'qualification_name' => 'nai degree',
                    'slug' => 'nai-degree',
                    'created_at' => '2023-05-24 16:06:00',
                    'updated_at' => '2023-05-24 16:06:19',
                    'deleted_at' => '2023-05-24 16:06:19',
                ),
        ));
    }
}
