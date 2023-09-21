<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->delete();

        DB::table('permissions')->insert(array(
            0 =>
                array(
                    'id' => 58,
                    'name' => 'show running projects',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:05',
                    'updated_at' => '2021-04-10 22:06:05',
                ),
            1 =>
                array(
                    'id' => 59,
                    'name' => 'show all projects',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:05',
                    'updated_at' => '2021-04-10 22:06:05',
                ),
            2 =>
                array(
                    'id' => 60,
                    'name' => 'show open projects',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:05',
                    'updated_at' => '2021-04-10 22:06:05',
                ),
            3 =>
                array(
                    'id' => 61,
                    'name' => 'show cancelled projects',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:05',
                    'updated_at' => '2021-04-10 22:06:05',
                ),
            4 =>
                array(
                    'id' => 62,
                    'name' => 'show project cancel requests',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:05',
                    'updated_at' => '2021-04-10 22:06:05',
                ),
            5 =>
                array(
                    'id' => 63,
                    'name' => 'show project category',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:05',
                    'updated_at' => '2021-04-10 22:06:05',
                ),
            6 =>
                array(
                    'id' => 64,
                    'name' => 'show verification requests',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:05',
                    'updated_at' => '2021-04-10 22:06:05',
                ),
            7 =>
                array(
                    'id' => 65,
                    'name' => 'show user chats',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:05',
                    'updated_at' => '2021-04-10 22:06:05',
                ),
            8 =>
                array(
                    'id' => 66,
                    'name' => 'show all freelancers',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:05',
                    'updated_at' => '2021-04-10 22:06:05',
                ),
            9 =>
                array(
                    'id' => 67,
                    'name' => 'show freelancer packages',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:05',
                    'updated_at' => '2021-04-10 22:06:05',
                ),
            10 =>
                array(
                    'id' => 68,
                    'name' => 'show freelancer skills',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:05',
                    'updated_at' => '2021-04-10 22:06:05',
                ),
            11 =>
                array(
                    'id' => 69,
                    'name' => 'show freelancer badges',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:05',
                    'updated_at' => '2021-04-10 22:06:05',
                ),
            12 =>
                array(
                    'id' => 70,
                    'name' => 'show all clients',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:05',
                    'updated_at' => '2021-04-10 22:06:05',
                ),
            13 =>
                array(
                    'id' => 71,
                    'name' => 'show client packages',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:05',
                    'updated_at' => '2021-04-10 22:06:05',
                ),
            14 =>
                array(
                    'id' => 72,
                    'name' => 'show client badges',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:05',
                    'updated_at' => '2021-04-10 22:06:05',
                ),
            15 =>
                array(
                    'id' => 73,
                    'name' => 'show freelancers reviews',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:05',
                    'updated_at' => '2021-04-10 22:06:05',
                ),
            16 =>
                array(
                    'id' => 74,
                    'name' => 'show client reviews',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:05',
                    'updated_at' => '2021-04-10 22:06:05',
                ),
            17 =>
                array(
                    'id' => 75,
                    'name' => 'show active tickets',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:06',
                    'updated_at' => '2021-04-10 22:06:06',
                ),
            18 =>
                array(
                    'id' => 76,
                    'name' => 'show my tickets',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:06',
                    'updated_at' => '2021-04-10 22:06:06',
                ),
            19 =>
                array(
                    'id' => 77,
                    'name' => 'show solved tickets',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:06',
                    'updated_at' => '2021-04-10 22:06:06',
                ),
            20 =>
                array(
                    'id' => 78,
                    'name' => 'show support settings category',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:06',
                    'updated_at' => '2021-04-10 22:06:06',
                ),
            21 =>
                array(
                    'id' => 79,
                    'name' => 'show default assigned agent',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:06',
                    'updated_at' => '2021-04-10 22:06:06',
                ),
            22 =>
                array(
                    'id' => 80,
                    'name' => 'show project payments',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:06',
                    'updated_at' => '2021-04-10 22:06:06',
                ),
            23 =>
                array(
                    'id' => 81,
                    'name' => 'show package payments',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:06',
                    'updated_at' => '2021-04-10 22:06:06',
                ),
            24 =>
                array(
                    'id' => 82,
                    'name' => 'show service payments',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:06',
                    'updated_at' => '2021-04-10 22:06:06',
                ),
            25 =>
                array(
                    'id' => 83,
                    'name' => 'show freelancer withdraw requests',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:06',
                    'updated_at' => '2021-04-10 22:06:06',
                ),
            26 =>
                array(
                    'id' => 84,
                    'name' => 'show freelancer payouts',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:06',
                    'updated_at' => '2021-04-10 22:06:06',
                ),
            27 =>
                array(
                    'id' => 85,
                    'name' => 'show header',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:06',
                    'updated_at' => '2021-04-10 22:06:06',
                ),
            28 =>
                array(
                    'id' => 86,
                    'name' => 'show footer',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:06',
                    'updated_at' => '2021-04-10 22:06:06',
                ),
            29 =>
                array(
                    'id' => 87,
                    'name' => 'show pages',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:06',
                    'updated_at' => '2021-04-10 22:06:06',
                ),
            30 =>
                array(
                    'id' => 88,
                    'name' => 'show apperance',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:06',
                    'updated_at' => '2021-04-10 22:06:06',
                ),
            31 =>
                array(
                    'id' => 89,
                    'name' => 'show all staffs',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:06',
                    'updated_at' => '2021-04-10 22:06:06',
                ),
            32 =>
                array(
                    'id' => 90,
                    'name' => 'show employee roles',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:06',
                    'updated_at' => '2021-04-10 22:06:06',
                ),
            33 =>
                array(
                    'id' => 91,
                    'name' => 'show general setting',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:06',
                    'updated_at' => '2021-04-10 22:06:06',
                ),
            34 =>
                array(
                    'id' => 92,
                    'name' => 'show activation setting',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:06',
                    'updated_at' => '2021-04-10 22:06:06',
                ),
            35 =>
                array(
                    'id' => 93,
                    'name' => 'show system languages setting',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:06',
                    'updated_at' => '2021-04-10 22:06:06',
                ),
            36 =>
                array(
                    'id' => 94,
                    'name' => 'show system currency setting',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:06',
                    'updated_at' => '2021-04-10 22:06:06',
                ),
            37 =>
                array(
                    'id' => 95,
                    'name' => 'show email setting',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:06',
                    'updated_at' => '2021-04-10 22:06:06',
                ),
            38 =>
                array(
                    'id' => 96,
                    'name' => 'show payment gateways setting',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:06',
                    'updated_at' => '2021-04-10 22:06:06',
                ),
            39 =>
                array(
                    'id' => 97,
                    'name' => 'show third party api setting',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:06',
                    'updated_at' => '2021-04-10 22:06:06',
                ),
            40 =>
                array(
                    'id' => 98,
                    'name' => 'show freelancer payment',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:06',
                    'updated_at' => '2021-04-10 22:06:06',
                ),
            41 =>
                array(
                    'id' => 99,
                    'name' => 'show manual payment methods',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:06',
                    'updated_at' => '2021-04-10 22:06:06',
                ),
            42 =>
                array(
                    'id' => 100,
                    'name' => 'show offline project payments',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:06',
                    'updated_at' => '2021-04-10 22:06:06',
                ),
            43 =>
                array(
                    'id' => 101,
                    'name' => 'show offline package payments',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:07',
                    'updated_at' => '2021-04-10 22:06:07',
                ),
            44 =>
                array(
                    'id' => 102,
                    'name' => 'show offline service payments',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:07',
                    'updated_at' => '2021-04-10 22:06:07',
                ),
            45 =>
                array(
                    'id' => 103,
                    'name' => 'show addon manager',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:07',
                    'updated_at' => '2021-04-10 22:06:07',
                ),
            46 =>
                array(
                    'id' => 104,
                    'name' => 'create new client package',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:07',
                    'updated_at' => '2021-04-10 22:06:07',
                ),
            47 =>
                array(
                    'id' => 105,
                    'name' => 'create new freelancer package',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:07',
                    'updated_at' => '2021-04-10 22:06:07',
                ),
            48 =>
                array(
                    'id' => 106,
                    'name' => 'show dashboard',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:07',
                    'updated_at' => '2021-04-10 22:06:07',
                ),
            49 =>
                array(
                    'id' => 107,
                    'name' => 'show create staff',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:07',
                    'updated_at' => '2021-04-10 22:06:07',
                ),
            50 =>
                array(
                    'id' => 108,
                    'name' => 'show create roles',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:07',
                    'updated_at' => '2021-04-10 22:06:07',
                ),
            51 =>
                array(
                    'id' => 109,
                    'name' => 'single user chat details',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:07',
                    'updated_at' => '2021-04-10 22:06:07',
                ),
            52 =>
                array(
                    'id' => 110,
                    'name' => 'freelancer delete',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:07',
                    'updated_at' => '2021-04-10 22:06:07',
                ),
            53 =>
                array(
                    'id' => 111,
                    'name' => 'project cat delete',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:07',
                    'updated_at' => '2021-04-10 22:06:07',
                ),
            54 =>
                array(
                    'id' => 112,
                    'name' => 'project cat edit',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:07',
                    'updated_at' => '2021-04-10 22:06:07',
                ),
            55 =>
                array(
                    'id' => 113,
                    'name' => 'project cat create',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:07',
                    'updated_at' => '2021-04-10 22:06:07',
                ),
            56 =>
                array(
                    'id' => 114,
                    'name' => 'show blog category',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:07',
                    'updated_at' => '2021-04-10 22:06:07',
                ),
            57 =>
                array(
                    'id' => 115,
                    'name' => 'show all blogs',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:07',
                    'updated_at' => '2021-04-10 22:06:07',
                ),
            58 =>
                array(
                    'id' => 116,
                    'name' => 'show wallet history',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:07',
                    'updated_at' => '2021-04-10 22:06:07',
                ),
            59 =>
                array(
                    'id' => 117,
                    'name' => 'show refund setting',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:07',
                    'updated_at' => '2021-04-10 22:06:07',
                ),
            60 =>
                array(
                    'id' => 118,
                    'name' => 'manage file upload',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:07',
                    'updated_at' => '2021-04-10 22:06:07',
                ),
            61 =>
                array(
                    'id' => 119,
                    'name' => 'system update',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:07',
                    'updated_at' => '2021-04-10 22:06:07',
                ),
            62 =>
                array(
                    'id' => 120,
                    'name' => 'show server status',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:07',
                    'updated_at' => '2021-04-10 22:06:07',
                ),
            63 =>
                array(
                    'id' => 121,
                    'name' => 'show all subscribers',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:07',
                    'updated_at' => '2021-04-10 22:06:07',
                ),
            64 =>
                array(
                    'id' => 122,
                    'name' => 'show all newsletters',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:07',
                    'updated_at' => '2021-04-10 22:06:07',
                ),
            65 =>
                array(
                    'id' => 123,
                    'name' => 'show freelancer parent skills',
                    'guard_name' => 'web',
                    'created_at' => '2021-04-10 22:06:06',
                    'updated_at' => '2021-04-10 22:06:06',
                ),
        ));
    }
}
