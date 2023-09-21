<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->delete();

        DB::table('languages')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'name' => 'English',
                    'code' => 'au',
                    'rtl' => 1,
                    'enable' => 1,
                    'created_at' => '2023-08-23 13:53:04',
                    'updated_at' => '2023-08-23 13:53:04',
                    'deleted_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 2,
                    'name' => 'French',
                    'code' => 'fr',
                    'rtl' => 1,
                    'enable' => 1,
                    'created_at' => '2023-08-28 13:48:38',
                    'updated_at' => '2023-08-28 13:48:38',
                    'deleted_at' => NULL,
                ),
            2 =>
                array(
                    'id' => 3,
                    'name' => 'Chinese',
                    'code' => 'ch',
                    'rtl' => 1,
                    'enable' => 1,
                    'created_at' => '2023-08-28 13:49:12',
                    'updated_at' => '2023-08-28 13:49:12',
                    'deleted_at' => NULL,
                ),
        ));
    }
}
