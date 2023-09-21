<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class StaffTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('staff')->delete();

        DB::table('staff')->insert(array(
            0 =>
                array(
                    'id' => 29,
                    'user_id' => 2,
                    'role_id' => 9,
                    'created_at' => '2023-04-05 07:52:43',
                    'updated_at' => '2023-08-08 15:16:48',
                ),
            1 =>
                array(
                    'id' => 30,
                    'user_id' => 3,
                    'role_id' => 9,
                    'created_at' => '2023-04-05 07:54:28',
                    'updated_at' => '2023-08-08 14:41:43',
                ),
        ));
    }
}
