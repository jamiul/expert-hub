<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class ProjectCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_categories')->delete();

        DB::table('project_categories')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'name' => 'Humanities scholarship',
                    'parent_id' => 0,
                    'photo' => '1',
                    'description' => NULL,
                    'slug' => 'humanities-scholarship-NHpLu',
                    'created_at' => '2022-11-14 22:55:51',
                    'updated_at' => '2023-05-21 17:27:09',
                    'deleted_at' => '2023-05-21 17:27:09',
                ),
            1 =>
                array(
                    'id' => 2,
                    'name' => 'Social science scholarship',
                    'parent_id' => 0,
                    'photo' => '1',
                    'description' => NULL,
                    'slug' => 'social-science-scholarship-wYLBZ',
                    'created_at' => '2022-11-14 22:56:34',
                    'updated_at' => '2023-05-21 17:27:02',
                    'deleted_at' => '2023-05-21 17:27:02',
                ),
            2 =>
                array(
                    'id' => 3,
                    'name' => 'Medical scholarship',
                    'parent_id' => 0,
                    'photo' => '1',
                    'description' => NULL,
                    'slug' => 'medical-scholarship-qlgAL',
                    'created_at' => '2022-11-14 22:56:59',
                    'updated_at' => '2023-05-21 17:26:53',
                    'deleted_at' => '2023-05-21 17:26:53',
                ),
            3 =>
                array(
                    'id' => 4,
                    'name' => 'Engineering scholarship',
                    'parent_id' => 0,
                    'photo' => '1',
                    'description' => NULL,
                    'slug' => 'engineering-scholarship-9J5Pl',
                    'created_at' => '2022-11-14 22:57:20',
                    'updated_at' => '2023-05-21 17:26:46',
                    'deleted_at' => '2023-05-21 17:26:46',
                ),
            4 =>
                array(
                    'id' => 5,
                    'name' => 'Business scholarship',
                    'parent_id' => 0,
                    'photo' => '1',
                    'description' => NULL,
                    'slug' => 'business-scholarship-braaZ',
                    'created_at' => '2022-11-14 22:57:51',
                    'updated_at' => '2023-05-21 17:26:37',
                    'deleted_at' => '2023-05-21 17:26:37',
                ),
            5 =>
                array(
                    'id' => 6,
                    'name' => 'Science scholarship',
                    'parent_id' => 0,
                    'photo' => '1',
                    'description' => NULL,
                    'slug' => 'science-scholarship-h7Gm0',
                    'created_at' => '2022-11-14 22:58:11',
                    'updated_at' => '2023-05-21 17:26:26',
                    'deleted_at' => '2023-05-21 17:26:26',
                ),
            6 =>
                array(
                    'id' => 7,
                    'name' => 'Arts scholarship',
                    'parent_id' => 0,
                    'photo' => '1',
                    'description' => NULL,
                    'slug' => 'arts-scholarship-2VwR3',
                    'created_at' => '2023-04-09 19:14:06',
                    'updated_at' => '2023-05-21 17:26:12',
                    'deleted_at' => '2023-05-21 17:26:12',
                ),
            7 =>
                array(
                    'id' => 8,
                    'name' => 'Education scholarship',
                    'parent_id' => 0,
                    'photo' => '1',
                    'description' => NULL,
                    'slug' => 'education-scholarship-xyYiR',
                    'created_at' => '2023-04-09 19:14:21',
                    'updated_at' => '2023-05-21 17:27:18',
                    'deleted_at' => '2023-05-21 17:27:18',
                ),
            8 =>
                array(
                    'id' => 9,
                    'name' => 'Mentoring and Tutoring',
                    'parent_id' => 0,
                    'photo' => '195',
                    'description' => 'Reach me out to get assistance in your project, I am an experience consultant',
                    'slug' => 'mentoring-and-tutoring-vxtMH',
                    'created_at' => '2023-04-09 19:14:39',
                    'updated_at' => '2023-09-14 12:20:08',
                    'deleted_at' => NULL,
                ),
            9 =>
                array(
                    'id' => 10,
                    'name' => 'Scholarship Applications',
                    'parent_id' => 0,
                    'photo' => '197',
                    'description' => 'I am ready to serve you anything related you scholarship applications.',
                    'slug' => 'scholarship-applications-oR5Kp',
                    'created_at' => '2023-04-09 19:14:55',
                    'updated_at' => '2023-09-14 12:19:23',
                    'deleted_at' => NULL,
                ),
            10 =>
                array(
                    'id' => 11,
                    'name' => 'Transcription and Translation',
                    'parent_id' => 0,
                    'photo' => '198',
                    'description' => 'I have a 20 years translation experiences in various field , you can reach me out.',
                    'slug' => 'transcription-and-translation-jSQgP',
                    'created_at' => '2023-04-09 19:15:19',
                    'updated_at' => '2023-09-14 12:17:10',
                    'deleted_at' => NULL,
                ),
            11 =>
                array(
                    'id' => 12,
                    'name' => 'Research and Analysis',
                    'parent_id' => 0,
                    'photo' => '196',
                    'description' => 'Based on my industry experience, I can give you the best assistance in your desire scope',
                    'slug' => 'research-and-analysis-XcJPo',
                    'created_at' => '2023-04-09 19:15:36',
                    'updated_at' => '2023-09-14 12:16:44',
                    'deleted_at' => NULL,
                ),
            12 =>
                array(
                    'id' => 13,
                    'name' => 'Writing and Editing',
                    'parent_id' => 0,
                    'photo' => '199',
                    'description' => 'Reach me out to get assistance in your project, I am an experience consultant',
                    'slug' => 'writing-and-editing-KNO9z',
                    'created_at' => '2023-04-09 19:15:52',
                    'updated_at' => '2023-09-14 12:15:35',
                    'deleted_at' => NULL,
                ),
            13 =>
                array(
                    'id' => 14,
                    'name' => 'Learning Management Systems',
                    'parent_id' => 0,
                    'photo' => '194',
                    'description' => 'Based on my research experience, I can give you the best assistance in your desire scope',
                    'slug' => 'learning-management-systems-EoNDz',
                    'created_at' => '2023-04-09 19:16:10',
                    'updated_at' => '2023-09-14 12:08:06',
                    'deleted_at' => NULL,
                ),
            14 =>
                array(
                    'id' => 15,
                    'name' => 'Curriculum Development',
                    'parent_id' => 0,
                    'photo' => '193',
                    'description' => 'If you need anything related course curriculum development assistance, you can reach me out.',
                    'slug' => 'curriculum-development-52IFp',
                    'created_at' => '2023-04-09 19:16:28',
                    'updated_at' => '2023-09-14 12:04:19',
                    'deleted_at' => NULL,
                ),
            15 =>
                array(
                    'id' => 16,
                    'name' => 'Education Course Accreditations',
                    'parent_id' => 0,
                    'photo' => '199',
                    'description' => 'I am ready to serve you anything course related academics help. Don\'t hesitate me to contact.',
                    'slug' => 'education-course-accreditations-5r9wy',
                    'created_at' => '2023-04-09 19:17:00',
                    'updated_at' => '2023-09-14 12:49:51',
                    'deleted_at' => NULL,
                ),
            16 =>
                array(
                    'id' => 17,
                    'name' => 'University research',
                    'parent_id' => 0,
                    'photo' => '201',
                    'description' => 'dfdsfsd',
                    'slug' => 'university-research-WOLeS',
                    'created_at' => '2023-09-14 18:43:45',
                    'updated_at' => '2023-09-14 18:58:36',
                    'deleted_at' => '2023-09-14 18:58:36',
                ),
            17 =>
                array(
                    'id' => 18,
                    'name' => 'Writing and Editing',
                    'parent_id' => 0,
                    'photo' => '205',
                    'description' => 'Reach me out to get assistance in your project, I am an experience consultant',
                    'slug' => 'writing-and-editing-2FZJT',
                    'created_at' => '2023-09-17 15:55:08',
                    'updated_at' => '2023-09-17 15:55:44',
                    'deleted_at' => '2023-09-17 15:55:44',
                ),
            18 =>
                array(
                    'id' => 19,
                    'name' => 'Scholarships',
                    'parent_id' => 0,
                    'photo' => '205',
                    'description' => 'Scholarships',
                    'slug' => 'scholarships',
                    'created_at' => '2023-11-13 15:55:08',
                    'updated_at' => '2023-11-13 15:55:44',
                    'deleted_at' => NULL,
                ),
            19 =>
                array(
                    'id' => 20,
                    'name' => 'SmartPLS',
                    'parent_id' => 12,
                    'photo' => '205',
                    'description' => 'SmartPLS',
                    'slug' => 'smart-pls',
                    'created_at' => '2023-11-13 15:55:08',
                    'updated_at' => '2023-11-13 15:55:44',
                    'deleted_at' => NULL,
                ),
            20 =>
                array(
                    'id' => 21,
                    'name' => 'SPSS',
                    'parent_id' => 12,
                    'photo' => '205',
                    'description' => 'SPSS',
                    'slug' => 'spss',
                    'created_at' => '2023-11-13 15:55:08',
                    'updated_at' => '2023-11-13 15:55:44',
                    'deleted_at' => NULL,
                ),
            21 =>
                array(
                    'id' => 22,
                    'name' => 'LMS Administration',
                    'parent_id' => 12,
                    'photo' => '205',
                    'description' => 'LMS Administration',
                    'slug' => 'lms-administration',
                    'created_at' => '2023-11-13 15:55:08',
                    'updated_at' => '2023-11-13 15:55:44',
                    'deleted_at' => NULL,
                ),
            22 =>
                array(
                    'id' => 23,
                    'name' => 'HDR Thesis Writing',
                    'parent_id' => 13,
                    'photo' => '205',
                    'description' => 'HDR Thesis Writing',
                    'slug' => 'lms-administration',
                    'created_at' => '2023-11-13 15:55:08',
                    'updated_at' => '2023-11-13 15:55:44',
                    'deleted_at' => NULL,
                ),
            23 =>
                array(
                    'id' => 24,
                    'name' => 'HDR Scholarships',
                    'parent_id' => 19,
                    'photo' => '205',
                    'description' => 'HDR Scholarships',
                    'slug' => 'hdr-scholarships',
                    'created_at' => '2023-11-13 15:55:08',
                    'updated_at' => '2023-11-13 15:55:44',
                    'deleted_at' => NULL,
                ),
        ));
    }
}
