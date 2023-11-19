<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->delete();

        DB::table('countries')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'name' => 'Afghanistan',
                    'code' => 'AF',
                    'photo' => '\\public\\assets\\flag\\af.png',
                    'created_at' => '2020-04-27 10:29:06',
                    'updated_at' => '2020-04-27 10:29:06',
                    'deleted_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 2,
                    'name' => 'Albania',
                    'code' => 'AL',
                    'photo' => '\\public\\assets\\flag\\al.png',
                    'created_at' => '2020-04-27 10:29:06',
                    'updated_at' => '2020-04-27 10:29:06',
                    'deleted_at' => NULL,
                ),
            2 =>
                array(
                    'id' => 3,
                    'name' => 'Algeria',
                    'code' => 'DZ',
                    'photo' => '\\public\\assets\\flag\\dz.png',
                    'created_at' => '2020-04-27 10:29:06',
                    'updated_at' => '2020-04-27 10:29:06',
                    'deleted_at' => NULL,
                ),
            3 =>
                array(
                    'id' => 4,
                    'name' => 'American Samoa',
                    'code' => 'AS',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:06',
                    'updated_at' => '2020-04-27 10:29:06',
                    'deleted_at' => NULL,
                ),
            4 =>
                array(
                    'id' => 5,
                    'name' => 'Andorra',
                    'code' => 'AD',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:06',
                    'updated_at' => '2020-04-27 10:29:06',
                    'deleted_at' => NULL,
                ),
            5 =>
                array(
                    'id' => 6,
                    'name' => 'Angola',
                    'code' => 'AO',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:06',
                    'updated_at' => '2020-04-27 10:29:06',
                    'deleted_at' => NULL,
                ),
            6 =>
                array(
                    'id' => 7,
                    'name' => 'Anguilla',
                    'code' => 'AI',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:06',
                    'updated_at' => '2020-04-27 10:29:06',
                    'deleted_at' => NULL,
                ),
            7 =>
                array(
                    'id' => 8,
                    'name' => 'Antarctica',
                    'code' => 'AQ',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:06',
                    'updated_at' => '2020-04-27 10:29:06',
                    'deleted_at' => NULL,
                ),
            8 =>
                array(
                    'id' => 9,
                    'name' => 'Antigua And Barbuda',
                    'code' => 'AG',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:06',
                    'updated_at' => '2020-04-27 10:29:06',
                    'deleted_at' => NULL,
                ),
            9 =>
                array(
                    'id' => 10,
                    'name' => 'Argentina',
                    'code' => 'AR',
                    'photo' => '\\public\\assets\\flag\\ar.png',
                    'created_at' => '2020-04-27 10:29:06',
                    'updated_at' => '2020-04-27 10:29:06',
                    'deleted_at' => NULL,
                ),
            10 =>
                array(
                    'id' => 11,
                    'name' => 'Armenia',
                    'code' => 'AM',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:06',
                    'updated_at' => '2020-04-27 10:29:06',
                    'deleted_at' => NULL,
                ),
            11 =>
                array(
                    'id' => 12,
                    'name' => 'Aruba',
                    'code' => 'AW',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:06',
                    'updated_at' => '2020-04-27 10:29:06',
                    'deleted_at' => NULL,
                ),
            12 =>
                array(
                    'id' => 13,
                    'name' => 'Australia',
                    'code' => 'AU',
                    'photo' => '\\public\\assets\\flag\\aus.png',
                    'created_at' => '2020-04-27 10:29:06',
                    'updated_at' => '2020-04-27 10:29:06',
                    'deleted_at' => NULL,
                ),
            13 =>
                array(
                    'id' => 14,
                    'name' => 'Austria',
                    'code' => 'AT',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:06',
                    'updated_at' => '2020-04-27 10:29:06',
                    'deleted_at' => NULL,
                ),
            14 =>
                array(
                    'id' => 15,
                    'name' => 'Azerbaijan',
                    'code' => 'AZ',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:07',
                    'updated_at' => '2020-04-27 10:29:07',
                    'deleted_at' => NULL,
                ),
            15 =>
                array(
                    'id' => 16,
                    'name' => 'Bahamas The',
                    'code' => 'BS',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:07',
                    'updated_at' => '2020-04-27 10:29:07',
                    'deleted_at' => NULL,
                ),
            16 =>
                array(
                    'id' => 17,
                    'name' => 'Bahrain',
                    'code' => 'BH',
                    'photo' => '\\public\\assets\\flag\\bh.png',
                    'created_at' => '2020-04-27 10:29:07',
                    'updated_at' => '2020-04-27 10:29:07',
                    'deleted_at' => NULL,
                ),
            17 =>
                array(
                    'id' => 18,
                    'name' => 'Bangladesh',
                    'code' => 'BD',
                    'photo' => '\\public\\assets\\flag\\bd.png',
                    'created_at' => '2020-04-27 10:29:07',
                    'updated_at' => '2020-04-27 10:29:07',
                    'deleted_at' => NULL,
                ),
            18 =>
                array(
                    'id' => 19,
                    'name' => 'Barbados',
                    'code' => 'BB',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:07',
                    'updated_at' => '2020-04-27 10:29:07',
                    'deleted_at' => NULL,
                ),
            19 =>
                array(
                    'id' => 20,
                    'name' => 'Belarus',
                    'code' => 'BY',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:07',
                    'updated_at' => '2020-04-27 10:29:07',
                    'deleted_at' => NULL,
                ),
            20 =>
                array(
                    'id' => 21,
                    'name' => 'Belgium',
                    'code' => 'BE',
                    'photo' => '\\public\\assets\\flag\\be.png',
                    'created_at' => '2020-04-27 10:29:07',
                    'updated_at' => '2020-04-27 10:29:07',
                    'deleted_at' => NULL,
                ),
            21 =>
                array(
                    'id' => 22,
                    'name' => 'Belize',
                    'code' => 'BZ',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:07',
                    'updated_at' => '2020-04-27 10:29:07',
                    'deleted_at' => NULL,
                ),
            22 =>
                array(
                    'id' => 23,
                    'name' => 'Benin',
                    'code' => 'BJ',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:07',
                    'updated_at' => '2020-04-27 10:29:07',
                    'deleted_at' => NULL,
                ),
            23 =>
                array(
                    'id' => 24,
                    'name' => 'Bermuda',
                    'code' => 'BM',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:07',
                    'updated_at' => '2020-04-27 10:29:07',
                    'deleted_at' => NULL,
                ),
            24 =>
                array(
                    'id' => 25,
                    'name' => 'Bhutan',
                    'code' => 'BT',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:07',
                    'updated_at' => '2020-04-27 10:29:07',
                    'deleted_at' => NULL,
                ),
            25 =>
                array(
                    'id' => 26,
                    'name' => 'Bolivia',
                    'code' => 'BO',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:07',
                    'updated_at' => '2020-04-27 10:29:07',
                    'deleted_at' => NULL,
                ),
            26 =>
                array(
                    'id' => 27,
                    'name' => 'Bosnia and Herzegovina',
                    'code' => 'BA',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:07',
                    'updated_at' => '2020-04-27 10:29:07',
                    'deleted_at' => NULL,
                ),
            27 =>
                array(
                    'id' => 28,
                    'name' => 'Botswana',
                    'code' => 'BW',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:07',
                    'updated_at' => '2020-04-27 10:29:07',
                    'deleted_at' => NULL,
                ),
            28 =>
                array(
                    'id' => 29,
                    'name' => 'Bouvet Island',
                    'code' => 'BV',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:07',
                    'updated_at' => '2020-04-27 10:29:07',
                    'deleted_at' => NULL,
                ),
            29 =>
                array(
                    'id' => 30,
                    'name' => 'Brazil',
                    'code' => 'BR',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:07',
                    'updated_at' => '2020-04-27 10:29:07',
                    'deleted_at' => NULL,
                ),
            30 =>
                array(
                    'id' => 31,
                    'name' => 'British Indian Ocean Territory',
                    'code' => 'IO',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:07',
                    'updated_at' => '2020-04-27 10:29:07',
                    'deleted_at' => NULL,
                ),
            31 =>
                array(
                    'id' => 32,
                    'name' => 'Brunei',
                    'code' => 'BN',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:07',
                    'updated_at' => '2020-04-27 10:29:07',
                    'deleted_at' => NULL,
                ),
            32 =>
                array(
                    'id' => 33,
                    'name' => 'Bulgaria',
                    'code' => 'BG',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:07',
                    'updated_at' => '2020-04-27 10:29:07',
                    'deleted_at' => NULL,
                ),
            33 =>
                array(
                    'id' => 34,
                    'name' => 'Burkina Faso',
                    'code' => 'BF',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:07',
                    'updated_at' => '2020-04-27 10:29:07',
                    'deleted_at' => NULL,
                ),
            34 =>
                array(
                    'id' => 35,
                    'name' => 'Burundi',
                    'code' => 'BI',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:07',
                    'updated_at' => '2020-04-27 10:29:07',
                    'deleted_at' => NULL,
                ),
            35 =>
                array(
                    'id' => 36,
                    'name' => 'Cambodia',
                    'code' => 'KH',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:08',
                    'updated_at' => '2020-04-27 10:29:08',
                    'deleted_at' => NULL,
                ),
            36 =>
                array(
                    'id' => 37,
                    'name' => 'Cameroon',
                    'code' => 'CM',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:08',
                    'updated_at' => '2020-04-27 10:29:08',
                    'deleted_at' => NULL,
                ),
            37 =>
                array(
                    'id' => 38,
                    'name' => 'Canada',
                    'code' => 'CA',
                    'photo' => '\\public\\assets\\flag\\ca.png',
                    'created_at' => '2020-04-27 10:29:08',
                    'updated_at' => '2020-04-27 10:29:08',
                    'deleted_at' => NULL,
                ),
            38 =>
                array(
                    'id' => 39,
                    'name' => 'Cape Verde',
                    'code' => 'CV',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:08',
                    'updated_at' => '2020-04-27 10:29:08',
                    'deleted_at' => NULL,
                ),
            39 =>
                array(
                    'id' => 40,
                    'name' => 'Cayman Islands',
                    'code' => 'KY',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:08',
                    'updated_at' => '2020-04-27 10:29:08',
                    'deleted_at' => NULL,
                ),
            40 =>
                array(
                    'id' => 41,
                    'name' => 'Central African Republic',
                    'code' => 'CF',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:08',
                    'updated_at' => '2020-04-27 10:29:08',
                    'deleted_at' => NULL,
                ),
            41 =>
                array(
                    'id' => 42,
                    'name' => 'Chad',
                    'code' => 'TD',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:08',
                    'updated_at' => '2020-04-27 10:29:08',
                    'deleted_at' => NULL,
                ),
            42 =>
                array(
                    'id' => 43,
                    'name' => 'Chile',
                    'code' => 'CL',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:08',
                    'updated_at' => '2020-04-27 10:29:08',
                    'deleted_at' => NULL,
                ),
            43 =>
                array(
                    'id' => 44,
                    'name' => 'China',
                    'code' => 'CN',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:08',
                    'updated_at' => '2020-04-27 10:29:08',
                    'deleted_at' => NULL,
                ),
            44 =>
                array(
                    'id' => 45,
                    'name' => 'Christmas Island',
                    'code' => 'CX',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:08',
                    'updated_at' => '2020-04-27 10:29:08',
                    'deleted_at' => NULL,
                ),
            45 =>
                array(
                    'id' => 46,
                    'name' => 'Cocos (Keeling) Islands',
                    'code' => 'CC',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:08',
                    'updated_at' => '2020-04-27 10:29:08',
                    'deleted_at' => NULL,
                ),
            46 =>
                array(
                    'id' => 47,
                    'name' => 'Colombia',
                    'code' => 'CO',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:08',
                    'updated_at' => '2020-04-27 10:29:08',
                    'deleted_at' => NULL,
                ),
            47 =>
                array(
                    'id' => 48,
                    'name' => 'Comoros',
                    'code' => 'KM',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:08',
                    'updated_at' => '2020-04-27 10:29:08',
                    'deleted_at' => NULL,
                ),
            48 =>
                array(
                    'id' => 49,
                    'name' => 'Republic Of The Congo',
                    'code' => 'CG',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:08',
                    'updated_at' => '2020-04-27 10:29:08',
                    'deleted_at' => NULL,
                ),
            49 =>
                array(
                    'id' => 50,
                    'name' => 'Democratic Republic Of The Congo',
                    'code' => 'CD',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:08',
                    'updated_at' => '2020-04-27 10:29:08',
                    'deleted_at' => NULL,
                ),
            50 =>
                array(
                    'id' => 51,
                    'name' => 'Cook Islands',
                    'code' => 'CK',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:08',
                    'updated_at' => '2020-04-27 10:29:08',
                    'deleted_at' => NULL,
                ),
            51 =>
                array(
                    'id' => 52,
                    'name' => 'Costa Rica',
                    'code' => 'CR',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:08',
                    'updated_at' => '2020-04-27 10:29:08',
                    'deleted_at' => NULL,
                ),
            52 =>
                array(
                    'id' => 53,
                    'name' => 'Cote D\'\'Ivoire (Ivory Coast)',
                    'code' => 'CI',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:08',
                    'updated_at' => '2020-04-27 10:29:08',
                    'deleted_at' => NULL,
                ),
            53 =>
                array(
                    'id' => 54,
                    'name' => 'Croatia (Hrvatska)',
                    'code' => 'HR',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:08',
                    'updated_at' => '2020-04-27 10:29:08',
                    'deleted_at' => NULL,
                ),
            54 =>
                array(
                    'id' => 55,
                    'name' => 'Cuba',
                    'code' => 'CU',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:08',
                    'updated_at' => '2020-04-27 10:29:08',
                    'deleted_at' => NULL,
                ),
            55 =>
                array(
                    'id' => 56,
                    'name' => 'Cyprus',
                    'code' => 'CY',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:08',
                    'updated_at' => '2020-04-27 10:29:08',
                    'deleted_at' => NULL,
                ),
            56 =>
                array(
                    'id' => 57,
                    'name' => 'Czech Republic',
                    'code' => 'CZ',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:08',
                    'updated_at' => '2020-04-27 10:29:08',
                    'deleted_at' => NULL,
                ),
            57 =>
                array(
                    'id' => 58,
                    'name' => 'Denmark',
                    'code' => 'DK',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:09',
                    'updated_at' => '2020-04-27 10:29:09',
                    'deleted_at' => NULL,
                ),
            58 =>
                array(
                    'id' => 59,
                    'name' => 'Djibouti',
                    'code' => 'DJ',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:09',
                    'updated_at' => '2020-04-27 10:29:09',
                    'deleted_at' => NULL,
                ),
            59 =>
                array(
                    'id' => 60,
                    'name' => 'Dominica',
                    'code' => 'DM',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:09',
                    'updated_at' => '2020-04-27 10:29:09',
                    'deleted_at' => NULL,
                ),
            60 =>
                array(
                    'id' => 61,
                    'name' => 'Dominican Republic',
                    'code' => 'DO',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:09',
                    'updated_at' => '2020-04-27 10:29:09',
                    'deleted_at' => NULL,
                ),
            61 =>
                array(
                    'id' => 62,
                    'name' => 'East Timor',
                    'code' => 'TP',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:09',
                    'updated_at' => '2020-04-27 10:29:09',
                    'deleted_at' => NULL,
                ),
            62 =>
                array(
                    'id' => 63,
                    'name' => 'Ecuador',
                    'code' => 'EC',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:09',
                    'updated_at' => '2020-04-27 10:29:09',
                    'deleted_at' => NULL,
                ),
            63 =>
                array(
                    'id' => 64,
                    'name' => 'Egypt',
                    'code' => 'EG',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:09',
                    'updated_at' => '2020-04-27 10:29:09',
                    'deleted_at' => NULL,
                ),
            64 =>
                array(
                    'id' => 65,
                    'name' => 'El Salvador',
                    'code' => 'SV',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:09',
                    'updated_at' => '2020-04-27 10:29:09',
                    'deleted_at' => NULL,
                ),
            65 =>
                array(
                    'id' => 66,
                    'name' => 'Equatorial Guinea',
                    'code' => 'GQ',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:09',
                    'updated_at' => '2020-04-27 10:29:09',
                    'deleted_at' => NULL,
                ),
            66 =>
                array(
                    'id' => 67,
                    'name' => 'Eritrea',
                    'code' => 'ER',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:09',
                    'updated_at' => '2020-04-27 10:29:09',
                    'deleted_at' => NULL,
                ),
            67 =>
                array(
                    'id' => 68,
                    'name' => 'Estonia',
                    'code' => 'EE',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:09',
                    'updated_at' => '2020-04-27 10:29:09',
                    'deleted_at' => NULL,
                ),
            68 =>
                array(
                    'id' => 69,
                    'name' => 'Ethiopia',
                    'code' => 'ET',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:09',
                    'updated_at' => '2020-04-27 10:29:09',
                    'deleted_at' => NULL,
                ),
            69 =>
                array(
                    'id' => 70,
                    'name' => 'External Territories of Australia',
                    'code' => 'XA',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:09',
                    'updated_at' => '2020-04-27 10:29:09',
                    'deleted_at' => NULL,
                ),
            70 =>
                array(
                    'id' => 71,
                    'name' => 'Falkland Islands',
                    'code' => 'FK',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:09',
                    'updated_at' => '2020-04-27 10:29:09',
                    'deleted_at' => NULL,
                ),
            71 =>
                array(
                    'id' => 72,
                    'name' => 'Faroe Islands',
                    'code' => 'FO',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:09',
                    'updated_at' => '2020-04-27 10:29:09',
                    'deleted_at' => NULL,
                ),
            72 =>
                array(
                    'id' => 73,
                    'name' => 'Fiji Islands',
                    'code' => 'FJ',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:09',
                    'updated_at' => '2020-04-27 10:29:09',
                    'deleted_at' => NULL,
                ),
            73 =>
                array(
                    'id' => 74,
                    'name' => 'Finland',
                    'code' => 'FI',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:09',
                    'updated_at' => '2020-04-27 10:29:09',
                    'deleted_at' => NULL,
                ),
            74 =>
                array(
                    'id' => 75,
                    'name' => 'France',
                    'code' => 'FR',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:09',
                    'updated_at' => '2020-04-27 10:29:09',
                    'deleted_at' => NULL,
                ),
            75 =>
                array(
                    'id' => 76,
                    'name' => 'French Guiana',
                    'code' => 'GF',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:09',
                    'updated_at' => '2020-04-27 10:29:09',
                    'deleted_at' => NULL,
                ),
            76 =>
                array(
                    'id' => 77,
                    'name' => 'French Polynesia',
                    'code' => 'PF',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:09',
                    'updated_at' => '2020-04-27 10:29:09',
                    'deleted_at' => NULL,
                ),
            77 =>
                array(
                    'id' => 78,
                    'name' => 'French Southern Territories',
                    'code' => 'TF',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:09',
                    'updated_at' => '2020-04-27 10:29:09',
                    'deleted_at' => NULL,
                ),
            78 =>
                array(
                    'id' => 79,
                    'name' => 'Gabon',
                    'code' => 'GA',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:09',
                    'updated_at' => '2020-04-27 10:29:09',
                    'deleted_at' => NULL,
                ),
            79 =>
                array(
                    'id' => 80,
                    'name' => 'Gambia The',
                    'code' => 'GM',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:10',
                    'updated_at' => '2020-04-27 10:29:10',
                    'deleted_at' => NULL,
                ),
            80 =>
                array(
                    'id' => 81,
                    'name' => 'Georgia',
                    'code' => 'GE',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:10',
                    'updated_at' => '2020-04-27 10:29:10',
                    'deleted_at' => NULL,
                ),
            81 =>
                array(
                    'id' => 82,
                    'name' => 'Germany',
                    'code' => 'DE',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:10',
                    'updated_at' => '2020-04-27 10:29:10',
                    'deleted_at' => NULL,
                ),
            82 =>
                array(
                    'id' => 83,
                    'name' => 'Ghana',
                    'code' => 'GH',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:10',
                    'updated_at' => '2020-04-27 10:29:10',
                    'deleted_at' => NULL,
                ),
            83 =>
                array(
                    'id' => 84,
                    'name' => 'Gibraltar',
                    'code' => 'GI',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:10',
                    'updated_at' => '2020-04-27 10:29:10',
                    'deleted_at' => NULL,
                ),
            84 =>
                array(
                    'id' => 85,
                    'name' => 'Greece',
                    'code' => 'GR',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:10',
                    'updated_at' => '2020-04-27 10:29:10',
                    'deleted_at' => NULL,
                ),
            85 =>
                array(
                    'id' => 86,
                    'name' => 'Greenland',
                    'code' => 'GL',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:10',
                    'updated_at' => '2020-04-27 10:29:10',
                    'deleted_at' => NULL,
                ),
            86 =>
                array(
                    'id' => 87,
                    'name' => 'Grenada',
                    'code' => 'GD',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:10',
                    'updated_at' => '2020-04-27 10:29:10',
                    'deleted_at' => NULL,
                ),
            87 =>
                array(
                    'id' => 88,
                    'name' => 'Guadeloupe',
                    'code' => 'GP',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:10',
                    'updated_at' => '2020-04-27 10:29:10',
                    'deleted_at' => NULL,
                ),
            88 =>
                array(
                    'id' => 89,
                    'name' => 'Guam',
                    'code' => 'GU',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:10',
                    'updated_at' => '2020-04-27 10:29:10',
                    'deleted_at' => NULL,
                ),
            89 =>
                array(
                    'id' => 90,
                    'name' => 'Guatemala',
                    'code' => 'GT',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:10',
                    'updated_at' => '2020-04-27 10:29:10',
                    'deleted_at' => NULL,
                ),
            90 =>
                array(
                    'id' => 91,
                    'name' => 'Guernsey and Alderney',
                    'code' => 'XU',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:10',
                    'updated_at' => '2020-04-27 10:29:10',
                    'deleted_at' => NULL,
                ),
            91 =>
                array(
                    'id' => 92,
                    'name' => 'Guinea',
                    'code' => 'GN',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:10',
                    'updated_at' => '2020-04-27 10:29:10',
                    'deleted_at' => NULL,
                ),
            92 =>
                array(
                    'id' => 93,
                    'name' => 'Guinea-Bissau',
                    'code' => 'GW',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:10',
                    'updated_at' => '2020-04-27 10:29:10',
                    'deleted_at' => NULL,
                ),
            93 =>
                array(
                    'id' => 94,
                    'name' => 'Guyana',
                    'code' => 'GY',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:10',
                    'updated_at' => '2020-04-27 10:29:10',
                    'deleted_at' => NULL,
                ),
            94 =>
                array(
                    'id' => 95,
                    'name' => 'Haiti',
                    'code' => 'HT',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:10',
                    'updated_at' => '2020-04-27 10:29:10',
                    'deleted_at' => NULL,
                ),
            95 =>
                array(
                    'id' => 96,
                    'name' => 'Heard and McDonald Islands',
                    'code' => 'HM',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:10',
                    'updated_at' => '2020-04-27 10:29:10',
                    'deleted_at' => NULL,
                ),
            96 =>
                array(
                    'id' => 97,
                    'name' => 'Honduras',
                    'code' => 'HN',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:10',
                    'updated_at' => '2020-04-27 10:29:10',
                    'deleted_at' => NULL,
                ),
            97 =>
                array(
                    'id' => 98,
                    'name' => 'Hong Kong S.A.R.',
                    'code' => 'HK',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:10',
                    'updated_at' => '2020-04-27 10:29:10',
                    'deleted_at' => NULL,
                ),
            98 =>
                array(
                    'id' => 99,
                    'name' => 'Hungary',
                    'code' => 'HU',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:10',
                    'updated_at' => '2020-04-27 10:29:10',
                    'deleted_at' => NULL,
                ),
            99 =>
                array(
                    'id' => 100,
                    'name' => 'Iceland',
                    'code' => 'IS',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:10',
                    'updated_at' => '2020-04-27 10:29:10',
                    'deleted_at' => NULL,
                ),
            100 =>
                array(
                    'id' => 101,
                    'name' => 'India',
                    'code' => 'IN',
                    'photo' => '\\public\\assets\\flag\\in.png',
                    'created_at' => '2020-04-27 10:29:10',
                    'updated_at' => '2020-04-27 10:29:10',
                    'deleted_at' => NULL,
                ),
            101 =>
                array(
                    'id' => 102,
                    'name' => 'Indonesia',
                    'code' => 'ID',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:10',
                    'updated_at' => '2020-04-27 10:29:10',
                    'deleted_at' => NULL,
                ),
            102 =>
                array(
                    'id' => 103,
                    'name' => 'Iran',
                    'code' => 'IR',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:11',
                    'updated_at' => '2020-04-27 10:29:11',
                    'deleted_at' => NULL,
                ),
            103 =>
                array(
                    'id' => 104,
                    'name' => 'Iraq',
                    'code' => 'IQ',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:11',
                    'updated_at' => '2020-04-27 10:29:11',
                    'deleted_at' => NULL,
                ),
            104 =>
                array(
                    'id' => 105,
                    'name' => 'Ireland',
                    'code' => 'IE',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:11',
                    'updated_at' => '2020-04-27 10:29:11',
                    'deleted_at' => NULL,
                ),
            105 =>
                array(
                    'id' => 106,
                    'name' => 'Israel',
                    'code' => 'IL',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:11',
                    'updated_at' => '2020-04-27 10:29:11',
                    'deleted_at' => NULL,
                ),
            106 =>
                array(
                    'id' => 107,
                    'name' => 'Italy',
                    'code' => 'IT',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:11',
                    'updated_at' => '2020-04-27 10:29:11',
                    'deleted_at' => NULL,
                ),
            107 =>
                array(
                    'id' => 108,
                    'name' => 'Jamaica',
                    'code' => 'JM',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:11',
                    'updated_at' => '2020-04-27 10:29:11',
                    'deleted_at' => NULL,
                ),
            108 =>
                array(
                    'id' => 109,
                    'name' => 'Japan',
                    'code' => 'JP',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:11',
                    'updated_at' => '2020-04-27 10:29:11',
                    'deleted_at' => NULL,
                ),
            109 =>
                array(
                    'id' => 110,
                    'name' => 'Jersey',
                    'code' => 'XJ',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:11',
                    'updated_at' => '2020-04-27 10:29:11',
                    'deleted_at' => NULL,
                ),
            110 =>
                array(
                    'id' => 111,
                    'name' => 'Jordan',
                    'code' => 'JO',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:11',
                    'updated_at' => '2020-04-27 10:29:11',
                    'deleted_at' => NULL,
                ),
            111 =>
                array(
                    'id' => 112,
                    'name' => 'Kazakhstan',
                    'code' => 'KZ',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:11',
                    'updated_at' => '2020-04-27 10:29:11',
                    'deleted_at' => NULL,
                ),
            112 =>
                array(
                    'id' => 113,
                    'name' => 'Kenya',
                    'code' => 'KE',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:11',
                    'updated_at' => '2020-04-27 10:29:11',
                    'deleted_at' => NULL,
                ),
            113 =>
                array(
                    'id' => 114,
                    'name' => 'Kiribati',
                    'code' => 'KI',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:11',
                    'updated_at' => '2020-04-27 10:29:11',
                    'deleted_at' => NULL,
                ),
            114 =>
                array(
                    'id' => 115,
                    'name' => 'Korea North',
                    'code' => 'KP',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:11',
                    'updated_at' => '2020-04-27 10:29:11',
                    'deleted_at' => NULL,
                ),
            115 =>
                array(
                    'id' => 116,
                    'name' => 'Korea South',
                    'code' => 'KR',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:11',
                    'updated_at' => '2020-04-27 10:29:11',
                    'deleted_at' => NULL,
                ),
            116 =>
                array(
                    'id' => 117,
                    'name' => 'Kuwait',
                    'code' => 'KW',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:11',
                    'updated_at' => '2020-04-27 10:29:11',
                    'deleted_at' => NULL,
                ),
            117 =>
                array(
                    'id' => 118,
                    'name' => 'Kyrgyzstan',
                    'code' => 'KG',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:11',
                    'updated_at' => '2020-04-27 10:29:11',
                    'deleted_at' => NULL,
                ),
            118 =>
                array(
                    'id' => 119,
                    'name' => 'Laos',
                    'code' => 'LA',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:11',
                    'updated_at' => '2020-04-27 10:29:11',
                    'deleted_at' => NULL,
                ),
            119 =>
                array(
                    'id' => 120,
                    'name' => 'Latvia',
                    'code' => 'LV',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:11',
                    'updated_at' => '2020-04-27 10:29:11',
                    'deleted_at' => NULL,
                ),
            120 =>
                array(
                    'id' => 121,
                    'name' => 'Lebanon',
                    'code' => 'LB',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:11',
                    'updated_at' => '2020-04-27 10:29:11',
                    'deleted_at' => NULL,
                ),
            121 =>
                array(
                    'id' => 122,
                    'name' => 'Lesotho',
                    'code' => 'LS',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:11',
                    'updated_at' => '2020-04-27 10:29:11',
                    'deleted_at' => NULL,
                ),
            122 =>
                array(
                    'id' => 123,
                    'name' => 'Liberia',
                    'code' => 'LR',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:11',
                    'updated_at' => '2020-04-27 10:29:11',
                    'deleted_at' => NULL,
                ),
            123 =>
                array(
                    'id' => 124,
                    'name' => 'Libya',
                    'code' => 'LY',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:11',
                    'updated_at' => '2020-04-27 10:29:11',
                    'deleted_at' => NULL,
                ),
            124 =>
                array(
                    'id' => 125,
                    'name' => 'Liechtenstein',
                    'code' => 'LI',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:12',
                    'updated_at' => '2020-04-27 10:29:12',
                    'deleted_at' => NULL,
                ),
            125 =>
                array(
                    'id' => 126,
                    'name' => 'Lithuania',
                    'code' => 'LT',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:12',
                    'updated_at' => '2020-04-27 10:29:12',
                    'deleted_at' => NULL,
                ),
            126 =>
                array(
                    'id' => 127,
                    'name' => 'Luxembourg',
                    'code' => 'LU',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:12',
                    'updated_at' => '2020-04-27 10:29:12',
                    'deleted_at' => NULL,
                ),
            127 =>
                array(
                    'id' => 128,
                    'name' => 'Macau S.A.R.',
                    'code' => 'MO',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:12',
                    'updated_at' => '2020-04-27 10:29:12',
                    'deleted_at' => NULL,
                ),
            128 =>
                array(
                    'id' => 129,
                    'name' => 'Macedonia',
                    'code' => 'MK',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:12',
                    'updated_at' => '2020-04-27 10:29:12',
                    'deleted_at' => NULL,
                ),
            129 =>
                array(
                    'id' => 130,
                    'name' => 'Madagascar',
                    'code' => 'MG',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:12',
                    'updated_at' => '2020-04-27 10:29:12',
                    'deleted_at' => NULL,
                ),
            130 =>
                array(
                    'id' => 131,
                    'name' => 'Malawi',
                    'code' => 'MW',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:12',
                    'updated_at' => '2020-04-27 10:29:12',
                    'deleted_at' => NULL,
                ),
            131 =>
                array(
                    'id' => 132,
                    'name' => 'Malaysia',
                    'code' => 'MY',
                    'photo' => '\\public\\assets\\flag\\my.png',
                    'created_at' => '2020-04-27 10:29:12',
                    'updated_at' => '2020-04-27 10:29:12',
                    'deleted_at' => NULL,
                ),
            132 =>
                array(
                    'id' => 133,
                    'name' => 'Maldives',
                    'code' => 'MV',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:12',
                    'updated_at' => '2020-04-27 10:29:12',
                    'deleted_at' => NULL,
                ),
            133 =>
                array(
                    'id' => 134,
                    'name' => 'Mali',
                    'code' => 'ML',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:12',
                    'updated_at' => '2020-04-27 10:29:12',
                    'deleted_at' => NULL,
                ),
            134 =>
                array(
                    'id' => 135,
                    'name' => 'Malta',
                    'code' => 'MT',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:12',
                    'updated_at' => '2020-04-27 10:29:12',
                    'deleted_at' => NULL,
                ),
            135 =>
                array(
                    'id' => 136,
                    'name' => 'Man (Isle of)',
                    'code' => 'XM',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:12',
                    'updated_at' => '2020-04-27 10:29:12',
                    'deleted_at' => NULL,
                ),
            136 =>
                array(
                    'id' => 137,
                    'name' => 'Marshall Islands',
                    'code' => 'MH',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:12',
                    'updated_at' => '2020-04-27 10:29:12',
                    'deleted_at' => NULL,
                ),
            137 =>
                array(
                    'id' => 138,
                    'name' => 'Martinique',
                    'code' => 'MQ',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:12',
                    'updated_at' => '2020-04-27 10:29:12',
                    'deleted_at' => NULL,
                ),
            138 =>
                array(
                    'id' => 139,
                    'name' => 'Mauritania',
                    'code' => 'MR',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:12',
                    'updated_at' => '2020-04-27 10:29:12',
                    'deleted_at' => NULL,
                ),
            139 =>
                array(
                    'id' => 140,
                    'name' => 'Mauritius',
                    'code' => 'MU',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:12',
                    'updated_at' => '2020-04-27 10:29:12',
                    'deleted_at' => NULL,
                ),
            140 =>
                array(
                    'id' => 141,
                    'name' => 'Mayotte',
                    'code' => 'YT',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:12',
                    'updated_at' => '2020-04-27 10:29:12',
                    'deleted_at' => NULL,
                ),
            141 =>
                array(
                    'id' => 142,
                    'name' => 'Mexico',
                    'code' => 'MX',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:12',
                    'updated_at' => '2020-04-27 10:29:12',
                    'deleted_at' => NULL,
                ),
            142 =>
                array(
                    'id' => 143,
                    'name' => 'Micronesia',
                    'code' => 'FM',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:12',
                    'updated_at' => '2020-04-27 10:29:12',
                    'deleted_at' => NULL,
                ),
            143 =>
                array(
                    'id' => 144,
                    'name' => 'Moldova',
                    'code' => 'MD',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:12',
                    'updated_at' => '2020-04-27 10:29:12',
                    'deleted_at' => NULL,
                ),
            144 =>
                array(
                    'id' => 145,
                    'name' => 'Monaco',
                    'code' => 'MC',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:12',
                    'updated_at' => '2020-04-27 10:29:12',
                    'deleted_at' => NULL,
                ),
            145 =>
                array(
                    'id' => 146,
                    'name' => 'Mongolia',
                    'code' => 'MN',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:12',
                    'updated_at' => '2020-04-27 10:29:12',
                    'deleted_at' => NULL,
                ),
            146 =>
                array(
                    'id' => 147,
                    'name' => 'Montserrat',
                    'code' => 'MS',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:13',
                    'updated_at' => '2020-04-27 10:29:13',
                    'deleted_at' => NULL,
                ),
            147 =>
                array(
                    'id' => 148,
                    'name' => 'Morocco',
                    'code' => 'MA',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:13',
                    'updated_at' => '2020-04-27 10:29:13',
                    'deleted_at' => NULL,
                ),
            148 =>
                array(
                    'id' => 149,
                    'name' => 'Mozambique',
                    'code' => 'MZ',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:13',
                    'updated_at' => '2020-04-27 10:29:13',
                    'deleted_at' => NULL,
                ),
            149 =>
                array(
                    'id' => 150,
                    'name' => 'Myanmar',
                    'code' => 'MM',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:13',
                    'updated_at' => '2020-04-27 10:29:13',
                    'deleted_at' => NULL,
                ),
            150 =>
                array(
                    'id' => 151,
                    'name' => 'Namibia',
                    'code' => 'NA',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:13',
                    'updated_at' => '2020-04-27 10:29:13',
                    'deleted_at' => NULL,
                ),
            151 =>
                array(
                    'id' => 152,
                    'name' => 'Nauru',
                    'code' => 'NR',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:13',
                    'updated_at' => '2020-04-27 10:29:13',
                    'deleted_at' => NULL,
                ),
            152 =>
                array(
                    'id' => 153,
                    'name' => 'Nepal',
                    'code' => 'NP',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:13',
                    'updated_at' => '2020-04-27 10:29:13',
                    'deleted_at' => NULL,
                ),
            153 =>
                array(
                    'id' => 154,
                    'name' => 'Netherlands Antilles',
                    'code' => 'AN',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:13',
                    'updated_at' => '2020-04-27 10:29:13',
                    'deleted_at' => NULL,
                ),
            154 =>
                array(
                    'id' => 155,
                    'name' => 'Netherlands The',
                    'code' => 'NL',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:13',
                    'updated_at' => '2020-04-27 10:29:13',
                    'deleted_at' => NULL,
                ),
            155 =>
                array(
                    'id' => 156,
                    'name' => 'New Caledonia',
                    'code' => 'NC',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:13',
                    'updated_at' => '2020-04-27 10:29:13',
                    'deleted_at' => NULL,
                ),
            156 =>
                array(
                    'id' => 157,
                    'name' => 'New Zealand',
                    'code' => 'NZ',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:13',
                    'updated_at' => '2020-04-27 10:29:13',
                    'deleted_at' => NULL,
                ),
            157 =>
                array(
                    'id' => 158,
                    'name' => 'Nicaragua',
                    'code' => 'NI',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:13',
                    'updated_at' => '2020-04-27 10:29:13',
                    'deleted_at' => NULL,
                ),
            158 =>
                array(
                    'id' => 159,
                    'name' => 'Niger',
                    'code' => 'NE',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:13',
                    'updated_at' => '2020-04-27 10:29:13',
                    'deleted_at' => NULL,
                ),
            159 =>
                array(
                    'id' => 160,
                    'name' => 'Nigeria',
                    'code' => 'NG',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:13',
                    'updated_at' => '2020-04-27 10:29:13',
                    'deleted_at' => NULL,
                ),
            160 =>
                array(
                    'id' => 161,
                    'name' => 'Niue',
                    'code' => 'NU',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:13',
                    'updated_at' => '2020-04-27 10:29:13',
                    'deleted_at' => NULL,
                ),
            161 =>
                array(
                    'id' => 162,
                    'name' => 'Norfolk Island',
                    'code' => 'NF',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:13',
                    'updated_at' => '2020-04-27 10:29:13',
                    'deleted_at' => NULL,
                ),
            162 =>
                array(
                    'id' => 163,
                    'name' => 'Northern Mariana Islands',
                    'code' => 'MP',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:13',
                    'updated_at' => '2020-04-27 10:29:13',
                    'deleted_at' => NULL,
                ),
            163 =>
                array(
                    'id' => 164,
                    'name' => 'Norway',
                    'code' => 'NO',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:13',
                    'updated_at' => '2020-04-27 10:29:13',
                    'deleted_at' => NULL,
                ),
            164 =>
                array(
                    'id' => 165,
                    'name' => 'Oman',
                    'code' => 'OM',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:13',
                    'updated_at' => '2020-04-27 10:29:13',
                    'deleted_at' => NULL,
                ),
            165 =>
                array(
                    'id' => 166,
                    'name' => 'Pakistan',
                    'code' => 'PK',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:13',
                    'updated_at' => '2020-04-27 10:29:13',
                    'deleted_at' => NULL,
                ),
            166 =>
                array(
                    'id' => 167,
                    'name' => 'Palau',
                    'code' => 'PW',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:13',
                    'updated_at' => '2020-04-27 10:29:13',
                    'deleted_at' => NULL,
                ),
            167 =>
                array(
                    'id' => 168,
                    'name' => 'Palestinian Territory Occupied',
                    'code' => 'PS',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:13',
                    'updated_at' => '2020-04-27 10:29:13',
                    'deleted_at' => NULL,
                ),
            168 =>
                array(
                    'id' => 169,
                    'name' => 'Panama',
                    'code' => 'PA',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:13',
                    'updated_at' => '2020-04-27 10:29:13',
                    'deleted_at' => NULL,
                ),
            169 =>
                array(
                    'id' => 170,
                    'name' => 'Papua new Guinea',
                    'code' => 'PG',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:14',
                    'updated_at' => '2020-04-27 10:29:14',
                    'deleted_at' => NULL,
                ),
            170 =>
                array(
                    'id' => 171,
                    'name' => 'Paraguay',
                    'code' => 'PY',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:14',
                    'updated_at' => '2020-04-27 10:29:14',
                    'deleted_at' => NULL,
                ),
            171 =>
                array(
                    'id' => 172,
                    'name' => 'Peru',
                    'code' => 'PE',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:14',
                    'updated_at' => '2020-04-27 10:29:14',
                    'deleted_at' => NULL,
                ),
            172 =>
                array(
                    'id' => 173,
                    'name' => 'Philippines',
                    'code' => 'PH',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:14',
                    'updated_at' => '2020-04-27 10:29:14',
                    'deleted_at' => NULL,
                ),
            173 =>
                array(
                    'id' => 174,
                    'name' => 'Pitcairn Island',
                    'code' => 'PN',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:14',
                    'updated_at' => '2020-04-27 10:29:14',
                    'deleted_at' => NULL,
                ),
            174 =>
                array(
                    'id' => 175,
                    'name' => 'Poland',
                    'code' => 'PL',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:14',
                    'updated_at' => '2020-04-27 10:29:14',
                    'deleted_at' => NULL,
                ),
            175 =>
                array(
                    'id' => 176,
                    'name' => 'Portugal',
                    'code' => 'PT',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:14',
                    'updated_at' => '2020-04-27 10:29:14',
                    'deleted_at' => NULL,
                ),
            176 =>
                array(
                    'id' => 177,
                    'name' => 'Puerto Rico',
                    'code' => 'PR',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:14',
                    'updated_at' => '2020-04-27 10:29:14',
                    'deleted_at' => NULL,
                ),
            177 =>
                array(
                    'id' => 178,
                    'name' => 'Qatar',
                    'code' => 'QA',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:14',
                    'updated_at' => '2020-04-27 10:29:14',
                    'deleted_at' => NULL,
                ),
            178 =>
                array(
                    'id' => 179,
                    'name' => 'Reunion',
                    'code' => 'RE',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:14',
                    'updated_at' => '2020-04-27 10:29:14',
                    'deleted_at' => NULL,
                ),
            179 =>
                array(
                    'id' => 180,
                    'name' => 'Romania',
                    'code' => 'RO',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:14',
                    'updated_at' => '2020-04-27 10:29:14',
                    'deleted_at' => NULL,
                ),
            180 =>
                array(
                    'id' => 181,
                    'name' => 'Russia',
                    'code' => 'RU',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:14',
                    'updated_at' => '2020-04-27 10:29:14',
                    'deleted_at' => NULL,
                ),
            181 =>
                array(
                    'id' => 182,
                    'name' => 'Rwanda',
                    'code' => 'RW',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:14',
                    'updated_at' => '2020-04-27 10:29:14',
                    'deleted_at' => NULL,
                ),
            182 =>
                array(
                    'id' => 183,
                    'name' => 'Saint Helena',
                    'code' => 'SH',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:14',
                    'updated_at' => '2020-04-27 10:29:14',
                    'deleted_at' => NULL,
                ),
            183 =>
                array(
                    'id' => 184,
                    'name' => 'Saint Kitts And Nevis',
                    'code' => 'KN',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:14',
                    'updated_at' => '2020-04-27 10:29:14',
                    'deleted_at' => NULL,
                ),
            184 =>
                array(
                    'id' => 185,
                    'name' => 'Saint Lucia',
                    'code' => 'LC',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:14',
                    'updated_at' => '2020-04-27 10:29:14',
                    'deleted_at' => NULL,
                ),
            185 =>
                array(
                    'id' => 186,
                    'name' => 'Saint Pierre and Miquelon',
                    'code' => 'PM',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:14',
                    'updated_at' => '2020-04-27 10:29:14',
                    'deleted_at' => NULL,
                ),
            186 =>
                array(
                    'id' => 187,
                    'name' => 'Saint Vincent And The Grenadines',
                    'code' => 'VC',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:14',
                    'updated_at' => '2020-04-27 10:29:14',
                    'deleted_at' => NULL,
                ),
            187 =>
                array(
                    'id' => 188,
                    'name' => 'Samoa',
                    'code' => 'WS',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:14',
                    'updated_at' => '2020-04-27 10:29:14',
                    'deleted_at' => NULL,
                ),
            188 =>
                array(
                    'id' => 189,
                    'name' => 'San Marino',
                    'code' => 'SM',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:14',
                    'updated_at' => '2020-04-27 10:29:14',
                    'deleted_at' => NULL,
                ),
            189 =>
                array(
                    'id' => 190,
                    'name' => 'Sao Tome and Principe',
                    'code' => 'ST',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:14',
                    'updated_at' => '2020-04-27 10:29:14',
                    'deleted_at' => NULL,
                ),
            190 =>
                array(
                    'id' => 191,
                    'name' => 'Saudi Arabia',
                    'code' => 'SA',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:14',
                    'updated_at' => '2020-04-27 10:29:14',
                    'deleted_at' => NULL,
                ),
            191 =>
                array(
                    'id' => 192,
                    'name' => 'Senegal',
                    'code' => 'SN',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:15',
                    'updated_at' => '2020-04-27 10:29:15',
                    'deleted_at' => NULL,
                ),
            192 =>
                array(
                    'id' => 193,
                    'name' => 'Serbia',
                    'code' => 'RS',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:15',
                    'updated_at' => '2020-04-27 10:29:15',
                    'deleted_at' => NULL,
                ),
            193 =>
                array(
                    'id' => 194,
                    'name' => 'Seychelles',
                    'code' => 'SC',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:15',
                    'updated_at' => '2020-04-27 10:29:15',
                    'deleted_at' => NULL,
                ),
            194 =>
                array(
                    'id' => 195,
                    'name' => 'Sierra Leone',
                    'code' => 'SL',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:15',
                    'updated_at' => '2020-04-27 10:29:15',
                    'deleted_at' => NULL,
                ),
            195 =>
                array(
                    'id' => 196,
                    'name' => 'Singapore',
                    'code' => 'SG',
                    'photo' => '\\public\\assets\\flag\\sg.png',
                    'created_at' => '2020-04-27 10:29:15',
                    'updated_at' => '2020-04-27 10:29:15',
                    'deleted_at' => NULL,
                ),
            196 =>
                array(
                    'id' => 197,
                    'name' => 'Slovakia',
                    'code' => 'SK',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:15',
                    'updated_at' => '2020-04-27 10:29:15',
                    'deleted_at' => NULL,
                ),
            197 =>
                array(
                    'id' => 198,
                    'name' => 'Slovenia',
                    'code' => 'SI',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:15',
                    'updated_at' => '2020-04-27 10:29:15',
                    'deleted_at' => NULL,
                ),
            198 =>
                array(
                    'id' => 199,
                    'name' => 'Smaller Territories of the UK',
                    'code' => 'XG',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:15',
                    'updated_at' => '2020-04-27 10:29:15',
                    'deleted_at' => NULL,
                ),
            199 =>
                array(
                    'id' => 200,
                    'name' => 'Solomon Islands',
                    'code' => 'SB',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:15',
                    'updated_at' => '2020-04-27 10:29:15',
                    'deleted_at' => NULL,
                ),
            200 =>
                array(
                    'id' => 201,
                    'name' => 'Somalia',
                    'code' => 'SO',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:15',
                    'updated_at' => '2020-04-27 10:29:15',
                    'deleted_at' => NULL,
                ),
            201 =>
                array(
                    'id' => 202,
                    'name' => 'South Africa',
                    'code' => 'ZA',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:15',
                    'updated_at' => '2020-04-27 10:29:15',
                    'deleted_at' => NULL,
                ),
            202 =>
                array(
                    'id' => 203,
                    'name' => 'South Georgia',
                    'code' => 'GS',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:15',
                    'updated_at' => '2020-04-27 10:29:15',
                    'deleted_at' => NULL,
                ),
            203 =>
                array(
                    'id' => 204,
                    'name' => 'South Sudan',
                    'code' => 'SS',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:15',
                    'updated_at' => '2020-04-27 10:29:15',
                    'deleted_at' => NULL,
                ),
            204 =>
                array(
                    'id' => 205,
                    'name' => 'Spain',
                    'code' => 'ES',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:15',
                    'updated_at' => '2020-04-27 10:29:15',
                    'deleted_at' => NULL,
                ),
            205 =>
                array(
                    'id' => 206,
                    'name' => 'Sri Lanka',
                    'code' => 'LK',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:15',
                    'updated_at' => '2020-04-27 10:29:15',
                    'deleted_at' => NULL,
                ),
            206 =>
                array(
                    'id' => 207,
                    'name' => 'Sudan',
                    'code' => 'SD',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:15',
                    'updated_at' => '2020-04-27 10:29:15',
                    'deleted_at' => NULL,
                ),
            207 =>
                array(
                    'id' => 208,
                    'name' => 'Suriname',
                    'code' => 'SR',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:15',
                    'updated_at' => '2020-04-27 10:29:15',
                    'deleted_at' => NULL,
                ),
            208 =>
                array(
                    'id' => 209,
                    'name' => 'Svalbard And Jan Mayen Islands',
                    'code' => 'SJ',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:15',
                    'updated_at' => '2020-04-27 10:29:15',
                    'deleted_at' => NULL,
                ),
            209 =>
                array(
                    'id' => 210,
                    'name' => 'Swaziland',
                    'code' => 'SZ',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:15',
                    'updated_at' => '2020-04-27 10:29:15',
                    'deleted_at' => NULL,
                ),
            210 =>
                array(
                    'id' => 211,
                    'name' => 'Sweden',
                    'code' => 'SE',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:15',
                    'updated_at' => '2020-04-27 10:29:15',
                    'deleted_at' => NULL,
                ),
            211 =>
                array(
                    'id' => 212,
                    'name' => 'Switzerland',
                    'code' => 'CH',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:15',
                    'updated_at' => '2020-04-27 10:29:15',
                    'deleted_at' => NULL,
                ),
            212 =>
                array(
                    'id' => 213,
                    'name' => 'Syria',
                    'code' => 'SY',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:15',
                    'updated_at' => '2020-04-27 10:29:15',
                    'deleted_at' => NULL,
                ),
            213 =>
                array(
                    'id' => 214,
                    'name' => 'Taiwan',
                    'code' => 'TW',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:15',
                    'updated_at' => '2020-04-27 10:29:15',
                    'deleted_at' => NULL,
                ),
            214 =>
                array(
                    'id' => 215,
                    'name' => 'Tajikistan',
                    'code' => 'TJ',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:16',
                    'updated_at' => '2020-04-27 10:29:16',
                    'deleted_at' => NULL,
                ),
            215 =>
                array(
                    'id' => 216,
                    'name' => 'Tanzania',
                    'code' => 'TZ',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:16',
                    'updated_at' => '2020-04-27 10:29:16',
                    'deleted_at' => NULL,
                ),
            216 =>
                array(
                    'id' => 217,
                    'name' => 'Thailand',
                    'code' => 'TH',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:16',
                    'updated_at' => '2020-04-27 10:29:16',
                    'deleted_at' => NULL,
                ),
            217 =>
                array(
                    'id' => 218,
                    'name' => 'Togo',
                    'code' => 'TG',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:16',
                    'updated_at' => '2020-04-27 10:29:16',
                    'deleted_at' => NULL,
                ),
            218 =>
                array(
                    'id' => 219,
                    'name' => 'Tokelau',
                    'code' => 'TK',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:16',
                    'updated_at' => '2020-04-27 10:29:16',
                    'deleted_at' => NULL,
                ),
            219 =>
                array(
                    'id' => 220,
                    'name' => 'Tonga',
                    'code' => 'TO',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:16',
                    'updated_at' => '2020-04-27 10:29:16',
                    'deleted_at' => NULL,
                ),
            220 =>
                array(
                    'id' => 221,
                    'name' => 'Trinidad And Tobago',
                    'code' => 'TT',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:16',
                    'updated_at' => '2020-04-27 10:29:16',
                    'deleted_at' => NULL,
                ),
            221 =>
                array(
                    'id' => 222,
                    'name' => 'Tunisia',
                    'code' => 'TN',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:16',
                    'updated_at' => '2020-04-27 10:29:16',
                    'deleted_at' => NULL,
                ),
            222 =>
                array(
                    'id' => 223,
                    'name' => 'Turkey',
                    'code' => 'TR',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:16',
                    'updated_at' => '2020-04-27 10:29:16',
                    'deleted_at' => NULL,
                ),
            223 =>
                array(
                    'id' => 224,
                    'name' => 'Turkmenistan',
                    'code' => 'TM',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:16',
                    'updated_at' => '2020-04-27 10:29:16',
                    'deleted_at' => NULL,
                ),
            224 =>
                array(
                    'id' => 225,
                    'name' => 'Turks And Caicos Islands',
                    'code' => 'TC',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:16',
                    'updated_at' => '2020-04-27 10:29:16',
                    'deleted_at' => NULL,
                ),
            225 =>
                array(
                    'id' => 226,
                    'name' => 'Tuvalu',
                    'code' => 'TV',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:16',
                    'updated_at' => '2020-04-27 10:29:16',
                    'deleted_at' => NULL,
                ),
            226 =>
                array(
                    'id' => 227,
                    'name' => 'Uganda',
                    'code' => 'UG',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:16',
                    'updated_at' => '2020-04-27 10:29:16',
                    'deleted_at' => NULL,
                ),
            227 =>
                array(
                    'id' => 228,
                    'name' => 'Ukraine',
                    'code' => 'UA',
                    'photo' => '\\public\\assets\\flag\\ua.png',
                    'created_at' => '2020-04-27 10:29:16',
                    'updated_at' => '2020-04-27 10:29:16',
                    'deleted_at' => NULL,
                ),
            228 =>
                array(
                    'id' => 229,
                    'name' => 'United Arab Emirates',
                    'code' => 'AE',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:16',
                    'updated_at' => '2020-04-27 10:29:16',
                    'deleted_at' => NULL,
                ),
            229 =>
                array(
                    'id' => 230,
                    'name' => 'United Kingdom',
                    'code' => 'GB',
                    'photo' => '\\public\\assets\\flag\\gb.png',
                    'created_at' => '2020-04-27 10:29:16',
                    'updated_at' => '2020-04-27 10:29:16',
                    'deleted_at' => NULL,
                ),
            230 =>
                array(
                    'id' => 231,
                    'name' => 'United States',
                    'code' => 'US',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:16',
                    'updated_at' => '2020-04-27 10:29:16',
                    'deleted_at' => NULL,
                ),
            231 =>
                array(
                    'id' => 232,
                    'name' => 'United States Minor Outlying Islands',
                    'code' => 'UM',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:16',
                    'updated_at' => '2020-04-27 10:29:16',
                    'deleted_at' => NULL,
                ),
            232 =>
                array(
                    'id' => 233,
                    'name' => 'Uruguay',
                    'code' => 'UY',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:16',
                    'updated_at' => '2020-04-27 10:29:16',
                    'deleted_at' => NULL,
                ),
            233 =>
                array(
                    'id' => 234,
                    'name' => 'Uzbekistan',
                    'code' => 'UZ',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:16',
                    'updated_at' => '2020-04-27 10:29:16',
                    'deleted_at' => NULL,
                ),
            234 =>
                array(
                    'id' => 235,
                    'name' => 'Vanuatu',
                    'code' => 'VU',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:16',
                    'updated_at' => '2020-04-27 10:29:16',
                    'deleted_at' => NULL,
                ),
            235 =>
                array(
                    'id' => 236,
                    'name' => 'Vatican City State (Holy See)',
                    'code' => 'VA',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:16',
                    'updated_at' => '2020-04-27 10:29:16',
                    'deleted_at' => NULL,
                ),
            236 =>
                array(
                    'id' => 237,
                    'name' => 'Venezuela',
                    'code' => 'VE',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:16',
                    'updated_at' => '2020-04-27 10:29:16',
                    'deleted_at' => NULL,
                ),
            237 =>
                array(
                    'id' => 238,
                    'name' => 'Vietnam',
                    'code' => 'VN',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:17',
                    'updated_at' => '2020-04-27 10:29:17',
                    'deleted_at' => NULL,
                ),
            238 =>
                array(
                    'id' => 239,
                    'name' => 'Virgin Islands (British)',
                    'code' => 'VG',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:17',
                    'updated_at' => '2020-04-27 10:29:17',
                    'deleted_at' => NULL,
                ),
            239 =>
                array(
                    'id' => 240,
                    'name' => 'Virgin Islands (US)',
                    'code' => 'VI',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:17',
                    'updated_at' => '2020-04-27 10:29:17',
                    'deleted_at' => NULL,
                ),
            240 =>
                array(
                    'id' => 241,
                    'name' => 'Wallis And Futuna Islands',
                    'code' => 'WF',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:17',
                    'updated_at' => '2020-04-27 10:29:17',
                    'deleted_at' => NULL,
                ),
            241 =>
                array(
                    'id' => 242,
                    'name' => 'Western Sahara',
                    'code' => 'EH',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:17',
                    'updated_at' => '2020-04-27 10:29:17',
                    'deleted_at' => NULL,
                ),
            242 =>
                array(
                    'id' => 243,
                    'name' => 'Yemen',
                    'code' => 'YE',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:17',
                    'updated_at' => '2020-04-27 10:29:17',
                    'deleted_at' => NULL,
                ),
            243 =>
                array(
                    'id' => 244,
                    'name' => 'Yugoslavia',
                    'code' => 'YU',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:17',
                    'updated_at' => '2020-04-27 10:29:17',
                    'deleted_at' => NULL,
                ),
            244 =>
                array(
                    'id' => 245,
                    'name' => 'Zambia',
                    'code' => 'ZM',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:17',
                    'updated_at' => '2020-04-27 10:29:17',
                    'deleted_at' => NULL,
                ),
            245 =>
                array(
                    'id' => 246,
                    'name' => 'Zimbabwe',
                    'code' => 'ZW',
                    'photo' => NULL,
                    'created_at' => '2020-04-27 10:29:17',
                    'updated_at' => '2020-04-27 10:29:17',
                    'deleted_at' => NULL,
                ),
        ));

        DB::table('countries')->where('id', 13)->update([
            'timezone' => 'GMT+11'
        ]);
        DB::table('countries')->where('id', 231)->update([
            'timezone' => 'GMT+5'
        ]);
    }
}
