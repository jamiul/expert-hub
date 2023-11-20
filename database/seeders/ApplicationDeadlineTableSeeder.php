<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                'start_date' => '23 January 2024',
                'end_date' => '30 April 2024',
                'created_at' => '2023-04-13 18:12:28',
                'updated_at' => '2023-07-06 20:37:01',
            ),
            1 =>
            array(
                'id' => 2,
                'scholarship_id' => 2,
                'start_date' => '8 January 2024',
                'end_date' => '30 March 2024',
                'created_at' => '2023-04-13 18:12:28',
                'updated_at' => '2023-07-06 20:37:01',
            ),
            2 =>
            array(
                'id' => 3,
                'scholarship_id' => 3,
                'start_date' => '8 April 2024',
                'end_date' => '30 May 2024',
                'created_at' => '2023-04-13 18:12:28',
                'updated_at' => '2023-07-06 20:37:01',
            ),
            3 =>
            array(
                'id' => 4,
                'scholarship_id' => 4,
                'start_date' => '8 June 2024',
                'end_date' => '30 July 2024',
                'created_at' => '2023-04-13 18:12:28',
                'updated_at' => '2023-07-06 20:37:01',
            ),
        ));
    }
}
