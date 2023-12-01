<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class TrainingSoftwareTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('training_software')->delete();

        DB::table('training_software')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'name' => 'R',
                    'slug' => 'r',
                    'deleted_at' => NULL,
                    'created_at' => '2023-08-22 17:04:31',
                    'updated_at' => '2023-08-22 17:04:31',
                ),
            1 =>
                array(
                    'id' => 2,
                    'name' => 'AMOS',
                    'slug' => 'amos',
                    'deleted_at' => NULL,
                    'created_at' => '2023-08-22 17:05:08',
                    'updated_at' => '2023-08-22 17:05:08',
                ),
        ));
    }
}
