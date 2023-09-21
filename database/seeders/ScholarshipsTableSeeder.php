<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class ScholarshipsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('scholarships')->delete();

        DB::table('scholarships')->insert(array(
            0 =>
                array(
                    'id' => 3,
                    'category_id' => 5,
                    'level_id' => 6,
                    'university_id' => 3,
                    'website_link' => 'https://www.vu.edu.au/vu-sydney',
                    'country_id' => 22,
                    'city_id' => 4,
                    'whoCanApply_id' => 9,
                    'qualification_id' => 6,
                    'fieldStudy_id' => '["8","9","10","11"]',
                    'title' => 'Graduate Research Scholarships',
                    'short_description' => 'TVictoria University provides a wide range of research scholarships to support domestic and international research candidates. Scholarships are awarded based on a competitive process and are open to both new and current candidates

Helping students with their different cases, summarizing, and solving their issues in visa applications gave me an amazing experience in writing.',
                    'banner' => 136,
                    'meta_title' => NULL,
                    'description' => '<p style="margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 0px !important;"><span class="up-truncation mb-15 mb-lg-20 d-block" data-v-c07fdf08="" style="text-align: justify; margin-bottom: 20px !important;"><span id="up-truncation-9" style=""><font color="#000003" face="Public Sans, sans-serif"><span style="font-size: 15px;">FreelancerEdu can connect you with experienced consultants who have received scholarships in your field. They can review your application and provide valuable feedback to to ensure you submit a competitive application</span></font><br></span></span></p>',
                    'meta_img' => NULL,
                    'meta_description' => NULL,
                    'meta_keywords' => NULL,
                    'status' => 1,
                    'slug' => 'graduate-research-scholarships-',
                    'created_at' => '2023-05-20 21:55:52',
                    'updated_at' => '2023-06-21 02:47:30',
                    'deleted_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 4,
                    'category_id' => 7,
                    'level_id' => 4,
                    'university_id' => 2,
                    'website_link' => 'https://www.unimelb.edu.au/',
                    'country_id' => 5,
                    'city_id' => 5,
                    'whoCanApply_id' => 11,
                    'qualification_id' => 6,
                    'fieldStudy_id' => '["8","9","10","13"]',
                    'title' => 'Graduate Research Scholarships',
                    'short_description' => 'Melbourne University provides a wide range of research scholarships to support domestic and international research candidates. Scholarships are awarded based on a competitive process and are open to both new and current candidates',
                    'banner' => 109,
                    'meta_title' => NULL,
                    'description' => '<p><br style="color: rgb(0, 30, 0); font-family: &quot;Neue Montreal&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 14px; letter-spacing: 0.6px;"><div style="text-align: justify;"><font color="#000003" face="Public Sans, sans-serif"><span style="font-size: 15px;">FreelancerEdu can connect you with experienced consultants who have received scholarships in your field. They can review your application and provide valuable feedback to to ensure you submit a competitive application</span></font></div></p>',
                    'meta_img' => NULL,
                    'meta_description' => NULL,
                    'meta_keywords' => NULL,
                    'status' => 1,
                    'slug' => 'graduate-research-scholarships-',
                    'created_at' => '2023-05-20 22:09:33',
                    'updated_at' => '2023-06-21 02:46:45',
                    'deleted_at' => NULL,
                ),
            2 =>
                array(
                    'id' => 5,
                    'category_id' => 5,
                    'level_id' => 5,
                    'university_id' => 2,
                    'website_link' => 'https://www.unimelb.edu.au/',
                    'country_id' => 5,
                    'city_id' => 5,
                    'whoCanApply_id' => 9,
                    'qualification_id' => 6,
                    'fieldStudy_id' => '["7","9","10","14"]',
                    'title' => 'Graduate Research Scholarships',
                    'short_description' => 'Melbourne University provides a wide range of research scholarships to support domestic and international research candidates. Scholarships are awarded based on a competitive process and are open to both new and current candidates',
                    'banner' => 109,
                    'meta_title' => NULL,
                    'description' => '<p style="border: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: 0px; padding: 0px; color: rgb(98, 100, 106); font-family: Macan, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px;"><span style="color: rgb(0, 0, 3); font-family: &quot;Public Sans&quot;, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(247, 247, 247);">Would you like someone experienced to review and give feedback prior to submitting your scholarship application? Scholarships Australia can assist you to get connected with consultants who are previous scholarship recipients in your field to ensure you submit a competitive application.</span><br></p>',
                    'meta_img' => NULL,
                    'meta_description' => NULL,
                    'meta_keywords' => NULL,
                    'status' => 1,
                    'slug' => 'graduate-research-scholarships-',
                    'created_at' => '2023-05-23 23:47:55',
                    'updated_at' => '2023-06-21 02:45:24',
                    'deleted_at' => NULL,
                ),
            3 =>
                array(
                    'id' => 6,
                    'category_id' => 5,
                    'level_id' => 4,
                    'university_id' => 1,
                    'website_link' => 'https://www.westernsydney.edu.au/',
                    'country_id' => 5,
                    'city_id' => 3,
                    'whoCanApply_id' => 9,
                    'qualification_id' => 6,
                    'fieldStudy_id' => '["9","11","15"]',
                    'title' => 'Graduate Research Scholarships',
                    'short_description' => 'The Western Sydney University provides a wide range of research scholarships to support domestic and international research candidates. Scholarships are awarded based on a competitive process and are open to both new and current candidates',
                    'banner' => 135,
                    'meta_title' => NULL,
                    'description' => '<p style="text-align: justify; border: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: 0px; padding: 0px;"><font color="#000003" face="Public Sans, sans-serif"><span style="font-size: 15px;">FreelancerEdu can connect you with experienced consultants who have received scholarships in your field. They can review your application and provide valuable feedback to to ensure you submit a competitive application</span></font><br></p>',
                    'meta_img' => NULL,
                    'meta_description' => NULL,
                    'meta_keywords' => NULL,
                    'status' => 1,
                    'slug' => 'graduate-research-scholarships-',
                    'created_at' => '2023-05-24 16:32:28',
                    'updated_at' => '2023-06-21 02:44:08',
                    'deleted_at' => NULL,
                ),
            4 =>
                array(
                    'id' => 7,
                    'category_id' => 5,
                    'level_id' => 4,
                    'university_id' => 4,
                    'website_link' => 'https://www.utas.edu.au/study?gad=1&gclid=Cj0KCQjwnMWkBhDLARIsAHBOftrO--UEK1mtwF_D_pMGiKb32X5eTul1fBnNVyitgYrhVMY_bcV1T9oaAn5gEALw_wcB&gclsrc=aw.ds',
                    'country_id' => 6,
                    'city_id' => 3,
                    'whoCanApply_id' => 9,
                    'qualification_id' => 6,
                    'fieldStudy_id' => '["8","12","13","15"]',
                    'title' => 'Graduate Research Scholarships',
                    'short_description' => 'The University of Tasmania provides a wide range of research scholarships to support domestic and international research candidates. Scholarships are awarded based on a competitive process and are open to both new and current candidates',
                    'banner' => 110,
                    'meta_title' => NULL,
                    'description' => '<p style="text-align: justify; "><font color="#000003" face="Public Sans, sans-serif"><span style="font-size: 15px;">FreelancerEdu can connect you with experienced consultants who have received scholarships in your field. They can review your application and provide valuable feedback to to ensure you submit a competitive application</span></font><br></p>',
                    'meta_img' => NULL,
                    'meta_description' => NULL,
                    'meta_keywords' => NULL,
                    'status' => 1,
                    'slug' => 'graduate-research-scholarships-',
                    'created_at' => '2023-05-27 19:20:10',
                    'updated_at' => '2023-06-21 02:42:56',
                    'deleted_at' => NULL,
                ),
            5 =>
                array(
                    'id' => 8,
                    'category_id' => 6,
                    'level_id' => 4,
                    'university_id' => 3,
                    'website_link' => 'https://www.vu.edu.au/',
                    'country_id' => 6,
                    'city_id' => 4,
                    'whoCanApply_id' => 10,
                    'qualification_id' => 6,
                    'fieldStudy_id' => '["6","8","9","13"]',
                    'title' => 'Graduate Research Scholarships',
                    'short_description' => 'Macquarie University was established in 1964 as a bold experiment in higher education. Built to break from traditions and work in tandem with industry, we strive for the extraordinary by challenging convention and embracing different views.',
                    'banner' => 108,
                    'meta_title' => NULL,
                    'description' => '<p style="text-align: justify; box-sizing: inherit; margin-right: 0px; margin-bottom: 16px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; word-break: break-word;"><font color="#000003" face="Public Sans, sans-serif"><span style="font-size: 15px;">FreelancerEdu can connect you with experienced consultants who have received scholarships in your field. They can review your application and provide valuable feedback to to ensure you submit a competitive application</span></font><br></p>',
                    'meta_img' => NULL,
                    'meta_description' => NULL,
                    'meta_keywords' => NULL,
                    'status' => 1,
                    'slug' => 'graduate-research-scholarships',
                    'created_at' => '2023-05-27 20:07:18',
                    'updated_at' => '2023-06-21 02:39:24',
                    'deleted_at' => NULL,
                ),
            6 =>
                array(
                    'id' => 9,
                    'category_id' => 6,
                    'level_id' => 5,
                    'university_id' => 1,
                    'website_link' => 'https://www.westernsydney.edu.au/',
                    'country_id' => 5,
                    'city_id' => 3,
                    'whoCanApply_id' => 9,
                    'qualification_id' => 6,
                    'fieldStudy_id' => '["7","9","14","15"]',
                    'title' => 'Graduate Research Scholarships',
                    'short_description' => 'The Western Sydney University provides a wide range of research scholarships to support domestic and international research candidates. Scholarships are awarded based on a competitive process and are open to both new and current candidates',
                    'banner' => 113,
                    'meta_title' => NULL,
                    'description' => '<p style="text-align: justify; "><font color="#000003" face="Public Sans, sans-serif"><span style="font-size: 15px;">FreelancerEdu can connect you with experienced consultants who have received scholarships in your field. They can review your application and provide valuable feedback to to ensure you submit a competitive application</span></font><br></p>',
                    'meta_img' => NULL,
                    'meta_description' => NULL,
                    'meta_keywords' => NULL,
                    'status' => 1,
                    'slug' => 'graduate-research-scholarships-',
                    'created_at' => '2023-06-07 09:54:20',
                    'updated_at' => '2023-06-21 02:38:13',
                    'deleted_at' => NULL,
                ),
            7 =>
                array(
                    'id' => 10,
                    'category_id' => 6,
                    'level_id' => 5,
                    'university_id' => 8,
                    'website_link' => 'https://www.mq.edu.au/',
                    'country_id' => 38,
                    'city_id' => 3,
                    'whoCanApply_id' => 9,
                    'qualification_id' => 6,
                    'fieldStudy_id' => '["7","8","12","14"]',
                    'title' => 'Graduate Research Scholarships',
                    'short_description' => 'HAN University provides a wide range of research scholarships to support domestic and international research candidates. Scholarships are awarded based on a competitive process and are open to both new and current candidates',
                    'banner' => 139,
                    'meta_title' => NULL,
                    'description' => '<p style="text-align: justify; "><font color="#000003" face="Public Sans, sans-serif"><span style="font-size: 15px;">FreelancerEdu can connect you with experienced consultants who have received scholarships in your field. They can review your application and provide valuable feedback to to ensure you submit a competitive application</span></font><br></p>',
                    'meta_img' => NULL,
                    'meta_description' => NULL,
                    'meta_keywords' => NULL,
                    'status' => 1,
                    'slug' => 'graduate-research-scholarships-',
                    'created_at' => '2023-06-07 09:59:11',
                    'updated_at' => '2023-06-21 02:37:39',
                    'deleted_at' => NULL,
                ),
            8 =>
                array(
                    'id' => 11,
                    'category_id' => 5,
                    'level_id' => 6,
                    'university_id' => 2,
                    'website_link' => 'https://www.unimelb.edu.au/',
                    'country_id' => 5,
                    'city_id' => 5,
                    'whoCanApply_id' => 9,
                    'qualification_id' => 6,
                    'fieldStudy_id' => '["6","8","9","11","12","14","15"]',
                    'title' => 'Graduate Research Scholarships',
                    'short_description' => 'Melbourne International Undergraduate Scholarship is a partially funded scholarship for international students. The University of Melbourne provides scholarships each year for undergraduate studies.',
                    'banner' => 109,
                    'meta_title' => NULL,
                    'description' => '<p><font color="#222222" face="open sans"><span style="font-size: 16px;">FreelancerEdu can connect you with experienced consultants who have received scholarships in your field. They can review your application and provide valuable feedback to to ensure you submit a competitive application</span></font><br></p>',
                    'meta_img' => NULL,
                    'meta_description' => NULL,
                    'meta_keywords' => NULL,
                    'status' => 1,
                    'slug' => 'graduate-research-scholarships-',
                    'created_at' => '2023-06-07 10:04:20',
                    'updated_at' => '2023-06-21 02:37:08',
                    'deleted_at' => NULL,
                ),
            9 =>
                array(
                    'id' => 12,
                    'category_id' => 5,
                    'level_id' => 5,
                    'university_id' => 4,
                    'website_link' => 'https://www.utas.edu.au/study?gad=1&gclid=Cj0KCQjwnMWkBhDLARIsAHBOftrO--UEK1mtwF_D_pMGiKb32X5eTul1fBnNVyitgYrhVMY_bcV1T9oaAn5gEALw_wcB&gclsrc=aw.ds',
                    'country_id' => 5,
                    'city_id' => 4,
                    'whoCanApply_id' => 9,
                    'qualification_id' => 6,
                    'fieldStudy_id' => '["6","7","8","9","12","13","14","15"]',
                    'title' => 'Graduate Research Scholarships',
                    'short_description' => 'FreelancerEdu can connect you with experienced consultants who have received scholarships in your field. They can review your application and provide valuable feedback to to ensure you submit a competitive application.',
                    'banner' => 110,
                    'meta_title' => NULL,
                    'description' => '<p><span style="color: rgb(0, 0, 3); font-family: &quot;Public Sans&quot;, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(247, 247, 247);">FreelancerEdu can connect you with experienced consultants who have received scholarships in your field. They can review your application and provide valuable feedback to to ensure you submit a competitive application.</span><br></p>',
                    'meta_img' => NULL,
                    'meta_description' => NULL,
                    'meta_keywords' => NULL,
                    'status' => 1,
                    'slug' => 'graduate-research-scholarships-',
                    'created_at' => '2023-06-14 15:37:54',
                    'updated_at' => '2023-06-21 02:36:28',
                    'deleted_at' => NULL,
                ),
            10 =>
                array(
                    'id' => 13,
                    'category_id' => 6,
                    'level_id' => 4,
                    'university_id' => 3,
                    'website_link' => 'https://www.vu.edu.au/',
                    'country_id' => 6,
                    'city_id' => 4,
                    'whoCanApply_id' => 10,
                    'qualification_id' => 6,
                    'fieldStudy_id' => '["6","7","9","10","12","13","14","15"]',
                    'title' => 'Graduate Research Scholarships',
                    'short_description' => 'FreelancerEdu can connect you with experienced consultants who have received scholarships in your field. They can review your application and provide valuable feedback to to ensure you submit a competitive application.',
                    'banner' => 109,
                    'meta_title' => NULL,
                    'description' => '<p><span style="color: rgb(0, 0, 3); font-family: &quot;Public Sans&quot;, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(247, 247, 247);">FreelancerEdu can connect you with experienced consultants who have received scholarships in your field. They can review your application and provide valuable feedback to to ensure you submit a competitive application.</span><br></p>',
                    'meta_img' => NULL,
                    'meta_description' => NULL,
                    'meta_keywords' => NULL,
                    'status' => 1,
                    'slug' => 'graduate-research-scholarships-',
                    'created_at' => '2023-06-14 15:47:43',
                    'updated_at' => '2023-06-21 02:36:11',
                    'deleted_at' => NULL,
                ),
        ));
    }
}
