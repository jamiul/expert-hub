<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class ChatThreadsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('chat_threads')->delete();

        DB::table('chat_threads')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'thread_code' => '4202304065',
                    'sender_user_id' => 5,
                    'receiver_user_id' => 4,
                    'active' => 1,
                    'interview' => 1,
                    'blocked_by_user' => NULL,
                    'created_at' => '2023-04-06 12:51:34',
                    'updated_at' => '2023-04-06 12:51:34',
                    'deleted_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 2,
                    'thread_code' => '6202304155',
                    'sender_user_id' => 5,
                    'receiver_user_id' => 6,
                    'active' => 1,
                    'interview' => 1,
                    'blocked_by_user' => NULL,
                    'created_at' => '2023-04-15 06:30:58',
                    'updated_at' => '2023-04-15 06:30:58',
                    'deleted_at' => NULL,
                ),
            2 =>
                array(
                    'id' => 3,
                    'thread_code' => '62023070523',
                    'sender_user_id' => 23,
                    'receiver_user_id' => 6,
                    'active' => 1,
                    'interview' => 1,
                    'blocked_by_user' => NULL,
                    'created_at' => '2023-07-05 13:29:24',
                    'updated_at' => '2023-07-05 13:29:24',
                    'deleted_at' => NULL,
                ),
        ));
    }
}
