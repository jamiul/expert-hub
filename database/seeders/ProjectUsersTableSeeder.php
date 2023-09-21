<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class ProjectUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_users')->delete();

        DB::table('project_users')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'project_id' => 3,
                    'user_id' => 8,
                    'hired_at' => 300.0,
                    'created_at' => '2023-04-06 18:07:36',
                    'updated_at' => '2023-04-06 18:07:36',
                    'deleted_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 2,
                    'project_id' => 2,
                    'user_id' => 4,
                    'hired_at' => 500.0,
                    'created_at' => '2023-04-15 18:11:13',
                    'updated_at' => '2023-04-15 18:11:13',
                    'deleted_at' => NULL,
                ),
            2 =>
                array(
                    'id' => 3,
                    'project_id' => 12,
                    'user_id' => 6,
                    'hired_at' => 800.0,
                    'created_at' => '2023-07-05 13:32:29',
                    'updated_at' => '2023-07-05 13:32:29',
                    'deleted_at' => NULL,
                ),
            3 =>
                array(
                    'id' => 4,
                    'project_id' => 10,
                    'user_id' => 4,
                    'hired_at' => 50.0,
                    'created_at' => '2023-07-24 11:46:07',
                    'updated_at' => '2023-07-24 11:46:07',
                    'deleted_at' => NULL,
                ),
            4 =>
                array(
                    'id' => 5,
                    'project_id' => 13,
                    'user_id' => 4,
                    'hired_at' => 50.0,
                    'created_at' => '2023-07-24 11:46:26',
                    'updated_at' => '2023-07-24 11:46:26',
                    'deleted_at' => NULL,
                ),
            5 =>
                array(
                    'id' => 6,
                    'project_id' => 16,
                    'user_id' => 6,
                    'hired_at' => 50.0,
                    'created_at' => '2023-08-09 19:58:12',
                    'updated_at' => '2023-08-09 19:58:12',
                    'deleted_at' => NULL,
                ),
        ));
    }
}
