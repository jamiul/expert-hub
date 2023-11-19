<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class StudentTypeTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('student_types')->delete();

        DB::table('student_types')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Domestic',
                'created_at' => '2023-11-09 16:16:12',
                'updated_at' => '2023-11-09 09:41:13',
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'International',
                'created_at' => '2023-11-09 16:16:12',
                'updated_at' => '2023-11-09 09:41:13',
            )
        ));
    }
}
