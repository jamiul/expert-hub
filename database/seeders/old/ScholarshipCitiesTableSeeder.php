<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class ScholarshipCitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('scholarship_cities')->delete();

        DB::table('scholarship_cities')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'city_name' => 'Sydney',
                    'slug' => 'Sydney',
                    'created_at' => '2023-05-24 15:43:19',
                    'updated_at' => '2023-05-24 15:43:27',
                    'deleted_at' => '2023-05-24 15:43:27',
                ),
            1 =>
                array(
                    'id' => 2,
                    'city_name' => 'Sydney_name',
                    'slug' => 'Sydneyname',
                    'created_at' => '2023-05-24 15:44:14',
                    'updated_at' => '2023-05-24 15:45:50',
                    'deleted_at' => '2023-05-24 15:45:50',
                ),
            2 =>
                array(
                    'id' => 3,
                    'city_name' => 'Sydney',
                    'slug' => 'Sydney',
                    'created_at' => '2023-05-24 15:45:57',
                    'updated_at' => '2023-05-24 15:45:57',
                    'deleted_at' => NULL,
                ),
            3 =>
                array(
                    'id' => 4,
                    'city_name' => 'Bruce',
                    'slug' => 'Bruce',
                    'created_at' => '2023-05-24 15:46:17',
                    'updated_at' => '2023-05-24 15:46:17',
                    'deleted_at' => NULL,
                ),
            4 =>
                array(
                    'id' => 5,
                    'city_name' => 'Melbourne',
                    'slug' => 'Melbourne',
                    'created_at' => '2023-05-24 15:46:39',
                    'updated_at' => '2023-05-24 15:46:39',
                    'deleted_at' => NULL,
                ),
        ));
    }
}
