<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class BlogCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog_categories')->delete();

        DB::table('blog_categories')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'category_name' => 'Communication scholarship consultations',
                    'slug' => 'Communication-scholarship-consultations',
                    'created_at' => '2023-04-05 06:39:50',
                    'updated_at' => '2023-04-13 13:55:03',
                    'deleted_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 2,
                    'category_name' => 'Architecture scholarship consultations',
                    'slug' => 'Architecture-scholarship-consultations',
                    'created_at' => '2023-04-05 06:40:07',
                    'updated_at' => '2023-04-13 13:54:47',
                    'deleted_at' => NULL,
                ),
            2 =>
                array(
                    'id' => 3,
                    'category_name' => 'Linguistics scholarship consultations',
                    'slug' => 'Linguistics-scholarship-consultations',
                    'created_at' => '2023-04-05 06:40:47',
                    'updated_at' => '2023-04-13 13:54:30',
                    'deleted_at' => NULL,
                ),
            3 =>
                array(
                    'id' => 4,
                    'category_name' => 'Science scholarship consultations',
                    'slug' => 'Science-scholarship-consultations',
                    'created_at' => '2023-04-05 06:41:00',
                    'updated_at' => '2023-04-13 13:53:59',
                    'deleted_at' => NULL,
                ),
            4 =>
                array(
                    'id' => 5,
                    'category_name' => 'Psychology scholarship consultations',
                    'slug' => 'Psychology-scholarship-consultations',
                    'created_at' => '2023-04-13 13:55:18',
                    'updated_at' => '2023-04-13 13:55:18',
                    'deleted_at' => NULL,
                ),
            5 =>
                array(
                    'id' => 6,
                    'category_name' => 'Information technology scholarship consultations',
                    'slug' => 'Information-technology-scholarship-consultations',
                    'created_at' => '2023-04-13 13:55:30',
                    'updated_at' => '2023-04-13 13:56:09',
                    'deleted_at' => '2023-04-13 13:56:09',
                ),
            6 =>
                array(
                    'id' => 7,
                    'category_name' => 'Information technology scholarship consultations',
                    'slug' => 'Information-technology-scholarship-consultations',
                    'created_at' => '2023-04-13 13:55:39',
                    'updated_at' => '2023-04-13 13:55:39',
                    'deleted_at' => NULL,
                ),
            7 =>
                array(
                    'id' => 8,
                    'category_name' => 'Agriculture scholarship consultations',
                    'slug' => 'Agriculture-scholarship-consultations',
                    'created_at' => '2023-04-13 13:56:01',
                    'updated_at' => '2023-04-13 13:56:01',
                    'deleted_at' => NULL,
                ),
            8 =>
                array(
                    'id' => 9,
                    'category_name' => 'Environmental scholarship consultations',
                    'slug' => 'Environmental-scholarship-consultations',
                    'created_at' => '2023-04-13 13:56:22',
                    'updated_at' => '2023-04-13 13:56:22',
                    'deleted_at' => NULL,
                ),
            9 =>
                array(
                    'id' => 10,
                    'category_name' => 'Law scholarship consultations',
                    'slug' => 'Law-scholarship-consultations',
                    'created_at' => '2023-04-13 13:57:31',
                    'updated_at' => '2023-04-13 13:57:31',
                    'deleted_at' => NULL,
                ),
            10 =>
                array(
                    'id' => 11,
                    'category_name' => 'Education scholarship consultations',
                    'slug' => 'Education-scholarship-consultations',
                    'created_at' => '2023-04-13 13:57:42',
                    'updated_at' => '2023-04-13 13:57:42',
                    'deleted_at' => NULL,
                ),
            11 =>
                array(
                    'id' => 12,
                    'category_name' => 'Arts scholarship consultations',
                    'slug' => 'Arts-scholarship-consultations',
                    'created_at' => '2023-04-13 13:58:02',
                    'updated_at' => '2023-04-13 13:58:02',
                    'deleted_at' => NULL,
                ),
            12 =>
                array(
                    'id' => 13,
                    'category_name' => 'Humanities scholarship consultations',
                    'slug' => 'Humanities-scholarship-consultations',
                    'created_at' => '2023-04-13 13:58:16',
                    'updated_at' => '2023-04-13 13:58:16',
                    'deleted_at' => NULL,
                ),
            13 =>
                array(
                    'id' => 14,
                    'category_name' => 'Social science scholarship consultations',
                    'slug' => 'Social-science-scholarship-consultations',
                    'created_at' => '2023-04-13 13:58:59',
                    'updated_at' => '2023-04-13 13:58:59',
                    'deleted_at' => NULL,
                ),
            14 =>
                array(
                    'id' => 15,
                    'category_name' => 'Medical scholarship consultations',
                    'slug' => 'Medical-scholarship-consultations',
                    'created_at' => '2023-04-13 13:59:20',
                    'updated_at' => '2023-04-13 13:59:20',
                    'deleted_at' => NULL,
                ),
            15 =>
                array(
                    'id' => 16,
                    'category_name' => 'Engineering scholarship consultations',
                    'slug' => 'Engineering-scholarship-consultations',
                    'created_at' => '2023-04-13 13:59:38',
                    'updated_at' => '2023-04-13 13:59:38',
                    'deleted_at' => NULL,
                ),
            16 =>
                array(
                    'id' => 17,
                    'category_name' => 'Business scholarship consultations',
                    'slug' => 'Business-scholarship-consultations',
                    'created_at' => '2023-04-13 14:00:03',
                    'updated_at' => '2023-04-13 14:00:03',
                    'deleted_at' => NULL,
                ),
        ));
    }
}
