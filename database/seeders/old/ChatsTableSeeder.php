<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class ChatsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('chats')->delete();

        DB::table('chats')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'chat_thread_id' => 1,
                    'sender_user_id' => 5,
                    'message' => 'Hi there',
                    'attachment' => NULL,
                    'seen' => 1,
                    'created_at' => '2023-04-06 12:52:33',
                    'updated_at' => '2023-04-06 12:54:07',
                    'deleted_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 2,
                    'chat_thread_id' => 1,
                    'sender_user_id' => 5,
                    'message' => 'are you done!',
                    'attachment' => NULL,
                    'seen' => 1,
                    'created_at' => '2023-04-06 12:52:56',
                    'updated_at' => '2023-04-06 12:54:07',
                    'deleted_at' => NULL,
                ),
            2 =>
                array(
                    'id' => 3,
                    'chat_thread_id' => 1,
                    'sender_user_id' => 4,
                    'message' => 'Yes I am ok',
                    'attachment' => NULL,
                    'seen' => 1,
                    'created_at' => '2023-04-06 12:54:15',
                    'updated_at' => '2023-04-06 16:44:28',
                    'deleted_at' => NULL,
                ),
            3 =>
                array(
                    'id' => 4,
                    'chat_thread_id' => 1,
                    'sender_user_id' => 5,
                    'message' => 'Hi, raihan, you are okey with my requirements?',
                    'attachment' => NULL,
                    'seen' => 1,
                    'created_at' => '2023-04-06 16:45:12',
                    'updated_at' => '2023-04-06 17:13:25',
                    'deleted_at' => NULL,
                ),
            4 =>
                array(
                    'id' => 5,
                    'chat_thread_id' => 1,
                    'sender_user_id' => 4,
                    'message' => 'Yes, so far clear.',
                    'attachment' => NULL,
                    'seen' => 1,
                    'created_at' => '2023-04-06 17:13:38',
                    'updated_at' => '2023-04-06 18:04:17',
                    'deleted_at' => NULL,
                ),
            5 =>
                array(
                    'id' => 6,
                    'chat_thread_id' => 1,
                    'sender_user_id' => 5,
                    'message' => 'okey, will let you know!',
                    'attachment' => NULL,
                    'seen' => 1,
                    'created_at' => '2023-04-06 18:04:30',
                    'updated_at' => '2023-04-12 15:21:20',
                    'deleted_at' => NULL,
                ),
            6 =>
                array(
                    'id' => 7,
                    'chat_thread_id' => 2,
                    'sender_user_id' => 5,
                    'message' => 'Hello',
                    'attachment' => NULL,
                    'seen' => 1,
                    'created_at' => '2023-04-17 10:28:49',
                    'updated_at' => '2023-05-11 14:15:40',
                    'deleted_at' => NULL,
                ),
            7 =>
                array(
                    'id' => 8,
                    'chat_thread_id' => 3,
                    'sender_user_id' => 23,
                    'message' => 'Hi',
                    'attachment' => NULL,
                    'seen' => 1,
                    'created_at' => '2023-07-05 13:29:40',
                    'updated_at' => '2023-07-05 13:31:39',
                    'deleted_at' => NULL,
                ),
            8 =>
                array(
                    'id' => 9,
                    'chat_thread_id' => 3,
                    'sender_user_id' => 23,
                    'message' => 'are you rady for my project?',
                    'attachment' => NULL,
                    'seen' => 1,
                    'created_at' => '2023-07-05 13:29:51',
                    'updated_at' => '2023-07-05 13:31:39',
                    'deleted_at' => NULL,
                ),
            9 =>
                array(
                    'id' => 10,
                    'chat_thread_id' => 3,
                    'sender_user_id' => 6,
                    'message' => 'Yes i rady',
                    'attachment' => NULL,
                    'seen' => 1,
                    'created_at' => '2023-07-05 13:31:47',
                    'updated_at' => '2023-07-05 13:31:52',
                    'deleted_at' => NULL,
                ),
            10 =>
                array(
                    'id' => 11,
                    'chat_thread_id' => 3,
                    'sender_user_id' => 23,
                    'message' => 'Ok i will hire you',
                    'attachment' => NULL,
                    'seen' => 1,
                    'created_at' => '2023-07-05 13:32:08',
                    'updated_at' => '2023-07-05 13:32:13',
                    'deleted_at' => NULL,
                ),
            11 =>
                array(
                    'id' => 12,
                    'chat_thread_id' => 3,
                    'sender_user_id' => 6,
                    'message' => 'thank you so much. InshaAllah you work i will softly',
                    'attachment' => NULL,
                    'seen' => 1,
                    'created_at' => '2023-07-05 13:32:57',
                    'updated_at' => '2023-07-05 13:37:57',
                    'deleted_at' => NULL,
                ),
            12 =>
                array(
                    'id' => 13,
                    'chat_thread_id' => 3,
                    'sender_user_id' => 23,
                    'message' => 'ok thank you. I was paid you payment',
                    'attachment' => NULL,
                    'seen' => 1,
                    'created_at' => '2023-07-05 13:38:09',
                    'updated_at' => '2023-07-05 13:41:41',
                    'deleted_at' => NULL,
                ),
        ));
    }
}
