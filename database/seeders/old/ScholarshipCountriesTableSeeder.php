<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class ScholarshipCountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('scholarship_countries')->delete();

        DB::table('scholarship_countries')->insert(array(
            0 =>
                array(
                    'id' => 5,
                    'country_name' => 'Australia',
                    'slug' => 'Australia',
                    'created_at' => '2023-05-24 14:53:11',
                    'updated_at' => '2023-05-24 14:53:11',
                    'deleted_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 6,
                    'country_name' => 'Canada',
                    'slug' => 'Canada',
                    'created_at' => '2023-05-24 15:04:55',
                    'updated_at' => '2023-05-24 15:04:55',
                    'deleted_at' => NULL,
                ),
            2 =>
                array(
                    'id' => 7,
                    'country_name' => 'Malaishiya',
                    'slug' => 'Malaishiya',
                    'created_at' => '2023-05-24 15:05:39',
                    'updated_at' => '2023-06-06 17:49:46',
                    'deleted_at' => '2023-06-06 17:49:46',
                ),
            3 =>
                array(
                    'id' => 8,
                    'country_name' => 'Austria',
                    'slug' => 'Austria',
                    'created_at' => '2023-06-06 17:44:55',
                    'updated_at' => '2023-06-06 17:44:55',
                    'deleted_at' => NULL,
                ),
            4 =>
                array(
                    'id' => 9,
                    'country_name' => 'Belgium',
                    'slug' => 'Belgium',
                    'created_at' => '2023-06-06 17:45:02',
                    'updated_at' => '2023-06-06 17:45:02',
                    'deleted_at' => NULL,
                ),
            5 =>
                array(
                    'id' => 10,
                    'country_name' => 'Brazil',
                    'slug' => 'Brazil',
                    'created_at' => '2023-06-06 17:45:09',
                    'updated_at' => '2023-06-06 17:45:09',
                    'deleted_at' => NULL,
                ),
            6 =>
                array(
                    'id' => 11,
                    'country_name' => 'Canada',
                    'slug' => 'Canada',
                    'created_at' => '2023-06-06 17:45:14',
                    'updated_at' => '2023-06-06 17:45:14',
                    'deleted_at' => NULL,
                ),
            7 =>
                array(
                    'id' => 12,
                    'country_name' => 'China',
                    'slug' => 'China',
                    'created_at' => '2023-06-06 17:45:20',
                    'updated_at' => '2023-06-06 17:45:20',
                    'deleted_at' => NULL,
                ),
            8 =>
                array(
                    'id' => 13,
                    'country_name' => 'Denmark',
                    'slug' => 'Denmark',
                    'created_at' => '2023-06-06 17:45:26',
                    'updated_at' => '2023-06-06 17:45:26',
                    'deleted_at' => NULL,
                ),
            9 =>
                array(
                    'id' => 14,
                    'country_name' => 'Finland',
                    'slug' => 'Finland',
                    'created_at' => '2023-06-06 17:45:36',
                    'updated_at' => '2023-06-06 17:45:36',
                    'deleted_at' => NULL,
                ),
            10 =>
                array(
                    'id' => 15,
                    'country_name' => 'France',
                    'slug' => 'France',
                    'created_at' => '2023-06-06 17:46:03',
                    'updated_at' => '2023-06-06 17:46:03',
                    'deleted_at' => NULL,
                ),
            11 =>
                array(
                    'id' => 16,
                    'country_name' => 'Germany',
                    'slug' => 'Germany',
                    'created_at' => '2023-06-06 17:46:08',
                    'updated_at' => '2023-06-06 17:46:08',
                    'deleted_at' => NULL,
                ),
            12 =>
                array(
                    'id' => 17,
                    'country_name' => 'Hong Kong',
                    'slug' => 'Hong-Kong',
                    'created_at' => '2023-06-06 17:46:13',
                    'updated_at' => '2023-06-06 17:46:13',
                    'deleted_at' => NULL,
                ),
            13 =>
                array(
                    'id' => 18,
                    'country_name' => 'India',
                    'slug' => 'India',
                    'created_at' => '2023-06-06 17:46:21',
                    'updated_at' => '2023-06-06 17:46:21',
                    'deleted_at' => NULL,
                ),
            14 =>
                array(
                    'id' => 19,
                    'country_name' => 'Ireland',
                    'slug' => 'Ireland',
                    'created_at' => '2023-06-06 17:46:26',
                    'updated_at' => '2023-06-06 17:46:26',
                    'deleted_at' => NULL,
                ),
            15 =>
                array(
                    'id' => 20,
                    'country_name' => 'Italy',
                    'slug' => 'Italy',
                    'created_at' => '2023-06-06 17:46:32',
                    'updated_at' => '2023-06-06 17:49:19',
                    'deleted_at' => NULL,
                ),
            16 =>
                array(
                    'id' => 21,
                    'country_name' => 'Japan',
                    'slug' => 'Japan',
                    'created_at' => '2023-06-06 17:47:00',
                    'updated_at' => '2023-06-06 17:47:00',
                    'deleted_at' => NULL,
                ),
            17 =>
                array(
                    'id' => 22,
                    'country_name' => 'Malaysia',
                    'slug' => 'Malaysia',
                    'created_at' => '2023-06-06 17:47:05',
                    'updated_at' => '2023-06-06 17:47:05',
                    'deleted_at' => NULL,
                ),
            18 =>
                array(
                    'id' => 23,
                    'country_name' => 'Netherlands',
                    'slug' => 'Netherlands',
                    'created_at' => '2023-06-06 17:47:11',
                    'updated_at' => '2023-06-06 17:47:11',
                    'deleted_at' => NULL,
                ),
            19 =>
                array(
                    'id' => 24,
                    'country_name' => 'New Zealand',
                    'slug' => 'New-Zealand',
                    'created_at' => '2023-06-06 17:47:16',
                    'updated_at' => '2023-06-06 17:47:16',
                    'deleted_at' => NULL,
                ),
            20 =>
                array(
                    'id' => 25,
                    'country_name' => 'Norway',
                    'slug' => 'Norway',
                    'created_at' => '2023-06-06 17:47:20',
                    'updated_at' => '2023-06-06 17:47:20',
                    'deleted_at' => NULL,
                ),
            21 =>
                array(
                    'id' => 26,
                    'country_name' => 'Russia',
                    'slug' => 'Russia',
                    'created_at' => '2023-06-06 17:47:25',
                    'updated_at' => '2023-06-06 17:47:25',
                    'deleted_at' => NULL,
                ),
            22 =>
                array(
                    'id' => 27,
                    'country_name' => 'Saudi Arabia',
                    'slug' => 'Saudi-Arabia',
                    'created_at' => '2023-06-06 17:47:29',
                    'updated_at' => '2023-06-06 17:47:29',
                    'deleted_at' => NULL,
                ),
            23 =>
                array(
                    'id' => 28,
                    'country_name' => 'Singapore',
                    'slug' => 'Singapore',
                    'created_at' => '2023-06-06 17:47:34',
                    'updated_at' => '2023-06-06 17:47:34',
                    'deleted_at' => NULL,
                ),
            24 =>
                array(
                    'id' => 29,
                    'country_name' => 'South Africa',
                    'slug' => 'South-Africa',
                    'created_at' => '2023-06-06 17:47:40',
                    'updated_at' => '2023-06-06 17:47:40',
                    'deleted_at' => NULL,
                ),
            25 =>
                array(
                    'id' => 30,
                    'country_name' => 'South Korea',
                    'slug' => 'South-Korea',
                    'created_at' => '2023-06-06 17:47:45',
                    'updated_at' => '2023-06-06 17:47:45',
                    'deleted_at' => NULL,
                ),
            26 =>
                array(
                    'id' => 31,
                    'country_name' => 'Spain',
                    'slug' => 'Spain',
                    'created_at' => '2023-06-06 17:47:51',
                    'updated_at' => '2023-06-06 17:47:51',
                    'deleted_at' => NULL,
                ),
            27 =>
                array(
                    'id' => 32,
                    'country_name' => 'Sweden',
                    'slug' => 'Sweden',
                    'created_at' => '2023-06-06 17:47:58',
                    'updated_at' => '2023-06-06 17:47:58',
                    'deleted_at' => NULL,
                ),
            28 =>
                array(
                    'id' => 33,
                    'country_name' => 'Switzerland',
                    'slug' => 'Switzerland',
                    'created_at' => '2023-06-06 17:48:13',
                    'updated_at' => '2023-06-06 17:48:13',
                    'deleted_at' => NULL,
                ),
            29 =>
                array(
                    'id' => 34,
                    'country_name' => 'Taiwan',
                    'slug' => 'Taiwan',
                    'created_at' => '2023-06-06 17:48:18',
                    'updated_at' => '2023-06-06 17:48:18',
                    'deleted_at' => NULL,
                ),
            30 =>
                array(
                    'id' => 35,
                    'country_name' => 'Türkiye',
                    'slug' => 'Trkiye',
                    'created_at' => '2023-06-06 17:48:30',
                    'updated_at' => '2023-06-06 17:48:30',
                    'deleted_at' => NULL,
                ),
            31 =>
                array(
                    'id' => 36,
                    'country_name' => 'United Arab Emirates',
                    'slug' => 'United-Arab-Emirates',
                    'created_at' => '2023-06-06 17:48:40',
                    'updated_at' => '2023-06-06 17:48:40',
                    'deleted_at' => NULL,
                ),
            32 =>
                array(
                    'id' => 37,
                    'country_name' => 'United Kingdom',
                    'slug' => 'United-Kingdom',
                    'created_at' => '2023-06-06 17:48:50',
                    'updated_at' => '2023-06-06 17:48:50',
                    'deleted_at' => NULL,
                ),
            33 =>
                array(
                    'id' => 38,
                    'country_name' => 'United States',
                    'slug' => 'United-States',
                    'created_at' => '2023-06-06 17:49:10',
                    'updated_at' => '2023-06-06 17:49:10',
                    'deleted_at' => NULL,
                ),
        ));
    }
}
