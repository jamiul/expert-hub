<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class TrainingDatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('training_dates')->delete();

        DB::table('training_dates')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'training_id' => 1,
                    'date_start' => '2024-01-23 00:00:00',
                    'date_end' => '2024-04-28 00:00:00',
                    'training_date' => '2024-01-23 00:00:00',
                    'descriptions' => 'OK',
                    'created_at' => '2023-08-27 14:54:11',
                    'updated_at' => '2023-09-14 15:59:12',
                    'deleted_at' => null,
                ),

                1 =>
                array(
                    'id' => 2,
                    'training_id' => 2,
                    'date_start' => '2023-11-30 00:00:00',
                    'date_end' => '2023-12-02 00:00:00',
                    'training_date' => '2023-11-30 00:00:00',
                    'descriptions' => 'OK',
                    'created_at' => '2023-08-27 14:54:11',
                    'updated_at' => '2023-09-14 15:59:12',
                    'deleted_at' => null,
                ),

                2 =>
                array(
                    'id' => 3,
                    'training_id' => 3,
                    'date_start' => '2024-03-01 00:00:00',
                    'date_end' => '2024-03-03 00:00:00',
                    'training_date' => '2024-03-01 00:00:00',
                    'descriptions' => 'OK',
                    'created_at' => '2023-08-27 14:54:11',
                    'updated_at' => '2023-09-14 15:59:12',
                    'deleted_at' => null,
                ),

                3 =>
                array(
                    'id' => 4,
                    'training_id' => 3,
                    'date_start' => '2024-05-10 00:00:00',
                    'date_end' => '2024-05-12 00:00:00',
                    'training_date' => '2024-05-10 00:00:00',
                    'descriptions' => 'OK',
                    'created_at' => '2023-08-27 14:54:11',
                    'updated_at' => '2023-09-14 15:59:12',
                    'deleted_at' => null,
                ),

                4 =>
                array(
                    'id' => 5,
                    'training_id' => 3,
                    'date_start' => '2024-07-12 00:00:00',
                    'date_end' => '2024-07-22 00:00:00',
                    'training_date' => '2024-07-12 00:00:00',
                    'descriptions' => 'OK',
                    'created_at' => '2023-08-27 14:54:11',
                    'updated_at' => '2023-09-14 15:59:12',
                    'deleted_at' => null,
                ),

                5 =>
                array(
                    'id' => 6,
                    'training_id' => 3,
                    'date_start' => '2024-09-15 00:00:00',
                    'date_end' => '2024-09-17 00:00:00',
                    'training_date' => '2024-09-15 00:00:00',
                    'descriptions' => 'OK',
                    'created_at' => '2023-08-27 14:54:11',
                    'updated_at' => '2023-09-14 15:59:12',
                    'deleted_at' => null,
                ),

                6 =>
                array(
                    'id' => 7,
                    'training_id' => 4,
                    'date_start' => '2024-03-15 00:00:00',
                    'date_end' => '2024-03-18 00:00:00',
                    'training_date' => '2024-03-15 00:00:00',
                    'descriptions' => 'OK',
                    'created_at' => '2023-08-27 14:54:11',
                    'updated_at' => '2023-09-14 15:59:12',
                    'deleted_at' => null,
                ),

                7 =>
                array(
                    'id' => 8,
                    'training_id' => 4,
                    'date_start' => '2024-06-10 00:00:00',
                    'date_end' => '2024-06-13 00:00:00',
                    'training_date' => '2024-06-10 00:00:00',
                    'descriptions' => 'OK',
                    'created_at' => '2023-08-27 14:54:11',
                    'updated_at' => '2023-09-14 15:59:12',
                    'deleted_at' => null,
                ),

                8 =>
                array(
                    'id' => 9,
                    'training_id' => 4,
                    'date_start' => '2024-08-12 00:00:00',
                    'date_end' => '2024-08-22 00:00:00',
                    'training_date' => '2024-08-12 00:00:00',
                    'descriptions' => 'OK',
                    'created_at' => '2023-08-27 14:54:11',
                    'updated_at' => '2023-09-14 15:59:12',
                    'deleted_at' => null,
                ),

                9 =>
                array(
                    'id' => 10,
                    'training_id' => 4,
                    'date_start' => '2024-11-12 00:00:00',
                    'date_end' => '2024-11-15 00:00:00',
                    'training_date' => '2024-11-12 00:00:00',
                    'descriptions' => 'OK',
                    'created_at' => '2023-08-27 14:54:11',
                    'updated_at' => '2023-09-14 15:59:12',
                    'deleted_at' => null,
                ),

                10 =>
                array(
                    'id' => 11,
                    'training_id' => 5,
                    'date_start' => '2024-03-5 00:00:00',
                    'date_end' => '2024-03-7 00:00:00',
                    'training_date' => '2024-03-5 00:00:00',
                    'descriptions' => 'OK',
                    'created_at' => '2023-08-27 14:54:11',
                    'updated_at' => '2023-09-14 15:59:12',
                    'deleted_at' => null,
                ),

                11 =>
                array(
                    'id' => 12,
                    'training_id' => 5,
                    'date_start' => '2024-05-15 00:00:00',
                    'date_end' => '2024-05-17 00:00:00',
                    'training_date' => '2024-05-15 00:00:00',
                    'descriptions' => 'OK',
                    'created_at' => '2023-08-27 14:54:11',
                    'updated_at' => '2023-09-14 15:59:12',
                    'deleted_at' => null,
                ),

                12 =>
                array(
                    'id' => 13,
                    'training_id' => 5,
                    'date_start' => '2024-07-10 00:00:00',
                    'date_end' => '2024-07-12 00:00:00',
                    'training_date' => '2024-07-10 00:00:00',
                    'descriptions' => 'OK',
                    'created_at' => '2023-08-27 14:54:11',
                    'updated_at' => '2023-09-14 15:59:12',
                    'deleted_at' => null,
                ),

                13 =>
                array(
                    'id' => 14,
                    'training_id' => 5,
                    'date_start' => '2024-09-25 00:00:00',
                    'date_end' => '2024-09-27 00:00:00',
                    'training_date' => '2024-09-25 00:00:00',
                    'descriptions' => 'OK',
                    'created_at' => '2023-08-27 14:54:11',
                    'updated_at' => '2023-09-14 15:59:12',
                    'deleted_at' => null,
                ),
        ));
    }
}
