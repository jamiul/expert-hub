<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class VerificationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('verifications')->delete();

        DB::table('verifications')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'type' => 'identity_verification',
                    'user_id' => 11,
                    'role_id' => NULL,
                    'attachment' => '30',
                    'verified' => 0,
                    'created_at' => '2023-04-07 09:22:21',
                    'updated_at' => '2023-04-07 09:22:21',
                    'deleted_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 2,
                    'type' => 'identity_verification',
                    'user_id' => 14,
                    'role_id' => NULL,
                    'attachment' => '68',
                    'verified' => 0,
                    'created_at' => '2023-04-14 12:48:12',
                    'updated_at' => '2023-04-14 12:48:12',
                    'deleted_at' => NULL,
                ),
        ));
    }
}
