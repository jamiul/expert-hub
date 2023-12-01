<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class ScholarshipCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('scholarship_categories')->delete();

        DB::table('scholarship_categories')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'category_name' => 'masum',
                    'slug' => 'masum',
                    'created_at' => '2023-05-20 16:16:12',
                    'updated_at' => '2023-05-29 09:41:13',
                    'deleted_at' => '2023-05-29 09:41:13',
                ),
            1 =>
                array(
                    'id' => 2,
                    'category_name' => 'raihan',
                    'slug' => 'raihan',
                    'created_at' => '2023-05-20 16:24:39',
                    'updated_at' => '2023-05-29 09:41:24',
                    'deleted_at' => '2023-05-29 09:41:24',
                ),
            2 =>
                array(
                    'id' => 3,
                    'category_name' => 'masum',
                    'slug' => 'masum',
                    'created_at' => '2023-05-20 20:57:42',
                    'updated_at' => '2023-05-29 09:41:16',
                    'deleted_at' => '2023-05-29 09:41:16',
                ),
            3 =>
                array(
                    'id' => 4,
                    'category_name' => 'masum',
                    'slug' => 'masum',
                    'created_at' => '2023-05-20 20:58:30',
                    'updated_at' => '2023-05-29 09:41:20',
                    'deleted_at' => '2023-05-29 09:41:20',
                ),
            4 =>
                array(
                    'id' => 5,
                    'category_name' => 'University Scholarship',
                    'slug' => 'University-Scholarship',
                    'created_at' => '2023-05-21 15:54:57',
                    'updated_at' => '2023-05-21 15:54:57',
                    'deleted_at' => NULL,
                ),
            5 =>
                array(
                    'id' => 6,
                    'category_name' => 'Government Scholarships',
                    'slug' => 'Government-Scholarships',
                    'created_at' => '2023-05-29 09:41:54',
                    'updated_at' => '2023-06-06 17:59:24',
                    'deleted_at' => NULL,
                ),
            6 =>
                array(
                    'id' => 7,
                    'category_name' => 'Project Scholarships',
                    'slug' => 'Project-Scholarships',
                    'created_at' => '2023-05-29 09:42:03',
                    'updated_at' => '2023-05-29 09:42:03',
                    'deleted_at' => NULL,
                ),
        ));
    }
}
