<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class StudyAreaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('study_areas')->delete();

        DB::table('study_areas')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Architecture',
                'created_at' => '2023-11-09 16:16:12',
                'updated_at' => '2023-11-09 09:41:13',
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'Art',
                'created_at' => '2023-11-09 16:16:12',
                'updated_at' => '2023-11-09 09:41:13',
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'Biology',
                'created_at' => '2023-11-09 16:16:12',
                'updated_at' => '2023-11-09 09:41:13',
            ),
            3 =>
            array(
                'id' => 4,
                'name' => 'Business',
                'created_at' => '2023-11-09 16:16:12',
                'updated_at' => '2023-11-09 09:41:13',
            ),
            4 =>
            array(
                'id' => 5,
                'name' => 'Chemistry',
                'created_at' => '2023-11-09 16:16:12',
                'updated_at' => '2023-11-09 09:41:13',
            ),
            5 =>
            array(
                'id' => 6,
                'name' => 'Computer Programming',
                'created_at' => '2023-11-09 16:16:12',
                'updated_at' => '2023-11-09 09:41:13',
            ),
            6 =>
            array(
                'id' => 7,
                'name' => 'Data Analysis',
                'created_at' => '2023-11-09 16:16:12',
                'updated_at' => '2023-11-09 09:41:13',
            ),
            7 =>
            array(
                'id' => 8,
                'name' => 'Design',
                'created_at' => '2023-11-09 16:16:12',
                'updated_at' => '2023-11-09 09:41:13',
            ),
            8 =>
            array(
                'id' => 9,
                'name' => 'Education',
                'created_at' => '2023-11-09 16:16:12',
                'updated_at' => '2023-11-09 09:41:13',
            ),
            9 =>
            array(
                'id' => 10,
                'name' => 'Electronics',
                'created_at' => '2023-11-09 16:16:12',
                'updated_at' => '2023-11-09 09:41:13',
            ),
            10 =>
            array(
                'id' => 11,
                'name' => 'Engineering',
                'created_at' => '2023-11-09 16:16:12',
                'updated_at' => '2023-11-09 09:41:13',
            ),
            11 =>
            array(
                'id' => 12,
                'name' => 'Environmental Science',
                'created_at' => '2023-11-09 16:16:12',
                'updated_at' => '2023-11-09 09:41:13',
            ),
            12 =>
            array(
                'id' => 13,
                'name' => 'Nutrition',
                'created_at' => '2023-11-09 16:16:12',
                'updated_at' => '2023-11-09 09:41:13',
            ),
            13 =>
            array(
                'id' => 14,
                'name' => 'Healthcare',
                'created_at' => '2023-11-09 16:16:12',
                'updated_at' => '2023-11-09 09:41:13',
            ),
            14 =>
            array(
                'id' => 15,
                'name' => 'History',
                'created_at' => '2023-11-09 16:16:12',
                'updated_at' => '2023-11-09 09:41:13',
            ),
            15 =>
            array(
                'id' => 16,
                'name' => 'Humanities',
                'created_at' => '2023-11-09 16:16:12',
                'updated_at' => '2023-11-09 09:41:13',
            ),
        ));
    }
}
