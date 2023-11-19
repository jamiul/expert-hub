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
                    'level_name' => 'Master by research',
                    'slug' => 'master-by-research',
                    'created_at' => '2023-05-20 21:12:03',
                    'updated_at' => '2023-05-29 09:40:32',
                    'deleted_at' => null,
                ),
            1 =>
                array(
                    'id' => 2,
                    'level_name' => 'Master of Philosophy',
                    'slug' => 'master-of-philosophy',
                    'created_at' => '2023-05-20 21:11:57',
                    'updated_at' => '2023-05-29 09:40:28',
                    'deleted_at' => null,
                ),
            2 =>
                array(
                    'id' => 3,
                    'level_name' => 'Doctors of Philosophy',
                    'slug' => 'doctors-of-philosophy',
                    'created_at' => '2023-05-20 21:14:29',
                    'updated_at' => '2023-05-29 09:40:40',
                    'deleted_at' => null,
                ),
            3 =>
                array(
                    'id' => 4,
                    'level_name' => 'Professional Doctorate',
                    'slug' => 'professional-doctorate',
                    'created_at' => '2023-05-21 15:52:21',
                    'updated_at' => '2023-06-17 11:05:03',
                    'deleted_at' => NULL,
                ),
        ));
    }
}
