<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->delete();

        DB::table('skills')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'parent_skill_id' => 0,
                    'name' => 'Codeigniter',
                    'created_at' => '2019-12-04 05:23:45',
                    'updated_at' => '2020-04-24 03:23:57',
                    'deleted_at' => '2020-04-24 03:23:57',
                ),
            1 =>
                array(
                    'id' => 2,
                    'parent_skill_id' => 0,
                    'name' => 'PayPal API',
                    'created_at' => '2019-12-04 05:28:33',
                    'updated_at' => '2023-04-13 14:14:36',
                    'deleted_at' => '2023-04-13 14:14:36',
                ),
            2 =>
                array(
                    'id' => 3,
                    'parent_skill_id' => 53,
                    'name' => 'UX/UI Designer',
                    'created_at' => '2019-12-04 05:28:43',
                    'updated_at' => '2023-07-25 14:06:24',
                    'deleted_at' => NULL,
                ),
            3 =>
                array(
                    'id' => 4,
                    'parent_skill_id' => 53,
                    'name' => 'Instructional Designer',
                    'created_at' => '2019-12-04 05:28:54',
                    'updated_at' => '2023-07-25 14:06:03',
                    'deleted_at' => NULL,
                ),
            4 =>
                array(
                    'id' => 5,
                    'parent_skill_id' => 53,
                    'name' => 'LMS Developer',
                    'created_at' => '2019-12-04 05:29:00',
                    'updated_at' => '2023-07-25 14:05:36',
                    'deleted_at' => NULL,
                ),
            5 =>
                array(
                    'id' => 6,
                    'parent_skill_id' => 54,
                    'name' => 'Curriculum Assessment Analyst',
                    'created_at' => '2019-12-04 05:29:33',
                    'updated_at' => '2023-07-25 13:58:05',
                    'deleted_at' => NULL,
                ),
            6 =>
                array(
                    'id' => 7,
                    'parent_skill_id' => 54,
                    'name' => 'Curriculum Integration Specialist',
                    'created_at' => '2019-12-12 11:16:00',
                    'updated_at' => '2023-07-25 13:57:37',
                    'deleted_at' => NULL,
                ),
            7 =>
                array(
                    'id' => 8,
                    'parent_skill_id' => 54,
                    'name' => 'Instructional Materials Developer',
                    'created_at' => '2020-02-26 10:11:42',
                    'updated_at' => '2023-07-25 13:57:15',
                    'deleted_at' => NULL,
                ),
            8 =>
                array(
                    'id' => 9,
                    'parent_skill_id' => 54,
                    'name' => 'Curriculum Coordinator',
                    'created_at' => '2020-04-24 03:23:02',
                    'updated_at' => '2023-07-25 13:56:36',
                    'deleted_at' => NULL,
                ),
            9 =>
                array(
                    'id' => 10,
                    'parent_skill_id' => 54,
                    'name' => 'Curriculum Consultant',
                    'created_at' => '2020-04-24 03:24:29',
                    'updated_at' => '2023-07-25 13:56:15',
                    'deleted_at' => NULL,
                ),
            10 =>
                array(
                    'id' => 11,
                    'parent_skill_id' => 54,
                    'name' => 'Curriculum Editor',
                    'created_at' => '2020-04-24 03:26:35',
                    'updated_at' => '2023-07-25 13:55:55',
                    'deleted_at' => NULL,
                ),
            11 =>
                array(
                    'id' => 12,
                    'parent_skill_id' => 54,
                    'name' => 'Curriculum Project Manager',
                    'created_at' => '2020-04-24 03:27:03',
                    'updated_at' => '2023-07-25 13:55:37',
                    'deleted_at' => NULL,
                ),
            12 =>
                array(
                    'id' => 13,
                    'parent_skill_id' => 54,
                    'name' => 'Learning Designer',
                    'created_at' => '2020-04-24 03:27:25',
                    'updated_at' => '2023-07-25 13:55:20',
                    'deleted_at' => NULL,
                ),
            13 =>
                array(
                    'id' => 14,
                    'parent_skill_id' => 54,
                    'name' => 'Assessment Specialist',
                    'created_at' => '2020-04-24 03:27:48',
                    'updated_at' => '2023-07-25 13:54:17',
                    'deleted_at' => NULL,
                ),
            14 =>
                array(
                    'id' => 15,
                    'parent_skill_id' => 54,
                    'name' => 'E-Learning Developer',
                    'created_at' => '2020-04-24 03:28:07',
                    'updated_at' => '2023-07-25 13:53:56',
                    'deleted_at' => NULL,
                ),
            15 =>
                array(
                    'id' => 16,
                    'parent_skill_id' => 54,
                    'name' => 'Educational Specialist',
                    'created_at' => '2020-04-24 03:28:34',
                    'updated_at' => '2023-07-25 13:53:10',
                    'deleted_at' => NULL,
                ),
            16 =>
                array(
                    'id' => 17,
                    'parent_skill_id' => 54,
                    'name' => 'Instructional Technologist',
                    'created_at' => '2020-04-24 03:28:46',
                    'updated_at' => '2023-07-25 13:52:46',
                    'deleted_at' => NULL,
                ),
            17 =>
                array(
                    'id' => 18,
                    'parent_skill_id' => 54,
                    'name' => 'Curriculum Writer',
                    'created_at' => '2020-04-24 03:31:34',
                    'updated_at' => '2023-07-25 13:52:25',
                    'deleted_at' => NULL,
                ),
            18 =>
                array(
                    'id' => 19,
                    'parent_skill_id' => 54,
                    'name' => 'Curriculum Coordinator',
                    'created_at' => '2020-04-24 03:31:48',
                    'updated_at' => '2023-07-25 13:52:04',
                    'deleted_at' => NULL,
                ),
            19 =>
                array(
                    'id' => 20,
                    'parent_skill_id' => 54,
                    'name' => 'Learning Experience Designer',
                    'created_at' => '2020-04-24 03:32:03',
                    'updated_at' => '2023-07-25 13:51:40',
                    'deleted_at' => NULL,
                ),
            20 =>
                array(
                    'id' => 21,
                    'parent_skill_id' => 54,
                    'name' => 'Content Developer',
                    'created_at' => '2020-04-24 03:32:17',
                    'updated_at' => '2023-07-25 13:51:18',
                    'deleted_at' => NULL,
                ),
            21 =>
                array(
                    'id' => 22,
                    'parent_skill_id' => 54,
                    'name' => 'Education Consultant',
                    'created_at' => '2020-04-24 03:32:34',
                    'updated_at' => '2023-07-25 13:50:53',
                    'deleted_at' => NULL,
                ),
            22 =>
                array(
                    'id' => 23,
                    'parent_skill_id' => 54,
                    'name' => 'Subject Matter Expert (SME)',
                    'created_at' => '2020-04-24 03:32:47',
                    'updated_at' => '2023-07-25 13:50:32',
                    'deleted_at' => NULL,
                ),
            23 =>
                array(
                    'id' => 24,
                    'parent_skill_id' => 54,
                    'name' => 'Instructional Designer',
                    'created_at' => '2020-04-24 03:32:56',
                    'updated_at' => '2023-07-25 13:50:13',
                    'deleted_at' => NULL,
                ),
            24 =>
                array(
                    'id' => 25,
                    'parent_skill_id' => 54,
                    'name' => 'Curriculum Developer',
                    'created_at' => '2020-04-24 03:33:04',
                    'updated_at' => '2023-07-25 13:49:47',
                    'deleted_at' => NULL,
                ),
            25 =>
                array(
                    'id' => 26,
                    'parent_skill_id' => 55,
                    'name' => 'Online Learning Coordinator',
                    'created_at' => '2020-04-24 03:33:18',
                    'updated_at' => '2023-07-25 13:47:49',
                    'deleted_at' => NULL,
                ),
            26 =>
                array(
                    'id' => 27,
                    'parent_skill_id' => 55,
                    'name' => 'Evaluation and Assessment Coordinator',
                    'created_at' => '2020-04-24 03:33:35',
                    'updated_at' => '2023-07-25 13:47:27',
                    'deleted_at' => NULL,
                ),
            27 =>
                array(
                    'id' => 28,
                    'parent_skill_id' => 55,
                    'name' => 'Data Analyst',
                    'created_at' => '2020-04-24 03:34:01',
                    'updated_at' => '2023-07-25 13:47:06',
                    'deleted_at' => NULL,
                ),
            28 =>
                array(
                    'id' => 29,
                    'parent_skill_id' => 55,
                    'name' => 'Graphic Designer',
                    'created_at' => '2020-04-24 03:34:15',
                    'updated_at' => '2023-07-25 13:46:42',
                    'deleted_at' => NULL,
                ),
            29 =>
                array(
                    'id' => 30,
                    'parent_skill_id' => 55,
                    'name' => 'Multimedia Specialist',
                    'created_at' => '2020-04-24 03:34:28',
                    'updated_at' => '2023-07-25 13:46:09',
                    'deleted_at' => NULL,
                ),
            30 =>
                array(
                    'id' => 31,
                    'parent_skill_id' => 55,
                    'name' => 'Assessment Specialist',
                    'created_at' => '2020-04-24 03:34:39',
                    'updated_at' => '2023-07-25 13:45:47',
                    'deleted_at' => NULL,
                ),
            31 =>
                array(
                    'id' => 32,
                    'parent_skill_id' => 55,
                    'name' => 'Educational Psychologist',
                    'created_at' => '2020-04-24 03:34:50',
                    'updated_at' => '2023-07-25 13:45:27',
                    'deleted_at' => NULL,
                ),
            32 =>
                array(
                    'id' => 33,
                    'parent_skill_id' => 55,
                    'name' => 'Instructional Technologist',
                    'created_at' => '2020-04-24 03:35:01',
                    'updated_at' => '2023-07-25 13:44:59',
                    'deleted_at' => NULL,
                ),
            33 =>
                array(
                    'id' => 34,
                    'parent_skill_id' => 55,
                    'name' => 'E-Learning Developer',
                    'created_at' => '2020-04-24 03:35:14',
                    'updated_at' => '2023-07-25 13:44:34',
                    'deleted_at' => NULL,
                ),
            34 =>
                array(
                    'id' => 35,
                    'parent_skill_id' => 0,
                    'name' => 'Law research',
                    'created_at' => '2020-04-24 03:35:25',
                    'updated_at' => '2023-04-13 14:18:10',
                    'deleted_at' => '2023-04-13 14:18:10',
                ),
            35 =>
                array(
                    'id' => 36,
                    'parent_skill_id' => 55,
                    'name' => 'Project Manager',
                    'created_at' => '2020-04-24 03:35:37',
                    'updated_at' => '2023-07-25 13:44:12',
                    'deleted_at' => NULL,
                ),
            36 =>
                array(
                    'id' => 37,
                    'parent_skill_id' => 55,
                    'name' => 'Researcher',
                    'created_at' => '2020-04-24 03:35:45',
                    'updated_at' => '2023-07-25 13:43:53',
                    'deleted_at' => NULL,
                ),
            37 =>
                array(
                    'id' => 38,
                    'parent_skill_id' => 55,
                    'name' => 'Content Writer',
                    'created_at' => '2020-04-24 03:35:53',
                    'updated_at' => '2023-07-25 13:43:35',
                    'deleted_at' => NULL,
                ),
            38 =>
                array(
                    'id' => 39,
                    'parent_skill_id' => 55,
                    'name' => 'Assessment Coordinator',
                    'created_at' => '2020-04-24 03:36:41',
                    'updated_at' => '2023-07-25 13:43:19',
                    'deleted_at' => NULL,
                ),
            39 =>
                array(
                    'id' => 40,
                    'parent_skill_id' => 55,
                    'name' => 'Quality Assurance Analyst',
                    'created_at' => '2020-04-24 03:36:57',
                    'updated_at' => '2023-07-25 13:42:51',
                    'deleted_at' => NULL,
                ),
            40 =>
                array(
                    'id' => 41,
                    'parent_skill_id' => 0,
                    'name' => 'Medical research',
                    'created_at' => '2020-04-24 03:37:55',
                    'updated_at' => '2023-04-13 14:17:00',
                    'deleted_at' => '2023-04-13 14:17:00',
                ),
            41 =>
                array(
                    'id' => 42,
                    'parent_skill_id' => 55,
                    'name' => 'Learning Designer',
                    'created_at' => '2020-04-24 03:38:07',
                    'updated_at' => '2023-07-25 13:42:27',
                    'deleted_at' => NULL,
                ),
            42 =>
                array(
                    'id' => 43,
                    'parent_skill_id' => 55,
                    'name' => 'Education Consultant',
                    'created_at' => '2020-04-24 03:38:23',
                    'updated_at' => '2023-07-25 13:42:08',
                    'deleted_at' => NULL,
                ),
            43 =>
                array(
                    'id' => 44,
                    'parent_skill_id' => 55,
                    'name' => 'Accreditation Specialist',
                    'created_at' => '2020-04-24 03:43:10',
                    'updated_at' => '2023-07-25 13:41:43',
                    'deleted_at' => NULL,
                ),
            44 =>
                array(
                    'id' => 45,
                    'parent_skill_id' => 55,
                    'name' => 'Subject Matter Expert',
                    'created_at' => '2020-04-24 03:43:22',
                    'updated_at' => '2023-07-25 13:41:27',
                    'deleted_at' => NULL,
                ),
            45 =>
                array(
                    'id' => 46,
                    'parent_skill_id' => 55,
                    'name' => 'Curriculum Developer',
                    'created_at' => '2020-04-24 03:43:31',
                    'updated_at' => '2023-07-25 13:41:12',
                    'deleted_at' => NULL,
                ),
            46 =>
                array(
                    'id' => 47,
                    'parent_skill_id' => 0,
                    'name' => 'Research writing',
                    'created_at' => '2020-04-24 03:43:52',
                    'updated_at' => '2023-07-24 14:23:00',
                    'deleted_at' => '2023-07-24 14:23:00',
                ),
            47 =>
                array(
                    'id' => 48,
                    'parent_skill_id' => 0,
                    'name' => 'New',
                    'created_at' => '2023-07-24 14:37:56',
                    'updated_at' => '2023-07-24 14:38:12',
                    'deleted_at' => '2023-07-24 14:38:12',
                ),
            48 =>
                array(
                    'id' => 49,
                    'parent_skill_id' => 51,
                    'name' => 'Supervisors Communications',
                    'created_at' => '2023-07-24 16:06:37',
                    'updated_at' => '2023-07-24 16:31:59',
                    'deleted_at' => '2023-07-24 16:31:59',
                ),
            49 =>
                array(
                    'id' => 50,
                    'parent_skill_id' => 55,
                    'name' => 'Instructional Designer',
                    'created_at' => '2023-07-24 16:32:37',
                    'updated_at' => '2023-07-25 13:40:53',
                    'deleted_at' => NULL,
                ),
            50 =>
                array(
                    'id' => 51,
                    'parent_skill_id' => 53,
                    'name' => 'Front-end Developer',
                    'created_at' => '2023-07-25 14:07:05',
                    'updated_at' => '2023-07-25 14:07:05',
                    'deleted_at' => NULL,
                ),
            51 =>
                array(
                    'id' => 52,
                    'parent_skill_id' => 53,
                    'name' => 'Back-end Developer',
                    'created_at' => '2023-07-25 14:07:14',
                    'updated_at' => '2023-07-25 14:07:14',
                    'deleted_at' => NULL,
                ),
            52 =>
                array(
                    'id' => 53,
                    'parent_skill_id' => 53,
                    'name' => 'Full-stack Developer',
                    'created_at' => '2023-07-25 14:07:23',
                    'updated_at' => '2023-07-25 14:07:23',
                    'deleted_at' => NULL,
                ),
            53 =>
                array(
                    'id' => 54,
                    'parent_skill_id' => 53,
                    'name' => 'Software Engineer',
                    'created_at' => '2023-07-25 14:07:37',
                    'updated_at' => '2023-07-25 14:07:37',
                    'deleted_at' => NULL,
                ),
            54 =>
                array(
                    'id' => 55,
                    'parent_skill_id' => 53,
                    'name' => 'System Administrator',
                    'created_at' => '2023-07-25 14:07:49',
                    'updated_at' => '2023-07-25 14:07:49',
                    'deleted_at' => NULL,
                ),
            55 =>
                array(
                    'id' => 56,
                    'parent_skill_id' => 53,
                    'name' => 'Database Administrator',
                    'created_at' => '2023-07-25 14:08:02',
                    'updated_at' => '2023-07-25 14:08:02',
                    'deleted_at' => NULL,
                ),
            56 =>
                array(
                    'id' => 57,
                    'parent_skill_id' => 53,
                    'name' => 'Project Manager',
                    'created_at' => '2023-07-25 14:08:11',
                    'updated_at' => '2023-07-25 14:08:11',
                    'deleted_at' => NULL,
                ),
            57 =>
                array(
                    'id' => 58,
                    'parent_skill_id' => 53,
                    'name' => 'Quality Assurance Analyst',
                    'created_at' => '2023-07-25 14:08:20',
                    'updated_at' => '2023-07-25 14:08:20',
                    'deleted_at' => NULL,
                ),
            58 =>
                array(
                    'id' => 59,
                    'parent_skill_id' => 53,
                    'name' => 'Content Developer',
                    'created_at' => '2023-07-25 14:08:34',
                    'updated_at' => '2023-07-25 14:08:34',
                    'deleted_at' => NULL,
                ),
            59 =>
                array(
                    'id' => 60,
                    'parent_skill_id' => 53,
                    'name' => 'Graphic Designer',
                    'created_at' => '2023-07-25 14:08:50',
                    'updated_at' => '2023-07-25 14:08:50',
                    'deleted_at' => NULL,
                ),
            60 =>
                array(
                    'id' => 61,
                    'parent_skill_id' => 53,
                    'name' => 'Mobile App Developer',
                    'created_at' => '2023-07-25 14:09:04',
                    'updated_at' => '2023-07-25 14:09:04',
                    'deleted_at' => NULL,
                ),
            61 =>
                array(
                    'id' => 62,
                    'parent_skill_id' => 53,
                    'name' => 'Integration Specialist',
                    'created_at' => '2023-07-25 14:09:12',
                    'updated_at' => '2023-07-25 14:09:12',
                    'deleted_at' => NULL,
                ),
            62 =>
                array(
                    'id' => 63,
                    'parent_skill_id' => 53,
                    'name' => 'Technical Writer',
                    'created_at' => '2023-07-25 14:09:22',
                    'updated_at' => '2023-07-25 14:09:22',
                    'deleted_at' => NULL,
                ),
            63 =>
                array(
                    'id' => 64,
                    'parent_skill_id' => 53,
                    'name' => 'User Support Specialist',
                    'created_at' => '2023-07-25 14:09:30',
                    'updated_at' => '2023-07-25 14:09:30',
                    'deleted_at' => NULL,
                ),
            64 =>
                array(
                    'id' => 65,
                    'parent_skill_id' => 53,
                    'name' => 'Data Analyst',
                    'created_at' => '2023-07-25 14:09:38',
                    'updated_at' => '2023-07-25 14:09:38',
                    'deleted_at' => NULL,
                ),
            65 =>
                array(
                    'id' => 66,
                    'parent_skill_id' => 53,
                    'name' => 'Training Coordinator',
                    'created_at' => '2023-07-25 14:09:53',
                    'updated_at' => '2023-07-25 14:09:53',
                    'deleted_at' => NULL,
                ),
            66 =>
                array(
                    'id' => 67,
                    'parent_skill_id' => 53,
                    'name' => 'LMS Administrator',
                    'created_at' => '2023-07-25 14:10:04',
                    'updated_at' => '2023-07-25 14:10:04',
                    'deleted_at' => NULL,
                ),
            67 =>
                array(
                    'id' => 68,
                    'parent_skill_id' => 52,
                    'name' => 'Academic Writer',
                    'created_at' => '2023-07-25 14:10:32',
                    'updated_at' => '2023-07-25 14:10:32',
                    'deleted_at' => NULL,
                ),
            68 =>
                array(
                    'id' => 69,
                    'parent_skill_id' => 52,
                    'name' => 'Content Writer',
                    'created_at' => '2023-07-25 14:10:40',
                    'updated_at' => '2023-07-25 14:10:40',
                    'deleted_at' => NULL,
                ),
            69 =>
                array(
                    'id' => 70,
                    'parent_skill_id' => 52,
                    'name' => 'Copywriter',
                    'created_at' => '2023-07-25 14:10:48',
                    'updated_at' => '2023-07-25 14:10:48',
                    'deleted_at' => NULL,
                ),
            70 =>
                array(
                    'id' => 71,
                    'parent_skill_id' => 52,
                    'name' => 'Editor',
                    'created_at' => '2023-07-25 14:10:57',
                    'updated_at' => '2023-07-25 14:10:57',
                    'deleted_at' => NULL,
                ),
            71 =>
                array(
                    'id' => 72,
                    'parent_skill_id' => 52,
                    'name' => 'Proofreader',
                    'created_at' => '2023-07-25 14:11:04',
                    'updated_at' => '2023-07-25 14:11:04',
                    'deleted_at' => NULL,
                ),
            72 =>
                array(
                    'id' => 73,
                    'parent_skill_id' => 52,
                    'name' => 'Researcher',
                    'created_at' => '2023-07-25 14:11:15',
                    'updated_at' => '2023-07-25 14:11:15',
                    'deleted_at' => NULL,
                ),
            73 =>
                array(
                    'id' => 74,
                    'parent_skill_id' => 52,
                    'name' => 'Subject Matter Expert',
                    'created_at' => '2023-07-25 14:11:22',
                    'updated_at' => '2023-07-25 14:11:22',
                    'deleted_at' => NULL,
                ),
            74 =>
                array(
                    'id' => 75,
                    'parent_skill_id' => 52,
                    'name' => 'Curriculum Developer',
                    'created_at' => '2023-07-25 14:11:30',
                    'updated_at' => '2023-07-25 14:11:30',
                    'deleted_at' => NULL,
                ),
            75 =>
                array(
                    'id' => 76,
                    'parent_skill_id' => 52,
                    'name' => 'Instructional Designer',
                    'created_at' => '2023-07-25 14:11:37',
                    'updated_at' => '2023-07-25 14:11:37',
                    'deleted_at' => NULL,
                ),
            76 =>
                array(
                    'id' => 77,
                    'parent_skill_id' => 52,
                    'name' => 'Copy Editor',
                    'created_at' => '2023-07-25 14:11:45',
                    'updated_at' => '2023-07-25 14:11:45',
                    'deleted_at' => NULL,
                ),
            77 =>
                array(
                    'id' => 78,
                    'parent_skill_id' => 52,
                    'name' => 'Publishing Assistant',
                    'created_at' => '2023-07-25 14:11:58',
                    'updated_at' => '2023-07-25 14:11:58',
                    'deleted_at' => NULL,
                ),
            78 =>
                array(
                    'id' => 79,
                    'parent_skill_id' => 52,
                    'name' => 'Editorial Assistant',
                    'created_at' => '2023-07-25 14:12:11',
                    'updated_at' => '2023-07-25 14:12:24',
                    'deleted_at' => NULL,
                ),
            79 =>
                array(
                    'id' => 80,
                    'parent_skill_id' => 52,
                    'name' => 'Technical Writer',
                    'created_at' => '2023-07-25 14:12:32',
                    'updated_at' => '2023-07-25 14:12:32',
                    'deleted_at' => NULL,
                ),
            80 =>
                array(
                    'id' => 81,
                    'parent_skill_id' => 52,
                    'name' => 'Grant Writer',
                    'created_at' => '2023-07-25 14:12:40',
                    'updated_at' => '2023-07-25 14:12:40',
                    'deleted_at' => NULL,
                ),
            81 =>
                array(
                    'id' => 82,
                    'parent_skill_id' => 52,
                    'name' => 'Manuscript Editor',
                    'created_at' => '2023-07-25 14:13:21',
                    'updated_at' => '2023-07-25 14:13:21',
                    'deleted_at' => NULL,
                ),
            82 =>
                array(
                    'id' => 83,
                    'parent_skill_id' => 52,
                    'name' => 'Citation Specialist',
                    'created_at' => '2023-07-25 14:13:48',
                    'updated_at' => '2023-07-25 14:13:48',
                    'deleted_at' => NULL,
                ),
            83 =>
                array(
                    'id' => 84,
                    'parent_skill_id' => 52,
                    'name' => 'Academic Policy Writer',
                    'created_at' => '2023-07-25 14:13:56',
                    'updated_at' => '2023-07-25 14:13:56',
                    'deleted_at' => NULL,
                ),
            84 =>
                array(
                    'id' => 85,
                    'parent_skill_id' => 52,
                    'name' => 'Legal Writer',
                    'created_at' => '2023-07-25 14:14:03',
                    'updated_at' => '2023-07-25 14:14:03',
                    'deleted_at' => NULL,
                ),
            85 =>
                array(
                    'id' => 86,
                    'parent_skill_id' => 52,
                    'name' => 'Language Editor',
                    'created_at' => '2023-07-25 14:14:10',
                    'updated_at' => '2023-07-25 14:14:10',
                    'deleted_at' => NULL,
                ),
            86 =>
                array(
                    'id' => 87,
                    'parent_skill_id' => 52,
                    'name' => 'Freelance Writer/Editor',
                    'created_at' => '2023-07-25 14:14:17',
                    'updated_at' => '2023-07-25 14:14:17',
                    'deleted_at' => NULL,
                ),
            87 =>
                array(
                    'id' => 88,
                    'parent_skill_id' => 51,
                    'name' => 'Confirmatory Factor Analysis (CFA)',
                    'created_at' => '2023-07-25 14:15:30',
                    'updated_at' => '2023-07-25 14:15:30',
                    'deleted_at' => NULL,
                ),
            88 =>
                array(
                    'id' => 89,
                    'parent_skill_id' => 51,
                    'name' => 'Cross-Lagged Panel Models',
                    'created_at' => '2023-07-25 14:15:37',
                    'updated_at' => '2023-07-25 14:15:37',
                    'deleted_at' => NULL,
                ),
            89 =>
                array(
                    'id' => 90,
                    'parent_skill_id' => 51,
                    'name' => 'Demographic Methods',
                    'created_at' => '2023-07-25 14:15:45',
                    'updated_at' => '2023-07-25 14:15:45',
                    'deleted_at' => NULL,
                ),
            90 =>
                array(
                    'id' => 91,
                    'parent_skill_id' => 51,
                    'name' => 'Discourse analysis',
                    'created_at' => '2023-07-25 14:15:54',
                    'updated_at' => '2023-07-25 14:15:54',
                    'deleted_at' => NULL,
                ),
            91 =>
                array(
                    'id' => 92,
                    'parent_skill_id' => 51,
                    'name' => 'Dynamic Panel Data Modeling',
                    'created_at' => '2023-07-25 14:16:01',
                    'updated_at' => '2023-07-25 14:16:01',
                    'deleted_at' => NULL,
                ),
            92 =>
                array(
                    'id' => 93,
                    'parent_skill_id' => 51,
                    'name' => 'Dynamic SEM (DSEM)',
                    'created_at' => '2023-07-25 14:16:09',
                    'updated_at' => '2023-07-25 14:16:09',
                    'deleted_at' => NULL,
                ),
            93 =>
                array(
                    'id' => 94,
                    'parent_skill_id' => 51,
                    'name' => 'Ecological Momentary Assessment (EMA)',
                    'created_at' => '2023-07-25 14:16:16',
                    'updated_at' => '2023-07-25 14:16:16',
                    'deleted_at' => NULL,
                ),
            94 =>
                array(
                    'id' => 95,
                    'parent_skill_id' => 51,
                    'name' => 'Empirical Dynamic Modeling (EDM)',
                    'created_at' => '2023-07-25 14:16:24',
                    'updated_at' => '2023-07-25 14:16:24',
                    'deleted_at' => NULL,
                ),
            95 =>
                array(
                    'id' => 96,
                    'parent_skill_id' => 51,
                    'name' => 'Experience Sampling Methods (ESM)',
                    'created_at' => '2023-07-25 14:16:32',
                    'updated_at' => '2023-07-25 14:16:32',
                    'deleted_at' => NULL,
                ),
            96 =>
                array(
                    'id' => 97,
                    'parent_skill_id' => 51,
                    'name' => 'Intensive Longitudinal Data Analysis',
                    'created_at' => '2023-07-25 14:16:39',
                    'updated_at' => '2023-07-25 14:16:39',
                    'deleted_at' => NULL,
                ),
            97 =>
                array(
                    'id' => 98,
                    'parent_skill_id' => 51,
                    'name' => 'Longitudinal Analysis',
                    'created_at' => '2023-07-25 14:17:42',
                    'updated_at' => '2023-07-25 14:17:42',
                    'deleted_at' => NULL,
                ),
            98 =>
                array(
                    'id' => 99,
                    'parent_skill_id' => 51,
                    'name' => 'Longitudinal SEM',
                    'created_at' => '2023-07-25 14:17:50',
                    'updated_at' => '2023-07-25 14:17:50',
                    'deleted_at' => NULL,
                ),
            99 =>
                array(
                    'id' => 100,
                    'parent_skill_id' => 51,
                    'name' => 'Measurement Invariance Testing',
                    'created_at' => '2023-07-25 14:18:02',
                    'updated_at' => '2023-07-25 14:18:02',
                    'deleted_at' => NULL,
                ),
            100 =>
                array(
                    'id' => 101,
                    'parent_skill_id' => 51,
                    'name' => 'Multilevel Modeling (MLM)',
                    'created_at' => '2023-07-25 14:18:10',
                    'updated_at' => '2023-07-25 14:18:10',
                    'deleted_at' => NULL,
                ),
            101 =>
                array(
                    'id' => 102,
                    'parent_skill_id' => 51,
                    'name' => 'Multilevel Structural Equation Modeling (MSEM)',
                    'created_at' => '2023-07-25 14:18:20',
                    'updated_at' => '2023-07-25 14:18:20',
                    'deleted_at' => NULL,
                ),
            102 =>
                array(
                    'id' => 103,
                    'parent_skill_id' => 51,
                    'name' => 'Panel Data Modeling',
                    'created_at' => '2023-07-25 14:18:28',
                    'updated_at' => '2023-07-25 14:18:28',
                    'deleted_at' => NULL,
                ),
            103 =>
                array(
                    'id' => 104,
                    'parent_skill_id' => 51,
                    'name' => 'Path Analysis',
                    'created_at' => '2023-07-25 14:18:44',
                    'updated_at' => '2023-07-25 14:18:44',
                    'deleted_at' => NULL,
                ),
            104 =>
                array(
                    'id' => 105,
                    'parent_skill_id' => 51,
                    'name' => 'Qualitative data analysis',
                    'created_at' => '2023-07-25 14:18:51',
                    'updated_at' => '2023-07-25 14:18:51',
                    'deleted_at' => NULL,
                ),
            105 =>
                array(
                    'id' => 106,
                    'parent_skill_id' => 51,
                    'name' => 'Quantitative data analysis',
                    'created_at' => '2023-07-25 14:18:57',
                    'updated_at' => '2023-07-25 14:18:57',
                    'deleted_at' => NULL,
                ),
            106 =>
                array(
                    'id' => 107,
                    'parent_skill_id' => 51,
                    'name' => 'Structural Equation Modeling (SEM)',
                    'created_at' => '2023-07-25 14:19:04',
                    'updated_at' => '2023-07-25 14:19:04',
                    'deleted_at' => NULL,
                ),
            107 =>
                array(
                    'id' => 108,
                    'parent_skill_id' => 50,
                    'name' => 'Academic Transcriber',
                    'created_at' => '2023-07-25 14:19:36',
                    'updated_at' => '2023-07-25 14:19:36',
                    'deleted_at' => NULL,
                ),
            108 =>
                array(
                    'id' => 109,
                    'parent_skill_id' => 50,
                    'name' => 'Academic Translator',
                    'created_at' => '2023-07-25 14:19:51',
                    'updated_at' => '2023-07-25 14:19:51',
                    'deleted_at' => NULL,
                ),
            109 =>
                array(
                    'id' => 110,
                    'parent_skill_id' => 50,
                    'name' => 'Language Specialist',
                    'created_at' => '2023-07-25 14:20:13',
                    'updated_at' => '2023-07-25 14:20:13',
                    'deleted_at' => NULL,
                ),
            110 =>
                array(
                    'id' => 111,
                    'parent_skill_id' => 50,
                    'name' => 'Transcriptionist',
                    'created_at' => '2023-07-25 14:20:28',
                    'updated_at' => '2023-07-25 14:20:28',
                    'deleted_at' => NULL,
                ),
            111 =>
                array(
                    'id' => 112,
                    'parent_skill_id' => 50,
                    'name' => 'Language Services Coordinator',
                    'created_at' => '2023-07-25 14:20:36',
                    'updated_at' => '2023-07-25 14:20:36',
                    'deleted_at' => NULL,
                ),
            112 =>
                array(
                    'id' => 113,
                    'parent_skill_id' => 50,
                    'name' => 'Translation Project Manager',
                    'created_at' => '2023-07-25 14:20:43',
                    'updated_at' => '2023-07-25 14:20:43',
                    'deleted_at' => NULL,
                ),
            113 =>
                array(
                    'id' => 114,
                    'parent_skill_id' => 50,
                    'name' => 'Language Quality Assurance Specialist',
                    'created_at' => '2023-07-25 14:20:54',
                    'updated_at' => '2023-07-25 14:20:54',
                    'deleted_at' => NULL,
                ),
            114 =>
                array(
                    'id' => 115,
                    'parent_skill_id' => 50,
                    'name' => 'Linguistics Researcher',
                    'created_at' => '2023-07-25 14:21:01',
                    'updated_at' => '2023-07-25 14:21:01',
                    'deleted_at' => NULL,
                ),
            115 =>
                array(
                    'id' => 116,
                    'parent_skill_id' => 50,
                    'name' => 'Bilingual Research Assistant',
                    'created_at' => '2023-07-25 14:21:07',
                    'updated_at' => '2023-07-25 14:21:07',
                    'deleted_at' => NULL,
                ),
            116 =>
                array(
                    'id' => 117,
                    'parent_skill_id' => 50,
                    'name' => 'Language Analyst',
                    'created_at' => '2023-07-25 14:21:13',
                    'updated_at' => '2023-07-25 14:21:13',
                    'deleted_at' => NULL,
                ),
            117 =>
                array(
                    'id' => 118,
                    'parent_skill_id' => 50,
                    'name' => 'Transcription Editor',
                    'created_at' => '2023-07-25 14:21:23',
                    'updated_at' => '2023-07-25 14:21:23',
                    'deleted_at' => NULL,
                ),
            118 =>
                array(
                    'id' => 119,
                    'parent_skill_id' => 50,
                    'name' => 'Multilingual Content Writer',
                    'created_at' => '2023-07-25 14:21:30',
                    'updated_at' => '2023-07-25 14:21:30',
                    'deleted_at' => NULL,
                ),
            119 =>
                array(
                    'id' => 120,
                    'parent_skill_id' => 52,
                    'name' => 'Academic Proofreader',
                    'created_at' => '2023-07-25 14:21:38',
                    'updated_at' => '2023-07-25 14:21:38',
                    'deleted_at' => NULL,
                ),
            120 =>
                array(
                    'id' => 121,
                    'parent_skill_id' => 50,
                    'name' => 'Language Instructor',
                    'created_at' => '2023-07-25 14:21:46',
                    'updated_at' => '2023-07-25 14:21:46',
                    'deleted_at' => NULL,
                ),
            121 =>
                array(
                    'id' => 122,
                    'parent_skill_id' => 50,
                    'name' => 'Language Technology Specialist',
                    'created_at' => '2023-07-25 14:21:53',
                    'updated_at' => '2023-07-25 14:21:53',
                    'deleted_at' => NULL,
                ),
            122 =>
                array(
                    'id' => 123,
                    'parent_skill_id' => 50,
                    'name' => 'Interpreting Services Coordinator',
                    'created_at' => '2023-07-25 14:22:01',
                    'updated_at' => '2023-07-25 14:22:01',
                    'deleted_at' => NULL,
                ),
            123 =>
                array(
                    'id' => 124,
                    'parent_skill_id' => 50,
                    'name' => 'Localization Specialist',
                    'created_at' => '2023-07-25 14:22:08',
                    'updated_at' => '2023-07-25 14:22:08',
                    'deleted_at' => NULL,
                ),
            124 =>
                array(
                    'id' => 125,
                    'parent_skill_id' => 50,
                    'name' => 'Language Data Analyst',
                    'created_at' => '2023-07-25 14:22:17',
                    'updated_at' => '2023-07-25 14:22:17',
                    'deleted_at' => NULL,
                ),
            125 =>
                array(
                    'id' => 126,
                    'parent_skill_id' => 50,
                    'name' => 'Academic Language Consultant',
                    'created_at' => '2023-07-25 14:22:25',
                    'updated_at' => '2023-07-25 14:22:25',
                    'deleted_at' => NULL,
                ),
            126 =>
                array(
                    'id' => 127,
                    'parent_skill_id' => 50,
                    'name' => 'Language Services Administrator',
                    'created_at' => '2023-07-25 14:22:32',
                    'updated_at' => '2023-07-25 14:22:32',
                    'deleted_at' => NULL,
                ),
            127 =>
                array(
                    'id' => 128,
                    'parent_skill_id' => 49,
                    'name' => 'Academic Consultant',
                    'created_at' => '2023-07-25 14:23:00',
                    'updated_at' => '2023-07-25 14:23:00',
                    'deleted_at' => NULL,
                ),
            128 =>
                array(
                    'id' => 129,
                    'parent_skill_id' => 49,
                    'name' => 'Scholarship Application Advisor',
                    'created_at' => '2023-07-25 14:23:08',
                    'updated_at' => '2023-07-25 14:23:08',
                    'deleted_at' => NULL,
                ),
            129 =>
                array(
                    'id' => 130,
                    'parent_skill_id' => 49,
                    'name' => 'Research Grant Consultant',
                    'created_at' => '2023-07-25 14:23:15',
                    'updated_at' => '2023-07-25 14:23:15',
                    'deleted_at' => NULL,
                ),
            130 =>
                array(
                    'id' => 131,
                    'parent_skill_id' => 49,
                    'name' => 'Scholarship Specialist',
                    'created_at' => '2023-07-25 14:23:21',
                    'updated_at' => '2023-07-25 14:23:21',
                    'deleted_at' => NULL,
                ),
            131 =>
                array(
                    'id' => 132,
                    'parent_skill_id' => 49,
                    'name' => 'Grant Proposal Writer',
                    'created_at' => '2023-07-25 14:23:29',
                    'updated_at' => '2023-07-25 14:23:29',
                    'deleted_at' => NULL,
                ),
            132 =>
                array(
                    'id' => 133,
                    'parent_skill_id' => 49,
                    'name' => 'Research Funding Consultant',
                    'created_at' => '2023-07-25 14:23:38',
                    'updated_at' => '2023-07-25 14:23:38',
                    'deleted_at' => NULL,
                ),
            133 =>
                array(
                    'id' => 134,
                    'parent_skill_id' => 49,
                    'name' => 'Scholarship Application Reviewer',
                    'created_at' => '2023-07-25 14:24:42',
                    'updated_at' => '2023-07-25 14:24:42',
                    'deleted_at' => NULL,
                ),
            134 =>
                array(
                    'id' => 135,
                    'parent_skill_id' => 49,
                    'name' => 'Research Project Manager',
                    'created_at' => '2023-07-25 14:25:15',
                    'updated_at' => '2023-07-25 14:25:15',
                    'deleted_at' => NULL,
                ),
            135 =>
                array(
                    'id' => 136,
                    'parent_skill_id' => 49,
                    'name' => 'Funding Strategy Consultant',
                    'created_at' => '2023-07-25 14:25:21',
                    'updated_at' => '2023-07-25 14:25:21',
                    'deleted_at' => NULL,
                ),
            136 =>
                array(
                    'id' => 137,
                    'parent_skill_id' => 49,
                    'name' => 'Grant Development Coordinator',
                    'created_at' => '2023-07-25 14:25:27',
                    'updated_at' => '2023-07-25 14:25:27',
                    'deleted_at' => NULL,
                ),
            137 =>
                array(
                    'id' => 138,
                    'parent_skill_id' => 49,
                    'name' => 'Research Scholarship Coach',
                    'created_at' => '2023-07-25 14:25:34',
                    'updated_at' => '2023-07-25 14:25:34',
                    'deleted_at' => NULL,
                ),
            138 =>
                array(
                    'id' => 139,
                    'parent_skill_id' => 49,
                    'name' => 'Scholarship Application Coordinator',
                    'created_at' => '2023-07-25 14:25:41',
                    'updated_at' => '2023-07-25 14:25:41',
                    'deleted_at' => NULL,
                ),
            139 =>
                array(
                    'id' => 140,
                    'parent_skill_id' => 49,
                    'name' => 'Grant Writing Specialist',
                    'created_at' => '2023-07-25 14:25:48',
                    'updated_at' => '2023-07-25 14:25:48',
                    'deleted_at' => NULL,
                ),
            140 =>
                array(
                    'id' => 141,
                    'parent_skill_id' => 49,
                    'name' => 'Research Funding Analyst',
                    'created_at' => '2023-07-25 14:26:02',
                    'updated_at' => '2023-07-25 14:26:02',
                    'deleted_at' => NULL,
                ),
            141 =>
                array(
                    'id' => 142,
                    'parent_skill_id' => 49,
                    'name' => 'Scholarship Program Manager',
                    'created_at' => '2023-07-25 14:26:09',
                    'updated_at' => '2023-07-25 14:26:09',
                    'deleted_at' => NULL,
                ),
            142 =>
                array(
                    'id' => 143,
                    'parent_skill_id' => 49,
                    'name' => 'Research Grant Administrator',
                    'created_at' => '2023-07-25 14:26:15',
                    'updated_at' => '2023-07-25 14:26:15',
                    'deleted_at' => NULL,
                ),
            143 =>
                array(
                    'id' => 144,
                    'parent_skill_id' => 49,
                    'name' => 'Funding Opportunities Researcher',
                    'created_at' => '2023-07-25 14:26:22',
                    'updated_at' => '2023-07-25 14:26:22',
                    'deleted_at' => NULL,
                ),
            144 =>
                array(
                    'id' => 145,
                    'parent_skill_id' => 49,
                    'name' => 'Scholarship Application Assessor',
                    'created_at' => '2023-07-25 14:26:29',
                    'updated_at' => '2023-07-25 14:26:29',
                    'deleted_at' => NULL,
                ),
            145 =>
                array(
                    'id' => 146,
                    'parent_skill_id' => 49,
                    'name' => 'Academic Writing Consultant',
                    'created_at' => '2023-07-25 14:26:41',
                    'updated_at' => '2023-07-25 14:26:41',
                    'deleted_at' => NULL,
                ),
            146 =>
                array(
                    'id' => 147,
                    'parent_skill_id' => 49,
                    'name' => 'Supervisors Communications Specialist',
                    'created_at' => '2023-07-25 14:26:53',
                    'updated_at' => '2023-07-25 14:26:53',
                    'deleted_at' => NULL,
                ),
            147 =>
                array(
                    'id' => 148,
                    'parent_skill_id' => 48,
                    'name' => 'Uni Maths Tutor',
                    'created_at' => '2023-07-25 14:27:08',
                    'updated_at' => '2023-07-25 14:27:08',
                    'deleted_at' => NULL,
                ),
            148 =>
                array(
                    'id' => 149,
                    'parent_skill_id' => 48,
                    'name' => 'Uni Statistics Tutor',
                    'created_at' => '2023-07-25 14:27:16',
                    'updated_at' => '2023-07-25 14:27:16',
                    'deleted_at' => NULL,
                ),
            149 =>
                array(
                    'id' => 150,
                    'parent_skill_id' => 48,
                    'name' => 'Uni Science Tutor',
                    'created_at' => '2023-07-25 14:27:22',
                    'updated_at' => '2023-07-25 14:27:22',
                    'deleted_at' => NULL,
                ),
            150 =>
                array(
                    'id' => 151,
                    'parent_skill_id' => 48,
                    'name' => 'Uni English Language Tutor',
                    'created_at' => '2023-07-25 14:27:29',
                    'updated_at' => '2023-07-25 14:27:29',
                    'deleted_at' => NULL,
                ),
            151 =>
                array(
                    'id' => 152,
                    'parent_skill_id' => 48,
                    'name' => 'Uni English Tutor',
                    'created_at' => '2023-07-25 14:27:36',
                    'updated_at' => '2023-07-25 14:27:36',
                    'deleted_at' => NULL,
                ),
            152 =>
                array(
                    'id' => 153,
                    'parent_skill_id' => 48,
                    'name' => 'Uni Biology Tutor',
                    'created_at' => '2023-07-25 14:27:43',
                    'updated_at' => '2023-07-25 14:27:43',
                    'deleted_at' => NULL,
                ),
            153 =>
                array(
                    'id' => 154,
                    'parent_skill_id' => 48,
                    'name' => 'Uni Chemistry Tutor',
                    'created_at' => '2023-07-25 14:27:51',
                    'updated_at' => '2023-07-25 14:27:51',
                    'deleted_at' => NULL,
                ),
            154 =>
                array(
                    'id' => 155,
                    'parent_skill_id' => 48,
                    'name' => 'Uni Physics Tutor',
                    'created_at' => '2023-07-25 14:27:58',
                    'updated_at' => '2023-07-25 14:27:58',
                    'deleted_at' => NULL,
                ),
            155 =>
                array(
                    'id' => 156,
                    'parent_skill_id' => 48,
                    'name' => 'Uni Computer Science Tutor',
                    'created_at' => '2023-07-25 14:28:05',
                    'updated_at' => '2023-07-25 14:28:05',
                    'deleted_at' => NULL,
                ),
            156 =>
                array(
                    'id' => 157,
                    'parent_skill_id' => 48,
                    'name' => 'Uni Computer Science Tutor',
                    'created_at' => '2023-07-25 14:28:05',
                    'updated_at' => '2023-07-25 14:30:46',
                    'deleted_at' => '2023-07-25 14:30:46',
                ),
            157 =>
                array(
                    'id' => 158,
                    'parent_skill_id' => 48,
                    'name' => 'Uni Business Tutor',
                    'created_at' => '2023-07-25 14:28:13',
                    'updated_at' => '2023-07-25 14:28:13',
                    'deleted_at' => NULL,
                ),
            158 =>
                array(
                    'id' => 159,
                    'parent_skill_id' => 48,
                    'name' => 'High School Maths Tutor',
                    'created_at' => '2023-07-25 14:28:19',
                    'updated_at' => '2023-07-25 14:28:19',
                    'deleted_at' => NULL,
                ),
            159 =>
                array(
                    'id' => 160,
                    'parent_skill_id' => 48,
                    'name' => 'High School Statistics Tutor',
                    'created_at' => '2023-07-25 14:28:28',
                    'updated_at' => '2023-07-25 14:28:28',
                    'deleted_at' => NULL,
                ),
            160 =>
                array(
                    'id' => 161,
                    'parent_skill_id' => 48,
                    'name' => 'High School Science Tutor',
                    'created_at' => '2023-07-25 14:28:36',
                    'updated_at' => '2023-07-25 14:28:36',
                    'deleted_at' => NULL,
                ),
            161 =>
                array(
                    'id' => 162,
                    'parent_skill_id' => 48,
                    'name' => 'High School English Tutor',
                    'created_at' => '2023-07-25 14:28:43',
                    'updated_at' => '2023-07-25 14:28:43',
                    'deleted_at' => NULL,
                ),
            162 =>
                array(
                    'id' => 163,
                    'parent_skill_id' => 48,
                    'name' => 'High School Biology Tutor',
                    'created_at' => '2023-07-25 14:29:00',
                    'updated_at' => '2023-07-25 14:29:00',
                    'deleted_at' => NULL,
                ),
            163 =>
                array(
                    'id' => 164,
                    'parent_skill_id' => 48,
                    'name' => 'High School Chemistry Tutor',
                    'created_at' => '2023-07-25 14:29:08',
                    'updated_at' => '2023-07-25 14:29:08',
                    'deleted_at' => NULL,
                ),
            164 =>
                array(
                    'id' => 165,
                    'parent_skill_id' => 48,
                    'name' => 'High School Physics Tutor',
                    'created_at' => '2023-07-25 14:29:16',
                    'updated_at' => '2023-07-25 14:29:16',
                    'deleted_at' => NULL,
                ),
            165 =>
                array(
                    'id' => 166,
                    'parent_skill_id' => 48,
                    'name' => 'Academic Coach',
                    'created_at' => '2023-07-25 14:29:24',
                    'updated_at' => '2023-07-25 14:29:24',
                    'deleted_at' => NULL,
                ),
            166 =>
                array(
                    'id' => 167,
                    'parent_skill_id' => 48,
                    'name' => 'Career Coach',
                    'created_at' => '2023-07-25 14:29:30',
                    'updated_at' => '2023-07-25 14:29:30',
                    'deleted_at' => NULL,
                ),
            167 =>
                array(
                    'id' => 168,
                    'parent_skill_id' => 48,
                    'name' => 'Peer Academic Advisor',
                    'created_at' => '2023-07-25 14:29:39',
                    'updated_at' => '2023-07-25 14:29:39',
                    'deleted_at' => NULL,
                ),
        ));
    }
}
