<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->delete();

        DB::table('reviews')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'project_id' => 3,
                    'reviewer_user_id' => 9,
                    'reviewed_user_id' => 8,
                    'reviewed_user_role_id' => 2,
                    'review' => 'great job raihanul..',
                    'rating' => 5.0,
                    'published' => 1,
                    'created_at' => '2023-04-15 18:06:39',
                    'updated_at' => '2023-04-15 18:06:39',
                    'deleted_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 2,
                    'project_id' => 12,
                    'reviewer_user_id' => 23,
                    'reviewed_user_id' => 6,
                    'reviewed_user_role_id' => 2,
                    'review' => 'Good. I am so happy.',
                    'rating' => 5.0,
                    'published' => 1,
                    'created_at' => '2023-07-05 13:38:52',
                    'updated_at' => '2023-07-05 13:38:52',
                    'deleted_at' => NULL,
                ),
            2 =>
                array(
                    'id' => 3,
                    'project_id' => 12,
                    'reviewer_user_id' => 6,
                    'reviewed_user_id' => 23,
                    'reviewed_user_role_id' => 3,
                    'review' => 'Good client , I am so happy for you.',
                    'rating' => 5.0,
                    'published' => 1,
                    'created_at' => '2023-07-05 13:39:28',
                    'updated_at' => '2023-07-05 13:39:28',
                    'deleted_at' => NULL,
                ),
            3 =>
                array(
                    'id' => 4,
                    'project_id' => 13,
                    'reviewer_user_id' => 5,
                    'reviewed_user_id' => 4,
                    'reviewed_user_role_id' => 2,
                    'review' => 'This man is very cool and good man.',
                    'rating' => 4.0,
                    'published' => 1,
                    'created_at' => '2023-07-24 11:58:06',
                    'updated_at' => '2023-07-24 11:58:06',
                    'deleted_at' => NULL,
                ),
            4 =>
                array(
                    'id' => 5,
                    'project_id' => 13,
                    'reviewer_user_id' => 4,
                    'reviewed_user_id' => 5,
                    'reviewed_user_role_id' => 3,
                    'review' => 'This client is a very good person',
                    'rating' => 5.0,
                    'published' => 1,
                    'created_at' => '2023-07-24 11:58:53',
                    'updated_at' => '2023-07-24 11:58:53',
                    'deleted_at' => NULL,
                ),
        ));
    }
}
