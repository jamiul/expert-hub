<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class TranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('translations')->delete();

        DB::table('translations')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'lang' => 'en',
                    'lang_key' => 'Total Earnings From',
                    'lang_value' => 'Total Earnings From',
                    'created_at' => '2022-02-14 08:15:11',
                    'updated_at' => '2022-02-14 08:15:11',
                ),
            1 =>
                array(
                    'id' => 2,
                    'lang' => 'en',
                    'lang_key' => 'Client Subscription',
                    'lang_value' => 'Client Subscription',
                    'created_at' => '2022-02-14 08:15:11',
                    'updated_at' => '2022-02-14 08:15:11',
                ),
            2 =>
                array(
                    'id' => 3,
                    'lang' => 'en',
                    'lang_key' => 'Freelancer Subscription',
                    'lang_value' => 'Consultant Subscription',
                    'created_at' => '2022-02-14 08:15:11',
                    'updated_at' => '2023-04-05 05:38:40',
                ),
            3 =>
                array(
                    'id' => 4,
                    'lang' => 'en',
                    'lang_key' => 'Project Commission',
                    'lang_value' => 'Project Commission',
                    'created_at' => '2022-02-14 08:15:11',
                    'updated_at' => '2022-02-14 08:15:11',
                ),
            4 =>
                array(
                    'id' => 5,
                    'lang' => 'en',
                    'lang_key' => 'Total Earnings of',
                    'lang_value' => 'Total Earnings of',
                    'created_at' => '2022-02-14 08:15:11',
                    'updated_at' => '2022-02-14 08:15:11',
                ),
            5 =>
                array(
                    'id' => 6,
                    'lang' => 'en',
                    'lang_key' => 'All Time',
                    'lang_value' => 'All Time',
                    'created_at' => '2022-02-14 08:15:11',
                    'updated_at' => '2022-02-14 08:15:11',
                ),
            6 =>
                array(
                    'id' => 7,
                    'lang' => 'en',
                    'lang_key' => 'Top Client Packages',
                    'lang_value' => 'Top Client Packages',
                    'created_at' => '2022-02-14 08:15:11',
                    'updated_at' => '2022-02-14 08:15:11',
                ),
            7 =>
                array(
                    'id' => 8,
                    'lang' => 'en',
                    'lang_key' => 'Top Freelancer Packages',
                    'lang_value' => 'Top Consultant Packages',
                    'created_at' => '2022-02-14 08:15:11',
                    'updated_at' => '2023-04-05 05:38:40',
                ),
            8 =>
                array(
                    'id' => 9,
                    'lang' => 'en',
                    'lang_key' => 'Last Year Earnings',
                    'lang_value' => 'Last Year Earnings',
                    'created_at' => '2022-02-14 08:15:11',
                    'updated_at' => '2022-02-14 08:15:11',
                ),
            9 =>
                array(
                    'id' => 10,
                    'lang' => 'en',
                    'lang_key' => 'Last 30 Days Stat',
                    'lang_value' => 'Last 30 Days Stat',
                    'created_at' => '2022-02-14 08:15:11',
                    'updated_at' => '2022-02-14 08:15:11',
                ),
            10 =>
                array(
                    'id' => 11,
                    'lang' => 'en',
                    'lang_key' => 'New Clients',
                    'lang_value' => 'New Clients',
                    'created_at' => '2022-02-14 08:15:11',
                    'updated_at' => '2022-02-14 08:15:11',
                ),
            11 =>
                array(
                    'id' => 12,
                    'lang' => 'en',
                    'lang_key' => 'New Freelancers',
                    'lang_value' => 'New Consultants',
                    'created_at' => '2022-02-14 08:15:11',
                    'updated_at' => '2023-04-05 05:38:40',
                ),
            12 =>
                array(
                    'id' => 13,
                    'lang' => 'en',
                    'lang_key' => 'Posted Projects',
                    'lang_value' => 'Posted Projects',
                    'created_at' => '2022-02-14 08:15:11',
                    'updated_at' => '2022-02-14 08:15:11',
                ),
            13 =>
                array(
                    'id' => 14,
                    'lang' => 'en',
                    'lang_key' => 'Comppleted Projects',
                    'lang_value' => 'Comppleted Projects',
                    'created_at' => '2022-02-14 08:15:11',
                    'updated_at' => '2022-02-14 08:15:11',
                ),
            14 =>
                array(
                    'id' => 15,
                    'lang' => 'en',
                    'lang_key' => 'Top running Projects',
                    'lang_value' => 'Top running Projects',
                    'created_at' => '2022-02-14 08:15:11',
                    'updated_at' => '2022-02-14 08:15:11',
                ),
            15 =>
                array(
                    'id' => 16,
                    'lang' => 'en',
                    'lang_key' => 'View All',
                    'lang_value' => 'View All',
                    'created_at' => '2022-02-14 08:15:11',
                    'updated_at' => '2022-02-14 08:15:11',
                ),
            16 =>
                array(
                    'id' => 17,
                    'lang' => 'en',
                    'lang_key' => 'JAN',
                    'lang_value' => 'JAN',
                    'created_at' => '2022-02-14 08:15:11',
                    'updated_at' => '2022-02-14 08:15:11',
                ),
            17 =>
                array(
                    'id' => 18,
                    'lang' => 'en',
                    'lang_key' => 'FEB',
                    'lang_value' => 'FEB',
                    'created_at' => '2022-02-14 08:15:11',
                    'updated_at' => '2022-02-14 08:15:11',
                ),
            18 =>
                array(
                    'id' => 19,
                    'lang' => 'en',
                    'lang_key' => 'MAR',
                    'lang_value' => 'MAR',
                    'created_at' => '2022-02-14 08:15:11',
                    'updated_at' => '2022-02-14 08:15:11',
                ),
            19 =>
                array(
                    'id' => 20,
                    'lang' => 'en',
                    'lang_key' => 'APR',
                    'lang_value' => 'APR',
                    'created_at' => '2022-02-14 08:15:11',
                    'updated_at' => '2022-02-14 08:15:11',
                ),
            20 =>
                array(
                    'id' => 21,
                    'lang' => 'en',
                    'lang_key' => 'MAY',
                    'lang_value' => 'MAY',
                    'created_at' => '2022-02-14 08:15:11',
                    'updated_at' => '2022-02-14 08:15:11',
                ),
            21 =>
                array(
                    'id' => 22,
                    'lang' => 'en',
                    'lang_key' => 'JUN',
                    'lang_value' => 'JUN',
                    'created_at' => '2022-02-14 08:15:11',
                    'updated_at' => '2022-02-14 08:15:11',
                ),
            22 =>
                array(
                    'id' => 23,
                    'lang' => 'en',
                    'lang_key' => 'JUL',
                    'lang_value' => 'JUL',
                    'created_at' => '2022-02-14 08:15:11',
                    'updated_at' => '2022-02-14 08:15:11',
                ),
            23 =>
                array(
                    'id' => 24,
                    'lang' => 'en',
                    'lang_key' => 'AUG',
                    'lang_value' => 'AUG',
                    'created_at' => '2022-02-14 08:15:11',
                    'updated_at' => '2022-02-14 08:15:11',
                ),
            24 =>
                array(
                    'id' => 25,
                    'lang' => 'en',
                    'lang_key' => 'SEP',
                    'lang_value' => 'SEP',
                    'created_at' => '2022-02-14 08:15:11',
                    'updated_at' => '2022-02-14 08:15:11',
                ),
            25 =>
                array(
                    'id' => 26,
                    'lang' => 'en',
                    'lang_key' => 'OCT',
                    'lang_value' => 'OCT',
                    'created_at' => '2022-02-14 08:15:11',
                    'updated_at' => '2022-02-14 08:15:11',
                ),
            26 =>
                array(
                    'id' => 27,
                    'lang' => 'en',
                    'lang_key' => 'NOV',
                    'lang_value' => 'NOV',
                    'created_at' => '2022-02-14 08:15:11',
                    'updated_at' => '2022-02-14 08:15:11',
                ),
            27 =>
                array(
                    'id' => 28,
                    'lang' => 'en',
                    'lang_key' => 'DEC',
                    'lang_value' => 'DEC',
                    'created_at' => '2022-02-14 08:15:11',
                    'updated_at' => '2022-02-14 08:15:11',
                ),
            28 =>
                array(
                    'id' => 29,
                    'lang' => 'en',
                    'lang_key' => 'Freelancer Package',
                    'lang_value' => 'Consultant Package',
                    'created_at' => '2022-02-14 08:15:11',
                    'updated_at' => '2023-04-05 05:38:40',
                ),
            29 =>
                array(
                    'id' => 30,
                    'lang' => 'en',
                    'lang_key' => 'Client Package',
                    'lang_value' => 'Client Package',
                    'created_at' => '2022-02-14 08:15:12',
                    'updated_at' => '2022-02-14 08:15:12',
                ),
            30 =>
                array(
                    'id' => 31,
                    'lang' => 'en',
                    'lang_key' => 'Project Payment',
                    'lang_value' => 'Project Payment',
                    'created_at' => '2022-02-14 08:15:12',
                    'updated_at' => '2022-02-14 08:15:12',
                ),
            31 =>
                array(
                    'id' => 32,
                    'lang' => 'en',
                    'lang_key' => 'Nothing selected',
                    'lang_value' => 'Nothing selected',
                    'created_at' => '2022-02-14 08:15:12',
                    'updated_at' => '2022-02-14 08:15:12',
                ),
            32 =>
                array(
                    'id' => 33,
                    'lang' => 'en',
                    'lang_key' => 'Nothing found',
                    'lang_value' => 'Nothing found',
                    'created_at' => '2022-02-14 08:15:12',
                    'updated_at' => '2022-02-14 08:15:12',
                ),
            33 =>
                array(
                    'id' => 34,
                    'lang' => 'en',
                    'lang_key' => 'Choose file',
                    'lang_value' => 'Choose file',
                    'created_at' => '2022-02-14 08:15:12',
                    'updated_at' => '2022-02-14 08:15:12',
                ),
            34 =>
                array(
                    'id' => 35,
                    'lang' => 'en',
                    'lang_key' => 'File selected',
                    'lang_value' => 'File selected',
                    'created_at' => '2022-02-14 08:15:12',
                    'updated_at' => '2022-02-14 08:15:12',
                ),
            35 =>
                array(
                    'id' => 36,
                    'lang' => 'en',
                    'lang_key' => 'Files selected',
                    'lang_value' => 'Files selected',
                    'created_at' => '2022-02-14 08:15:12',
                    'updated_at' => '2022-02-14 08:15:12',
                ),
            36 =>
                array(
                    'id' => 37,
                    'lang' => 'en',
                    'lang_key' => 'Items selected',
                    'lang_value' => 'Items selected',
                    'created_at' => '2022-02-14 08:15:12',
                    'updated_at' => '2022-02-14 08:15:12',
                ),
            37 =>
                array(
                    'id' => 38,
                    'lang' => 'en',
                    'lang_key' => 'Add more files',
                    'lang_value' => 'Add more files',
                    'created_at' => '2022-02-14 08:15:12',
                    'updated_at' => '2022-02-14 08:15:12',
                ),
            38 =>
                array(
                    'id' => 39,
                    'lang' => 'en',
                    'lang_key' => 'Adding more files',
                    'lang_value' => 'Adding more files',
                    'created_at' => '2022-02-14 08:15:12',
                    'updated_at' => '2022-02-14 08:15:12',
                ),
            39 =>
                array(
                    'id' => 40,
                    'lang' => 'en',
                    'lang_key' => 'Drop files here, paste or',
                    'lang_value' => 'Drop files here, paste or',
                    'created_at' => '2022-02-14 08:15:12',
                    'updated_at' => '2022-02-14 08:15:12',
                ),
            40 =>
                array(
                    'id' => 41,
                    'lang' => 'en',
                    'lang_key' => 'Browse',
                    'lang_value' => 'Browse',
                    'created_at' => '2022-02-14 08:15:12',
                    'updated_at' => '2022-02-14 08:15:12',
                ),
            41 =>
                array(
                    'id' => 42,
                    'lang' => 'en',
                    'lang_key' => 'Upload complete',
                    'lang_value' => 'Upload complete',
                    'created_at' => '2022-02-14 08:15:12',
                    'updated_at' => '2022-02-14 08:15:12',
                ),
            42 =>
                array(
                    'id' => 43,
                    'lang' => 'en',
                    'lang_key' => 'Upload paused',
                    'lang_value' => 'Upload paused',
                    'created_at' => '2022-02-14 08:15:12',
                    'updated_at' => '2022-02-14 08:15:12',
                ),
            43 =>
                array(
                    'id' => 44,
                    'lang' => 'en',
                    'lang_key' => 'Resume upload',
                    'lang_value' => 'Resume upload',
                    'created_at' => '2022-02-14 08:15:12',
                    'updated_at' => '2022-02-14 08:15:12',
                ),
            44 =>
                array(
                    'id' => 45,
                    'lang' => 'en',
                    'lang_key' => 'Pause upload',
                    'lang_value' => 'Pause upload',
                    'created_at' => '2022-02-14 08:15:12',
                    'updated_at' => '2022-02-14 08:15:12',
                ),
            45 =>
                array(
                    'id' => 46,
                    'lang' => 'en',
                    'lang_key' => 'Retry upload',
                    'lang_value' => 'Retry upload',
                    'created_at' => '2022-02-14 08:15:12',
                    'updated_at' => '2022-02-14 08:15:12',
                ),
            46 =>
                array(
                    'id' => 47,
                    'lang' => 'en',
                    'lang_key' => 'Cancel upload',
                    'lang_value' => 'Cancel upload',
                    'created_at' => '2022-02-14 08:15:12',
                    'updated_at' => '2022-02-14 08:15:12',
                ),
            47 =>
                array(
                    'id' => 48,
                    'lang' => 'en',
                    'lang_key' => 'Uploading',
                    'lang_value' => 'Uploading',
                    'created_at' => '2022-02-14 08:15:12',
                    'updated_at' => '2022-02-14 08:15:12',
                ),
            48 =>
                array(
                    'id' => 49,
                    'lang' => 'en',
                    'lang_key' => 'Processing',
                    'lang_value' => 'Processing',
                    'created_at' => '2022-02-14 08:15:12',
                    'updated_at' => '2022-02-14 08:15:12',
                ),
            49 =>
                array(
                    'id' => 50,
                    'lang' => 'en',
                    'lang_key' => 'Complete',
                    'lang_value' => 'Complete',
                    'created_at' => '2022-02-14 08:15:12',
                    'updated_at' => '2022-02-14 08:15:12',
                ),
            50 =>
                array(
                    'id' => 51,
                    'lang' => 'en',
                    'lang_key' => 'File',
                    'lang_value' => 'File',
                    'created_at' => '2022-02-14 08:15:12',
                    'updated_at' => '2022-02-14 08:15:12',
                ),
            51 =>
                array(
                    'id' => 52,
                    'lang' => 'en',
                    'lang_key' => 'Files',
                    'lang_value' => 'Files',
                    'created_at' => '2022-02-14 08:15:12',
                    'updated_at' => '2022-02-14 08:15:12',
                ),
            52 =>
                array(
                    'id' => 53,
                    'lang' => 'en',
                    'lang_key' => 'Dashboard',
                    'lang_value' => 'Dashboard',
                    'created_at' => '2022-02-14 08:15:12',
                    'updated_at' => '2022-02-14 08:15:12',
                ),
            53 =>
                array(
                    'id' => 54,
                    'lang' => 'en',
                    'lang_key' => 'Browse Website',
                    'lang_value' => 'Browse Website',
                    'created_at' => '2022-02-14 08:15:13',
                    'updated_at' => '2022-02-14 08:15:13',
                ),
            54 =>
                array(
                    'id' => 55,
                    'lang' => 'en',
                    'lang_key' => 'Clear Cache',
                    'lang_value' => 'Clear Cache',
                    'created_at' => '2022-02-14 08:15:13',
                    'updated_at' => '2022-02-14 08:15:13',
                ),
            55 =>
                array(
                    'id' => 56,
                    'lang' => 'en',
                    'lang_key' => 'Notifications',
                    'lang_value' => 'Notifications',
                    'created_at' => '2022-02-14 08:15:13',
                    'updated_at' => '2022-02-14 08:15:13',
                ),
            56 =>
                array(
                    'id' => 57,
                    'lang' => 'en',
                    'lang_key' => 'View All Notifications',
                    'lang_value' => 'View All Notifications',
                    'created_at' => '2022-02-14 08:15:13',
                    'updated_at' => '2022-02-14 08:15:13',
                ),
            57 =>
                array(
                    'id' => 58,
                    'lang' => 'en',
                    'lang_key' => 'My Account',
                    'lang_value' => 'My Account',
                    'created_at' => '2022-02-14 08:15:13',
                    'updated_at' => '2022-02-14 08:15:13',
                ),
            58 =>
                array(
                    'id' => 59,
                    'lang' => 'en',
                    'lang_key' => 'Logout',
                    'lang_value' => 'Logout',
                    'created_at' => '2022-02-14 08:15:13',
                    'updated_at' => '2022-02-14 08:15:13',
                ),
            59 =>
                array(
                    'id' => 60,
                    'lang' => 'en',
                    'lang_key' => 'Welcome to',
                    'lang_value' => 'Welcome to',
                    'created_at' => '2022-02-14 08:15:17',
                    'updated_at' => '2022-02-14 08:15:17',
                ),
            60 =>
                array(
                    'id' => 61,
                    'lang' => 'en',
                    'lang_key' => 'Login to your account.',
                    'lang_value' => 'Login to your account.',
                    'created_at' => '2022-02-14 08:15:17',
                    'updated_at' => '2022-02-14 08:15:17',
                ),
            61 =>
                array(
                    'id' => 62,
                    'lang' => 'en',
                    'lang_key' => 'Email',
                    'lang_value' => 'Email',
                    'created_at' => '2022-02-14 08:15:17',
                    'updated_at' => '2022-02-14 08:15:17',
                ),
            62 =>
                array(
                    'id' => 63,
                    'lang' => 'en',
                    'lang_key' => 'Forgot Password',
                    'lang_value' => 'Forgot Password',
                    'created_at' => '2022-02-14 08:15:17',
                    'updated_at' => '2022-02-14 08:15:17',
                ),
            63 =>
                array(
                    'id' => 64,
                    'lang' => 'en',
                    'lang_key' => 'Sign In',
                    'lang_value' => 'Sign In',
                    'created_at' => '2022-02-14 08:15:17',
                    'updated_at' => '2022-02-14 08:15:17',
                ),
            64 =>
                array(
                    'id' => 65,
                    'lang' => 'en',
                    'lang_key' => 'Projects',
                    'lang_value' => 'Projects',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            65 =>
                array(
                    'id' => 66,
                    'lang' => 'en',
                    'lang_key' => 'All Projects',
                    'lang_value' => 'All Projects',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            66 =>
                array(
                    'id' => 67,
                    'lang' => 'en',
                    'lang_key' => 'Running Project',
                    'lang_value' => 'Running Project',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            67 =>
                array(
                    'id' => 68,
                    'lang' => 'en',
                    'lang_key' => 'Open Project',
                    'lang_value' => 'Open Project',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            68 =>
                array(
                    'id' => 69,
                    'lang' => 'en',
                    'lang_key' => 'Cancelled Project',
                    'lang_value' => 'Cancelled Project',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            69 =>
                array(
                    'id' => 70,
                    'lang' => 'en',
                    'lang_key' => 'Project Cancel Request',
                    'lang_value' => 'Project Cancel Request',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            70 =>
                array(
                    'id' => 71,
                    'lang' => 'en',
                    'lang_key' => 'Project Category',
                    'lang_value' => 'Project Category',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            71 =>
                array(
                    'id' => 72,
                    'lang' => 'en',
                    'lang_key' => 'Services',
                    'lang_value' => 'Services',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            72 =>
                array(
                    'id' => 73,
                    'lang' => 'en',
                    'lang_key' => 'All Services',
                    'lang_value' => 'All Services',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            73 =>
                array(
                    'id' => 74,
                    'lang' => 'en',
                    'lang_key' => 'Cancelled Services',
                    'lang_value' => 'Cancelled Services',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            74 =>
                array(
                    'id' => 75,
                    'lang' => 'en',
                    'lang_key' => 'Service Cancellation Requests',
                    'lang_value' => 'Service Cancellation Requests',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            75 =>
                array(
                    'id' => 76,
                    'lang' => 'en',
                    'lang_key' => 'Verification Requests',
                    'lang_value' => 'Verification Requests',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            76 =>
                array(
                    'id' => 77,
                    'lang' => 'en',
                    'lang_key' => 'Users Chats',
                    'lang_value' => 'Users Chats',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            77 =>
                array(
                    'id' => 78,
                    'lang' => 'en',
                    'lang_key' => 'Freelancers',
                    'lang_value' => 'Consultants',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2023-04-05 05:38:40',
                ),
            78 =>
                array(
                    'id' => 79,
                    'lang' => 'en',
                    'lang_key' => 'All Freelancers',
                    'lang_value' => 'All Consultants',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2023-04-05 05:38:40',
                ),
            79 =>
                array(
                    'id' => 80,
                    'lang' => 'en',
                    'lang_key' => 'Freelancer Packages',
                    'lang_value' => 'Consultant Packages',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2023-04-05 05:38:40',
                ),
            80 =>
                array(
                    'id' => 81,
                    'lang' => 'en',
                    'lang_key' => 'Freelancer Skills',
                    'lang_value' => 'Consultant Skills',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2023-04-05 05:38:40',
                ),
            81 =>
                array(
                    'id' => 82,
                    'lang' => 'en',
                    'lang_key' => 'Freelancer Badges',
                    'lang_value' => 'Consultant Badges',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2023-04-05 05:38:40',
                ),
            82 =>
                array(
                    'id' => 83,
                    'lang' => 'en',
                    'lang_key' => 'Clients',
                    'lang_value' => 'Clients',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            83 =>
                array(
                    'id' => 84,
                    'lang' => 'en',
                    'lang_key' => 'All Clients',
                    'lang_value' => 'All Clients',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            84 =>
                array(
                    'id' => 85,
                    'lang' => 'en',
                    'lang_key' => 'Client Packages',
                    'lang_value' => 'Client Packages',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            85 =>
                array(
                    'id' => 86,
                    'lang' => 'en',
                    'lang_key' => 'Client Badges',
                    'lang_value' => 'Client Badges',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            86 =>
                array(
                    'id' => 87,
                    'lang' => 'en',
                    'lang_key' => 'Reviews',
                    'lang_value' => 'Reviews',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            87 =>
                array(
                    'id' => 88,
                    'lang' => 'en',
                    'lang_key' => 'Freelancers Reviews',
                    'lang_value' => 'Consultants Reviews',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2023-04-05 05:38:40',
                ),
            88 =>
                array(
                    'id' => 89,
                    'lang' => 'en',
                    'lang_key' => 'Client Reviews',
                    'lang_value' => 'Client Reviews',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            89 =>
                array(
                    'id' => 90,
                    'lang' => 'en',
                    'lang_key' => 'Accountings',
                    'lang_value' => 'Accountings',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            90 =>
                array(
                    'id' => 91,
                    'lang' => 'en',
                    'lang_key' => 'Project Payments',
                    'lang_value' => 'Project Payments',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            91 =>
                array(
                    'id' => 92,
                    'lang' => 'en',
                    'lang_key' => 'Package Payments',
                    'lang_value' => 'Package Payments',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            92 =>
                array(
                    'id' => 93,
                    'lang' => 'en',
                    'lang_key' => 'Service Payments',
                    'lang_value' => 'Service Payments',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            93 =>
                array(
                    'id' => 94,
                    'lang' => 'en',
                    'lang_key' => 'Freelancer Withdraw Requests',
                    'lang_value' => 'Consultant Withdraw Requests',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2023-04-05 05:38:40',
                ),
            94 =>
                array(
                    'id' => 95,
                    'lang' => 'en',
                    'lang_key' => 'Freelancer Payouts',
                    'lang_value' => 'Consultant Payouts',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2023-04-05 05:38:40',
                ),
            95 =>
                array(
                    'id' => 96,
                    'lang' => 'en',
                    'lang_key' => 'Wallet History',
                    'lang_value' => 'Wallet History',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            96 =>
                array(
                    'id' => 97,
                    'lang' => 'en',
                    'lang_key' => 'Blog System',
                    'lang_value' => 'Blog System',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            97 =>
                array(
                    'id' => 98,
                    'lang' => 'en',
                    'lang_key' => 'All Posts',
                    'lang_value' => 'All Posts',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            98 =>
                array(
                    'id' => 99,
                    'lang' => 'en',
                    'lang_key' => 'Categories',
                    'lang_value' => 'Categories',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            99 =>
                array(
                    'id' => 100,
                    'lang' => 'en',
                    'lang_key' => 'Website',
                    'lang_value' => 'Website',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            100 =>
                array(
                    'id' => 101,
                    'lang' => 'en',
                    'lang_key' => 'Header',
                    'lang_value' => 'Header',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            101 =>
                array(
                    'id' => 102,
                    'lang' => 'en',
                    'lang_key' => 'Footer',
                    'lang_value' => 'Footer',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            102 =>
                array(
                    'id' => 103,
                    'lang' => 'en',
                    'lang_key' => 'pages',
                    'lang_value' => 'pages',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            103 =>
                array(
                    'id' => 104,
                    'lang' => 'en',
                    'lang_key' => 'Appearance',
                    'lang_value' => 'Appearance',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            104 =>
                array(
                    'id' => 105,
                    'lang' => 'en',
                    'lang_key' => 'Employee',
                    'lang_value' => 'Employee',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            105 =>
                array(
                    'id' => 106,
                    'lang' => 'en',
                    'lang_key' => 'All Staffs',
                    'lang_value' => 'All Staffs',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            106 =>
                array(
                    'id' => 107,
                    'lang' => 'en',
                    'lang_key' => 'Employee Roles',
                    'lang_value' => 'Employee Roles',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            107 =>
                array(
                    'id' => 108,
                    'lang' => 'en',
                    'lang_key' => 'Setting',
                    'lang_value' => 'Setting',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            108 =>
                array(
                    'id' => 109,
                    'lang' => 'en',
                    'lang_key' => 'General',
                    'lang_value' => 'General',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            109 =>
                array(
                    'id' => 110,
                    'lang' => 'en',
                    'lang_key' => 'Activation',
                    'lang_value' => 'Activation',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            110 =>
                array(
                    'id' => 111,
                    'lang' => 'en',
                    'lang_key' => 'System Languages',
                    'lang_value' => 'System Languages',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            111 =>
                array(
                    'id' => 112,
                    'lang' => 'en',
                    'lang_key' => 'System Currency',
                    'lang_value' => 'System Currency',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            112 =>
                array(
                    'id' => 113,
                    'lang' => 'en',
                    'lang_key' => 'SMTP Settings',
                    'lang_value' => 'SMTP Settings',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            113 =>
                array(
                    'id' => 114,
                    'lang' => 'en',
                    'lang_key' => 'Payment Gateways',
                    'lang_value' => 'Payment Gateways',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            114 =>
                array(
                    'id' => 115,
                    'lang' => 'en',
                    'lang_key' => '3rd Party API',
                    'lang_value' => '3rd Party API',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            115 =>
                array(
                    'id' => 116,
                    'lang' => 'en',
                    'lang_key' => 'Freelancer Payment',
                    'lang_value' => 'Consultant Payment',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2023-04-05 05:38:40',
                ),
            116 =>
                array(
                    'id' => 117,
                    'lang' => 'en',
                    'lang_key' => 'Refund Settings',
                    'lang_value' => 'Refund Settings',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            117 =>
                array(
                    'id' => 118,
                    'lang' => 'en',
                    'lang_key' => 'Manage Location',
                    'lang_value' => 'Manage Location',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            118 =>
                array(
                    'id' => 119,
                    'lang' => 'en',
                    'lang_key' => 'Country',
                    'lang_value' => 'Country',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            119 =>
                array(
                    'id' => 120,
                    'lang' => 'en',
                    'lang_key' => 'State',
                    'lang_value' => 'State',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            120 =>
                array(
                    'id' => 121,
                    'lang' => 'en',
                    'lang_key' => 'Uploaded Files',
                    'lang_value' => 'Uploaded Files',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            121 =>
                array(
                    'id' => 122,
                    'lang' => 'en',
                    'lang_key' => 'System',
                    'lang_value' => 'System',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            122 =>
                array(
                    'id' => 123,
                    'lang' => 'en',
                    'lang_key' => 'Update',
                    'lang_value' => 'Update',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            123 =>
                array(
                    'id' => 124,
                    'lang' => 'en',
                    'lang_key' => 'Server status',
                    'lang_value' => 'Server status',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            124 =>
                array(
                    'id' => 125,
                    'lang' => 'en',
                    'lang_key' => 'Addon Manager',
                    'lang_value' => 'Addon Manager',
                    'created_at' => '2022-02-14 08:16:08',
                    'updated_at' => '2022-02-14 08:16:08',
                ),
            125 =>
                array(
                    'id' => 126,
                    'lang' => 'en',
                    'lang_key' => 'I want to Hire',
                    'lang_value' => 'Hire a Consultant',
                    'created_at' => '2022-06-06 07:06:44',
                    'updated_at' => '2023-04-05 09:05:42',
                ),
            126 =>
                array(
                    'id' => 127,
                    'lang' => 'en',
                    'lang_key' => 'I want to Work',
                    'lang_value' => 'Become a Consultant',
                    'created_at' => '2022-06-06 07:06:44',
                    'updated_at' => '2023-04-05 09:06:01',
                ),
            127 =>
                array(
                    'id' => 128,
                    'lang' => 'en',
                    'lang_key' => 'Check All Projects',
                    'lang_value' => 'Check All Projects',
                    'created_at' => '2022-06-06 07:06:44',
                    'updated_at' => '2022-06-06 07:06:44',
                ),
            128 =>
                array(
                    'id' => 129,
                    'lang' => 'en',
                    'lang_key' => 'Join With Us',
                    'lang_value' => 'Join With Us',
                    'created_at' => '2022-06-06 07:06:44',
                    'updated_at' => '2022-06-06 07:06:44',
                ),
            129 =>
                array(
                    'id' => 130,
                    'lang' => 'en',
                    'lang_key' => 'I am looking for',
                    'lang_value' => 'I am looking for',
                    'created_at' => '2022-06-06 07:06:44',
                    'updated_at' => '2022-06-06 07:06:44',
                ),
            130 =>
                array(
                    'id' => 131,
                    'lang' => 'en',
                    'lang_key' => 'Log In',
                    'lang_value' => 'Log In',
                    'created_at' => '2022-06-06 07:06:44',
                    'updated_at' => '2022-06-06 07:06:44',
                ),
            131 =>
                array(
                    'id' => 132,
                    'lang' => 'en',
                    'lang_key' => 'Get Started',
                    'lang_value' => 'Get Started',
                    'created_at' => '2022-06-06 07:06:44',
                    'updated_at' => '2022-06-06 07:06:44',
                ),
            132 =>
                array(
                    'id' => 133,
                    'lang' => 'en',
                    'lang_key' => 'Your Email Address',
                    'lang_value' => 'Your Email Address',
                    'created_at' => '2022-06-06 07:06:44',
                    'updated_at' => '2022-06-06 07:06:44',
                ),
            133 =>
                array(
                    'id' => 134,
                    'lang' => 'en',
                    'lang_key' => 'Subscribe',
                    'lang_value' => 'Subscribe',
                    'created_at' => '2022-06-06 07:06:44',
                    'updated_at' => '2022-06-06 07:06:44',
                ),
            134 =>
                array(
                    'id' => 135,
                    'lang' => 'en',
                    'lang_key' => 'Home',
                    'lang_value' => 'Home',
                    'created_at' => '2022-06-06 07:06:44',
                    'updated_at' => '2022-06-06 07:06:44',
                ),
            135 =>
                array(
                    'id' => 136,
                    'lang' => 'en',
                    'lang_key' => 'Messages',
                    'lang_value' => 'Messages',
                    'created_at' => '2022-06-06 07:06:44',
                    'updated_at' => '2022-06-06 07:06:44',
                ),
            136 =>
                array(
                    'id' => 137,
                    'lang' => 'en',
                    'lang_key' => 'Account',
                    'lang_value' => 'Account',
                    'created_at' => '2022-06-06 07:06:44',
                    'updated_at' => '2022-06-06 07:06:44',
                ),
            137 =>
                array(
                    'id' => 138,
                    'lang' => 'en',
                    'lang_key' => 'Welcome back',
                    'lang_value' => 'Welcome back',
                    'created_at' => '2022-06-06 07:07:02',
                    'updated_at' => '2022-06-06 07:07:02',
                ),
            138 =>
                array(
                    'id' => 139,
                    'lang' => 'en',
                    'lang_key' => 'Login to manage your account',
                    'lang_value' => 'Login to manage your account',
                    'created_at' => '2022-06-06 07:07:02',
                    'updated_at' => '2022-06-06 07:07:02',
                ),
            139 =>
                array(
                    'id' => 140,
                    'lang' => 'en',
                    'lang_key' => 'Email address',
                    'lang_value' => 'Email address',
                    'created_at' => '2022-06-06 07:07:02',
                    'updated_at' => '2022-06-06 07:07:02',
                ),
            140 =>
                array(
                    'id' => 141,
                    'lang' => 'en',
                    'lang_key' => 'Password',
                    'lang_value' => 'Password',
                    'created_at' => '2022-06-06 07:07:02',
                    'updated_at' => '2022-06-06 07:07:02',
                ),
            141 =>
                array(
                    'id' => 142,
                    'lang' => 'en',
                    'lang_key' => 'Forgot Password?',
                    'lang_value' => 'Forgot Password?',
                    'created_at' => '2022-06-06 07:07:02',
                    'updated_at' => '2022-06-06 07:07:02',
                ),
            142 =>
                array(
                    'id' => 143,
                    'lang' => 'en',
                    'lang_key' => 'Login to your Account',
                    'lang_value' => 'Login to your Account',
                    'created_at' => '2022-06-06 07:07:02',
                    'updated_at' => '2022-06-06 07:07:02',
                ),
            143 =>
                array(
                    'id' => 144,
                    'lang' => 'en',
                    'lang_key' => 'Or Login With',
                    'lang_value' => 'Or Login With',
                    'created_at' => '2022-06-06 07:07:02',
                    'updated_at' => '2022-06-06 07:07:02',
                ),
            144 =>
                array(
                    'id' => 145,
                    'lang' => 'en',
                    'lang_key' => 'Don\'t have an account?',
                    'lang_value' => 'Don\'t have an account?',
                    'created_at' => '2022-06-06 07:07:02',
                    'updated_at' => '2022-06-06 07:07:02',
                ),
            145 =>
                array(
                    'id' => 146,
                    'lang' => 'en',
                    'lang_key' => 'Create an account',
                    'lang_value' => 'Create an account',
                    'created_at' => '2022-06-06 07:07:02',
                    'updated_at' => '2022-06-06 07:07:02',
                ),
            146 =>
                array(
                    'id' => 147,
                    'lang' => 'en',
                    'lang_key' => 'Marketing',
                    'lang_value' => 'Marketing',
                    'created_at' => '2022-06-06 07:07:06',
                    'updated_at' => '2022-06-06 07:07:06',
                ),
            147 =>
                array(
                    'id' => 148,
                    'lang' => 'en',
                    'lang_key' => 'Newsletters',
                    'lang_value' => 'Newsletters',
                    'created_at' => '2022-06-06 07:07:06',
                    'updated_at' => '2022-06-06 07:07:06',
                ),
            148 =>
                array(
                    'id' => 149,
                    'lang' => 'en',
                    'lang_key' => 'Subscribers',
                    'lang_value' => 'Subscribers',
                    'created_at' => '2022-06-06 07:07:06',
                    'updated_at' => '2022-06-06 07:07:06',
                ),
            149 =>
                array(
                    'id' => 150,
                    'lang' => 'en',
                    'lang_key' => 'General Settings',
                    'lang_value' => 'General Settings',
                    'created_at' => '2022-06-06 07:07:09',
                    'updated_at' => '2022-06-06 07:07:09',
                ),
            150 =>
                array(
                    'id' => 151,
                    'lang' => 'en',
                    'lang_key' => 'System Name',
                    'lang_value' => 'System Name',
                    'created_at' => '2022-06-06 07:07:09',
                    'updated_at' => '2022-06-06 07:07:09',
                ),
            151 =>
                array(
                    'id' => 152,
                    'lang' => 'en',
                    'lang_key' => 'System Logo - White',
                    'lang_value' => 'System Logo - White',
                    'created_at' => '2022-06-06 07:07:09',
                    'updated_at' => '2022-06-06 07:07:09',
                ),
            152 =>
                array(
                    'id' => 153,
                    'lang' => 'en',
                    'lang_key' => 'Choose Files',
                    'lang_value' => 'Choose Files',
                    'created_at' => '2022-06-06 07:07:09',
                    'updated_at' => '2022-06-06 07:07:09',
                ),
            153 =>
                array(
                    'id' => 154,
                    'lang' => 'en',
                    'lang_key' => 'Will be used in admin panel side menu',
                    'lang_value' => 'Will be used in admin panel side menu',
                    'created_at' => '2022-06-06 07:07:09',
                    'updated_at' => '2022-06-06 07:07:09',
                ),
            154 =>
                array(
                    'id' => 155,
                    'lang' => 'en',
                    'lang_key' => 'System Logo - Black',
                    'lang_value' => 'System Logo - Black',
                    'created_at' => '2022-06-06 07:07:09',
                    'updated_at' => '2022-06-06 07:07:09',
                ),
            155 =>
                array(
                    'id' => 156,
                    'lang' => 'en',
                    'lang_key' => 'Will be used in admin panel topbar in mobile + Admin login page',
                    'lang_value' => 'Will be used in admin panel topbar in mobile + Admin login page',
                    'created_at' => '2022-06-06 07:07:09',
                    'updated_at' => '2022-06-06 07:07:09',
                ),
            156 =>
                array(
                    'id' => 157,
                    'lang' => 'en',
                    'lang_key' => 'System Timezone',
                    'lang_value' => 'System Timezone',
                    'created_at' => '2022-06-06 07:07:09',
                    'updated_at' => '2022-06-06 07:07:09',
                ),
            157 =>
                array(
                    'id' => 158,
                    'lang' => 'en',
                    'lang_key' => 'Admin login page background',
                    'lang_value' => 'Admin login page background',
                    'created_at' => '2022-06-06 07:07:09',
                    'updated_at' => '2022-06-06 07:07:09',
                ),
            158 =>
                array(
                    'id' => 159,
                    'lang' => 'en',
                    'lang_key' => 'General Activation',
                    'lang_value' => 'General Activation',
                    'created_at' => '2022-06-06 07:07:12',
                    'updated_at' => '2022-06-06 07:07:12',
                ),
            159 =>
                array(
                    'id' => 160,
                    'lang' => 'en',
                    'lang_key' => 'Project Approval',
                    'lang_value' => 'Project Approval',
                    'created_at' => '2022-06-06 07:07:12',
                    'updated_at' => '2022-06-06 07:07:12',
                ),
            160 =>
                array(
                    'id' => 161,
                    'lang' => 'en',
                    'lang_key' => 'Enable project approval feature?',
                    'lang_value' => 'Enable project approval feature?',
                    'created_at' => '2022-06-06 07:07:12',
                    'updated_at' => '2022-06-06 07:07:12',
                ),
            161 =>
                array(
                    'id' => 162,
                    'lang' => 'en',
                    'lang_key' => 'If you enable this feature all client projects will be pending after adding by clients. You need to approve each project to make those projects public for bidding.',
                    'lang_value' => 'If you enable this feature all client projects will be pending after adding by clients. You need to approve each project to make those projects public for bidding.',
                    'created_at' => '2022-06-06 07:07:12',
                    'updated_at' => '2022-06-06 07:07:12',
                ),
            162 =>
                array(
                    'id' => 163,
                    'lang' => 'en',
                    'lang_key' => 'Force HTTPS',
                    'lang_value' => 'Force HTTPS',
                    'created_at' => '2022-06-06 07:07:12',
                    'updated_at' => '2022-06-06 07:07:12',
                ),
            163 =>
                array(
                    'id' => 164,
                    'lang' => 'en',
                    'lang_key' => 'Enable Force HTTPS feature?',
                    'lang_value' => 'Enable Force HTTPS feature?',
                    'created_at' => '2022-06-06 07:07:12',
                    'updated_at' => '2022-06-06 07:07:12',
                ),
            164 =>
                array(
                    'id' => 165,
                    'lang' => 'en',
                    'lang_key' => 'If you enable this feature all requests will be redirect via https.',
                    'lang_value' => 'If you enable this feature all requests will be redirect via https.',
                    'created_at' => '2022-06-06 07:07:12',
                    'updated_at' => '2022-06-06 07:07:12',
                ),
            165 =>
                array(
                    'id' => 166,
                    'lang' => 'en',
                    'lang_key' => 'Email Verification',
                    'lang_value' => 'Email Verification',
                    'created_at' => '2022-06-06 07:07:12',
                    'updated_at' => '2022-06-06 07:07:12',
                ),
            166 =>
                array(
                    'id' => 167,
                    'lang' => 'en',
                    'lang_key' => 'Enable Email Verification?',
                    'lang_value' => 'Enable Email Verification?',
                    'created_at' => '2022-06-06 07:07:12',
                    'updated_at' => '2022-06-06 07:07:12',
                ),
            167 =>
                array(
                    'id' => 168,
                    'lang' => 'en',
                    'lang_key' => 'Maintenance Mode Activation',
                    'lang_value' => 'Maintenance Mode Activation',
                    'created_at' => '2022-06-06 07:07:12',
                    'updated_at' => '2022-06-06 07:07:12',
                ),
            168 =>
                array(
                    'id' => 169,
                    'lang' => 'en',
                    'lang_key' => 'Freelancer Lists',
                    'lang_value' => 'Consultant Lists',
                    'created_at' => '2022-06-06 07:07:33',
                    'updated_at' => '2023-04-05 05:38:40',
                ),
            169 =>
                array(
                    'id' => 170,
                    'lang' => 'en',
                    'lang_key' => 'Sort by',
                    'lang_value' => 'Sort by',
                    'created_at' => '2022-06-06 07:07:33',
                    'updated_at' => '2022-06-06 07:07:33',
                ),
            170 =>
                array(
                    'id' => 171,
                    'lang' => 'en',
                    'lang_key' => 'Time (Old > New)',
                    'lang_value' => 'Time (Old > New)',
                    'created_at' => '2022-06-06 07:07:33',
                    'updated_at' => '2022-06-06 07:07:33',
                ),
            171 =>
                array(
                    'id' => 172,
                    'lang' => 'en',
                    'lang_key' => 'Time (New > Old)',
                    'lang_value' => 'Time (New > Old)',
                    'created_at' => '2022-06-06 07:07:33',
                    'updated_at' => '2022-06-06 07:07:33',
                ),
            172 =>
                array(
                    'id' => 173,
                    'lang' => 'en',
                    'lang_key' => 'Balance (High > Low)',
                    'lang_value' => 'Balance (High > Low)',
                    'created_at' => '2022-06-06 07:07:33',
                    'updated_at' => '2022-06-06 07:07:33',
                ),
            173 =>
                array(
                    'id' => 174,
                    'lang' => 'en',
                    'lang_key' => 'Balance (Low > High)',
                    'lang_value' => 'Balance (Low > High)',
                    'created_at' => '2022-06-06 07:07:33',
                    'updated_at' => '2022-06-06 07:07:33',
                ),
            174 =>
                array(
                    'id' => 175,
                    'lang' => 'en',
                    'lang_key' => 'Name',
                    'lang_value' => 'Name',
                    'created_at' => '2022-06-06 07:07:33',
                    'updated_at' => '2022-06-06 07:07:33',
                ),
            175 =>
                array(
                    'id' => 176,
                    'lang' => 'en',
                    'lang_key' => 'Package',
                    'lang_value' => 'Package',
                    'created_at' => '2022-06-06 07:07:33',
                    'updated_at' => '2022-06-06 07:07:33',
                ),
            176 =>
                array(
                    'id' => 177,
                    'lang' => 'en',
                    'lang_key' => 'Verification Status',
                    'lang_value' => 'Verification Status',
                    'created_at' => '2022-06-06 07:07:33',
                    'updated_at' => '2022-06-06 07:07:33',
                ),
            177 =>
                array(
                    'id' => 178,
                    'lang' => 'en',
                    'lang_key' => 'Balance',
                    'lang_value' => 'Balance',
                    'created_at' => '2022-06-06 07:07:33',
                    'updated_at' => '2022-06-06 07:07:33',
                ),
            178 =>
                array(
                    'id' => 179,
                    'lang' => 'en',
                    'lang_key' => 'Options',
                    'lang_value' => 'Options',
                    'created_at' => '2022-06-06 07:07:33',
                    'updated_at' => '2022-06-06 07:07:33',
                ),
            179 =>
                array(
                    'id' => 180,
                    'lang' => 'en',
                    'lang_key' => 'Ban Confirmation',
                    'lang_value' => 'Ban Confirmation',
                    'created_at' => '2022-06-06 07:07:33',
                    'updated_at' => '2022-06-06 07:07:33',
                ),
            180 =>
                array(
                    'id' => 181,
                    'lang' => 'en',
                    'lang_key' => 'Are you sure to ban this user?',
                    'lang_value' => 'Are you sure to ban this user?',
                    'created_at' => '2022-06-06 07:07:33',
                    'updated_at' => '2022-06-06 07:07:33',
                ),
            181 =>
                array(
                    'id' => 182,
                    'lang' => 'en',
                    'lang_key' => 'Cancel',
                    'lang_value' => 'Cancel',
                    'created_at' => '2022-06-06 07:07:33',
                    'updated_at' => '2022-06-06 07:07:33',
                ),
            182 =>
                array(
                    'id' => 183,
                    'lang' => 'en',
                    'lang_key' => 'Confirm',
                    'lang_value' => 'Confirm',
                    'created_at' => '2022-06-06 07:07:33',
                    'updated_at' => '2022-06-06 07:07:33',
                ),
            183 =>
                array(
                    'id' => 184,
                    'lang' => 'en',
                    'lang_key' => 'Unban Confirmation',
                    'lang_value' => 'Unban Confirmation',
                    'created_at' => '2022-06-06 07:07:33',
                    'updated_at' => '2022-06-06 07:07:33',
                ),
            184 =>
                array(
                    'id' => 185,
                    'lang' => 'en',
                    'lang_key' => 'Are you sure to unban this user?',
                    'lang_value' => 'Are you sure to unban this user?',
                    'created_at' => '2022-06-06 07:07:33',
                    'updated_at' => '2022-06-06 07:07:33',
                ),
            185 =>
                array(
                    'id' => 186,
                    'lang' => 'en',
                    'lang_key' => 'Recharge Wallet',
                    'lang_value' => 'Recharge Wallet',
                    'created_at' => '2022-06-06 07:07:33',
                    'updated_at' => '2022-06-06 07:07:33',
                ),
            186 =>
                array(
                    'id' => 187,
                    'lang' => 'en',
                    'lang_key' => 'Amount',
                    'lang_value' => 'Amount',
                    'created_at' => '2022-06-06 07:07:33',
                    'updated_at' => '2022-06-06 07:07:33',
                ),
            187 =>
                array(
                    'id' => 188,
                    'lang' => 'en',
                    'lang_key' => 'Client Lists',
                    'lang_value' => 'Client Lists',
                    'created_at' => '2022-06-06 07:07:39',
                    'updated_at' => '2022-06-06 07:07:39',
                ),
            188 =>
                array(
                    'id' => 189,
                    'lang' => 'en',
                    'lang_key' => 'Search by Name',
                    'lang_value' => 'Search by Name',
                    'created_at' => '2022-06-06 07:07:39',
                    'updated_at' => '2022-06-06 07:07:39',
                ),
            189 =>
                array(
                    'id' => 190,
                    'lang' => 'en',
                    'lang_key' => 'Total Spent',
                    'lang_value' => 'Total Spent',
                    'created_at' => '2022-06-06 07:07:39',
                    'updated_at' => '2022-06-06 07:07:39',
                ),
            190 =>
                array(
                    'id' => 191,
                    'lang' => 'en',
                    'lang_key' => 'Installed Addon',
                    'lang_value' => 'Installed Addon',
                    'created_at' => '2022-06-06 07:07:48',
                    'updated_at' => '2022-06-06 07:07:48',
                ),
            191 =>
                array(
                    'id' => 192,
                    'lang' => 'en',
                    'lang_key' => 'Available Addon',
                    'lang_value' => 'Available Addon',
                    'created_at' => '2022-06-06 07:07:48',
                    'updated_at' => '2022-06-06 07:07:48',
                ),
            192 =>
                array(
                    'id' => 193,
                    'lang' => 'en',
                    'lang_key' => 'Install New Addon',
                    'lang_value' => 'Install New Addon',
                    'created_at' => '2022-06-06 07:07:48',
                    'updated_at' => '2022-06-06 07:07:48',
                ),
            193 =>
                array(
                    'id' => 194,
                    'lang' => 'en',
                    'lang_key' => 'No Addon Installed',
                    'lang_value' => 'No Addon Installed',
                    'created_at' => '2022-06-06 07:07:48',
                    'updated_at' => '2022-06-06 07:07:48',
                ),
            194 =>
                array(
                    'id' => 195,
                    'lang' => 'en',
                    'lang_key' => 'Status updated successfully',
                    'lang_value' => 'Status updated successfully',
                    'created_at' => '2022-06-06 07:07:48',
                    'updated_at' => '2022-06-06 07:07:48',
                ),
            195 =>
                array(
                    'id' => 196,
                    'lang' => 'en',
                    'lang_key' => 'Something went wrong',
                    'lang_value' => 'Something went wrong',
                    'created_at' => '2022-06-06 07:07:48',
                    'updated_at' => '2022-06-06 07:07:48',
                ),
            196 =>
                array(
                    'id' => 197,
                    'lang' => 'en',
                    'lang_key' => 'Frontend Website Name',
                    'lang_value' => 'Frontend Website Name',
                    'created_at' => '2022-06-06 07:08:35',
                    'updated_at' => '2022-06-06 07:08:35',
                ),
            197 =>
                array(
                    'id' => 198,
                    'lang' => 'en',
                    'lang_key' => 'Workdesk',
                    'lang_value' => 'Workdesk',
                    'created_at' => '2022-06-06 07:08:35',
                    'updated_at' => '2022-06-06 07:08:35',
                ),
            198 =>
                array(
                    'id' => 199,
                    'lang' => 'en',
                    'lang_key' => 'Site Motto',
                    'lang_value' => 'Site Motto',
                    'created_at' => '2022-06-06 07:08:36',
                    'updated_at' => '2022-06-06 07:08:36',
                ),
            199 =>
                array(
                    'id' => 200,
                    'lang' => 'en',
                    'lang_key' => 'Best Freelance Marketplace',
                    'lang_value' => 'Best Freelance Marketplace',
                    'created_at' => '2022-06-06 07:08:36',
                    'updated_at' => '2022-06-06 07:08:36',
                ),
            200 =>
                array(
                    'id' => 201,
                    'lang' => 'en',
                    'lang_key' => 'Site Icon',
                    'lang_value' => 'Site Icon',
                    'created_at' => '2022-06-06 07:08:36',
                    'updated_at' => '2022-06-06 07:08:36',
                ),
            201 =>
                array(
                    'id' => 202,
                    'lang' => 'en',
                    'lang_key' => 'Website favicon. 32x32 .png',
                    'lang_value' => 'Website favicon. 32x32 .png',
                    'created_at' => '2022-06-06 07:08:36',
                    'updated_at' => '2022-06-06 07:08:36',
                ),
            202 =>
                array(
                    'id' => 203,
                    'lang' => 'en',
                    'lang_key' => 'Website Base Color',
                    'lang_value' => 'Website Base Color',
                    'created_at' => '2022-06-06 07:08:36',
                    'updated_at' => '2022-06-06 07:08:36',
                ),
            203 =>
                array(
                    'id' => 204,
                    'lang' => 'en',
                    'lang_key' => 'Hex Color Code',
                    'lang_value' => 'Hex Color Code',
                    'created_at' => '2022-06-06 07:08:36',
                    'updated_at' => '2022-06-06 07:08:36',
                ),
            204 =>
                array(
                    'id' => 205,
                    'lang' => 'en',
                    'lang_key' => 'Website Base Hover Color',
                    'lang_value' => 'Website Base Hover Color',
                    'created_at' => '2022-06-06 07:08:36',
                    'updated_at' => '2022-06-06 07:08:36',
                ),
            205 =>
                array(
                    'id' => 206,
                    'lang' => 'en',
                    'lang_key' => 'Global Seo',
                    'lang_value' => 'Global Seo',
                    'created_at' => '2022-06-06 07:08:36',
                    'updated_at' => '2022-06-06 07:08:36',
                ),
            206 =>
                array(
                    'id' => 207,
                    'lang' => 'en',
                    'lang_key' => 'Meta Title',
                    'lang_value' => 'Meta Title',
                    'created_at' => '2022-06-06 07:08:36',
                    'updated_at' => '2022-06-06 07:08:36',
                ),
            207 =>
                array(
                    'id' => 208,
                    'lang' => 'en',
                    'lang_key' => 'Title',
                    'lang_value' => 'Title',
                    'created_at' => '2022-06-06 07:08:36',
                    'updated_at' => '2022-06-06 07:08:36',
                ),
            208 =>
                array(
                    'id' => 209,
                    'lang' => 'en',
                    'lang_key' => 'Meta description',
                    'lang_value' => 'Meta description',
                    'created_at' => '2022-06-06 07:08:36',
                    'updated_at' => '2022-06-06 07:08:36',
                ),
            209 =>
                array(
                    'id' => 210,
                    'lang' => 'en',
                    'lang_key' => 'Description',
                    'lang_value' => 'Description',
                    'created_at' => '2022-06-06 07:08:36',
                    'updated_at' => '2022-06-06 07:08:36',
                ),
            210 =>
                array(
                    'id' => 211,
                    'lang' => 'en',
                    'lang_key' => 'Keywords',
                    'lang_value' => 'Keywords',
                    'created_at' => '2022-06-06 07:08:36',
                    'updated_at' => '2022-06-06 07:08:36',
                ),
            211 =>
                array(
                    'id' => 212,
                    'lang' => 'en',
                    'lang_key' => 'Keyword, Keyword',
                    'lang_value' => 'Keyword, Keyword',
                    'created_at' => '2022-06-06 07:08:36',
                    'updated_at' => '2022-06-06 07:08:36',
                ),
            212 =>
                array(
                    'id' => 213,
                    'lang' => 'en',
                    'lang_key' => 'Separate with coma',
                    'lang_value' => 'Separate with coma',
                    'created_at' => '2022-06-06 07:08:36',
                    'updated_at' => '2022-06-06 07:08:36',
                ),
            213 =>
                array(
                    'id' => 214,
                    'lang' => 'en',
                    'lang_key' => 'Meta Image',
                    'lang_value' => 'Meta Image',
                    'created_at' => '2022-06-06 07:08:36',
                    'updated_at' => '2022-06-06 07:08:36',
                ),
            214 =>
                array(
                    'id' => 215,
                    'lang' => 'en',
                    'lang_key' => 'Website Popup',
                    'lang_value' => 'Website Popup',
                    'created_at' => '2022-06-06 07:08:36',
                    'updated_at' => '2022-06-06 07:08:36',
                ),
            215 =>
                array(
                    'id' => 216,
                    'lang' => 'en',
                    'lang_key' => 'Show website popup?',
                    'lang_value' => 'Show website popup?',
                    'created_at' => '2022-06-06 07:08:36',
                    'updated_at' => '2022-06-06 07:08:36',
                ),
            216 =>
                array(
                    'id' => 217,
                    'lang' => 'en',
                    'lang_key' => 'Popup content',
                    'lang_value' => 'Popup content',
                    'created_at' => '2022-06-06 07:08:36',
                    'updated_at' => '2022-06-06 07:08:36',
                ),
            217 =>
                array(
                    'id' => 218,
                    'lang' => 'en',
                    'lang_key' => 'Show Subscriber form?',
                    'lang_value' => 'Show Subscriber form?',
                    'created_at' => '2022-06-06 07:08:36',
                    'updated_at' => '2022-06-06 07:08:36',
                ),
            218 =>
                array(
                    'id' => 219,
                    'lang' => 'en',
                    'lang_key' => 'Website Pages',
                    'lang_value' => 'Website Pages',
                    'created_at' => '2022-06-06 07:08:40',
                    'updated_at' => '2022-06-06 07:08:40',
                ),
            219 =>
                array(
                    'id' => 220,
                    'lang' => 'en',
                    'lang_key' => 'All Pages',
                    'lang_value' => 'All Pages',
                    'created_at' => '2022-06-06 07:08:40',
                    'updated_at' => '2022-06-06 07:08:40',
                ),
            220 =>
                array(
                    'id' => 221,
                    'lang' => 'en',
                    'lang_key' => 'Add New Page',
                    'lang_value' => 'Add New Page',
                    'created_at' => '2022-06-06 07:08:40',
                    'updated_at' => '2022-06-06 07:08:40',
                ),
            221 =>
                array(
                    'id' => 222,
                    'lang' => 'en',
                    'lang_key' => 'URL',
                    'lang_value' => 'URL',
                    'created_at' => '2022-06-06 07:08:40',
                    'updated_at' => '2022-06-06 07:08:40',
                ),
            222 =>
                array(
                    'id' => 223,
                    'lang' => 'en',
                    'lang_key' => 'Actions',
                    'lang_value' => 'Actions',
                    'created_at' => '2022-06-06 07:08:40',
                    'updated_at' => '2022-06-06 07:08:40',
                ),
            223 =>
                array(
                    'id' => 224,
                    'lang' => 'en',
                    'lang_key' => 'Home Page',
                    'lang_value' => 'Home Page',
                    'created_at' => '2022-06-06 07:08:40',
                    'updated_at' => '2022-06-06 07:08:40',
                ),
            224 =>
                array(
                    'id' => 225,
                    'lang' => 'en',
                    'lang_key' => 'Delete Confirmation',
                    'lang_value' => 'Delete Confirmation',
                    'created_at' => '2022-06-06 07:08:40',
                    'updated_at' => '2022-06-06 07:08:40',
                ),
            225 =>
                array(
                    'id' => 226,
                    'lang' => 'en',
                    'lang_key' => 'Are you sure to delete this?',
                    'lang_value' => 'Are you sure to delete this?',
                    'created_at' => '2022-06-06 07:08:40',
                    'updated_at' => '2022-06-06 07:08:40',
                ),
            226 =>
                array(
                    'id' => 227,
                    'lang' => 'en',
                    'lang_key' => 'Delete',
                    'lang_value' => 'Delete',
                    'created_at' => '2022-06-06 07:08:40',
                    'updated_at' => '2022-06-06 07:08:40',
                ),
            227 =>
                array(
                    'id' => 228,
                    'lang' => 'en',
                    'lang_key' => 'Website Home',
                    'lang_value' => 'Website Home',
                    'created_at' => '2022-06-06 07:08:45',
                    'updated_at' => '2022-06-06 07:08:45',
                ),
            228 =>
                array(
                    'id' => 229,
                    'lang' => 'en',
                    'lang_key' => 'Sliders Section',
                    'lang_value' => 'Sliders Section',
                    'created_at' => '2022-06-06 07:08:45',
                    'updated_at' => '2022-06-06 07:08:45',
                ),
            229 =>
                array(
                    'id' => 230,
                    'lang' => 'en',
                    'lang_key' => 'Sub title',
                    'lang_value' => 'Sub title',
                    'created_at' => '2022-06-06 07:08:45',
                    'updated_at' => '2022-06-06 07:08:45',
                ),
            230 =>
                array(
                    'id' => 231,
                    'lang' => 'en',
                    'lang_key' => 'Type..',
                    'lang_value' => 'Type..',
                    'created_at' => '2022-06-06 07:08:45',
                    'updated_at' => '2022-06-06 07:08:45',
                ),
            231 =>
                array(
                    'id' => 232,
                    'lang' => 'en',
                    'lang_key' => 'Slider Images',
                    'lang_value' => 'Slider Images',
                    'created_at' => '2022-06-06 07:08:45',
                    'updated_at' => '2022-06-06 07:08:45',
                ),
            232 =>
                array(
                    'id' => 233,
                    'lang' => 'en',
                    'lang_key' => 'Recommended size',
                    'lang_value' => 'Recommended size',
                    'created_at' => '2022-06-06 07:08:45',
                    'updated_at' => '2022-06-06 07:08:45',
                ),
            233 =>
                array(
                    'id' => 234,
                    'lang' => 'en',
                    'lang_key' => 'Clients Section',
                    'lang_value' => 'Clients Section',
                    'created_at' => '2022-06-06 07:08:45',
                    'updated_at' => '2022-06-06 07:08:45',
                ),
            234 =>
                array(
                    'id' => 235,
                    'lang' => 'en',
                    'lang_key' => 'Clients Logos',
                    'lang_value' => 'Clients Logos',
                    'created_at' => '2022-06-06 07:08:45',
                    'updated_at' => '2022-06-06 07:08:45',
                ),
            235 =>
                array(
                    'id' => 236,
                    'lang' => 'en',
                    'lang_key' => 'How it Works Section',
                    'lang_value' => 'How it Works Section',
                    'created_at' => '2022-06-06 07:08:45',
                    'updated_at' => '2022-06-06 07:08:45',
                ),
            236 =>
                array(
                    'id' => 237,
                    'lang' => 'en',
                    'lang_key' => 'Step 1',
                    'lang_value' => 'Step 1',
                    'created_at' => '2022-06-06 07:08:45',
                    'updated_at' => '2022-06-06 07:08:45',
                ),
            237 =>
                array(
                    'id' => 238,
                    'lang' => 'en',
                    'lang_key' => 'Image',
                    'lang_value' => 'Image',
                    'created_at' => '2022-06-06 07:08:45',
                    'updated_at' => '2022-06-06 07:08:45',
                ),
            238 =>
                array(
                    'id' => 239,
                    'lang' => 'en',
                    'lang_key' => 'About description',
                    'lang_value' => 'About description',
                    'created_at' => '2022-06-06 07:08:45',
                    'updated_at' => '2022-06-06 07:08:45',
                ),
            239 =>
                array(
                    'id' => 240,
                    'lang' => 'en',
                    'lang_key' => 'Step 2',
                    'lang_value' => 'Step 2',
                    'created_at' => '2022-06-06 07:08:45',
                    'updated_at' => '2022-06-06 07:08:45',
                ),
            240 =>
                array(
                    'id' => 241,
                    'lang' => 'en',
                    'lang_key' => 'Step 3',
                    'lang_value' => 'Step 3',
                    'created_at' => '2022-06-06 07:08:45',
                    'updated_at' => '2022-06-06 07:08:45',
                ),
            241 =>
                array(
                    'id' => 242,
                    'lang' => 'en',
                    'lang_key' => 'Latest Project Section',
                    'lang_value' => 'Latest Project Section',
                    'created_at' => '2022-06-06 07:08:45',
                    'updated_at' => '2022-06-06 07:08:45',
                ),
            242 =>
                array(
                    'id' => 243,
                    'lang' => 'en',
                    'lang_key' => 'Featured Category Section',
                    'lang_value' => 'Featured Category Section',
                    'created_at' => '2022-06-06 07:08:45',
                    'updated_at' => '2022-06-06 07:08:45',
                ),
            243 =>
                array(
                    'id' => 244,
                    'lang' => 'en',
                    'lang_key' => 'Select Categories',
                    'lang_value' => 'Select Categories',
                    'created_at' => '2022-06-06 07:08:46',
                    'updated_at' => '2022-06-06 07:08:46',
                ),
            244 =>
                array(
                    'id' => 245,
                    'lang' => 'en',
                    'lang_key' => 'Left Banner',
                    'lang_value' => 'Left Banner',
                    'created_at' => '2022-06-06 07:08:46',
                    'updated_at' => '2022-06-06 07:08:46',
                ),
            245 =>
                array(
                    'id' => 246,
                    'lang' => 'en',
                    'lang_key' => 'Right Banner',
                    'lang_value' => 'Right Banner',
                    'created_at' => '2022-06-06 07:08:46',
                    'updated_at' => '2022-06-06 07:08:46',
                ),
            246 =>
                array(
                    'id' => 247,
                    'lang' => 'en',
                    'lang_key' => 'Services Section',
                    'lang_value' => 'Services Section',
                    'created_at' => '2022-06-06 07:08:46',
                    'updated_at' => '2022-06-06 07:08:46',
                ),
            247 =>
                array(
                    'id' => 248,
                    'lang' => 'en',
                    'lang_key' => 'Max Service Show',
                    'lang_value' => 'Max Service Show',
                    'created_at' => '2022-06-06 07:09:07',
                    'updated_at' => '2022-06-06 07:09:07',
                ),
            248 =>
                array(
                    'id' => 249,
                    'lang' => 'en',
                    'lang_key' => 'CTA Section',
                    'lang_value' => 'CTA Section',
                    'created_at' => '2022-06-06 07:09:07',
                    'updated_at' => '2022-06-06 07:09:07',
                ),
            249 =>
                array(
                    'id' => 250,
                    'lang' => 'en',
                    'lang_key' => 'Blog Section',
                    'lang_value' => 'Blog Section',
                    'created_at' => '2022-06-06 07:09:07',
                    'updated_at' => '2022-06-06 07:09:07',
                ),
            250 =>
                array(
                    'id' => 251,
                    'lang' => 'en',
                    'lang_key' => 'Max Blog Show',
                    'lang_value' => 'Max Blog Show',
                    'created_at' => '2022-06-06 07:09:07',
                    'updated_at' => '2022-06-06 07:09:07',
                ),
            251 =>
                array(
                    'id' => 252,
                    'lang' => 'en',
                    'lang_key' => 'Seo Fields',
                    'lang_value' => 'Seo Fields',
                    'created_at' => '2022-06-06 07:09:07',
                    'updated_at' => '2022-06-06 07:09:07',
                ),
            252 =>
                array(
                    'id' => 253,
                    'lang' => 'en',
                    'lang_key' => 'Browse More Categories',
                    'lang_value' => 'Browse More Categories',
                    'created_at' => '2022-11-21 13:06:58',
                    'updated_at' => '2022-11-21 13:06:58',
                ),
            253 =>
                array(
                    'id' => 254,
                    'lang' => 'en',
                    'lang_key' => 'Client',
                    'lang_value' => 'Client',
                    'created_at' => '2022-11-21 13:06:58',
                    'updated_at' => '2022-11-21 13:06:58',
                ),
            254 =>
                array(
                    'id' => 255,
                    'lang' => 'en',
                    'lang_key' => 'Freelancer',
                    'lang_value' => 'Consultant',
                    'created_at' => '2022-11-21 13:06:58',
                    'updated_at' => '2023-04-05 05:38:40',
                ),
            255 =>
                array(
                    'id' => 256,
                    'lang' => 'en',
                    'lang_key' => 'Already a Client',
                    'lang_value' => 'Already a Client',
                    'created_at' => '2022-11-21 13:06:58',
                    'updated_at' => '2022-11-21 13:06:58',
                ),
            256 =>
                array(
                    'id' => 257,
                    'lang' => 'en',
                    'lang_key' => 'Login to Get Started',
                    'lang_value' => 'Login to Get Started',
                    'created_at' => '2022-11-21 13:06:58',
                    'updated_at' => '2022-11-21 13:06:58',
                ),
            257 =>
                array(
                    'id' => 258,
                    'lang' => 'en',
                    'lang_key' => 'Or, Create an Account to Get Started',
                    'lang_value' => 'Or, Create an Account to Get Started',
                    'created_at' => '2022-11-21 13:06:58',
                    'updated_at' => '2022-11-21 13:06:58',
                ),
            258 =>
                array(
                    'id' => 259,
                    'lang' => 'en',
                    'lang_key' => 'Already a Freelancer',
                    'lang_value' => 'Already a Consultant',
                    'created_at' => '2022-11-21 13:06:58',
                    'updated_at' => '2023-04-05 05:38:40',
                ),
            259 =>
                array(
                    'id' => 260,
                    'lang' => 'en',
                    'lang_key' => 'Subscription',
                    'lang_value' => 'Subscription',
                    'created_at' => '2022-11-21 13:06:59',
                    'updated_at' => '2022-11-21 13:06:59',
                ),
            260 =>
                array(
                    'id' => 261,
                    'lang' => 'en',
                    'lang_key' => 'Mobile Apps',
                    'lang_value' => 'Mobile Apps',
                    'created_at' => '2022-11-21 13:06:59',
                    'updated_at' => '2022-11-21 13:06:59',
                ),
            261 =>
                array(
                    'id' => 262,
                    'lang' => 'en',
                    'lang_key' => 'Filter By',
                    'lang_value' => 'Filter By',
                    'created_at' => '2022-11-21 13:08:48',
                    'updated_at' => '2022-11-21 13:08:48',
                ),
            262 =>
                array(
                    'id' => 263,
                    'lang' => 'en',
                    'lang_key' => 'All Categories',
                    'lang_value' => 'All Categories',
                    'created_at' => '2022-11-21 13:08:48',
                    'updated_at' => '2022-11-21 13:08:48',
                ),
            263 =>
                array(
                    'id' => 264,
                    'lang' => 'en',
                    'lang_key' => 'Project Type',
                    'lang_value' => 'Project Type',
                    'created_at' => '2022-11-21 13:08:48',
                    'updated_at' => '2022-11-21 13:08:48',
                ),
            264 =>
                array(
                    'id' => 265,
                    'lang' => 'en',
                    'lang_key' => 'Fixed Price',
                    'lang_value' => 'Fixed Price',
                    'created_at' => '2022-11-21 13:08:48',
                    'updated_at' => '2022-11-21 13:08:48',
                ),
            265 =>
                array(
                    'id' => 266,
                    'lang' => 'en',
                    'lang_key' => 'Long Term',
                    'lang_value' => 'Long Term',
                    'created_at' => '2022-11-21 13:08:48',
                    'updated_at' => '2022-11-21 13:08:48',
                ),
            266 =>
                array(
                    'id' => 267,
                    'lang' => 'en',
                    'lang_key' => 'Numbers of Bids',
                    'lang_value' => 'Numbers of Bids',
                    'created_at' => '2022-11-21 13:08:48',
                    'updated_at' => '2022-11-21 13:08:48',
                ),
            267 =>
                array(
                    'id' => 268,
                    'lang' => 'en',
                    'lang_key' => 'Any Number of bids',
                    'lang_value' => 'Any Number of bids',
                    'created_at' => '2022-11-21 13:08:48',
                    'updated_at' => '2022-11-21 13:08:48',
                ),
            268 =>
                array(
                    'id' => 269,
                    'lang' => 'en',
                    'lang_key' => '0 to 5',
                    'lang_value' => '0 to 5',
                    'created_at' => '2022-11-21 13:08:48',
                    'updated_at' => '2022-11-21 13:08:48',
                ),
            269 =>
                array(
                    'id' => 270,
                    'lang' => 'en',
                    'lang_key' => '5 to 10',
                    'lang_value' => '5 to 10',
                    'created_at' => '2022-11-21 13:08:48',
                    'updated_at' => '2022-11-21 13:08:48',
                ),
            270 =>
                array(
                    'id' => 271,
                    'lang' => 'en',
                    'lang_key' => '10 to 20',
                    'lang_value' => '10 to 20',
                    'created_at' => '2022-11-21 13:08:48',
                    'updated_at' => '2022-11-21 13:08:48',
                ),
            271 =>
                array(
                    'id' => 272,
                    'lang' => 'en',
                    'lang_key' => '20 to 30',
                    'lang_value' => '20 to 30',
                    'created_at' => '2022-11-21 13:08:48',
                    'updated_at' => '2022-11-21 13:08:48',
                ),
            272 =>
                array(
                    'id' => 273,
                    'lang' => 'en',
                    'lang_key' => '30+',
                    'lang_value' => '30+',
                    'created_at' => '2022-11-21 13:08:48',
                    'updated_at' => '2022-11-21 13:08:48',
                ),
            273 =>
                array(
                    'id' => 274,
                    'lang' => 'en',
                    'lang_key' => 'Price',
                    'lang_value' => 'Price',
                    'created_at' => '2022-11-21 13:08:48',
                    'updated_at' => '2022-11-21 13:08:48',
                ),
            274 =>
                array(
                    'id' => 275,
                    'lang' => 'en',
                    'lang_key' => 'Search Keyword',
                    'lang_value' => 'Search Keyword',
                    'created_at' => '2022-11-21 13:08:48',
                    'updated_at' => '2022-11-21 13:08:48',
                ),
            275 =>
                array(
                    'id' => 276,
                    'lang' => 'en',
                    'lang_key' => 'Newest first',
                    'lang_value' => 'Newest first',
                    'created_at' => '2022-11-21 13:08:48',
                    'updated_at' => '2022-11-21 13:08:48',
                ),
            276 =>
                array(
                    'id' => 277,
                    'lang' => 'en',
                    'lang_key' => 'Lowest budget first',
                    'lang_value' => 'Lowest budget first',
                    'created_at' => '2022-11-21 13:08:48',
                    'updated_at' => '2022-11-21 13:08:48',
                ),
            277 =>
                array(
                    'id' => 278,
                    'lang' => 'en',
                    'lang_key' => 'Highest budget first',
                    'lang_value' => 'Highest budget first',
                    'created_at' => '2022-11-21 13:08:48',
                    'updated_at' => '2022-11-21 13:08:48',
                ),
            278 =>
                array(
                    'id' => 279,
                    'lang' => 'en',
                    'lang_key' => 'Lowest bids first',
                    'lang_value' => 'Lowest bids first',
                    'created_at' => '2022-11-21 13:08:48',
                    'updated_at' => '2022-11-21 13:08:48',
                ),
            279 =>
                array(
                    'id' => 280,
                    'lang' => 'en',
                    'lang_key' => 'Highest bids first',
                    'lang_value' => 'Highest bids first',
                    'created_at' => '2022-11-21 13:08:48',
                    'updated_at' => '2022-11-21 13:08:48',
                ),
            280 =>
                array(
                    'id' => 281,
                    'lang' => 'en',
                    'lang_key' => 'My Panel',
                    'lang_value' => 'My Panel',
                    'created_at' => '2022-11-21 13:08:48',
                    'updated_at' => '2022-11-21 13:08:48',
                ),
            281 =>
                array(
                    'id' => 282,
                    'lang' => 'en',
                    'lang_key' => 'Countries',
                    'lang_value' => 'Countries',
                    'created_at' => '2022-11-21 13:10:55',
                    'updated_at' => '2022-11-21 13:10:55',
                ),
            282 =>
                array(
                    'id' => 283,
                    'lang' => 'en',
                    'lang_key' => 'All Countries',
                    'lang_value' => 'All Countries',
                    'created_at' => '2022-11-21 13:10:55',
                    'updated_at' => '2022-11-21 13:10:55',
                ),
            283 =>
                array(
                    'id' => 284,
                    'lang' => 'en',
                    'lang_key' => 'Hourly Rate',
                    'lang_value' => 'Hourly Rate',
                    'created_at' => '2022-11-21 13:10:55',
                    'updated_at' => '2022-11-21 13:10:55',
                ),
            284 =>
                array(
                    'id' => 285,
                    'lang' => 'en',
                    'lang_key' => 'Rating',
                    'lang_value' => 'Rating',
                    'created_at' => '2022-11-21 13:10:55',
                    'updated_at' => '2022-11-21 13:10:55',
                ),
            285 =>
                array(
                    'id' => 286,
                    'lang' => 'en',
                    'lang_key' => 'Any rating',
                    'lang_value' => 'Any rating',
                    'created_at' => '2022-11-21 13:10:55',
                    'updated_at' => '2022-11-21 13:10:55',
                ),
            286 =>
                array(
                    'id' => 287,
                    'lang' => 'en',
                    'lang_key' => '4 star +',
                    'lang_value' => '4 star +',
                    'created_at' => '2022-11-21 13:10:55',
                    'updated_at' => '2022-11-21 13:10:55',
                ),
            287 =>
                array(
                    'id' => 288,
                    'lang' => 'en',
                    'lang_key' => '3 to 4 star',
                    'lang_value' => '3 to 4 star',
                    'created_at' => '2022-11-21 13:10:55',
                    'updated_at' => '2022-11-21 13:10:55',
                ),
            288 =>
                array(
                    'id' => 289,
                    'lang' => 'en',
                    'lang_key' => '2 to 3 star',
                    'lang_value' => '2 to 3 star',
                    'created_at' => '2022-11-21 13:10:55',
                    'updated_at' => '2022-11-21 13:10:55',
                ),
            289 =>
                array(
                    'id' => 290,
                    'lang' => 'en',
                    'lang_key' => '1 to 2 star',
                    'lang_value' => '1 to 2 star',
                    'created_at' => '2022-11-21 13:10:55',
                    'updated_at' => '2022-11-21 13:10:55',
                ),
            290 =>
                array(
                    'id' => 291,
                    'lang' => 'en',
                    'lang_key' => '0 to 1 star',
                    'lang_value' => '0 to 1 star',
                    'created_at' => '2022-11-21 13:10:55',
                    'updated_at' => '2022-11-21 13:10:55',
                ),
            291 =>
                array(
                    'id' => 292,
                    'lang' => 'en',
                    'lang_key' => 'Skills',
                    'lang_value' => 'Skills',
                    'created_at' => '2022-11-21 13:10:55',
                    'updated_at' => '2022-11-21 13:10:55',
                ),
            292 =>
                array(
                    'id' => 293,
                    'lang' => 'en',
                    'lang_key' => 'Subtitle',
                    'lang_value' => 'Subtitle',
                    'created_at' => '2022-11-21 13:15:08',
                    'updated_at' => '2022-11-21 13:15:08',
                ),
            293 =>
                array(
                    'id' => 294,
                    'lang' => 'en',
                    'lang_key' => 'Title (Client)',
                    'lang_value' => 'Title (Client)',
                    'created_at' => '2022-11-21 13:15:08',
                    'updated_at' => '2022-11-21 13:15:08',
                ),
            294 =>
                array(
                    'id' => 295,
                    'lang' => 'en',
                    'lang_key' => 'Sub title (Client)',
                    'lang_value' => 'Sub title (Client)',
                    'created_at' => '2022-11-21 13:15:08',
                    'updated_at' => '2022-11-21 13:15:08',
                ),
            295 =>
                array(
                    'id' => 296,
                    'lang' => 'en',
                    'lang_key' => 'Title (Freelancer)',
                    'lang_value' => 'Title (Consultant)',
                    'created_at' => '2022-11-21 13:15:08',
                    'updated_at' => '2023-04-05 05:38:40',
                ),
            296 =>
                array(
                    'id' => 297,
                    'lang' => 'en',
                    'lang_key' => 'Sub title (Freelancer)',
                    'lang_value' => 'Sub title (Consultant)',
                    'created_at' => '2022-11-21 13:15:08',
                    'updated_at' => '2023-04-05 05:38:40',
                ),
            297 =>
                array(
                    'id' => 298,
                    'lang' => 'en',
                    'lang_key' => 'Banner',
                    'lang_value' => 'Banner',
                    'created_at' => '2022-11-21 13:15:08',
                    'updated_at' => '2022-11-21 13:15:08',
                ),
            298 =>
                array(
                    'id' => 299,
                    'lang' => 'en',
                    'lang_key' => 'Website Footer',
                    'lang_value' => 'Website Footer',
                    'created_at' => '2022-11-21 13:42:12',
                    'updated_at' => '2022-11-21 13:42:12',
                ),
            299 =>
                array(
                    'id' => 300,
                    'lang' => 'en',
                    'lang_key' => 'Footer Widget',
                    'lang_value' => 'Footer Widget',
                    'created_at' => '2022-11-21 13:42:12',
                    'updated_at' => '2022-11-21 13:42:12',
                ),
            300 =>
                array(
                    'id' => 301,
                    'lang' => 'en',
                    'lang_key' => 'About Widget',
                    'lang_value' => 'About Widget',
                    'created_at' => '2022-11-21 13:42:12',
                    'updated_at' => '2022-11-21 13:42:12',
                ),
            301 =>
                array(
                    'id' => 302,
                    'lang' => 'en',
                    'lang_key' => 'Footer Logo',
                    'lang_value' => 'Footer Logo',
                    'created_at' => '2022-11-21 13:42:12',
                    'updated_at' => '2022-11-21 13:42:12',
                ),
            302 =>
                array(
                    'id' => 303,
                    'lang' => 'en',
                    'lang_key' => 'Link Widget One',
                    'lang_value' => 'Link Widget One',
                    'created_at' => '2022-11-21 13:42:12',
                    'updated_at' => '2022-11-21 13:42:12',
                ),
            303 =>
                array(
                    'id' => 304,
                    'lang' => 'en',
                    'lang_key' => 'Widget title',
                    'lang_value' => 'Widget title',
                    'created_at' => '2022-11-21 13:42:12',
                    'updated_at' => '2022-11-21 13:42:12',
                ),
            304 =>
                array(
                    'id' => 305,
                    'lang' => 'en',
                    'lang_key' => 'Links',
                    'lang_value' => 'Links',
                    'created_at' => '2022-11-21 13:42:12',
                    'updated_at' => '2022-11-21 13:42:12',
                ),
            305 =>
                array(
                    'id' => 306,
                    'lang' => 'en',
                    'lang_key' => 'Label',
                    'lang_value' => 'Label',
                    'created_at' => '2022-11-21 13:42:12',
                    'updated_at' => '2022-11-21 13:42:12',
                ),
            306 =>
                array(
                    'id' => 307,
                    'lang' => 'en',
                    'lang_key' => 'Add New',
                    'lang_value' => 'Add New',
                    'created_at' => '2022-11-21 13:42:12',
                    'updated_at' => '2022-11-21 13:42:12',
                ),
            307 =>
                array(
                    'id' => 308,
                    'lang' => 'en',
                    'lang_key' => 'Link Widget Two',
                    'lang_value' => 'Link Widget Two',
                    'created_at' => '2022-11-21 13:42:12',
                    'updated_at' => '2022-11-21 13:42:12',
                ),
            308 =>
                array(
                    'id' => 309,
                    'lang' => 'en',
                    'lang_key' => 'Link Widget Three',
                    'lang_value' => 'Link Widget Three',
                    'created_at' => '2022-11-21 13:42:12',
                    'updated_at' => '2022-11-21 13:42:12',
                ),
            309 =>
                array(
                    'id' => 310,
                    'lang' => 'en',
                    'lang_key' => 'Link Widget Four',
                    'lang_value' => 'Link Widget Four',
                    'created_at' => '2022-11-21 13:42:12',
                    'updated_at' => '2022-11-21 13:42:12',
                ),
            310 =>
                array(
                    'id' => 311,
                    'lang' => 'en',
                    'lang_key' => 'Social Widget',
                    'lang_value' => 'Social Widget',
                    'created_at' => '2022-11-21 13:42:12',
                    'updated_at' => '2022-11-21 13:42:12',
                ),
            311 =>
                array(
                    'id' => 312,
                    'lang' => 'en',
                    'lang_key' => 'Social Links',
                    'lang_value' => 'Social Links',
                    'created_at' => '2022-11-21 13:42:12',
                    'updated_at' => '2022-11-21 13:42:12',
                ),
            312 =>
                array(
                    'id' => 313,
                    'lang' => 'en',
                    'lang_key' => 'Footer Apps Link',
                    'lang_value' => 'Footer Apps Link',
                    'created_at' => '2022-11-21 13:42:12',
                    'updated_at' => '2022-11-21 13:42:12',
                ),
            313 =>
                array(
                    'id' => 314,
                    'lang' => 'en',
                    'lang_key' => 'Android App Link',
                    'lang_value' => 'Android App Link',
                    'created_at' => '2022-11-21 13:42:12',
                    'updated_at' => '2022-11-21 13:42:12',
                ),
            314 =>
                array(
                    'id' => 315,
                    'lang' => 'en',
                    'lang_key' => 'Apple App Link',
                    'lang_value' => 'Apple App Link',
                    'created_at' => '2022-11-21 13:42:12',
                    'updated_at' => '2022-11-21 13:42:12',
                ),
            315 =>
                array(
                    'id' => 316,
                    'lang' => 'en',
                    'lang_key' => 'Footer Bottom',
                    'lang_value' => 'Footer Bottom',
                    'created_at' => '2022-11-21 13:42:12',
                    'updated_at' => '2022-11-21 13:42:12',
                ),
            316 =>
                array(
                    'id' => 317,
                    'lang' => 'en',
                    'lang_key' => 'Show Language Switcher?',
                    'lang_value' => 'Show Language Switcher?',
                    'created_at' => '2022-11-21 13:42:12',
                    'updated_at' => '2022-11-21 13:42:12',
                ),
            317 =>
                array(
                    'id' => 318,
                    'lang' => 'en',
                    'lang_key' => 'Copyright Text',
                    'lang_value' => 'Copyright Text',
                    'created_at' => '2022-11-21 13:42:12',
                    'updated_at' => '2022-11-21 13:42:12',
                ),
            318 =>
                array(
                    'id' => 319,
                    'lang' => 'en',
                    'lang_key' => '404',
                    'lang_value' => '404',
                    'created_at' => '2023-04-04 18:24:18',
                    'updated_at' => '2023-04-04 18:24:18',
                ),
            319 =>
                array(
                    'id' => 320,
                    'lang' => 'en',
                    'lang_key' => 'Looks like you\'re lost',
                    'lang_value' => 'Looks like you\'re lost',
                    'created_at' => '2023-04-04 18:24:18',
                    'updated_at' => '2023-04-04 18:24:18',
                ),
            320 =>
                array(
                    'id' => 321,
                    'lang' => 'en',
                    'lang_key' => 'The page you\'re looking for is not available',
                    'lang_value' => 'The page you\'re looking for is not available',
                    'created_at' => '2023-04-04 18:24:18',
                    'updated_at' => '2023-04-04 18:24:18',
                ),
            321 =>
                array(
                    'id' => 322,
                    'lang' => 'en',
                    'lang_key' => '500',
                    'lang_value' => '500',
                    'created_at' => '2023-04-04 18:24:18',
                    'updated_at' => '2023-04-04 18:24:18',
                ),
            322 =>
                array(
                    'id' => 323,
                    'lang' => 'en',
                    'lang_key' => 'Internal Server Error',
                    'lang_value' => 'Internal Server Error',
                    'created_at' => '2023-04-04 18:24:18',
                    'updated_at' => '2023-04-04 18:24:18',
                ),
            323 =>
                array(
                    'id' => 324,
                    'lang' => 'en',
                    'lang_key' => 'We\'re experinecing an internal server problem',
                    'lang_value' => 'We\'re experinecing an internal server problem',
                    'created_at' => '2023-04-04 18:24:18',
                    'updated_at' => '2023-04-04 18:24:18',
                ),
            324 =>
                array(
                    'id' => 325,
                    'lang' => 'en',
                    'lang_key' => 'Please try again later',
                    'lang_value' => 'Please try again later',
                    'created_at' => '2023-04-04 18:24:18',
                    'updated_at' => '2023-04-04 18:24:18',
                ),
            325 =>
                array(
                    'id' => 326,
                    'lang' => 'en',
                    'lang_key' => 'Back to Homepage',
                    'lang_value' => 'Back to Homepage',
                    'created_at' => '2023-04-04 18:25:30',
                    'updated_at' => '2023-04-04 18:25:30',
                ),
            326 =>
                array(
                    'id' => 327,
                    'lang' => 'en',
                    'lang_key' => 'Verification Lists',
                    'lang_value' => 'Verification Lists',
                    'created_at' => '2023-04-04 18:28:58',
                    'updated_at' => '2023-04-04 18:28:58',
                ),
            327 =>
                array(
                    'id' => 328,
                    'lang' => 'en',
                    'lang_key' => 'User Name',
                    'lang_value' => 'User Name',
                    'created_at' => '2023-04-04 18:28:58',
                    'updated_at' => '2023-04-04 18:28:58',
                ),
            328 =>
                array(
                    'id' => 329,
                    'lang' => 'en',
                    'lang_key' => 'User Type',
                    'lang_value' => 'User Type',
                    'created_at' => '2023-04-04 18:28:58',
                    'updated_at' => '2023-04-04 18:28:58',
                ),
            329 =>
                array(
                    'id' => 330,
                    'lang' => 'en',
                    'lang_key' => 'Cancel Request',
                    'lang_value' => 'Cancel Request',
                    'created_at' => '2023-04-04 18:28:58',
                    'updated_at' => '2023-04-04 18:28:58',
                ),
            330 =>
                array(
                    'id' => 331,
                    'lang' => 'en',
                    'lang_key' => 'Filter by Client',
                    'lang_value' => 'Filter by Client',
                    'created_at' => '2023-04-04 18:29:03',
                    'updated_at' => '2023-04-04 18:29:03',
                ),
            331 =>
                array(
                    'id' => 332,
                    'lang' => 'en',
                    'lang_key' => 'Price (High > Low)',
                    'lang_value' => 'Price (High > Low)',
                    'created_at' => '2023-04-04 18:29:03',
                    'updated_at' => '2023-04-04 18:29:03',
                ),
            332 =>
                array(
                    'id' => 333,
                    'lang' => 'en',
                    'lang_key' => 'Price (Low > High)',
                    'lang_value' => 'Price (Low > High)',
                    'created_at' => '2023-04-04 18:29:03',
                    'updated_at' => '2023-04-04 18:29:03',
                ),
            333 =>
                array(
                    'id' => 334,
                    'lang' => 'en',
                    'lang_key' => 'Type and Hit Enter',
                    'lang_value' => 'Type and Hit Enter',
                    'created_at' => '2023-04-04 18:29:03',
                    'updated_at' => '2023-04-04 18:29:03',
                ),
            334 =>
                array(
                    'id' => 335,
                    'lang' => 'en',
                    'lang_key' => 'Type',
                    'lang_value' => 'Type',
                    'created_at' => '2023-04-04 18:29:03',
                    'updated_at' => '2023-04-04 18:29:03',
                ),
            335 =>
                array(
                    'id' => 336,
                    'lang' => 'en',
                    'lang_key' => 'Budget',
                    'lang_value' => 'Budget',
                    'created_at' => '2023-04-04 18:29:03',
                    'updated_at' => '2023-04-04 18:29:03',
                ),
            336 =>
                array(
                    'id' => 337,
                    'lang' => 'en',
                    'lang_key' => 'Posted at',
                    'lang_value' => 'Posted at',
                    'created_at' => '2023-04-04 18:29:03',
                    'updated_at' => '2023-04-04 18:29:03',
                ),
            337 =>
                array(
                    'id' => 338,
                    'lang' => 'en',
                    'lang_key' => 'Zip File',
                    'lang_value' => 'Zip File',
                    'created_at' => '2023-04-04 18:59:01',
                    'updated_at' => '2023-04-04 18:59:01',
                ),
            338 =>
                array(
                    'id' => 339,
                    'lang' => 'en',
                    'lang_key' => 'Install',
                    'lang_value' => 'Install',
                    'created_at' => '2023-04-04 18:59:01',
                    'updated_at' => '2023-04-04 18:59:01',
                ),
            339 =>
                array(
                    'id' => 340,
                    'lang' => 'en',
                    'lang_key' => 'Cache cleared successfully',
                    'lang_value' => 'Cache cleared successfully',
                    'created_at' => '2023-04-04 18:59:05',
                    'updated_at' => '2023-04-04 18:59:05',
                ),
            340 =>
                array(
                    'id' => 341,
                    'lang' => 'en',
                    'lang_key' => 'Server information',
                    'lang_value' => 'Server information',
                    'created_at' => '2023-04-04 19:11:54',
                    'updated_at' => '2023-04-04 19:11:54',
                ),
            341 =>
                array(
                    'id' => 342,
                    'lang' => 'en',
                    'lang_key' => 'Current Version',
                    'lang_value' => 'Current Version',
                    'created_at' => '2023-04-04 19:11:54',
                    'updated_at' => '2023-04-04 19:11:54',
                ),
            342 =>
                array(
                    'id' => 343,
                    'lang' => 'en',
                    'lang_key' => 'Required Version',
                    'lang_value' => 'Required Version',
                    'created_at' => '2023-04-04 19:11:54',
                    'updated_at' => '2023-04-04 19:11:54',
                ),
            343 =>
                array(
                    'id' => 344,
                    'lang' => 'en',
                    'lang_key' => 'Status',
                    'lang_value' => 'Status',
                    'created_at' => '2023-04-04 19:11:54',
                    'updated_at' => '2023-04-04 19:11:54',
                ),
            344 =>
                array(
                    'id' => 345,
                    'lang' => 'en',
                    'lang_key' => 'php.ini Config',
                    'lang_value' => 'php.ini Config',
                    'created_at' => '2023-04-04 19:11:54',
                    'updated_at' => '2023-04-04 19:11:54',
                ),
            345 =>
                array(
                    'id' => 346,
                    'lang' => 'en',
                    'lang_key' => 'Config Name',
                    'lang_value' => 'Config Name',
                    'created_at' => '2023-04-04 19:11:54',
                    'updated_at' => '2023-04-04 19:11:54',
                ),
            346 =>
                array(
                    'id' => 347,
                    'lang' => 'en',
                    'lang_key' => 'Current',
                    'lang_value' => 'Current',
                    'created_at' => '2023-04-04 19:11:54',
                    'updated_at' => '2023-04-04 19:11:54',
                ),
            347 =>
                array(
                    'id' => 348,
                    'lang' => 'en',
                    'lang_key' => 'Recommended',
                    'lang_value' => 'Recommended',
                    'created_at' => '2023-04-04 19:11:54',
                    'updated_at' => '2023-04-04 19:11:54',
                ),
            348 =>
                array(
                    'id' => 349,
                    'lang' => 'en',
                    'lang_key' => 'Extensions information',
                    'lang_value' => 'Extensions information',
                    'created_at' => '2023-04-04 19:11:54',
                    'updated_at' => '2023-04-04 19:11:54',
                ),
            349 =>
                array(
                    'id' => 350,
                    'lang' => 'en',
                    'lang_key' => 'Extension Name',
                    'lang_value' => 'Extension Name',
                    'created_at' => '2023-04-04 19:11:54',
                    'updated_at' => '2023-04-04 19:11:54',
                ),
            350 =>
                array(
                    'id' => 351,
                    'lang' => 'en',
                    'lang_key' => 'Filesystem Permissions',
                    'lang_value' => 'Filesystem Permissions',
                    'created_at' => '2023-04-04 19:11:54',
                    'updated_at' => '2023-04-04 19:11:54',
                ),
            351 =>
                array(
                    'id' => 352,
                    'lang' => 'en',
                    'lang_key' => 'File or Folder',
                    'lang_value' => 'File or Folder',
                    'created_at' => '2023-04-04 19:11:54',
                    'updated_at' => '2023-04-04 19:11:54',
                ),
            352 =>
                array(
                    'id' => 353,
                    'lang' => 'en',
                    'lang_key' => 'All uploaded files',
                    'lang_value' => 'All uploaded files',
                    'created_at' => '2023-04-04 19:12:20',
                    'updated_at' => '2023-04-04 19:12:20',
                ),
            353 =>
                array(
                    'id' => 354,
                    'lang' => 'en',
                    'lang_key' => 'Upload New File',
                    'lang_value' => 'Upload New File',
                    'created_at' => '2023-04-04 19:12:20',
                    'updated_at' => '2023-04-04 19:12:20',
                ),
            354 =>
                array(
                    'id' => 355,
                    'lang' => 'en',
                    'lang_key' => 'All files',
                    'lang_value' => 'All files',
                    'created_at' => '2023-04-04 19:12:20',
                    'updated_at' => '2023-04-04 19:12:20',
                ),
            355 =>
                array(
                    'id' => 356,
                    'lang' => 'en',
                    'lang_key' => 'Sort by newest',
                    'lang_value' => 'Sort by newest',
                    'created_at' => '2023-04-04 19:12:20',
                    'updated_at' => '2023-04-04 19:12:20',
                ),
            356 =>
                array(
                    'id' => 357,
                    'lang' => 'en',
                    'lang_key' => 'Sort by oldest',
                    'lang_value' => 'Sort by oldest',
                    'created_at' => '2023-04-04 19:12:20',
                    'updated_at' => '2023-04-04 19:12:20',
                ),
            357 =>
                array(
                    'id' => 358,
                    'lang' => 'en',
                    'lang_key' => 'Sort by smallest',
                    'lang_value' => 'Sort by smallest',
                    'created_at' => '2023-04-04 19:12:20',
                    'updated_at' => '2023-04-04 19:12:20',
                ),
            358 =>
                array(
                    'id' => 359,
                    'lang' => 'en',
                    'lang_key' => 'Sort by largest',
                    'lang_value' => 'Sort by largest',
                    'created_at' => '2023-04-04 19:12:20',
                    'updated_at' => '2023-04-04 19:12:20',
                ),
            359 =>
                array(
                    'id' => 360,
                    'lang' => 'en',
                    'lang_key' => 'Search your files',
                    'lang_value' => 'Search your files',
                    'created_at' => '2023-04-04 19:12:20',
                    'updated_at' => '2023-04-04 19:12:20',
                ),
            360 =>
                array(
                    'id' => 361,
                    'lang' => 'en',
                    'lang_key' => 'Search',
                    'lang_value' => 'Search',
                    'created_at' => '2023-04-04 19:12:20',
                    'updated_at' => '2023-04-04 19:12:20',
                ),
            361 =>
                array(
                    'id' => 362,
                    'lang' => 'en',
                    'lang_key' => 'Details Info',
                    'lang_value' => 'Details Info',
                    'created_at' => '2023-04-04 19:12:20',
                    'updated_at' => '2023-04-04 19:12:20',
                ),
            362 =>
                array(
                    'id' => 363,
                    'lang' => 'en',
                    'lang_key' => 'Download',
                    'lang_value' => 'Download',
                    'created_at' => '2023-04-04 19:12:20',
                    'updated_at' => '2023-04-04 19:12:20',
                ),
            363 =>
                array(
                    'id' => 364,
                    'lang' => 'en',
                    'lang_key' => 'Copy Link',
                    'lang_value' => 'Copy Link',
                    'created_at' => '2023-04-04 19:12:20',
                    'updated_at' => '2023-04-04 19:12:20',
                ),
            364 =>
                array(
                    'id' => 365,
                    'lang' => 'en',
                    'lang_key' => 'Are you sure to delete this file?',
                    'lang_value' => 'Are you sure to delete this file?',
                    'created_at' => '2023-04-04 19:12:20',
                    'updated_at' => '2023-04-04 19:12:20',
                ),
            365 =>
                array(
                    'id' => 366,
                    'lang' => 'en',
                    'lang_key' => 'File Info',
                    'lang_value' => 'File Info',
                    'created_at' => '2023-04-04 19:12:20',
                    'updated_at' => '2023-04-04 19:12:20',
                ),
            366 =>
                array(
                    'id' => 367,
                    'lang' => 'en',
                    'lang_key' => 'Link copied to clipboard',
                    'lang_value' => 'Link copied to clipboard',
                    'created_at' => '2023-04-04 19:12:20',
                    'updated_at' => '2023-04-04 19:12:20',
                ),
            367 =>
                array(
                    'id' => 368,
                    'lang' => 'en',
                    'lang_key' => 'Oops, unable to copy',
                    'lang_value' => 'Oops, unable to copy',
                    'created_at' => '2023-04-04 19:12:20',
                    'updated_at' => '2023-04-04 19:12:20',
                ),
            368 =>
                array(
                    'id' => 369,
                    'lang' => 'en',
                    'lang_key' => 'Select File',
                    'lang_value' => 'Select File',
                    'created_at' => '2023-04-04 19:12:44',
                    'updated_at' => '2023-04-04 19:12:44',
                ),
            369 =>
                array(
                    'id' => 370,
                    'lang' => 'en',
                    'lang_key' => 'Upload New',
                    'lang_value' => 'Upload New',
                    'created_at' => '2023-04-04 19:12:44',
                    'updated_at' => '2023-04-04 19:12:44',
                ),
            370 =>
                array(
                    'id' => 371,
                    'lang' => 'en',
                    'lang_key' => 'Selected Only',
                    'lang_value' => 'Selected Only',
                    'created_at' => '2023-04-04 19:12:44',
                    'updated_at' => '2023-04-04 19:12:44',
                ),
            371 =>
                array(
                    'id' => 372,
                    'lang' => 'en',
                    'lang_key' => 'No files found',
                    'lang_value' => 'No files found',
                    'created_at' => '2023-04-04 19:12:44',
                    'updated_at' => '2023-04-04 19:12:44',
                ),
            372 =>
                array(
                    'id' => 373,
                    'lang' => 'en',
                    'lang_key' => '0 File selected',
                    'lang_value' => '0 File selected',
                    'created_at' => '2023-04-04 19:12:44',
                    'updated_at' => '2023-04-04 19:12:44',
                ),
            373 =>
                array(
                    'id' => 374,
                    'lang' => 'en',
                    'lang_key' => 'Clear',
                    'lang_value' => 'Clear',
                    'created_at' => '2023-04-04 19:12:44',
                    'updated_at' => '2023-04-04 19:12:44',
                ),
            374 =>
                array(
                    'id' => 375,
                    'lang' => 'en',
                    'lang_key' => 'Prev',
                    'lang_value' => 'Prev',
                    'created_at' => '2023-04-04 19:12:44',
                    'updated_at' => '2023-04-04 19:12:44',
                ),
            375 =>
                array(
                    'id' => 376,
                    'lang' => 'en',
                    'lang_key' => 'Next',
                    'lang_value' => 'Next',
                    'created_at' => '2023-04-04 19:12:44',
                    'updated_at' => '2023-04-04 19:12:44',
                ),
            376 =>
                array(
                    'id' => 377,
                    'lang' => 'en',
                    'lang_key' => 'Add Files',
                    'lang_value' => 'Add Files',
                    'created_at' => '2023-04-04 19:12:44',
                    'updated_at' => '2023-04-04 19:12:44',
                ),
            377 =>
                array(
                    'id' => 378,
                    'lang' => 'en',
                    'lang_key' => 'Disable image encoding?',
                    'lang_value' => 'Disable image encoding?',
                    'created_at' => '2023-04-05 05:15:48',
                    'updated_at' => '2023-04-05 05:15:48',
                ),
            378 =>
                array(
                    'id' => 379,
                    'lang' => 'en',
                    'lang_key' => 'Name is required',
                    'lang_value' => 'Name is required',
                    'created_at' => '2023-04-05 05:16:03',
                    'updated_at' => '2023-04-05 05:16:03',
                ),
            379 =>
                array(
                    'id' => 380,
                    'lang' => 'en',
                    'lang_key' => 'Name must be unique',
                    'lang_value' => 'Name must be unique',
                    'created_at' => '2023-04-05 05:16:03',
                    'updated_at' => '2023-04-05 05:16:03',
                ),
            380 =>
                array(
                    'id' => 381,
                    'lang' => 'en',
                    'lang_key' => 'Name must less than :max characters',
                    'lang_value' => 'Name must less than :max characters',
                    'created_at' => '2023-04-05 05:16:03',
                    'updated_at' => '2023-04-05 05:16:03',
                ),
            381 =>
                array(
                    'id' => 382,
                    'lang' => 'en',
                    'lang_key' => 'Code is required',
                    'lang_value' => 'Code is required',
                    'created_at' => '2023-04-05 05:16:03',
                    'updated_at' => '2023-04-05 05:16:03',
                ),
            382 =>
                array(
                    'id' => 383,
                    'lang' => 'en',
                    'lang_key' => 'Code must be unique',
                    'lang_value' => 'Code must be unique',
                    'created_at' => '2023-04-05 05:16:03',
                    'updated_at' => '2023-04-05 05:16:03',
                ),
            383 =>
                array(
                    'id' => 384,
                    'lang' => 'en',
                    'lang_key' => 'Code must less than :max characters',
                    'lang_value' => 'Code must less than :max characters',
                    'created_at' => '2023-04-05 05:16:03',
                    'updated_at' => '2023-04-05 05:16:03',
                ),
            384 =>
                array(
                    'id' => 385,
                    'lang' => 'en',
                    'lang_key' => 'System Language',
                    'lang_value' => 'System Language',
                    'created_at' => '2023-04-05 05:16:03',
                    'updated_at' => '2023-04-05 05:16:03',
                ),
            385 =>
                array(
                    'id' => 386,
                    'lang' => 'en',
                    'lang_key' => 'All Languages',
                    'lang_value' => 'All Languages',
                    'created_at' => '2023-04-05 05:16:03',
                    'updated_at' => '2023-04-05 05:16:03',
                ),
            386 =>
                array(
                    'id' => 387,
                    'lang' => 'en',
                    'lang_key' => 'Code',
                    'lang_value' => 'Code',
                    'created_at' => '2023-04-05 05:16:03',
                    'updated_at' => '2023-04-05 05:16:03',
                ),
            387 =>
                array(
                    'id' => 388,
                    'lang' => 'en',
                    'lang_key' => 'RTL',
                    'lang_value' => 'RTL',
                    'created_at' => '2023-04-05 05:16:03',
                    'updated_at' => '2023-04-05 05:16:03',
                ),
            388 =>
                array(
                    'id' => 389,
                    'lang' => 'en',
                    'lang_key' => 'Enabled',
                    'lang_value' => 'Enabled',
                    'created_at' => '2023-04-05 05:16:03',
                    'updated_at' => '2023-04-05 05:16:03',
                ),
            389 =>
                array(
                    'id' => 390,
                    'lang' => 'en',
                    'lang_key' => 'Off',
                    'lang_value' => 'Off',
                    'created_at' => '2023-04-05 05:16:03',
                    'updated_at' => '2023-04-05 05:16:03',
                ),
            390 =>
                array(
                    'id' => 391,
                    'lang' => 'en',
                    'lang_key' => 'Translate',
                    'lang_value' => 'Translate',
                    'created_at' => '2023-04-05 05:16:03',
                    'updated_at' => '2023-04-05 05:16:03',
                ),
            391 =>
                array(
                    'id' => 392,
                    'lang' => 'en',
                    'lang_key' => 'Edit',
                    'lang_value' => 'Edit',
                    'created_at' => '2023-04-05 05:16:03',
                    'updated_at' => '2023-04-05 05:16:03',
                ),
            392 =>
                array(
                    'id' => 393,
                    'lang' => 'en',
                    'lang_key' => 'Create New Language',
                    'lang_value' => 'Create New Language',
                    'created_at' => '2023-04-05 05:16:03',
                    'updated_at' => '2023-04-05 05:16:03',
                ),
            393 =>
                array(
                    'id' => 394,
                    'lang' => 'en',
                    'lang_key' => 'Eg. English',
                    'lang_value' => 'Eg. English',
                    'created_at' => '2023-04-05 05:16:03',
                    'updated_at' => '2023-04-05 05:16:03',
                ),
            394 =>
                array(
                    'id' => 395,
                    'lang' => 'en',
                    'lang_key' => 'Select a country code',
                    'lang_value' => 'Select a country code',
                    'created_at' => '2023-04-05 05:16:03',
                    'updated_at' => '2023-04-05 05:16:03',
                ),
            395 =>
                array(
                    'id' => 396,
                    'lang' => 'en',
                    'lang_key' => 'Is this language RTL?',
                    'lang_value' => 'Is this language RTL?',
                    'created_at' => '2023-04-05 05:16:03',
                    'updated_at' => '2023-04-05 05:16:03',
                ),
            396 =>
                array(
                    'id' => 397,
                    'lang' => 'en',
                    'lang_key' => 'Create',
                    'lang_value' => 'Create',
                    'created_at' => '2023-04-05 05:16:03',
                    'updated_at' => '2023-04-05 05:16:03',
                ),
            397 =>
                array(
                    'id' => 398,
                    'lang' => 'en',
                    'lang_key' => 'Set Default Language for System',
                    'lang_value' => 'Set Default Language for System',
                    'created_at' => '2023-04-05 05:16:03',
                    'updated_at' => '2023-04-05 05:16:03',
                ),
            398 =>
                array(
                    'id' => 399,
                    'lang' => 'en',
                    'lang_key' => 'Default Language',
                    'lang_value' => 'Default Language',
                    'created_at' => '2023-04-05 05:16:04',
                    'updated_at' => '2023-04-05 05:16:04',
                ),
            399 =>
                array(
                    'id' => 400,
                    'lang' => 'en',
                    'lang_key' => 'Save Default Language',
                    'lang_value' => 'Save Default Language',
                    'created_at' => '2023-04-05 05:16:04',
                    'updated_at' => '2023-04-05 05:16:04',
                ),
            400 =>
                array(
                    'id' => 401,
                    'lang' => 'en',
                    'lang_key' => 'Currency List',
                    'lang_value' => 'Currency List',
                    'created_at' => '2023-04-05 05:16:21',
                    'updated_at' => '2023-04-05 05:16:21',
                ),
            401 =>
                array(
                    'id' => 402,
                    'lang' => 'en',
                    'lang_key' => 'Add New Currency',
                    'lang_value' => 'Add New Currency',
                    'created_at' => '2023-04-05 05:16:21',
                    'updated_at' => '2023-04-05 05:16:21',
                ),
            402 =>
                array(
                    'id' => 403,
                    'lang' => 'en',
                    'lang_key' => 'System Default Currency',
                    'lang_value' => 'System Default Currency',
                    'created_at' => '2023-04-05 05:16:21',
                    'updated_at' => '2023-04-05 05:16:21',
                ),
            403 =>
                array(
                    'id' => 404,
                    'lang' => 'en',
                    'lang_key' => 'Save',
                    'lang_value' => 'Save',
                    'created_at' => '2023-04-05 05:16:21',
                    'updated_at' => '2023-04-05 05:16:21',
                ),
            404 =>
                array(
                    'id' => 405,
                    'lang' => 'en',
                    'lang_key' => 'Currency Formats',
                    'lang_value' => 'Currency Formats',
                    'created_at' => '2023-04-05 05:16:21',
                    'updated_at' => '2023-04-05 05:16:21',
                ),
            405 =>
                array(
                    'id' => 406,
                    'lang' => 'en',
                    'lang_key' => 'All Currencies',
                    'lang_value' => 'All Currencies',
                    'created_at' => '2023-04-05 05:16:21',
                    'updated_at' => '2023-04-05 05:16:21',
                ),
            406 =>
                array(
                    'id' => 407,
                    'lang' => 'en',
                    'lang_key' => 'Currency name',
                    'lang_value' => 'Currency name',
                    'created_at' => '2023-04-05 05:16:21',
                    'updated_at' => '2023-04-05 05:16:21',
                ),
            407 =>
                array(
                    'id' => 408,
                    'lang' => 'en',
                    'lang_key' => 'Currency symbol',
                    'lang_value' => 'Currency symbol',
                    'created_at' => '2023-04-05 05:16:21',
                    'updated_at' => '2023-04-05 05:16:21',
                ),
            408 =>
                array(
                    'id' => 409,
                    'lang' => 'en',
                    'lang_key' => 'Currency code',
                    'lang_value' => 'Currency code',
                    'created_at' => '2023-04-05 05:16:21',
                    'updated_at' => '2023-04-05 05:16:21',
                ),
            409 =>
                array(
                    'id' => 410,
                    'lang' => 'en',
                    'lang_key' => 'Exchange rate',
                    'lang_value' => 'Exchange rate',
                    'created_at' => '2023-04-05 05:16:21',
                    'updated_at' => '2023-04-05 05:16:21',
                ),
            410 =>
                array(
                    'id' => 411,
                    'lang' => 'en',
                    'lang_key' => 'SMTP Configuration',
                    'lang_value' => 'SMTP Configuration',
                    'created_at' => '2023-04-05 05:16:22',
                    'updated_at' => '2023-04-05 05:16:22',
                ),
            411 =>
                array(
                    'id' => 412,
                    'lang' => 'en',
                    'lang_key' => 'MAIL DRIVER',
                    'lang_value' => 'MAIL DRIVER',
                    'created_at' => '2023-04-05 05:16:22',
                    'updated_at' => '2023-04-05 05:16:22',
                ),
            412 =>
                array(
                    'id' => 413,
                    'lang' => 'en',
                    'lang_key' => 'Select sendmail if you do not have smtp',
                    'lang_value' => 'Select sendmail if you do not have smtp',
                    'created_at' => '2023-04-05 05:16:22',
                    'updated_at' => '2023-04-05 05:16:22',
                ),
            413 =>
                array(
                    'id' => 414,
                    'lang' => 'en',
                    'lang_key' => 'Select mail driver',
                    'lang_value' => 'Select mail driver',
                    'created_at' => '2023-04-05 05:16:22',
                    'updated_at' => '2023-04-05 05:16:22',
                ),
            414 =>
                array(
                    'id' => 415,
                    'lang' => 'en',
                    'lang_key' => 'Sendmail',
                    'lang_value' => 'Sendmail',
                    'created_at' => '2023-04-05 05:16:22',
                    'updated_at' => '2023-04-05 05:16:22',
                ),
            415 =>
                array(
                    'id' => 416,
                    'lang' => 'en',
                    'lang_key' => 'SMTP',
                    'lang_value' => 'SMTP',
                    'created_at' => '2023-04-05 05:16:22',
                    'updated_at' => '2023-04-05 05:16:22',
                ),
            416 =>
                array(
                    'id' => 417,
                    'lang' => 'en',
                    'lang_key' => 'MAIL HOST',
                    'lang_value' => 'MAIL HOST',
                    'created_at' => '2023-04-05 05:16:22',
                    'updated_at' => '2023-04-05 05:16:22',
                ),
            417 =>
                array(
                    'id' => 418,
                    'lang' => 'en',
                    'lang_key' => 'MAIL PORT',
                    'lang_value' => 'MAIL PORT',
                    'created_at' => '2023-04-05 05:16:22',
                    'updated_at' => '2023-04-05 05:16:22',
                ),
            418 =>
                array(
                    'id' => 419,
                    'lang' => 'en',
                    'lang_key' => 'MAIL USERNAME',
                    'lang_value' => 'MAIL USERNAME',
                    'created_at' => '2023-04-05 05:16:22',
                    'updated_at' => '2023-04-05 05:16:22',
                ),
            419 =>
                array(
                    'id' => 420,
                    'lang' => 'en',
                    'lang_key' => 'MAIL PASSWORD',
                    'lang_value' => 'MAIL PASSWORD',
                    'created_at' => '2023-04-05 05:16:22',
                    'updated_at' => '2023-04-05 05:16:22',
                ),
            420 =>
                array(
                    'id' => 421,
                    'lang' => 'en',
                    'lang_key' => 'MAIL FROM ADDRESS',
                    'lang_value' => 'MAIL FROM ADDRESS',
                    'created_at' => '2023-04-05 05:16:22',
                    'updated_at' => '2023-04-05 05:16:22',
                ),
            421 =>
                array(
                    'id' => 422,
                    'lang' => 'en',
                    'lang_key' => 'MAIL FROM NAME',
                    'lang_value' => 'MAIL FROM NAME',
                    'created_at' => '2023-04-05 05:16:22',
                    'updated_at' => '2023-04-05 05:16:22',
                ),
            422 =>
                array(
                    'id' => 423,
                    'lang' => 'en',
                    'lang_key' => 'Test SMTP configuration',
                    'lang_value' => 'Test SMTP configuration',
                    'created_at' => '2023-04-05 05:16:22',
                    'updated_at' => '2023-04-05 05:16:22',
                ),
            423 =>
                array(
                    'id' => 424,
                    'lang' => 'en',
                    'lang_key' => 'Enter your email address',
                    'lang_value' => 'Enter your email address',
                    'created_at' => '2023-04-05 05:16:22',
                    'updated_at' => '2023-04-05 05:16:22',
                ),
            424 =>
                array(
                    'id' => 425,
                    'lang' => 'en',
                    'lang_key' => 'Send test email',
                    'lang_value' => 'Send test email',
                    'created_at' => '2023-04-05 05:16:22',
                    'updated_at' => '2023-04-05 05:16:22',
                ),
            425 =>
                array(
                    'id' => 426,
                    'lang' => 'en',
                    'lang_key' => 'Instruction',
                    'lang_value' => 'Instruction',
                    'created_at' => '2023-04-05 05:16:22',
                    'updated_at' => '2023-04-05 05:16:22',
                ),
            426 =>
                array(
                    'id' => 427,
                    'lang' => 'en',
                    'lang_key' => 'Please be carefull when you are configuring SMTP. For incorrect configuration you will get error at the time of order place, new registration, sending newsletter.',
                    'lang_value' => 'Please be carefull when you are configuring SMTP. For incorrect configuration you will get error at the time of order place, new registration, sending newsletter.',
                    'created_at' => '2023-04-05 05:16:22',
                    'updated_at' => '2023-04-05 05:16:22',
                ),
            427 =>
                array(
                    'id' => 428,
                    'lang' => 'en',
                    'lang_key' => 'For Non-SSL',
                    'lang_value' => 'For Non-SSL',
                    'created_at' => '2023-04-05 05:16:22',
                    'updated_at' => '2023-04-05 05:16:22',
                ),
            428 =>
                array(
                    'id' => 429,
                    'lang' => 'en',
                    'lang_key' => 'Select sendmail for Mail Driver if you face any issue after configuring smtp as Mail Driver ',
                    'lang_value' => 'Select sendmail for Mail Driver if you face any issue after configuring smtp as Mail Driver ',
                    'created_at' => '2023-04-05 05:16:22',
                    'updated_at' => '2023-04-05 05:16:22',
                ),
            429 =>
                array(
                    'id' => 430,
                    'lang' => 'en',
                    'lang_key' => 'Set Mail Host according to your server Mail Client Manual Settings',
                    'lang_value' => 'Set Mail Host according to your server Mail Client Manual Settings',
                    'created_at' => '2023-04-05 05:16:22',
                    'updated_at' => '2023-04-05 05:16:22',
                ),
            430 =>
                array(
                    'id' => 431,
                    'lang' => 'en',
                    'lang_key' => 'Set Mail port as 587',
                    'lang_value' => 'Set Mail port as 587',
                    'created_at' => '2023-04-05 05:16:22',
                    'updated_at' => '2023-04-05 05:16:22',
                ),
            431 =>
                array(
                    'id' => 432,
                    'lang' => 'en',
                    'lang_key' => 'Set Mail Encryption as ssl if you face issue with tls',
                    'lang_value' => 'Set Mail Encryption as ssl if you face issue with tls',
                    'created_at' => '2023-04-05 05:16:23',
                    'updated_at' => '2023-04-05 05:16:23',
                ),
            432 =>
                array(
                    'id' => 433,
                    'lang' => 'en',
                    'lang_key' => 'For SSL',
                    'lang_value' => 'For SSL',
                    'created_at' => '2023-04-05 05:16:23',
                    'updated_at' => '2023-04-05 05:16:23',
                ),
            433 =>
                array(
                    'id' => 434,
                    'lang' => 'en',
                    'lang_key' => 'Set Mail port as 465',
                    'lang_value' => 'Set Mail port as 465',
                    'created_at' => '2023-04-05 05:16:23',
                    'updated_at' => '2023-04-05 05:16:23',
                ),
            434 =>
                array(
                    'id' => 435,
                    'lang' => 'en',
                    'lang_key' => 'Set Mail Encryption as ssl',
                    'lang_value' => 'Set Mail Encryption as ssl',
                    'created_at' => '2023-04-05 05:16:23',
                    'updated_at' => '2023-04-05 05:16:23',
                ),
            435 =>
                array(
                    'id' => 436,
                    'lang' => 'en',
                    'lang_key' => 'Paypal Configuration',
                    'lang_value' => 'Paypal Configuration',
                    'created_at' => '2023-04-05 05:16:23',
                    'updated_at' => '2023-04-05 05:16:23',
                ),
            436 =>
                array(
                    'id' => 437,
                    'lang' => 'en',
                    'lang_key' => 'PAYPAL CLIENT ID',
                    'lang_value' => 'PAYPAL CLIENT ID',
                    'created_at' => '2023-04-05 05:16:23',
                    'updated_at' => '2023-04-05 05:16:23',
                ),
            437 =>
                array(
                    'id' => 438,
                    'lang' => 'en',
                    'lang_key' => 'PAYPAL CLIENT SECRET',
                    'lang_value' => 'PAYPAL CLIENT SECRET',
                    'created_at' => '2023-04-05 05:16:24',
                    'updated_at' => '2023-04-05 05:16:24',
                ),
            438 =>
                array(
                    'id' => 439,
                    'lang' => 'en',
                    'lang_key' => 'Sandbox Activation',
                    'lang_value' => 'Sandbox Activation',
                    'created_at' => '2023-04-05 05:16:24',
                    'updated_at' => '2023-04-05 05:16:24',
                ),
            439 =>
                array(
                    'id' => 440,
                    'lang' => 'en',
                    'lang_key' => 'Stripe Configuration',
                    'lang_value' => 'Stripe Configuration',
                    'created_at' => '2023-04-05 05:16:24',
                    'updated_at' => '2023-04-05 05:16:24',
                ),
            440 =>
                array(
                    'id' => 441,
                    'lang' => 'en',
                    'lang_key' => 'STRIPE KEY',
                    'lang_value' => 'STRIPE KEY',
                    'created_at' => '2023-04-05 05:16:24',
                    'updated_at' => '2023-04-05 05:16:24',
                ),
            441 =>
                array(
                    'id' => 442,
                    'lang' => 'en',
                    'lang_key' => 'STRIPE SECRET',
                    'lang_value' => 'STRIPE SECRET',
                    'created_at' => '2023-04-05 05:16:24',
                    'updated_at' => '2023-04-05 05:16:24',
                ),
            442 =>
                array(
                    'id' => 443,
                    'lang' => 'en',
                    'lang_key' => 'SSlcommerz Configuration',
                    'lang_value' => 'SSlcommerz Configuration',
                    'created_at' => '2023-04-05 05:16:24',
                    'updated_at' => '2023-04-05 05:16:24',
                ),
            443 =>
                array(
                    'id' => 444,
                    'lang' => 'en',
                    'lang_key' => 'Sslcz Store Id',
                    'lang_value' => 'Sslcz Store Id',
                    'created_at' => '2023-04-05 05:16:24',
                    'updated_at' => '2023-04-05 05:16:24',
                ),
            444 =>
                array(
                    'id' => 445,
                    'lang' => 'en',
                    'lang_key' => 'Sslcz store password',
                    'lang_value' => 'Sslcz store password',
                    'created_at' => '2023-04-05 05:16:24',
                    'updated_at' => '2023-04-05 05:16:24',
                ),
            445 =>
                array(
                    'id' => 446,
                    'lang' => 'en',
                    'lang_key' => 'Sslcommerz Sandbox Mode',
                    'lang_value' => 'Sslcommerz Sandbox Mode',
                    'created_at' => '2023-04-05 05:16:24',
                    'updated_at' => '2023-04-05 05:16:24',
                ),
            446 =>
                array(
                    'id' => 447,
                    'lang' => 'en',
                    'lang_key' => 'Instamojo Configuration',
                    'lang_value' => 'Instamojo Configuration',
                    'created_at' => '2023-04-05 05:16:24',
                    'updated_at' => '2023-04-05 05:16:24',
                ),
            447 =>
                array(
                    'id' => 448,
                    'lang' => 'en',
                    'lang_key' => 'API Key',
                    'lang_value' => 'API Key',
                    'created_at' => '2023-04-05 05:16:24',
                    'updated_at' => '2023-04-05 05:16:24',
                ),
            448 =>
                array(
                    'id' => 449,
                    'lang' => 'en',
                    'lang_key' => 'Auth Token',
                    'lang_value' => 'Auth Token',
                    'created_at' => '2023-04-05 05:16:24',
                    'updated_at' => '2023-04-05 05:16:24',
                ),
            449 =>
                array(
                    'id' => 450,
                    'lang' => 'en',
                    'lang_key' => 'PayStack Configuration',
                    'lang_value' => 'PayStack Configuration',
                    'created_at' => '2023-04-05 05:16:24',
                    'updated_at' => '2023-04-05 05:16:24',
                ),
            450 =>
                array(
                    'id' => 451,
                    'lang' => 'en',
                    'lang_key' => 'Public Key',
                    'lang_value' => 'Public Key',
                    'created_at' => '2023-04-05 05:16:24',
                    'updated_at' => '2023-04-05 05:16:24',
                ),
            451 =>
                array(
                    'id' => 452,
                    'lang' => 'en',
                    'lang_key' => 'Secret Key',
                    'lang_value' => 'Secret Key',
                    'created_at' => '2023-04-05 05:16:24',
                    'updated_at' => '2023-04-05 05:16:24',
                ),
            452 =>
                array(
                    'id' => 453,
                    'lang' => 'en',
                    'lang_key' => 'Merchant Email',
                    'lang_value' => 'Merchant Email',
                    'created_at' => '2023-04-05 05:16:24',
                    'updated_at' => '2023-04-05 05:16:24',
                ),
            453 =>
                array(
                    'id' => 454,
                    'lang' => 'en',
                    'lang_key' => 'PayStack Currency Code',
                    'lang_value' => 'PayStack Currency Code',
                    'created_at' => '2023-04-05 05:16:24',
                    'updated_at' => '2023-04-05 05:16:24',
                ),
            454 =>
                array(
                    'id' => 455,
                    'lang' => 'en',
                    'lang_key' => 'Flutterwave Configuration',
                    'lang_value' => 'Flutterwave Configuration',
                    'created_at' => '2023-04-05 05:16:24',
                    'updated_at' => '2023-04-05 05:16:24',
                ),
            455 =>
                array(
                    'id' => 456,
                    'lang' => 'en',
                    'lang_key' => 'Secret Hash',
                    'lang_value' => 'Secret Hash',
                    'created_at' => '2023-04-05 05:16:24',
                    'updated_at' => '2023-04-05 05:16:24',
                ),
            456 =>
                array(
                    'id' => 457,
                    'lang' => 'en',
                    'lang_key' => 'Paytm Configuration',
                    'lang_value' => 'Paytm Configuration',
                    'created_at' => '2023-04-05 05:16:24',
                    'updated_at' => '2023-04-05 05:16:24',
                ),
            457 =>
                array(
                    'id' => 458,
                    'lang' => 'en',
                    'lang_key' => 'Environment',
                    'lang_value' => 'Environment',
                    'created_at' => '2023-04-05 05:16:24',
                    'updated_at' => '2023-04-05 05:16:24',
                ),
            458 =>
                array(
                    'id' => 459,
                    'lang' => 'en',
                    'lang_key' => 'Merchant ID',
                    'lang_value' => 'Merchant ID',
                    'created_at' => '2023-04-05 05:16:24',
                    'updated_at' => '2023-04-05 05:16:24',
                ),
            459 =>
                array(
                    'id' => 460,
                    'lang' => 'en',
                    'lang_key' => 'Merchant Key',
                    'lang_value' => 'Merchant Key',
                    'created_at' => '2023-04-05 05:16:24',
                    'updated_at' => '2023-04-05 05:16:24',
                ),
            460 =>
                array(
                    'id' => 461,
                    'lang' => 'en',
                    'lang_key' => 'Merchant Website',
                    'lang_value' => 'Merchant Website',
                    'created_at' => '2023-04-05 05:16:24',
                    'updated_at' => '2023-04-05 05:16:24',
                ),
            461 =>
                array(
                    'id' => 462,
                    'lang' => 'en',
                    'lang_key' => 'Paytm Channel',
                    'lang_value' => 'Paytm Channel',
                    'created_at' => '2023-04-05 05:16:24',
                    'updated_at' => '2023-04-05 05:16:24',
                ),
            462 =>
                array(
                    'id' => 463,
                    'lang' => 'en',
                    'lang_key' => 'Industry Type',
                    'lang_value' => 'Industry Type',
                    'created_at' => '2023-04-05 05:16:24',
                    'updated_at' => '2023-04-05 05:16:24',
                ),
            463 =>
                array(
                    'id' => 464,
                    'lang' => 'en',
                    'lang_key' => 'Social Media & Other 3rd Party Configuration',
                    'lang_value' => 'Social Media & Other 3rd Party Configuration',
                    'created_at' => '2023-04-05 05:16:25',
                    'updated_at' => '2023-04-05 05:16:25',
                ),
            464 =>
                array(
                    'id' => 465,
                    'lang' => 'en',
                    'lang_key' => 'Facebook Login',
                    'lang_value' => 'Facebook Login',
                    'created_at' => '2023-04-05 05:16:25',
                    'updated_at' => '2023-04-05 05:16:25',
                ),
            465 =>
                array(
                    'id' => 466,
                    'lang' => 'en',
                    'lang_key' => 'APP ID',
                    'lang_value' => 'APP ID',
                    'created_at' => '2023-04-05 05:16:25',
                    'updated_at' => '2023-04-05 05:16:25',
                ),
            466 =>
                array(
                    'id' => 467,
                    'lang' => 'en',
                    'lang_key' => 'APP SECRET',
                    'lang_value' => 'APP SECRET',
                    'created_at' => '2023-04-05 05:16:25',
                    'updated_at' => '2023-04-05 05:16:25',
                ),
            467 =>
                array(
                    'id' => 468,
                    'lang' => 'en',
                    'lang_key' => 'Google Login',
                    'lang_value' => 'Google Login',
                    'created_at' => '2023-04-05 05:16:25',
                    'updated_at' => '2023-04-05 05:16:25',
                ),
            468 =>
                array(
                    'id' => 469,
                    'lang' => 'en',
                    'lang_key' => 'GOOGLE CLIENT ID',
                    'lang_value' => 'GOOGLE CLIENT ID',
                    'created_at' => '2023-04-05 05:16:25',
                    'updated_at' => '2023-04-05 05:16:25',
                ),
            469 =>
                array(
                    'id' => 470,
                    'lang' => 'en',
                    'lang_key' => 'GOOGLE CLIENT SECRET',
                    'lang_value' => 'GOOGLE CLIENT SECRET',
                    'created_at' => '2023-04-05 05:16:25',
                    'updated_at' => '2023-04-05 05:16:25',
                ),
            470 =>
                array(
                    'id' => 471,
                    'lang' => 'en',
                    'lang_key' => 'Twitter Login',
                    'lang_value' => 'Twitter Login',
                    'created_at' => '2023-04-05 05:16:25',
                    'updated_at' => '2023-04-05 05:16:25',
                ),
            471 =>
                array(
                    'id' => 472,
                    'lang' => 'en',
                    'lang_key' => 'TWITTER CLIENT ID',
                    'lang_value' => 'TWITTER CLIENT ID',
                    'created_at' => '2023-04-05 05:16:25',
                    'updated_at' => '2023-04-05 05:16:25',
                ),
            472 =>
                array(
                    'id' => 473,
                    'lang' => 'en',
                    'lang_key' => 'TWITTER CLIENT SECRET',
                    'lang_value' => 'TWITTER CLIENT SECRET',
                    'created_at' => '2023-04-05 05:16:25',
                    'updated_at' => '2023-04-05 05:16:25',
                ),
            473 =>
                array(
                    'id' => 474,
                    'lang' => 'en',
                    'lang_key' => 'LinkedIn Login',
                    'lang_value' => 'LinkedIn Login',
                    'created_at' => '2023-04-05 05:16:25',
                    'updated_at' => '2023-04-05 05:16:25',
                ),
            474 =>
                array(
                    'id' => 475,
                    'lang' => 'en',
                    'lang_key' => 'Minimum Amount For Withdraw Request',
                    'lang_value' => 'Minimum Amount For Withdraw Request',
                    'created_at' => '2023-04-05 05:16:25',
                    'updated_at' => '2023-04-05 05:16:25',
                ),
            475 =>
                array(
                    'id' => 476,
                    'lang' => 'en',
                    'lang_key' => 'LINKEDIN CLIENT ID',
                    'lang_value' => 'LINKEDIN CLIENT ID',
                    'created_at' => '2023-04-05 05:16:25',
                    'updated_at' => '2023-04-05 05:16:25',
                ),
            476 =>
                array(
                    'id' => 477,
                    'lang' => 'en',
                    'lang_key' => 'Minimum Amount',
                    'lang_value' => 'Minimum Amount',
                    'created_at' => '2023-04-05 05:16:25',
                    'updated_at' => '2023-04-05 05:16:25',
                ),
            477 =>
                array(
                    'id' => 478,
                    'lang' => 'en',
                    'lang_key' => 'LINKEDIN CLIENT SECRET',
                    'lang_value' => 'LINKEDIN CLIENT SECRET',
                    'created_at' => '2023-04-05 05:16:25',
                    'updated_at' => '2023-04-05 05:16:25',
                ),
            478 =>
                array(
                    'id' => 479,
                    'lang' => 'en',
                    'lang_key' => 'Freelancer need to have minimum this amount of balance in his account to make a withdrawal request.',
                    'lang_value' => 'Consultant need to have minimum this amount of balance in his account to make a withdrawal request.',
                    'created_at' => '2023-04-05 05:16:25',
                    'updated_at' => '2023-04-05 05:38:40',
                ),
            479 =>
                array(
                    'id' => 480,
                    'lang' => 'en',
                    'lang_key' => 'Google Analytics',
                    'lang_value' => 'Google Analytics',
                    'created_at' => '2023-04-05 05:16:25',
                    'updated_at' => '2023-04-05 05:16:25',
                ),
            480 =>
                array(
                    'id' => 481,
                    'lang' => 'en',
                    'lang_key' => 'TRACKING ID',
                    'lang_value' => 'TRACKING ID',
                    'created_at' => '2023-04-05 05:16:25',
                    'updated_at' => '2023-04-05 05:16:25',
                ),
            481 =>
                array(
                    'id' => 482,
                    'lang' => 'en',
                    'lang_key' => 'Google reCAPTCHA',
                    'lang_value' => 'Google reCAPTCHA',
                    'created_at' => '2023-04-05 05:16:25',
                    'updated_at' => '2023-04-05 05:16:25',
                ),
            482 =>
                array(
                    'id' => 483,
                    'lang' => 'en',
                    'lang_key' => 'Site KEY',
                    'lang_value' => 'Site KEY',
                    'created_at' => '2023-04-05 05:16:25',
                    'updated_at' => '2023-04-05 05:16:25',
                ),
            483 =>
                array(
                    'id' => 484,
                    'lang' => 'en',
                    'lang_key' => 'Facebook Chat',
                    'lang_value' => 'Facebook Chat',
                    'created_at' => '2023-04-05 05:16:25',
                    'updated_at' => '2023-04-05 05:16:25',
                ),
            484 =>
                array(
                    'id' => 485,
                    'lang' => 'en',
                    'lang_key' => 'Facebook Chat Setting',
                    'lang_value' => 'Facebook Chat Setting',
                    'created_at' => '2023-04-05 05:16:25',
                    'updated_at' => '2023-04-05 05:16:25',
                ),
            485 =>
                array(
                    'id' => 486,
                    'lang' => 'en',
                    'lang_key' => 'FACEBOOK PAGE ID',
                    'lang_value' => 'FACEBOOK PAGE ID',
                    'created_at' => '2023-04-05 05:16:25',
                    'updated_at' => '2023-04-05 05:16:25',
                ),
            486 =>
                array(
                    'id' => 487,
                    'lang' => 'en',
                    'lang_key' => 'Please be carefull when you are configuring Facebook chat. For incorrect configuration you will not get messenger icon on your user-end site.',
                    'lang_value' => 'Please be carefull when you are configuring Facebook chat. For incorrect configuration you will not get messenger icon on your user-end site.',
                    'created_at' => '2023-04-05 05:16:25',
                    'updated_at' => '2023-04-05 05:16:25',
                ),
            487 =>
                array(
                    'id' => 488,
                    'lang' => 'en',
                    'lang_key' => 'Login into your facebook page',
                    'lang_value' => 'Login into your facebook page',
                    'created_at' => '2023-04-05 05:16:25',
                    'updated_at' => '2023-04-05 05:16:25',
                ),
            488 =>
                array(
                    'id' => 489,
                    'lang' => 'en',
                    'lang_key' => 'Find the About option of your facebook page',
                    'lang_value' => 'Find the About option of your facebook page',
                    'created_at' => '2023-04-05 05:16:25',
                    'updated_at' => '2023-04-05 05:16:25',
                ),
            489 =>
                array(
                    'id' => 490,
                    'lang' => 'en',
                    'lang_key' => 'At the very bottom, you can find the \\“Facebook Page ID\\”',
                    'lang_value' => 'At the very bottom, you can find the \\“Facebook Page ID\\”',
                    'created_at' => '2023-04-05 05:16:25',
                    'updated_at' => '2023-04-05 05:16:25',
                ),
            490 =>
                array(
                    'id' => 491,
                    'lang' => 'en',
                    'lang_key' => 'Go to Settings of your page and find the option of \\"Advance Messaging\\"',
                    'lang_value' => 'Go to Settings of your page and find the option of \\"Advance Messaging\\"',
                    'created_at' => '2023-04-05 05:16:25',
                    'updated_at' => '2023-04-05 05:16:25',
                ),
            491 =>
                array(
                    'id' => 492,
                    'lang' => 'en',
                    'lang_key' => 'Scroll down that page and you will get \\"white listed domain\\"',
                    'lang_value' => 'Scroll down that page and you will get \\"white listed domain\\"',
                    'created_at' => '2023-04-05 05:16:25',
                    'updated_at' => '2023-04-05 05:16:25',
                ),
            492 =>
                array(
                    'id' => 493,
                    'lang' => 'en',
                    'lang_key' => 'Set your website domain name',
                    'lang_value' => 'Set your website domain name',
                    'created_at' => '2023-04-05 05:16:25',
                    'updated_at' => '2023-04-05 05:16:25',
                ),
            493 =>
                array(
                    'id' => 494,
                    'lang' => 'en',
                    'lang_key' => 'Facebook Pixel',
                    'lang_value' => 'Facebook Pixel',
                    'created_at' => '2023-04-05 05:16:25',
                    'updated_at' => '2023-04-05 05:16:25',
                ),
            494 =>
                array(
                    'id' => 495,
                    'lang' => 'en',
                    'lang_key' => 'Facebook Pixel Setting',
                    'lang_value' => 'Facebook Pixel Setting',
                    'created_at' => '2023-04-05 05:16:25',
                    'updated_at' => '2023-04-05 05:16:25',
                ),
            495 =>
                array(
                    'id' => 496,
                    'lang' => 'en',
                    'lang_key' => 'Pixel ID',
                    'lang_value' => 'Pixel ID',
                    'created_at' => '2023-04-05 05:16:25',
                    'updated_at' => '2023-04-05 05:16:25',
                ),
            496 =>
                array(
                    'id' => 497,
                    'lang' => 'en',
                    'lang_key' => 'Please be carefull when you are configuring Facebook pixel.',
                    'lang_value' => 'Please be carefull when you are configuring Facebook pixel.',
                    'created_at' => '2023-04-05 05:16:25',
                    'updated_at' => '2023-04-05 05:16:25',
                ),
            497 =>
                array(
                    'id' => 498,
                    'lang' => 'en',
                    'lang_key' => 'Log in to Facebook and go to your Ads Manager account',
                    'lang_value' => 'Log in to Facebook and go to your Ads Manager account',
                    'created_at' => '2023-04-05 05:16:25',
                    'updated_at' => '2023-04-05 05:16:25',
                ),
            498 =>
                array(
                    'id' => 499,
                    'lang' => 'en',
                    'lang_key' => 'Open the Navigation Bar and select Events Manager',
                    'lang_value' => 'Open the Navigation Bar and select Events Manager',
                    'created_at' => '2023-04-05 05:16:25',
                    'updated_at' => '2023-04-05 05:16:25',
                ),
            499 =>
                array(
                    'id' => 500,
                    'lang' => 'en',
                    'lang_key' => 'Copy your Pixel ID from underneath your Site Name and paste the number into Facebook Pixel ID field',
                    'lang_value' => 'Copy your Pixel ID from underneath your Site Name and paste the number into Facebook Pixel ID field',
                    'created_at' => '2023-04-05 05:16:25',
                    'updated_at' => '2023-04-05 05:16:25',
                ),
        ));
        DB::table('translations')->insert(array(
            0 =>
                array(
                    'id' => 501,
                    'lang' => 'en',
                    'lang_key' => 'Facebook Comment',
                    'lang_value' => 'Facebook Comment',
                    'created_at' => '2023-04-05 05:16:25',
                    'updated_at' => '2023-04-05 05:16:25',
                ),
            1 =>
                array(
                    'id' => 502,
                    'lang' => 'en',
                    'lang_key' => 'Facebook Comment Setting',
                    'lang_value' => 'Facebook Comment Setting',
                    'created_at' => '2023-04-05 05:16:25',
                    'updated_at' => '2023-04-05 05:16:25',
                ),
            2 =>
                array(
                    'id' => 503,
                    'lang' => 'en',
                    'lang_key' => 'Facebook App ID',
                    'lang_value' => 'Facebook App ID',
                    'created_at' => '2023-04-05 05:16:25',
                    'updated_at' => '2023-04-05 05:16:25',
                ),
            3 =>
                array(
                    'id' => 504,
                    'lang' => 'en',
                    'lang_key' => 'Please be carefull when you are configuring Facebook Comment. For incorrect configuration you will not get comment section on your user-end site.',
                    'lang_value' => 'Please be carefull when you are configuring Facebook Comment. For incorrect configuration you will not get comment section on your user-end site.',
                    'created_at' => '2023-04-05 05:16:25',
                    'updated_at' => '2023-04-05 05:16:25',
                ),
            4 =>
                array(
                    'id' => 505,
                    'lang' => 'en',
                    'lang_key' => 'After then go to this URL https://developers.facebook.com/apps/',
                    'lang_value' => 'After then go to this URL https://developers.facebook.com/apps/',
                    'created_at' => '2023-04-05 05:16:25',
                    'updated_at' => '2023-04-05 05:16:25',
                ),
            5 =>
                array(
                    'id' => 506,
                    'lang' => 'en',
                    'lang_key' => 'Create Your App',
                    'lang_value' => 'Create Your App',
                    'created_at' => '2023-04-05 05:16:25',
                    'updated_at' => '2023-04-05 05:16:25',
                ),
            6 =>
                array(
                    'id' => 507,
                    'lang' => 'en',
                    'lang_key' => 'In Dashboard page you will get your App ID',
                    'lang_value' => 'In Dashboard page you will get your App ID',
                    'created_at' => '2023-04-05 05:16:25',
                    'updated_at' => '2023-04-05 05:16:25',
                ),
            7 =>
                array(
                    'id' => 508,
                    'lang' => 'en',
                    'lang_key' => 'Project Cancellation Percentage',
                    'lang_value' => 'Project Cancellation Percentage',
                    'created_at' => '2023-04-05 05:16:26',
                    'updated_at' => '2023-04-05 05:16:26',
                ),
            8 =>
                array(
                    'id' => 509,
                    'lang' => 'en',
                    'lang_key' => 'On project cancelation, this amount will be refunded to the client and deducted from the freelancer balance.',
                    'lang_value' => 'On project cancelation, this amount will be refunded to the client and deducted from the consultant balance.',
                    'created_at' => '2023-04-05 05:16:26',
                    'updated_at' => '2023-04-05 05:38:40',
                ),
            9 =>
                array(
                    'id' => 510,
                    'lang' => 'en',
                    'lang_key' => 'Service Cancellation Percentage',
                    'lang_value' => 'Service Cancellation Percentage',
                    'created_at' => '2023-04-05 05:16:26',
                    'updated_at' => '2023-04-05 05:16:26',
                ),
            10 =>
                array(
                    'id' => 511,
                    'lang' => 'en',
                    'lang_key' => 'On service cancelation, this amount will be refunded to the client and deducted from the freelancer balance.',
                    'lang_value' => 'On service cancelation, this amount will be refunded to the client and deducted from the consultant balance.',
                    'created_at' => '2023-04-05 05:16:26',
                    'updated_at' => '2023-04-05 05:38:40',
                ),
            11 =>
                array(
                    'id' => 512,
                    'lang' => 'en',
                    'lang_key' => 'Edit Language Info',
                    'lang_value' => 'Edit Language Info',
                    'created_at' => '2023-04-05 05:35:01',
                    'updated_at' => '2023-04-05 05:35:01',
                ),
            12 =>
                array(
                    'id' => 513,
                    'lang' => 'en',
                    'lang_key' => 'Update Language Info',
                    'lang_value' => 'Update Language Info',
                    'created_at' => '2023-04-05 05:35:02',
                    'updated_at' => '2023-04-05 05:35:02',
                ),
            13 =>
                array(
                    'id' => 514,
                    'lang' => 'en',
                    'lang_key' => 'Type key & Enter',
                    'lang_value' => 'Type key & Enter',
                    'created_at' => '2023-04-05 05:35:15',
                    'updated_at' => '2023-04-05 05:35:15',
                ),
            14 =>
                array(
                    'id' => 515,
                    'lang' => 'en',
                    'lang_key' => 'Key',
                    'lang_value' => 'Key',
                    'created_at' => '2023-04-05 05:35:15',
                    'updated_at' => '2023-04-05 05:35:15',
                ),
            15 =>
                array(
                    'id' => 516,
                    'lang' => 'en',
                    'lang_key' => 'Value',
                    'lang_value' => 'Value',
                    'created_at' => '2023-04-05 05:35:15',
                    'updated_at' => '2023-04-05 05:35:15',
                ),
            16 =>
                array(
                    'id' => 517,
                    'lang' => 'en',
                    'lang_key' => 'Copy Translations',
                    'lang_value' => 'Copy Translations',
                    'created_at' => '2023-04-05 05:35:15',
                    'updated_at' => '2023-04-05 05:35:15',
                ),
            17 =>
                array(
                    'id' => 518,
                    'lang' => 'en',
                    'lang_key' => 'Translations updated for ',
                    'lang_value' => 'Translations updated for ',
                    'created_at' => '2023-04-05 05:38:40',
                    'updated_at' => '2023-04-05 05:38:40',
                ),
            18 =>
                array(
                    'id' => 519,
                    'lang' => 'en',
                    'lang_key' => 'Edit Currency',
                    'lang_value' => 'Edit Currency',
                    'created_at' => '2023-04-05 05:47:22',
                    'updated_at' => '2023-04-05 05:47:22',
                ),
            19 =>
                array(
                    'id' => 520,
                    'lang' => 'en',
                    'lang_key' => 'Update Currency',
                    'lang_value' => 'Update Currency',
                    'created_at' => '2023-04-05 05:47:22',
                    'updated_at' => '2023-04-05 05:47:22',
                ),
            20 =>
                array(
                    'id' => 521,
                    'lang' => 'en',
                    'lang_key' => 'Currency has been updated successfully',
                    'lang_value' => 'Currency has been updated successfully',
                    'created_at' => '2023-04-05 05:47:34',
                    'updated_at' => '2023-04-05 05:47:34',
                ),
            21 =>
                array(
                    'id' => 522,
                    'lang' => 'en',
                    'lang_key' => 'Running Projects',
                    'lang_value' => 'Running Projects',
                    'created_at' => '2023-04-05 06:26:22',
                    'updated_at' => '2023-04-05 06:26:22',
                ),
            22 =>
                array(
                    'id' => 523,
                    'lang' => 'en',
                    'lang_key' => 'Hired at',
                    'lang_value' => 'Hired at',
                    'created_at' => '2023-04-05 06:26:22',
                    'updated_at' => '2023-04-05 06:26:22',
                ),
            23 =>
                array(
                    'id' => 524,
                    'lang' => 'en',
                    'lang_key' => 'Open Projects',
                    'lang_value' => 'Open Projects',
                    'created_at' => '2023-04-05 06:26:24',
                    'updated_at' => '2023-04-05 06:26:24',
                ),
            24 =>
                array(
                    'id' => 525,
                    'lang' => 'en',
                    'lang_key' => 'Sort by options',
                    'lang_value' => 'Sort by options',
                    'created_at' => '2023-04-05 06:26:24',
                    'updated_at' => '2023-04-05 06:26:24',
                ),
            25 =>
                array(
                    'id' => 526,
                    'lang' => 'en',
                    'lang_key' => 'Sort by Time (Old > New)',
                    'lang_value' => 'Sort by Time (Old > New)',
                    'created_at' => '2023-04-05 06:26:24',
                    'updated_at' => '2023-04-05 06:26:24',
                ),
            26 =>
                array(
                    'id' => 527,
                    'lang' => 'en',
                    'lang_key' => 'Sort by Time (New > Old)',
                    'lang_value' => 'Sort by Time (New > Old)',
                    'created_at' => '2023-04-05 06:26:24',
                    'updated_at' => '2023-04-05 06:26:24',
                ),
            27 =>
                array(
                    'id' => 528,
                    'lang' => 'en',
                    'lang_key' => 'Sort by Price (High > Low)',
                    'lang_value' => 'Sort by Price (High > Low)',
                    'created_at' => '2023-04-05 06:26:24',
                    'updated_at' => '2023-04-05 06:26:24',
                ),
            28 =>
                array(
                    'id' => 529,
                    'lang' => 'en',
                    'lang_key' => 'Sort by Price (Low > High)',
                    'lang_value' => 'Sort by Price (Low > High)',
                    'created_at' => '2023-04-05 06:26:24',
                    'updated_at' => '2023-04-05 06:26:24',
                ),
            29 =>
                array(
                    'id' => 530,
                    'lang' => 'en',
                    'lang_key' => 'Client Name',
                    'lang_value' => 'Client Name',
                    'created_at' => '2023-04-05 06:26:24',
                    'updated_at' => '2023-04-05 06:26:24',
                ),
            30 =>
                array(
                    'id' => 531,
                    'lang' => 'en',
                    'lang_key' => 'Cancellation Request Projects',
                    'lang_value' => 'Cancellation Request Projects',
                    'created_at' => '2023-04-05 06:26:28',
                    'updated_at' => '2023-04-05 06:26:28',
                ),
            31 =>
                array(
                    'id' => 532,
                    'lang' => 'en',
                    'lang_key' => 'Project',
                    'lang_value' => 'Project',
                    'created_at' => '2023-04-05 06:26:28',
                    'updated_at' => '2023-04-05 06:26:28',
                ),
            32 =>
                array(
                    'id' => 533,
                    'lang' => 'en',
                    'lang_key' => 'Request Sent By',
                    'lang_value' => 'Request Sent By',
                    'created_at' => '2023-04-05 06:26:28',
                    'updated_at' => '2023-04-05 06:26:28',
                ),
            33 =>
                array(
                    'id' => 534,
                    'lang' => 'en',
                    'lang_key' => 'ID',
                    'lang_value' => 'ID',
                    'created_at' => '2023-04-05 06:26:29',
                    'updated_at' => '2023-04-05 06:26:29',
                ),
            34 =>
                array(
                    'id' => 535,
                    'lang' => 'en',
                    'lang_key' => 'Parent',
                    'lang_value' => 'Parent',
                    'created_at' => '2023-04-05 06:26:29',
                    'updated_at' => '2023-04-05 06:26:29',
                ),
            35 =>
                array(
                    'id' => 536,
                    'lang' => 'en',
                    'lang_key' => 'Icon',
                    'lang_value' => 'Icon',
                    'created_at' => '2023-04-05 06:26:29',
                    'updated_at' => '2023-04-05 06:26:29',
                ),
            36 =>
                array(
                    'id' => 537,
                    'lang' => 'en',
                    'lang_key' => 'Action',
                    'lang_value' => 'Action',
                    'created_at' => '2023-04-05 06:26:29',
                    'updated_at' => '2023-04-05 06:26:29',
                ),
            37 =>
                array(
                    'id' => 538,
                    'lang' => 'en',
                    'lang_key' => 'No Parent',
                    'lang_value' => 'No Parent',
                    'created_at' => '2023-04-05 06:26:29',
                    'updated_at' => '2023-04-05 06:26:29',
                ),
            38 =>
                array(
                    'id' => 539,
                    'lang' => 'en',
                    'lang_key' => 'Add New Category',
                    'lang_value' => 'Add New Category',
                    'created_at' => '2023-04-05 06:26:29',
                    'updated_at' => '2023-04-05 06:26:29',
                ),
            39 =>
                array(
                    'id' => 540,
                    'lang' => 'en',
                    'lang_key' => 'Category Name',
                    'lang_value' => 'Category Name',
                    'created_at' => '2023-04-05 06:26:29',
                    'updated_at' => '2023-04-05 06:26:29',
                ),
            40 =>
                array(
                    'id' => 541,
                    'lang' => 'en',
                    'lang_key' => 'file recommended',
                    'lang_value' => 'file recommended',
                    'created_at' => '2023-04-05 06:26:29',
                    'updated_at' => '2023-04-05 06:26:29',
                ),
            41 =>
                array(
                    'id' => 542,
                    'lang' => 'en',
                    'lang_key' => 'Save New Category',
                    'lang_value' => 'Save New Category',
                    'created_at' => '2023-04-05 06:26:29',
                    'updated_at' => '2023-04-05 06:26:29',
                ),
            42 =>
                array(
                    'id' => 543,
                    'lang' => 'en',
                    'lang_key' => 'Title is required.',
                    'lang_value' => 'Title is required.',
                    'created_at' => '2023-04-05 06:26:33',
                    'updated_at' => '2023-04-05 06:26:33',
                ),
            43 =>
                array(
                    'id' => 544,
                    'lang' => 'en',
                    'lang_key' => 'Category is required.',
                    'lang_value' => 'Category is required.',
                    'created_at' => '2023-04-05 06:26:33',
                    'updated_at' => '2023-04-05 06:26:33',
                ),
            44 =>
                array(
                    'id' => 545,
                    'lang' => 'en',
                    'lang_key' => 'Basic Price is required.',
                    'lang_value' => 'Basic Price is required.',
                    'created_at' => '2023-04-05 06:26:33',
                    'updated_at' => '2023-04-05 06:26:33',
                ),
            45 =>
                array(
                    'id' => 546,
                    'lang' => 'en',
                    'lang_key' => 'Standard Price should be a number.',
                    'lang_value' => 'Standard Price should be a number.',
                    'created_at' => '2023-04-05 06:26:33',
                    'updated_at' => '2023-04-05 06:26:33',
                ),
            46 =>
                array(
                    'id' => 547,
                    'lang' => 'en',
                    'lang_key' => 'Basic price should be a number.',
                    'lang_value' => 'Basic price should be a number.',
                    'created_at' => '2023-04-05 06:26:33',
                    'updated_at' => '2023-04-05 06:26:33',
                ),
            47 =>
                array(
                    'id' => 548,
                    'lang' => 'en',
                    'lang_key' => 'Premium price should be a number.',
                    'lang_value' => 'Premium price should be a number.',
                    'created_at' => '2023-04-05 06:26:33',
                    'updated_at' => '2023-04-05 06:26:33',
                ),
            48 =>
                array(
                    'id' => 549,
                    'lang' => 'en',
                    'lang_key' => 'Basic delivery time limit field is requried.',
                    'lang_value' => 'Basic delivery time limit field is requried.',
                    'created_at' => '2023-04-05 06:26:33',
                    'updated_at' => '2023-04-05 06:26:33',
                ),
            49 =>
                array(
                    'id' => 550,
                    'lang' => 'en',
                    'lang_key' => 'Basic Revision limit is required.',
                    'lang_value' => 'Basic Revision limit is required.',
                    'created_at' => '2023-04-05 06:26:33',
                    'updated_at' => '2023-04-05 06:26:33',
                ),
            50 =>
                array(
                    'id' => 551,
                    'lang' => 'en',
                    'lang_key' => 'Search by project name',
                    'lang_value' => 'Search by project name',
                    'created_at' => '2023-04-05 06:26:33',
                    'updated_at' => '2023-04-05 06:26:33',
                ),
            51 =>
                array(
                    'id' => 552,
                    'lang' => 'en',
                    'lang_key' => 'Service Title',
                    'lang_value' => 'Service Title',
                    'created_at' => '2023-04-05 06:26:33',
                    'updated_at' => '2023-04-05 06:26:33',
                ),
            52 =>
                array(
                    'id' => 553,
                    'lang' => 'en',
                    'lang_key' => 'Service Owner',
                    'lang_value' => 'Service Owner',
                    'created_at' => '2023-04-05 06:26:33',
                    'updated_at' => '2023-04-05 06:26:33',
                ),
            53 =>
                array(
                    'id' => 554,
                    'lang' => 'en',
                    'lang_key' => 'Starts At',
                    'lang_value' => 'Starts At',
                    'created_at' => '2023-04-05 06:26:33',
                    'updated_at' => '2023-04-05 06:26:33',
                ),
            54 =>
                array(
                    'id' => 555,
                    'lang' => 'en',
                    'lang_key' => 'Service Created At',
                    'lang_value' => 'Service Created At',
                    'created_at' => '2023-04-05 06:26:33',
                    'updated_at' => '2023-04-05 06:26:33',
                ),
            55 =>
                array(
                    'id' => 556,
                    'lang' => 'en',
                    'lang_key' => 'Service',
                    'lang_value' => 'Service',
                    'created_at' => '2023-04-05 06:26:34',
                    'updated_at' => '2023-04-05 06:26:34',
                ),
            56 =>
                array(
                    'id' => 557,
                    'lang' => 'en',
                    'lang_key' => 'Service Type',
                    'lang_value' => 'Service Type',
                    'created_at' => '2023-04-05 06:26:34',
                    'updated_at' => '2023-04-05 06:26:34',
                ),
            57 =>
                array(
                    'id' => 558,
                    'lang' => 'en',
                    'lang_key' => 'My Earnings',
                    'lang_value' => 'My Earnings',
                    'created_at' => '2023-04-05 06:26:34',
                    'updated_at' => '2023-04-05 06:26:34',
                ),
            58 =>
                array(
                    'id' => 559,
                    'lang' => 'en',
                    'lang_key' => 'Freelancer Earnings',
                    'lang_value' => 'Consultant Earnings',
                    'created_at' => '2023-04-05 06:26:34',
                    'updated_at' => '2023-04-05 09:31:14',
                ),
            59 =>
                array(
                    'id' => 560,
                    'lang' => 'en',
                    'lang_key' => 'Refund Amount',
                    'lang_value' => 'Refund Amount',
                    'created_at' => '2023-04-05 06:26:34',
                    'updated_at' => '2023-04-05 06:26:34',
                ),
            60 =>
                array(
                    'id' => 561,
                    'lang' => 'en',
                    'lang_key' => 'Payment Method',
                    'lang_value' => 'Payment Method',
                    'created_at' => '2023-04-05 06:26:34',
                    'updated_at' => '2023-04-05 06:26:34',
                ),
            61 =>
                array(
                    'id' => 562,
                    'lang' => 'en',
                    'lang_key' => 'Date',
                    'lang_value' => 'Date',
                    'created_at' => '2023-04-05 06:26:34',
                    'updated_at' => '2023-04-05 06:26:34',
                ),
            62 =>
                array(
                    'id' => 563,
                    'lang' => 'en',
                    'lang_key' => 'Cancel Confirmation',
                    'lang_value' => 'Cancel Confirmation',
                    'created_at' => '2023-04-05 06:26:34',
                    'updated_at' => '2023-04-05 06:26:34',
                ),
            63 =>
                array(
                    'id' => 564,
                    'lang' => 'en',
                    'lang_key' => 'Are you sure to cancel this?',
                    'lang_value' => 'Are you sure to cancel this?',
                    'created_at' => '2023-04-05 06:26:34',
                    'updated_at' => '2023-04-05 06:26:34',
                ),
            64 =>
                array(
                    'id' => 565,
                    'lang' => 'en',
                    'lang_key' => 'Service Cancelled Requests',
                    'lang_value' => 'Service Cancelled Requests',
                    'created_at' => '2023-04-05 06:26:35',
                    'updated_at' => '2023-04-05 06:26:35',
                ),
            65 =>
                array(
                    'id' => 566,
                    'lang' => 'en',
                    'lang_key' => 'Option',
                    'lang_value' => 'Option',
                    'created_at' => '2023-04-05 06:26:35',
                    'updated_at' => '2023-04-05 06:26:35',
                ),
            66 =>
                array(
                    'id' => 567,
                    'lang' => 'en',
                    'lang_key' => 'Chat Lists',
                    'lang_value' => 'Chat Lists',
                    'created_at' => '2023-04-05 06:26:39',
                    'updated_at' => '2023-04-05 06:26:39',
                ),
            67 =>
                array(
                    'id' => 568,
                    'lang' => 'en',
                    'lang_key' => 'Chat Status',
                    'lang_value' => 'Chat Status',
                    'created_at' => '2023-04-05 06:26:39',
                    'updated_at' => '2023-04-05 06:26:39',
                ),
            68 =>
                array(
                    'id' => 569,
                    'lang' => 'en',
                    'lang_key' => 'Blocked by',
                    'lang_value' => 'Blocked by',
                    'created_at' => '2023-04-05 06:26:39',
                    'updated_at' => '2023-04-05 06:26:39',
                ),
            69 =>
                array(
                    'id' => 570,
                    'lang' => 'en',
                    'lang_key' => 'Chat Started',
                    'lang_value' => 'Chat Started',
                    'created_at' => '2023-04-05 06:26:39',
                    'updated_at' => '2023-04-05 06:26:39',
                ),
            70 =>
                array(
                    'id' => 571,
                    'lang' => 'en',
                    'lang_key' => 'Freelnacer Packages',
                    'lang_value' => 'Consultant Packages',
                    'created_at' => '2023-04-05 06:26:42',
                    'updated_at' => '2023-04-05 06:39:10',
                ),
            71 =>
                array(
                    'id' => 572,
                    'lang' => 'en',
                    'lang_key' => 'Create New Package',
                    'lang_value' => 'Create New Package',
                    'created_at' => '2023-04-05 06:26:42',
                    'updated_at' => '2023-04-05 06:26:42',
                ),
            72 =>
                array(
                    'id' => 573,
                    'lang' => 'en',
                    'lang_key' => 'All Packages',
                    'lang_value' => 'All Packages',
                    'created_at' => '2023-04-05 06:26:42',
                    'updated_at' => '2023-04-05 06:26:42',
                ),
            73 =>
                array(
                    'id' => 574,
                    'lang' => 'en',
                    'lang_key' => 'Total sale',
                    'lang_value' => 'Total sale',
                    'created_at' => '2023-04-05 06:26:42',
                    'updated_at' => '2023-04-05 06:26:42',
                ),
            74 =>
                array(
                    'id' => 575,
                    'lang' => 'en',
                    'lang_key' => 'Badge',
                    'lang_value' => 'Badge',
                    'created_at' => '2023-04-05 06:26:42',
                    'updated_at' => '2023-04-05 06:26:42',
                ),
            75 =>
                array(
                    'id' => 576,
                    'lang' => 'en',
                    'lang_key' => 'Commision',
                    'lang_value' => 'Commision',
                    'created_at' => '2023-04-05 06:26:42',
                    'updated_at' => '2023-04-05 06:26:42',
                ),
            76 =>
                array(
                    'id' => 577,
                    'lang' => 'en',
                    'lang_key' => 'Skill list',
                    'lang_value' => 'Skill list',
                    'created_at' => '2023-04-05 06:26:43',
                    'updated_at' => '2023-04-05 06:26:43',
                ),
            77 =>
                array(
                    'id' => 578,
                    'lang' => 'en',
                    'lang_key' => 'Skill',
                    'lang_value' => 'Skill',
                    'created_at' => '2023-04-05 06:26:43',
                    'updated_at' => '2023-04-05 06:26:43',
                ),
            78 =>
                array(
                    'id' => 579,
                    'lang' => 'en',
                    'lang_key' => ' Add New Skill',
                    'lang_value' => ' Add New Skill',
                    'created_at' => '2023-04-05 06:26:43',
                    'updated_at' => '2023-04-05 06:26:43',
                ),
            79 =>
                array(
                    'id' => 580,
                    'lang' => 'en',
                    'lang_key' => 'Eg. wordpress',
                    'lang_value' => 'Eg. wordpress',
                    'created_at' => '2023-04-05 06:26:43',
                    'updated_at' => '2023-04-05 06:26:43',
                ),
            80 =>
                array(
                    'id' => 581,
                    'lang' => 'en',
                    'lang_key' => 'Add New Skill',
                    'lang_value' => 'Add New Skill',
                    'created_at' => '2023-04-05 06:26:43',
                    'updated_at' => '2023-04-05 06:26:43',
                ),
            81 =>
                array(
                    'id' => 582,
                    'lang' => 'en',
                    'lang_key' => 'Badges list',
                    'lang_value' => 'Badges list',
                    'created_at' => '2023-04-05 06:26:44',
                    'updated_at' => '2023-04-05 06:26:44',
                ),
            82 =>
                array(
                    'id' => 583,
                    'lang' => 'en',
                    'lang_key' => 'Min number',
                    'lang_value' => 'Min number',
                    'created_at' => '2023-04-05 06:26:44',
                    'updated_at' => '2023-04-05 06:26:44',
                ),
            83 =>
                array(
                    'id' => 584,
                    'lang' => 'en',
                    'lang_key' => 'Add New Badge',
                    'lang_value' => 'Add New Badge',
                    'created_at' => '2023-04-05 06:26:44',
                    'updated_at' => '2023-04-05 06:26:44',
                ),
            84 =>
                array(
                    'id' => 585,
                    'lang' => 'en',
                    'lang_key' => 'Eg. Completed 100+ projects',
                    'lang_value' => 'Eg. Completed 100+ projects',
                    'created_at' => '2023-04-05 06:26:44',
                    'updated_at' => '2023-04-05 06:26:44',
                ),
            85 =>
                array(
                    'id' => 586,
                    'lang' => 'en',
                    'lang_key' => 'Badge Type',
                    'lang_value' => 'Badge Type',
                    'created_at' => '2023-04-05 06:26:44',
                    'updated_at' => '2023-04-05 06:26:44',
                ),
            86 =>
                array(
                    'id' => 587,
                    'lang' => 'en',
                    'lang_key' => 'Project Badge',
                    'lang_value' => 'Project Badge',
                    'created_at' => '2023-04-05 06:26:44',
                    'updated_at' => '2023-04-05 06:26:44',
                ),
            87 =>
                array(
                    'id' => 588,
                    'lang' => 'en',
                    'lang_key' => 'Earning Badge',
                    'lang_value' => 'Earning Badge',
                    'created_at' => '2023-04-05 06:26:44',
                    'updated_at' => '2023-04-05 06:26:44',
                ),
            88 =>
                array(
                    'id' => 589,
                    'lang' => 'en',
                    'lang_key' => 'Membership Badge',
                    'lang_value' => 'Membership Badge',
                    'created_at' => '2023-04-05 06:26:44',
                    'updated_at' => '2023-04-05 06:26:44',
                ),
            89 =>
                array(
                    'id' => 590,
                    'lang' => 'en',
                    'lang_key' => 'Min number of ',
                    'lang_value' => 'Min number of ',
                    'created_at' => '2023-04-05 06:26:44',
                    'updated_at' => '2023-04-05 06:26:44',
                ),
            90 =>
                array(
                    'id' => 591,
                    'lang' => 'en',
                    'lang_key' => 'earnings',
                    'lang_value' => 'earnings',
                    'created_at' => '2023-04-05 06:26:44',
                    'updated_at' => '2023-04-05 06:26:44',
                ),
            91 =>
                array(
                    'id' => 592,
                    'lang' => 'en',
                    'lang_key' => 'account age - in days',
                    'lang_value' => 'account age - in days',
                    'created_at' => '2023-04-05 06:26:44',
                    'updated_at' => '2023-04-05 06:26:44',
                ),
            92 =>
                array(
                    'id' => 593,
                    'lang' => 'en',
                    'lang_key' => 'Eg. 100',
                    'lang_value' => 'Eg. 100',
                    'created_at' => '2023-04-05 06:26:45',
                    'updated_at' => '2023-04-05 06:26:45',
                ),
            93 =>
                array(
                    'id' => 594,
                    'lang' => 'en',
                    'lang_key' => 'Badge Icon',
                    'lang_value' => 'Badge Icon',
                    'created_at' => '2023-04-05 06:26:45',
                    'updated_at' => '2023-04-05 06:26:45',
                ),
            94 =>
                array(
                    'id' => 595,
                    'lang' => 'en',
                    'lang_key' => 'Current Status',
                    'lang_value' => 'Current Status',
                    'created_at' => '2023-04-05 06:26:49',
                    'updated_at' => '2023-04-05 06:26:49',
                ),
            95 =>
                array(
                    'id' => 596,
                    'lang' => 'en',
                    'lang_key' => 'Client Badges list',
                    'lang_value' => 'Client Badges list',
                    'created_at' => '2023-04-05 06:26:50',
                    'updated_at' => '2023-04-05 06:26:50',
                ),
            96 =>
                array(
                    'id' => 597,
                    'lang' => 'en',
                    'lang_key' => 'Spent Badge',
                    'lang_value' => 'Spent Badge',
                    'created_at' => '2023-04-05 06:26:50',
                    'updated_at' => '2023-04-05 06:26:50',
                ),
            97 =>
                array(
                    'id' => 598,
                    'lang' => 'en',
                    'lang_key' => 'spent',
                    'lang_value' => 'spent',
                    'created_at' => '2023-04-05 06:26:50',
                    'updated_at' => '2023-04-05 06:26:50',
                ),
            98 =>
                array(
                    'id' => 599,
                    'lang' => 'en',
                    'lang_key' => 'Freelancer Reviews by Clients',
                    'lang_value' => 'Consultant Reviews by Clients',
                    'created_at' => '2023-04-05 06:26:53',
                    'updated_at' => '2023-04-05 06:36:28',
                ),
            99 =>
                array(
                    'id' => 600,
                    'lang' => 'en',
                    'lang_key' => 'Comment',
                    'lang_value' => 'Comment',
                    'created_at' => '2023-04-05 06:26:53',
                    'updated_at' => '2023-04-05 06:26:53',
                ),
            100 =>
                array(
                    'id' => 601,
                    'lang' => 'en',
                    'lang_key' => 'Client Reviews by Freelancers',
                    'lang_value' => 'Client Reviews by Consultants',
                    'created_at' => '2023-04-05 06:26:54',
                    'updated_at' => '2023-04-05 06:37:28',
                ),
            101 =>
                array(
                    'id' => 602,
                    'lang' => 'en',
                    'lang_key' => 'Payment Status',
                    'lang_value' => 'Payment Status',
                    'created_at' => '2023-04-05 06:26:57',
                    'updated_at' => '2023-04-05 06:26:57',
                ),
            102 =>
                array(
                    'id' => 603,
                    'lang' => 'en',
                    'lang_key' => 'Package Payment History',
                    'lang_value' => 'Package Payment History',
                    'created_at' => '2023-04-05 06:26:58',
                    'updated_at' => '2023-04-05 06:26:58',
                ),
            103 =>
                array(
                    'id' => 604,
                    'lang' => 'en',
                    'lang_key' => 'Select time and Search',
                    'lang_value' => 'Select time and Search',
                    'created_at' => '2023-04-05 06:26:58',
                    'updated_at' => '2023-04-05 06:26:58',
                ),
            104 =>
                array(
                    'id' => 605,
                    'lang' => 'en',
                    'lang_key' => 'Package Name',
                    'lang_value' => 'Package Name',
                    'created_at' => '2023-04-05 06:26:58',
                    'updated_at' => '2023-04-05 06:26:58',
                ),
            105 =>
                array(
                    'id' => 606,
                    'lang' => 'en',
                    'lang_key' => 'Package Type',
                    'lang_value' => 'Package Type',
                    'created_at' => '2023-04-05 06:26:58',
                    'updated_at' => '2023-04-05 06:26:58',
                ),
            106 =>
                array(
                    'id' => 607,
                    'lang' => 'en',
                    'lang_key' => 'User',
                    'lang_value' => 'User',
                    'created_at' => '2023-04-05 06:26:58',
                    'updated_at' => '2023-04-05 06:26:58',
                ),
            107 =>
                array(
                    'id' => 608,
                    'lang' => 'en',
                    'lang_key' => 'Withdraw Requests list',
                    'lang_value' => 'Withdraw Requests list',
                    'created_at' => '2023-04-05 06:27:00',
                    'updated_at' => '2023-04-05 06:27:00',
                ),
            108 =>
                array(
                    'id' => 609,
                    'lang' => 'en',
                    'lang_key' => 'Sort by Request Amount (High > Low)',
                    'lang_value' => 'Sort by Request Amount (High > Low)',
                    'created_at' => '2023-04-05 06:27:00',
                    'updated_at' => '2023-04-05 06:27:00',
                ),
            109 =>
                array(
                    'id' => 610,
                    'lang' => 'en',
                    'lang_key' => 'Sort by Request Amount (Low > High)',
                    'lang_value' => 'Sort by Request Amount (Low > High)',
                    'created_at' => '2023-04-05 06:27:00',
                    'updated_at' => '2023-04-05 06:27:00',
                ),
            110 =>
                array(
                    'id' => 611,
                    'lang' => 'en',
                    'lang_key' => 'Requested Amount',
                    'lang_value' => 'Requested Amount',
                    'created_at' => '2023-04-05 06:27:00',
                    'updated_at' => '2023-04-05 06:27:00',
                ),
            111 =>
                array(
                    'id' => 612,
                    'lang' => 'en',
                    'lang_key' => 'Message',
                    'lang_value' => 'Message',
                    'created_at' => '2023-04-05 06:27:00',
                    'updated_at' => '2023-04-05 06:27:00',
                ),
            112 =>
                array(
                    'id' => 613,
                    'lang' => 'en',
                    'lang_key' => 'Paid-Status',
                    'lang_value' => 'Paid-Status',
                    'created_at' => '2023-04-05 06:27:00',
                    'updated_at' => '2023-04-05 06:27:00',
                ),
            113 =>
                array(
                    'id' => 614,
                    'lang' => 'en',
                    'lang_key' => 'Freelnacer Payments',
                    'lang_value' => 'Consultant Payments',
                    'created_at' => '2023-04-05 06:27:01',
                    'updated_at' => '2023-04-05 06:39:10',
                ),
            114 =>
                array(
                    'id' => 615,
                    'lang' => 'en',
                    'lang_key' => 'Payment By',
                    'lang_value' => 'Payment By',
                    'created_at' => '2023-04-05 06:27:01',
                    'updated_at' => '2023-04-05 06:27:01',
                ),
            115 =>
                array(
                    'id' => 616,
                    'lang' => 'en',
                    'lang_key' => 'Payment To',
                    'lang_value' => 'Payment To',
                    'created_at' => '2023-04-05 06:27:02',
                    'updated_at' => '2023-04-05 06:27:02',
                ),
            116 =>
                array(
                    'id' => 617,
                    'lang' => 'en',
                    'lang_key' => 'Paid Amount',
                    'lang_value' => 'Paid Amount',
                    'created_at' => '2023-04-05 06:27:02',
                    'updated_at' => '2023-04-05 06:27:02',
                ),
            117 =>
                array(
                    'id' => 618,
                    'lang' => 'en',
                    'lang_key' => 'Paid Method',
                    'lang_value' => 'Paid Method',
                    'created_at' => '2023-04-05 06:27:02',
                    'updated_at' => '2023-04-05 06:27:02',
                ),
            118 =>
                array(
                    'id' => 619,
                    'lang' => 'en',
                    'lang_key' => 'Paid Status',
                    'lang_value' => 'Paid Status',
                    'created_at' => '2023-04-05 06:27:02',
                    'updated_at' => '2023-04-05 06:27:02',
                ),
            119 =>
                array(
                    'id' => 620,
                    'lang' => 'en',
                    'lang_key' => 'Paid At',
                    'lang_value' => 'Paid At',
                    'created_at' => '2023-04-05 06:27:02',
                    'updated_at' => '2023-04-05 06:27:02',
                ),
            120 =>
                array(
                    'id' => 621,
                    'lang' => 'en',
                    'lang_key' => 'Reciept',
                    'lang_value' => 'Reciept',
                    'created_at' => '2023-04-05 06:27:02',
                    'updated_at' => '2023-04-05 06:27:02',
                ),
            121 =>
                array(
                    'id' => 622,
                    'lang' => 'en',
                    'lang_key' => 'Wallet Recharge History',
                    'lang_value' => 'Wallet Recharge History',
                    'created_at' => '2023-04-05 06:27:03',
                    'updated_at' => '2023-04-05 06:27:03',
                ),
            122 =>
                array(
                    'id' => 623,
                    'lang' => 'en',
                    'lang_key' => 'Add New Post',
                    'lang_value' => 'Add New Post',
                    'created_at' => '2023-04-05 06:27:06',
                    'updated_at' => '2023-04-05 06:27:06',
                ),
            123 =>
                array(
                    'id' => 624,
                    'lang' => 'en',
                    'lang_key' => 'All blog posts',
                    'lang_value' => 'All blog posts',
                    'created_at' => '2023-04-05 06:27:06',
                    'updated_at' => '2023-04-05 06:27:06',
                ),
            124 =>
                array(
                    'id' => 625,
                    'lang' => 'en',
                    'lang_key' => 'Type & Enter',
                    'lang_value' => 'Type & Enter',
                    'created_at' => '2023-04-05 06:27:06',
                    'updated_at' => '2023-04-05 06:27:06',
                ),
            125 =>
                array(
                    'id' => 626,
                    'lang' => 'en',
                    'lang_key' => 'Category',
                    'lang_value' => 'Category',
                    'created_at' => '2023-04-05 06:27:06',
                    'updated_at' => '2023-04-05 06:27:06',
                ),
            126 =>
                array(
                    'id' => 627,
                    'lang' => 'en',
                    'lang_key' => 'Short Description',
                    'lang_value' => 'Short Description',
                    'created_at' => '2023-04-05 06:27:06',
                    'updated_at' => '2023-04-05 06:27:06',
                ),
            127 =>
                array(
                    'id' => 628,
                    'lang' => 'en',
                    'lang_key' => 'Change blog status successfully',
                    'lang_value' => 'Change blog status successfully',
                    'created_at' => '2023-04-05 06:27:06',
                    'updated_at' => '2023-04-05 06:27:06',
                ),
            128 =>
                array(
                    'id' => 629,
                    'lang' => 'en',
                    'lang_key' => 'All Blog Categories',
                    'lang_value' => 'All Blog Categories',
                    'created_at' => '2023-04-05 06:27:07',
                    'updated_at' => '2023-04-05 06:27:07',
                ),
            129 =>
                array(
                    'id' => 630,
                    'lang' => 'en',
                    'lang_key' => 'Blog Categories',
                    'lang_value' => 'Blog Categories',
                    'created_at' => '2023-04-05 06:27:07',
                    'updated_at' => '2023-04-05 06:27:07',
                ),
            130 =>
                array(
                    'id' => 631,
                    'lang' => 'en',
                    'lang_key' => 'Type name & Enter',
                    'lang_value' => 'Type name & Enter',
                    'created_at' => '2023-04-05 06:27:07',
                    'updated_at' => '2023-04-05 06:27:07',
                ),
            131 =>
                array(
                    'id' => 632,
                    'lang' => 'en',
                    'lang_key' => 'Send Newsletter',
                    'lang_value' => 'Send Newsletter',
                    'created_at' => '2023-04-05 06:27:10',
                    'updated_at' => '2023-04-05 06:27:10',
                ),
            132 =>
                array(
                    'id' => 633,
                    'lang' => 'en',
                    'lang_key' => 'Emails',
                    'lang_value' => 'Emails',
                    'created_at' => '2023-04-05 06:27:10',
                    'updated_at' => '2023-04-05 06:27:10',
                ),
            133 =>
                array(
                    'id' => 634,
                    'lang' => 'en',
                    'lang_key' => 'Users',
                    'lang_value' => 'Users',
                    'created_at' => '2023-04-05 06:27:10',
                    'updated_at' => '2023-04-05 06:27:10',
                ),
            134 =>
                array(
                    'id' => 635,
                    'lang' => 'en',
                    'lang_key' => 'Newsletter subject',
                    'lang_value' => 'Newsletter subject',
                    'created_at' => '2023-04-05 06:27:10',
                    'updated_at' => '2023-04-05 06:27:10',
                ),
            135 =>
                array(
                    'id' => 636,
                    'lang' => 'en',
                    'lang_key' => 'Newsletter content',
                    'lang_value' => 'Newsletter content',
                    'created_at' => '2023-04-05 06:27:10',
                    'updated_at' => '2023-04-05 06:27:10',
                ),
            136 =>
                array(
                    'id' => 637,
                    'lang' => 'en',
                    'lang_key' => 'Send',
                    'lang_value' => 'Send',
                    'created_at' => '2023-04-05 06:27:10',
                    'updated_at' => '2023-04-05 06:27:10',
                ),
            137 =>
                array(
                    'id' => 638,
                    'lang' => 'en',
                    'lang_key' => 'All Subscribers',
                    'lang_value' => 'All Subscribers',
                    'created_at' => '2023-04-05 06:27:10',
                    'updated_at' => '2023-04-05 06:27:10',
                ),
            138 =>
                array(
                    'id' => 639,
                    'lang' => 'en',
                    'lang_key' => 'Website Header',
                    'lang_value' => 'Website Header',
                    'created_at' => '2023-04-05 06:27:16',
                    'updated_at' => '2023-04-05 06:27:16',
                ),
            139 =>
                array(
                    'id' => 640,
                    'lang' => 'en',
                    'lang_key' => 'Header Setting',
                    'lang_value' => 'Header Setting',
                    'created_at' => '2023-04-05 06:27:16',
                    'updated_at' => '2023-04-05 06:27:16',
                ),
            140 =>
                array(
                    'id' => 641,
                    'lang' => 'en',
                    'lang_key' => 'Header Logo',
                    'lang_value' => 'Header Logo',
                    'created_at' => '2023-04-05 06:27:16',
                    'updated_at' => '2023-04-05 06:27:16',
                ),
            141 =>
                array(
                    'id' => 642,
                    'lang' => 'en',
                    'lang_key' => 'Enable stikcy header?',
                    'lang_value' => 'Enable stikcy header?',
                    'created_at' => '2023-04-05 06:27:16',
                    'updated_at' => '2023-04-05 06:27:16',
                ),
            142 =>
                array(
                    'id' => 643,
                    'lang' => 'en',
                    'lang_key' => 'Add Staff',
                    'lang_value' => 'Add Staff',
                    'created_at' => '2023-04-05 06:27:22',
                    'updated_at' => '2023-04-05 06:27:22',
                ),
            143 =>
                array(
                    'id' => 644,
                    'lang' => 'en',
                    'lang_key' => 'Staff',
                    'lang_value' => 'Staff',
                    'created_at' => '2023-04-05 06:27:22',
                    'updated_at' => '2023-04-05 06:27:22',
                ),
            144 =>
                array(
                    'id' => 645,
                    'lang' => 'en',
                    'lang_key' => 'Role',
                    'lang_value' => 'Role',
                    'created_at' => '2023-04-05 06:27:22',
                    'updated_at' => '2023-04-05 06:27:22',
                ),
            145 =>
                array(
                    'id' => 646,
                    'lang' => 'en',
                    'lang_key' => 'All Roles',
                    'lang_value' => 'All Roles',
                    'created_at' => '2023-04-05 06:27:23',
                    'updated_at' => '2023-04-05 06:27:23',
                ),
            146 =>
                array(
                    'id' => 647,
                    'lang' => 'en',
                    'lang_key' => 'Cancelled Projects',
                    'lang_value' => 'Cancelled Projects',
                    'created_at' => '2023-04-05 06:27:55',
                    'updated_at' => '2023-04-05 06:27:55',
                ),
            147 =>
                array(
                    'id' => 648,
                    'lang' => 'en',
                    'lang_key' => 'Eg. Bronze Package',
                    'lang_value' => 'Eg. Bronze Package',
                    'created_at' => '2023-04-05 06:28:41',
                    'updated_at' => '2023-04-05 06:28:41',
                ),
            148 =>
                array(
                    'id' => 649,
                    'lang' => 'en',
                    'lang_key' => 'Eg. 25',
                    'lang_value' => 'Eg. 25',
                    'created_at' => '2023-04-05 06:28:41',
                    'updated_at' => '2023-04-05 06:28:41',
                ),
            149 =>
                array(
                    'id' => 650,
                    'lang' => 'en',
                    'lang_key' => 'Use 0 for free package',
                    'lang_value' => 'Use 0 for free package',
                    'created_at' => '2023-04-05 06:28:41',
                    'updated_at' => '2023-04-05 06:28:41',
                ),
            150 =>
                array(
                    'id' => 651,
                    'lang' => 'en',
                    'lang_key' => 'Validate For',
                    'lang_value' => 'Validate For',
                    'created_at' => '2023-04-05 06:28:41',
                    'updated_at' => '2023-04-05 06:28:41',
                ),
            151 =>
                array(
                    'id' => 652,
                    'lang' => 'en',
                    'lang_key' => 'Eg. 30',
                    'lang_value' => 'Eg. 30',
                    'created_at' => '2023-04-05 06:28:41',
                    'updated_at' => '2023-04-05 06:28:41',
                ),
            152 =>
                array(
                    'id' => 653,
                    'lang' => 'en',
                    'lang_key' => 'Number in days. Use 0 for life time',
                    'lang_value' => 'Number in days. Use 0 for life time',
                    'created_at' => '2023-04-05 06:28:41',
                    'updated_at' => '2023-04-05 06:28:41',
                ),
            153 =>
                array(
                    'id' => 654,
                    'lang' => 'en',
                    'lang_key' => 'Eg. 5',
                    'lang_value' => 'Eg. 5',
                    'created_at' => '2023-04-05 06:28:41',
                    'updated_at' => '2023-04-05 06:28:41',
                ),
            154 =>
                array(
                    'id' => 655,
                    'lang' => 'en',
                    'lang_key' => 'Amount will be deducted from project payment. Use 0 for no deduction',
                    'lang_value' => 'Amount will be deducted from project payment. Use 0 for no deduction',
                    'created_at' => '2023-04-05 06:28:41',
                    'updated_at' => '2023-04-05 06:28:41',
                ),
            155 =>
                array(
                    'id' => 656,
                    'lang' => 'en',
                    'lang_key' => 'Commision Type',
                    'lang_value' => 'Commision Type',
                    'created_at' => '2023-04-05 06:28:41',
                    'updated_at' => '2023-04-05 06:28:41',
                ),
            156 =>
                array(
                    'id' => 657,
                    'lang' => 'en',
                    'lang_key' => 'Percent',
                    'lang_value' => 'Percent',
                    'created_at' => '2023-04-05 06:28:41',
                    'updated_at' => '2023-04-05 06:28:41',
                ),
            157 =>
                array(
                    'id' => 658,
                    'lang' => 'en',
                    'lang_key' => 'Flat Rate',
                    'lang_value' => 'Flat Rate',
                    'created_at' => '2023-04-05 06:28:41',
                    'updated_at' => '2023-04-05 06:28:41',
                ),
            158 =>
                array(
                    'id' => 659,
                    'lang' => 'en',
                    'lang_key' => 'Bid Limitation for Fixed Projects',
                    'lang_value' => 'Bid Limitation for Fixed Projects',
                    'created_at' => '2023-04-05 06:28:41',
                    'updated_at' => '2023-04-05 06:28:41',
                ),
            159 =>
                array(
                    'id' => 660,
                    'lang' => 'en',
                    'lang_key' => 'Eg. 10',
                    'lang_value' => 'Eg. 10',
                    'created_at' => '2023-04-05 06:28:41',
                    'updated_at' => '2023-04-05 06:28:41',
                ),
            160 =>
                array(
                    'id' => 661,
                    'lang' => 'en',
                    'lang_key' => 'Bid Limitation for Long Term Projects',
                    'lang_value' => 'Bid Limitation for Long Term Projects',
                    'created_at' => '2023-04-05 06:28:41',
                    'updated_at' => '2023-04-05 06:28:41',
                ),
            161 =>
                array(
                    'id' => 662,
                    'lang' => 'en',
                    'lang_key' => 'Skill Adding Limit',
                    'lang_value' => 'Skill Adding Limit',
                    'created_at' => '2023-04-05 06:28:41',
                    'updated_at' => '2023-04-05 06:28:41',
                ),
            162 =>
                array(
                    'id' => 663,
                    'lang' => 'en',
                    'lang_key' => 'Portfolio Adding Limit',
                    'lang_value' => 'Portfolio Adding Limit',
                    'created_at' => '2023-04-05 06:28:41',
                    'updated_at' => '2023-04-05 06:28:41',
                ),
            163 =>
                array(
                    'id' => 664,
                    'lang' => 'en',
                    'lang_key' => 'Bio Word Limit',
                    'lang_value' => 'Bio Word Limit',
                    'created_at' => '2023-04-05 06:28:41',
                    'updated_at' => '2023-04-05 06:28:41',
                ),
            164 =>
                array(
                    'id' => 665,
                    'lang' => 'en',
                    'lang_key' => 'Eg. 120',
                    'lang_value' => 'Eg. 120',
                    'created_at' => '2023-04-05 06:28:41',
                    'updated_at' => '2023-04-05 06:28:41',
                ),
            165 =>
                array(
                    'id' => 666,
                    'lang' => 'en',
                    'lang_key' => 'Project Bookmark Limit',
                    'lang_value' => 'Project Bookmark Limit',
                    'created_at' => '2023-04-05 06:28:41',
                    'updated_at' => '2023-04-05 06:28:41',
                ),
            166 =>
                array(
                    'id' => 667,
                    'lang' => 'en',
                    'lang_key' => 'Eg. 8',
                    'lang_value' => 'Eg. 8',
                    'created_at' => '2023-04-05 06:28:41',
                    'updated_at' => '2023-04-05 06:28:41',
                ),
            167 =>
                array(
                    'id' => 668,
                    'lang' => 'en',
                    'lang_key' => 'Job Experience Limit',
                    'lang_value' => 'Job Experience Limit',
                    'created_at' => '2023-04-05 06:28:41',
                    'updated_at' => '2023-04-05 06:28:41',
                ),
            168 =>
                array(
                    'id' => 669,
                    'lang' => 'en',
                    'lang_key' => 'Eg. 2',
                    'lang_value' => 'Eg. 2',
                    'created_at' => '2023-04-05 06:28:41',
                    'updated_at' => '2023-04-05 06:28:41',
                ),
            169 =>
                array(
                    'id' => 670,
                    'lang' => 'en',
                    'lang_key' => 'Service Limit',
                    'lang_value' => 'Service Limit',
                    'created_at' => '2023-04-05 06:28:41',
                    'updated_at' => '2023-04-05 06:28:41',
                ),
            170 =>
                array(
                    'id' => 671,
                    'lang' => 'en',
                    'lang_key' => 'Enable Client Following ?',
                    'lang_value' => 'Enable Client Following ?',
                    'created_at' => '2023-04-05 06:28:41',
                    'updated_at' => '2023-04-05 06:28:41',
                ),
            171 =>
                array(
                    'id' => 672,
                    'lang' => 'en',
                    'lang_key' => 'Recommended ?',
                    'lang_value' => 'Recommended ?',
                    'created_at' => '2023-04-05 06:28:41',
                    'updated_at' => '2023-04-05 06:28:41',
                ),
            172 =>
                array(
                    'id' => 673,
                    'lang' => 'en',
                    'lang_key' => 'Publish Package?',
                    'lang_value' => 'Publish Package?',
                    'created_at' => '2023-04-05 06:28:41',
                    'updated_at' => '2023-04-05 06:28:41',
                ),
            173 =>
                array(
                    'id' => 674,
                    'lang' => 'en',
                    'lang_key' => 'Blog category has been created successfully',
                    'lang_value' => 'Blog category has been created successfully',
                    'created_at' => '2023-04-05 06:39:50',
                    'updated_at' => '2023-04-05 06:39:50',
                ),
            174 =>
                array(
                    'id' => 675,
                    'lang' => 'en',
                    'lang_key' => 'Blog Category Information',
                    'lang_value' => 'Blog Category Information',
                    'created_at' => '2023-04-05 06:40:16',
                    'updated_at' => '2023-04-05 06:40:16',
                ),
            175 =>
                array(
                    'id' => 676,
                    'lang' => 'en',
                    'lang_key' => 'Create new Role',
                    'lang_value' => 'Create new Role',
                    'created_at' => '2023-04-05 07:45:22',
                    'updated_at' => '2023-04-05 07:45:22',
                ),
            176 =>
                array(
                    'id' => 677,
                    'lang' => 'en',
                    'lang_key' => 'Role Name',
                    'lang_value' => 'Role Name',
                    'created_at' => '2023-04-05 07:45:22',
                    'updated_at' => '2023-04-05 07:45:22',
                ),
            177 =>
                array(
                    'id' => 678,
                    'lang' => 'en',
                    'lang_key' => 'Permissions',
                    'lang_value' => 'Permissions',
                    'created_at' => '2023-04-05 07:45:22',
                    'updated_at' => '2023-04-05 07:45:22',
                ),
            178 =>
                array(
                    'id' => 679,
                    'lang' => 'en',
                    'lang_key' => 'Role has been inserted successfully',
                    'lang_value' => 'Role has been inserted successfully',
                    'created_at' => '2023-04-05 07:52:03',
                    'updated_at' => '2023-04-05 07:52:03',
                ),
            179 =>
                array(
                    'id' => 680,
                    'lang' => 'en',
                    'lang_key' => 'Employee Information',
                    'lang_value' => 'Employee Information',
                    'created_at' => '2023-04-05 07:52:18',
                    'updated_at' => '2023-04-05 07:52:18',
                ),
            180 =>
                array(
                    'id' => 681,
                    'lang' => 'en',
                    'lang_key' => 'Employee Name',
                    'lang_value' => 'Employee Name',
                    'created_at' => '2023-04-05 07:52:18',
                    'updated_at' => '2023-04-05 07:52:18',
                ),
            181 =>
                array(
                    'id' => 682,
                    'lang' => 'en',
                    'lang_key' => 'Employee Email',
                    'lang_value' => 'Employee Email',
                    'created_at' => '2023-04-05 07:52:18',
                    'updated_at' => '2023-04-05 07:52:18',
                ),
            182 =>
                array(
                    'id' => 683,
                    'lang' => 'en',
                    'lang_key' => 'Passoword',
                    'lang_value' => 'Passoword',
                    'created_at' => '2023-04-05 07:52:18',
                    'updated_at' => '2023-04-05 07:52:18',
                ),
            183 =>
                array(
                    'id' => 684,
                    'lang' => 'en',
                    'lang_key' => 'Staff has been inserted successfully',
                    'lang_value' => 'Staff has been inserted successfully',
                    'created_at' => '2023-04-05 07:52:43',
                    'updated_at' => '2023-04-05 07:52:43',
                ),
            184 =>
                array(
                    'id' => 685,
                    'lang' => 'en',
                    'lang_key' => 'Staff has been updated successfully',
                    'lang_value' => 'Staff has been updated successfully',
                    'created_at' => '2023-04-05 07:56:17',
                    'updated_at' => '2023-04-05 07:56:17',
                ),
            185 =>
                array(
                    'id' => 686,
                    'lang' => 'en',
                    'lang_key' => 'Blog Information',
                    'lang_value' => 'Blog Information',
                    'created_at' => '2023-04-05 08:50:43',
                    'updated_at' => '2023-04-05 08:50:43',
                ),
            186 =>
                array(
                    'id' => 687,
                    'lang' => 'en',
                    'lang_key' => 'Blog Title',
                    'lang_value' => 'Blog Title',
                    'created_at' => '2023-04-05 08:50:43',
                    'updated_at' => '2023-04-05 08:50:43',
                ),
            187 =>
                array(
                    'id' => 688,
                    'lang' => 'en',
                    'lang_key' => 'Select category',
                    'lang_value' => 'Select category',
                    'created_at' => '2023-04-05 08:50:43',
                    'updated_at' => '2023-04-05 08:50:43',
                ),
            188 =>
                array(
                    'id' => 689,
                    'lang' => 'en',
                    'lang_key' => 'Slug',
                    'lang_value' => 'Slug',
                    'created_at' => '2023-04-05 08:50:43',
                    'updated_at' => '2023-04-05 08:50:43',
                ),
            189 =>
                array(
                    'id' => 690,
                    'lang' => 'en',
                    'lang_key' => 'Meta Keywords',
                    'lang_value' => 'Meta Keywords',
                    'created_at' => '2023-04-05 08:50:43',
                    'updated_at' => '2023-04-05 08:50:43',
                ),
            190 =>
                array(
                    'id' => 691,
                    'lang' => 'en',
                    'lang_key' => 'Update Your Profile',
                    'lang_value' => 'Update Your Profile',
                    'created_at' => '2023-04-05 09:00:53',
                    'updated_at' => '2023-04-05 09:00:53',
                ),
            191 =>
                array(
                    'id' => 692,
                    'lang' => 'en',
                    'lang_key' => 'New Password',
                    'lang_value' => 'New Password',
                    'created_at' => '2023-04-05 09:00:53',
                    'updated_at' => '2023-04-05 09:00:53',
                ),
            192 =>
                array(
                    'id' => 693,
                    'lang' => 'en',
                    'lang_key' => 'Confirm Password',
                    'lang_value' => 'Confirm Password',
                    'created_at' => '2023-04-05 09:00:53',
                    'updated_at' => '2023-04-05 09:00:53',
                ),
            193 =>
                array(
                    'id' => 694,
                    'lang' => 'en',
                    'lang_key' => 'Profile Image',
                    'lang_value' => 'Profile Image',
                    'created_at' => '2023-04-05 09:00:53',
                    'updated_at' => '2023-04-05 09:00:53',
                ),
            194 =>
                array(
                    'id' => 695,
                    'lang' => 'en',
                    'lang_key' => 'Update Profile',
                    'lang_value' => 'Update Profile',
                    'created_at' => '2023-04-05 09:00:53',
                    'updated_at' => '2023-04-05 09:00:53',
                ),
            195 =>
                array(
                    'id' => 696,
                    'lang' => 'en',
                    'lang_key' => 'Fill out the form to get started',
                    'lang_value' => 'Fill out the form to get started',
                    'created_at' => '2023-04-05 09:02:14',
                    'updated_at' => '2023-04-05 09:02:14',
                ),
            196 =>
                array(
                    'id' => 697,
                    'lang' => 'en',
                    'lang_key' => 'Full Name',
                    'lang_value' => 'Full Name',
                    'created_at' => '2023-04-05 09:02:14',
                    'updated_at' => '2023-04-05 09:02:14',
                ),
            197 =>
                array(
                    'id' => 698,
                    'lang' => 'en',
                    'lang_key' => 'Minimun 6 characters',
                    'lang_value' => 'Minimun 6 characters',
                    'created_at' => '2023-04-05 09:02:14',
                    'updated_at' => '2023-04-05 09:02:14',
                ),
            198 =>
                array(
                    'id' => 699,
                    'lang' => 'en',
                    'lang_key' => 'As A Freelancer',
                    'lang_value' => 'As A Consultant',
                    'created_at' => '2023-04-05 09:02:14',
                    'updated_at' => '2023-04-05 09:04:50',
                ),
            199 =>
                array(
                    'id' => 700,
                    'lang' => 'en',
                    'lang_key' => 'As A Client',
                    'lang_value' => 'As A Client',
                    'created_at' => '2023-04-05 09:02:14',
                    'updated_at' => '2023-04-05 09:02:14',
                ),
            200 =>
                array(
                    'id' => 701,
                    'lang' => 'en',
                    'lang_key' => 'By signing up you agree to our terms and conditions',
                    'lang_value' => 'By signing up you agree to our terms and conditions',
                    'created_at' => '2023-04-05 09:02:15',
                    'updated_at' => '2023-04-05 09:02:15',
                ),
            201 =>
                array(
                    'id' => 702,
                    'lang' => 'en',
                    'lang_key' => 'Already have an account?',
                    'lang_value' => 'Already have an account?',
                    'created_at' => '2023-04-05 09:02:15',
                    'updated_at' => '2023-04-05 09:02:15',
                ),
            202 =>
                array(
                    'id' => 703,
                    'lang' => 'en',
                    'lang_key' => 'Registration successful.',
                    'lang_value' => 'Registration successful.',
                    'created_at' => '2023-04-05 09:10:10',
                    'updated_at' => '2023-04-05 09:10:10',
                ),
            203 =>
                array(
                    'id' => 704,
                    'lang' => 'en',
                    'lang_key' => 'Choose Your Package',
                    'lang_value' => 'Choose Your Package',
                    'created_at' => '2023-04-05 09:10:11',
                    'updated_at' => '2023-04-05 09:10:11',
                ),
            204 =>
                array(
                    'id' => 705,
                    'lang' => 'en',
                    'lang_key' => 'Select Payment Type',
                    'lang_value' => 'Select Payment Type',
                    'created_at' => '2023-04-05 09:10:11',
                    'updated_at' => '2023-04-05 09:10:11',
                ),
            205 =>
                array(
                    'id' => 706,
                    'lang' => 'en',
                    'lang_key' => 'Payment Type',
                    'lang_value' => 'Payment Type',
                    'created_at' => '2023-04-05 09:10:11',
                    'updated_at' => '2023-04-05 09:10:11',
                ),
            206 =>
                array(
                    'id' => 707,
                    'lang' => 'en',
                    'lang_key' => 'Select One',
                    'lang_value' => 'Select One',
                    'created_at' => '2023-04-05 09:10:11',
                    'updated_at' => '2023-04-05 09:10:11',
                ),
            207 =>
                array(
                    'id' => 708,
                    'lang' => 'en',
                    'lang_key' => 'Online payment',
                    'lang_value' => 'Online payment',
                    'created_at' => '2023-04-05 09:10:11',
                    'updated_at' => '2023-04-05 09:10:11',
                ),
            208 =>
                array(
                    'id' => 709,
                    'lang' => 'en',
                    'lang_key' => 'Offline payment',
                    'lang_value' => 'Offline payment',
                    'created_at' => '2023-04-05 09:10:11',
                    'updated_at' => '2023-04-05 09:10:11',
                ),
            209 =>
                array(
                    'id' => 710,
                    'lang' => 'en',
                    'lang_key' => 'Select a payment option',
                    'lang_value' => 'Select a payment option',
                    'created_at' => '2023-04-05 09:10:11',
                    'updated_at' => '2023-04-05 09:10:11',
                ),
            210 =>
                array(
                    'id' => 711,
                    'lang' => 'en',
                    'lang_key' => 'Package Purchase by Offline Payment',
                    'lang_value' => 'Package Purchase by Offline Payment',
                    'created_at' => '2023-04-05 09:10:11',
                    'updated_at' => '2023-04-05 09:10:11',
                ),
            211 =>
                array(
                    'id' => 712,
                    'lang' => 'en',
                    'lang_key' => 'No Notifications',
                    'lang_value' => 'No Notifications',
                    'created_at' => '2023-04-05 09:10:11',
                    'updated_at' => '2023-04-05 09:10:11',
                ),
            212 =>
                array(
                    'id' => 713,
                    'lang' => 'en',
                    'lang_key' => 'No New Messages',
                    'lang_value' => 'No New Messages',
                    'created_at' => '2023-04-05 09:10:11',
                    'updated_at' => '2023-04-05 09:10:11',
                ),
            213 =>
                array(
                    'id' => 714,
                    'lang' => 'en',
                    'lang_key' => 'View All Messages',
                    'lang_value' => 'View All Messages',
                    'created_at' => '2023-04-05 09:10:11',
                    'updated_at' => '2023-04-05 09:10:11',
                ),
            214 =>
                array(
                    'id' => 715,
                    'lang' => 'en',
                    'lang_key' => 'Log Out',
                    'lang_value' => 'Log Out',
                    'created_at' => '2023-04-05 09:10:11',
                    'updated_at' => '2023-04-05 09:10:11',
                ),
            215 =>
                array(
                    'id' => 716,
                    'lang' => 'en',
                    'lang_key' => 'Add New Service',
                    'lang_value' => 'Add New Service',
                    'created_at' => '2023-04-05 09:10:12',
                    'updated_at' => '2023-04-05 09:10:12',
                ),
            216 =>
                array(
                    'id' => 717,
                    'lang' => 'en',
                    'lang_key' => 'Sold Services',
                    'lang_value' => 'Sold Services',
                    'created_at' => '2023-04-05 09:10:12',
                    'updated_at' => '2023-04-05 09:10:12',
                ),
            217 =>
                array(
                    'id' => 718,
                    'lang' => 'en',
                    'lang_key' => 'Bidded',
                    'lang_value' => 'Bidded',
                    'created_at' => '2023-04-05 09:10:12',
                    'updated_at' => '2023-04-05 09:10:12',
                ),
            218 =>
                array(
                    'id' => 719,
                    'lang' => 'en',
                    'lang_key' => 'Running',
                    'lang_value' => 'Running',
                    'created_at' => '2023-04-05 09:10:12',
                    'updated_at' => '2023-04-05 09:10:12',
                ),
            219 =>
                array(
                    'id' => 720,
                    'lang' => 'en',
                    'lang_key' => 'Completed',
                    'lang_value' => 'Completed',
                    'created_at' => '2023-04-05 09:10:12',
                    'updated_at' => '2023-04-05 09:10:12',
                ),
            220 =>
                array(
                    'id' => 721,
                    'lang' => 'en',
                    'lang_key' => 'Cancelled',
                    'lang_value' => 'Cancelled',
                    'created_at' => '2023-04-05 09:10:12',
                    'updated_at' => '2023-04-05 09:10:12',
                ),
            221 =>
                array(
                    'id' => 722,
                    'lang' => 'en',
                    'lang_key' => 'Project Proposal',
                    'lang_value' => 'Project Proposal',
                    'created_at' => '2023-04-05 09:10:12',
                    'updated_at' => '2023-04-05 09:10:12',
                ),
            222 =>
                array(
                    'id' => 723,
                    'lang' => 'en',
                    'lang_key' => 'Earnings History',
                    'lang_value' => 'Earnings History',
                    'created_at' => '2023-04-05 09:10:12',
                    'updated_at' => '2023-04-05 09:10:12',
                ),
            223 =>
                array(
                    'id' => 724,
                    'lang' => 'en',
                    'lang_key' => 'Withdraw Request',
                    'lang_value' => 'Withdraw Request',
                    'created_at' => '2023-04-05 09:10:12',
                    'updated_at' => '2023-04-05 09:10:12',
                ),
            224 =>
                array(
                    'id' => 725,
                    'lang' => 'en',
                    'lang_key' => 'Withdraw History',
                    'lang_value' => 'Withdraw History',
                    'created_at' => '2023-04-05 09:10:12',
                    'updated_at' => '2023-04-05 09:10:12',
                ),
            225 =>
                array(
                    'id' => 726,
                    'lang' => 'en',
                    'lang_key' => 'Milestone Requests',
                    'lang_value' => 'Milestone Requests',
                    'created_at' => '2023-04-05 09:10:12',
                    'updated_at' => '2023-04-05 09:10:12',
                ),
            226 =>
                array(
                    'id' => 727,
                    'lang' => 'en',
                    'lang_key' => 'Bookmarked Projects',
                    'lang_value' => 'Bookmarked Projects',
                    'created_at' => '2023-04-05 09:10:12',
                    'updated_at' => '2023-04-05 09:10:12',
                ),
            227 =>
                array(
                    'id' => 728,
                    'lang' => 'en',
                    'lang_key' => 'Packages',
                    'lang_value' => 'Packages',
                    'created_at' => '2023-04-05 09:10:12',
                    'updated_at' => '2023-04-05 09:10:12',
                ),
            228 =>
                array(
                    'id' => 729,
                    'lang' => 'en',
                    'lang_key' => 'Upgrade/Downgrade',
                    'lang_value' => 'Upgrade/Downgrade',
                    'created_at' => '2023-04-05 09:10:12',
                    'updated_at' => '2023-04-05 09:10:12',
                ),
            229 =>
                array(
                    'id' => 730,
                    'lang' => 'en',
                    'lang_key' => 'Packages History',
                    'lang_value' => 'Packages History',
                    'created_at' => '2023-04-05 09:10:12',
                    'updated_at' => '2023-04-05 09:10:12',
                ),
            230 =>
                array(
                    'id' => 731,
                    'lang' => 'en',
                    'lang_key' => 'Wallet',
                    'lang_value' => 'Wallet',
                    'created_at' => '2023-04-05 09:10:12',
                    'updated_at' => '2023-04-05 09:10:12',
                ),
            231 =>
                array(
                    'id' => 732,
                    'lang' => 'en',
                    'lang_key' => 'Account Setting',
                    'lang_value' => 'Account Setting',
                    'created_at' => '2023-04-05 09:10:12',
                    'updated_at' => '2023-04-05 09:10:12',
                ),
            232 =>
                array(
                    'id' => 733,
                    'lang' => 'en',
                    'lang_key' => 'Profile Setting',
                    'lang_value' => 'Profile Setting',
                    'created_at' => '2023-04-05 09:10:12',
                    'updated_at' => '2023-04-05 09:10:12',
                ),
            233 =>
                array(
                    'id' => 734,
                    'lang' => 'en',
                    'lang_key' => 'Purchased Services',
                    'lang_value' => 'Purchased Services',
                    'created_at' => '2023-04-05 09:11:22',
                    'updated_at' => '2023-04-05 09:11:22',
                ),
            234 =>
                array(
                    'id' => 735,
                    'lang' => 'en',
                    'lang_key' => 'Service Cancel Requests',
                    'lang_value' => 'Service Cancel Requests',
                    'created_at' => '2023-04-05 09:11:22',
                    'updated_at' => '2023-04-05 09:11:22',
                ),
            235 =>
                array(
                    'id' => 736,
                    'lang' => 'en',
                    'lang_key' => 'Milestone Request',
                    'lang_value' => 'Milestone Request',
                    'created_at' => '2023-04-05 09:11:22',
                    'updated_at' => '2023-04-05 09:11:22',
                ),
            236 =>
                array(
                    'id' => 737,
                    'lang' => 'en',
                    'lang_key' => 'New Package has been inserted successfully',
                    'lang_value' => 'New Package has been inserted successfully',
                    'created_at' => '2023-04-05 09:13:41',
                    'updated_at' => '2023-04-05 09:13:41',
                ),
            237 =>
                array(
                    'id' => 738,
                    'lang' => 'en',
                    'lang_key' => 'times',
                    'lang_value' => 'times',
                    'created_at' => '2023-04-05 09:13:41',
                    'updated_at' => '2023-04-05 09:13:41',
                ),
            238 =>
                array(
                    'id' => 739,
                    'lang' => 'en',
                    'lang_key' => 'Active',
                    'lang_value' => 'Active',
                    'created_at' => '2023-04-05 09:13:41',
                    'updated_at' => '2023-04-05 09:13:41',
                ),
            239 =>
                array(
                    'id' => 740,
                    'lang' => 'en',
                    'lang_key' => 'Limitation for Fixed Project Posting',
                    'lang_value' => 'Limitation for Fixed Project Posting',
                    'created_at' => '2023-04-05 09:14:20',
                    'updated_at' => '2023-04-05 09:14:20',
                ),
            240 =>
                array(
                    'id' => 741,
                    'lang' => 'en',
                    'lang_key' => 'Limitation for Long Term Project Posting',
                    'lang_value' => 'Limitation for Long Term Project Posting',
                    'created_at' => '2023-04-05 09:14:20',
                    'updated_at' => '2023-04-05 09:14:20',
                ),
            241 =>
                array(
                    'id' => 742,
                    'lang' => 'en',
                    'lang_key' => 'Enable Freelancer Following ?',
                    'lang_value' => 'Enable Consultant Following ?',
                    'created_at' => '2023-04-05 09:14:20',
                    'updated_at' => '2023-04-05 09:31:14',
                ),
            242 =>
                array(
                    'id' => 743,
                    'lang' => 'en',
                    'lang_key' => 'Fixed Projects',
                    'lang_value' => 'Fixed Projects',
                    'created_at' => '2023-04-05 09:15:47',
                    'updated_at' => '2023-04-05 09:15:47',
                ),
            243 =>
                array(
                    'id' => 744,
                    'lang' => 'en',
                    'lang_key' => 'Long Term Projects',
                    'lang_value' => 'Long Term Projects',
                    'created_at' => '2023-04-05 09:15:47',
                    'updated_at' => '2023-04-05 09:15:47',
                ),
            244 =>
                array(
                    'id' => 745,
                    'lang' => 'en',
                    'lang_key' => 'Freelancer Following',
                    'lang_value' => 'Consultant Following',
                    'created_at' => '2023-04-05 09:15:47',
                    'updated_at' => '2023-04-05 09:31:14',
                ),
            245 =>
                array(
                    'id' => 746,
                    'lang' => 'en',
                    'lang_key' => 'Free',
                    'lang_value' => 'Free',
                    'created_at' => '2023-04-05 09:15:47',
                    'updated_at' => '2023-04-05 09:15:47',
                ),
            246 =>
                array(
                    'id' => 747,
                    'lang' => 'en',
                    'lang_key' => 'Life',
                    'lang_value' => 'Life',
                    'created_at' => '2023-04-05 09:15:47',
                    'updated_at' => '2023-04-05 09:15:47',
                ),
            247 =>
                array(
                    'id' => 748,
                    'lang' => 'en',
                    'lang_key' => 'Time',
                    'lang_value' => 'Time',
                    'created_at' => '2023-04-05 09:15:47',
                    'updated_at' => '2023-04-05 09:15:47',
                ),
            248 =>
                array(
                    'id' => 749,
                    'lang' => 'en',
                    'lang_key' => 'Start Free Trial',
                    'lang_value' => 'Start Free Trial',
                    'created_at' => '2023-04-05 09:15:47',
                    'updated_at' => '2023-04-05 09:15:47',
                ),
            249 =>
                array(
                    'id' => 750,
                    'lang' => 'en',
                    'lang_key' => 'New Package has been purchased successfully',
                    'lang_value' => 'New Package has been purchased successfully',
                    'created_at' => '2023-04-05 09:15:52',
                    'updated_at' => '2023-04-05 09:15:52',
                ),
            250 =>
                array(
                    'id' => 751,
                    'lang' => 'en',
                    'lang_key' => 'Bookmarked Freelancers',
                    'lang_value' => 'Bookmarked Consultants',
                    'created_at' => '2023-04-05 09:15:53',
                    'updated_at' => '2023-04-05 09:31:14',
                ),
            251 =>
                array(
                    'id' => 752,
                    'lang' => 'en',
                    'lang_key' => 'Please verify your identity',
                    'lang_value' => 'Please verify your identity',
                    'created_at' => '2023-04-05 09:15:53',
                    'updated_at' => '2023-04-05 09:15:53',
                ),
            252 =>
                array(
                    'id' => 753,
                    'lang' => 'en',
                    'lang_key' => 'Verify Now',
                    'lang_value' => 'Verify Now',
                    'created_at' => '2023-04-05 09:15:53',
                    'updated_at' => '2023-04-05 09:15:53',
                ),
            253 =>
                array(
                    'id' => 754,
                    'lang' => 'en',
                    'lang_key' => 'This Month Expense',
                    'lang_value' => 'This Month Expense',
                    'created_at' => '2023-04-05 09:15:53',
                    'updated_at' => '2023-04-05 09:15:53',
                ),
            254 =>
                array(
                    'id' => 755,
                    'lang' => 'en',
                    'lang_key' => 'Total Expense',
                    'lang_value' => 'Total Expense',
                    'created_at' => '2023-04-05 09:15:54',
                    'updated_at' => '2023-04-05 09:15:54',
                ),
            255 =>
                array(
                    'id' => 756,
                    'lang' => 'en',
                    'lang_key' => 'Add New Project',
                    'lang_value' => 'Add New Project',
                    'created_at' => '2023-04-05 09:15:54',
                    'updated_at' => '2023-04-05 09:15:54',
                ),
            256 =>
                array(
                    'id' => 757,
                    'lang' => 'en',
                    'lang_key' => 'Meet your need from our',
                    'lang_value' => 'Meet your need from our',
                    'created_at' => '2023-04-05 09:15:54',
                    'updated_at' => '2023-04-05 09:15:54',
                ),
            257 =>
                array(
                    'id' => 758,
                    'lang' => 'en',
                    'lang_key' => 'Find & Build your project with',
                    'lang_value' => 'Find & Build your project with',
                    'created_at' => '2023-04-05 09:15:54',
                    'updated_at' => '2023-04-05 09:15:54',
                ),
            258 =>
                array(
                    'id' => 759,
                    'lang' => 'en',
                    'lang_key' => 'Total Projects',
                    'lang_value' => 'Total Projects',
                    'created_at' => '2023-04-05 09:15:54',
                    'updated_at' => '2023-04-05 09:15:54',
                ),
            259 =>
                array(
                    'id' => 760,
                    'lang' => 'en',
                    'lang_key' => 'Completed Project',
                    'lang_value' => 'Completed Project',
                    'created_at' => '2023-04-05 09:15:54',
                    'updated_at' => '2023-04-05 09:15:54',
                ),
            260 =>
                array(
                    'id' => 761,
                    'lang' => 'en',
                    'lang_key' => 'Suggested Freelancers',
                    'lang_value' => 'Suggested Consultants',
                    'created_at' => '2023-04-05 09:15:54',
                    'updated_at' => '2023-04-05 09:31:14',
                ),
            261 =>
                array(
                    'id' => 762,
                    'lang' => 'en',
                    'lang_key' => 'Current Package',
                    'lang_value' => 'Current Package',
                    'created_at' => '2023-04-05 09:15:54',
                    'updated_at' => '2023-04-05 09:15:54',
                ),
            262 =>
                array(
                    'id' => 763,
                    'lang' => 'en',
                    'lang_key' => 'Remaining Fixed Projects',
                    'lang_value' => 'Remaining Fixed Projects',
                    'created_at' => '2023-04-05 09:15:54',
                    'updated_at' => '2023-04-05 09:15:54',
                ),
            263 =>
                array(
                    'id' => 764,
                    'lang' => 'en',
                    'lang_key' => 'Remaining Long Term Projects',
                    'lang_value' => 'Remaining Long Term Projects',
                    'created_at' => '2023-04-05 09:15:54',
                    'updated_at' => '2023-04-05 09:15:54',
                ),
            264 =>
                array(
                    'id' => 765,
                    'lang' => 'en',
                    'lang_key' => 'Upgrade/ Extend',
                    'lang_value' => 'Upgrade/ Extend',
                    'created_at' => '2023-04-05 09:15:54',
                    'updated_at' => '2023-04-05 09:15:54',
                ),
            265 =>
                array(
                    'id' => 766,
                    'lang' => 'en',
                    'lang_key' => 'Current Package Summary',
                    'lang_value' => 'Current Package Summary',
                    'created_at' => '2023-04-05 09:15:54',
                    'updated_at' => '2023-04-05 09:15:54',
                ),
            266 =>
                array(
                    'id' => 767,
                    'lang' => 'en',
                    'lang_key' => 'Freelancer Bookmark option',
                    'lang_value' => 'Consultant Bookmark option',
                    'created_at' => '2023-04-05 09:15:54',
                    'updated_at' => '2023-04-05 09:31:14',
                ),
            267 =>
                array(
                    'id' => 768,
                    'lang' => 'en',
                    'lang_key' => 'Suggested Package',
                    'lang_value' => 'Suggested Package',
                    'created_at' => '2023-04-05 09:15:54',
                    'updated_at' => '2023-04-05 09:15:54',
                ),
            268 =>
                array(
                    'id' => 769,
                    'lang' => 'en',
                    'lang_key' => 'days',
                    'lang_value' => 'days',
                    'created_at' => '2023-04-05 09:15:54',
                    'updated_at' => '2023-04-05 09:15:54',
                ),
            269 =>
                array(
                    'id' => 770,
                    'lang' => 'en',
                    'lang_key' => 'Total Project',
                    'lang_value' => 'Total Project',
                    'created_at' => '2023-04-05 09:15:54',
                    'updated_at' => '2023-04-05 09:15:54',
                ),
            270 =>
                array(
                    'id' => 771,
                    'lang' => 'en',
                    'lang_key' => 'Expense',
                    'lang_value' => 'Expense',
                    'created_at' => '2023-04-05 09:15:54',
                    'updated_at' => '2023-04-05 09:15:54',
                ),
            271 =>
                array(
                    'id' => 772,
                    'lang' => 'en',
                    'lang_key' => 'List of srevices purchased',
                    'lang_value' => 'List of srevices purchased',
                    'created_at' => '2023-04-05 09:16:36',
                    'updated_at' => '2023-04-05 09:16:36',
                ),
            272 =>
                array(
                    'id' => 773,
                    'lang' => 'en',
                    'lang_key' => 'Bought At',
                    'lang_value' => 'Bought At',
                    'created_at' => '2023-04-05 09:16:36',
                    'updated_at' => '2023-04-05 09:16:36',
                ),
            273 =>
                array(
                    'id' => 774,
                    'lang' => 'en',
                    'lang_key' => 'Purchased At',
                    'lang_value' => 'Purchased At',
                    'created_at' => '2023-04-05 09:16:36',
                    'updated_at' => '2023-04-05 09:16:36',
                ),
            274 =>
                array(
                    'id' => 775,
                    'lang' => 'en',
                    'lang_key' => 'Complete Confirmation',
                    'lang_value' => 'Complete Confirmation',
                    'created_at' => '2023-04-05 09:16:47',
                    'updated_at' => '2023-04-05 09:16:47',
                ),
            275 =>
                array(
                    'id' => 776,
                    'lang' => 'en',
                    'lang_key' => 'Are you sure to complete this project?',
                    'lang_value' => 'Are you sure to complete this project?',
                    'created_at' => '2023-04-05 09:16:47',
                    'updated_at' => '2023-04-05 09:16:47',
                ),
            276 =>
                array(
                    'id' => 777,
                    'lang' => 'en',
                    'lang_key' => 'Rate This Freelancer',
                    'lang_value' => 'Rate This Consultant',
                    'created_at' => '2023-04-05 09:16:47',
                    'updated_at' => '2023-04-05 09:31:14',
                ),
            277 =>
                array(
                    'id' => 778,
                    'lang' => 'en',
                    'lang_key' => 'Close',
                    'lang_value' => 'Close',
                    'created_at' => '2023-04-05 09:16:47',
                    'updated_at' => '2023-04-05 09:16:47',
                ),
            278 =>
                array(
                    'id' => 779,
                    'lang' => 'en',
                    'lang_key' => 'Post A New Project',
                    'lang_value' => 'Post A New Project',
                    'created_at' => '2023-04-05 09:16:52',
                    'updated_at' => '2023-04-05 09:16:52',
                ),
            279 =>
                array(
                    'id' => 780,
                    'lang' => 'en',
                    'lang_key' => 'Project title',
                    'lang_value' => 'Project title',
                    'created_at' => '2023-04-05 09:16:52',
                    'updated_at' => '2023-04-05 09:16:52',
                ),
            280 =>
                array(
                    'id' => 781,
                    'lang' => 'en',
                    'lang_key' => 'Enter project title',
                    'lang_value' => 'Enter project title',
                    'created_at' => '2023-04-05 09:16:52',
                    'updated_at' => '2023-04-05 09:16:52',
                ),
            281 =>
                array(
                    'id' => 782,
                    'lang' => 'en',
                    'lang_key' => 'Fixed',
                    'lang_value' => 'Fixed',
                    'created_at' => '2023-04-05 09:16:52',
                    'updated_at' => '2023-04-05 09:16:52',
                ),
            282 =>
                array(
                    'id' => 783,
                    'lang' => 'en',
                    'lang_key' => 'Project budget',
                    'lang_value' => 'Project budget',
                    'created_at' => '2023-04-05 09:16:52',
                    'updated_at' => '2023-04-05 09:16:52',
                ),
            283 =>
                array(
                    'id' => 784,
                    'lang' => 'en',
                    'lang_key' => 'Enter project budget',
                    'lang_value' => 'Enter project budget',
                    'created_at' => '2023-04-05 09:16:52',
                    'updated_at' => '2023-04-05 09:16:52',
                ),
            284 =>
                array(
                    'id' => 785,
                    'lang' => 'en',
                    'lang_key' => 'Project summary',
                    'lang_value' => 'Project summary',
                    'created_at' => '2023-04-05 09:16:52',
                    'updated_at' => '2023-04-05 09:16:52',
                ),
            285 =>
                array(
                    'id' => 786,
                    'lang' => 'en',
                    'lang_key' => 'Skills required',
                    'lang_value' => 'Skills required',
                    'created_at' => '2023-04-05 09:16:52',
                    'updated_at' => '2023-04-05 09:16:52',
                ),
            286 =>
                array(
                    'id' => 787,
                    'lang' => 'en',
                    'lang_key' => 'Project Details',
                    'lang_value' => 'Project Details',
                    'created_at' => '2023-04-05 09:16:52',
                    'updated_at' => '2023-04-05 09:16:52',
                ),
            287 =>
                array(
                    'id' => 788,
                    'lang' => 'en',
                    'lang_key' => 'File attachment',
                    'lang_value' => 'File attachment',
                    'created_at' => '2023-04-05 09:16:52',
                    'updated_at' => '2023-04-05 09:16:52',
                ),
            288 =>
                array(
                    'id' => 789,
                    'lang' => 'en',
                    'lang_key' => 'Post Project',
                    'lang_value' => 'Post Project',
                    'created_at' => '2023-04-05 09:16:52',
                    'updated_at' => '2023-04-05 09:16:52',
                ),
            289 =>
                array(
                    'id' => 790,
                    'lang' => 'en',
                    'lang_key' => 'Bookmark Remove Confirmation',
                    'lang_value' => 'Bookmark Remove Confirmation',
                    'created_at' => '2023-04-05 09:17:24',
                    'updated_at' => '2023-04-05 09:17:24',
                ),
            290 =>
                array(
                    'id' => 791,
                    'lang' => 'en',
                    'lang_key' => 'Are you sure to remove from bookmark?',
                    'lang_value' => 'Are you sure to remove from bookmark?',
                    'created_at' => '2023-04-05 09:17:24',
                    'updated_at' => '2023-04-05 09:17:24',
                ),
            291 =>
                array(
                    'id' => 792,
                    'lang' => 'en',
                    'lang_key' => 'Project Milestone Requests',
                    'lang_value' => 'Project Milestone Requests',
                    'created_at' => '2023-04-05 09:17:28',
                    'updated_at' => '2023-04-05 09:17:28',
                ),
            292 =>
                array(
                    'id' => 793,
                    'lang' => 'en',
                    'lang_key' => 'All Requests',
                    'lang_value' => 'All Requests',
                    'created_at' => '2023-04-05 09:17:28',
                    'updated_at' => '2023-04-05 09:17:28',
                ),
            293 =>
                array(
                    'id' => 794,
                    'lang' => 'en',
                    'lang_key' => 'Message Info',
                    'lang_value' => 'Message Info',
                    'created_at' => '2023-04-05 09:17:28',
                    'updated_at' => '2023-04-05 09:17:28',
                ),
            294 =>
                array(
                    'id' => 795,
                    'lang' => 'en',
                    'lang_key' => 'Details',
                    'lang_value' => 'Details',
                    'created_at' => '2023-04-05 09:17:28',
                    'updated_at' => '2023-04-05 09:17:28',
                ),
            295 =>
                array(
                    'id' => 796,
                    'lang' => 'en',
                    'lang_key' => 'Make offline milestone payment',
                    'lang_value' => 'Make offline milestone payment',
                    'created_at' => '2023-04-05 09:17:28',
                    'updated_at' => '2023-04-05 09:17:28',
                ),
            296 =>
                array(
                    'id' => 797,
                    'lang' => 'en',
                    'lang_key' => 'Chats',
                    'lang_value' => 'Chats',
                    'created_at' => '2023-04-05 09:17:34',
                    'updated_at' => '2023-04-05 09:17:34',
                ),
            297 =>
                array(
                    'id' => 798,
                    'lang' => 'en',
                    'lang_key' => 'Select a',
                    'lang_value' => 'Select a',
                    'created_at' => '2023-04-05 09:17:34',
                    'updated_at' => '2023-04-05 09:17:34',
                ),
            298 =>
                array(
                    'id' => 799,
                    'lang' => 'en',
                    'lang_key' => 'to view chats',
                    'lang_value' => 'to view chats',
                    'created_at' => '2023-04-05 09:17:34',
                    'updated_at' => '2023-04-05 09:17:34',
                ),
            299 =>
                array(
                    'id' => 800,
                    'lang' => 'en',
                    'lang_key' => 'My Wallet',
                    'lang_value' => 'My Wallet',
                    'created_at' => '2023-04-05 09:17:44',
                    'updated_at' => '2023-04-05 09:17:44',
                ),
            300 =>
                array(
                    'id' => 801,
                    'lang' => 'en',
                    'lang_key' => 'Wallet Balance',
                    'lang_value' => 'Wallet Balance',
                    'created_at' => '2023-04-05 09:17:44',
                    'updated_at' => '2023-04-05 09:17:44',
                ),
            301 =>
                array(
                    'id' => 802,
                    'lang' => 'en',
                    'lang_key' => 'Paypal',
                    'lang_value' => 'Paypal',
                    'created_at' => '2023-04-05 09:17:44',
                    'updated_at' => '2023-04-05 09:17:44',
                ),
            302 =>
                array(
                    'id' => 803,
                    'lang' => 'en',
                    'lang_key' => 'Stripe',
                    'lang_value' => 'Stripe',
                    'created_at' => '2023-04-05 09:17:44',
                    'updated_at' => '2023-04-05 09:17:44',
                ),
            303 =>
                array(
                    'id' => 804,
                    'lang' => 'en',
                    'lang_key' => 'sslcommerz',
                    'lang_value' => 'sslcommerz',
                    'created_at' => '2023-04-05 09:17:44',
                    'updated_at' => '2023-04-05 09:17:44',
                ),
            304 =>
                array(
                    'id' => 805,
                    'lang' => 'en',
                    'lang_key' => 'Paystack',
                    'lang_value' => 'Paystack',
                    'created_at' => '2023-04-05 09:17:44',
                    'updated_at' => '2023-04-05 09:17:44',
                ),
            305 =>
                array(
                    'id' => 806,
                    'lang' => 'en',
                    'lang_key' => 'Instamojo',
                    'lang_value' => 'Instamojo',
                    'created_at' => '2023-04-05 09:17:44',
                    'updated_at' => '2023-04-05 09:17:44',
                ),
            306 =>
                array(
                    'id' => 807,
                    'lang' => 'en',
                    'lang_key' => 'Paytm',
                    'lang_value' => 'Paytm',
                    'created_at' => '2023-04-05 09:17:44',
                    'updated_at' => '2023-04-05 09:17:44',
                ),
            307 =>
                array(
                    'id' => 808,
                    'lang' => 'en',
                    'lang_key' => 'Flutterwave',
                    'lang_value' => 'Flutterwave',
                    'created_at' => '2023-04-05 09:17:44',
                    'updated_at' => '2023-04-05 09:17:44',
                ),
            308 =>
                array(
                    'id' => 809,
                    'lang' => 'en',
                    'lang_key' => 'Identity Verification',
                    'lang_value' => 'Identity Verification',
                    'created_at' => '2023-04-05 09:18:02',
                    'updated_at' => '2023-04-05 09:18:02',
                ),
            309 =>
                array(
                    'id' => 810,
                    'lang' => 'en',
                    'lang_key' => 'Nid / Passport PDF',
                    'lang_value' => 'Nid / Passport PDF',
                    'created_at' => '2023-04-05 09:18:02',
                    'updated_at' => '2023-04-05 09:18:02',
                ),
            310 =>
                array(
                    'id' => 811,
                    'lang' => 'en',
                    'lang_key' => 'Save Changes',
                    'lang_value' => 'Save Changes',
                    'created_at' => '2023-04-05 09:18:02',
                    'updated_at' => '2023-04-05 09:18:02',
                ),
            311 =>
                array(
                    'id' => 812,
                    'lang' => 'en',
                    'lang_key' => 'Account Info',
                    'lang_value' => 'Account Info',
                    'created_at' => '2023-04-05 09:18:02',
                    'updated_at' => '2023-04-05 09:18:02',
                ),
            312 =>
                array(
                    'id' => 813,
                    'lang' => 'en',
                    'lang_key' => 'Username',
                    'lang_value' => 'Username',
                    'created_at' => '2023-04-05 09:18:02',
                    'updated_at' => '2023-04-05 09:18:02',
                ),
            313 =>
                array(
                    'id' => 814,
                    'lang' => 'en',
                    'lang_key' => 'Enter your username',
                    'lang_value' => 'Enter your username',
                    'created_at' => '2023-04-05 09:18:02',
                    'updated_at' => '2023-04-05 09:18:02',
                ),
            314 =>
                array(
                    'id' => 815,
                    'lang' => 'en',
                    'lang_key' => 'Only a-z, numbers, hypen allowed',
                    'lang_value' => 'Only a-z, numbers, hypen allowed',
                    'created_at' => '2023-04-05 09:18:02',
                    'updated_at' => '2023-04-05 09:18:02',
                ),
            315 =>
                array(
                    'id' => 816,
                    'lang' => 'en',
                    'lang_key' => 'Verified',
                    'lang_value' => 'Verified',
                    'created_at' => '2023-04-05 09:18:02',
                    'updated_at' => '2023-04-05 09:18:02',
                ),
            316 =>
                array(
                    'id' => 817,
                    'lang' => 'en',
                    'lang_key' => 'Bio',
                    'lang_value' => 'Bio',
                    'created_at' => '2023-04-05 09:18:02',
                    'updated_at' => '2023-04-05 09:18:02',
                ),
            317 =>
                array(
                    'id' => 818,
                    'lang' => 'en',
                    'lang_key' => 'Tell us about yourself in few sentences',
                    'lang_value' => 'Tell us about yourself in few sentences',
                    'created_at' => '2023-04-05 09:18:02',
                    'updated_at' => '2023-04-05 09:18:02',
                ),
            318 =>
                array(
                    'id' => 819,
                    'lang' => 'en',
                    'lang_key' => 'Basic Info',
                    'lang_value' => 'Basic Info',
                    'created_at' => '2023-04-05 09:18:02',
                    'updated_at' => '2023-04-05 09:18:02',
                ),
            319 =>
                array(
                    'id' => 820,
                    'lang' => 'en',
                    'lang_key' => 'Enter your name',
                    'lang_value' => 'Enter your name',
                    'created_at' => '2023-04-05 09:18:02',
                    'updated_at' => '2023-04-05 09:18:02',
                ),
            320 =>
                array(
                    'id' => 821,
                    'lang' => 'en',
                    'lang_key' => 'Displayed on your public profile, notifications and other places',
                    'lang_value' => 'Displayed on your public profile, notifications and other places',
                    'created_at' => '2023-04-05 09:18:02',
                    'updated_at' => '2023-04-05 09:18:02',
                ),
            321 =>
                array(
                    'id' => 822,
                    'lang' => 'en',
                    'lang_key' => 'Gender',
                    'lang_value' => 'Gender',
                    'created_at' => '2023-04-05 09:18:02',
                    'updated_at' => '2023-04-05 09:18:02',
                ),
            322 =>
                array(
                    'id' => 823,
                    'lang' => 'en',
                    'lang_key' => 'Male',
                    'lang_value' => 'Male',
                    'created_at' => '2023-04-05 09:18:02',
                    'updated_at' => '2023-04-05 09:18:02',
                ),
            323 =>
                array(
                    'id' => 824,
                    'lang' => 'en',
                    'lang_key' => 'Female',
                    'lang_value' => 'Female',
                    'created_at' => '2023-04-05 09:18:02',
                    'updated_at' => '2023-04-05 09:18:02',
                ),
            324 =>
                array(
                    'id' => 825,
                    'lang' => 'en',
                    'lang_key' => 'Other',
                    'lang_value' => 'Other',
                    'created_at' => '2023-04-05 09:18:02',
                    'updated_at' => '2023-04-05 09:18:02',
                ),
            325 =>
                array(
                    'id' => 826,
                    'lang' => 'en',
                    'lang_key' => 'City',
                    'lang_value' => 'City',
                    'created_at' => '2023-04-05 09:18:02',
                    'updated_at' => '2023-04-05 09:18:02',
                ),
            326 =>
                array(
                    'id' => 827,
                    'lang' => 'en',
                    'lang_key' => 'Postal Code',
                    'lang_value' => 'Postal Code',
                    'created_at' => '2023-04-05 09:18:02',
                    'updated_at' => '2023-04-05 09:18:02',
                ),
            327 =>
                array(
                    'id' => 828,
                    'lang' => 'en',
                    'lang_key' => 'Eg. 1203',
                    'lang_value' => 'Eg. 1203',
                    'created_at' => '2023-04-05 09:18:02',
                    'updated_at' => '2023-04-05 09:18:02',
                ),
            328 =>
                array(
                    'id' => 829,
                    'lang' => 'en',
                    'lang_key' => 'Address',
                    'lang_value' => 'Address',
                    'created_at' => '2023-04-05 09:18:02',
                    'updated_at' => '2023-04-05 09:18:02',
                ),
            329 =>
                array(
                    'id' => 830,
                    'lang' => 'en',
                    'lang_key' => 'Enter your street address',
                    'lang_value' => 'Enter your street address',
                    'created_at' => '2023-04-05 09:18:02',
                    'updated_at' => '2023-04-05 09:18:02',
                ),
            330 =>
                array(
                    'id' => 831,
                    'lang' => 'en',
                    'lang_key' => 'Phone',
                    'lang_value' => 'Phone',
                    'created_at' => '2023-04-05 09:18:02',
                    'updated_at' => '2023-04-05 09:18:02',
                ),
            331 =>
                array(
                    'id' => 832,
                    'lang' => 'en',
                    'lang_key' => 'Enter your contact number',
                    'lang_value' => 'Enter your contact number',
                    'created_at' => '2023-04-05 09:18:02',
                    'updated_at' => '2023-04-05 09:18:02',
                ),
            332 =>
                array(
                    'id' => 833,
                    'lang' => 'en',
                    'lang_key' => 'Nationality',
                    'lang_value' => 'Nationality',
                    'created_at' => '2023-04-05 09:18:02',
                    'updated_at' => '2023-04-05 09:18:02',
                ),
            333 =>
                array(
                    'id' => 834,
                    'lang' => 'en',
                    'lang_key' => 'Profile Images',
                    'lang_value' => 'Profile Images',
                    'created_at' => '2023-04-05 09:18:02',
                    'updated_at' => '2023-04-05 09:18:02',
                ),
            334 =>
                array(
                    'id' => 835,
                    'lang' => 'en',
                    'lang_key' => 'Cover Image',
                    'lang_value' => 'Cover Image',
                    'created_at' => '2023-04-05 09:18:02',
                    'updated_at' => '2023-04-05 09:18:02',
                ),
            335 =>
                array(
                    'id' => 836,
                    'lang' => 'en',
                    'lang_key' => 'Package Payment History:',
                    'lang_value' => 'Package Payment History:',
                    'created_at' => '2023-04-05 09:19:19',
                    'updated_at' => '2023-04-05 09:19:19',
                ),
            336 =>
                array(
                    'id' => 837,
                    'lang' => 'en',
                    'lang_key' => 'Purchase Date',
                    'lang_value' => 'Purchase Date',
                    'created_at' => '2023-04-05 09:19:19',
                    'updated_at' => '2023-04-05 09:19:19',
                ),
            337 =>
                array(
                    'id' => 838,
                    'lang' => 'en',
                    'lang_key' => 'Commission',
                    'lang_value' => 'Commission',
                    'created_at' => '2023-04-05 09:20:23',
                    'updated_at' => '2023-04-05 09:20:23',
                ),
            338 =>
                array(
                    'id' => 839,
                    'lang' => 'en',
                    'lang_key' => 'Fixed Project Bids',
                    'lang_value' => 'Fixed Project Bids',
                    'created_at' => '2023-04-05 09:20:23',
                    'updated_at' => '2023-04-05 09:20:23',
                ),
            339 =>
                array(
                    'id' => 840,
                    'lang' => 'en',
                    'lang_key' => 'Long Term Project Bids',
                    'lang_value' => 'Long Term Project Bids',
                    'created_at' => '2023-04-05 09:20:23',
                    'updated_at' => '2023-04-05 09:20:23',
                ),
            340 =>
                array(
                    'id' => 841,
                    'lang' => 'en',
                    'lang_key' => 'Skills Adding Limit',
                    'lang_value' => 'Skills Adding Limit',
                    'created_at' => '2023-04-05 09:20:23',
                    'updated_at' => '2023-04-05 09:20:23',
                ),
            341 =>
                array(
                    'id' => 842,
                    'lang' => 'en',
                    'lang_key' => 'Experience Add Limit',
                    'lang_value' => 'Experience Add Limit',
                    'created_at' => '2023-04-05 09:20:23',
                    'updated_at' => '2023-04-05 09:20:23',
                ),
            342 =>
                array(
                    'id' => 843,
                    'lang' => 'en',
                    'lang_key' => 'Service Add Limit',
                    'lang_value' => 'Service Add Limit',
                    'created_at' => '2023-04-05 09:20:23',
                    'updated_at' => '2023-04-05 09:20:23',
                ),
            343 =>
                array(
                    'id' => 844,
                    'lang' => 'en',
                    'lang_key' => 'Bio Words Limit',
                    'lang_value' => 'Bio Words Limit',
                    'created_at' => '2023-04-05 09:20:23',
                    'updated_at' => '2023-04-05 09:20:23',
                ),
            344 =>
                array(
                    'id' => 845,
                    'lang' => 'en',
                    'lang_key' => 'Client Following',
                    'lang_value' => 'Client Following',
                    'created_at' => '2023-04-05 09:20:23',
                    'updated_at' => '2023-04-05 09:20:23',
                ),
            345 =>
                array(
                    'id' => 846,
                    'lang' => 'en',
                    'lang_key' => 'Following Clients',
                    'lang_value' => 'Following Clients',
                    'created_at' => '2023-04-05 09:20:29',
                    'updated_at' => '2023-04-05 09:20:29',
                ),
            346 =>
                array(
                    'id' => 847,
                    'lang' => 'en',
                    'lang_key' => 'Completed Projects',
                    'lang_value' => 'Completed Projects',
                    'created_at' => '2023-04-05 09:20:29',
                    'updated_at' => '2023-04-05 09:20:29',
                ),
            347 =>
                array(
                    'id' => 848,
                    'lang' => 'en',
                    'lang_key' => 'This Month Earnings',
                    'lang_value' => 'This Month Earnings',
                    'created_at' => '2023-04-05 09:20:29',
                    'updated_at' => '2023-04-05 09:20:29',
                ),
            348 =>
                array(
                    'id' => 849,
                    'lang' => 'en',
                    'lang_key' => 'Total Earnings',
                    'lang_value' => 'Total Earnings',
                    'created_at' => '2023-04-05 09:20:29',
                    'updated_at' => '2023-04-05 09:20:29',
                ),
            349 =>
                array(
                    'id' => 850,
                    'lang' => 'en',
                    'lang_key' => 'My Services',
                    'lang_value' => 'My Services',
                    'created_at' => '2023-04-05 09:20:29',
                    'updated_at' => '2023-04-05 09:20:29',
                ),
            350 =>
                array(
                    'id' => 851,
                    'lang' => 'en',
                    'lang_key' => 'Profile Settings',
                    'lang_value' => 'Profile Settings',
                    'created_at' => '2023-04-05 09:20:29',
                    'updated_at' => '2023-04-05 09:20:29',
                ),
            351 =>
                array(
                    'id' => 852,
                    'lang' => 'en',
                    'lang_key' => 'Suggested Projects',
                    'lang_value' => 'Suggested Projects',
                    'created_at' => '2023-04-05 09:20:29',
                    'updated_at' => '2023-04-05 09:20:29',
                ),
            352 =>
                array(
                    'id' => 853,
                    'lang' => 'en',
                    'lang_key' => 'Remaining Fixed Projects bids',
                    'lang_value' => 'Remaining Fixed Projects bids',
                    'created_at' => '2023-04-05 09:20:29',
                    'updated_at' => '2023-04-05 09:20:29',
                ),
            353 =>
                array(
                    'id' => 854,
                    'lang' => 'en',
                    'lang_key' => 'Remaining Long Term Projects bids',
                    'lang_value' => 'Remaining Long Term Projects bids',
                    'created_at' => '2023-04-05 09:20:29',
                    'updated_at' => '2023-04-05 09:20:29',
                ),
            354 =>
                array(
                    'id' => 855,
                    'lang' => 'en',
                    'lang_key' => 'Remaining Service',
                    'lang_value' => 'Remaining Service',
                    'created_at' => '2023-04-05 09:20:29',
                    'updated_at' => '2023-04-05 09:20:29',
                ),
            355 =>
                array(
                    'id' => 856,
                    'lang' => 'en',
                    'lang_key' => 'Fixed Projects bids',
                    'lang_value' => 'Fixed Projects bids',
                    'created_at' => '2023-04-05 09:20:29',
                    'updated_at' => '2023-04-05 09:20:29',
                ),
            356 =>
                array(
                    'id' => 857,
                    'lang' => 'en',
                    'lang_key' => 'Long Term Projects bids',
                    'lang_value' => 'Long Term Projects bids',
                    'created_at' => '2023-04-05 09:20:29',
                    'updated_at' => '2023-04-05 09:20:29',
                ),
            357 =>
                array(
                    'id' => 858,
                    'lang' => 'en',
                    'lang_key' => 'Job Experience Add Limit',
                    'lang_value' => 'Job Experience Add Limit',
                    'created_at' => '2023-04-05 09:20:29',
                    'updated_at' => '2023-04-05 09:20:29',
                ),
            358 =>
                array(
                    'id' => 859,
                    'lang' => 'en',
                    'lang_key' => 'Client Following option',
                    'lang_value' => 'Client Following option',
                    'created_at' => '2023-04-05 09:20:29',
                    'updated_at' => '2023-04-05 09:20:29',
                ),
            359 =>
                array(
                    'id' => 860,
                    'lang' => 'en',
                    'lang_key' => 'Bidded Project',
                    'lang_value' => 'Bidded Project',
                    'created_at' => '2023-04-05 09:20:30',
                    'updated_at' => '2023-04-05 09:20:30',
                ),
            360 =>
                array(
                    'id' => 861,
                    'lang' => 'en',
                    'lang_key' => 'Create new service',
                    'lang_value' => 'Create new service',
                    'created_at' => '2023-04-05 09:21:28',
                    'updated_at' => '2023-04-05 09:21:28',
                ),
            361 =>
                array(
                    'id' => 862,
                    'lang' => 'en',
                    'lang_key' => 'Service Info',
                    'lang_value' => 'Service Info',
                    'created_at' => '2023-04-05 09:21:28',
                    'updated_at' => '2023-04-05 09:21:28',
                ),
            362 =>
                array(
                    'id' => 863,
                    'lang' => 'en',
                    'lang_key' => 'Title of Service',
                    'lang_value' => 'Title of Service',
                    'created_at' => '2023-04-05 09:21:28',
                    'updated_at' => '2023-04-05 09:21:28',
                ),
            363 =>
                array(
                    'id' => 864,
                    'lang' => 'en',
                    'lang_key' => 'Enter your service title',
                    'lang_value' => 'Enter your service title',
                    'created_at' => '2023-04-05 09:21:28',
                    'updated_at' => '2023-04-05 09:21:28',
                ),
            364 =>
                array(
                    'id' => 865,
                    'lang' => 'en',
                    'lang_key' => 'Service Image',
                    'lang_value' => 'Service Image',
                    'created_at' => '2023-04-05 09:21:28',
                    'updated_at' => '2023-04-05 09:21:28',
                ),
            365 =>
                array(
                    'id' => 866,
                    'lang' => 'en',
                    'lang_key' => 'About Service',
                    'lang_value' => 'About Service',
                    'created_at' => '2023-04-05 09:21:28',
                    'updated_at' => '2023-04-05 09:21:28',
                ),
            366 =>
                array(
                    'id' => 867,
                    'lang' => 'en',
                    'lang_key' => 'Please select a category.',
                    'lang_value' => 'Please select a category.',
                    'created_at' => '2023-04-05 09:21:28',
                    'updated_at' => '2023-04-05 09:21:28',
                ),
            367 =>
                array(
                    'id' => 868,
                    'lang' => 'en',
                    'lang_key' => 'Basic',
                    'lang_value' => 'Basic',
                    'created_at' => '2023-04-05 09:21:28',
                    'updated_at' => '2023-04-05 09:21:28',
                ),
            368 =>
                array(
                    'id' => 869,
                    'lang' => 'en',
                    'lang_key' => 'Standard',
                    'lang_value' => 'Standard',
                    'created_at' => '2023-04-05 09:21:28',
                    'updated_at' => '2023-04-05 09:21:28',
                ),
            369 =>
                array(
                    'id' => 870,
                    'lang' => 'en',
                    'lang_key' => 'Premium',
                    'lang_value' => 'Premium',
                    'created_at' => '2023-04-05 09:21:28',
                    'updated_at' => '2023-04-05 09:21:28',
                ),
            370 =>
                array(
                    'id' => 871,
                    'lang' => 'en',
                    'lang_key' => 'Basic Package',
                    'lang_value' => 'Basic Package',
                    'created_at' => '2023-04-05 09:21:28',
                    'updated_at' => '2023-04-05 09:21:28',
                ),
            371 =>
                array(
                    'id' => 872,
                    'lang' => 'en',
                    'lang_key' => 'Enter Price',
                    'lang_value' => 'Enter Price',
                    'created_at' => '2023-04-05 09:21:28',
                    'updated_at' => '2023-04-05 09:21:28',
                ),
            372 =>
                array(
                    'id' => 873,
                    'lang' => 'en',
                    'lang_key' => 'Devilery Within',
                    'lang_value' => 'Devilery Within',
                    'created_at' => '2023-04-05 09:21:28',
                    'updated_at' => '2023-04-05 09:21:28',
                ),
            373 =>
                array(
                    'id' => 874,
                    'lang' => 'en',
                    'lang_key' => 'Enter Delivery Time',
                    'lang_value' => 'Enter Delivery Time',
                    'created_at' => '2023-04-05 09:21:28',
                    'updated_at' => '2023-04-05 09:21:28',
                ),
            374 =>
                array(
                    'id' => 875,
                    'lang' => 'en',
                    'lang_key' => 'Revision Limit',
                    'lang_value' => 'Revision Limit',
                    'created_at' => '2023-04-05 09:21:28',
                    'updated_at' => '2023-04-05 09:21:28',
                ),
            375 =>
                array(
                    'id' => 876,
                    'lang' => 'en',
                    'lang_key' => 'Enter Revision Limit',
                    'lang_value' => 'Enter Revision Limit',
                    'created_at' => '2023-04-05 09:21:28',
                    'updated_at' => '2023-04-05 09:21:28',
                ),
            376 =>
                array(
                    'id' => 877,
                    'lang' => 'en',
                    'lang_key' => 'What is included section',
                    'lang_value' => 'What is included section',
                    'created_at' => '2023-04-05 09:21:28',
                    'updated_at' => '2023-04-05 09:21:28',
                ),
            377 =>
                array(
                    'id' => 878,
                    'lang' => 'en',
                    'lang_key' => 'Standard Package',
                    'lang_value' => 'Standard Package',
                    'created_at' => '2023-04-05 09:21:28',
                    'updated_at' => '2023-04-05 09:21:28',
                ),
            378 =>
                array(
                    'id' => 879,
                    'lang' => 'en',
                    'lang_key' => 'PREMIUM Package',
                    'lang_value' => 'PREMIUM Package',
                    'created_at' => '2023-04-05 09:21:28',
                    'updated_at' => '2023-04-05 09:21:28',
                ),
            379 =>
                array(
                    'id' => 880,
                    'lang' => 'en',
                    'lang_key' => 'Post Service',
                    'lang_value' => 'Post Service',
                    'created_at' => '2023-04-05 09:21:28',
                    'updated_at' => '2023-04-05 09:21:28',
                ),
            380 =>
                array(
                    'id' => 881,
                    'lang' => 'en',
                    'lang_key' => 'Service saved successfully',
                    'lang_value' => 'Service saved successfully',
                    'created_at' => '2023-04-05 09:26:41',
                    'updated_at' => '2023-04-05 09:26:41',
                ),
            381 =>
                array(
                    'id' => 882,
                    'lang' => 'en',
                    'lang_key' => 'Account Settings',
                    'lang_value' => 'Account Settings',
                    'created_at' => '2023-04-05 09:28:32',
                    'updated_at' => '2023-04-05 09:28:32',
                ),
            382 =>
                array(
                    'id' => 883,
                    'lang' => 'en',
                    'lang_key' => 'Bank Info',
                    'lang_value' => 'Bank Info',
                    'created_at' => '2023-04-05 09:28:32',
                    'updated_at' => '2023-04-05 09:28:32',
                ),
            383 =>
                array(
                    'id' => 884,
                    'lang' => 'en',
                    'lang_key' => 'Bank Name',
                    'lang_value' => 'Bank Name',
                    'created_at' => '2023-04-05 09:28:32',
                    'updated_at' => '2023-04-05 09:28:32',
                ),
            384 =>
                array(
                    'id' => 885,
                    'lang' => 'en',
                    'lang_key' => 'Enter your Bank name',
                    'lang_value' => 'Enter your Bank name',
                    'created_at' => '2023-04-05 09:28:32',
                    'updated_at' => '2023-04-05 09:28:32',
                ),
            385 =>
                array(
                    'id' => 886,
                    'lang' => 'en',
                    'lang_key' => 'Bank Account Name',
                    'lang_value' => 'Bank Account Name',
                    'created_at' => '2023-04-05 09:28:32',
                    'updated_at' => '2023-04-05 09:28:32',
                ),
            386 =>
                array(
                    'id' => 887,
                    'lang' => 'en',
                    'lang_key' => 'Enter Bank Account Name',
                    'lang_value' => 'Enter Bank Account Name',
                    'created_at' => '2023-04-05 09:28:32',
                    'updated_at' => '2023-04-05 09:28:32',
                ),
            387 =>
                array(
                    'id' => 888,
                    'lang' => 'en',
                    'lang_key' => 'Bank Account Number',
                    'lang_value' => 'Bank Account Number',
                    'created_at' => '2023-04-05 09:28:32',
                    'updated_at' => '2023-04-05 09:28:32',
                ),
            388 =>
                array(
                    'id' => 889,
                    'lang' => 'en',
                    'lang_key' => 'Enter Bank Account Number',
                    'lang_value' => 'Enter Bank Account Number',
                    'created_at' => '2023-04-05 09:28:32',
                    'updated_at' => '2023-04-05 09:28:32',
                ),
            389 =>
                array(
                    'id' => 890,
                    'lang' => 'en',
                    'lang_key' => 'Routing/IBAN/SWIFT/BIC number',
                    'lang_value' => 'Routing/IBAN/SWIFT/BIC number',
                    'created_at' => '2023-04-05 09:28:32',
                    'updated_at' => '2023-04-05 09:28:32',
                ),
            390 =>
                array(
                    'id' => 891,
                    'lang' => 'en',
                    'lang_key' => 'Enter Routing/IBAN/SWIFT/BIC number',
                    'lang_value' => 'Enter Routing/IBAN/SWIFT/BIC number',
                    'created_at' => '2023-04-05 09:28:32',
                    'updated_at' => '2023-04-05 09:28:32',
                ),
            391 =>
                array(
                    'id' => 892,
                    'lang' => 'en',
                    'lang_key' => 'Paypal Info',
                    'lang_value' => 'Paypal Info',
                    'created_at' => '2023-04-05 09:28:32',
                    'updated_at' => '2023-04-05 09:28:32',
                ),
            392 =>
                array(
                    'id' => 893,
                    'lang' => 'en',
                    'lang_key' => 'Account Name',
                    'lang_value' => 'Account Name',
                    'created_at' => '2023-04-05 09:28:32',
                    'updated_at' => '2023-04-05 09:28:32',
                ),
            393 =>
                array(
                    'id' => 894,
                    'lang' => 'en',
                    'lang_key' => 'Enter Your Account Name',
                    'lang_value' => 'Enter Your Account Name',
                    'created_at' => '2023-04-05 09:28:32',
                    'updated_at' => '2023-04-05 09:28:32',
                ),
            394 =>
                array(
                    'id' => 895,
                    'lang' => 'en',
                    'lang_key' => 'Account Email',
                    'lang_value' => 'Account Email',
                    'created_at' => '2023-04-05 09:28:32',
                    'updated_at' => '2023-04-05 09:28:32',
                ),
            395 =>
                array(
                    'id' => 896,
                    'lang' => 'en',
                    'lang_key' => 'Enter Account Email',
                    'lang_value' => 'Enter Account Email',
                    'created_at' => '2023-04-05 09:28:32',
                    'updated_at' => '2023-04-05 09:28:32',
                ),
            396 =>
                array(
                    'id' => 897,
                    'lang' => 'en',
                    'lang_key' => 'Not Recieved Yet',
                    'lang_value' => 'Not Recieved Yet',
                    'created_at' => '2023-04-05 09:29:04',
                    'updated_at' => '2023-04-05 09:29:04',
                ),
            397 =>
                array(
                    'id' => 898,
                    'lang' => 'en',
                    'lang_key' => 'Add Wallet Balance',
                    'lang_value' => 'Add Wallet Balance',
                    'created_at' => '2023-04-05 09:29:04',
                    'updated_at' => '2023-04-05 09:29:04',
                ),
            398 =>
                array(
                    'id' => 899,
                    'lang' => 'en',
                    'lang_key' => 'View Details',
                    'lang_value' => 'View Details',
                    'created_at' => '2023-04-05 09:29:04',
                    'updated_at' => '2023-04-05 09:29:04',
                ),
            399 =>
                array(
                    'id' => 900,
                    'lang' => 'en',
                    'lang_key' => 'Login as freelancer',
                    'lang_value' => 'Login as consultant',
                    'created_at' => '2023-04-05 09:29:04',
                    'updated_at' => '2023-04-05 09:31:14',
                ),
            400 =>
                array(
                    'id' => 901,
                    'lang' => 'en',
                    'lang_key' => 'Ban',
                    'lang_value' => 'Ban',
                    'created_at' => '2023-04-05 09:29:04',
                    'updated_at' => '2023-04-05 09:29:04',
                ),
            401 =>
                array(
                    'id' => 902,
                    'lang' => 'en',
                    'lang_key' => 'About This Service',
                    'lang_value' => 'About This Service',
                    'created_at' => '2023-04-05 09:31:30',
                    'updated_at' => '2023-04-05 09:31:30',
                ),
            402 =>
                array(
                    'id' => 903,
                    'lang' => 'en',
                    'lang_key' => 'BASIC Package - Popular',
                    'lang_value' => 'BASIC Package - Popular',
                    'created_at' => '2023-04-05 09:31:30',
                    'updated_at' => '2023-04-05 09:31:30',
                ),
            403 =>
                array(
                    'id' => 904,
                    'lang' => 'en',
                    'lang_key' => 'Days Delivery',
                    'lang_value' => 'Days Delivery',
                    'created_at' => '2023-04-05 09:31:30',
                    'updated_at' => '2023-04-05 09:31:30',
                ),
            404 =>
                array(
                    'id' => 905,
                    'lang' => 'en',
                    'lang_key' => 'Revisions',
                    'lang_value' => 'Revisions',
                    'created_at' => '2023-04-05 09:31:30',
                    'updated_at' => '2023-04-05 09:31:30',
                ),
            405 =>
                array(
                    'id' => 906,
                    'lang' => 'en',
                    'lang_key' => 'Whats Included',
                    'lang_value' => 'Whats Included',
                    'created_at' => '2023-04-05 09:31:30',
                    'updated_at' => '2023-04-05 09:31:30',
                ),
            406 =>
                array(
                    'id' => 907,
                    'lang' => 'en',
                    'lang_key' => 'You need be a client to order services',
                    'lang_value' => 'You need be a client to order services',
                    'created_at' => '2023-04-05 09:31:30',
                    'updated_at' => '2023-04-05 09:31:30',
                ),
            407 =>
                array(
                    'id' => 908,
                    'lang' => 'en',
                    'lang_key' => 'STANDARD Package - Recommended',
                    'lang_value' => 'STANDARD Package - Recommended',
                    'created_at' => '2023-04-05 09:31:30',
                    'updated_at' => '2023-04-05 09:31:30',
                ),
            408 =>
                array(
                    'id' => 909,
                    'lang' => 'en',
                    'lang_key' => 'PREMIUM Package - Must for Pro',
                    'lang_value' => 'PREMIUM Package - Must for Pro',
                    'created_at' => '2023-04-05 09:31:30',
                    'updated_at' => '2023-04-05 09:31:30',
                ),
            409 =>
                array(
                    'id' => 910,
                    'lang' => 'en',
                    'lang_key' => 'Continue',
                    'lang_value' => 'Continue',
                    'created_at' => '2023-04-05 09:31:31',
                    'updated_at' => '2023-04-05 09:31:31',
                ),
            410 =>
                array(
                    'id' => 911,
                    'lang' => 'en',
                    'lang_key' => 'Share Service',
                    'lang_value' => 'Share Service',
                    'created_at' => '2023-04-05 09:31:31',
                    'updated_at' => '2023-04-05 09:31:31',
                ),
            411 =>
                array(
                    'id' => 912,
                    'lang' => 'en',
                    'lang_key' => 'Suggested Services',
                    'lang_value' => 'Suggested Services',
                    'created_at' => '2023-04-05 09:31:31',
                    'updated_at' => '2023-04-05 09:31:31',
                ),
            412 =>
                array(
                    'id' => 913,
                    'lang' => 'en',
                    'lang_key' => 'Service Package Purchase by Offline Payment',
                    'lang_value' => 'Service Package Purchase by Offline Payment',
                    'created_at' => '2023-04-05 09:31:31',
                    'updated_at' => '2023-04-05 09:31:31',
                ),
            413 =>
                array(
                    'id' => 914,
                    'lang' => 'en',
                    'lang_key' => 'Total',
                    'lang_value' => 'Total',
                    'created_at' => '2023-04-05 09:39:23',
                    'updated_at' => '2023-04-05 09:39:23',
                ),
            414 =>
                array(
                    'id' => 915,
                    'lang' => 'en',
                    'lang_key' => 'freelancers found for',
                    'lang_value' => 'freelancers found for',
                    'created_at' => '2023-04-05 09:39:23',
                    'updated_at' => '2023-04-05 09:39:23',
                ),
            415 =>
                array(
                    'id' => 916,
                    'lang' => 'en',
                    'lang_key' => 'Edit Package',
                    'lang_value' => 'Edit Package',
                    'created_at' => '2023-04-05 09:56:21',
                    'updated_at' => '2023-04-05 09:56:21',
                ),
            416 =>
                array(
                    'id' => 917,
                    'lang' => 'en',
                    'lang_key' => 'Update Package',
                    'lang_value' => 'Update Package',
                    'created_at' => '2023-04-05 09:56:21',
                    'updated_at' => '2023-04-05 09:56:21',
                ),
            417 =>
                array(
                    'id' => 918,
                    'lang' => 'en',
                    'lang_key' => 'Eg. 0.50',
                    'lang_value' => 'Eg. 0.50',
                    'created_at' => '2023-04-05 09:59:33',
                    'updated_at' => '2023-04-05 09:59:33',
                ),
            418 =>
                array(
                    'id' => 919,
                    'lang' => 'en',
                    'lang_key' => 'Publish Package ?',
                    'lang_value' => 'Publish Package ?',
                    'created_at' => '2023-04-05 09:59:33',
                    'updated_at' => '2023-04-05 09:59:33',
                ),
            419 =>
                array(
                    'id' => 920,
                    'lang' => 'en',
                    'lang_key' => 'Verification',
                    'lang_value' => 'Verification',
                    'created_at' => '2023-04-05 10:02:12',
                    'updated_at' => '2023-04-05 10:02:12',
                ),
            420 =>
                array(
                    'id' => 921,
                    'lang' => 'en',
                    'lang_key' => 'Account Information',
                    'lang_value' => 'Account Information',
                    'created_at' => '2023-04-05 10:02:12',
                    'updated_at' => '2023-04-05 10:02:12',
                ),
            421 =>
                array(
                    'id' => 922,
                    'lang' => 'en',
                    'lang_key' => 'Mobile',
                    'lang_value' => 'Mobile',
                    'created_at' => '2023-04-05 10:02:12',
                    'updated_at' => '2023-04-05 10:02:12',
                ),
            422 =>
                array(
                    'id' => 923,
                    'lang' => 'en',
                    'lang_key' => 'Location',
                    'lang_value' => 'Location',
                    'created_at' => '2023-04-05 10:02:12',
                    'updated_at' => '2023-04-05 10:02:12',
                ),
            423 =>
                array(
                    'id' => 924,
                    'lang' => 'en',
                    'lang_key' => 'Running Package',
                    'lang_value' => 'Running Package',
                    'created_at' => '2023-04-05 10:02:12',
                    'updated_at' => '2023-04-05 10:02:12',
                ),
            424 =>
                array(
                    'id' => 925,
                    'lang' => 'en',
                    'lang_key' => 'Work experiences',
                    'lang_value' => 'Work experiences',
                    'created_at' => '2023-04-05 10:02:12',
                    'updated_at' => '2023-04-05 10:02:12',
                ),
            425 =>
                array(
                    'id' => 926,
                    'lang' => 'en',
                    'lang_key' => 'Wallet balance has been added',
                    'lang_value' => 'Wallet balance has been added',
                    'created_at' => '2023-04-05 10:02:40',
                    'updated_at' => '2023-04-05 10:02:40',
                ),
            426 =>
                array(
                    'id' => 927,
                    'lang' => 'en',
                    'lang_key' => 'Your session has expired',
                    'lang_value' => 'Your session has expired',
                    'created_at' => '2023-04-05 10:05:36',
                    'updated_at' => '2023-04-05 10:05:36',
                ),
            427 =>
                array(
                    'id' => 928,
                    'lang' => 'en',
                    'lang_key' => 'Please refresh the page',
                    'lang_value' => 'Please refresh the page',
                    'created_at' => '2023-04-05 10:05:36',
                    'updated_at' => '2023-04-05 10:05:36',
                ),
            428 =>
                array(
                    'id' => 929,
                    'lang' => 'en',
                    'lang_key' => 'Purchase This Package',
                    'lang_value' => 'Purchase This Package',
                    'created_at' => '2023-04-05 10:07:59',
                    'updated_at' => '2023-04-05 10:07:59',
                ),
            429 =>
                array(
                    'id' => 930,
                    'lang' => 'en',
                    'lang_key' => 'Payment System',
                    'lang_value' => 'Payment System',
                    'created_at' => '2023-04-05 10:08:07',
                    'updated_at' => '2023-04-05 10:08:07',
                ),
            430 =>
                array(
                    'id' => 931,
                    'lang' => 'en',
                    'lang_key' => 'Pay',
                    'lang_value' => 'Pay',
                    'created_at' => '2023-04-05 10:08:07',
                    'updated_at' => '2023-04-05 10:08:07',
                ),
            431 =>
                array(
                    'id' => 932,
                    'lang' => 'en',
                    'lang_key' => 'ScholarshipsAustralia',
                    'lang_value' => 'ScholarshipsAustralia',
                    'created_at' => '2023-04-06 10:37:11',
                    'updated_at' => '2023-04-06 10:37:11',
                ),
            432 =>
                array(
                    'id' => 933,
                    'lang' => 'en',
                    'lang_key' => 'Scholarships Australia',
                    'lang_value' => 'Scholarships Australia',
                    'created_at' => '2023-04-06 10:37:31',
                    'updated_at' => '2023-04-06 10:37:31',
                ),
            433 =>
                array(
                    'id' => 934,
                    'lang' => 'en',
                    'lang_key' => 'Payment completed',
                    'lang_value' => 'Payment completed',
                    'created_at' => '2023-04-06 12:36:15',
                    'updated_at' => '2023-04-06 12:36:15',
                ),
            434 =>
                array(
                    'id' => 935,
                    'lang' => 'en',
                    'lang_key' => 'Recharge',
                    'lang_value' => 'Recharge',
                    'created_at' => '2023-04-06 12:36:16',
                    'updated_at' => '2023-04-06 12:36:16',
                ),
            435 =>
                array(
                    'id' => 936,
                    'lang' => 'en',
                    'lang_key' => 'A new package has been purchased by',
                    'lang_value' => 'A new package has been purchased by',
                    'created_at' => '2023-04-06 12:36:52',
                    'updated_at' => '2023-04-06 12:36:52',
                ),
            436 =>
                array(
                    'id' => 937,
                    'lang' => 'en',
                    'lang_key' => 'A new package has been purchased',
                    'lang_value' => 'A new package has been purchased',
                    'created_at' => '2023-04-06 12:36:52',
                    'updated_at' => '2023-04-06 12:36:52',
                ),
            437 =>
                array(
                    'id' => 938,
                    'lang' => 'en',
                    'lang_key' => 'Go to link',
                    'lang_value' => 'Go to link',
                    'created_at' => '2023-04-06 12:36:52',
                    'updated_at' => '2023-04-06 12:36:52',
                ),
            438 =>
                array(
                    'id' => 939,
                    'lang' => 'en',
                    'lang_key' => 'Payment has been done successfully',
                    'lang_value' => 'Payment has been done successfully',
                    'created_at' => '2023-04-06 12:36:52',
                    'updated_at' => '2023-04-06 12:36:52',
                ),
            439 =>
                array(
                    'id' => 940,
                    'lang' => 'en',
                    'lang_key' => 'Project Name',
                    'lang_value' => 'Project Name',
                    'created_at' => '2023-04-06 12:44:08',
                    'updated_at' => '2023-04-06 12:44:08',
                ),
            440 =>
                array(
                    'id' => 941,
                    'lang' => 'en',
                    'lang_key' => 'Reviewer Name',
                    'lang_value' => 'Reviewer Name',
                    'created_at' => '2023-04-06 12:44:08',
                    'updated_at' => '2023-04-06 12:44:08',
                ),
            441 =>
                array(
                    'id' => 942,
                    'lang' => 'en',
                    'lang_key' => 'Your earnings history',
                    'lang_value' => 'Your earnings history',
                    'created_at' => '2023-04-06 12:44:28',
                    'updated_at' => '2023-04-06 12:44:28',
                ),
            442 =>
                array(
                    'id' => 943,
                    'lang' => 'en',
                    'lang_key' => 'Your Earnings',
                    'lang_value' => 'Your Earnings',
                    'created_at' => '2023-04-06 12:44:28',
                    'updated_at' => '2023-04-06 12:44:28',
                ),
            443 =>
                array(
                    'id' => 944,
                    'lang' => 'en',
                    'lang_key' => 'Admin Charge',
                    'lang_value' => 'Admin Charge',
                    'created_at' => '2023-04-06 12:44:28',
                    'updated_at' => '2023-04-06 12:44:28',
                ),
            444 =>
                array(
                    'id' => 945,
                    'lang' => 'en',
                    'lang_key' => 'Your Message..',
                    'lang_value' => 'Your Message..',
                    'created_at' => '2023-04-06 12:52:28',
                    'updated_at' => '2023-04-06 12:52:28',
                ),
            445 =>
                array(
                    'id' => 946,
                    'lang' => 'en',
                    'lang_key' => 'Running Projects With You',
                    'lang_value' => 'Running Projects With You',
                    'created_at' => '2023-04-06 12:52:28',
                    'updated_at' => '2023-04-06 12:52:28',
                ),
            446 =>
                array(
                    'id' => 947,
                    'lang' => 'en',
                    'lang_key' => 'Completed Projects With You',
                    'lang_value' => 'Completed Projects With You',
                    'created_at' => '2023-04-06 12:52:28',
                    'updated_at' => '2023-04-06 12:52:28',
                ),
            447 =>
                array(
                    'id' => 948,
                    'lang' => 'en',
                    'lang_key' => 'Load More',
                    'lang_value' => 'Load More',
                    'created_at' => '2023-04-06 12:54:07',
                    'updated_at' => '2023-04-06 12:54:07',
                ),
            448 =>
                array(
                    'id' => 949,
                    'lang' => 'en',
                    'lang_key' => 'List of service sold',
                    'lang_value' => 'List of service sold',
                    'created_at' => '2023-04-06 12:54:33',
                    'updated_at' => '2023-04-06 12:54:33',
                ),
            449 =>
                array(
                    'id' => 950,
                    'lang' => 'en',
                    'lang_key' => 'My Earning',
                    'lang_value' => 'My Earning',
                    'created_at' => '2023-04-06 12:54:33',
                    'updated_at' => '2023-04-06 12:54:33',
                ),
            450 =>
                array(
                    'id' => 951,
                    'lang' => 'en',
                    'lang_key' => 'Make a withdrawal',
                    'lang_value' => 'Make a withdrawal',
                    'created_at' => '2023-04-06 12:55:31',
                    'updated_at' => '2023-04-06 12:55:31',
                ),
            451 =>
                array(
                    'id' => 952,
                    'lang' => 'en',
                    'lang_key' => 'Your available balance is',
                    'lang_value' => 'Your available balance is',
                    'created_at' => '2023-04-06 12:55:31',
                    'updated_at' => '2023-04-06 12:55:31',
                ),
            452 =>
                array(
                    'id' => 953,
                    'lang' => 'en',
                    'lang_key' => 'Minimum withdrawal amount is',
                    'lang_value' => 'Minimum withdrawal amount is',
                    'created_at' => '2023-04-06 12:55:31',
                    'updated_at' => '2023-04-06 12:55:31',
                ),
            453 =>
                array(
                    'id' => 954,
                    'lang' => 'en',
                    'lang_key' => 'Withdrawal amount',
                    'lang_value' => 'Withdrawal amount',
                    'created_at' => '2023-04-06 12:55:31',
                    'updated_at' => '2023-04-06 12:55:31',
                ),
            454 =>
                array(
                    'id' => 955,
                    'lang' => 'en',
                    'lang_key' => 'Enter withdrawal amount',
                    'lang_value' => 'Enter withdrawal amount',
                    'created_at' => '2023-04-06 12:55:31',
                    'updated_at' => '2023-04-06 12:55:31',
                ),
            455 =>
                array(
                    'id' => 956,
                    'lang' => 'en',
                    'lang_key' => 'Select a payment method',
                    'lang_value' => 'Select a payment method',
                    'created_at' => '2023-04-06 12:55:31',
                    'updated_at' => '2023-04-06 12:55:31',
                ),
            456 =>
                array(
                    'id' => 957,
                    'lang' => 'en',
                    'lang_key' => 'Bank',
                    'lang_value' => 'Bank',
                    'created_at' => '2023-04-06 12:55:31',
                    'updated_at' => '2023-04-06 12:55:31',
                ),
            457 =>
                array(
                    'id' => 958,
                    'lang' => 'en',
                    'lang_key' => 'Any message',
                    'lang_value' => 'Any message',
                    'created_at' => '2023-04-06 12:55:31',
                    'updated_at' => '2023-04-06 12:55:31',
                ),
            458 =>
                array(
                    'id' => 959,
                    'lang' => 'en',
                    'lang_key' => 'Request for withdraw',
                    'lang_value' => 'Request for withdraw',
                    'created_at' => '2023-04-06 12:55:31',
                    'updated_at' => '2023-04-06 12:55:31',
                ),
            459 =>
                array(
                    'id' => 960,
                    'lang' => 'en',
                    'lang_key' => 'A new withdrawal has been requested by',
                    'lang_value' => 'A new withdrawal has been requested by',
                    'created_at' => '2023-04-06 12:56:39',
                    'updated_at' => '2023-04-06 12:56:39',
                ),
            460 =>
                array(
                    'id' => 961,
                    'lang' => 'en',
                    'lang_key' => 'A new withdrawal has been requested',
                    'lang_value' => 'A new withdrawal has been requested',
                    'created_at' => '2023-04-06 12:56:39',
                    'updated_at' => '2023-04-06 12:56:39',
                ),
            461 =>
                array(
                    'id' => 962,
                    'lang' => 'en',
                    'lang_key' => 'Withdrawal request has been sent successfully',
                    'lang_value' => 'Withdrawal request has been sent successfully',
                    'created_at' => '2023-04-06 12:56:39',
                    'updated_at' => '2023-04-06 12:56:39',
                ),
            462 =>
                array(
                    'id' => 963,
                    'lang' => 'en',
                    'lang_key' => 'Your withdrawal history',
                    'lang_value' => 'Your withdrawal history',
                    'created_at' => '2023-04-06 12:56:39',
                    'updated_at' => '2023-04-06 12:56:39',
                ),
            463 =>
                array(
                    'id' => 964,
                    'lang' => 'en',
                    'lang_key' => 'N/A',
                    'lang_value' => 'N/A',
                    'created_at' => '2023-04-06 12:56:39',
                    'updated_at' => '2023-04-06 12:56:39',
                ),
            464 =>
                array(
                    'id' => 965,
                    'lang' => 'en',
                    'lang_key' => 'Pending',
                    'lang_value' => 'Pending',
                    'created_at' => '2023-04-06 12:56:39',
                    'updated_at' => '2023-04-06 12:56:39',
                ),
            465 =>
                array(
                    'id' => 966,
                    'lang' => 'en',
                    'lang_key' => 'Max',
                    'lang_value' => 'Max',
                    'created_at' => '2023-04-06 12:58:06',
                    'updated_at' => '2023-04-06 12:58:06',
                ),
            466 =>
                array(
                    'id' => 967,
                    'lang' => 'en',
                    'lang_key' => 'Specialist At',
                    'lang_value' => 'Specialist At',
                    'created_at' => '2023-04-06 12:58:06',
                    'updated_at' => '2023-04-06 12:58:06',
                ),
            467 =>
                array(
                    'id' => 968,
                    'lang' => 'en',
                    'lang_key' => 'Contact',
                    'lang_value' => 'Contact',
                    'created_at' => '2023-04-06 12:58:06',
                    'updated_at' => '2023-04-06 12:58:06',
                ),
            468 =>
                array(
                    'id' => 969,
                    'lang' => 'en',
                    'lang_key' => 'Portfolio',
                    'lang_value' => 'Portfolio',
                    'created_at' => '2023-04-06 12:58:06',
                    'updated_at' => '2023-04-06 12:58:06',
                ),
            469 =>
                array(
                    'id' => 970,
                    'lang' => 'en',
                    'lang_key' => 'Portfolio title',
                    'lang_value' => 'Portfolio title',
                    'created_at' => '2023-04-06 12:58:06',
                    'updated_at' => '2023-04-06 12:58:06',
                ),
            470 =>
                array(
                    'id' => 971,
                    'lang' => 'en',
                    'lang_key' => 'Portfolio Category',
                    'lang_value' => 'Portfolio Category',
                    'created_at' => '2023-04-06 12:58:06',
                    'updated_at' => '2023-04-06 12:58:06',
                ),
            471 =>
                array(
                    'id' => 972,
                    'lang' => 'en',
                    'lang_key' => 'Add Portfolio',
                    'lang_value' => 'Add Portfolio',
                    'created_at' => '2023-04-06 12:58:06',
                    'updated_at' => '2023-04-06 12:58:06',
                ),
            472 =>
                array(
                    'id' => 973,
                    'lang' => 'en',
                    'lang_key' => 'Work Experience',
                    'lang_value' => 'Work Experience',
                    'created_at' => '2023-04-06 12:58:06',
                    'updated_at' => '2023-04-06 12:58:06',
                ),
            473 =>
                array(
                    'id' => 974,
                    'lang' => 'en',
                    'lang_key' => 'Company Name',
                    'lang_value' => 'Company Name',
                    'created_at' => '2023-04-06 12:58:06',
                    'updated_at' => '2023-04-06 12:58:06',
                ),
            474 =>
                array(
                    'id' => 975,
                    'lang' => 'en',
                    'lang_key' => 'Joining date',
                    'lang_value' => 'Joining date',
                    'created_at' => '2023-04-06 12:58:06',
                    'updated_at' => '2023-04-06 12:58:06',
                ),
            475 =>
                array(
                    'id' => 976,
                    'lang' => 'en',
                    'lang_key' => 'Select Date',
                    'lang_value' => 'Select Date',
                    'created_at' => '2023-04-06 12:58:06',
                    'updated_at' => '2023-04-06 12:58:06',
                ),
            476 =>
                array(
                    'id' => 977,
                    'lang' => 'en',
                    'lang_key' => 'currently working here',
                    'lang_value' => 'currently working here',
                    'created_at' => '2023-04-06 12:58:06',
                    'updated_at' => '2023-04-06 12:58:06',
                ),
            477 =>
                array(
                    'id' => 978,
                    'lang' => 'en',
                    'lang_key' => 'Leaving date',
                    'lang_value' => 'Leaving date',
                    'created_at' => '2023-04-06 12:58:06',
                    'updated_at' => '2023-04-06 12:58:06',
                ),
            478 =>
                array(
                    'id' => 979,
                    'lang' => 'en',
                    'lang_key' => 'Company Website',
                    'lang_value' => 'Company Website',
                    'created_at' => '2023-04-06 12:58:06',
                    'updated_at' => '2023-04-06 12:58:06',
                ),
            479 =>
                array(
                    'id' => 980,
                    'lang' => 'en',
                    'lang_key' => 'Designation',
                    'lang_value' => 'Designation',
                    'created_at' => '2023-04-06 12:58:06',
                    'updated_at' => '2023-04-06 12:58:06',
                ),
            480 =>
                array(
                    'id' => 981,
                    'lang' => 'en',
                    'lang_key' => 'Company Location',
                    'lang_value' => 'Company Location',
                    'created_at' => '2023-04-06 12:58:06',
                    'updated_at' => '2023-04-06 12:58:06',
                ),
            481 =>
                array(
                    'id' => 982,
                    'lang' => 'en',
                    'lang_key' => 'Add Work Experience',
                    'lang_value' => 'Add Work Experience',
                    'created_at' => '2023-04-06 12:58:07',
                    'updated_at' => '2023-04-06 12:58:07',
                ),
            482 =>
                array(
                    'id' => 983,
                    'lang' => 'en',
                    'lang_key' => 'Education Information',
                    'lang_value' => 'Education Information',
                    'created_at' => '2023-04-06 12:58:07',
                    'updated_at' => '2023-04-06 12:58:07',
                ),
            483 =>
                array(
                    'id' => 984,
                    'lang' => 'en',
                    'lang_key' => 'School Name',
                    'lang_value' => 'School Name',
                    'created_at' => '2023-04-06 12:58:07',
                    'updated_at' => '2023-04-06 12:58:07',
                ),
            484 =>
                array(
                    'id' => 985,
                    'lang' => 'en',
                    'lang_key' => 'Degree',
                    'lang_value' => 'Degree',
                    'created_at' => '2023-04-06 12:58:07',
                    'updated_at' => '2023-04-06 12:58:07',
                ),
            485 =>
                array(
                    'id' => 986,
                    'lang' => 'en',
                    'lang_key' => 'Ex. Bachelor of Science',
                    'lang_value' => 'Ex. Bachelor of Science',
                    'created_at' => '2023-04-06 12:58:07',
                    'updated_at' => '2023-04-06 12:58:07',
                ),
            486 =>
                array(
                    'id' => 987,
                    'lang' => 'en',
                    'lang_key' => 'Passing Year',
                    'lang_value' => 'Passing Year',
                    'created_at' => '2023-04-06 12:58:07',
                    'updated_at' => '2023-04-06 12:58:07',
                ),
            487 =>
                array(
                    'id' => 988,
                    'lang' => 'en',
                    'lang_key' => 'Ex. 2008',
                    'lang_value' => 'Ex. 2008',
                    'created_at' => '2023-04-06 12:58:07',
                    'updated_at' => '2023-04-06 12:58:07',
                ),
            488 =>
                array(
                    'id' => 989,
                    'lang' => 'en',
                    'lang_key' => 'Add Education Information',
                    'lang_value' => 'Add Education Information',
                    'created_at' => '2023-04-06 12:58:07',
                    'updated_at' => '2023-04-06 12:58:07',
                ),
            489 =>
                array(
                    'id' => 990,
                    'lang' => 'en',
                    'lang_key' => 'Edit Service',
                    'lang_value' => 'Edit Service',
                    'created_at' => '2023-04-06 14:06:38',
                    'updated_at' => '2023-04-06 14:06:38',
                ),
            490 =>
                array(
                    'id' => 991,
                    'lang' => 'en',
                    'lang_key' => 'Enter Basic Package Price',
                    'lang_value' => 'Enter Basic Package Price',
                    'created_at' => '2023-04-06 14:06:38',
                    'updated_at' => '2023-04-06 14:06:38',
                ),
            491 =>
                array(
                    'id' => 992,
                    'lang' => 'en',
                    'lang_key' => 'Enter Devilery Within',
                    'lang_value' => 'Enter Devilery Within',
                    'created_at' => '2023-04-06 14:06:38',
                    'updated_at' => '2023-04-06 14:06:38',
                ),
            492 =>
                array(
                    'id' => 993,
                    'lang' => 'en',
                    'lang_key' => 'Update Service',
                    'lang_value' => 'Update Service',
                    'created_at' => '2023-04-06 14:06:38',
                    'updated_at' => '2023-04-06 14:06:38',
                ),
            493 =>
                array(
                    'id' => 994,
                    'lang' => 'en',
                    'lang_key' => 'Service updated successfully',
                    'lang_value' => 'Service updated successfully',
                    'created_at' => '2023-04-06 14:07:24',
                    'updated_at' => '2023-04-06 14:07:24',
                ),
            494 =>
                array(
                    'id' => 995,
                    'lang' => 'en',
                    'lang_key' => 'A new Project has been created by',
                    'lang_value' => 'A new Project has been created by',
                    'created_at' => '2023-04-06 14:26:19',
                    'updated_at' => '2023-04-06 14:26:19',
                ),
            495 =>
                array(
                    'id' => 996,
                    'lang' => 'en',
                    'lang_key' => 'A new Project has been created',
                    'lang_value' => 'A new Project has been created',
                    'created_at' => '2023-04-06 14:26:19',
                    'updated_at' => '2023-04-06 14:26:19',
                ),
            496 =>
                array(
                    'id' => 997,
                    'lang' => 'en',
                    'lang_key' => 'Project has been created successfully',
                    'lang_value' => 'Project has been created successfully',
                    'created_at' => '2023-04-06 14:26:19',
                    'updated_at' => '2023-04-06 14:26:19',
                ),
            497 =>
                array(
                    'id' => 998,
                    'lang' => 'en',
                    'lang_key' => 'Open',
                    'lang_value' => 'Open',
                    'created_at' => '2023-04-06 14:26:19',
                    'updated_at' => '2023-04-06 14:26:19',
                ),
            498 =>
                array(
                    'id' => 999,
                    'lang' => 'en',
                    'lang_key' => 'Total Bids',
                    'lang_value' => 'Total Bids',
                    'created_at' => '2023-04-06 14:26:19',
                    'updated_at' => '2023-04-06 14:26:19',
                ),
            499 =>
                array(
                    'id' => 1000,
                    'lang' => 'en',
                    'lang_key' => 'See All Bidders',
                    'lang_value' => 'See All Bidders',
                    'created_at' => '2023-04-06 14:26:19',
                    'updated_at' => '2023-04-06 14:26:19',
                ),
        ));
        DB::table('translations')->insert(array(
            0 =>
                array(
                    'id' => 1001,
                    'lang' => 'en',
                    'lang_key' => 'Bids for',
                    'lang_value' => 'Bids for',
                    'created_at' => '2023-04-06 14:26:31',
                    'updated_at' => '2023-04-06 14:26:31',
                ),
            1 =>
                array(
                    'id' => 1002,
                    'lang' => 'en',
                    'lang_key' => 'Confirm Hiring',
                    'lang_value' => 'Confirm Hiring',
                    'created_at' => '2023-04-06 14:26:31',
                    'updated_at' => '2023-04-06 14:26:31',
                ),
            2 =>
                array(
                    'id' => 1003,
                    'lang' => 'en',
                    'lang_key' => 'Hire Now',
                    'lang_value' => 'Hire Now',
                    'created_at' => '2023-04-06 14:26:31',
                    'updated_at' => '2023-04-06 14:26:31',
                ),
            3 =>
                array(
                    'id' => 1004,
                    'lang' => 'en',
                    'lang_key' => 'Mark as read',
                    'lang_value' => 'Mark as read',
                    'created_at' => '2023-04-06 14:39:58',
                    'updated_at' => '2023-04-06 14:39:58',
                ),
            4 =>
                array(
                    'id' => 1005,
                    'lang' => 'en',
                    'lang_key' => 'List of srevices requested for cancellation',
                    'lang_value' => 'List of srevices requested for cancellation',
                    'created_at' => '2023-04-06 14:41:25',
                    'updated_at' => '2023-04-06 14:41:25',
                ),
            5 =>
                array(
                    'id' => 1006,
                    'lang' => 'en',
                    'lang_key' => 'Refunded',
                    'lang_value' => 'Refunded',
                    'created_at' => '2023-04-06 14:41:25',
                    'updated_at' => '2023-04-06 14:41:25',
                ),
            6 =>
                array(
                    'id' => 1007,
                    'lang' => 'en',
                    'lang_key' => 'Login as client',
                    'lang_value' => 'Login as client',
                    'created_at' => '2023-04-06 15:42:02',
                    'updated_at' => '2023-04-06 15:42:02',
                ),
            7 =>
                array(
                    'id' => 1008,
                    'lang' => 'en',
                    'lang_key' => 'Attachments',
                    'lang_value' => 'Attachments',
                    'created_at' => '2023-04-06 15:44:15',
                    'updated_at' => '2023-04-06 15:44:15',
                ),
            8 =>
                array(
                    'id' => 1009,
                    'lang' => 'en',
                    'lang_key' => 'Bids',
                    'lang_value' => 'Bids',
                    'created_at' => '2023-04-06 15:44:15',
                    'updated_at' => '2023-04-06 15:44:15',
                ),
            9 =>
                array(
                    'id' => 1010,
                    'lang' => 'en',
                    'lang_key' => 'Share Project',
                    'lang_value' => 'Share Project',
                    'created_at' => '2023-04-06 15:44:15',
                    'updated_at' => '2023-04-06 15:44:15',
                ),
            10 =>
                array(
                    'id' => 1011,
                    'lang' => 'en',
                    'lang_key' => 'Bookmark Project',
                    'lang_value' => 'Bookmark Project',
                    'created_at' => '2023-04-06 15:44:15',
                    'updated_at' => '2023-04-06 15:44:15',
                ),
            11 =>
                array(
                    'id' => 1012,
                    'lang' => 'en',
                    'lang_key' => 'You are visiting this details as an Admin. For place a bid you need to have a freelancer account.',
                    'lang_value' => 'You are visiting this details as an Admin. For place a bid you need to have a freelancer account.',
                    'created_at' => '2023-04-06 15:44:15',
                    'updated_at' => '2023-04-06 15:44:15',
                ),
            12 =>
                array(
                    'id' => 1013,
                    'lang' => 'en',
                    'lang_key' => 'About This Client',
                    'lang_value' => 'About This Client',
                    'created_at' => '2023-04-06 15:44:15',
                    'updated_at' => '2023-04-06 15:44:15',
                ),
            13 =>
                array(
                    'id' => 1014,
                    'lang' => 'en',
                    'lang_key' => 'jobs posted',
                    'lang_value' => 'jobs posted',
                    'created_at' => '2023-04-06 15:44:16',
                    'updated_at' => '2023-04-06 15:44:16',
                ),
            14 =>
                array(
                    'id' => 1015,
                    'lang' => 'en',
                    'lang_key' => 'Similar Projects',
                    'lang_value' => 'Similar Projects',
                    'created_at' => '2023-04-06 15:44:16',
                    'updated_at' => '2023-04-06 15:44:16',
                ),
            15 =>
                array(
                    'id' => 1016,
                    'lang' => 'en',
                    'lang_key' => 'Bid For Project',
                    'lang_value' => 'Bid For Project',
                    'created_at' => '2023-04-06 15:44:16',
                    'updated_at' => '2023-04-06 15:44:16',
                ),
            16 =>
                array(
                    'id' => 1017,
                    'lang' => 'en',
                    'lang_key' => 'Edit Project',
                    'lang_value' => 'Edit Project',
                    'created_at' => '2023-04-06 17:10:54',
                    'updated_at' => '2023-04-06 17:10:54',
                ),
            17 =>
                array(
                    'id' => 1018,
                    'lang' => 'en',
                    'lang_key' => 'Update project info',
                    'lang_value' => 'Update project info',
                    'created_at' => '2023-04-06 17:10:54',
                    'updated_at' => '2023-04-06 17:10:54',
                ),
            18 =>
                array(
                    'id' => 1019,
                    'lang' => 'en',
                    'lang_key' => 'Update Project',
                    'lang_value' => 'Update Project',
                    'created_at' => '2023-04-06 17:10:54',
                    'updated_at' => '2023-04-06 17:10:54',
                ),
            19 =>
                array(
                    'id' => 1020,
                    'lang' => 'en',
                    'lang_key' => 'Project has been updated successfully',
                    'lang_value' => 'Project has been updated successfully',
                    'created_at' => '2023-04-06 17:11:23',
                    'updated_at' => '2023-04-06 17:11:23',
                ),
            20 =>
                array(
                    'id' => 1021,
                    'lang' => 'en',
                    'lang_key' => 'No attachment',
                    'lang_value' => 'No attachment',
                    'created_at' => '2023-04-06 17:14:10',
                    'updated_at' => '2023-04-06 17:14:10',
                ),
            21 =>
                array(
                    'id' => 1022,
                    'lang' => 'en',
                    'lang_key' => 'Place Bid',
                    'lang_value' => 'Place Bid',
                    'created_at' => '2023-04-06 17:14:10',
                    'updated_at' => '2023-04-06 17:14:10',
                ),
            22 =>
                array(
                    'id' => 1023,
                    'lang' => 'en',
                    'lang_key' => 'Place Bid Price',
                    'lang_value' => 'Place Bid Price',
                    'created_at' => '2023-04-06 17:14:34',
                    'updated_at' => '2023-04-06 17:14:34',
                ),
            23 =>
                array(
                    'id' => 1024,
                    'lang' => 'en',
                    'lang_key' => 'Enter your price',
                    'lang_value' => 'Enter your price',
                    'created_at' => '2023-04-06 17:14:34',
                    'updated_at' => '2023-04-06 17:14:34',
                ),
            24 =>
                array(
                    'id' => 1025,
                    'lang' => 'en',
                    'lang_key' => 'Cover Letter',
                    'lang_value' => 'Cover Letter',
                    'created_at' => '2023-04-06 17:14:34',
                    'updated_at' => '2023-04-06 17:14:34',
                ),
            25 =>
                array(
                    'id' => 1026,
                    'lang' => 'en',
                    'lang_key' => 'Submit',
                    'lang_value' => 'Submit',
                    'created_at' => '2023-04-06 17:14:34',
                    'updated_at' => '2023-04-06 17:14:34',
                ),
            26 =>
                array(
                    'id' => 1027,
                    'lang' => 'en',
                    'lang_key' => 'A new bid has been submitted by',
                    'lang_value' => 'A new bid has been submitted by',
                    'created_at' => '2023-04-06 17:15:17',
                    'updated_at' => '2023-04-06 17:15:17',
                ),
            27 =>
                array(
                    'id' => 1028,
                    'lang' => 'en',
                    'lang_key' => 'A new bid has been submitted',
                    'lang_value' => 'A new bid has been submitted',
                    'created_at' => '2023-04-06 17:15:17',
                    'updated_at' => '2023-04-06 17:15:17',
                ),
            28 =>
                array(
                    'id' => 1029,
                    'lang' => 'en',
                    'lang_key' => 'Bid has been submitted successfully',
                    'lang_value' => 'Bid has been submitted successfully',
                    'created_at' => '2023-04-06 17:15:17',
                    'updated_at' => '2023-04-06 17:15:17',
                ),
            29 =>
                array(
                    'id' => 1030,
                    'lang' => 'en',
                    'lang_key' => 'You have already submitted bid for this project.',
                    'lang_value' => 'You have already submitted bid for this project.',
                    'created_at' => '2023-04-06 17:15:17',
                    'updated_at' => '2023-04-06 17:15:17',
                ),
            30 =>
                array(
                    'id' => 1031,
                    'lang' => 'en',
                    'lang_key' => 'Bidded Projects',
                    'lang_value' => 'Bidded Projects',
                    'created_at' => '2023-04-06 17:15:49',
                    'updated_at' => '2023-04-06 17:15:49',
                ),
            31 =>
                array(
                    'id' => 1032,
                    'lang' => 'en',
                    'lang_key' => 'Not Hired Yet',
                    'lang_value' => 'Not Hired Yet',
                    'created_at' => '2023-04-06 17:15:49',
                    'updated_at' => '2023-04-06 17:15:49',
                ),
            32 =>
                array(
                    'id' => 1033,
                    'lang' => 'en',
                    'lang_key' => 'My bid',
                    'lang_value' => 'My bid',
                    'created_at' => '2023-04-06 17:15:49',
                    'updated_at' => '2023-04-06 17:15:49',
                ),
            33 =>
                array(
                    'id' => 1034,
                    'lang' => 'en',
                    'lang_key' => 'Follow',
                    'lang_value' => 'Follow',
                    'created_at' => '2023-04-06 17:15:59',
                    'updated_at' => '2023-04-06 17:15:59',
                ),
            34 =>
                array(
                    'id' => 1035,
                    'lang' => 'en',
                    'lang_key' => 'Showing',
                    'lang_value' => 'Showing',
                    'created_at' => '2023-04-06 17:15:59',
                    'updated_at' => '2023-04-06 17:15:59',
                ),
            35 =>
                array(
                    'id' => 1036,
                    'lang' => 'en',
                    'lang_key' => 'Badges',
                    'lang_value' => 'Badges',
                    'created_at' => '2023-04-06 17:15:59',
                    'updated_at' => '2023-04-06 17:15:59',
                ),
            36 =>
                array(
                    'id' => 1037,
                    'lang' => 'en',
                    'lang_key' => 'Verifications',
                    'lang_value' => 'Verifications',
                    'created_at' => '2023-04-06 17:15:59',
                    'updated_at' => '2023-04-06 17:15:59',
                ),
            37 =>
                array(
                    'id' => 1038,
                    'lang' => 'en',
                    'lang_key' => 'Email Verified',
                    'lang_value' => 'Email Verified',
                    'created_at' => '2023-04-06 17:15:59',
                    'updated_at' => '2023-04-06 17:15:59',
                ),
            38 =>
                array(
                    'id' => 1039,
                    'lang' => 'en',
                    'lang_key' => 'Share Profile',
                    'lang_value' => 'Share Profile',
                    'created_at' => '2023-04-06 17:15:59',
                    'updated_at' => '2023-04-06 17:15:59',
                ),
            39 =>
                array(
                    'id' => 1040,
                    'lang' => 'en',
                    'lang_key' => 'Unfollow Confirmation',
                    'lang_value' => 'Unfollow Confirmation',
                    'created_at' => '2023-04-06 17:15:59',
                    'updated_at' => '2023-04-06 17:15:59',
                ),
            40 =>
                array(
                    'id' => 1041,
                    'lang' => 'en',
                    'lang_key' => 'Are you sure to unfollow?',
                    'lang_value' => 'Are you sure to unfollow?',
                    'created_at' => '2023-04-06 17:15:59',
                    'updated_at' => '2023-04-06 17:15:59',
                ),
            41 =>
                array(
                    'id' => 1042,
                    'lang' => 'en',
                    'lang_key' => 'New',
                    'lang_value' => 'New',
                    'created_at' => '2023-04-06 18:03:44',
                    'updated_at' => '2023-04-06 18:03:44',
                ),
            42 =>
                array(
                    'id' => 1043,
                    'lang' => 'en',
                    'lang_key' => 'Bidded Amount',
                    'lang_value' => 'Bidded Amount',
                    'created_at' => '2023-04-06 18:07:21',
                    'updated_at' => '2023-04-06 18:07:21',
                ),
            43 =>
                array(
                    'id' => 1044,
                    'lang' => 'en',
                    'lang_key' => 'Call for Interview',
                    'lang_value' => 'Call for Interview',
                    'created_at' => '2023-04-06 18:07:21',
                    'updated_at' => '2023-04-06 18:07:21',
                ),
            44 =>
                array(
                    'id' => 1045,
                    'lang' => 'en',
                    'lang_key' => 'You have been hired for a project by',
                    'lang_value' => 'You have been hired for a project by',
                    'created_at' => '2023-04-06 18:07:36',
                    'updated_at' => '2023-04-06 18:07:36',
                ),
            45 =>
                array(
                    'id' => 1046,
                    'lang' => 'en',
                    'lang_key' => 'You have been hired for project -',
                    'lang_value' => 'You have been hired for project -',
                    'created_at' => '2023-04-06 18:07:36',
                    'updated_at' => '2023-04-06 18:07:36',
                ),
            46 =>
                array(
                    'id' => 1047,
                    'lang' => 'en',
                    'lang_key' => 'You have hired successfully.',
                    'lang_value' => 'You have hired successfully.',
                    'created_at' => '2023-04-06 18:07:36',
                    'updated_at' => '2023-04-06 18:07:36',
                ),
            47 =>
                array(
                    'id' => 1048,
                    'lang' => 'en',
                    'lang_key' => 'Hired',
                    'lang_value' => 'Hired',
                    'created_at' => '2023-04-06 18:07:36',
                    'updated_at' => '2023-04-06 18:07:36',
                ),
            48 =>
                array(
                    'id' => 1049,
                    'lang' => 'en',
                    'lang_key' => 'No Open Project',
                    'lang_value' => 'No Open Project',
                    'created_at' => '2023-04-06 18:09:20',
                    'updated_at' => '2023-04-06 18:09:20',
                ),
            49 =>
                array(
                    'id' => 1050,
                    'lang' => 'en',
                    'lang_key' => 'Send Milestone Request',
                    'lang_value' => 'Send Milestone Request',
                    'created_at' => '2023-04-06 18:09:54',
                    'updated_at' => '2023-04-06 18:09:54',
                ),
            50 =>
                array(
                    'id' => 1051,
                    'lang' => 'en',
                    'lang_key' => 'Send Request',
                    'lang_value' => 'Send Request',
                    'created_at' => '2023-04-06 18:10:08',
                    'updated_at' => '2023-04-06 18:10:08',
                ),
            51 =>
                array(
                    'id' => 1052,
                    'lang' => 'en',
                    'lang_key' => 'A milestone payment has been requested by',
                    'lang_value' => 'A milestone payment has been requested by',
                    'created_at' => '2023-04-06 18:10:27',
                    'updated_at' => '2023-04-06 18:10:27',
                ),
            52 =>
                array(
                    'id' => 1053,
                    'lang' => 'en',
                    'lang_key' => 'A milestone payment has been requested',
                    'lang_value' => 'A milestone payment has been requested',
                    'created_at' => '2023-04-06 18:10:27',
                    'updated_at' => '2023-04-06 18:10:27',
                ),
            53 =>
                array(
                    'id' => 1054,
                    'lang' => 'en',
                    'lang_key' => 'Milestone request has been sent successfully',
                    'lang_value' => 'Milestone request has been sent successfully',
                    'created_at' => '2023-04-06 18:10:27',
                    'updated_at' => '2023-04-06 18:10:27',
                ),
            54 =>
                array(
                    'id' => 1055,
                    'lang' => 'en',
                    'lang_key' => 'You need to login as a freelancer to bid the project.',
                    'lang_value' => 'You need to login as a freelancer to bid the project.',
                    'created_at' => '2023-04-06 18:45:29',
                    'updated_at' => '2023-04-06 18:45:29',
                ),
            55 =>
                array(
                    'id' => 1056,
                    'lang' => 'en',
                    'lang_key' => 'Paid via',
                    'lang_value' => 'Paid via',
                    'created_at' => '2023-04-07 01:13:02',
                    'updated_at' => '2023-04-07 01:13:02',
                ),
            56 =>
                array(
                    'id' => 1057,
                    'lang' => 'en',
                    'lang_key' => 'Unpaid',
                    'lang_value' => 'Unpaid',
                    'created_at' => '2023-04-07 01:13:07',
                    'updated_at' => '2023-04-07 01:13:07',
                ),
            57 =>
                array(
                    'id' => 1058,
                    'lang' => 'en',
                    'lang_key' => 'Paid by',
                    'lang_value' => 'Paid by',
                    'created_at' => '2023-04-07 01:13:07',
                    'updated_at' => '2023-04-07 01:13:07',
                ),
            58 =>
                array(
                    'id' => 1059,
                    'lang' => 'en',
                    'lang_key' => 'Chats Between',
                    'lang_value' => 'Chats Between',
                    'created_at' => '2023-04-07 01:23:12',
                    'updated_at' => '2023-04-07 01:23:12',
                ),
            59 =>
                array(
                    'id' => 1060,
                    'lang' => 'en',
                    'lang_key' => 'Recover your account.',
                    'lang_value' => 'Recover your account.',
                    'created_at' => '2023-04-07 09:13:06',
                    'updated_at' => '2023-04-07 09:13:06',
                ),
            60 =>
                array(
                    'id' => 1061,
                    'lang' => 'en',
                    'lang_key' => 'Reset Password',
                    'lang_value' => 'Reset Password',
                    'created_at' => '2023-04-07 09:13:06',
                    'updated_at' => '2023-04-07 09:13:06',
                ),
            61 =>
                array(
                    'id' => 1062,
                    'lang' => 'en',
                    'lang_key' => 'Remembered your password?',
                    'lang_value' => 'Remembered your password?',
                    'created_at' => '2023-04-07 09:13:06',
                    'updated_at' => '2023-04-07 09:13:06',
                ),
            62 =>
                array(
                    'id' => 1063,
                    'lang' => 'en',
                    'lang_key' => 'Your verification file is required.',
                    'lang_value' => 'Your verification file is required.',
                    'created_at' => '2023-04-07 09:21:19',
                    'updated_at' => '2023-04-07 09:21:19',
                ),
            63 =>
                array(
                    'id' => 1064,
                    'lang' => 'en',
                    'lang_key' => 'Your verification file has been sent successfully',
                    'lang_value' => 'Your verification file has been sent successfully',
                    'created_at' => '2023-04-07 09:22:21',
                    'updated_at' => '2023-04-07 09:22:21',
                ),
            64 =>
                array(
                    'id' => 1065,
                    'lang' => 'en',
                    'lang_key' => 'Your identity verification has not been approved yet.',
                    'lang_value' => 'Your identity verification has not been approved yet.',
                    'created_at' => '2023-04-07 09:22:21',
                    'updated_at' => '2023-04-07 09:22:21',
                ),
            65 =>
                array(
                    'id' => 1066,
                    'lang' => 'en',
                    'lang_key' => 'Your info has been updated successfully',
                    'lang_value' => 'Your info has been updated successfully',
                    'created_at' => '2023-04-07 09:23:45',
                    'updated_at' => '2023-04-07 09:23:45',
                ),
            66 =>
                array(
                    'id' => 1067,
                    'lang' => 'en',
                    'lang_key' => 'Edit Skill',
                    'lang_value' => 'Edit Skill',
                    'created_at' => '2023-04-09 19:01:50',
                    'updated_at' => '2023-04-09 19:01:50',
                ),
            67 =>
                array(
                    'id' => 1068,
                    'lang' => 'en',
                    'lang_key' => 'Update Skill',
                    'lang_value' => 'Update Skill',
                    'created_at' => '2023-04-09 19:01:50',
                    'updated_at' => '2023-04-09 19:01:50',
                ),
            68 =>
                array(
                    'id' => 1069,
                    'lang' => 'en',
                    'lang_key' => 'Skill has been Updated successfully',
                    'lang_value' => 'Skill has been Updated successfully',
                    'created_at' => '2023-04-09 19:02:04',
                    'updated_at' => '2023-04-09 19:02:04',
                ),
            69 =>
                array(
                    'id' => 1070,
                    'lang' => 'en',
                    'lang_key' => 'Edit Category',
                    'lang_value' => 'Edit Category',
                    'created_at' => '2023-04-09 19:12:17',
                    'updated_at' => '2023-04-09 19:12:17',
                ),
            70 =>
                array(
                    'id' => 1071,
                    'lang' => 'en',
                    'lang_key' => 'Update Category',
                    'lang_value' => 'Update Category',
                    'created_at' => '2023-04-09 19:12:17',
                    'updated_at' => '2023-04-09 19:12:17',
                ),
            71 =>
                array(
                    'id' => 1072,
                    'lang' => 'en',
                    'lang_key' => 'New Category has been updated successfully!',
                    'lang_value' => 'New Category has been updated successfully!',
                    'created_at' => '2023-04-09 19:12:40',
                    'updated_at' => '2023-04-09 19:12:40',
                ),
            72 =>
                array(
                    'id' => 1073,
                    'lang' => 'en',
                    'lang_key' => 'New Category has been added successfully!',
                    'lang_value' => 'New Category has been added successfully!',
                    'created_at' => '2023-04-09 19:14:06',
                    'updated_at' => '2023-04-09 19:14:06',
                ),
            73 =>
                array(
                    'id' => 1074,
                    'lang' => 'en',
                    'lang_key' => 'New Request',
                    'lang_value' => 'New Request',
                    'created_at' => '2023-04-10 01:58:18',
                    'updated_at' => '2023-04-10 01:58:18',
                ),
            74 =>
                array(
                    'id' => 1075,
                    'lang' => 'en',
                    'lang_key' => 'Rate This Client',
                    'lang_value' => 'Rate This Client',
                    'created_at' => '2023-04-12 14:47:45',
                    'updated_at' => '2023-04-12 14:47:45',
                ),
            75 =>
                array(
                    'id' => 1076,
                    'lang' => 'en',
                    'lang_key' => 'Join to order this service',
                    'lang_value' => 'Join to order this service',
                    'created_at' => '2023-04-12 15:22:43',
                    'updated_at' => '2023-04-12 15:22:43',
                ),
            76 =>
                array(
                    'id' => 1077,
                    'lang' => 'en',
                    'lang_key' => 'Explore More Services',
                    'lang_value' => 'Explore More Services',
                    'created_at' => '2023-04-13 09:30:01',
                    'updated_at' => '2023-04-13 09:30:01',
                ),
            77 =>
                array(
                    'id' => 1078,
                    'lang' => 'en',
                    'lang_key' => 'View More',
                    'lang_value' => 'View More',
                    'created_at' => '2023-04-13 09:30:01',
                    'updated_at' => '2023-04-13 09:30:01',
                ),
            78 =>
                array(
                    'id' => 1079,
                    'lang' => 'en',
                    'lang_key' => 'Blog',
                    'lang_value' => 'Blog',
                    'created_at' => '2023-04-13 09:30:09',
                    'updated_at' => '2023-04-13 09:30:09',
                ),
            79 =>
                array(
                    'id' => 1080,
                    'lang' => 'en',
                    'lang_key' => 'Blog post has been created successfully',
                    'lang_value' => 'Blog post has been created successfully',
                    'created_at' => '2023-04-13 10:01:18',
                    'updated_at' => '2023-04-13 10:01:18',
                ),
            80 =>
                array(
                    'id' => 1081,
                    'lang' => 'en',
                    'lang_key' => 'Share',
                    'lang_value' => 'Share',
                    'created_at' => '2023-04-13 10:01:52',
                    'updated_at' => '2023-04-13 10:01:52',
                ),
            81 =>
                array(
                    'id' => 1082,
                    'lang' => 'en',
                    'lang_key' => 'Blog category has been updated successfully',
                    'lang_value' => 'Blog category has been updated successfully',
                    'created_at' => '2023-04-13 13:53:59',
                    'updated_at' => '2023-04-13 13:53:59',
                ),
            82 =>
                array(
                    'id' => 1083,
                    'lang' => 'en',
                    'lang_key' => 'Complete This',
                    'lang_value' => 'Complete This',
                    'created_at' => '2023-04-13 14:06:05',
                    'updated_at' => '2023-04-13 14:06:05',
                ),
            83 =>
                array(
                    'id' => 1084,
                    'lang' => 'en',
                    'lang_key' => 'Skill Info has been deleted successfully',
                    'lang_value' => 'Skill Info has been deleted successfully',
                    'created_at' => '2023-04-13 14:14:36',
                    'updated_at' => '2023-04-13 14:14:36',
                ),
            84 =>
                array(
                    'id' => 1085,
                    'lang' => 'en',
                    'lang_key' => 'Pasing Year',
                    'lang_value' => 'Pasing Year',
                    'created_at' => '2023-04-13 17:05:28',
                    'updated_at' => '2023-04-13 17:05:28',
                ),
            85 =>
                array(
                    'id' => 1086,
                    'lang' => 'en',
                    'lang_key' => 'New work experience has been added successfully',
                    'lang_value' => 'New work experience has been added successfully',
                    'created_at' => '2023-04-13 17:06:59',
                    'updated_at' => '2023-04-13 17:06:59',
                ),
            86 =>
                array(
                    'id' => 1087,
                    'lang' => 'en',
                    'lang_key' => 'Present',
                    'lang_value' => 'Present',
                    'created_at' => '2023-04-13 17:06:59',
                    'updated_at' => '2023-04-13 17:06:59',
                ),
            87 =>
                array(
                    'id' => 1088,
                    'lang' => 'en',
                    'lang_key' => 'Hired You',
                    'lang_value' => 'Hired You',
                    'created_at' => '2023-04-13 17:16:05',
                    'updated_at' => '2023-04-13 17:16:05',
                ),
            88 =>
                array(
                    'id' => 1089,
                    'lang' => 'en',
                    'lang_key' => 'Pay now',
                    'lang_value' => 'Pay now',
                    'created_at' => '2023-04-13 17:20:13',
                    'updated_at' => '2023-04-13 17:20:13',
                ),
            89 =>
                array(
                    'id' => 1090,
                    'lang' => 'en',
                    'lang_key' => 'Sending Amount',
                    'lang_value' => 'Sending Amount',
                    'created_at' => '2023-04-13 17:20:17',
                    'updated_at' => '2023-04-13 17:20:17',
                ),
            90 =>
                array(
                    'id' => 1091,
                    'lang' => 'en',
                    'lang_key' => 'Your milestone payment request has been accepted by',
                    'lang_value' => 'Your milestone payment request has been accepted by',
                    'created_at' => '2023-04-13 17:22:04',
                    'updated_at' => '2023-04-13 17:22:04',
                ),
            91 =>
                array(
                    'id' => 1092,
                    'lang' => 'en',
                    'lang_key' => 'Your milestone payment request has been accepted',
                    'lang_value' => 'Your milestone payment request has been accepted',
                    'created_at' => '2023-04-13 17:22:04',
                    'updated_at' => '2023-04-13 17:22:04',
                ),
            92 =>
                array(
                    'id' => 1093,
                    'lang' => 'en',
                    'lang_key' => 'A milestone payment request has been accepted by',
                    'lang_value' => 'A milestone payment request has been accepted by',
                    'created_at' => '2023-04-13 17:22:04',
                    'updated_at' => '2023-04-13 17:22:04',
                ),
            93 =>
                array(
                    'id' => 1094,
                    'lang' => 'en',
                    'lang_key' => 'A milestone payment request has been accepted',
                    'lang_value' => 'A milestone payment request has been accepted',
                    'created_at' => '2023-04-13 17:22:04',
                    'updated_at' => '2023-04-13 17:22:04',
                ),
            94 =>
                array(
                    'id' => 1095,
                    'lang' => 'en',
                    'lang_key' => 'Published',
                    'lang_value' => 'Published',
                    'created_at' => '2023-04-13 17:35:25',
                    'updated_at' => '2023-04-13 17:35:25',
                ),
            95 =>
                array(
                    'id' => 1096,
                    'lang' => 'en',
                    'lang_key' => 'Cancel Project',
                    'lang_value' => 'Cancel Project',
                    'created_at' => '2023-04-13 17:35:25',
                    'updated_at' => '2023-04-13 17:35:25',
                ),
            96 =>
                array(
                    'id' => 1097,
                    'lang' => 'en',
                    'lang_key' => 'Paid',
                    'lang_value' => 'Paid',
                    'created_at' => '2023-04-13 17:38:42',
                    'updated_at' => '2023-04-13 17:38:42',
                ),
            97 =>
                array(
                    'id' => 1098,
                    'lang' => 'en',
                    'lang_key' => 'New Badge has been updated successfully!',
                    'lang_value' => 'New Badge has been updated successfully!',
                    'created_at' => '2023-04-13 18:12:28',
                    'updated_at' => '2023-04-13 18:12:28',
                ),
            98 =>
                array(
                    'id' => 1099,
                    'lang' => 'en',
                    'lang_key' => 'Seen',
                    'lang_value' => 'Seen',
                    'created_at' => '2023-04-13 18:21:57',
                    'updated_at' => '2023-04-13 18:21:57',
                ),
            99 =>
                array(
                    'id' => 1100,
                    'lang' => 'en',
                    'lang_key' => 'per Hour',
                    'lang_value' => 'per Hour',
                    'created_at' => '2023-04-14 02:29:24',
                    'updated_at' => '2023-04-14 02:29:24',
                ),
            100 =>
                array(
                    'id' => 1101,
                    'lang' => 'en',
                    'lang_key' => 'Hire Me',
                    'lang_value' => 'Hire Me',
                    'created_at' => '2023-04-14 02:29:24',
                    'updated_at' => '2023-04-14 02:29:24',
                ),
            101 =>
                array(
                    'id' => 1102,
                    'lang' => 'en',
                    'lang_key' => 'Experiences',
                    'lang_value' => 'Experiences',
                    'created_at' => '2023-04-14 02:29:24',
                    'updated_at' => '2023-04-14 02:29:24',
                ),
            102 =>
                array(
                    'id' => 1103,
                    'lang' => 'en',
                    'lang_key' => 'Education',
                    'lang_value' => 'Education',
                    'created_at' => '2023-04-14 02:29:24',
                    'updated_at' => '2023-04-14 02:29:24',
                ),
            103 =>
                array(
                    'id' => 1104,
                    'lang' => 'en',
                    'lang_key' => 'Bookmark Freelancer',
                    'lang_value' => 'Bookmark Freelancer',
                    'created_at' => '2023-04-14 02:29:24',
                    'updated_at' => '2023-04-14 02:29:24',
                ),
            104 =>
                array(
                    'id' => 1105,
                    'lang' => 'en',
                    'lang_key' => 'Page Content',
                    'lang_value' => 'Page Content',
                    'created_at' => '2023-04-14 05:44:39',
                    'updated_at' => '2023-04-14 05:44:39',
                ),
            105 =>
                array(
                    'id' => 1106,
                    'lang' => 'en',
                    'lang_key' => 'Link',
                    'lang_value' => 'Link',
                    'created_at' => '2023-04-14 05:44:39',
                    'updated_at' => '2023-04-14 05:44:39',
                ),
            106 =>
                array(
                    'id' => 1107,
                    'lang' => 'en',
                    'lang_key' => 'page-title',
                    'lang_value' => 'page-title',
                    'created_at' => '2023-04-14 05:44:39',
                    'updated_at' => '2023-04-14 05:44:39',
                ),
            107 =>
                array(
                    'id' => 1108,
                    'lang' => 'en',
                    'lang_key' => 'Use character, number, hypen only',
                    'lang_value' => 'Use character, number, hypen only',
                    'created_at' => '2023-04-14 05:44:39',
                    'updated_at' => '2023-04-14 05:44:39',
                ),
            108 =>
                array(
                    'id' => 1109,
                    'lang' => 'en',
                    'lang_key' => 'Add Content',
                    'lang_value' => 'Add Content',
                    'created_at' => '2023-04-14 05:44:39',
                    'updated_at' => '2023-04-14 05:44:39',
                ),
            109 =>
                array(
                    'id' => 1110,
                    'lang' => 'en',
                    'lang_key' => 'Content..',
                    'lang_value' => 'Content..',
                    'created_at' => '2023-04-14 05:44:39',
                    'updated_at' => '2023-04-14 05:44:39',
                ),
            110 =>
                array(
                    'id' => 1111,
                    'lang' => 'en',
                    'lang_key' => 'Add Page',
                    'lang_value' => 'Add Page',
                    'created_at' => '2023-04-14 05:44:39',
                    'updated_at' => '2023-04-14 05:44:39',
                ),
            111 =>
                array(
                    'id' => 1112,
                    'lang' => 'en',
                    'lang_key' => 'Blog post has been updated successfully',
                    'lang_value' => 'Blog post has been updated successfully',
                    'created_at' => '2023-04-14 10:36:17',
                    'updated_at' => '2023-04-14 10:36:17',
                ),
            112 =>
                array(
                    'id' => 1113,
                    'lang' => 'en',
                    'lang_key' => 'Your Picture has been updated successfully',
                    'lang_value' => 'Your Picture has been updated successfully',
                    'created_at' => '2023-04-14 11:37:19',
                    'updated_at' => '2023-04-14 11:37:19',
                ),
            113 =>
                array(
                    'id' => 1114,
                    'lang' => 'en',
                    'lang_key' => 'Project has been cancelled successfully',
                    'lang_value' => 'Project has been cancelled successfully',
                    'created_at' => '2023-04-14 12:34:23',
                    'updated_at' => '2023-04-14 12:34:23',
                ),
            114 =>
                array(
                    'id' => 1115,
                    'lang' => 'en',
                    'lang_key' => 'Cancelled By',
                    'lang_value' => 'Cancelled By',
                    'created_at' => '2023-04-14 12:34:23',
                    'updated_at' => '2023-04-14 12:34:23',
                ),
            115 =>
                array(
                    'id' => 1116,
                    'lang' => 'en',
                    'lang_key' => 'Your Portfolio has been added successfully',
                    'lang_value' => 'Your Portfolio has been added successfully',
                    'created_at' => '2023-04-14 12:49:32',
                    'updated_at' => '2023-04-14 12:49:32',
                ),
            116 =>
                array(
                    'id' => 1117,
                    'lang' => 'en',
                    'lang_key' => 'New Package has been updated successfully',
                    'lang_value' => 'New Package has been updated successfully',
                    'created_at' => '2023-04-14 20:34:26',
                    'updated_at' => '2023-04-14 20:34:26',
                ),
            117 =>
                array(
                    'id' => 1118,
                    'lang' => 'en',
                    'lang_key' => 'About the project',
                    'lang_value' => 'About the project',
                    'created_at' => '2023-04-15 01:37:43',
                    'updated_at' => '2023-04-15 01:37:43',
                ),
            118 =>
                array(
                    'id' => 1119,
                    'lang' => 'en',
                    'lang_key' => 'Service successfully deleted.',
                    'lang_value' => 'Service successfully deleted.',
                    'created_at' => '2023-04-15 01:44:41',
                    'updated_at' => '2023-04-15 01:44:41',
                ),
            119 =>
                array(
                    'id' => 1120,
                    'lang' => 'en',
                    'lang_key' => 'Sign Up',
                    'lang_value' => 'Sign Up',
                    'created_at' => '2023-04-15 04:45:24',
                    'updated_at' => '2023-04-15 04:45:24',
                ),
            120 =>
                array(
                    'id' => 1121,
                    'lang' => 'en',
                    'lang_key' => 'Post a Project',
                    'lang_value' => 'Post a Project',
                    'created_at' => '2023-04-15 04:45:24',
                    'updated_at' => '2023-04-15 04:45:24',
                ),
            121 =>
                array(
                    'id' => 1122,
                    'lang' => 'en',
                    'lang_key' => 'Find Scholarships',
                    'lang_value' => 'Find Scholarships',
                    'created_at' => '2023-04-15 04:45:24',
                    'updated_at' => '2023-04-15 04:45:24',
                ),
            122 =>
                array(
                    'id' => 1123,
                    'lang' => 'en',
                    'lang_key' => 'Find Consultants',
                    'lang_value' => 'Find Consultants',
                    'created_at' => '2023-04-15 04:45:24',
                    'updated_at' => '2023-04-15 04:45:24',
                ),
            123 =>
                array(
                    'id' => 1124,
                    'lang' => 'en',
                    'lang_key' => 'Ways to earn',
                    'lang_value' => 'Ways to earn',
                    'created_at' => '2023-04-15 04:45:24',
                    'updated_at' => '2023-04-15 04:45:24',
                ),
            124 =>
                array(
                    'id' => 1125,
                    'lang' => 'en',
                    'lang_key' => 'Find ways to promote yourself',
                    'lang_value' => 'Find ways to promote yourself',
                    'created_at' => '2023-04-15 04:45:24',
                    'updated_at' => '2023-04-15 04:45:24',
                ),
            125 =>
                array(
                    'id' => 1126,
                    'lang' => 'en',
                    'lang_key' => 'Find work for your skills',
                    'lang_value' => 'Find work for your skills',
                    'created_at' => '2023-04-15 04:45:24',
                    'updated_at' => '2023-04-15 04:45:24',
                ),
            126 =>
                array(
                    'id' => 1127,
                    'lang' => 'en',
                    'lang_key' => 'Find Jobs',
                    'lang_value' => 'Find Jobs',
                    'created_at' => '2023-04-15 04:45:24',
                    'updated_at' => '2023-04-15 04:45:24',
                ),
            127 =>
                array(
                    'id' => 1128,
                    'lang' => 'en',
                    'lang_key' => 'Find Services',
                    'lang_value' => 'Find Services',
                    'created_at' => '2023-04-15 04:45:24',
                    'updated_at' => '2023-04-15 04:45:24',
                ),
            128 =>
                array(
                    'id' => 1129,
                    'lang' => 'en',
                    'lang_key' => 'Resources',
                    'lang_value' => 'Resources',
                    'created_at' => '2023-04-15 04:45:24',
                    'updated_at' => '2023-04-15 04:45:24',
                ),
            129 =>
                array(
                    'id' => 1130,
                    'lang' => 'en',
                    'lang_key' => 'Why Scholarships Australia',
                    'lang_value' => 'Why Scholarships Australia',
                    'created_at' => '2023-04-15 04:45:24',
                    'updated_at' => '2023-04-15 04:45:24',
                ),
            130 =>
                array(
                    'id' => 1131,
                    'lang' => 'en',
                    'lang_key' => 'Send invitation for a private project',
                    'lang_value' => 'Send invitation for a private project',
                    'created_at' => '2023-04-15 06:27:58',
                    'updated_at' => '2023-04-15 06:27:58',
                ),
            131 =>
                array(
                    'id' => 1132,
                    'lang' => 'en',
                    'lang_key' => 'Project budget offer',
                    'lang_value' => 'Project budget offer',
                    'created_at' => '2023-04-15 06:27:58',
                    'updated_at' => '2023-04-15 06:27:58',
                ),
            132 =>
                array(
                    'id' => 1133,
                    'lang' => 'en',
                    'lang_key' => 'Send Invitation',
                    'lang_value' => 'Send Invitation',
                    'created_at' => '2023-04-15 06:27:58',
                    'updated_at' => '2023-04-15 06:27:58',
                ),
            133 =>
                array(
                    'id' => 1134,
                    'lang' => 'en',
                    'lang_key' => 'Payment is cancelled',
                    'lang_value' => 'Payment is cancelled',
                    'created_at' => '2023-04-15 06:31:49',
                    'updated_at' => '2023-04-15 06:31:49',
                ),
            134 =>
                array(
                    'id' => 1135,
                    'lang' => 'en',
                    'lang_key' => 'Cancel Service',
                    'lang_value' => 'Cancel Service',
                    'created_at' => '2023-04-15 06:32:12',
                    'updated_at' => '2023-04-15 06:32:12',
                ),
            135 =>
                array(
                    'id' => 1136,
                    'lang' => 'en',
                    'lang_key' => 'Send Project Cancel Request',
                    'lang_value' => 'Send Project Cancel Request',
                    'created_at' => '2023-04-15 06:32:12',
                    'updated_at' => '2023-04-15 06:32:12',
                ),
            136 =>
                array(
                    'id' => 1137,
                    'lang' => 'en',
                    'lang_key' => 'Why do you want to Cancel?',
                    'lang_value' => 'Why do you want to Cancel?',
                    'created_at' => '2023-04-15 06:32:12',
                    'updated_at' => '2023-04-15 06:32:12',
                ),
            137 =>
                array(
                    'id' => 1138,
                    'lang' => 'en',
                    'lang_key' => 'Your request was sent to the admin.',
                    'lang_value' => 'Your request was sent to the admin.',
                    'created_at' => '2023-04-15 06:33:01',
                    'updated_at' => '2023-04-15 06:33:01',
                ),
            138 =>
                array(
                    'id' => 1139,
                    'lang' => 'en',
                    'lang_key' => 'Cancel Requested',
                    'lang_value' => 'Cancel Requested',
                    'created_at' => '2023-04-15 06:33:02',
                    'updated_at' => '2023-04-15 06:33:02',
                ),
            139 =>
                array(
                    'id' => 1140,
                    'lang' => 'en',
                    'lang_key' => 'Remove Bookmark',
                    'lang_value' => 'Remove Bookmark',
                    'created_at' => '2023-04-15 06:33:24',
                    'updated_at' => '2023-04-15 06:33:24',
                ),
            140 =>
                array(
                    'id' => 1141,
                    'lang' => 'en',
                    'lang_key' => 'Remove from bookmark',
                    'lang_value' => 'Remove from bookmark',
                    'created_at' => '2023-04-15 06:33:48',
                    'updated_at' => '2023-04-15 06:33:48',
                ),
            141 =>
                array(
                    'id' => 1142,
                    'lang' => 'en',
                    'lang_key' => 'projects completed',
                    'lang_value' => 'projects completed',
                    'created_at' => '2023-04-15 06:33:48',
                    'updated_at' => '2023-04-15 06:33:48',
                ),
            142 =>
                array(
                    'id' => 1143,
                    'lang' => 'en',
                    'lang_key' => 'Show',
                    'lang_value' => 'Show',
                    'created_at' => '2023-04-15 06:35:21',
                    'updated_at' => '2023-04-15 06:35:21',
                ),
            143 =>
                array(
                    'id' => 1144,
                    'lang' => 'en',
                    'lang_key' => 'Freelancer Name',
                    'lang_value' => 'Freelancer Name',
                    'created_at' => '2023-04-15 06:35:28',
                    'updated_at' => '2023-04-15 06:35:28',
                ),
            144 =>
                array(
                    'id' => 1145,
                    'lang' => 'en',
                    'lang_key' => 'Freelancer Profit',
                    'lang_value' => 'Freelancer Profit',
                    'created_at' => '2023-04-15 06:35:28',
                    'updated_at' => '2023-04-15 06:35:28',
                ),
            145 =>
                array(
                    'id' => 1146,
                    'lang' => 'en',
                    'lang_key' => 'Reason for cancellation',
                    'lang_value' => 'Reason for cancellation',
                    'created_at' => '2023-04-15 06:35:28',
                    'updated_at' => '2023-04-15 06:35:28',
                ),
            146 =>
                array(
                    'id' => 1147,
                    'lang' => 'en',
                    'lang_key' => 'Approve This Request',
                    'lang_value' => 'Approve This Request',
                    'created_at' => '2023-04-15 06:35:28',
                    'updated_at' => '2023-04-15 06:35:28',
                ),
            147 =>
                array(
                    'id' => 1148,
                    'lang' => 'en',
                    'lang_key' => 'A Service cancellation is approved by ',
                    'lang_value' => 'A Service cancellation is approved by ',
                    'created_at' => '2023-04-15 06:36:13',
                    'updated_at' => '2023-04-15 06:36:13',
                ),
            148 =>
                array(
                    'id' => 1149,
                    'lang' => 'en',
                    'lang_key' => 'A Project cancellation is approved',
                    'lang_value' => 'A Project cancellation is approved',
                    'created_at' => '2023-04-15 06:36:13',
                    'updated_at' => '2023-04-15 06:36:13',
                ),
            149 =>
                array(
                    'id' => 1150,
                    'lang' => 'en',
                    'lang_key' => 'A Project cancellation is approved by ',
                    'lang_value' => 'A Project cancellation is approved by ',
                    'created_at' => '2023-04-15 06:36:13',
                    'updated_at' => '2023-04-15 06:36:13',
                ),
            150 =>
                array(
                    'id' => 1151,
                    'lang' => 'en',
                    'lang_key' => 'Request has been accepted successfully',
                    'lang_value' => 'Request has been accepted successfully',
                    'created_at' => '2023-04-15 06:36:13',
                    'updated_at' => '2023-04-15 06:36:13',
                ),
            151 =>
                array(
                    'id' => 1152,
                    'lang' => 'en',
                    'lang_key' => 'Non-Paid',
                    'lang_value' => 'Non-Paid',
                    'created_at' => '2023-04-15 06:36:45',
                    'updated_at' => '2023-04-15 06:36:45',
                ),
            152 =>
                array(
                    'id' => 1153,
                    'lang' => 'en',
                    'lang_key' => 'Service Cancellation Refund',
                    'lang_value' => 'Service Cancellation Refund',
                    'created_at' => '2023-04-15 06:36:47',
                    'updated_at' => '2023-04-15 06:36:47',
                ),
            153 =>
                array(
                    'id' => 1154,
                    'lang' => 'en',
                    'lang_key' => 'Recharge By Engr. Shekh Shimul Ahmmed',
                    'lang_value' => 'Recharge By Engr. Shekh Shimul Ahmmed',
                    'created_at' => '2023-04-15 06:36:47',
                    'updated_at' => '2023-04-15 06:36:47',
                ),
            154 =>
                array(
                    'id' => 1155,
                    'lang' => 'en',
                    'lang_key' => 'Pay to',
                    'lang_value' => 'Pay to',
                    'created_at' => '2023-04-15 06:37:26',
                    'updated_at' => '2023-04-15 06:37:26',
                ),
            155 =>
                array(
                    'id' => 1156,
                    'lang' => 'en',
                    'lang_key' => 'Freelancer Balance',
                    'lang_value' => 'Freelancer Balance',
                    'created_at' => '2023-04-15 06:37:26',
                    'updated_at' => '2023-04-15 06:37:26',
                ),
            156 =>
                array(
                    'id' => 1157,
                    'lang' => 'en',
                    'lang_key' => 'Pay Amount',
                    'lang_value' => 'Pay Amount',
                    'created_at' => '2023-04-15 06:37:26',
                    'updated_at' => '2023-04-15 06:37:26',
                ),
            157 =>
                array(
                    'id' => 1158,
                    'lang' => 'en',
                    'lang_key' => 'Payment Reciept',
                    'lang_value' => 'Payment Reciept',
                    'created_at' => '2023-04-15 06:37:26',
                    'updated_at' => '2023-04-15 06:37:26',
                ),
            158 =>
                array(
                    'id' => 1159,
                    'lang' => 'en',
                    'lang_key' => 'A new withdrawal request has been accepted by',
                    'lang_value' => 'A new withdrawal request has been accepted by',
                    'created_at' => '2023-04-15 06:38:10',
                    'updated_at' => '2023-04-15 06:38:10',
                ),
            159 =>
                array(
                    'id' => 1160,
                    'lang' => 'en',
                    'lang_key' => 'A new withdrawal request has been accepted',
                    'lang_value' => 'A new withdrawal request has been accepted',
                    'created_at' => '2023-04-15 06:38:10',
                    'updated_at' => '2023-04-15 06:38:10',
                ),
            160 =>
                array(
                    'id' => 1161,
                    'lang' => 'en',
                    'lang_key' => 'No Reciept',
                    'lang_value' => 'No Reciept',
                    'created_at' => '2023-04-15 06:38:27',
                    'updated_at' => '2023-04-15 06:38:27',
                ),
            161 =>
                array(
                    'id' => 1162,
                    'lang' => 'en',
                    'lang_key' => 'You are using this package already.',
                    'lang_value' => 'You are using this package already.',
                    'created_at' => '2023-04-15 14:07:53',
                    'updated_at' => '2023-04-15 14:07:53',
                ),
            162 =>
                array(
                    'id' => 1163,
                    'lang' => 'en',
                    'lang_key' => 'A Project has been marked as completed by',
                    'lang_value' => 'A Project has been marked as completed by',
                    'created_at' => '2023-04-15 18:06:04',
                    'updated_at' => '2023-04-15 18:06:04',
                ),
            163 =>
                array(
                    'id' => 1164,
                    'lang' => 'en',
                    'lang_key' => 'A Project has been marked as completed',
                    'lang_value' => 'A Project has been marked as completed',
                    'created_at' => '2023-04-15 18:06:04',
                    'updated_at' => '2023-04-15 18:06:04',
                ),
            164 =>
                array(
                    'id' => 1165,
                    'lang' => 'en',
                    'lang_key' => 'You have been given a review for a project by',
                    'lang_value' => 'You have been given a review for a project by',
                    'created_at' => '2023-04-15 18:06:39',
                    'updated_at' => '2023-04-15 18:06:39',
                ),
            165 =>
                array(
                    'id' => 1166,
                    'lang' => 'en',
                    'lang_key' => 'You have been given a review for a project',
                    'lang_value' => 'You have been given a review for a project',
                    'created_at' => '2023-04-15 18:06:39',
                    'updated_at' => '2023-04-15 18:06:39',
                ),
            166 =>
                array(
                    'id' => 1167,
                    'lang' => 'en',
                    'lang_key' => 'Review has been submitted successfully',
                    'lang_value' => 'Review has been submitted successfully',
                    'created_at' => '2023-04-15 18:06:39',
                    'updated_at' => '2023-04-15 18:06:39',
                ),
            167 =>
                array(
                    'id' => 1168,
                    'lang' => 'en',
                    'lang_key' => 'You Already rated this client',
                    'lang_value' => 'You Already rated this client',
                    'created_at' => '2023-04-15 18:06:39',
                    'updated_at' => '2023-04-15 18:06:39',
                ),
            168 =>
                array(
                    'id' => 1169,
                    'lang' => 'en',
                    'lang_key' => 'Please complete the payments to end this project',
                    'lang_value' => 'Please complete the payments to end this project',
                    'created_at' => '2023-04-15 18:11:52',
                    'updated_at' => '2023-04-15 18:11:52',
                ),
            169 =>
                array(
                    'id' => 1170,
                    'lang' => 'en',
                    'lang_key' => 'You have recieved a proposal for a project by',
                    'lang_value' => 'You have recieved a proposal for a project by',
                    'created_at' => '2023-04-15 18:15:51',
                    'updated_at' => '2023-04-15 18:15:51',
                ),
            170 =>
                array(
                    'id' => 1171,
                    'lang' => 'en',
                    'lang_key' => 'You got a new project proposal for project -',
                    'lang_value' => 'You got a new project proposal for project -',
                    'created_at' => '2023-04-15 18:15:51',
                    'updated_at' => '2023-04-15 18:15:51',
                ),
            171 =>
                array(
                    'id' => 1172,
                    'lang' => 'en',
                    'lang_key' => 'Invitation has been sent successfully.',
                    'lang_value' => 'Invitation has been sent successfully.',
                    'created_at' => '2023-04-15 18:15:51',
                    'updated_at' => '2023-04-15 18:15:51',
                ),
            172 =>
                array(
                    'id' => 1173,
                    'lang' => 'en',
                    'lang_key' => 'Private',
                    'lang_value' => 'Private',
                    'created_at' => '2023-04-15 18:16:05',
                    'updated_at' => '2023-04-15 18:16:05',
                ),
            173 =>
                array(
                    'id' => 1174,
                    'lang' => 'en',
                    'lang_key' => 'Project Proposals',
                    'lang_value' => 'Project Proposals',
                    'created_at' => '2023-04-22 00:03:33',
                    'updated_at' => '2023-04-22 00:03:33',
                ),
            174 =>
                array(
                    'id' => 1175,
                    'lang' => 'en',
                    'lang_key' => 'Reject',
                    'lang_value' => 'Reject',
                    'created_at' => '2023-04-22 00:03:33',
                    'updated_at' => '2023-04-22 00:03:33',
                ),
            175 =>
                array(
                    'id' => 1176,
                    'lang' => 'en',
                    'lang_key' => 'Accpet',
                    'lang_value' => 'Accpet',
                    'created_at' => '2023-04-22 00:03:33',
                    'updated_at' => '2023-04-22 00:03:33',
                ),
            176 =>
                array(
                    'id' => 1177,
                    'lang' => 'en',
                    'lang_key' => 'Chat With Client',
                    'lang_value' => 'Chat With Client',
                    'created_at' => '2023-04-22 00:03:33',
                    'updated_at' => '2023-04-22 00:03:33',
                ),
            177 =>
                array(
                    'id' => 1178,
                    'lang' => 'en',
                    'lang_key' => 'Total Requests',
                    'lang_value' => 'Total Requests',
                    'created_at' => '2023-04-22 00:05:13',
                    'updated_at' => '2023-04-22 00:05:13',
                ),
            178 =>
                array(
                    'id' => 1179,
                    'lang' => 'en',
                    'lang_key' => 'Sending date',
                    'lang_value' => 'Sending date',
                    'created_at' => '2023-04-22 00:05:13',
                    'updated_at' => '2023-04-22 00:05:13',
                ),
            179 =>
                array(
                    'id' => 1180,
                    'lang' => 'en',
                    'lang_key' => 'Client Status',
                    'lang_value' => 'Client Status',
                    'created_at' => '2023-04-22 00:05:13',
                    'updated_at' => '2023-04-22 00:05:13',
                ),
            180 =>
                array(
                    'id' => 1181,
                    'lang' => 'en',
                    'lang_key' => 'About Us',
                    'lang_value' => 'About Us',
                    'created_at' => '2023-04-23 05:22:49',
                    'updated_at' => '2023-04-23 05:22:49',
                ),
            181 =>
                array(
                    'id' => 1182,
                    'lang' => 'en',
                    'lang_key' => 'Success Stories',
                    'lang_value' => 'Success Stories',
                    'created_at' => '2023-04-23 05:22:49',
                    'updated_at' => '2023-04-23 05:22:49',
                ),
            182 =>
                array(
                    'id' => 1183,
                    'lang' => 'en',
                    'lang_key' => 'How to hire',
                    'lang_value' => 'How to hire',
                    'created_at' => '2023-04-23 05:22:49',
                    'updated_at' => '2023-04-23 05:22:49',
                ),
            183 =>
                array(
                    'id' => 1184,
                    'lang' => 'en',
                    'lang_key' => 'How to find work',
                    'lang_value' => 'How to find work',
                    'created_at' => '2023-04-23 05:22:49',
                    'updated_at' => '2023-04-23 05:22:49',
                ),
            184 =>
                array(
                    'id' => 1185,
                    'lang' => 'en',
                    'lang_key' => 'Language changed to ',
                    'lang_value' => 'Language changed to ',
                    'created_at' => '2023-05-03 02:06:15',
                    'updated_at' => '2023-05-03 02:06:15',
                ),
            185 =>
                array(
                    'id' => 1186,
                    'lang' => 'en',
                    'lang_key' => 'Learn why Scholarship australia has the right opportunities for you.',
                    'lang_value' => 'Learn why Scholarship australia has the right opportunities for you.',
                    'created_at' => '2023-05-05 13:24:23',
                    'updated_at' => '2023-05-05 13:24:23',
                ),
            186 =>
                array(
                    'id' => 1187,
                    'lang' => 'en',
                    'lang_key' => 'Explore the kind of work available in your field.',
                    'lang_value' => 'Explore the kind of work available in your field.',
                    'created_at' => '2023-05-05 13:24:23',
                    'updated_at' => '2023-05-05 13:24:23',
                ),
            187 =>
                array(
                    'id' => 1188,
                    'lang' => 'en',
                    'lang_key' => 'Show clients you’re the one they want.',
                    'lang_value' => 'Show clients you’re the one they want.',
                    'created_at' => '2023-05-05 13:24:23',
                    'updated_at' => '2023-05-05 13:24:23',
                ),
            188 =>
                array(
                    'id' => 1189,
                    'lang' => 'en',
                    'lang_key' => 'How to find job',
                    'lang_value' => 'How to find job',
                    'created_at' => '2023-05-05 13:24:23',
                    'updated_at' => '2023-05-05 13:24:23',
                ),
            189 =>
                array(
                    'id' => 1190,
                    'lang' => 'en',
                    'lang_key' => 'Express 24H',
                    'lang_value' => 'Express 24H',
                    'created_at' => '2023-05-05 13:28:25',
                    'updated_at' => '2023-05-05 13:28:25',
                ),
            190 =>
                array(
                    'id' => 1191,
                    'lang' => 'en',
                    'lang_key' => 'Up to 3 days',
                    'lang_value' => 'Up to 3 days',
                    'created_at' => '2023-05-05 13:28:25',
                    'updated_at' => '2023-05-05 13:28:25',
                ),
            191 =>
                array(
                    'id' => 1192,
                    'lang' => 'en',
                    'lang_key' => 'Up to 7 days',
                    'lang_value' => 'Up to 7 days',
                    'created_at' => '2023-05-05 13:28:25',
                    'updated_at' => '2023-05-05 13:28:25',
                ),
            192 =>
                array(
                    'id' => 1193,
                    'lang' => 'en',
                    'lang_key' => 'Anytime',
                    'lang_value' => 'Anytime',
                    'created_at' => '2023-05-05 13:28:25',
                    'updated_at' => '2023-05-05 13:28:25',
                ),
            193 =>
                array(
                    'id' => 1194,
                    'lang' => 'en',
                    'lang_key' => 'Adobe Photoshop',
                    'lang_value' => 'Adobe Photoshop',
                    'created_at' => '2023-05-05 13:28:25',
                    'updated_at' => '2023-05-05 13:28:25',
                ),
            194 =>
                array(
                    'id' => 1195,
                    'lang' => 'en',
                    'lang_key' => 'Figma',
                    'lang_value' => 'Figma',
                    'created_at' => '2023-05-05 13:28:25',
                    'updated_at' => '2023-05-05 13:28:25',
                ),
            195 =>
                array(
                    'id' => 1196,
                    'lang' => 'en',
                    'lang_key' => 'Sketch',
                    'lang_value' => 'Sketch',
                    'created_at' => '2023-05-05 13:28:25',
                    'updated_at' => '2023-05-05 13:28:25',
                ),
            196 =>
                array(
                    'id' => 1197,
                    'lang' => 'en',
                    'lang_key' => 'Adobe XD',
                    'lang_value' => 'Adobe XD',
                    'created_at' => '2023-05-05 13:28:25',
                    'updated_at' => '2023-05-05 13:28:25',
                ),
            197 =>
                array(
                    'id' => 1198,
                    'lang' => 'en',
                    'lang_key' => 'Balsamiq',
                    'lang_value' => 'Balsamiq',
                    'created_at' => '2023-05-05 13:28:25',
                    'updated_at' => '2023-05-05 13:28:25',
                ),
            198 =>
                array(
                    'id' => 1199,
                    'lang' => 'en',
                    'lang_key' => 'United States',
                    'lang_value' => 'United States',
                    'created_at' => '2023-05-05 13:28:25',
                    'updated_at' => '2023-05-05 13:28:25',
                ),
            199 =>
                array(
                    'id' => 1200,
                    'lang' => 'en',
                    'lang_key' => 'United Kingdom',
                    'lang_value' => 'United Kingdom',
                    'created_at' => '2023-05-05 13:28:25',
                    'updated_at' => '2023-05-05 13:28:25',
                ),
            200 =>
                array(
                    'id' => 1201,
                    'lang' => 'en',
                    'lang_key' => 'Canada',
                    'lang_value' => 'Canada',
                    'created_at' => '2023-05-05 13:28:25',
                    'updated_at' => '2023-05-05 13:28:25',
                ),
            201 =>
                array(
                    'id' => 1202,
                    'lang' => 'en',
                    'lang_key' => 'Germany',
                    'lang_value' => 'Germany',
                    'created_at' => '2023-05-05 13:28:25',
                    'updated_at' => '2023-05-05 13:28:25',
                ),
            202 =>
                array(
                    'id' => 1203,
                    'lang' => 'en',
                    'lang_key' => 'Turkey',
                    'lang_value' => 'Turkey',
                    'created_at' => '2023-05-05 13:28:25',
                    'updated_at' => '2023-05-05 13:28:25',
                ),
            203 =>
                array(
                    'id' => 1204,
                    'lang' => 'en',
                    'lang_key' => 'Turkish',
                    'lang_value' => 'Turkish',
                    'created_at' => '2023-05-05 13:28:25',
                    'updated_at' => '2023-05-05 13:28:25',
                ),
            204 =>
                array(
                    'id' => 1205,
                    'lang' => 'en',
                    'lang_key' => 'English',
                    'lang_value' => 'English',
                    'created_at' => '2023-05-05 13:28:25',
                    'updated_at' => '2023-05-05 13:28:25',
                ),
            205 =>
                array(
                    'id' => 1206,
                    'lang' => 'en',
                    'lang_key' => 'Italian',
                    'lang_value' => 'Italian',
                    'created_at' => '2023-05-05 13:28:25',
                    'updated_at' => '2023-05-05 13:28:25',
                ),
            206 =>
                array(
                    'id' => 1207,
                    'lang' => 'en',
                    'lang_key' => 'Spanish',
                    'lang_value' => 'Spanish',
                    'created_at' => '2023-05-05 13:28:25',
                    'updated_at' => '2023-05-05 13:28:25',
                ),
            207 =>
                array(
                    'id' => 1208,
                    'lang' => 'en',
                    'lang_key' => 'Top Rated Seller',
                    'lang_value' => 'Top Rated Seller',
                    'created_at' => '2023-05-05 13:28:25',
                    'updated_at' => '2023-05-05 13:28:25',
                ),
            208 =>
                array(
                    'id' => 1209,
                    'lang' => 'en',
                    'lang_key' => 'Level Two',
                    'lang_value' => 'Level Two',
                    'created_at' => '2023-05-05 13:28:25',
                    'updated_at' => '2023-05-05 13:28:25',
                ),
            209 =>
                array(
                    'id' => 1210,
                    'lang' => 'en',
                    'lang_key' => 'Level One',
                    'lang_value' => 'Level One',
                    'created_at' => '2023-05-05 13:28:25',
                    'updated_at' => '2023-05-05 13:28:25',
                ),
            210 =>
                array(
                    'id' => 1211,
                    'lang' => 'en',
                    'lang_key' => 'New Seller',
                    'lang_value' => 'New Seller',
                    'created_at' => '2023-05-05 13:28:25',
                    'updated_at' => '2023-05-05 13:28:25',
                ),
            211 =>
                array(
                    'id' => 1212,
                    'lang' => 'en',
                    'lang_key' => 'It’s a badge of honor for talent who consistently do great work.',
                    'lang_value' => 'It’s a badge of honor for talent who consistently do great work.',
                    'created_at' => '2023-05-07 20:14:28',
                    'updated_at' => '2023-05-07 20:14:28',
                ),
            212 =>
                array(
                    'id' => 1213,
                    'lang' => 'en',
                    'lang_key' => 'Choose how you get paid. Our fixed-price protection releases client payments at project milestones. Hourly protection bills clients every week. However you work, our service fees are the same. Spend less time chasing, more earning.',
                    'lang_value' => 'Choose how you get paid. Our fixed-price protection releases client payments at project milestones. Hourly protection bills clients every week. However you work, our service fees are the same. Spend less time chasing, more earning.',
                    'created_at' => '2023-05-07 20:32:12',
                    'updated_at' => '2023-05-07 20:32:12',
                ),
            213 =>
                array(
                    'id' => 1214,
                    'lang' => 'en',
                    'lang_key' => 'Find Academic Jobs',
                    'lang_value' => 'Find Academic Jobs',
                    'created_at' => '2023-05-10 14:18:06',
                    'updated_at' => '2023-05-10 14:18:06',
                ),
            214 =>
                array(
                    'id' => 1215,
                    'lang' => 'en',
                    'lang_key' => '
Nothing selected ',
                    'lang_value' => '
Nothing selected ',
                    'created_at' => '2023-05-13 21:52:34',
                    'updated_at' => '2023-05-13 21:52:34',
                ),
            215 =>
                array(
                    'id' => 1216,
                    'lang' => 'en',
                    'lang_key' => '
Nothing found ',
                    'lang_value' => '
Nothing found ',
                    'created_at' => '2023-05-13 21:52:34',
                    'updated_at' => '2023-05-13 21:52:34',
                ),
            216 =>
                array(
                    'id' => 1217,
                    'lang' => 'en',
                    'lang_key' => '
Choose file ',
                    'lang_value' => '
Choose file ',
                    'created_at' => '2023-05-13 21:52:34',
                    'updated_at' => '2023-05-13 21:52:34',
                ),
            217 =>
                array(
                    'id' => 1218,
                    'lang' => 'en',
                    'lang_key' => '
File selected ',
                    'lang_value' => '
File selected ',
                    'created_at' => '2023-05-13 21:52:34',
                    'updated_at' => '2023-05-13 21:52:34',
                ),
            218 =>
                array(
                    'id' => 1219,
                    'lang' => 'en',
                    'lang_key' => '
Files selected ',
                    'lang_value' => '
Files selected ',
                    'created_at' => '2023-05-13 21:52:34',
                    'updated_at' => '2023-05-13 21:52:34',
                ),
            219 =>
                array(
                    'id' => 1220,
                    'lang' => 'en',
                    'lang_key' => '
Items selected ',
                    'lang_value' => '
Items selected ',
                    'created_at' => '2023-05-13 21:52:34',
                    'updated_at' => '2023-05-13 21:52:34',
                ),
            220 =>
                array(
                    'id' => 1221,
                    'lang' => 'en',
                    'lang_key' => '
Add more files ',
                    'lang_value' => '
Add more files ',
                    'created_at' => '2023-05-13 21:52:34',
                    'updated_at' => '2023-05-13 21:52:34',
                ),
            221 =>
                array(
                    'id' => 1222,
                    'lang' => 'en',
                    'lang_key' => '
Adding more files ',
                    'lang_value' => '
Adding more files ',
                    'created_at' => '2023-05-13 21:52:34',
                    'updated_at' => '2023-05-13 21:52:34',
                ),
            222 =>
                array(
                    'id' => 1223,
                    'lang' => 'en',
                    'lang_key' => '
Drop files here,
paste or',
                    'lang_value' => '
Drop files here,
paste or',
                    'created_at' => '2023-05-13 21:52:34',
                    'updated_at' => '2023-05-13 21:52:34',
                ),
            223 =>
                array(
                    'id' => 1224,
                    'lang' => 'en',
                    'lang_key' => '
Browse',
                    'lang_value' => '
Browse',
                    'created_at' => '2023-05-13 21:52:34',
                    'updated_at' => '2023-05-13 21:52:34',
                ),
            224 =>
                array(
                    'id' => 1225,
                    'lang' => 'en',
                    'lang_key' => '
Upload complete ',
                    'lang_value' => '
Upload complete ',
                    'created_at' => '2023-05-13 21:52:34',
                    'updated_at' => '2023-05-13 21:52:34',
                ),
            225 =>
                array(
                    'id' => 1226,
                    'lang' => 'en',
                    'lang_key' => '
Upload paused ',
                    'lang_value' => '
Upload paused ',
                    'created_at' => '2023-05-13 21:52:34',
                    'updated_at' => '2023-05-13 21:52:34',
                ),
            226 =>
                array(
                    'id' => 1227,
                    'lang' => 'en',
                    'lang_key' => '
Resume upload ',
                    'lang_value' => '
Resume upload ',
                    'created_at' => '2023-05-13 21:52:34',
                    'updated_at' => '2023-05-13 21:52:34',
                ),
            227 =>
                array(
                    'id' => 1228,
                    'lang' => 'en',
                    'lang_key' => '
Pause upload ',
                    'lang_value' => '
Pause upload ',
                    'created_at' => '2023-05-13 21:52:34',
                    'updated_at' => '2023-05-13 21:52:34',
                ),
            228 =>
                array(
                    'id' => 1229,
                    'lang' => 'en',
                    'lang_key' => '
Retry upload ',
                    'lang_value' => '
Retry upload ',
                    'created_at' => '2023-05-13 21:52:34',
                    'updated_at' => '2023-05-13 21:52:34',
                ),
            229 =>
                array(
                    'id' => 1230,
                    'lang' => 'en',
                    'lang_key' => '
Cancel upload ',
                    'lang_value' => '
Cancel upload ',
                    'created_at' => '2023-05-13 21:52:34',
                    'updated_at' => '2023-05-13 21:52:34',
                ),
            230 =>
                array(
                    'id' => 1231,
                    'lang' => 'en',
                    'lang_key' => '
Uploading ',
                    'lang_value' => '
Uploading ',
                    'created_at' => '2023-05-13 21:52:34',
                    'updated_at' => '2023-05-13 21:52:34',
                ),
            231 =>
                array(
                    'id' => 1232,
                    'lang' => 'en',
                    'lang_key' => '
Processing ',
                    'lang_value' => '
Processing ',
                    'created_at' => '2023-05-13 21:52:34',
                    'updated_at' => '2023-05-13 21:52:34',
                ),
            232 =>
                array(
                    'id' => 1233,
                    'lang' => 'en',
                    'lang_key' => '
Complete ',
                    'lang_value' => '
Complete ',
                    'created_at' => '2023-05-13 21:52:34',
                    'updated_at' => '2023-05-13 21:52:34',
                ),
            233 =>
                array(
                    'id' => 1234,
                    'lang' => 'en',
                    'lang_key' => '
File ',
                    'lang_value' => '
File ',
                    'created_at' => '2023-05-13 21:52:34',
                    'updated_at' => '2023-05-13 21:52:34',
                ),
            234 =>
                array(
                    'id' => 1235,
                    'lang' => 'en',
                    'lang_key' => '
Files ',
                    'lang_value' => '
Files ',
                    'created_at' => '2023-05-13 21:52:34',
                    'updated_at' => '2023-05-13 21:52:34',
                ),
            235 =>
                array(
                    'id' => 1236,
                    'lang' => 'en',
                    'lang_key' => 'Choose your way to get work done',
                    'lang_value' => 'Choose your way to get work done',
                    'created_at' => '2023-05-13 23:32:55',
                    'updated_at' => '2023-05-13 23:32:55',
                ),
            236 =>
                array(
                    'id' => 1237,
                    'lang' => 'en',
                    'lang_key' => 'Work the way you want',
                    'lang_value' => 'Work the way you want',
                    'created_at' => '2023-05-14 08:20:17',
                    'updated_at' => '2023-05-14 08:20:17',
                ),
            237 =>
                array(
                    'id' => 1238,
                    'lang' => 'en',
                    'lang_key' => 'Find the right work for you, with great clients, at the world’s work marketplace.',
                    'lang_value' => 'Find the right work for you, with great clients, at the world’s work marketplace.',
                    'created_at' => '2023-05-14 08:20:17',
                    'updated_at' => '2023-05-14 08:20:17',
                ),
            238 =>
                array(
                    'id' => 1239,
                    'lang' => 'en',
                    'lang_key' => 'Create Your Profile',
                    'lang_value' => 'Create Your Profile',
                    'created_at' => '2023-05-14 08:20:17',
                    'updated_at' => '2023-05-14 08:20:17',
                ),
            239 =>
                array(
                    'id' => 1240,
                    'lang' => 'en',
                    'lang_key' => 'Professionals rate clients',
                    'lang_value' => 'Professionals rate clients',
                    'created_at' => '2023-05-14 08:20:17',
                    'updated_at' => '2023-05-14 08:20:17',
                ),
            240 =>
                array(
                    'id' => 1241,
                    'lang' => 'en',
                    'lang_key' => '4.9/5',
                    'lang_value' => '4.9/5',
                    'created_at' => '2023-05-14 08:20:17',
                    'updated_at' => '2023-05-14 08:20:17',
                ),
            241 =>
                array(
                    'id' => 1242,
                    'lang' => 'en',
                    'lang_key' => 'based on 2.4M+ reviews',
                    'lang_value' => 'based on 2.4M+ reviews',
                    'created_at' => '2023-05-14 08:20:17',
                    'updated_at' => '2023-05-14 08:20:17',
                ),
            242 =>
                array(
                    'id' => 1243,
                    'lang' => 'en',
                    'lang_key' => 'How it works',
                    'lang_value' => 'How it works',
                    'created_at' => '2023-05-14 08:20:17',
                    'updated_at' => '2023-05-14 08:20:17',
                ),
            243 =>
                array(
                    'id' => 1244,
                    'lang' => 'en',
                    'lang_key' => 'Create your profile (it’s free)',
                    'lang_value' => 'Create your profile (it’s free)',
                    'created_at' => '2023-05-14 08:20:17',
                    'updated_at' => '2023-05-14 08:20:17',
                ),
            244 =>
                array(
                    'id' => 1245,
                    'lang' => 'en',
                    'lang_key' => 'An eye-catching title and client-focused overview help us match you to the work you want. Include your work history, your skills, and your photo. Add more, like an introduction video, to create a profile that really stands out.',
                    'lang_value' => 'An eye-catching title and client-focused overview help us match you to the work you want. Include your work history, your skills, and your photo. Add more, like an introduction video, to create a profile that really stands out.',
                    'created_at' => '2023-05-14 08:20:17',
                    'updated_at' => '2023-05-14 08:20:17',
                ),
            245 =>
                array(
                    'id' => 1246,
                    'lang' => 'en',
                    'lang_key' => 'Explore ways to earn',
                    'lang_value' => 'Explore ways to earn',
                    'created_at' => '2023-05-14 08:20:17',
                    'updated_at' => '2023-05-14 08:20:17',
                ),
            246 =>
                array(
                    'id' => 1247,
                    'lang' => 'en',
                    'lang_key' => 'Work and earn in different ways. Bid for jobs. Pitch your projects. Discuss your in-demand skills with our recruiters so they can find opportunities aligned with your passions and career goals. Do all three. Create a predictable pipeline and build your network',
                    'lang_value' => 'Work and earn in different ways. Bid for jobs. Pitch your projects. Discuss your in-demand skills with our recruiters so they can find opportunities aligned with your passions and career goals. Do all three. Create a predictable pipeline and build your network',
                    'created_at' => '2023-05-14 08:20:17',
                    'updated_at' => '2023-05-14 08:20:17',
                ),
            247 =>
                array(
                    'id' => 1248,
                    'lang' => 'en',
                    'lang_key' => 'See ways to earn',
                    'lang_value' => 'See ways to earn',
                    'created_at' => '2023-05-14 08:20:17',
                    'updated_at' => '2023-05-14 08:20:17',
                ),
            248 =>
                array(
                    'id' => 1249,
                    'lang' => 'en',
                    'lang_key' => 'Get paid securely',
                    'lang_value' => 'Get paid securely',
                    'created_at' => '2023-05-14 08:20:18',
                    'updated_at' => '2023-05-14 08:20:18',
                ),
            249 =>
                array(
                    'id' => 1250,
                    'lang' => 'en',
                    'lang_key' => 'Find your next opportunity',
                    'lang_value' => 'Find your next opportunity',
                    'created_at' => '2023-05-14 08:20:18',
                    'updated_at' => '2023-05-14 08:20:18',
                ),
            250 =>
                array(
                    'id' => 1251,
                    'lang' => 'en',
                    'lang_key' => 'Search on Talent Marketplace™ for the hourly or fixed-price work you’re looking for. Submit a proposal, set your rate, and show how great you’ll be. Give a little extra by sharing your unique approach and offering a rapport-building interview',
                    'lang_value' => 'Search on Talent Marketplace™ for the hourly or fixed-price work you’re looking for. Submit a proposal, set your rate, and show how great you’ll be. Give a little extra by sharing your unique approach and offering a rapport-building interview',
                    'created_at' => '2023-05-14 08:20:18',
                    'updated_at' => '2023-05-14 08:20:18',
                ),
            251 =>
                array(
                    'id' => 1252,
                    'lang' => 'en',
                    'lang_key' => 'WordPress website',
                    'lang_value' => 'WordPress website',
                    'created_at' => '2023-05-14 08:20:18',
                    'updated_at' => '2023-05-14 08:20:18',
                ),
            252 =>
                array(
                    'id' => 1253,
                    'lang' => 'en',
                    'lang_key' => 'From $300',
                    'lang_value' => 'From $300',
                    'created_at' => '2023-05-14 08:20:18',
                    'updated_at' => '2023-05-14 08:20:18',
                ),
            253 =>
                array(
                    'id' => 1254,
                    'lang' => 'en',
                    'lang_key' => 'Stefan M.',
                    'lang_value' => 'Stefan M.',
                    'created_at' => '2023-05-14 08:20:18',
                    'updated_at' => '2023-05-14 08:20:18',
                ),
            254 =>
                array(
                    'id' => 1255,
                    'lang' => 'en',
                    'lang_key' => 'Blog Posts',
                    'lang_value' => 'Blog Posts',
                    'created_at' => '2023-05-14 08:20:18',
                    'updated_at' => '2023-05-14 08:20:18',
                ),
            255 =>
                array(
                    'id' => 1256,
                    'lang' => 'en',
                    'lang_key' => 'From $250',
                    'lang_value' => 'From $250',
                    'created_at' => '2023-05-14 08:20:18',
                    'updated_at' => '2023-05-14 08:20:18',
                ),
            256 =>
                array(
                    'id' => 1257,
                    'lang' => 'en',
                    'lang_key' => 'Md. Mojahidul I.',
                    'lang_value' => 'Md. Mojahidul I.',
                    'created_at' => '2023-05-14 08:20:18',
                    'updated_at' => '2023-05-14 08:20:18',
                ),
            257 =>
                array(
                    'id' => 1258,
                    'lang' => 'en',
                    'lang_key' => 'Sell what you do best',
                    'lang_value' => 'Sell what you do best',
                    'created_at' => '2023-05-14 08:20:18',
                    'updated_at' => '2023-05-14 08:20:18',
                ),
            258 =>
                array(
                    'id' => 1259,
                    'lang' => 'en',
                    'lang_key' => 'Create easy-to-buy projects with Project Catalog™. Match your projects to what clients need. Be clear upfront by defining your scope, timing, price, and terms. Once we’ve approved your project, clients can start to buy.',
                    'lang_value' => 'Create easy-to-buy projects with Project Catalog™. Match your projects to what clients need. Be clear upfront by defining your scope, timing, price, and terms. Once we’ve approved your project, clients can start to buy.',
                    'created_at' => '2023-05-14 08:20:18',
                    'updated_at' => '2023-05-14 08:20:18',
                ),
            259 =>
                array(
                    'id' => 1260,
                    'lang' => 'en',
                    'lang_key' => 'See Other Projects',
                    'lang_value' => 'See Other Projects',
                    'created_at' => '2023-05-14 08:20:18',
                    'updated_at' => '2023-05-14 08:20:18',
                ),
            260 =>
                array(
                    'id' => 1261,
                    'lang' => 'en',
                    'lang_key' => 'Let the work find you',
                    'lang_value' => 'Let the work find you',
                    'created_at' => '2023-05-14 08:20:18',
                    'updated_at' => '2023-05-14 08:20:18',
                ),
            261 =>
                array(
                    'id' => 1262,
                    'lang' => 'en',
                    'lang_key' => 'Does your work stand out? Are your skills in demand? If you’re in development, design, or marketing, you can apply to our fast lane. Our recruiters will assess your hard-earned experience and match you to exclusive opportunities with trusted clients.',
                    'lang_value' => 'Does your work stand out? Are your skills in demand? If you’re in development, design, or marketing, you can apply to our fast lane. Our recruiters will assess your hard-earned experience and match you to exclusive opportunities with trusted clients.',
                    'created_at' => '2023-05-14 08:20:18',
                    'updated_at' => '2023-05-14 08:20:18',
                ),
            262 =>
                array(
                    'id' => 1263,
                    'lang' => 'en',
                    'lang_key' => 'Apply to Join',
                    'lang_value' => 'Apply to Join',
                    'created_at' => '2023-05-14 08:20:18',
                    'updated_at' => '2023-05-14 08:20:18',
                ),
            263 =>
                array(
                    'id' => 1264,
                    'lang' => 'en',
                    'lang_key' => 'How payments work',
                    'lang_value' => 'How payments work',
                    'created_at' => '2023-05-14 08:20:18',
                    'updated_at' => '2023-05-14 08:20:18',
                ),
            264 =>
                array(
                    'id' => 1265,
                    'lang' => 'en',
                    'lang_key' => 'Whether you’re paid hourly or on a fixed-price contract, all the work you complete comes with payment protection.',
                    'lang_value' => 'Whether you’re paid hourly or on a fixed-price contract, all the work you complete comes with payment protection.',
                    'created_at' => '2023-05-14 08:20:18',
                    'updated_at' => '2023-05-14 08:20:18',
                ),
            265 =>
                array(
                    'id' => 1266,
                    'lang' => 'en',
                    'lang_key' => 'All in one place',
                    'lang_value' => 'All in one place',
                    'created_at' => '2023-05-14 08:20:18',
                    'updated_at' => '2023-05-14 08:20:18',
                ),
            266 =>
                array(
                    'id' => 1267,
                    'lang' => 'en',
                    'lang_key' => 'Invoice clients and track your earnings on Upwork for a simple and streamlined process.',
                    'lang_value' => 'Invoice clients and track your earnings on Upwork for a simple and streamlined process.',
                    'created_at' => '2023-05-14 08:20:18',
                    'updated_at' => '2023-05-14 08:20:18',
                ),
            267 =>
                array(
                    'id' => 1268,
                    'lang' => 'en',
                    'lang_key' => 'Choose how you get paid',
                    'lang_value' => 'Choose how you get paid',
                    'created_at' => '2023-05-14 08:20:18',
                    'updated_at' => '2023-05-14 08:20:18',
                ),
            268 =>
                array(
                    'id' => 1269,
                    'lang' => 'en',
                    'lang_key' => 'Use what works best for you—including direct deposit, PayPal, Payoneer, wire transfer, and more..',
                    'lang_value' => 'Use what works best for you—including direct deposit, PayPal, Payoneer, wire transfer, and more..',
                    'created_at' => '2023-05-14 08:20:18',
                    'updated_at' => '2023-05-14 08:20:18',
                ),
            269 =>
                array(
                    'id' => 1270,
                    'lang' => 'en',
                    'lang_key' => 'No fees until you complete your work',
                    'lang_value' => 'No fees until you complete your work',
                    'created_at' => '2023-05-14 08:20:18',
                    'updated_at' => '2023-05-14 08:20:18',
                ),
            270 =>
                array(
                    'id' => 1271,
                    'lang' => 'en',
                    'lang_key' => 'Our service fees are taken as a percentage of your earnings. We charge you based on lifetime earnings with each client:',
                    'lang_value' => 'Our service fees are taken as a percentage of your earnings. We charge you based on lifetime earnings with each client:',
                    'created_at' => '2023-05-14 08:20:18',
                    'updated_at' => '2023-05-14 08:20:18',
                ),
            271 =>
                array(
                    'id' => 1272,
                    'lang' => 'en',
                    'lang_key' => '20% for the first $500 you bill your client',
                    'lang_value' => '20% for the first $500 you bill your client',
                    'created_at' => '2023-05-14 08:20:18',
                    'updated_at' => '2023-05-14 08:20:18',
                ),
            272 =>
                array(
                    'id' => 1273,
                    'lang' => 'en',
                    'lang_key' => '10% for total billings between $500.01 and $10,000',
                    'lang_value' => '10% for total billings between $500.01 and $10,000',
                    'created_at' => '2023-05-14 08:20:18',
                    'updated_at' => '2023-05-14 08:20:18',
                ),
            273 =>
                array(
                    'id' => 1274,
                    'lang' => 'en',
                    'lang_key' => '5% for total billings over $10,000',
                    'lang_value' => '5% for total billings over $10,000',
                    'created_at' => '2023-05-14 08:20:18',
                    'updated_at' => '2023-05-14 08:20:18',
                ),
            274 =>
                array(
                    'id' => 1275,
                    'lang' => 'en',
                    'lang_key' => 'Learn more about service fees.',
                    'lang_value' => 'Learn more about service fees.',
                    'created_at' => '2023-05-14 08:20:18',
                    'updated_at' => '2023-05-14 08:20:18',
                ),
            275 =>
                array(
                    'id' => 1276,
                    'lang' => 'en',
                    'lang_key' => '
Earnings ',
                    'lang_value' => '
Earnings ',
                    'created_at' => '2023-05-17 14:06:31',
                    'updated_at' => '2023-05-17 14:06:31',
                ),
            276 =>
                array(
                    'id' => 1277,
                    'lang' => 'en',
                    'lang_key' => 'Write your text....',
                    'lang_value' => 'Write your text....',
                    'created_at' => '2023-05-17 20:16:33',
                    'updated_at' => '2023-05-17 20:16:33',
                ),
            277 =>
                array(
                    'id' => 1278,
                    'lang' => 'en',
                    'lang_key' => 'All blogs',
                    'lang_value' => 'All blogs',
                    'created_at' => '2023-05-20 02:53:28',
                    'updated_at' => '2023-05-20 02:53:28',
                ),
            278 =>
                array(
                    'id' => 1279,
                    'lang' => 'en',
                    'lang_key' => 'Add your description',
                    'lang_value' => 'Add your description',
                    'created_at' => '2023-05-21 12:27:54',
                    'updated_at' => '2023-05-21 12:27:54',
                ),
            279 =>
                array(
                    'id' => 1280,
                    'lang' => 'en',
                    'lang_key' => 'Post Academic Jobs',
                    'lang_value' => 'Post Academic Jobs',
                    'created_at' => '2023-05-21 14:34:16',
                    'updated_at' => '2023-05-21 14:34:16',
                ),
            280 =>
                array(
                    'id' => 1281,
                    'lang' => 'en',
                    'lang_key' => 'Find Academic Consultants',
                    'lang_value' => 'Find Academic Consultants',
                    'created_at' => '2023-05-21 14:34:16',
                    'updated_at' => '2023-05-21 14:34:16',
                ),
            281 =>
                array(
                    'id' => 1282,
                    'lang' => 'en',
                    'lang_key' => 'Learn about how to grow your independent career.',
                    'lang_value' => 'Learn about how to grow your independent career.',
                    'created_at' => '2023-05-21 14:34:16',
                    'updated_at' => '2023-05-21 14:34:16',
                ),
            282 =>
                array(
                    'id' => 1283,
                    'lang' => 'en',
                    'lang_key' => 'See what it\'s like to collaborate on scholarship australia',
                    'lang_value' => 'See what it\'s like to collaborate on scholarship australia',
                    'created_at' => '2023-05-21 14:34:16',
                    'updated_at' => '2023-05-21 14:34:16',
                ),
            283 =>
                array(
                    'id' => 1284,
                    'lang' => 'en',
                    'lang_key' => 'Discover how to team work strategically and grow together',
                    'lang_value' => 'Discover how to team work strategically and grow together',
                    'created_at' => '2023-05-21 14:34:16',
                    'updated_at' => '2023-05-21 14:34:16',
                ),
            284 =>
                array(
                    'id' => 1285,
                    'lang' => 'en',
                    'lang_key' => ' Find Workshops& Training ',
                    'lang_value' => ' Find Workshops& Training ',
                    'created_at' => '2023-05-21 14:34:16',
                    'updated_at' => '2023-05-21 14:34:16',
                ),
            285 =>
                array(
                    'id' => 1286,
                    'lang' => 'en',
                    'lang_key' => ' FreelancerEdu Benefits',
                    'lang_value' => ' FreelancerEdu Benefits',
                    'created_at' => '2023-05-21 14:34:16',
                    'updated_at' => '2023-05-21 14:34:16',
                ),
            286 =>
                array(
                    'id' => 1287,
                    'lang' => 'en',
                    'lang_key' => 'Scholarships',
                    'lang_value' => 'Scholarships',
                    'created_at' => '2023-05-21 15:46:07',
                    'updated_at' => '2023-05-21 15:46:07',
                ),
            287 =>
                array(
                    'id' => 1288,
                    'lang' => 'en',
                    'lang_key' => 'All Scholarships',
                    'lang_value' => 'All Scholarships',
                    'created_at' => '2023-05-21 15:46:07',
                    'updated_at' => '2023-05-21 15:46:07',
                ),
            288 =>
                array(
                    'id' => 1289,
                    'lang' => 'en',
                    'lang_key' => 'Study Level',
                    'lang_value' => 'Study Level',
                    'created_at' => '2023-05-21 15:46:07',
                    'updated_at' => '2023-05-21 15:46:07',
                ),
            289 =>
                array(
                    'id' => 1290,
                    'lang' => 'en',
                    'lang_key' => 'All Scholarship',
                    'lang_value' => 'All Scholarship',
                    'created_at' => '2023-05-21 15:51:30',
                    'updated_at' => '2023-05-21 15:51:30',
                ),
            290 =>
                array(
                    'id' => 1291,
                    'lang' => 'en',
                    'lang_key' => 'Add New Scholarship',
                    'lang_value' => 'Add New Scholarship',
                    'created_at' => '2023-05-21 15:51:30',
                    'updated_at' => '2023-05-21 15:51:30',
                ),
            291 =>
                array(
                    'id' => 1292,
                    'lang' => 'en',
                    'lang_key' => 'All Scholarship posts',
                    'lang_value' => 'All Scholarship posts',
                    'created_at' => '2023-05-21 15:51:30',
                    'updated_at' => '2023-05-21 15:51:30',
                ),
            292 =>
                array(
                    'id' => 1293,
                    'lang' => 'en',
                    'lang_key' => 'level',
                    'lang_value' => 'level',
                    'created_at' => '2023-05-21 15:51:30',
                    'updated_at' => '2023-05-21 15:51:30',
                ),
            293 =>
                array(
                    'id' => 1294,
                    'lang' => 'en',
                    'lang_key' => 'All Scholarship Categories',
                    'lang_value' => 'All Scholarship Categories',
                    'created_at' => '2023-05-21 15:51:40',
                    'updated_at' => '2023-05-21 15:51:40',
                ),
            294 =>
                array(
                    'id' => 1295,
                    'lang' => 'en',
                    'lang_key' => 'Scholarship Categories',
                    'lang_value' => 'Scholarship Categories',
                    'created_at' => '2023-05-21 15:51:40',
                    'updated_at' => '2023-05-21 15:51:40',
                ),
            295 =>
                array(
                    'id' => 1296,
                    'lang' => 'en',
                    'lang_key' => 'All Scholarship Study Level',
                    'lang_value' => 'All Scholarship Study Level',
                    'created_at' => '2023-05-21 15:51:47',
                    'updated_at' => '2023-05-21 15:51:47',
                ),
            296 =>
                array(
                    'id' => 1297,
                    'lang' => 'en',
                    'lang_key' => 'Scholarship Study Level',
                    'lang_value' => 'Scholarship Study Level',
                    'created_at' => '2023-05-21 15:51:47',
                    'updated_at' => '2023-05-21 15:51:47',
                ),
            297 =>
                array(
                    'id' => 1298,
                    'lang' => 'en',
                    'lang_key' => 'Add New Study Level',
                    'lang_value' => 'Add New Study Level',
                    'created_at' => '2023-05-21 15:51:47',
                    'updated_at' => '2023-05-21 15:51:47',
                ),
            298 =>
                array(
                    'id' => 1299,
                    'lang' => 'en',
                    'lang_key' => 'Level Name',
                    'lang_value' => 'Level Name',
                    'created_at' => '2023-05-21 15:51:47',
                    'updated_at' => '2023-05-21 15:51:47',
                ),
            299 =>
                array(
                    'id' => 1300,
                    'lang' => 'en',
                    'lang_key' => 'Save New Study Level',
                    'lang_value' => 'Save New Study Level',
                    'created_at' => '2023-05-21 15:51:47',
                    'updated_at' => '2023-05-21 15:51:47',
                ),
            300 =>
                array(
                    'id' => 1301,
                    'lang' => 'en',
                    'lang_key' => ' Find Workshops & Training ',
                    'lang_value' => ' Find Workshops & Training ',
                    'created_at' => '2023-05-21 17:09:31',
                    'updated_at' => '2023-05-21 17:09:31',
                ),
            301 =>
                array(
                    'id' => 1302,
                    'lang' => 'en',
                    'lang_key' => 'Category deleted',
                    'lang_value' => 'Category deleted',
                    'created_at' => '2023-05-21 17:26:12',
                    'updated_at' => '2023-05-21 17:26:12',
                ),
            302 =>
                array(
                    'id' => 1303,
                    'lang' => 'en',
                    'lang_key' => 'Scholarship Information',
                    'lang_value' => 'Scholarship Information',
                    'created_at' => '2023-05-22 14:41:43',
                    'updated_at' => '2023-05-22 14:41:43',
                ),
            303 =>
                array(
                    'id' => 1304,
                    'lang' => 'en',
                    'lang_key' => 'Scholarship Title',
                    'lang_value' => 'Scholarship Title',
                    'created_at' => '2023-05-22 14:41:43',
                    'updated_at' => '2023-05-22 14:41:43',
                ),
            304 =>
                array(
                    'id' => 1305,
                    'lang' => 'en',
                    'lang_key' => 'Select Level',
                    'lang_value' => 'Select Level',
                    'created_at' => '2023-05-22 14:41:43',
                    'updated_at' => '2023-05-22 14:41:43',
                ),
            305 =>
                array(
                    'id' => 1306,
                    'lang' => 'en',
                    'lang_key' => 'Post a Job',
                    'lang_value' => 'Post a Job',
                    'created_at' => '2023-05-24 04:52:34',
                    'updated_at' => '2023-05-24 04:52:34',
                ),
            306 =>
                array(
                    'id' => 1307,
                    'lang' => 'en',
                    'lang_key' => 'University',
                    'lang_value' => 'University',
                    'created_at' => '2023-05-24 04:53:52',
                    'updated_at' => '2023-05-24 04:53:52',
                ),
            307 =>
                array(
                    'id' => 1308,
                    'lang' => 'en',
                    'lang_key' => 'Role has been updated successfully',
                    'lang_value' => 'Role has been updated successfully',
                    'created_at' => '2023-05-24 05:04:48',
                    'updated_at' => '2023-05-24 05:04:48',
                ),
            308 =>
                array(
                    'id' => 1309,
                    'lang' => 'en',
                    'lang_key' => 'Find freelancers and run projects your way at the world’s work marketplace.',
                    'lang_value' => 'Find freelancers and run projects your way at the world’s work marketplace.',
                    'created_at' => '2023-05-24 06:52:49',
                    'updated_at' => '2023-05-24 06:52:49',
                ),
            309 =>
                array(
                    'id' => 1310,
                    'lang' => 'en',
                    'lang_key' => 'Removed Category',
                    'lang_value' => 'Removed Category',
                    'created_at' => '2023-05-24 17:03:08',
                    'updated_at' => '2023-05-24 17:03:08',
                ),
            310 =>
                array(
                    'id' => 1311,
                    'lang' => 'en',
                    'lang_key' => 'Sub location',
                    'lang_value' => 'Sub location',
                    'created_at' => '2023-05-29 09:40:15',
                    'updated_at' => '2023-05-29 09:40:15',
                ),
            311 =>
                array(
                    'id' => 1312,
                    'lang' => 'en',
                    'lang_key' => 'Qualification',
                    'lang_value' => 'Qualification',
                    'created_at' => '2023-05-29 09:40:15',
                    'updated_at' => '2023-05-29 09:40:15',
                ),
            312 =>
                array(
                    'id' => 1313,
                    'lang' => 'en',
                    'lang_key' => 'Who can apply',
                    'lang_value' => 'Who can apply',
                    'created_at' => '2023-05-29 09:40:15',
                    'updated_at' => '2023-05-29 09:40:15',
                ),
            313 =>
                array(
                    'id' => 1314,
                    'lang' => 'en',
                    'lang_key' => 'Scholarship  Title',
                    'lang_value' => 'Scholarship  Title',
                    'created_at' => '2023-05-29 09:40:48',
                    'updated_at' => '2023-05-29 09:40:48',
                ),
            314 =>
                array(
                    'id' => 1315,
                    'lang' => 'en',
                    'lang_key' => 'Select study level',
                    'lang_value' => 'Select study level',
                    'created_at' => '2023-05-29 09:40:48',
                    'updated_at' => '2023-05-29 09:40:48',
                ),
            315 =>
                array(
                    'id' => 1316,
                    'lang' => 'en',
                    'lang_key' => 'select university',
                    'lang_value' => 'select university',
                    'created_at' => '2023-05-29 09:40:48',
                    'updated_at' => '2023-05-29 09:40:48',
                ),
            316 =>
                array(
                    'id' => 1317,
                    'lang' => 'en',
                    'lang_key' => 'Website Link',
                    'lang_value' => 'Website Link',
                    'created_at' => '2023-05-29 09:40:48',
                    'updated_at' => '2023-05-29 09:40:48',
                ),
            317 =>
                array(
                    'id' => 1318,
                    'lang' => 'en',
                    'lang_key' => 'select Country',
                    'lang_value' => 'select Country',
                    'created_at' => '2023-05-29 09:40:48',
                    'updated_at' => '2023-05-29 09:40:48',
                ),
            318 =>
                array(
                    'id' => 1319,
                    'lang' => 'en',
                    'lang_key' => 'Select City',
                    'lang_value' => 'Select City',
                    'created_at' => '2023-05-29 09:40:48',
                    'updated_at' => '2023-05-29 09:40:48',
                ),
            319 =>
                array(
                    'id' => 1320,
                    'lang' => 'en',
                    'lang_key' => 'Select qualification',
                    'lang_value' => 'Select qualification',
                    'created_at' => '2023-05-29 09:40:48',
                    'updated_at' => '2023-05-29 09:40:48',
                ),
            320 =>
                array(
                    'id' => 1321,
                    'lang' => 'en',
                    'lang_key' => 'Scholarship category has been created successfully',
                    'lang_value' => 'Scholarship category has been created successfully',
                    'created_at' => '2023-05-29 09:41:54',
                    'updated_at' => '2023-05-29 09:41:54',
                ),
            321 =>
                array(
                    'id' => 1322,
                    'lang' => 'en',
                    'lang_key' => 'All Scholarship University',
                    'lang_value' => 'All Scholarship University',
                    'created_at' => '2023-05-29 09:42:08',
                    'updated_at' => '2023-05-29 09:42:08',
                ),
            322 =>
                array(
                    'id' => 1323,
                    'lang' => 'en',
                    'lang_key' => 'Scholarship University',
                    'lang_value' => 'Scholarship University',
                    'created_at' => '2023-05-29 09:42:08',
                    'updated_at' => '2023-05-29 09:42:08',
                ),
            323 =>
                array(
                    'id' => 1324,
                    'lang' => 'en',
                    'lang_key' => 'University Name',
                    'lang_value' => 'University Name',
                    'created_at' => '2023-05-29 09:42:08',
                    'updated_at' => '2023-05-29 09:42:08',
                ),
            324 =>
                array(
                    'id' => 1325,
                    'lang' => 'en',
                    'lang_key' => 'All Scholarship Country name',
                    'lang_value' => 'All Scholarship Country name',
                    'created_at' => '2023-05-29 09:44:20',
                    'updated_at' => '2023-05-29 09:44:20',
                ),
            325 =>
                array(
                    'id' => 1326,
                    'lang' => 'en',
                    'lang_key' => 'Scholarship Country name',
                    'lang_value' => 'Scholarship Country name',
                    'created_at' => '2023-05-29 09:44:20',
                    'updated_at' => '2023-05-29 09:44:20',
                ),
            326 =>
                array(
                    'id' => 1327,
                    'lang' => 'en',
                    'lang_key' => 'Country Name',
                    'lang_value' => 'Country Name',
                    'created_at' => '2023-05-29 09:44:20',
                    'updated_at' => '2023-05-29 09:44:20',
                ),
            327 =>
                array(
                    'id' => 1328,
                    'lang' => 'en',
                    'lang_key' => 'Save New Country name',
                    'lang_value' => 'Save New Country name',
                    'created_at' => '2023-05-29 09:44:20',
                    'updated_at' => '2023-05-29 09:44:20',
                ),
            328 =>
                array(
                    'id' => 1329,
                    'lang' => 'en',
                    'lang_key' => 'Scholarship post has been updated successfully',
                    'lang_value' => 'Scholarship post has been updated successfully',
                    'created_at' => '2023-05-31 04:04:45',
                    'updated_at' => '2023-05-31 04:04:45',
                ),
            329 =>
                array(
                    'id' => 1330,
                    'lang' => 'en',
                    'lang_key' => 'Minimum 6 characters',
                    'lang_value' => 'Minimum 6 characters',
                    'created_at' => '2023-05-31 06:57:19',
                    'updated_at' => '2023-05-31 06:57:19',
                ),
            330 =>
                array(
                    'id' => 1331,
                    'lang' => 'en',
                    'lang_key' => '  Scholarship Type',
                    'lang_value' => '  Scholarship Type',
                    'created_at' => '2023-06-06 01:34:30',
                    'updated_at' => '2023-06-06 01:34:30',
                ),
            331 =>
                array(
                    'id' => 1332,
                    'lang' => 'en',
                    'lang_key' => '    Level of Study',
                    'lang_value' => '    Level of Study',
                    'created_at' => '2023-06-06 01:34:30',
                    'updated_at' => '2023-06-06 01:34:30',
                ),
            332 =>
                array(
                    'id' => 1333,
                    'lang' => 'en',
                    'lang_key' => '   Field of Study',
                    'lang_value' => '   Field of Study',
                    'created_at' => '2023-06-06 01:34:30',
                    'updated_at' => '2023-06-06 01:34:30',
                ),
            333 =>
                array(
                    'id' => 1334,
                    'lang' => 'en',
                    'lang_key' => '    Location',
                    'lang_value' => '    Location',
                    'created_at' => '2023-06-06 01:37:40',
                    'updated_at' => '2023-06-06 01:37:40',
                ),
            334 =>
                array(
                    'id' => 1335,
                    'lang' => 'en',
                    'lang_key' => 'Scholarship Country Name has been created successfully',
                    'lang_value' => 'Scholarship Country Name has been created successfully',
                    'created_at' => '2023-06-06 17:44:55',
                    'updated_at' => '2023-06-06 17:44:55',
                ),
            335 =>
                array(
                    'id' => 1336,
                    'lang' => 'en',
                    'lang_key' => 'Scholarship Country Information',
                    'lang_value' => 'Scholarship Country Information',
                    'created_at' => '2023-06-06 17:49:13',
                    'updated_at' => '2023-06-06 17:49:13',
                ),
            336 =>
                array(
                    'id' => 1337,
                    'lang' => 'en',
                    'lang_key' => 'Scholarship study level has been updated successfully',
                    'lang_value' => 'Scholarship study level has been updated successfully',
                    'created_at' => '2023-06-06 17:49:19',
                    'updated_at' => '2023-06-06 17:49:19',
                ),
            337 =>
                array(
                    'id' => 1338,
                    'lang' => 'en',
                    'lang_key' => 'Scholarship study level has been created successfully',
                    'lang_value' => 'Scholarship study level has been created successfully',
                    'created_at' => '2023-06-06 17:58:44',
                    'updated_at' => '2023-06-06 17:58:44',
                ),
            338 =>
                array(
                    'id' => 1339,
                    'lang' => 'en',
                    'lang_key' => 'Scholarship Study Level Information',
                    'lang_value' => 'Scholarship Study Level Information',
                    'created_at' => '2023-06-06 17:58:49',
                    'updated_at' => '2023-06-06 17:58:49',
                ),
            339 =>
                array(
                    'id' => 1340,
                    'lang' => 'en',
                    'lang_key' => 'Scholarship Category Information',
                    'lang_value' => 'Scholarship Category Information',
                    'created_at' => '2023-06-06 17:59:13',
                    'updated_at' => '2023-06-06 17:59:13',
                ),
            340 =>
                array(
                    'id' => 1341,
                    'lang' => 'en',
                    'lang_key' => 'Scholarship category has been updated successfully',
                    'lang_value' => 'Scholarship category has been updated successfully',
                    'created_at' => '2023-06-06 17:59:24',
                    'updated_at' => '2023-06-06 17:59:24',
                ),
            341 =>
                array(
                    'id' => 1342,
                    'lang' => 'en',
                    'lang_key' => 'Field of study',
                    'lang_value' => 'Field of study',
                    'created_at' => '2023-06-07 04:57:34',
                    'updated_at' => '2023-06-07 04:57:34',
                ),
            342 =>
                array(
                    'id' => 1343,
                    'lang' => 'en',
                    'lang_key' => 'User has been banned successfully',
                    'lang_value' => 'User has been banned successfully',
                    'created_at' => '2023-06-07 04:58:10',
                    'updated_at' => '2023-06-07 04:58:10',
                ),
            343 =>
                array(
                    'id' => 1344,
                    'lang' => 'en',
                    'lang_key' => 'Unban',
                    'lang_value' => 'Unban',
                    'created_at' => '2023-06-07 04:58:10',
                    'updated_at' => '2023-06-07 04:58:10',
                ),
            344 =>
                array(
                    'id' => 1345,
                    'lang' => 'en',
                    'lang_key' => 'You are banned',
                    'lang_value' => 'You are banned',
                    'created_at' => '2023-06-07 05:01:27',
                    'updated_at' => '2023-06-07 05:01:27',
                ),
            345 =>
                array(
                    'id' => 1346,
                    'lang' => 'en',
                    'lang_key' => 'User has been unbanned successfully',
                    'lang_value' => 'User has been unbanned successfully',
                    'created_at' => '2023-06-07 05:03:17',
                    'updated_at' => '2023-06-07 05:03:17',
                ),
            346 =>
                array(
                    'id' => 1347,
                    'lang' => 'en',
                    'lang_key' => 'All skills',
                    'lang_value' => 'All skills',
                    'created_at' => '2023-06-13 14:45:08',
                    'updated_at' => '2023-06-13 14:45:08',
                ),
            347 =>
                array(
                    'id' => 1348,
                    'lang' => 'en',
                    'lang_key' => 'Select Field Of study',
                    'lang_value' => 'Select Field Of study',
                    'created_at' => '2023-06-13 14:48:57',
                    'updated_at' => '2023-06-13 14:48:57',
                ),
            348 =>
                array(
                    'id' => 1349,
                    'lang' => 'en',
                    'lang_key' => 'Scholarship University Information',
                    'lang_value' => 'Scholarship University Information',
                    'created_at' => '2023-06-13 14:50:17',
                    'updated_at' => '2023-06-13 14:50:17',
                ),
            349 =>
                array(
                    'id' => 1350,
                    'lang' => 'en',
                    'lang_key' => 'Scholarship university has been updated successfully',
                    'lang_value' => 'Scholarship university has been updated successfully',
                    'created_at' => '2023-06-13 14:50:23',
                    'updated_at' => '2023-06-13 14:50:23',
                ),
            350 =>
                array(
                    'id' => 1351,
                    'lang' => 'en',
                    'lang_key' => 'Scholarship university has been created successfully',
                    'lang_value' => 'Scholarship university has been created successfully',
                    'created_at' => '2023-06-13 14:50:42',
                    'updated_at' => '2023-06-13 14:50:42',
                ),
            351 =>
                array(
                    'id' => 1352,
                    'lang' => 'en',
                    'lang_key' => 'All Scholarship City name',
                    'lang_value' => 'All Scholarship City name',
                    'created_at' => '2023-06-13 14:55:13',
                    'updated_at' => '2023-06-13 14:55:13',
                ),
            352 =>
                array(
                    'id' => 1353,
                    'lang' => 'en',
                    'lang_key' => 'Scholarship City name',
                    'lang_value' => 'Scholarship City name',
                    'created_at' => '2023-06-13 14:55:13',
                    'updated_at' => '2023-06-13 14:55:13',
                ),
            353 =>
                array(
                    'id' => 1354,
                    'lang' => 'en',
                    'lang_key' => 'City Name',
                    'lang_value' => 'City Name',
                    'created_at' => '2023-06-13 14:55:13',
                    'updated_at' => '2023-06-13 14:55:13',
                ),
            354 =>
                array(
                    'id' => 1355,
                    'lang' => 'en',
                    'lang_key' => 'Scholarship search filter',
                    'lang_value' => 'Scholarship search filter',
                    'created_at' => '2023-06-14 15:14:54',
                    'updated_at' => '2023-06-14 15:14:54',
                ),
            355 =>
                array(
                    'id' => 1356,
                    'lang' => 'en',
                    'lang_key' => 'Scholarships by Category',
                    'lang_value' => 'Scholarships by Category',
                    'created_at' => '2023-06-14 15:14:54',
                    'updated_at' => '2023-06-14 15:14:54',
                ),
            356 =>
                array(
                    'id' => 1357,
                    'lang' => 'en',
                    'lang_key' => 'Scholarships by Field of Study',
                    'lang_value' => 'Scholarships by Field of Study',
                    'created_at' => '2023-06-14 15:14:54',
                    'updated_at' => '2023-06-14 15:14:54',
                ),
            357 =>
                array(
                    'id' => 1358,
                    'lang' => 'en',
                    'lang_key' => 'Scholarships by Country',
                    'lang_value' => 'Scholarships by Country',
                    'created_at' => '2023-06-14 15:14:54',
                    'updated_at' => '2023-06-14 15:14:54',
                ),
            358 =>
                array(
                    'id' => 1359,
                    'lang' => 'en',
                    'lang_key' => 'Zoom meeting start from $',
                    'lang_value' => 'Zoom meeting start from $',
                    'created_at' => '2023-06-14 15:26:57',
                    'updated_at' => '2023-06-14 15:26:57',
                ),
            359 =>
                array(
                    'id' => 1360,
                    'lang' => 'en',
                    'lang_key' => 'My Skills',
                    'lang_value' => 'My Skills',
                    'created_at' => '2023-06-14 15:26:57',
                    'updated_at' => '2023-06-14 15:26:57',
                ),
            360 =>
                array(
                    'id' => 1361,
                    'lang' => 'en',
                    'lang_key' => 'All Consultants',
                    'lang_value' => 'All Consultants',
                    'created_at' => '2023-06-17 00:18:11',
                    'updated_at' => '2023-06-17 00:18:11',
                ),
            361 =>
                array(
                    'id' => 1362,
                    'lang' => 'en',
                    'lang_key' => 'Level of Study',
                    'lang_value' => 'Level of Study',
                    'created_at' => '2023-06-17 00:18:33',
                    'updated_at' => '2023-06-17 00:18:33',
                ),
            362 =>
                array(
                    'id' => 1363,
                    'lang' => 'en',
                    'lang_key' => 'Consultant Search Filter',
                    'lang_value' => 'Consultant Search Filter',
                    'created_at' => '2023-06-17 01:49:44',
                    'updated_at' => '2023-06-17 01:49:44',
                ),
            363 =>
                array(
                    'id' => 1364,
                    'lang' => 'en',
                    'lang_key' => 'Job success',
                    'lang_value' => 'Job success',
                    'created_at' => '2023-06-17 02:29:11',
                    'updated_at' => '2023-06-17 02:29:11',
                ),
            364 =>
                array(
                    'id' => 1365,
                    'lang' => 'en',
                    'lang_key' => 'View profile',
                    'lang_value' => 'View profile',
                    'created_at' => '2023-06-17 02:29:12',
                    'updated_at' => '2023-06-17 02:29:12',
                ),
            365 =>
                array(
                    'id' => 1366,
                    'lang' => 'en',
                    'lang_key' => 'Add New University',
                    'lang_value' => 'Add New University',
                    'created_at' => '2023-06-17 03:36:29',
                    'updated_at' => '2023-06-17 03:36:29',
                ),
            366 =>
                array(
                    'id' => 1367,
                    'lang' => 'en',
                    'lang_key' => 'Save New University',
                    'lang_value' => 'Save New University',
                    'created_at' => '2023-06-17 03:36:29',
                    'updated_at' => '2023-06-17 03:36:29',
                ),
            367 =>
                array(
                    'id' => 1368,
                    'lang' => 'en',
                    'lang_key' => 'Consultant for hire',
                    'lang_value' => 'Consultant for hire',
                    'created_at' => '2023-06-18 20:19:45',
                    'updated_at' => '2023-06-18 20:19:45',
                ),
            368 =>
                array(
                    'id' => 1369,
                    'lang' => 'en',
                    'lang_key' => 'Search for consultants',
                    'lang_value' => 'Search for consultants',
                    'created_at' => '2023-06-18 20:19:45',
                    'updated_at' => '2023-06-18 20:19:45',
                ),
            369 =>
                array(
                    'id' => 1370,
                    'lang' => 'en',
                    'lang_key' => 'Delivery Time',
                    'lang_value' => 'Delivery Time',
                    'created_at' => '2023-06-20 13:15:09',
                    'updated_at' => '2023-06-20 13:15:09',
                ),
            370 =>
                array(
                    'id' => 1371,
                    'lang' => 'en',
                    'lang_key' => 'Design Tools',
                    'lang_value' => 'Design Tools',
                    'created_at' => '2023-06-20 13:15:10',
                    'updated_at' => '2023-06-20 13:15:10',
                ),
            371 =>
                array(
                    'id' => 1372,
                    'lang' => 'en',
                    'lang_key' => 'Speaks',
                    'lang_value' => 'Speaks',
                    'created_at' => '2023-06-20 13:15:10',
                    'updated_at' => '2023-06-20 13:15:10',
                ),
            372 =>
                array(
                    'id' => 1373,
                    'lang' => 'en',
                    'lang_key' => ' Level',
                    'lang_value' => ' Level',
                    'created_at' => '2023-06-20 13:15:10',
                    'updated_at' => '2023-06-20 13:15:10',
                ),
            373 =>
                array(
                    'id' => 1374,
                    'lang' => 'en',
                    'lang_key' => 'Scholarships search filter',
                    'lang_value' => 'Scholarships search filter',
                    'created_at' => '2023-06-20 16:31:34',
                    'updated_at' => '2023-06-20 16:31:34',
                ),
            374 =>
                array(
                    'id' => 1375,
                    'lang' => 'en',
                    'lang_key' => 'Join me at zoom',
                    'lang_value' => 'Join me at zoom',
                    'created_at' => '2023-06-21 04:24:28',
                    'updated_at' => '2023-06-21 04:24:28',
                ),
            375 =>
                array(
                    'id' => 1376,
                    'lang' => 'en',
                    'lang_key' => 'Find scholarship by category',
                    'lang_value' => 'Find scholarship by category',
                    'created_at' => '2023-06-23 22:38:35',
                    'updated_at' => '2023-06-23 22:38:35',
                ),
            376 =>
                array(
                    'id' => 1377,
                    'lang' => 'en',
                    'lang_key' => 'Russian',
                    'lang_value' => 'Russian',
                    'created_at' => '2023-06-23 22:46:38',
                    'updated_at' => '2023-06-23 22:46:38',
                ),
            377 =>
                array(
                    'id' => 1378,
                    'lang' => 'en',
                    'lang_key' => '
Earnings ',
                    'lang_value' => '
Earnings ',
                    'created_at' => '2023-07-04 15:42:21',
                    'updated_at' => '2023-07-04 15:42:21',
                ),
            378 =>
                array(
                    'id' => 1379,
                    'lang' => 'en',
                    'lang_key' => ' Find a consultant',
                    'lang_value' => ' Find a consultant',
                    'created_at' => '2023-07-05 15:06:12',
                    'updated_at' => '2023-07-05 15:06:12',
                ),
            379 =>
                array(
                    'id' => 1380,
                    'lang' => 'en',
                    'lang_key' => ' Hire a consultant',
                    'lang_value' => ' Hire a consultant',
                    'created_at' => '2023-07-05 16:50:52',
                    'updated_at' => '2023-07-05 16:50:52',
                ),
            380 =>
                array(
                    'id' => 1381,
                    'lang' => 'en',
                    'lang_key' => 'Hire a consultant',
                    'lang_value' => 'Hire a consultant',
                    'created_at' => '2023-07-05 19:43:28',
                    'updated_at' => '2023-07-05 19:43:28',
                ),
            381 =>
                array(
                    'id' => 1382,
                    'lang' => 'en',
                    'lang_key' => 'Add Favorite',
                    'lang_value' => 'Add Favorite',
                    'created_at' => '2023-07-05 19:43:50',
                    'updated_at' => '2023-07-05 19:43:50',
                ),
            382 =>
                array(
                    'id' => 1383,
                    'lang' => 'en',
                    'lang_key' => 'Hire Consultant',
                    'lang_value' => 'Hire Consultant',
                    'created_at' => '2023-07-05 20:14:20',
                    'updated_at' => '2023-07-05 20:14:20',
                ),
            383 =>
                array(
                    'id' => 1384,
                    'lang' => 'en',
                    'lang_key' => 'Update Badge',
                    'lang_value' => 'Update Badge',
                    'created_at' => '2023-07-06 20:36:11',
                    'updated_at' => '2023-07-06 20:36:11',
                ),
            384 =>
                array(
                    'id' => 1385,
                    'lang' => 'en',
                    'lang_key' => 'Home',
                    'lang_value' => 'Home',
                    'created_at' => '2023-07-08 16:59:24',
                    'updated_at' => '2023-07-08 16:59:24',
                ),
            385 =>
                array(
                    'id' => 1386,
                    'lang' => 'en',
                    'lang_key' => 'Scholarship bookmark limit has been reached.',
                    'lang_value' => 'Scholarship bookmark limit has been reached.',
                    'created_at' => '2023-07-12 00:57:31',
                    'updated_at' => '2023-07-12 00:57:31',
                ),
            386 =>
                array(
                    'id' => 1387,
                    'lang' => 'en',
                    'lang_key' => 'Bookmark',
                    'lang_value' => 'Bookmark',
                    'created_at' => '2023-07-12 01:19:19',
                    'updated_at' => '2023-07-12 01:19:19',
                ),
            387 =>
                array(
                    'id' => 1388,
                    'lang' => 'en',
                    'lang_key' => 'Zoom me',
                    'lang_value' => 'Zoom me',
                    'created_at' => '2023-07-12 14:39:17',
                    'updated_at' => '2023-07-12 14:39:17',
                ),
            388 =>
                array(
                    'id' => 1389,
                    'lang' => 'en',
                    'lang_key' => 'Find job',
                    'lang_value' => 'Find job',
                    'created_at' => '2023-07-14 20:43:18',
                    'updated_at' => '2023-07-14 20:43:18',
                ),
            389 =>
                array(
                    'id' => 1390,
                    'lang' => 'en',
                    'lang_key' => ' Find trainings ',
                    'lang_value' => ' Find trainings ',
                    'created_at' => '2023-07-17 14:40:25',
                    'updated_at' => '2023-07-17 14:40:25',
                ),
            390 =>
                array(
                    'id' => 1391,
                    'lang' => 'en',
                    'lang_key' => 'Search trainings',
                    'lang_value' => 'Search trainings',
                    'created_at' => '2023-07-17 14:43:51',
                    'updated_at' => '2023-07-17 14:43:51',
                ),
            391 =>
                array(
                    'id' => 1392,
                    'lang' => 'en',
                    'lang_key' => 'training Mode',
                    'lang_value' => 'training Mode',
                    'created_at' => '2023-07-17 14:43:51',
                    'updated_at' => '2023-07-17 14:43:51',
                ),
            392 =>
                array(
                    'id' => 1393,
                    'lang' => 'en',
                    'lang_key' => 'training Topics',
                    'lang_value' => 'training Topics',
                    'created_at' => '2023-07-17 14:43:51',
                    'updated_at' => '2023-07-17 14:43:51',
                ),
            393 =>
                array(
                    'id' => 1394,
                    'lang' => 'en',
                    'lang_key' => 'training date',
                    'lang_value' => 'training date',
                    'created_at' => '2023-07-17 14:43:51',
                    'updated_at' => '2023-07-17 14:43:51',
                ),
            394 =>
                array(
                    'id' => 1395,
                    'lang' => 'en',
                    'lang_key' => 'Languages',
                    'lang_value' => 'Languages',
                    'created_at' => '2023-07-17 14:43:51',
                    'updated_at' => '2023-07-17 14:43:51',
                ),
            395 =>
                array(
                    'id' => 1396,
                    'lang' => 'en',
                    'lang_key' => 'Fixed Price Projects',
                    'lang_value' => 'Fixed Price Projects',
                    'created_at' => '2023-07-18 12:45:31',
                    'updated_at' => '2023-07-18 12:45:31',
                ),
            396 =>
                array(
                    'id' => 1397,
                    'lang' => 'en',
                    'lang_key' => 'Hourly Projects',
                    'lang_value' => 'Hourly Projects',
                    'created_at' => '2023-07-18 18:32:48',
                    'updated_at' => '2023-07-18 18:32:48',
                ),
            397 =>
                array(
                    'id' => 1398,
                    'lang' => 'en',
                    'lang_key' => 'All Durations',
                    'lang_value' => 'All Durations',
                    'created_at' => '2023-07-18 18:48:21',
                    'updated_at' => '2023-07-18 18:48:21',
                ),
            398 =>
                array(
                    'id' => 1399,
                    'lang' => 'en',
                    'lang_key' => 'projects found for',
                    'lang_value' => 'projects found for',
                    'created_at' => '2023-07-19 14:08:32',
                    'updated_at' => '2023-07-19 14:08:32',
                ),
            399 =>
                array(
                    'id' => 1400,
                    'lang' => 'en',
                    'lang_key' => '2 to 3 starrrr',
                    'lang_value' => '2 to 3 starrrr',
                    'created_at' => '2023-07-20 17:23:45',
                    'updated_at' => '2023-07-20 17:23:45',
                ),
            400 =>
                array(
                    'id' => 1401,
                    'lang' => 'en',
                    'lang_key' => 'Hourly ',
                    'lang_value' => 'Hourly ',
                    'created_at' => '2023-07-23 15:15:15',
                    'updated_at' => '2023-07-23 15:15:15',
                ),
            401 =>
                array(
                    'id' => 1402,
                    'lang' => 'en',
                    'lang_key' => 'You need to ',
                    'lang_value' => 'You need to ',
                    'created_at' => '2023-07-23 16:22:13',
                    'updated_at' => '2023-07-23 16:22:13',
                ),
            402 =>
                array(
                    'id' => 1403,
                    'lang' => 'en',
                    'lang_key' => 'as a freelancer to bid the project.',
                    'lang_value' => 'as a freelancer to bid the project.',
                    'created_at' => '2023-07-23 16:22:13',
                    'updated_at' => '2023-07-23 16:22:13',
                ),
            403 =>
                array(
                    'id' => 1404,
                    'lang' => 'en',
                    'lang_key' => 'as a freelancer to bid the project. Don\'t have an account with us? Create an account now',
                    'lang_value' => 'as a freelancer to bid the project. Don\'t have an account with us? Create an account now',
                    'created_at' => '2023-07-23 16:47:25',
                    'updated_at' => '2023-07-23 16:47:25',
                ),
            404 =>
                array(
                    'id' => 1405,
                    'lang' => 'en',
                    'lang_key' => 'Create an account now',
                    'lang_value' => 'Create an account now',
                    'created_at' => '2023-07-23 16:48:18',
                    'updated_at' => '2023-07-23 16:48:18',
                ),
            405 =>
                array(
                    'id' => 1406,
                    'lang' => 'en',
                    'lang_key' => 'as a freelancer to bid the project. Don\'t have an account with us?',
                    'lang_value' => 'as a freelancer to bid the project. Don\'t have an account with us?',
                    'created_at' => '2023-07-23 16:48:34',
                    'updated_at' => '2023-07-23 16:48:34',
                ),
            406 =>
                array(
                    'id' => 1407,
                    'lang' => 'en',
                    'lang_key' => 'Freelancer parent Skills',
                    'lang_value' => 'Freelancer parent Skills',
                    'created_at' => '2023-07-24 14:11:20',
                    'updated_at' => '2023-07-24 14:11:20',
                ),
            407 =>
                array(
                    'id' => 1408,
                    'lang' => 'en',
                    'lang_key' => 'Consultant Parent Skills',
                    'lang_value' => 'Consultant Parent Skills',
                    'created_at' => '2023-07-24 14:11:56',
                    'updated_at' => '2023-07-24 14:11:56',
                ),
            408 =>
                array(
                    'id' => 1409,
                    'lang' => 'en',
                    'lang_key' => 'New Skill has been inserted successfully',
                    'lang_value' => 'New Skill has been inserted successfully',
                    'created_at' => '2023-07-24 14:37:56',
                    'updated_at' => '2023-07-24 14:37:56',
                ),
            409 =>
                array(
                    'id' => 1410,
                    'lang' => 'en',
                    'lang_key' => 'Parent Skill list',
                    'lang_value' => 'Parent Skill list',
                    'created_at' => '2023-07-24 15:40:03',
                    'updated_at' => '2023-07-24 15:40:03',
                ),
            410 =>
                array(
                    'id' => 1411,
                    'lang' => 'en',
                    'lang_key' => 'Written skill',
                    'lang_value' => 'Written skill',
                    'created_at' => '2023-07-24 15:40:03',
                    'updated_at' => '2023-07-24 15:40:03',
                ),
            411 =>
                array(
                    'id' => 1412,
                    'lang' => 'en',
                    'lang_key' => 'Parent Skill',
                    'lang_value' => 'Parent Skill',
                    'created_at' => '2023-07-24 16:09:30',
                    'updated_at' => '2023-07-24 16:09:30',
                ),
            412 =>
                array(
                    'id' => 1413,
                    'lang' => 'en',
                    'lang_key' => 'Search skills',
                    'lang_value' => 'Search skills',
                    'created_at' => '2023-07-25 13:20:59',
                    'updated_at' => '2023-07-25 13:20:59',
                ),
            413 =>
                array(
                    'id' => 1414,
                    'lang' => 'en',
                    'lang_key' => 'Your Hourly limit project post limit is over.',
                    'lang_value' => 'Your Hourly limit project post limit is over.',
                    'created_at' => '2023-07-26 13:35:55',
                    'updated_at' => '2023-07-26 13:35:55',
                ),
            414 =>
                array(
                    'id' => 1415,
                    'lang' => 'en',
                    'lang_key' => 'Employment history
',
                    'lang_value' => 'Employment history
',
                    'created_at' => '2023-07-31 16:05:44',
                    'updated_at' => '2023-07-31 16:05:44',
                ),
            415 =>
                array(
                    'id' => 1416,
                    'lang' => 'en',
                    'lang_key' => 'Employment history',
                    'lang_value' => 'Employment history',
                    'created_at' => '2023-07-31 16:50:00',
                    'updated_at' => '2023-07-31 16:50:00',
                ),
            416 =>
                array(
                    'id' => 1417,
                    'lang' => 'en',
                    'lang_key' => 'Hourly Rate (USD)',
                    'lang_value' => 'Hourly Rate (USD)',
                    'created_at' => '2023-08-01 11:54:22',
                    'updated_at' => '2023-08-01 11:54:22',
                ),
            417 =>
                array(
                    'id' => 1418,
                    'lang' => 'en',
                    'lang_key' => 'Any hourly rate',
                    'lang_value' => 'Any hourly rate',
                    'created_at' => '2023-08-01 11:54:22',
                    'updated_at' => '2023-08-01 11:54:22',
                ),
            418 =>
                array(
                    'id' => 1419,
                    'lang' => 'en',
                    'lang_key' => 'Search countries',
                    'lang_value' => 'Search countries',
                    'created_at' => '2023-08-01 11:55:08',
                    'updated_at' => '2023-08-01 11:55:08',
                ),
            419 =>
                array(
                    'id' => 1420,
                    'lang' => 'en',
                    'lang_key' => 'Description
',
                    'lang_value' => 'Description
',
                    'created_at' => '2023-08-02 12:31:49',
                    'updated_at' => '2023-08-02 12:31:49',
                ),
            420 =>
                array(
                    'id' => 1421,
                    'lang' => 'en',
                    'lang_key' => 'Consultants – find the right work for you',
                    'lang_value' => 'Consultants – find the right work for you',
                    'created_at' => '2023-08-13 12:57:43',
                    'updated_at' => '2023-08-13 12:57:43',
                ),
            421 =>
                array(
                    'id' => 1422,
                    'lang' => 'en',
                    'lang_key' => 'Reviews – how reviews work on ConsultantEdu',
                    'lang_value' => 'Reviews – how reviews work on ConsultantEdu',
                    'created_at' => '2023-08-13 13:41:56',
                    'updated_at' => '2023-08-13 13:41:56',
                ),
            422 =>
                array(
                    'id' => 1423,
                    'lang' => 'en',
                    'lang_key' => 'Search for training',
                    'lang_value' => 'Search for training',
                    'created_at' => '2023-08-15 13:21:58',
                    'updated_at' => '2023-08-15 13:21:58',
                ),
            423 =>
                array(
                    'id' => 1424,
                    'lang' => 'en',
                    'lang_key' => 'training Software',
                    'lang_value' => 'training Software',
                    'created_at' => '2023-08-15 13:21:58',
                    'updated_at' => '2023-08-15 13:21:58',
                ),
            424 =>
                array(
                    'id' => 1425,
                    'lang' => 'en',
                    'lang_key' => 'Register now',
                    'lang_value' => 'Register now',
                    'created_at' => '2023-08-15 13:21:58',
                    'updated_at' => '2023-08-15 13:21:58',
                ),
            425 =>
                array(
                    'id' => 1426,
                    'lang' => 'en',
                    'lang_key' => 'Zoom link',
                    'lang_value' => 'Zoom link',
                    'created_at' => '2023-08-15 13:21:58',
                    'updated_at' => '2023-08-15 13:21:58',
                ),
            426 =>
                array(
                    'id' => 1427,
                    'lang' => 'en',
                    'lang_key' => 'trainings',
                    'lang_value' => 'trainings',
                    'created_at' => '2023-08-15 13:23:07',
                    'updated_at' => '2023-08-15 13:23:07',
                ),
            427 =>
                array(
                    'id' => 1428,
                    'lang' => 'en',
                    'lang_key' => 'All trainings',
                    'lang_value' => 'All trainings',
                    'created_at' => '2023-08-15 13:23:07',
                    'updated_at' => '2023-08-15 13:23:07',
                ),
            428 =>
                array(
                    'id' => 1429,
                    'lang' => 'en',
                    'lang_key' => 'training calender',
                    'lang_value' => 'training calender',
                    'created_at' => '2023-08-17 11:14:18',
                    'updated_at' => '2023-08-17 11:14:18',
                ),
            429 =>
                array(
                    'id' => 1430,
                    'lang' => 'en',
                    'lang_key' => 'All training Software',
                    'lang_value' => 'All training Software',
                    'created_at' => '2023-08-17 11:25:12',
                    'updated_at' => '2023-08-17 11:25:12',
                ),
            430 =>
                array(
                    'id' => 1431,
                    'lang' => 'en',
                    'lang_key' => 'Software name',
                    'lang_value' => 'Software name',
                    'created_at' => '2023-08-17 11:25:12',
                    'updated_at' => '2023-08-17 11:25:12',
                ),
            431 =>
                array(
                    'id' => 1432,
                    'lang' => 'en',
                    'lang_key' => 'Add New Software',
                    'lang_value' => 'Add New Software',
                    'created_at' => '2023-08-17 11:25:12',
                    'updated_at' => '2023-08-17 11:25:12',
                ),
            432 =>
                array(
                    'id' => 1433,
                    'lang' => 'en',
                    'lang_key' => 'Save New Software',
                    'lang_value' => 'Save New Software',
                    'created_at' => '2023-08-17 11:26:49',
                    'updated_at' => '2023-08-17 11:26:49',
                ),
            433 =>
                array(
                    'id' => 1434,
                    'lang' => 'en',
                    'lang_key' => 'training software has been created successfully',
                    'lang_value' => 'training software has been created successfully',
                    'created_at' => '2023-08-17 14:01:31',
                    'updated_at' => '2023-08-17 14:01:31',
                ),
            434 =>
                array(
                    'id' => 1435,
                    'lang' => 'en',
                    'lang_key' => 'Name fsdf',
                    'lang_value' => 'Name fsdf',
                    'created_at' => '2023-08-17 14:27:14',
                    'updated_at' => '2023-08-17 14:27:14',
                ),
            435 =>
                array(
                    'id' => 1436,
                    'lang' => 'en',
                    'lang_key' => 'Scholarship City Information',
                    'lang_value' => 'Scholarship City Information',
                    'created_at' => '2023-08-17 16:36:54',
                    'updated_at' => '2023-08-17 16:36:54',
                ),
            436 =>
                array(
                    'id' => 1437,
                    'lang' => 'en',
                    'lang_key' => 'All training modes',
                    'lang_value' => 'All training modes',
                    'created_at' => '2023-08-17 16:46:57',
                    'updated_at' => '2023-08-17 16:46:57',
                ),
            437 =>
                array(
                    'id' => 1438,
                    'lang' => 'en',
                    'lang_key' => 'training Modes ',
                    'lang_value' => 'training Modes ',
                    'created_at' => '2023-08-17 16:46:57',
                    'updated_at' => '2023-08-17 16:46:57',
                ),
            438 =>
                array(
                    'id' => 1439,
                    'lang' => 'en',
                    'lang_key' => 'Add training Mode',
                    'lang_value' => 'Add training Mode',
                    'created_at' => '2023-08-17 16:46:57',
                    'updated_at' => '2023-08-17 16:46:57',
                ),
            439 =>
                array(
                    'id' => 1440,
                    'lang' => 'en',
                    'lang_key' => 'training Mode Name',
                    'lang_value' => 'training Mode Name',
                    'created_at' => '2023-08-17 16:46:57',
                    'updated_at' => '2023-08-17 16:46:57',
                ),
            440 =>
                array(
                    'id' => 1441,
                    'lang' => 'en',
                    'lang_key' => 'Save  New training Mode',
                    'lang_value' => 'Save  New training Mode',
                    'created_at' => '2023-08-17 16:46:57',
                    'updated_at' => '2023-08-17 16:46:57',
                ),
            441 =>
                array(
                    'id' => 1442,
                    'lang' => 'en',
                    'lang_key' => 'All training',
                    'lang_value' => 'All training',
                    'created_at' => '2023-08-17 18:57:38',
                    'updated_at' => '2023-08-17 18:57:38',
                ),
            442 =>
                array(
                    'id' => 1443,
                    'lang' => 'en',
                    'lang_key' => 'Add New training',
                    'lang_value' => 'Add New training',
                    'created_at' => '2023-08-17 18:57:38',
                    'updated_at' => '2023-08-17 18:57:38',
                ),
            443 =>
                array(
                    'id' => 1444,
                    'lang' => 'en',
                    'lang_key' => 'All training posts',
                    'lang_value' => 'All training posts',
                    'created_at' => '2023-08-17 18:57:38',
                    'updated_at' => '2023-08-17 18:57:38',
                ),
            444 =>
                array(
                    'id' => 1445,
                    'lang' => 'en',
                    'lang_key' => 'Department',
                    'lang_value' => 'Department',
                    'created_at' => '2023-08-17 18:57:38',
                    'updated_at' => '2023-08-17 18:57:38',
                ),
            445 =>
                array(
                    'id' => 1446,
                    'lang' => 'en',
                    'lang_key' => 'Types',
                    'lang_value' => 'Types',
                    'created_at' => '2023-08-17 18:57:38',
                    'updated_at' => '2023-08-17 18:57:38',
                ),
            446 =>
                array(
                    'id' => 1447,
                    'lang' => 'en',
                    'lang_key' => 'training Information',
                    'lang_value' => 'training Information',
                    'created_at' => '2023-08-22 12:05:18',
                    'updated_at' => '2023-08-22 12:05:18',
                ),
            447 =>
                array(
                    'id' => 1448,
                    'lang' => 'en',
                    'lang_key' => 'training Title',
                    'lang_value' => 'training Title',
                    'created_at' => '2023-08-22 12:05:18',
                    'updated_at' => '2023-08-22 12:05:18',
                ),
            448 =>
                array(
                    'id' => 1449,
                    'lang' => 'en',
                    'lang_key' => 'Select training Mode',
                    'lang_value' => 'Select training Mode',
                    'created_at' => '2023-08-22 12:05:18',
                    'updated_at' => '2023-08-22 12:05:18',
                ),
            449 =>
                array(
                    'id' => 1450,
                    'lang' => 'en',
                    'lang_key' => 'Software Package',
                    'lang_value' => 'Software Package',
                    'created_at' => '2023-08-22 12:05:18',
                    'updated_at' => '2023-08-22 12:05:18',
                ),
            450 =>
                array(
                    'id' => 1451,
                    'lang' => 'en',
                    'lang_key' => 'Select Software Package',
                    'lang_value' => 'Select Software Package',
                    'created_at' => '2023-08-22 12:05:18',
                    'updated_at' => '2023-08-22 12:05:18',
                ),
            451 =>
                array(
                    'id' => 1452,
                    'lang' => 'en',
                    'lang_key' => 'Software Description',
                    'lang_value' => 'Software Description',
                    'created_at' => '2023-08-22 12:05:18',
                    'updated_at' => '2023-08-22 12:05:18',
                ),
            452 =>
                array(
                    'id' => 1453,
                    'lang' => 'en',
                    'lang_key' => 'Language',
                    'lang_value' => 'Language',
                    'created_at' => '2023-08-22 12:05:18',
                    'updated_at' => '2023-08-22 12:05:18',
                ),
            453 =>
                array(
                    'id' => 1454,
                    'lang' => 'en',
                    'lang_key' => 'Organiser and certificate',
                    'lang_value' => 'Organiser and certificate',
                    'created_at' => '2023-08-22 12:05:18',
                    'updated_at' => '2023-08-22 12:05:18',
                ),
            454 =>
                array(
                    'id' => 1455,
                    'lang' => 'en',
                    'lang_key' => 'Course Instructor',
                    'lang_value' => 'Course Instructor',
                    'created_at' => '2023-08-22 12:05:18',
                    'updated_at' => '2023-08-22 12:05:18',
                ),
            455 =>
                array(
                    'id' => 1456,
                    'lang' => 'en',
                    'lang_key' => 'Instructor Descriptions',
                    'lang_value' => 'Instructor Descriptions',
                    'created_at' => '2023-08-22 12:05:18',
                    'updated_at' => '2023-08-22 12:05:18',
                ),
            456 =>
                array(
                    'id' => 1457,
                    'lang' => 'en',
                    'lang_key' => 'Course objectives',
                    'lang_value' => 'Course objectives',
                    'created_at' => '2023-08-22 12:05:18',
                    'updated_at' => '2023-08-22 12:05:18',
                ),
            457 =>
                array(
                    'id' => 1458,
                    'lang' => 'en',
                    'lang_key' => 'Learning outcomes',
                    'lang_value' => 'Learning outcomes',
                    'created_at' => '2023-08-22 12:05:18',
                    'updated_at' => '2023-08-22 12:05:18',
                ),
            458 =>
                array(
                    'id' => 1459,
                    'lang' => 'en',
                    'lang_key' => 'Teaching and learning methods',
                    'lang_value' => 'Teaching and learning methods',
                    'created_at' => '2023-08-22 12:05:18',
                    'updated_at' => '2023-08-22 12:05:18',
                ),
            459 =>
                array(
                    'id' => 1460,
                    'lang' => 'en',
                    'lang_key' => 'Teaching Resources',
                    'lang_value' => 'Teaching Resources',
                    'created_at' => '2023-08-22 12:05:18',
                    'updated_at' => '2023-08-22 12:05:18',
                ),
            460 =>
                array(
                    'id' => 1461,
                    'lang' => 'en',
                    'lang_key' => 'training Seat',
                    'lang_value' => 'training Seat',
                    'created_at' => '2023-08-22 12:05:18',
                    'updated_at' => '2023-08-22 12:05:18',
                ),
            461 =>
                array(
                    'id' => 1462,
                    'lang' => 'en',
                    'lang_key' => 'Seat No.',
                    'lang_value' => 'Seat No.',
                    'created_at' => '2023-08-22 12:05:18',
                    'updated_at' => '2023-08-22 12:05:18',
                ),
            462 =>
                array(
                    'id' => 1463,
                    'lang' => 'en',
                    'lang_key' => 'training',
                    'lang_value' => 'training',
                    'created_at' => '2023-08-22 12:31:38',
                    'updated_at' => '2023-08-22 12:31:38',
                ),
            463 =>
                array(
                    'id' => 1464,
                    'lang' => 'en',
                    'lang_key' => 'Sold training',
                    'lang_value' => 'Sold training',
                    'created_at' => '2023-08-22 12:32:46',
                    'updated_at' => '2023-08-22 12:32:46',
                ),
            464 =>
                array(
                    'id' => 1465,
                    'lang' => 'en',
                    'lang_key' => 'Instructors',
                    'lang_value' => 'Instructors',
                    'created_at' => '2023-08-22 12:49:29',
                    'updated_at' => '2023-08-22 12:49:29',
                ),
            465 =>
                array(
                    'id' => 1466,
                    'lang' => 'en',
                    'lang_key' => 'Create new training',
                    'lang_value' => 'Create new training',
                    'created_at' => '2023-08-22 13:30:14',
                    'updated_at' => '2023-08-22 13:30:14',
                ),
            466 =>
                array(
                    'id' => 1467,
                    'lang' => 'en',
                    'lang_key' => 'training Info',
                    'lang_value' => 'training Info',
                    'created_at' => '2023-08-22 13:30:14',
                    'updated_at' => '2023-08-22 13:30:14',
                ),
            467 =>
                array(
                    'id' => 1468,
                    'lang' => 'en',
                    'lang_key' => 'Edit training',
                    'lang_value' => 'Edit training',
                    'created_at' => '2023-08-22 14:33:37',
                    'updated_at' => '2023-08-22 14:33:37',
                ),
            468 =>
                array(
                    'id' => 1469,
                    'lang' => 'en',
                    'lang_key' => 'Add Date',
                    'lang_value' => 'Add Date',
                    'created_at' => '2023-08-22 16:45:31',
                    'updated_at' => '2023-08-22 16:45:31',
                ),
            469 =>
                array(
                    'id' => 1470,
                    'lang' => 'en',
                    'lang_key' => 'training mode has been created successfully',
                    'lang_value' => 'training mode has been created successfully',
                    'created_at' => '2023-08-22 16:59:23',
                    'updated_at' => '2023-08-22 16:59:23',
                ),
            470 =>
                array(
                    'id' => 1471,
                    'lang' => 'en',
                    'lang_key' => 'Select Language',
                    'lang_value' => 'Select Language',
                    'created_at' => '2023-08-22 17:59:42',
                    'updated_at' => '2023-08-22 17:59:42',
                ),
            471 =>
                array(
                    'id' => 1472,
                    'lang' => 'en',
                    'lang_key' => 'FreelancerEdu',
                    'lang_value' => 'FreelancerEdu',
                    'created_at' => '2023-08-23 13:52:17',
                    'updated_at' => '2023-08-23 13:52:17',
                ),
            472 =>
                array(
                    'id' => 1473,
                    'lang' => 'en',
                    'lang_key' => 'Language has been inserted successfully',
                    'lang_value' => 'Language has been inserted successfully',
                    'created_at' => '2023-08-23 13:53:04',
                    'updated_at' => '2023-08-23 13:53:04',
                ),
            473 =>
                array(
                    'id' => 1474,
                    'lang' => 'en',
                    'lang_key' => 'On',
                    'lang_value' => 'On',
                    'created_at' => '2023-08-23 13:53:04',
                    'updated_at' => '2023-08-23 13:53:04',
                ),
            474 =>
                array(
                    'id' => 1475,
                    'lang' => 'en',
                    'lang_key' => 'Search training software',
                    'lang_value' => 'Search training software',
                    'created_at' => '2023-08-27 12:07:49',
                    'updated_at' => '2023-08-27 12:07:49',
                ),
            475 =>
                array(
                    'id' => 1476,
                    'lang' => 'en',
                    'lang_key' => 'Academic Consultants',
                    'lang_value' => 'Academic Consultants',
                    'created_at' => '2023-08-27 12:07:50',
                    'updated_at' => '2023-08-27 12:07:50',
                ),
            476 =>
                array(
                    'id' => 1477,
                    'lang' => 'en',
                    'lang_key' => 'Academic Projects',
                    'lang_value' => 'Academic Projects',
                    'created_at' => '2023-08-27 12:07:50',
                    'updated_at' => '2023-08-27 12:07:50',
                ),
            477 =>
                array(
                    'id' => 1478,
                    'lang' => 'en',
                    'lang_key' => 'Academic Scholarships',
                    'lang_value' => 'Academic Scholarships',
                    'created_at' => '2023-08-27 12:07:50',
                    'updated_at' => '2023-08-27 12:07:50',
                ),
            478 =>
                array(
                    'id' => 1479,
                    'lang' => 'en',
                    'lang_key' => ' Research Training ',
                    'lang_value' => ' Research Training ',
                    'created_at' => '2023-08-27 12:07:50',
                    'updated_at' => '2023-08-27 12:07:50',
                ),
            479 =>
                array(
                    'id' => 1480,
                    'lang' => 'en',
                    'lang_key' => 'Instructor',
                    'lang_value' => 'Instructor',
                    'created_at' => '2023-08-27 14:50:48',
                    'updated_at' => '2023-08-27 14:50:48',
                ),
            480 =>
                array(
                    'id' => 1481,
                    'lang' => 'en',
                    'lang_key' => 'training Date Description',
                    'lang_value' => 'training Date Description',
                    'created_at' => '2023-08-27 14:50:52',
                    'updated_at' => '2023-08-27 14:50:52',
                ),
            481 =>
                array(
                    'id' => 1482,
                    'lang' => 'en',
                    'lang_key' => 'training Status',
                    'lang_value' => 'training Status',
                    'created_at' => '2023-08-27 14:50:52',
                    'updated_at' => '2023-08-27 14:50:52',
                ),
            482 =>
                array(
                    'id' => 1483,
                    'lang' => 'en',
                    'lang_key' => 'training has been created successfully',
                    'lang_value' => 'training has been created successfully',
                    'created_at' => '2023-08-27 14:54:11',
                    'updated_at' => '2023-08-27 14:54:11',
                ),
            483 =>
                array(
                    'id' => 1484,
                    'lang' => 'en',
                    'lang_key' => 'training post has been updated successfully',
                    'lang_value' => 'training post has been updated successfully',
                    'created_at' => '2023-08-29 16:34:33',
                    'updated_at' => '2023-08-29 16:34:33',
                ),
            484 =>
                array(
                    'id' => 1485,
                    'lang' => 'en',
                    'lang_key' => 'Course Instructor 1',
                    'lang_value' => 'Course Instructor 1',
                    'created_at' => '2023-08-30 16:24:44',
                    'updated_at' => '2023-08-30 16:24:44',
                ),
            485 =>
                array(
                    'id' => 1486,
                    'lang' => 'en',
                    'lang_key' => 'Course Instructor 2',
                    'lang_value' => 'Course Instructor 2',
                    'created_at' => '2023-08-30 16:24:44',
                    'updated_at' => '2023-08-30 16:24:44',
                ),
            486 =>
                array(
                    'id' => 1487,
                    'lang' => 'en',
                    'lang_key' => 'Course Instructor 3',
                    'lang_value' => 'Course Instructor 3',
                    'created_at' => '2023-08-30 16:24:44',
                    'updated_at' => '2023-08-30 16:24:44',
                ),
            487 =>
                array(
                    'id' => 1488,
                    'lang' => 'en',
                    'lang_key' => 'Description
',
                    'lang_value' => 'Description
',
                    'created_at' => '2023-09-03 13:32:19',
                    'updated_at' => '2023-09-03 13:32:19',
                ),
            488 =>
                array(
                    'id' => 1489,
                    'lang' => 'en',
                    'lang_key' => 'training Image',
                    'lang_value' => 'training Image',
                    'created_at' => '2023-09-04 15:10:03',
                    'updated_at' => '2023-09-04 15:10:03',
                ),
            489 =>
                array(
                    'id' => 1490,
                    'lang' => 'en',
                    'lang_key' => 'training Category',
                    'lang_value' => 'training Category',
                    'created_at' => '2023-09-05 11:28:14',
                    'updated_at' => '2023-09-05 11:28:14',
                ),
            490 =>
                array(
                    'id' => 1491,
                    'lang' => 'en',
                    'lang_key' => 'Select training Category',
                    'lang_value' => 'Select training Category',
                    'created_at' => '2023-09-05 11:28:14',
                    'updated_at' => '2023-09-05 11:28:14',
                ),
            491 =>
                array(
                    'id' => 1492,
                    'lang' => 'en',
                    'lang_key' => ' Academic Training ',
                    'lang_value' => ' Academic Training ',
                    'created_at' => '2023-09-05 11:28:18',
                    'updated_at' => '2023-09-05 11:28:18',
                ),
            492 =>
                array(
                    'id' => 1493,
                    'lang' => 'en',
                    'lang_key' => ' Academic Training ',
                    'lang_value' => ' Academic Training ',
                    'created_at' => '2023-09-05 11:28:18',
                    'updated_at' => '2023-09-05 11:28:18',
                ),
            493 =>
                array(
                    'id' => 1494,
                    'lang' => 'en',
                    'lang_key' => 'Who Can Appaly',
                    'lang_value' => 'Who Can Appaly',
                    'created_at' => '2023-09-05 15:09:38',
                    'updated_at' => '2023-09-05 15:09:38',
                ),
            494 =>
                array(
                    'id' => 1495,
                    'lang' => 'en',
                    'lang_key' => 'Categoriesss',
                    'lang_value' => 'Categoriesss',
                    'created_at' => '2023-09-05 16:40:25',
                    'updated_at' => '2023-09-05 16:40:25',
                ),
            495 =>
                array(
                    'id' => 1496,
                    'lang' => 'en',
                    'lang_key' => 'Find academic scholarships by category',
                    'lang_value' => 'Find academic scholarships by category',
                    'created_at' => '2023-09-05 16:45:56',
                    'updated_at' => '2023-09-05 16:45:56',
                ),
            496 =>
                array(
                    'id' => 1497,
                    'lang' => 'en',
                    'lang_key' => 'Registration',
                    'lang_value' => 'Registration',
                    'created_at' => '2023-09-05 17:57:18',
                    'updated_at' => '2023-09-05 17:57:18',
                ),
            497 =>
                array(
                    'id' => 1498,
                    'lang' => 'en',
                    'lang_key' => 'All who can apply Scholarship',
                    'lang_value' => 'All who can apply Scholarship',
                    'created_at' => '2023-09-07 11:53:11',
                    'updated_at' => '2023-09-07 11:53:11',
                ),
            498 =>
                array(
                    'id' => 1499,
                    'lang' => 'en',
                    'lang_key' => 'Scholarship city has been updated successfully',
                    'lang_value' => 'Scholarship city has been updated successfully',
                    'created_at' => '2023-09-07 11:53:25',
                    'updated_at' => '2023-09-07 11:53:25',
                ),
            499 =>
                array(
                    'id' => 1500,
                    'lang' => 'en',
                    'lang_key' => 'Book a consultant',
                    'lang_value' => 'Book a consultant',
                    'created_at' => '2023-09-07 14:04:37',
                    'updated_at' => '2023-09-07 14:04:37',
                ),
        ));
        DB::table('translations')->insert(array(
            0 =>
                array(
                    'id' => 1501,
                    'lang' => 'en',
                    'lang_key' => 'Project description',
                    'lang_value' => 'Project description',
                    'created_at' => '2023-09-10 16:05:00',
                    'updated_at' => '2023-09-10 16:05:00',
                ),
            1 =>
                array(
                    'id' => 1502,
                    'lang' => 'en',
                    'lang_key' => 'Attach file',
                    'lang_value' => 'Attach file',
                    'created_at' => '2023-09-10 16:08:18',
                    'updated_at' => '2023-09-10 16:08:18',
                ),
            2 =>
                array(
                    'id' => 1503,
                    'lang' => 'en',
                    'lang_key' => 'How do you want to pay?',
                    'lang_value' => 'How do you want to pay?',
                    'created_at' => '2023-09-10 16:22:46',
                    'updated_at' => '2023-09-10 16:22:46',
                ),
            3 =>
                array(
                    'id' => 1504,
                    'lang' => 'en',
                    'lang_key' => 'Pay fixed price',
                    'lang_value' => 'Pay fixed price',
                    'created_at' => '2023-09-10 16:26:31',
                    'updated_at' => '2023-09-10 16:26:31',
                ),
            4 =>
                array(
                    'id' => 1505,
                    'lang' => 'en',
                    'lang_key' => 'Pay by the hour',
                    'lang_value' => 'Pay by the hour',
                    'created_at' => '2023-09-10 16:26:31',
                    'updated_at' => '2023-09-10 16:26:31',
                ),
            5 =>
                array(
                    'id' => 1506,
                    'lang' => 'en',
                    'lang_key' => 'Hire based on an hourly rate and pay for hours billed. Best for ongoing work.',
                    'lang_value' => 'Hire based on an hourly rate and pay for hours billed. Best for ongoing work.',
                    'created_at' => '2023-09-10 18:43:18',
                    'updated_at' => '2023-09-10 18:43:18',
                ),
            6 =>
                array(
                    'id' => 1507,
                    'lang' => 'en',
                    'lang_key' => 'Agree on a price and release payment when the job is done. Best for one-off tasks.',
                    'lang_value' => 'Agree on a price and release payment when the job is done. Best for one-off tasks.',
                    'created_at' => '2023-09-10 18:46:01',
                    'updated_at' => '2023-09-10 18:46:01',
                ),
            7 =>
                array(
                    'id' => 1508,
                    'lang' => 'en',
                    'lang_key' => 'What is your estimated budget?',
                    'lang_value' => 'What is your estimated budget?',
                    'created_at' => '2023-09-10 19:10:52',
                    'updated_at' => '2023-09-10 19:10:52',
                ),
            8 =>
                array(
                    'id' => 1509,
                    'lang' => 'en',
                    'lang_key' => 'What academic skills is required for this project? ',
                    'lang_value' => 'What academic skills is required for this project? ',
                    'created_at' => '2023-09-12 18:24:17',
                    'updated_at' => '2023-09-12 18:24:17',
                ),
            9 =>
                array(
                    'id' => 1510,
                    'lang' => 'en',
                    'lang_key' => 'List up to 5 key skills that represent your project. Academic consultants will use these skills to match with projects aligned to their interests and expertise.',
                    'lang_value' => 'List up to 5 key skills that represent your project. Academic consultants will use these skills to match with projects aligned to their interests and expertise.',
                    'created_at' => '2023-09-12 18:38:41',
                    'updated_at' => '2023-09-12 18:38:41',
                ),
            10 =>
                array(
                    'id' => 1511,
                    'lang' => 'en',
                    'lang_key' => 'Agree on a price upfront, then release payment upon project completion',
                    'lang_value' => 'Agree on a price upfront, then release payment upon project completion',
                    'created_at' => '2023-09-12 18:52:23',
                    'updated_at' => '2023-09-12 18:52:23',
                ),
            11 =>
                array(
                    'id' => 1512,
                    'lang' => 'en',
                    'lang_key' => 'Select freelancers based on their hourly rates and pay for the hours worked.',
                    'lang_value' => 'Select freelancers based on their hourly rates and pay for the hours worked.',
                    'created_at' => '2023-09-12 18:52:23',
                    'updated_at' => '2023-09-12 18:52:23',
                ),
            12 =>
                array(
                    'id' => 1513,
                    'lang' => 'en',
                    'lang_key' => 'Update training Information',
                    'lang_value' => 'Update training Information',
                    'created_at' => '2023-09-14 15:54:02',
                    'updated_at' => '2023-09-14 15:54:02',
                ),
            13 =>
                array(
                    'id' => 1514,
                    'lang' => 'en',
                    'lang_key' => 'Select Course Instructor',
                    'lang_value' => 'Select Course Instructor',
                    'created_at' => '2023-09-14 15:54:03',
                    'updated_at' => '2023-09-14 15:54:03',
                ),
            14 =>
                array(
                    'id' => 1515,
                    'lang' => 'en',
                    'lang_key' => 'training has been updated successfully',
                    'lang_value' => 'training has been updated successfully',
                    'created_at' => '2023-09-14 15:59:12',
                    'updated_at' => '2023-09-14 15:59:12',
                ),
            15 =>
                array(
                    'id' => 1516,
                    'lang' => 'en',
                    'lang_key' => 'Consultant Category',
                    'lang_value' => 'Consultant Category',
                    'created_at' => '2023-09-14 18:17:59',
                    'updated_at' => '2023-09-14 18:17:59',
                ),
            16 =>
                array(
                    'id' => 1517,
                    'lang' => 'en',
                    'lang_key' => 'Consultation',
                    'lang_value' => 'Consultation',
                    'created_at' => '2023-09-18 12:47:24',
                    'updated_at' => '2023-09-18 12:47:24',
                ),
            17 =>
                array(
                    'id' => 1518,
                    'lang' => 'en',
                    'lang_key' => 'Find an expert',
                    'lang_value' => 'Find an expert',
                    'created_at' => '2023-09-18 12:47:26',
                    'updated_at' => '2023-09-18 12:47:26',
                ),
            18 =>
                array(
                    'id' => 1519,
                    'lang' => 'en',
                    'lang_key' => 'Become an expert',
                    'lang_value' => 'Become an expert',
                    'created_at' => '2023-09-18 12:47:26',
                    'updated_at' => '2023-09-18 12:47:26',
                ),
            19 =>
                array(
                    'id' => 1520,
                    'lang' => 'en',
                    'lang_key' => 'Find Projects',
                    'lang_value' => 'Find Projects',
                    'created_at' => '2023-09-18 12:47:26',
                    'updated_at' => '2023-09-18 12:47:26',
                ),
            20 =>
                array(
                    'id' => 1521,
                    'lang' => 'en',
                    'lang_key' => ' Find Trainings ',
                    'lang_value' => ' Find Trainings ',
                    'created_at' => '2023-09-18 12:47:26',
                    'updated_at' => '2023-09-18 12:47:26',
                ),
            21 =>
                array(
                    'id' => 1522,
                    'lang' => 'en',
                    'lang_key' => 'Scholarships Database',
                    'lang_value' => 'Scholarships Database',
                    'created_at' => '2023-09-18 12:47:26',
                    'updated_at' => '2023-09-18 12:47:26',
                ),
            22 =>
                array(
                    'id' => 1523,
                    'lang' => 'en',
                    'lang_key' => '
Create your profile (it’s free)',
                    'lang_value' => '
Create your profile (it’s free)',
                    'created_at' => '2023-09-18 14:43:24',
                    'updated_at' => '2023-09-18 14:43:24',
                ),
            23 =>
                array(
                    'id' => 1524,
                    'lang' => 'en',
                    'lang_key' => 'This means you can sign up and build your professional profile on the platform without any cost. Your profile is where you showcase your skills, qualifications, and experience, allowing potential clients or employers to learn about your expertise.',
                    'lang_value' => 'This means you can sign up and build your professional profile on the platform without any cost. Your profile is where you showcase your skills, qualifications, and experience, allowing potential clients or employers to learn about your expertise.',
                    'created_at' => '2023-09-18 14:43:24',
                    'updated_at' => '2023-09-18 14:43:24',
                ),
            24 =>
                array(
                    'id' => 1525,
                    'lang' => 'en',
                    'lang_key' => ': As a consultant, you have the opportunity to explore various avenues for earning income. This might include browsing through available projects, job listings, or freelance opportunities to find work that matches your skills and interests.',
                    'lang_value' => ': As a consultant, you have the opportunity to explore various avenues for earning income. This might include browsing through available projects, job listings, or freelance opportunities to find work that matches your skills and interests.',
                    'created_at' => '2023-09-18 14:43:24',
                    'updated_at' => '2023-09-18 14:43:24',
                ),
            25 =>
                array(
                    'id' => 1526,
                    'lang' => 'en',
                    'lang_key' => 'This assures consultants that the platform provides secure payment methods. When you successfully complete a project or task, you can expect to receive your payment without concerns about financial security or fraud, making it a trustworthy place to conduct business. ',
                    'lang_value' => 'This assures consultants that the platform provides secure payment methods. When you successfully complete a project or task, you can expect to receive your payment without concerns about financial security or fraud, making it a trustworthy place to conduct business. ',
                    'created_at' => '2023-09-18 14:43:24',
                    'updated_at' => '2023-09-18 14:43:24',
                ),
            26 =>
                array(
                    'id' => 1527,
                    'lang' => 'en',
                    'lang_key' => 'Fair Fee Structure: ',
                    'lang_value' => 'Fair Fee Structure: ',
                    'created_at' => '2023-09-18 14:43:24',
                    'updated_at' => '2023-09-18 14:43:24',
                ),
            27 =>
                array(
                    'id' => 1528,
                    'lang' => 'en',
                    'lang_key' => 'ConsultantEdu Hub service fees are designed to be fair and based on the total billings with each consultant. Here\'s how it works: 20% for the first $500 billed by the consultant, 10% for total billings between $500.01 and $10,000, and 5% for total billings exceeding $10,000',
                    'lang_value' => 'ConsultantEdu Hub service fees are designed to be fair and based on the total billings with each consultant. Here\'s how it works: 20% for the first $500 billed by the consultant, 10% for total billings between $500.01 and $10,000, and 5% for total billings exceeding $10,000',
                    'created_at' => '2023-09-18 14:43:24',
                    'updated_at' => '2023-09-18 14:43:24',
                ),
            28 =>
                array(
                    'id' => 1529,
                    'lang' => 'en',
                    'lang_key' => 'Clients – find the best consultant for you',
                    'lang_value' => 'Clients – find the best consultant for you',
                    'created_at' => '2023-09-18 14:43:24',
                    'updated_at' => '2023-09-18 14:43:24',
                ),
            29 =>
                array(
                    'id' => 1530,
                    'lang' => 'en',
                    'lang_key' => 'By creating a job posting detailing your project\'s specific requirements. This service is provided to you free of charge',
                    'lang_value' => 'By creating a job posting detailing your project\'s specific requirements. This service is provided to you free of charge',
                    'created_at' => '2023-09-18 14:43:24',
                    'updated_at' => '2023-09-18 14:43:24',
                ),
            30 =>
                array(
                    'id' => 1531,
                    'lang' => 'en',
                    'lang_key' => 'Receive proposal',
                    'lang_value' => 'Receive proposal',
                    'created_at' => '2023-09-18 14:43:24',
                    'updated_at' => '2023-09-18 14:43:24',
                ),
            31 =>
                array(
                    'id' => 1532,
                    'lang' => 'en',
                    'lang_key' => 'After posting your job, our platform will attract proposals from our pool of academic consultants. You\'ll have the opportunity to review these proposals thoroughly.',
                    'lang_value' => 'After posting your job, our platform will attract proposals from our pool of academic consultants. You\'ll have the opportunity to review these proposals thoroughly.',
                    'created_at' => '2023-09-18 14:43:24',
                    'updated_at' => '2023-09-18 14:43:24',
                ),
            32 =>
                array(
                    'id' => 1533,
                    'lang' => 'en',
                    'lang_key' => 'Make Selection',
                    'lang_value' => 'Make Selection',
                    'created_at' => '2023-09-18 14:43:24',
                    'updated_at' => '2023-09-18 14:43:24',
                ),
            33 =>
                array(
                    'id' => 1534,
                    'lang' => 'en',
                    'lang_key' => 'With the proposals in hand, you can carefully evaluate the qualifications, experience, and proposed approaches of our consultants. Choose the one who best aligns with your project\'s needs.',
                    'lang_value' => 'With the proposals in hand, you can carefully evaluate the qualifications, experience, and proposed approaches of our consultants. Choose the one who best aligns with your project\'s needs.',
                    'created_at' => '2023-09-18 14:43:24',
                    'updated_at' => '2023-09-18 14:43:24',
                ),
            34 =>
                array(
                    'id' => 1535,
                    'lang' => 'en',
                    'lang_key' => 'Pay Securely',
                    'lang_value' => 'Pay Securely',
                    'created_at' => '2023-09-18 14:43:24',
                    'updated_at' => '2023-09-18 14:43:24',
                ),
            35 =>
                array(
                    'id' => 1536,
                    'lang' => 'en',
                    'lang_key' => 'To ensure both your and the consultant\'s security, payments are held in escrow until the project reaches its agreed-upon completion and meets your satisfaction. This guarantees a safe and reliable transaction process.',
                    'lang_value' => 'To ensure both your and the consultant\'s security, payments are held in escrow until the project reaches its agreed-upon completion and meets your satisfaction. This guarantees a safe and reliable transaction process.',
                    'created_at' => '2023-09-18 14:43:24',
                    'updated_at' => '2023-09-18 14:43:24',
                ),
            36 =>
                array(
                    'id' => 1537,
                    'lang' => 'en',
                    'lang_key' => 'How reviews work ',
                    'lang_value' => 'How reviews work ',
                    'created_at' => '2023-09-18 14:43:24',
                    'updated_at' => '2023-09-18 14:43:24',
                ),
            37 =>
                array(
                    'id' => 1538,
                    'lang' => 'en',
                    'lang_key' => 'Category is deleted',
                    'lang_value' => 'Category is deleted',
                    'created_at' => '2023-09-18 20:20:54',
                    'updated_at' => '2023-09-18 20:20:54',
                ),
            38 =>
                array(
                    'id' => 1539,
                    'lang' => 'en',
                    'lang_key' => 'Success Stories',
                    'lang_value' => 'Success Stories',
                    'created_at' => '2023-09-19 16:29:58',
                    'updated_at' => '2023-09-19 16:29:58',
                ),
            39 =>
                array(
                    'id' => 1540,
                    'lang' => 'en',
                    'lang_key' => '
Create your profile (it’s free)',
                    'lang_value' => '
Create your profile (it’s free)',
                    'created_at' => '2023-09-20 15:47:31',
                    'updated_at' => '2023-09-20 15:47:31',
                ),
        ));
    }
}
