<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses')->delete();

        DB::table('addresses')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'addressable_id' => 4,
                    'addressable_type' => 'App\\Models\\User',
                    'street' => 'Mahallah Uthman block B-2.6',
                    'city_id' => 2310,
                    'postal_code' => '53100',
                    'phone' => '112795854',
                    'country_id' => 132,
                    'created_at' => '2023-04-05 09:10:10',
                    'updated_at' => '2023-04-13 17:08:11',
                    'deleted_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 2,
                    'addressable_id' => 5,
                    'addressable_type' => 'App\\Models\\User',
                    'street' => NULL,
                    'city_id' => NULL,
                    'postal_code' => NULL,
                    'phone' => NULL,
                    'country_id' => NULL,
                    'created_at' => '2023-04-05 09:11:20',
                    'updated_at' => '2023-04-05 09:11:20',
                    'deleted_at' => NULL,
                ),
            2 =>
                array(
                    'id' => 3,
                    'addressable_id' => 6,
                    'addressable_type' => 'App\\Models\\User',
                    'street' => 'Shaharatala',
                    'city_id' => 663,
                    'postal_code' => '7110',
                    'phone' => '098434',
                    'country_id' => 38,
                    'created_at' => '2023-04-06 13:09:05',
                    'updated_at' => '2023-06-07 04:54:32',
                    'deleted_at' => NULL,
                ),
            3 =>
                array(
                    'id' => 4,
                    'addressable_id' => 7,
                    'addressable_type' => 'App\\Models\\User',
                    'street' => NULL,
                    'city_id' => NULL,
                    'postal_code' => NULL,
                    'phone' => NULL,
                    'country_id' => NULL,
                    'created_at' => '2023-04-06 14:08:19',
                    'updated_at' => '2023-04-06 14:08:19',
                    'deleted_at' => NULL,
                ),
            4 =>
                array(
                    'id' => 5,
                    'addressable_id' => 8,
                    'addressable_type' => 'App\\Models\\User',
                    'street' => 'Delhi street',
                    'city_id' => 10,
                    'postal_code' => '568',
                    'phone' => '09833345',
                    'country_id' => 101,
                    'created_at' => '2023-04-06 17:49:15',
                    'updated_at' => '2023-06-07 05:10:00',
                    'deleted_at' => NULL,
                ),
            5 =>
                array(
                    'id' => 6,
                    'addressable_id' => 9,
                    'addressable_type' => 'App\\Models\\User',
                    'street' => NULL,
                    'city_id' => NULL,
                    'postal_code' => NULL,
                    'phone' => NULL,
                    'country_id' => NULL,
                    'created_at' => '2023-04-06 17:50:42',
                    'updated_at' => '2023-04-06 17:50:42',
                    'deleted_at' => NULL,
                ),
            6 =>
                array(
                    'id' => 7,
                    'addressable_id' => 10,
                    'addressable_type' => 'App\\Models\\User',
                    'street' => NULL,
                    'city_id' => NULL,
                    'postal_code' => NULL,
                    'phone' => NULL,
                    'country_id' => NULL,
                    'created_at' => '2023-04-06 18:56:03',
                    'updated_at' => '2023-04-06 18:56:03',
                    'deleted_at' => NULL,
                ),
            7 =>
                array(
                    'id' => 8,
                    'addressable_id' => 11,
                    'addressable_type' => 'App\\Models\\User',
                    'street' => '222 LINE ST',
                    'city_id' => 110,
                    'postal_code' => '2111',
                    'phone' => '0433 333 333',
                    'country_id' => 3,
                    'created_at' => '2023-04-07 09:14:24',
                    'updated_at' => '2023-04-07 09:24:30',
                    'deleted_at' => NULL,
                ),
            8 =>
                array(
                    'id' => 9,
                    'addressable_id' => 12,
                    'addressable_type' => 'App\\Models\\User',
                    'street' => 'Akerus street, Norway',
                    'city_id' => 2690,
                    'postal_code' => '456',
                    'phone' => '112795854',
                    'country_id' => 164,
                    'created_at' => '2023-04-13 18:14:27',
                    'updated_at' => '2023-06-07 05:35:16',
                    'deleted_at' => NULL,
                ),
            9 =>
                array(
                    'id' => 10,
                    'addressable_id' => 13,
                    'addressable_type' => 'App\\Models\\User',
                    'street' => 'Shaharatala',
                    'city_id' => 327,
                    'postal_code' => '7110',
                    'phone' => '01799593940',
                    'country_id' => 17,
                    'created_at' => '2023-04-14 11:25:49',
                    'updated_at' => '2023-06-07 04:52:01',
                    'deleted_at' => NULL,
                ),
            10 =>
                array(
                    'id' => 11,
                    'addressable_id' => 14,
                    'addressable_type' => 'App\\Models\\User',
                    'street' => 'Mahallah Uthman block B-2.6',
                    'city_id' => 2307,
                    'postal_code' => '53100',
                    'phone' => '112795854',
                    'country_id' => 132,
                    'created_at' => '2023-04-14 11:55:59',
                    'updated_at' => '2023-04-14 12:44:59',
                    'deleted_at' => NULL,
                ),
            11 =>
                array(
                    'id' => 12,
                    'addressable_id' => 15,
                    'addressable_type' => 'App\\Models\\User',
                    'street' => NULL,
                    'city_id' => NULL,
                    'postal_code' => NULL,
                    'phone' => NULL,
                    'country_id' => NULL,
                    'created_at' => '2023-04-14 13:00:21',
                    'updated_at' => '2023-04-14 13:00:21',
                    'deleted_at' => NULL,
                ),
            12 =>
                array(
                    'id' => 13,
                    'addressable_id' => 16,
                    'addressable_type' => 'App\\Models\\User',
                    'street' => '20-hasta, antwerpen',
                    'city_id' => 422,
                    'postal_code' => '3323',
                    'phone' => '0939942w',
                    'country_id' => 21,
                    'created_at' => '2023-04-15 12:15:20',
                    'updated_at' => '2023-06-07 05:39:16',
                    'deleted_at' => NULL,
                ),
            13 =>
                array(
                    'id' => 14,
                    'addressable_id' => 17,
                    'addressable_type' => 'App\\Models\\User',
                    'street' => 'dhaka-1203',
                    'city_id' => 348,
                    'postal_code' => '1203',
                    'phone' => '01128377367',
                    'country_id' => 18,
                    'created_at' => '2023-04-15 14:06:35',
                    'updated_at' => '2023-04-15 17:58:21',
                    'deleted_at' => NULL,
                ),
            14 =>
                array(
                    'id' => 15,
                    'addressable_id' => 18,
                    'addressable_type' => 'App\\Models\\User',
                    'street' => NULL,
                    'city_id' => NULL,
                    'postal_code' => NULL,
                    'phone' => NULL,
                    'country_id' => NULL,
                    'created_at' => '2023-04-15 17:14:19',
                    'updated_at' => '2023-04-15 17:14:19',
                    'deleted_at' => NULL,
                ),
            15 =>
                array(
                    'id' => 16,
                    'addressable_id' => 19,
                    'addressable_type' => 'App\\Models\\User',
                    'street' => 'Gombak',
                    'city_id' => 2310,
                    'postal_code' => '53100',
                    'phone' => '01128377367',
                    'country_id' => 132,
                    'created_at' => '2023-04-15 17:37:40',
                    'updated_at' => '2023-04-15 17:45:29',
                    'deleted_at' => NULL,
                ),
            16 =>
                array(
                    'id' => 17,
                    'addressable_id' => 20,
                    'addressable_type' => 'App\\Models\\User',
                    'street' => 'Buenos aires, 2093',
                    'city_id' => 208,
                    'postal_code' => '2345',
                    'phone' => '09955678',
                    'country_id' => 10,
                    'created_at' => '2023-05-11 23:43:44',
                    'updated_at' => '2023-06-07 04:44:43',
                    'deleted_at' => NULL,
                ),
            17 =>
                array(
                    'id' => 18,
                    'addressable_id' => 21,
                    'addressable_type' => 'App\\Models\\User',
                    'street' => '23-01 , north perth, Australia',
                    'city_id' => 268,
                    'postal_code' => '234',
                    'phone' => '098765',
                    'country_id' => 13,
                    'created_at' => '2023-05-21 18:57:52',
                    'updated_at' => '2023-06-07 05:44:05',
                    'deleted_at' => NULL,
                ),
            18 =>
                array(
                    'id' => 19,
                    'addressable_id' => 22,
                    'addressable_type' => 'App\\Models\\User',
                    'street' => 'London street 123',
                    'city_id' => 3815,
                    'postal_code' => '324',
                    'phone' => '23456',
                    'country_id' => 230,
                    'created_at' => '2023-06-05 09:06:58',
                    'updated_at' => '2023-06-07 05:29:21',
                    'deleted_at' => NULL,
                ),
            19 =>
                array(
                    'id' => 20,
                    'addressable_id' => 23,
                    'addressable_type' => 'App\\Models\\User',
                    'street' => NULL,
                    'city_id' => NULL,
                    'postal_code' => NULL,
                    'phone' => NULL,
                    'country_id' => NULL,
                    'created_at' => '2023-06-07 03:44:37',
                    'updated_at' => '2023-06-07 03:44:37',
                    'deleted_at' => NULL,
                ),
        ));
    }
}
