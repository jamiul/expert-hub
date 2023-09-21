<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class SeminarModesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('seminar_modes')->delete();

        DB::table('seminar_modes')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'name' => 'Live via Zoom',
                    'slug' => 'live-via-zoom',
                    'deleted_at' => NULL,
                    'created_at' => '2023-08-22 16:59:23',
                    'updated_at' => '2023-08-22 16:59:23',
                ),
            1 =>
                array(
                    'id' => 2,
                    'name' => 'Face-to-Face',
                    'slug' => 'face-to-face',
                    'deleted_at' => NULL,
                    'created_at' => '2023-08-22 16:59:34',
                    'updated_at' => '2023-08-22 16:59:34',
                ),
        ));
    }
}
