<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class ScholarshipFieldStudiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('scholarship_field_studies')->delete();

        DB::table('scholarship_field_studies')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'name' => 'Undergraduate',
                    'slug' => 'Undergraduate',
                    'created_at' => '2023-05-20 21:11:57',
                    'updated_at' => '2023-05-31 18:33:47',
                    'deleted_at' => '2023-05-31 18:33:47',
                ),
            1 =>
                array(
                    'id' => 2,
                    'name' => 'masum',
                    'slug' => 'masum',
                    'created_at' => '2023-05-20 21:12:03',
                    'updated_at' => '2023-05-23 16:57:55',
                    'deleted_at' => '2023-05-23 16:57:55',
                ),
            2 =>
                array(
                    'id' => 3,
                    'name' => 'Postgradute',
                    'slug' => 'Postgradute',
                    'created_at' => '2023-05-20 21:14:29',
                    'updated_at' => '2023-05-31 18:32:43',
                    'deleted_at' => '2023-05-31 18:32:43',
                ),
            3 =>
                array(
                    'id' => 4,
                    'name' => 'Western Sydney University',
                    'slug' => 'Western-Sydney-University',
                    'created_at' => '2023-05-23 18:55:32',
                    'updated_at' => '2023-05-23 23:56:37',
                    'deleted_at' => '2023-05-23 23:56:37',
                ),
            4 =>
                array(
                    'id' => 5,
                    'name' => 'Postgraduate Research',
                    'slug' => 'Postgraduate-Research',
                    'created_at' => '2023-05-31 15:40:51',
                    'updated_at' => '2023-05-31 18:30:32',
                    'deleted_at' => '2023-05-31 18:30:32',
                ),
            5 =>
                array(
                    'id' => 6,
                    'name' => 'Agriculture and Environmental Sciences',
                    'slug' => 'Agriculture-and-Environmental-Sciences',
                    'created_at' => '2023-05-31 18:36:10',
                    'updated_at' => '2023-05-31 18:36:10',
                    'deleted_at' => NULL,
                ),
            6 =>
                array(
                    'id' => 7,
                    'name' => 'Arts and Humanities',
                    'slug' => 'Arts-and-Humanities',
                    'created_at' => '2023-05-31 18:36:22',
                    'updated_at' => '2023-05-31 18:36:22',
                    'deleted_at' => NULL,
                ),
            7 =>
                array(
                    'id' => 8,
                    'name' => 'Business and Economics',
                    'slug' => 'Business-and-Economics',
                    'created_at' => '2023-05-31 18:36:41',
                    'updated_at' => '2023-05-31 18:36:41',
                    'deleted_at' => NULL,
                ),
            8 =>
                array(
                    'id' => 9,
                    'name' => 'Education',
                    'slug' => 'Education',
                    'created_at' => '2023-05-31 18:36:49',
                    'updated_at' => '2023-05-31 18:36:49',
                    'deleted_at' => NULL,
                ),
            9 =>
                array(
                    'id' => 10,
                    'name' => 'Health and Medicine',
                    'slug' => 'Health-and-Medicine',
                    'created_at' => '2023-05-31 18:36:59',
                    'updated_at' => '2023-05-31 18:36:59',
                    'deleted_at' => NULL,
                ),
            10 =>
                array(
                    'id' => 11,
                    'name' => 'Law',
                    'slug' => 'Law',
                    'created_at' => '2023-05-31 18:37:05',
                    'updated_at' => '2023-05-31 18:37:05',
                    'deleted_at' => NULL,
                ),
            11 =>
                array(
                    'id' => 12,
                    'name' => 'Mathematics and Statistics',
                    'slug' => 'Mathematics-and-Statistics',
                    'created_at' => '2023-05-31 18:37:17',
                    'updated_at' => '2023-05-31 18:37:17',
                    'deleted_at' => NULL,
                ),
            12 =>
                array(
                    'id' => 13,
                    'name' => 'Physical Education and Sports Science',
                    'slug' => 'Physical-Education-and-Sports-Science',
                    'created_at' => '2023-05-31 18:37:24',
                    'updated_at' => '2023-05-31 18:40:20',
                    'deleted_at' => NULL,
                ),
            13 =>
                array(
                    'id' => 14,
                    'name' => 'Science and Engineering',
                    'slug' => 'Science-and-Engineering',
                    'created_at' => '2023-05-31 18:41:28',
                    'updated_at' => '2023-05-31 18:41:28',
                    'deleted_at' => NULL,
                ),
            14 =>
                array(
                    'id' => 15,
                    'name' => 'Social Sciences',
                    'slug' => 'Social-Sciences',
                    'created_at' => '2023-05-31 18:41:40',
                    'updated_at' => '2023-05-31 18:41:40',
                    'deleted_at' => NULL,
                ),
        ));
    }
}
