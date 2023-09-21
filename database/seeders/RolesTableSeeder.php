<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->delete();

        DB::table('roles')->insert(array(
            0 =>
                array(
                    'id' => 9,
                    'name' => 'admin',
                    'guard_name' => 'web',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 10,
                    'name' => 'Administrator',
                    'guard_name' => 'web',
                    'created_at' => '2023-04-05 07:52:03',
                    'updated_at' => '2023-04-05 07:52:03',
                ),
        ));
    }
}
