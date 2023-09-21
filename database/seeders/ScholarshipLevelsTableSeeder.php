<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class ScholarshipLevelsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('scholarship_levels')->delete();

        DB::table('scholarship_levels')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'level_name' => 'masum',
                    'slug' => 'masum',
                    'created_at' => '2023-05-20 21:11:57',
                    'updated_at' => '2023-05-29 09:40:28',
                    'deleted_at' => '2023-05-29 09:40:28',
                ),
            1 =>
                array(
                    'id' => 2,
                    'level_name' => 'masum',
                    'slug' => 'masum',
                    'created_at' => '2023-05-20 21:12:03',
                    'updated_at' => '2023-05-29 09:40:32',
                    'deleted_at' => '2023-05-29 09:40:32',
                ),
            2 =>
                array(
                    'id' => 3,
                    'level_name' => 'rana',
                    'slug' => 'rana',
                    'created_at' => '2023-05-20 21:14:29',
                    'updated_at' => '2023-05-29 09:40:40',
                    'deleted_at' => '2023-05-29 09:40:40',
                ),
            3 =>
                array(
                    'id' => 4,
                    'level_name' => 'Undergraduate Scholarships',
                    'slug' => 'Undergraduate-Scholarships',
                    'created_at' => '2023-05-21 15:52:21',
                    'updated_at' => '2023-06-17 11:05:03',
                    'deleted_at' => NULL,
                ),
            4 =>
                array(
                    'id' => 5,
                    'level_name' => 'Postgraduate Research Scholarships',
                    'slug' => 'Postgraduate-Research-Scholarships',
                    'created_at' => '2023-05-22 14:46:41',
                    'updated_at' => '2023-06-17 11:04:29',
                    'deleted_at' => NULL,
                ),
            5 =>
                array(
                    'id' => 6,
                    'level_name' => 'Postgraduate Scholarships',
                    'slug' => 'Postgraduate-Scholarships',
                    'created_at' => '2023-06-06 17:58:44',
                    'updated_at' => '2023-06-17 11:05:25',
                    'deleted_at' => NULL,
                ),
        ));
    }
}
