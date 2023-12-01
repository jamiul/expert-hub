<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class BookmarkedClientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookmarked_clients')->delete();

        DB::table('bookmarked_clients')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'user_id' => 8,
                    'client_user_id' => 9,
                    'created_at' => '2023-04-06 18:00:00',
                    'updated_at' => '2023-04-06 18:00:00',
                    'deleted_at' => NULL,
                ),
        ));
    }
}
