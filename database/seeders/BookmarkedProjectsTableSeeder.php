<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class BookmarkedProjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookmarked_projects')->delete();

        DB::table('bookmarked_projects')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'user_id' => 6,
                    'project_id' => 11,
                    'created_at' => '2023-07-11 20:17:35',
                    'updated_at' => '2023-07-11 20:17:35',
                    'deleted_at' => NULL,
                ),
        ));
    }
}
