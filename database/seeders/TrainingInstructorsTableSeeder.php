<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class TrainingInstructorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('training_instructors')->delete();

        DB::table('training_instructors')->insert(array(
            0 =>
                array(
                    'id' => 3,
                    'user_id' => 4,
                    'training_id' => 3,
                    'created_at' => '2023-09-05 11:26:18',
                    'updated_at' => '2023-09-05 11:26:18',
                ),
            1 =>
                array(
                    'id' => 4,
                    'user_id' => 16,
                    'training_id' => 3,
                    'created_at' => '2023-09-05 11:26:18',
                    'updated_at' => '2023-09-05 11:26:18',
                ),
            2 =>
                array(
                    'id' => 5,
                    'user_id' => 8,
                    'training_id' => 4,
                    'created_at' => '2023-09-05 11:43:14',
                    'updated_at' => '2023-09-05 11:43:14',
                ),
            3 =>
                array(
                    'id' => 6,
                    'user_id' => 14,
                    'training_id' => 4,
                    'created_at' => '2023-09-05 11:43:14',
                    'updated_at' => '2023-09-05 11:43:14',
                ),
            4 =>
                array(
                    'id' => 7,
                    'user_id' => 8,
                    'training_id' => 5,
                    'created_at' => '2023-09-05 11:44:37',
                    'updated_at' => '2023-09-05 11:44:37',
                ),
            5 =>
                array(
                    'id' => 8,
                    'user_id' => 14,
                    'training_id' => 5,
                    'created_at' => '2023-09-05 11:44:37',
                    'updated_at' => '2023-09-05 11:44:37',
                ),
            6 =>
                array(
                    'id' => 9,
                    'user_id' => 6,
                    'training_id' => 6,
                    'created_at' => '2023-09-05 11:46:05',
                    'updated_at' => '2023-09-05 11:46:05',
                ),
            7 =>
                array(
                    'id' => 10,
                    'user_id' => 14,
                    'training_id' => 6,
                    'created_at' => '2023-09-05 11:46:05',
                    'updated_at' => '2023-09-05 11:46:05',
                ),
            8 =>
                array(
                    'id' => 11,
                    'user_id' => 11,
                    'training_id' => 6,
                    'created_at' => '2023-09-05 11:46:05',
                    'updated_at' => '2023-09-05 11:46:05',
                ),
            9 =>
                array(
                    'id' => 30,
                    'user_id' => 4,
                    'training_id' => 1,
                    'created_at' => '2023-09-18 20:12:20',
                    'updated_at' => '2023-09-18 20:12:20',
                ),
            10 =>
                array(
                    'id' => 31,
                    'user_id' => 6,
                    'training_id' => 1,
                    'created_at' => '2023-09-18 20:12:20',
                    'updated_at' => '2023-09-18 20:12:20',
                ),
        ));
    }
}
