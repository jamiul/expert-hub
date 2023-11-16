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
                    'id' => 1,
                    'category_id' => 5,
                    'level_id' => 6,
                    'university_id' => 6,
                    'website_link' => 'https://www.vu.edu.au/vu-sydney',
                    'country_id' => 5,
                    'city_id' => 246,
                    'value' => '45.000',
                    'study_area' => 'Art, Architecture, Business',
                    'student_type' => 'Domestic, International',
                    'find_supervisor' => null,
                    'application_process' => 'https://study.anu.edu.au/scholarships/find-scholarship',
                    'inquiry_institution' => 'gro@anu.edu.au',
                    'whoCanApply_id' => 9,
                    'qualification_id' => 6,
                    'fieldStudy_id' => '["8","9","10","11"]',
                    'title' => 'ANU Postgraduate Research Scholarships',
                    'short_description' => 'Each year the Australian National University offers  the University Research Scholarship to support high achieving HDR students who are conducting research which aligns with the strategic directions of the University. 
                    ANU currently conducts two annual central scholarship rounds which includes the University Research Scholarship, AGRTP, and a few other centrally managed scholarships.',
                    'banner' => 136,
                    'meta_title' => NULL,
                    'description' => '<p style="margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 0px !important;"><span class="up-truncation mb-15 mb-lg-20 d-block" data-v-c07fdf08="" style="text-align: justify; margin-bottom: 20px !important;"><span id="up-truncation-9" style=""><font color="#000003" face="Public Sans, sans-serif"><span style="font-size: 15px;">EduExHub can connect you with experienced consultants who have received scholarships in your field. They can review your application and provide valuable feedback to to ensure you submit a competitive application</span></font><br></span></span></p>',
                    'meta_img' => NULL,
                    'meta_description' => NULL,
                    'meta_keywords' => NULL,
                    'status' => 1,
                    'slug' => 'anu-postgraduate-research-scholarships',
                    'created_at' => '2023-05-20 21:55:52',
                    'updated_at' => '2023-06-21 02:47:30',
                    'deleted_at' => NULL,
                ),

            1 =>
                array(
                    'id' => 2,
                    'category_id' => 7,
                    'level_id' => 4,
                    'university_id' => 1,
                    'website_link' => 'https://www.vu.edu.au/vu-sydney',
                    'country_id' => 5,
                    'city_id' => 270,
                    'value' => '35.000',
                    'study_area' => 'Art, Architecture, Business',
                    'student_type' => 'Domestic, International',
                    'find_supervisor' => 'https://www.westernsydney.edu.au/future/study/how-to-apply/higher-degree-research-candidates/find-a-supervisor',
                    'application_process' => 'https://www.westernsydney.edu.au/schools/grs/scholarships/main_round_scholarships',
                    'inquiry_institution' => 'gro@anu.edu.au',
                    'whoCanApply_id' => 10,
                    'qualification_id' => 6,
                    'fieldStudy_id' => '["8","9","10","11"]',
                    'title' => 'Graduate research scholarships',
                    'short_description' => 'Western Sydney University provides a wide range of research scholarships to support domestic and international research candidates. Scholarships are awarded based on a competitive process and are open to both new and current candidates.
                    The scholarship pages below contain more information about what scholarships are available, eligibility criteria and how to apply. These pages are updated regularly so visit here for updates.',
                    'banner' => 136,
                    'meta_title' => NULL,
                    'description' => '<p style="margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 0px !important;"><span class="up-truncation mb-15 mb-lg-20 d-block" data-v-c07fdf08="" style="text-align: justify; margin-bottom: 20px !important;"><span id="up-truncation-9" style=""><font color="#000003" face="Public Sans, sans-serif"><span style="font-size: 15px;">EduExHub can connect you with experienced consultants who have received scholarships in your field. They can review your application and provide valuable feedback to to ensure you submit a competitive application</span></font><br></span></span></p>',
                    'meta_img' => NULL,
                    'meta_description' => NULL,
                    'meta_keywords' => NULL,
                    'status' => 1,
                    'slug' => 'graduate-research-scholarships',
                    'created_at' => '2023-05-20 21:55:52',
                    'updated_at' => '2023-06-21 02:47:30',
                    'deleted_at' => NULL,
                ),

            2 =>
                array(
                    'id' => 3,
                    'category_id' => 7,
                    'level_id' => 4,
                    'university_id' => 2,
                    'website_link' => 'https://www.vu.edu.au/vu-sydney',
                    'country_id' => 38,
                    'city_id' => 3924,
                    'value' => '30.000',
                    'study_area' => 'Art, Architecture, Business',
                    'student_type' => 'Domestic, International',
                    'find_supervisor' => null,
                    'application_process' => 'https://grad.ucla.edu/funding/financial-aid/funding-for-entering-students/fellowships-grants/',
                    'inquiry_institution' => null,
                    'whoCanApply_id' => 11,
                    'qualification_id' => 6,
                    'fieldStudy_id' => '["8","9","10","11"]',
                    'title' => 'University of California Graduate Research Scholarship',
                    'short_description' => 'Western Sydney University provides a wide range of research scholarships to support domestic and international research candidates. Scholarships are awarded based on a competitive process and are open to both new and current candidates.
                    The scholarship pages below contain more information about what scholarships are available, eligibility criteria and how to apply. These pages are updated regularly so visit here for updates.',
                    'banner' => 136,
                    'meta_title' => NULL,
                    'description' => '<p style="margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 0px !important;"><span class="up-truncation mb-15 mb-lg-20 d-block" data-v-c07fdf08="" style="text-align: justify; margin-bottom: 20px !important;"><span id="up-truncation-9" style=""><font color="#000003" face="Public Sans, sans-serif"><span style="font-size: 15px;">EduExHub can connect you with experienced consultants who have received scholarships in your field. They can review your application and provide valuable feedback to to ensure you submit a competitive application</span></font><br></span></span></p>',
                    'meta_img' => NULL,
                    'meta_description' => NULL,
                    'meta_keywords' => NULL,
                    'status' => 1,
                    'slug' => 'university-of-california-graduate-research-scholarship',
                    'created_at' => '2023-05-20 21:55:52',
                    'updated_at' => '2023-06-21 02:47:30',
                    'deleted_at' => NULL,
                ),

            3 =>
                array(
                    'id' => 4,
                    'category_id' => 6,
                    'level_id' => 5,
                    'university_id' => 2,
                    'website_link' => 'https://www.vu.edu.au/vu-sydney',
                    'country_id' => 37,
                    'city_id' => 3884,
                    'value' => '30.000',
                    'study_area' => 'Art, Architecture, Business',
                    'student_type' => 'Domestic, International',
                    'find_supervisor' => null,
                    'application_process' => 'https://www.ox.ac.uk/admissions/graduate/fees-and-funding/oxford-funding',
                    'inquiry_institution' => null,
                    'whoCanApply_id' => 9,
                    'qualification_id' => 6,
                    'fieldStudy_id' => '["8","9","10","11"]',
                    'title' => 'University of Oxford',
                    'short_description' => 'The University of Oxford Graduate Research Scholarship is a prestigious program designed to support outstanding graduate students in their research endeavors. The scholarship is available across multiple disciplines and campuses within the University of Oxford system.',
                    'banner' => 136,
                    'meta_title' => NULL,
                    'description' => '<p style="margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 0px !important;"><span class="up-truncation mb-15 mb-lg-20 d-block" data-v-c07fdf08="" style="text-align: justify; margin-bottom: 20px !important;"><span id="up-truncation-9" style=""><font color="#000003" face="Public Sans, sans-serif"><span style="font-size: 15px;">EduExHub can connect you with experienced consultants who have received scholarships in your field. They can review your application and provide valuable feedback to to ensure you submit a competitive application</span></font><br></span></span></p>',
                    'meta_img' => NULL,
                    'meta_description' => NULL,
                    'meta_keywords' => NULL,
                    'status' => 1,
                    'slug' => 'university-of-oxford',
                    'created_at' => '2023-05-20 21:55:52',
                    'updated_at' => '2023-06-21 02:47:30',
                    'deleted_at' => NULL,
                ),
        ));
    }
}
