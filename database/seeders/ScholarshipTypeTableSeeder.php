<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class ScholarshipTypeTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('scholarship_types')->delete();

        DB::table('scholarship_types')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'University',
                'created_at' => '2023-11-09 16:16:12',
                'updated_at' => '2023-11-09 09:41:13',
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'Govt',
                'created_at' => '2023-11-09 16:16:12',
                'updated_at' => '2023-11-09 09:41:13',
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'Projects',
                'created_at' => '2023-11-09 16:16:12',
                'updated_at' => '2023-11-09 09:41:13',
            )
        ));
    }
}
