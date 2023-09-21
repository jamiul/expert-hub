<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class ParentSkillsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('parent_skills')->delete();

        DB::table('parent_skills')->insert(array(
            0 =>
                array(
                    'id' => 48,
                    'name' => 'Mentoring and Tutoring',
                    'created_at' => '2023-07-24 15:43:42',
                    'updated_at' => '2023-07-25 13:37:15',
                    'deleted_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 49,
                    'name' => 'Scholarship Applications',
                    'created_at' => '2023-07-24 15:44:01',
                    'updated_at' => '2023-07-25 13:37:01',
                    'deleted_at' => NULL,
                ),
            2 =>
                array(
                    'id' => 50,
                    'name' => 'Transcription and Translation',
                    'created_at' => '2023-07-24 15:44:16',
                    'updated_at' => '2023-07-25 13:36:46',
                    'deleted_at' => NULL,
                ),
            3 =>
                array(
                    'id' => 51,
                    'name' => 'Research and Analysis',
                    'created_at' => '2023-07-24 15:44:25',
                    'updated_at' => '2023-07-25 13:35:48',
                    'deleted_at' => NULL,
                ),
            4 =>
                array(
                    'id' => 52,
                    'name' => 'Writing and Editing',
                    'created_at' => '2023-07-24 15:44:35',
                    'updated_at' => '2023-07-25 13:35:29',
                    'deleted_at' => NULL,
                ),
            5 =>
                array(
                    'id' => 53,
                    'name' => 'Learning Management Systems',
                    'created_at' => '2023-07-24 15:44:44',
                    'updated_at' => '2023-07-25 13:35:08',
                    'deleted_at' => NULL,
                ),
            6 =>
                array(
                    'id' => 54,
                    'name' => 'Curriculum Development',
                    'created_at' => '2023-07-24 15:44:53',
                    'updated_at' => '2023-07-25 13:34:51',
                    'deleted_at' => NULL,
                ),
            7 =>
                array(
                    'id' => 55,
                    'name' => 'Course Accreditations',
                    'created_at' => '2023-07-24 15:45:21',
                    'updated_at' => '2023-07-25 13:33:16',
                    'deleted_at' => NULL,
                ),
        ));
    }
}
