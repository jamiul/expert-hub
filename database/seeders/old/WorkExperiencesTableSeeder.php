<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class WorkExperiencesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('work_experiences')->delete();

        DB::table('work_experiences')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'user_id' => 4,
                    'company_name' => 'Connection group hdn.BHD',
                    'company_website' => NULL,
                    'designation' => 'HR',
                    'description' => '',
                    'start' => '2022-04-01',
                    'end' => NULL,
                    'present' => 1,
                    'location' => 'Malaysia',
                    'created_at' => '2023-04-13 17:06:59',
                    'updated_at' => '2023-04-13 17:06:59',
                    'deleted_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 2,
                    'user_id' => 12,
                    'company_name' => 'Connection group hdn.BHD',
                    'company_website' => NULL,
                    'designation' => 'HR',
                    'description' => '',
                    'start' => '2021-04-01',
                    'end' => NULL,
                    'present' => 1,
                    'location' => 'Malaysia',
                    'created_at' => '2023-04-14 11:31:04',
                    'updated_at' => '2023-04-14 11:31:04',
                    'deleted_at' => NULL,
                ),
            2 =>
                array(
                    'id' => 3,
                    'user_id' => 14,
                    'company_name' => 'IIUM',
                    'company_website' => NULL,
                    'designation' => 'Admin',
                    'description' => '',
                    'start' => '2020-04-02',
                    'end' => NULL,
                    'present' => 1,
                    'location' => 'Malaysia',
                    'created_at' => '2023-04-14 12:01:32',
                    'updated_at' => '2023-04-14 12:01:32',
                    'deleted_at' => NULL,
                ),
            3 =>
                array(
                    'id' => 4,
                    'user_id' => 6,
                    'company_name' => 'aide business',
                    'company_website' => NULL,
                    'designation' => 'Test full name',
                    'description' => '',
                    'start' => '2022-10-15',
                    'end' => NULL,
                    'present' => 1,
                    'location' => 'dhaka',
                    'created_at' => '2023-04-14 12:46:17',
                    'updated_at' => '2023-04-14 12:46:17',
                    'deleted_at' => NULL,
                ),
            4 =>
                array(
                    'id' => 5,
                    'user_id' => 19,
                    'company_name' => 'IIUM',
                    'company_website' => NULL,
                    'designation' => 'Dveloper',
                    'description' => '',
                    'start' => '2021-04-08',
                    'end' => NULL,
                    'present' => 1,
                    'location' => 'Malaysia',
                    'created_at' => '2023-04-15 17:47:38',
                    'updated_at' => '2023-04-15 17:47:38',
                    'deleted_at' => NULL,
                ),
            5 =>
                array(
                    'id' => 6,
                    'user_id' => 17,
                    'company_name' => 'roumbos hdn.bhd',
                    'company_website' => NULL,
                    'designation' => 'Dveloper',
                    'description' => '',
                    'start' => '2019-04-05',
                    'end' => '2022-04-01',
                    'present' => 0,
                    'location' => 'Malaysia',
                    'created_at' => '2023-04-15 17:55:39',
                    'updated_at' => '2023-04-15 17:55:39',
                    'deleted_at' => NULL,
                ),
        ));
    }
}
