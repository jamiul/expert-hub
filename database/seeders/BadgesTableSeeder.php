<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class BadgesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('badges')->delete();

        DB::table('badges')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'role_id' => 'freelancer',
                    'type' => 'earning_badge',
                    'name' => 'Level One',
                    'value' => 5000.0,
                    'icon' => '140',
                    'created_at' => '2023-04-13 18:12:28',
                    'updated_at' => '2023-07-06 20:37:01',
                    'deleted_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 2,
                    'role_id' => 'freelancer',
                    'type' => 'earning_badge',
                    'name' => 'New Seller',
                    'value' => 0.0,
                    'icon' => '141',
                    'created_at' => '2023-07-06 20:39:05',
                    'updated_at' => '2023-07-06 20:39:05',
                    'deleted_at' => NULL,
                ),
            2 =>
                array(
                    'id' => 3,
                    'role_id' => 'freelancer',
                    'type' => 'earning_badge',
                    'name' => 'Level Two',
                    'value' => 10000.0,
                    'icon' => '142',
                    'created_at' => '2023-07-06 20:44:33',
                    'updated_at' => '2023-07-06 20:44:33',
                    'deleted_at' => NULL,
                ),
            3 =>
                array(
                    'id' => 4,
                    'role_id' => 'freelancer',
                    'type' => 'earning_badge',
                    'name' => 'Top Rated Seller',
                    'value' => 15000.0,
                    'icon' => '143',
                    'created_at' => '2023-07-06 20:45:52',
                    'updated_at' => '2023-07-06 20:45:52',
                    'deleted_at' => NULL,
                ),
        ));
    }
}
