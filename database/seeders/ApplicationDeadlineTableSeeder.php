<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;


class ApplicationDeadlineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run(): void
    {
        DB::table('application_deadlines')->delete();

        DB::table('application_deadlines')->insert(array(
            0 =>
            array(
                'id' => 1,
                'scholarship_id' => 1,
                'start_date' => '2024-01-23',
                'end_date' => '2024-04-30',
                'created_at' => '2023-04-13 18:12:28',
                'updated_at' => '2023-07-06 20:37:01',
            ),
            1 =>
            array(
                'id' => 2,
                'scholarship_id' => 2,
                'start_date' => '2024-01-08',
                'end_date' => '2024-03-30',
                'created_at' => '2023-04-13 18:12:28',
                'updated_at' => '2023-07-06 20:37:01',
            ),
            2 =>
            array(
                'id' => 3,
                'scholarship_id' => 3,
                'start_date' => '2024-04-08',
                'end_date' => '2024-05-30',
                'created_at' => '2023-04-13 18:12:28',
                'updated_at' => '2023-07-06 20:37:01',
            ),
            3 =>
            array(
                'id' => 4,
                'scholarship_id' => 4,
                'start_date' => '2024-06-08',
                'end_date' => '2024-07-30',
                'created_at' => '2023-04-13 18:12:28',
                'updated_at' => '2023-07-06 20:37:01',
            ),
        ));
    }
}
