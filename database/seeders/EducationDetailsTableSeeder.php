<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class EducationDetailsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('education_details')->delete();

        DB::table('education_details')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'user_id' => 4,
                    'degree' => 'Bachelor of Information Technology',
                    'passing_year' => 2023,
                    'country_id' => 18,
                    'school_name' => 'International Islamic University, Malaysia',
                    'created_at' => '2023-04-13 17:05:26',
                    'updated_at' => '2023-04-13 17:05:26',
                    'deleted_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 2,
                    'user_id' => 12,
                    'degree' => 'Bachelor of Information Technology',
                    'passing_year' => 2013,
                    'country_id' => 132,
                    'school_name' => 'International Islamic University, Malaysia',
                    'created_at' => '2023-04-14 10:25:55',
                    'updated_at' => '2023-04-14 10:25:55',
                    'deleted_at' => NULL,
                ),
            2 =>
                array(
                    'id' => 3,
                    'user_id' => 14,
                    'degree' => 'Bsc in CSE',
                    'passing_year' => 2018,
                    'country_id' => 18,
                    'school_name' => 'University Malaya',
                    'created_at' => '2023-04-14 12:02:18',
                    'updated_at' => '2023-04-14 12:02:18',
                    'deleted_at' => NULL,
                ),
            3 =>
                array(
                    'id' => 4,
                    'user_id' => 6,
                    'degree' => 'BscIT',
                    'passing_year' => 2026,
                    'country_id' => 38,
                    'school_name' => 'International open university',
                    'created_at' => '2023-04-14 12:48:07',
                    'updated_at' => '2023-04-14 12:48:07',
                    'deleted_at' => NULL,
                ),
            4 =>
                array(
                    'id' => 5,
                    'user_id' => 19,
                    'degree' => 'Bsc in CSE',
                    'passing_year' => 2022,
                    'country_id' => 132,
                    'school_name' => 'University Malaya',
                    'created_at' => '2023-04-15 17:48:25',
                    'updated_at' => '2023-04-15 17:48:25',
                    'deleted_at' => NULL,
                ),
            5 =>
                array(
                    'id' => 6,
                    'user_id' => 17,
                    'degree' => 'Bachelor of Information Technology',
                    'passing_year' => 2018,
                    'country_id' => 132,
                    'school_name' => 'UPM',
                    'created_at' => '2023-04-15 17:54:43',
                    'updated_at' => '2023-04-15 17:54:43',
                    'deleted_at' => NULL,
                ),
            6 =>
                array(
                    'id' => 7,
                    'user_id' => 8,
                    'degree' => 'Master of Education (M.Ed.) in Curriculum Development',
                    'passing_year' => 2022,
                    'country_id' => 13,
                    'school_name' => 'ABC University',
                    'created_at' => '2023-09-14 13:58:52',
                    'updated_at' => '2023-09-14 13:58:52',
                    'deleted_at' => NULL,
                ),
        ));
    }
}
