<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'provider_id' => NULL,
                    'user_type' => 'admin',
                    'name' => 'EduExHub Admin',
                    'user_name' => NULL,
                    'email' => 'admin@eduexhub.com',
                    'email_verified_at' => '2023-04-04 18:25:28',
                    'password' => '$2a$05$AIKelCOrMLLGIR9if5NzWeXFEEtHvFGTmChnss2UScxBVFPEVL9ha',
                    'remember_token' => NULL,
                    'photo' => NULL,
                    'cover_photo' => NULL,
                    'verification_code' => NULL,
                    'banned' => 0,
                    'created_at' => NULL,
                    'updated_at' => '2023-04-04 18:25:28',
                    'deleted_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 2,
                    'provider_id' => NULL,
                    'user_type' => 'admin',
                    'name' => 'Raihanul Islam',
                    'user_name' => NULL,
                    'email' => 'raihan@gmail.com',
                    'email_verified_at' => NULL,
                    'password' => '$2y$10$2FCphPeA0TuChuEzQ1R83uK3S/OaLUMvyg/w2Jp4zcAQTdxEQO/wK',
                    'remember_token' => NULL,
                    'photo' => NULL,
                    'cover_photo' => NULL,
                    'verification_code' => NULL,
                    'banned' => 0,
                    'created_at' => '2023-04-05 07:52:43',
                    'updated_at' => '2023-08-08 15:16:47',
                    'deleted_at' => NULL,
                ),
            2 =>
                array(
                    'id' => 3,
                    'provider_id' => NULL,
                    'user_type' => 'staff',
                    'name' => 'Md Masum Rana',
                    'user_name' => NULL,
                    'email' => 'masummx3@gmail.com',
                    'email_verified_at' => NULL,
                    'password' => '$2y$10$E2VbQuKW5cua21DfgdUKYuWTP/ULjpJAiw8GK9Qb0UP9ItixBshyK',
                    'remember_token' => NULL,
                    'photo' => NULL,
                    'cover_photo' => NULL,
                    'verification_code' => NULL,
                    'banned' => 0,
                    'created_at' => '2023-04-05 07:54:28',
                    'updated_at' => '2023-08-08 14:41:43',
                    'deleted_at' => NULL,
                ),
            3 =>
                array(
                    'id' => 4,
                    'provider_id' => NULL,
                    'user_type' => 'freelancer',
                    'name' => 'Mohammad Raihanul Islam',
                    'user_name' => 'mr-consultant20230405-091010',
                    'email' => 'consultant@gmail.com',
                    'email_verified_at' => '2023-04-05 09:04:10',
                    'password' => '$2y$10$8oT15ZF3ZT/wUjX3eHjyjevq4PT6blBITeqMYZyshsU.6dzOgZBCq',
                    'remember_token' => NULL,
                    'photo' => '186',
                    'cover_photo' => NULL,
                    'verification_code' => NULL,
                    'banned' => 0,
                    'created_at' => '2023-04-05 09:10:10',
                    'updated_at' => '2023-09-03 13:33:48',
                    'deleted_at' => NULL,
                ),
            4 =>
                array(
                    'id' => 5,
                    'provider_id' => NULL,
                    'user_type' => 'client',
                    'name' => 'Mr. Client',
                    'user_name' => 'mr-client20230405-091120',
                    'email' => 'client@gmail.com',
                    'email_verified_at' => '2023-04-05 09:04:20',
                    'password' => '$2y$10$ipfR7Ni5PHd8bSNuP066wuKP110B4TvxXW2ZUtSrwzC2E52dF4VJq',
                    'remember_token' => NULL,
                    'photo' => NULL,
                    'cover_photo' => NULL,
                    'verification_code' => NULL,
                    'banned' => 0,
                    'created_at' => '2023-04-05 09:11:20',
                    'updated_at' => '2023-04-05 09:11:20',
                    'deleted_at' => NULL,
                ),
            5 =>
                array(
                    'id' => 6,
                    'provider_id' => NULL,
                    'user_type' => 'freelancer',
                    'name' => 'MD Masum Rana',
                    'user_name' => 'md-masum-rana20230406-010905',
                    'email' => 'masum@gmail.com',
                    'email_verified_at' => '2023-04-06 13:04:05',
                    'password' => '$2y$10$Ds7gZpVNF71ornoz6Sm/p.zcL5T6y8AkY8ypBwD1cxH9NeJ.9yZaa',
                    'remember_token' => NULL,
                    'photo' => '181',
                    'cover_photo' => NULL,
                    'verification_code' => NULL,
                    'banned' => 0,
                    'created_at' => '2023-04-06 13:09:05',
                    'updated_at' => '2023-07-30 12:41:59',
                    'deleted_at' => NULL,
                ),
            6 =>
                array(
                    'id' => 7,
                    'provider_id' => NULL,
                    'user_type' => 'client',
                    'name' => 'MD SUJON ALI',
                    'user_name' => 'md-sujon-ali20230406-020819',
                    'email' => 'sujon@gamil.com',
                    'email_verified_at' => '2023-04-06 14:04:19',
                    'password' => '$2y$10$AZ.Vl/pkgfD1A2ChP4Tx4eL51RgAV5d9.B4z./GOGHzJXPmHGj3nW',
                    'remember_token' => NULL,
                    'photo' => NULL,
                    'cover_photo' => NULL,
                    'verification_code' => NULL,
                    'banned' => 0,
                    'created_at' => '2023-04-06 14:08:19',
                    'updated_at' => '2023-04-06 14:08:19',
                    'deleted_at' => NULL,
                ),
            7 =>
                array(
                    'id' => 8,
                    'provider_id' => NULL,
                    'user_type' => 'freelancer',
                    'name' => 'Mohammad Raihanul Islam',
                    'user_name' => 'mohammad-raihanul-islam20230406-054915',
                    'email' => 'raihanul@gmail.com',
                    'email_verified_at' => '2023-04-06 17:04:15',
                    'password' => '$2y$10$r50Ba3y./ixCkCcia/.j7eJSA8OU613u61CGwoBhWjrbkpyS2qIhC',
                    'remember_token' => NULL,
                    'photo' => '119',
                    'cover_photo' => NULL,
                    'verification_code' => NULL,
                    'banned' => 0,
                    'created_at' => '2023-04-06 17:49:15',
                    'updated_at' => '2023-06-07 05:11:07',
                    'deleted_at' => NULL,
                ),
            8 =>
                array(
                    'id' => 9,
                    'provider_id' => NULL,
                    'user_type' => 'client',
                    'name' => 'Raihan bd',
                    'user_name' => 'raihan-bd20230406-055042',
                    'email' => 'raihanulbd@gmail.com',
                    'email_verified_at' => '2023-04-06 17:04:42',
                    'password' => '$2y$10$fMt62dfTsXzAovVbWILlqOpFAOvo1cURM.Ev7Xd7O7ZtvxriEHatq',
                    'remember_token' => NULL,
                    'photo' => NULL,
                    'cover_photo' => NULL,
                    'verification_code' => NULL,
                    'banned' => 0,
                    'created_at' => '2023-04-06 17:50:42',
                    'updated_at' => '2023-04-06 17:50:42',
                    'deleted_at' => NULL,
                ),
            9 =>
                array(
                    'id' => 10,
                    'provider_id' => NULL,
                    'user_type' => 'freelancer',
                    'name' => 'M',
                    'user_name' => 'm20230406-065603',
                    'email' => 'reazwsu@gmaail.com',
                    'email_verified_at' => '2023-04-06 18:04:03',
                    'password' => '$2y$10$MX.WIJUu9IussLsNlv5xE.qObYXhl2iegZDVlhwBbhrdWzAr8VhwG',
                    'remember_token' => NULL,
                    'photo' => NULL,
                    'cover_photo' => NULL,
                    'verification_code' => NULL,
                    'banned' => 0,
                    'created_at' => '2023-04-06 18:56:03',
                    'updated_at' => '2023-04-06 18:56:03',
                    'deleted_at' => NULL,
                ),
            10 =>
                array(
                    'id' => 11,
                    'provider_id' => NULL,
                    'user_type' => 'freelancer',
                    'name' => 'Reaz',
                    'user_name' => 'reazwsu',
                    'email' => 'reazwsu@gmail.com',
                    'email_verified_at' => '2023-04-07 09:04:24',
                    'password' => '$2y$10$T9Z9DoU3XtOdbb/smHSFbOcvRvwniLtxXPN7PDxnfW2LonG3KqBY6',
                    'remember_token' => NULL,
                    'photo' => NULL,
                    'cover_photo' => NULL,
                    'verification_code' => NULL,
                    'banned' => 0,
                    'created_at' => '2023-04-07 09:14:24',
                    'updated_at' => '2023-04-07 09:23:45',
                    'deleted_at' => NULL,
                ),
            11 =>
                array(
                    'id' => 12,
                    'provider_id' => NULL,
                    'user_type' => 'freelancer',
                    'name' => 'Mohammad Raihanul Islam',
                    'user_name' => 'islam20230413-061427',
                    'email' => 'islam@gmail.com',
                    'email_verified_at' => '2023-04-13 18:04:27',
                    'password' => '$2y$10$.2Y4fkyIReY8sPZQqfrufePo9Pxcay8k64w5rdWYnJHdRIX5Plzt6',
                    'remember_token' => NULL,
                    'photo' => '122',
                    'cover_photo' => NULL,
                    'verification_code' => NULL,
                    'banned' => 0,
                    'created_at' => '2023-04-13 18:14:27',
                    'updated_at' => '2023-09-20 16:19:22',
                    'deleted_at' => NULL,
                ),
            12 =>
                array(
                    'id' => 13,
                    'provider_id' => NULL,
                    'user_type' => 'freelancer',
                    'name' => 'masum1',
                    'user_name' => 'masum120230414-112549',
                    'email' => 'masum1@gmail.com',
                    'email_verified_at' => '2023-04-14 11:04:49',
                    'password' => '$2y$10$wgI8AOYWkoMzwjUMS.ZC.ee6ZzOrJhLoP3JO2OT9V8GQ1W2/Yifvy',
                    'remember_token' => NULL,
                    'photo' => '118',
                    'cover_photo' => NULL,
                    'verification_code' => NULL,
                    'banned' => 0,
                    'created_at' => '2023-04-14 11:25:49',
                    'updated_at' => '2023-06-07 05:03:17',
                    'deleted_at' => NULL,
                ),
            13 =>
                array(
                    'id' => 14,
                    'provider_id' => NULL,
                    'user_type' => 'freelancer',
                    'name' => 'Hanan Ashrabi',
                    'user_name' => 'hanan20230414-115559',
                    'email' => 'hanan@gmail.com',
                    'email_verified_at' => '2023-04-14 11:04:59',
                    'password' => '$2y$10$OOwqM9xJGabEve2bPYMIfusg.I1E1ug3DZgGzIBvezG001jOzJ5WC',
                    'remember_token' => NULL,
                    'photo' => '60',
                    'cover_photo' => NULL,
                    'verification_code' => NULL,
                    'banned' => 0,
                    'created_at' => '2023-04-14 11:55:59',
                    'updated_at' => '2023-04-14 12:45:38',
                    'deleted_at' => NULL,
                ),
            14 =>
                array(
                    'id' => 15,
                    'provider_id' => NULL,
                    'user_type' => 'client',
                    'name' => 'test',
                    'user_name' => 'test20230414-010021',
                    'email' => 'test@gmail.com',
                    'email_verified_at' => '2023-04-14 13:04:21',
                    'password' => '$2y$10$K1PtA.Yzui5k7nwXJCiCXeKaxMNDyW9d2mNYLrvgHdz0D3QwKTume',
                    'remember_token' => NULL,
                    'photo' => '213',
                    'cover_photo' => NULL,
                    'verification_code' => NULL,
                    'banned' => 0,
                    'created_at' => '2023-04-14 13:00:21',
                    'updated_at' => '2023-09-20 16:06:38',
                    'deleted_at' => NULL,
                ),
            15 =>
                array(
                    'id' => 16,
                    'provider_id' => NULL,
                    'user_type' => 'freelancer',
                    'name' => 'MD RAJU AHMED',
                    'user_name' => 'md-raju-ahmed20230415-121520',
                    'email' => 'raju@gmail.com',
                    'email_verified_at' => '2023-04-15 12:04:20',
                    'password' => '$2y$10$J.oOMuPR.GTGHPAgxvfa1eqObxBaUbbwPsXjLitw0m3spgbkn.jc6',
                    'remember_token' => NULL,
                    'photo' => '123',
                    'cover_photo' => NULL,
                    'verification_code' => NULL,
                    'banned' => 0,
                    'created_at' => '2023-04-15 12:15:20',
                    'updated_at' => '2023-06-07 05:39:38',
                    'deleted_at' => NULL,
                ),
            16 =>
                array(
                    'id' => 17,
                    'provider_id' => NULL,
                    'user_type' => 'freelancer',
                    'name' => 'Karim Jannat',
                    'user_name' => 'karim-jannat20230415-020635',
                    'email' => 'karim@gmail.com',
                    'email_verified_at' => '2023-04-15 14:04:35',
                    'password' => '$2y$10$E3Y9z7nEsoI5N1w3z4RPQO1spZxDjy3FBeVT4WQyOVORIWFk00bc2',
                    'remember_token' => NULL,
                    'photo' => '76',
                    'cover_photo' => '77',
                    'verification_code' => NULL,
                    'banned' => 0,
                    'created_at' => '2023-04-15 14:06:35',
                    'updated_at' => '2023-04-15 17:57:06',
                    'deleted_at' => NULL,
                ),
            17 =>
                array(
                    'id' => 18,
                    'provider_id' => NULL,
                    'user_type' => 'client',
                    'name' => 'Ahmed jubayer',
                    'user_name' => 'ahmed-jubayer20230415-051419',
                    'email' => 'ahmed@gmail.com',
                    'email_verified_at' => '2023-04-15 17:04:19',
                    'password' => '$2y$10$3BOWhg04dbGInj.TFRQldO.OzspM9g.jhi9klm/LLLthKVZSFvIWC',
                    'remember_token' => NULL,
                    'photo' => NULL,
                    'cover_photo' => NULL,
                    'verification_code' => NULL,
                    'banned' => 0,
                    'created_at' => '2023-04-15 17:14:19',
                    'updated_at' => '2023-04-15 17:14:19',
                    'deleted_at' => NULL,
                ),
            18 =>
                array(
                    'id' => 19,
                    'provider_id' => NULL,
                    'user_type' => 'freelancer',
                    'name' => 'MahinIslam',
                    'user_name' => 'mahin-islam20230415-053740',
                    'email' => 'Mahin@gmail.com',
                    'email_verified_at' => '2023-04-15 17:04:40',
                    'password' => '$2y$10$zuw0RUa5HxHdXFqAZF5WrOzHxy.P3tNAP0tZxhyCURw7lfWPmp9rO',
                    'remember_token' => NULL,
                    'photo' => '75',
                    'cover_photo' => NULL,
                    'verification_code' => NULL,
                    'banned' => 0,
                    'created_at' => '2023-04-15 17:37:40',
                    'updated_at' => '2023-04-15 17:46:52',
                    'deleted_at' => NULL,
                ),
            19 =>
                array(
                    'id' => 20,
                    'provider_id' => NULL,
                    'user_type' => 'freelancer',
                    'name' => 'Rahman',
                    'user_name' => 'rahman20230511-114344',
                    'email' => 'rahman@gmail.com',
                    'email_verified_at' => '2023-05-11 23:05:44',
                    'password' => '$2y$10$b41DBW.hNljH8YScBI8H8e7SIslKmQNMzwU1ZelVymp.6NNCSgBv2',
                    'remember_token' => NULL,
                    'photo' => '117',
                    'cover_photo' => NULL,
                    'verification_code' => NULL,
                    'banned' => 0,
                    'created_at' => '2023-05-11 23:43:44',
                    'updated_at' => '2023-06-07 04:45:41',
                    'deleted_at' => NULL,
                ),
            20 =>
                array(
                    'id' => 21,
                    'provider_id' => NULL,
                    'user_type' => 'freelancer',
                    'name' => 'masum1',
                    'user_name' => 'masum120230521-065752',
                    'email' => 'mms@gmail.com',
                    'email_verified_at' => '2023-05-21 18:05:52',
                    'password' => '$2y$10$.Z6RlzMg6wREbVec7b2E4uY8SrYEFW85Tts1UYNrGZ2HrXCmiAI9q',
                    'remember_token' => NULL,
                    'photo' => '124',
                    'cover_photo' => NULL,
                    'verification_code' => NULL,
                    'banned' => 0,
                    'created_at' => '2023-05-21 18:57:52',
                    'updated_at' => '2023-06-07 05:44:24',
                    'deleted_at' => NULL,
                ),
            21 =>
                array(
                    'id' => 22,
                    'provider_id' => NULL,
                    'user_type' => 'freelancer',
                    'name' => 'Mr. Brown',
                    'user_name' => 'mr-brown20230605-090658',
                    'email' => 'Brown@gmail.com',
                    'email_verified_at' => '2023-06-05 09:06:58',
                    'password' => '$2y$10$jmZa4tJLfNyBmov5SN11veOFkvHAvEXIN9xCJfUHnDubLFGhGq.2q',
                    'remember_token' => 'L9QtHYpQ6Gi84Cg4yuM5GVPg4pbYeHUjCjo4x027QCdps3htEZ0r7uz9t7dh',
                    'photo' => '121',
                    'cover_photo' => NULL,
                    'verification_code' => NULL,
                    'banned' => 0,
                    'created_at' => '2023-06-05 09:06:58',
                    'updated_at' => '2023-06-07 05:29:53',
                    'deleted_at' => NULL,
                ),
            22 =>
                array(
                    'id' => 23,
                    'provider_id' => NULL,
                    'user_type' => 'client',
                    'name' => 'alpha victor',
                    'user_name' => 'alpha-victor20230607-034436',
                    'email' => 'alpha@gmail.com',
                    'email_verified_at' => '2023-06-07 03:06:37',
                    'password' => '$2y$10$cy.tk6OMpoLFG.AiG0zrFufSwI/1XKQGiJqXo.Ikix6MWlhdeRHpm',
                    'remember_token' => NULL,
                    'photo' => NULL,
                    'cover_photo' => NULL,
                    'verification_code' => NULL,
                    'banned' => 0,
                    'created_at' => '2023-06-07 03:44:37',
                    'updated_at' => '2023-06-07 03:44:37',
                    'deleted_at' => NULL,
                ),
        ));
    }
}
