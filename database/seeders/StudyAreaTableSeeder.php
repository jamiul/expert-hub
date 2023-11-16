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
                'name' => 'Art',
                'created_at' => '2023-11-09 16:16:12',
                'updated_at' => '2023-11-09 09:41:13',
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'Architecture',
                'created_at' => '2023-11-09 16:16:12',
                'updated_at' => '2023-11-09 09:41:13',
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'Business',
                'created_at' => '2023-11-09 16:16:12',
                'updated_at' => '2023-11-09 09:41:13',
            ),
        ));
    }
}
