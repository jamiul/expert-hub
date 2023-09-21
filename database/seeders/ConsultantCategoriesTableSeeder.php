<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class ConsultantCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('consultant_categories')->delete();

        DB::table('consultant_categories')->insert(array(
            0 =>
                array(
                    'id' => 2,
                    'name' => 'Accreditation Specialists',
                    'parent_id' => 0,
                    'photo' => '202',
                    'description' => 'I am ready to serve you anything course related academics help. Don\'t hesitate me to contact.',
                    'slug' => 'accreditation-specialists-4BkOb',
                    'created_at' => '2023-09-17 15:45:59',
                    'updated_at' => '2023-09-18 22:43:46',
                    'deleted_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 3,
                    'name' => 'Curriculum Experts',
                    'parent_id' => 0,
                    'photo' => '203',
                    'description' => 'If you need anything related course curriculum development assistance, you can reach me out.',
                    'slug' => 'curriculum-experts-fSPwF',
                    'created_at' => '2023-09-17 15:47:49',
                    'updated_at' => '2023-09-18 22:44:25',
                    'deleted_at' => NULL,
                ),
            2 =>
                array(
                    'id' => 4,
                    'name' => 'LMS Experts',
                    'parent_id' => 0,
                    'photo' => '204',
                    'description' => 'Based on my research experience, I can give you the best assistance in your desire scope',
                    'slug' => 'lms-experts-65dFa',
                    'created_at' => '2023-09-17 15:48:58',
                    'updated_at' => '2023-09-18 22:45:23',
                    'deleted_at' => NULL,
                ),
            3 =>
                array(
                    'id' => 5,
                    'name' => 'Program Designers',
                    'parent_id' => 0,
                    'photo' => '205',
                    'description' => 'Reach me out to get assistance in your project, I am an experience consultant',
                    'slug' => 'program-designers-KcKoT',
                    'created_at' => '2023-09-17 15:56:08',
                    'updated_at' => '2023-09-18 23:15:39',
                    'deleted_at' => NULL,
                ),
            4 =>
                array(
                    'id' => 6,
                    'name' => 'Industry Experts',
                    'parent_id' => 0,
                    'photo' => '206',
                    'description' => 'Based on my industry experience, I can give you the best assistance in your desire scope',
                    'slug' => 'industry-experts-Ow3YT',
                    'created_at' => '2023-09-17 16:05:44',
                    'updated_at' => '2023-09-19 11:17:54',
                    'deleted_at' => NULL,
                ),
            5 =>
                array(
                    'id' => 7,
                    'name' => 'Finance Experts',
                    'parent_id' => 0,
                    'photo' => '207',
                    'description' => 'I have a 20 years translation experiences in various field , you can reach me out.',
                    'slug' => 'finance-experts-WTcfx',
                    'created_at' => '2023-09-17 16:06:45',
                    'updated_at' => '2023-09-18 23:16:28',
                    'deleted_at' => NULL,
                ),
            6 =>
                array(
                    'id' => 8,
                    'name' => 'Project Managers',
                    'parent_id' => 0,
                    'photo' => '208',
                    'description' => 'I am ready to serve you anything related you scholarship applications.',
                    'slug' => 'project-managers-FF7rp',
                    'created_at' => '2023-09-17 16:08:18',
                    'updated_at' => '2023-09-18 23:16:58',
                    'deleted_at' => NULL,
                ),
            7 =>
                array(
                    'id' => 9,
                    'name' => 'Mentoring and Tutoring',
                    'parent_id' => 0,
                    'photo' => '209',
                    'description' => 'Reach me out to get assistance in your project, I am an experience consultant',
                    'slug' => 'mentoring-and-tutoring-RmGu4',
                    'created_at' => '2023-09-17 16:52:51',
                    'updated_at' => '2023-09-18 13:07:02',
                    'deleted_at' => '2023-09-18 13:07:02',
                ),
            8 =>
                array(
                    'id' => 10,
                    'name' => 'University research',
                    'parent_id' => 0,
                    'photo' => '200',
                    'description' => 'NOthing',
                    'slug' => 'university-research-OqLeq',
                    'created_at' => '2023-09-18 12:54:40',
                    'updated_at' => '2023-09-18 13:06:11',
                    'deleted_at' => '2023-09-18 13:06:11',
                ),
            9 =>
                array(
                    'id' => 11,
                    'name' => 'Scholarships Advisors',
                    'parent_id' => 0,
                    'photo' => '209',
                    'description' => 'Reach me out to get assistance in your project, I am an experience consultant',
                    'slug' => 'scholarships-advisors-OAkLc',
                    'created_at' => '2023-09-18 13:09:42',
                    'updated_at' => '2023-09-18 23:17:18',
                    'deleted_at' => NULL,
                ),
            10 =>
                array(
                    'id' => 12,
                    'name' => 'University researchhh',
                    'parent_id' => 0,
                    'photo' => '206',
                    'description' => 'nothing',
                    'slug' => 'university-researchhh-vR70v',
                    'created_at' => '2023-09-18 20:19:24',
                    'updated_at' => '2023-09-18 20:20:54',
                    'deleted_at' => '2023-09-18 20:20:54',
                ),
            11 =>
                array(
                    'id' => 13,
                    'name' => 'Policy Experts',
                    'parent_id' => 0,
                    'photo' => '192',
                    'description' => 'Reach me out to get assistance in your project, I am an experience consultant',
                    'slug' => 'policy-experts-KumEE',
                    'created_at' => '2023-09-19 16:29:59',
                    'updated_at' => '2023-09-19 16:29:59',
                    'deleted_at' => NULL,
                ),
        ));
    }
}
