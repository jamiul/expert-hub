<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class HireInvitationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('hire_invitations')->delete();

        DB::table('hire_invitations')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'project_id' => 10,
                    'sent_by_user_id' => 5,
                    'sent_to_user_id' => 4,
                    'status' => 'accepted',
                    'created_at' => '2023-04-15 18:15:51',
                    'updated_at' => '2023-07-24 11:46:07',
                    'deleted_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 2,
                    'project_id' => 13,
                    'sent_by_user_id' => 5,
                    'sent_to_user_id' => 4,
                    'status' => 'accepted',
                    'created_at' => '2023-07-24 11:43:04',
                    'updated_at' => '2023-07-24 11:46:26',
                    'deleted_at' => NULL,
                ),
            2 =>
                array(
                    'id' => 3,
                    'project_id' => 19,
                    'sent_by_user_id' => 5,
                    'sent_to_user_id' => 4,
                    'status' => 'pending',
                    'created_at' => '2023-08-02 11:41:56',
                    'updated_at' => '2023-08-02 11:41:56',
                    'deleted_at' => NULL,
                ),
        ));
    }
}
