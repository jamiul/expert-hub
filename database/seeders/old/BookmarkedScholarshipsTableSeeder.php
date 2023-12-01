<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class BookmarkedScholarshipsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookmarked_scholarships')->delete();

        DB::table('bookmarked_scholarships')->insert(array(
            0 =>
                array(
                    'id' => 6,
                    'user_id' => 6,
                    'scholarship_id' => 4,
                    'created_at' => '2023-07-12 01:19:24',
                    'updated_at' => '2023-07-12 01:19:24',
                    'deleted_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 7,
                    'user_id' => 0,
                    'scholarship_id' => 0,
                    'created_at' => '2023-07-11 23:44:06',
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            2 =>
                array(
                    'id' => 8,
                    'user_id' => 6,
                    'scholarship_id' => 7,
                    'created_at' => '2023-07-12 04:39:44',
                    'updated_at' => '2023-07-12 04:39:44',
                    'deleted_at' => NULL,
                ),
        ));
    }
}
