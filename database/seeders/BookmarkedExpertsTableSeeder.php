<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class BookmarkedExpertsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookmarked_experts')->delete();

        DB::table('bookmarked_experts')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'user_id' => 5,
                    'expert_user_id' => 6,
                    'created_at' => '2023-04-15 06:33:24',
                    'updated_at' => '2023-04-15 06:33:24',
                    'deleted_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 2,
                    'user_id' => 5,
                    'expert_user_id' => 12,
                    'created_at' => '2023-04-15 06:33:34',
                    'updated_at' => '2023-04-15 06:33:34',
                    'deleted_at' => NULL,
                ),
            2 =>
                array(
                    'id' => 3,
                    'user_id' => 5,
                    'expert_user_id' => 14,
                    'created_at' => '2023-04-15 06:33:43',
                    'updated_at' => '2023-04-15 06:33:43',
                    'deleted_at' => NULL,
                ),
        ));
    }
}
