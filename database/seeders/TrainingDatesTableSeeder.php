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
                    'training_date' => '2023-08-28 00:00:00',
                    'descriptions' => 'OK',
                    'created_at' => '2023-08-27 14:54:11',
                    'updated_at' => '2023-09-14 15:59:12',
                    'deleted_at' => '2023-09-14 15:59:12',
                ),
            1 =>
                array(
                    'id' => 2,
                    'training_id' => 1,
                    'training_date' => '2023-08-31 00:00:00',
                    'descriptions' => '',
                    'created_at' => '2023-08-28 17:00:47',
                    'updated_at' => '2023-09-14 15:59:12',
                    'deleted_at' => '2023-09-14 15:59:12',
                ),
            2 =>
                array(
                    'id' => 3,
                    'training_id' => 2,
                    'training_date' => '2023-08-29 00:00:00',
                    'descriptions' => '',
                    'created_at' => '2023-08-28 17:03:13',
                    'updated_at' => '2023-09-19 18:31:49',
                    'deleted_at' => '2023-09-19 18:31:49',
                ),
            3 =>
                array(
                    'id' => 4,
                    'training_id' => 3,
                    'training_date' => '2023-08-31 00:00:00',
                    'descriptions' => '',
                    'created_at' => '2023-08-29 16:34:33',
                    'updated_at' => '2023-08-29 16:34:33',
                    'deleted_at' => NULL,
                ),
            4 =>
                array(
                    'id' => 5,
                    'training_id' => 2,
                    'training_date' => '2023-09-05 00:00:00',
                    'descriptions' => '',
                    'created_at' => '2023-09-04 18:01:37',
                    'updated_at' => '2023-09-19 18:31:49',
                    'deleted_at' => '2023-09-19 18:31:49',
                ),
            5 =>
                array(
                    'id' => 6,
                    'training_id' => 6,
                    'training_date' => '2023-09-06 00:00:00',
                    'descriptions' => '',
                    'created_at' => '2023-09-05 11:46:05',
                    'updated_at' => '2023-09-05 11:46:05',
                    'deleted_at' => NULL,
                ),
            6 =>
                array(
                    'id' => 7,
                    'training_id' => 1,
                    'training_date' => '2023-08-28 00:00:00',
                    'descriptions' => 'OK',
                    'created_at' => '2023-09-14 15:59:12',
                    'updated_at' => '2023-09-14 15:59:54',
                    'deleted_at' => '2023-09-14 15:59:54',
                ),
            7 =>
                array(
                    'id' => 8,
                    'training_id' => 1,
                    'training_date' => '2023-08-31 00:00:00',
                    'descriptions' => '',
                    'created_at' => '2023-09-14 15:59:12',
                    'updated_at' => '2023-09-14 15:59:54',
                    'deleted_at' => '2023-09-14 15:59:54',
                ),
            8 =>
                array(
                    'id' => 9,
                    'training_id' => 1,
                    'training_date' => '2023-08-28 00:00:00',
                    'descriptions' => 'OK',
                    'created_at' => '2023-09-14 15:59:54',
                    'updated_at' => '2023-09-18 19:11:44',
                    'deleted_at' => '2023-09-18 19:11:44',
                ),
            9 =>
                array(
                    'id' => 10,
                    'training_id' => 1,
                    'training_date' => '2023-08-31 00:00:00',
                    'descriptions' => '',
                    'created_at' => '2023-09-14 15:59:54',
                    'updated_at' => '2023-09-18 19:11:44',
                    'deleted_at' => '2023-09-18 19:11:44',
                ),
            10 =>
                array(
                    'id' => 11,
                    'training_id' => 1,
                    'training_date' => '2023-08-28 00:00:00',
                    'descriptions' => 'OK',
                    'created_at' => '2023-09-18 19:11:44',
                    'updated_at' => '2023-09-18 19:13:43',
                    'deleted_at' => '2023-09-18 19:13:43',
                ),
            11 =>
                array(
                    'id' => 12,
                    'training_id' => 1,
                    'training_date' => '2023-08-31 00:00:00',
                    'descriptions' => '',
                    'created_at' => '2023-09-18 19:11:44',
                    'updated_at' => '2023-09-18 19:13:43',
                    'deleted_at' => '2023-09-18 19:13:43',
                ),
            12 =>
                array(
                    'id' => 13,
                    'training_id' => 1,
                    'training_date' => '2023-08-28 00:00:00',
                    'descriptions' => 'OK',
                    'created_at' => '2023-09-18 19:13:43',
                    'updated_at' => '2023-09-18 19:14:19',
                    'deleted_at' => '2023-09-18 19:14:19',
                ),
            13 =>
                array(
                    'id' => 14,
                    'training_id' => 1,
                    'training_date' => '2023-08-31 00:00:00',
                    'descriptions' => '',
                    'created_at' => '2023-09-18 19:13:43',
                    'updated_at' => '2023-09-18 19:14:19',
                    'deleted_at' => '2023-09-18 19:14:19',
                ),
            14 =>
                array(
                    'id' => 15,
                    'training_id' => 1,
                    'training_date' => '2023-08-28 00:00:00',
                    'descriptions' => 'OK',
                    'created_at' => '2023-09-18 19:14:19',
                    'updated_at' => '2023-09-18 19:15:25',
                    'deleted_at' => '2023-09-18 19:15:25',
                ),
            15 =>
                array(
                    'id' => 16,
                    'training_id' => 1,
                    'training_date' => '2023-08-31 00:00:00',
                    'descriptions' => '',
                    'created_at' => '2023-09-18 19:14:19',
                    'updated_at' => '2023-09-18 19:15:25',
                    'deleted_at' => '2023-09-18 19:15:25',
                ),
            16 =>
                array(
                    'id' => 17,
                    'training_id' => 1,
                    'training_date' => '2023-08-28 00:00:00',
                    'descriptions' => 'OK',
                    'created_at' => '2023-09-18 19:15:25',
                    'updated_at' => '2023-09-18 20:10:08',
                    'deleted_at' => '2023-09-18 20:10:08',
                ),
            17 =>
                array(
                    'id' => 18,
                    'training_id' => 1,
                    'training_date' => '2023-08-31 00:00:00',
                    'descriptions' => '',
                    'created_at' => '2023-09-18 19:15:25',
                    'updated_at' => '2023-09-18 20:10:08',
                    'deleted_at' => '2023-09-18 20:10:08',
                ),
            18 =>
                array(
                    'id' => 19,
                    'training_id' => 1,
                    'training_date' => '2023-08-28 00:00:00',
                    'descriptions' => 'OK',
                    'created_at' => '2023-09-18 20:10:08',
                    'updated_at' => '2023-09-18 20:11:36',
                    'deleted_at' => '2023-09-18 20:11:36',
                ),
            19 =>
                array(
                    'id' => 20,
                    'training_id' => 1,
                    'training_date' => '2023-08-31 00:00:00',
                    'descriptions' => '',
                    'created_at' => '2023-09-18 20:10:08',
                    'updated_at' => '2023-09-18 20:11:36',
                    'deleted_at' => '2023-09-18 20:11:36',
                ),
            20 =>
                array(
                    'id' => 21,
                    'training_id' => 1,
                    'training_date' => '2023-08-28 00:00:00',
                    'descriptions' => 'OK',
                    'created_at' => '2023-09-18 20:11:36',
                    'updated_at' => '2023-09-18 20:11:46',
                    'deleted_at' => '2023-09-18 20:11:46',
                ),
            21 =>
                array(
                    'id' => 22,
                    'training_id' => 1,
                    'training_date' => '2023-08-31 00:00:00',
                    'descriptions' => '',
                    'created_at' => '2023-09-18 20:11:36',
                    'updated_at' => '2023-09-18 20:11:46',
                    'deleted_at' => '2023-09-18 20:11:46',
                ),
            22 =>
                array(
                    'id' => 23,
                    'training_id' => 1,
                    'training_date' => '2023-08-28 00:00:00',
                    'descriptions' => 'OK',
                    'created_at' => '2023-09-18 20:11:46',
                    'updated_at' => '2023-09-18 20:12:20',
                    'deleted_at' => '2023-09-18 20:12:20',
                ),
            23 =>
                array(
                    'id' => 24,
                    'training_id' => 1,
                    'training_date' => '2023-08-31 00:00:00',
                    'descriptions' => '',
                    'created_at' => '2023-09-18 20:11:46',
                    'updated_at' => '2023-09-18 20:12:20',
                    'deleted_at' => '2023-09-18 20:12:20',
                ),
            24 =>
                array(
                    'id' => 25,
                    'training_id' => 1,
                    'training_date' => '2023-08-28 00:00:00',
                    'descriptions' => 'OK',
                    'created_at' => '2023-09-18 20:12:20',
                    'updated_at' => '2023-09-18 20:12:20',
                    'deleted_at' => NULL,
                ),
            25 =>
                array(
                    'id' => 26,
                    'training_id' => 1,
                    'training_date' => '2023-08-31 00:00:00',
                    'descriptions' => '',
                    'created_at' => '2023-09-18 20:12:20',
                    'updated_at' => '2023-09-18 20:12:20',
                    'deleted_at' => NULL,
                ),
            26 =>
                array(
                    'id' => 27,
                    'training_id' => 2,
                    'training_date' => '2023-08-29 00:00:00',
                    'descriptions' => '',
                    'created_at' => '2023-09-19 18:31:49',
                    'updated_at' => '2023-09-19 18:31:49',
                    'deleted_at' => NULL,
                ),
            27 =>
                array(
                    'id' => 28,
                    'training_id' => 2,
                    'training_date' => '2023-09-05 00:00:00',
                    'descriptions' => '',
                    'created_at' => '2023-09-19 18:31:49',
                    'updated_at' => '2023-09-19 18:31:49',
                    'deleted_at' => NULL,
                ),
        ));
    }
}
