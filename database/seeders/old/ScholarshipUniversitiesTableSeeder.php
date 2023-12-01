<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class ScholarshipUniversitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('scholarship_universities')->delete();

        DB::table('scholarship_universities')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'university_name' => 'Western Sydney University',
                    'slug' => 'Western-Sydney-University',
                    'logo' => 'assets/university-logo/western_sydney_university.png',
                    'created_at' => '2023-05-23 19:06:58',
                    'updated_at' => '2023-05-23 19:06:58',
                    'deleted_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 2,
                    'university_name' => 'The University of Melbourne',
                    'slug' => 'The-University-of-Melbourne',
                    'logo' => 'assets/university-logo/university_of_melbourne.png',
                    'created_at' => '2023-05-23 21:51:19',
                    'updated_at' => '2023-05-23 21:51:19',
                    'deleted_at' => NULL,
                ),
            2 =>
                array(
                    'id' => 3,
                    'university_name' => 'Victoria University',
                    'slug' => 'Victoria-University',
                    'logo' => 'assets/university-logo/victoria_university.png',
                    'created_at' => '2023-05-23 21:51:39',
                    'updated_at' => '2023-05-23 21:51:39',
                    'deleted_at' => NULL,
                ),
            3 =>
                array(
                    'id' => 4,
                    'university_name' => 'University of Tasmania',
                    'slug' => 'University-of-Tasmania',
                    'logo' => 'assets/university-logo/university_of_tasmania.png',
                    'created_at' => '2023-05-23 21:51:52',
                    'updated_at' => '2023-05-23 21:53:17',
                    'deleted_at' => NULL,
                ),
            4 =>
                array(
                    'id' => 5,
                    'university_name' => 'Western Sydney University',
                    'slug' => 'Western-Sydney-University',
                    'logo' => 'assets/university-logo/western_sydney_university.png',
                    'created_at' => '2023-05-23 21:53:39',
                    'updated_at' => '2023-05-23 21:53:48',
                    'deleted_at' => '2023-05-23 21:53:48',
                ),
            5 =>
                array(
                    'id' => 6,
                    'university_name' => 'Australia',
                    'slug' => 'Australia',
                    'logo' => 'assets/university-logo/australian_catholic_university.png',
                    'created_at' => '2023-05-24 14:50:52',
                    'updated_at' => '2023-05-24 16:06:30',
                    'deleted_at' => '2023-05-24 16:06:30',
                ),
            6 =>
                array(
                    'id' => 7,
                    'university_name' => 'Macquarie University',
                    'slug' => 'Macquarie-University',
                    'logo' => 'assets/university-logo/macquarie_university.png',
                    'created_at' => '2023-05-27 20:05:18',
                    'updated_at' => '2023-06-13 14:50:35',
                    'deleted_at' => '2023-06-13 14:50:35',
                ),
            7 =>
                array(
                    'id' => 8,
                    'university_name' => 'Macquarie University',
                    'slug' => 'Macquarie-University',
                    'logo' => 'assets/university-logo/macquarie_university.png',
                    'created_at' => '2023-06-13 14:50:42',
                    'updated_at' => '2023-06-13 14:50:42',
                    'deleted_at' => NULL,
                ),
            8 =>
                array(
                    'id' => 9,
                    'university_name' => 'Brock University',
                    'slug' => 'Brock-University',
                    'logo' => 'assets/university-logo/brock.png',
                    'created_at' => '2023-06-14 15:26:47',
                    'updated_at' => '2023-06-14 15:26:47',
                    'deleted_at' => NULL,
                ),
            9 =>
                array(
                    'id' => 10,
                    'university_name' => 'HAN University',
                    'slug' => 'HAN-University',
                    'logo' => 'assets/university-logo/han.png',
                    'created_at' => '2023-06-17 03:36:41',
                    'updated_at' => '2023-06-17 03:36:41',
                    'deleted_at' => NULL,
                ),
        ));
    }
}
