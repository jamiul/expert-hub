<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class UserBadgesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_badges')->delete();

        DB::table('user_badges')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'type' => 'earning_badge',
                    'user_id' => 4,
                    'badge_id' => 2,
                    'created_at' => '2023-07-24 11:56:35',
                    'updated_at' => '2023-07-24 11:56:35',
                    'deleted_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 2,
                    'type' => 'earning_badge',
                    'user_id' => 6,
                    'badge_id' => 2,
                    'created_at' => '2023-08-09 20:00:38',
                    'updated_at' => '2023-08-09 20:00:38',
                    'deleted_at' => NULL,
                ),
        ));
    }
}
