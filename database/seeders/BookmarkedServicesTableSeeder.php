<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class BookmarkedServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookmarked_services')->delete();

        DB::table('bookmarked_services')->insert(array(
            0 =>
                array(
                    'id' => 9,
                    'user_id' => 5,
                    'service_id' => 1,
                    'created_at' => '2023-07-12 20:12:08',
                    'updated_at' => '2023-07-12 20:12:08',
                    'deleted_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 10,
                    'user_id' => 5,
                    'service_id' => 6,
                    'created_at' => '2023-07-12 20:14:36',
                    'updated_at' => '2023-07-12 20:14:36',
                    'deleted_at' => NULL,
                ),
        ));
    }
}
