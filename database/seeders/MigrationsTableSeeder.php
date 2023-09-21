<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('migrations')->delete();

        DB::table('migrations')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'migration' => '2014_10_12_000000_create_users_table',
                    'batch' => 1,
                ),
            1 =>
                array(
                    'id' => 2,
                    'migration' => '2014_10_12_100000_create_password_resets_table',
                    'batch' => 1,
                ),
            2 =>
                array(
                    'id' => 3,
                    'migration' => '2019_12_01_050510_create_packages_table',
                    'batch' => 1,
                ),
            3 =>
                array(
                    'id' => 4,
                    'migration' => '2019_12_01_062458_create_currencies_table',
                    'batch' => 1,
                ),
            4 =>
                array(
                    'id' => 5,
                    'migration' => '2019_12_01_062704_create_countries_table',
                    'batch' => 1,
                ),
            5 =>
                array(
                    'id' => 6,
                    'migration' => '2019_12_01_062901_create_project_categories_table',
                    'batch' => 1,
                ),
            6 =>
                array(
                    'id' => 7,
                    'migration' => '2019_12_01_063402_create_support_categories_table',
                    'batch' => 1,
                ),
            7 =>
                array(
                    'id' => 8,
                    'migration' => '2019_12_01_063545_create_support_tickets_table',
                    'batch' => 1,
                ),
            8 =>
                array(
                    'id' => 9,
                    'migration' => '2019_12_01_064315_create_support_ticket_replies_table',
                    'batch' => 1,
                ),
            9 =>
                array(
                    'id' => 10,
                    'migration' => '2019_12_01_065123_create_addresses_table',
                    'batch' => 1,
                ),
            10 =>
                array(
                    'id' => 11,
                    'migration' => '2019_12_01_072257_create_badges_table',
                    'batch' => 1,
                ),
            11 =>
                array(
                    'id' => 12,
                    'migration' => '2019_12_01_073924_create_roles_table',
                    'batch' => 1,
                ),
            12 =>
                array(
                    'id' => 13,
                    'migration' => '2019_12_01_074110_create_user_roles_table',
                    'batch' => 1,
                ),
            13 =>
                array(
                    'id' => 14,
                    'migration' => '2019_12_01_074504_create_user_badges_table',
                    'batch' => 1,
                ),
            14 =>
                array(
                    'id' => 15,
                    'migration' => '2019_12_01_081110_create_verifications_table',
                    'batch' => 1,
                ),
            15 =>
                array(
                    'id' => 16,
                    'migration' => '2019_12_01_081900_create_work_experiences_table',
                    'batch' => 1,
                ),
            16 =>
                array(
                    'id' => 17,
                    'migration' => '2019_12_01_084801_create_projects_table',
                    'batch' => 1,
                ),
            17 =>
                array(
                    'id' => 18,
                    'migration' => '2019_12_01_084842_create_reviews_table',
                    'batch' => 1,
                ),
            18 =>
                array(
                    'id' => 19,
                    'migration' => '2019_12_01_095214_create_project_milestones_table',
                    'batch' => 1,
                ),
            19 =>
                array(
                    'id' => 20,
                    'migration' => '2019_12_01_100119_create_documents_table',
                    'batch' => 1,
                ),
            20 =>
                array(
                    'id' => 21,
                    'migration' => '2019_12_01_100532_create_project_users_table',
                    'batch' => 1,
                ),
            21 =>
                array(
                    'id' => 22,
                    'migration' => '2019_12_01_101035_create_skills_table',
                    'batch' => 1,
                ),
            22 =>
                array(
                    'id' => 23,
                    'migration' => '2019_12_01_101336_create_chat_threads_table',
                    'batch' => 1,
                ),
            23 =>
                array(
                    'id' => 24,
                    'migration' => '2019_12_01_101717_create_chats_table',
                    'batch' => 1,
                ),
            24 =>
                array(
                    'id' => 25,
                    'migration' => '2019_12_01_101959_create_project_bids_table',
                    'batch' => 1,
                ),
            25 =>
                array(
                    'id' => 26,
                    'migration' => '2019_12_01_102425_create_user_profiles_table',
                    'batch' => 1,
                ),
            26 =>
                array(
                    'id' => 27,
                    'migration' => '2019_12_01_102908_create_portfolios_table',
                    'batch' => 1,
                ),
            27 =>
                array(
                    'id' => 28,
                    'migration' => '2019_12_01_103329_create_transactions_table',
                    'batch' => 1,
                ),
            28 =>
                array(
                    'id' => 29,
                    'migration' => '2023_08_21_000151_create_seminar_modes_table',
                    'batch' => 2,
                ),
            29 =>
                array(
                    'id' => 30,
                    'migration' => '2023_08_21_143831_create_seminar_software_table',
                    'batch' => 3,
                ),
            30 =>
                array(
                    'id' => 31,
                    'migration' => '2023_08_22_234415_create_languages_table',
                    'batch' => 4,
                ),
            31 =>
                array(
                    'id' => 35,
                    'migration' => '2023_08_23_161255_create_seminar_dates_table',
                    'batch' => 6,
                ),
            32 =>
                array(
                    'id' => 37,
                    'migration' => '2023_08_22_020801_create_seminars_table',
                    'batch' => 7,
                ),
            33 =>
                array(
                    'id' => 38,
                    'migration' => '2023_08_30_025146_add_zoom_link_to_seminars_table',
                    'batch' => 8,
                ),
            34 =>
                array(
                    'id' => 39,
                    'migration' => '2023_09_03_175030_add_hourly_rate_to_projects_table',
                    'batch' => 9,
                ),
            35 =>
                array(
                    'id' => 40,
                    'migration' => '2023_08_30_121230_create_seminar_instructors_table',
                    'batch' => 10,
                ),
            36 =>
                array(
                    'id' => 41,
                    'migration' => '2023_09_04_144553_add_attachment_to_seminars_table',
                    'batch' => 11,
                ),
            37 =>
                array(
                    'id' => 42,
                    'migration' => '2023_09_03_135124_add_project_category_id_to_seminars_table',
                    'batch' => 12,
                ),
            38 =>
                array(
                    'id' => 43,
                    'migration' => '2023_09_14_143118_create_consultant_categories_table',
                    'batch' => 13,
                ),
            39 =>
                array(
                    'id' => 44,
                    'migration' => '2019_12_14_000001_create_personal_access_tokens_table',
                    'batch' => 14,
                ),
            40 =>
                array(
                    'id' => 45,
                    'migration' => '2023_09_18_195259_create_site_pages_table',
                    'batch' => 15,
                ),
            41 =>
                array(
                    'id' => 46,
                    'migration' => '2023_09_20_004617_page_optimizations',
                    'batch' => 15,
                ),
            42 =>
                array(
                    'id' => 47,
                    'migration' => '2023_09_21_133017_create_addons_table',
                    'batch' => 0,
                ),
            43 =>
                array(
                    'id' => 48,
                    'migration' => '2023_09_21_133017_create_addresses_table',
                    'batch' => 0,
                ),
            44 =>
                array(
                    'id' => 49,
                    'migration' => '2023_09_21_133017_create_badges_table',
                    'batch' => 0,
                ),
            45 =>
                array(
                    'id' => 50,
                    'migration' => '2023_09_21_133017_create_blog_categories_table',
                    'batch' => 0,
                ),
            46 =>
                array(
                    'id' => 51,
                    'migration' => '2023_09_21_133017_create_blogs_table',
                    'batch' => 0,
                ),
            47 =>
                array(
                    'id' => 52,
                    'migration' => '2023_09_21_133017_create_bookmarked_clients_table',
                    'batch' => 0,
                ),
            48 =>
                array(
                    'id' => 53,
                    'migration' => '2023_09_21_133017_create_bookmarked_freelancers_table',
                    'batch' => 0,
                ),
            49 =>
                array(
                    'id' => 54,
                    'migration' => '2023_09_21_133017_create_bookmarked_projects_table',
                    'batch' => 0,
                ),
            50 =>
                array(
                    'id' => 55,
                    'migration' => '2023_09_21_133017_create_bookmarked_scholarships_table',
                    'batch' => 0,
                ),
            51 =>
                array(
                    'id' => 56,
                    'migration' => '2023_09_21_133017_create_bookmarked_services_table',
                    'batch' => 0,
                ),
            52 =>
                array(
                    'id' => 57,
                    'migration' => '2023_09_21_133017_create_cancel_projects_table',
                    'batch' => 0,
                ),
            53 =>
                array(
                    'id' => 58,
                    'migration' => '2023_09_21_133017_create_chat_threads_table',
                    'batch' => 0,
                ),
            54 =>
                array(
                    'id' => 59,
                    'migration' => '2023_09_21_133017_create_chats_table',
                    'batch' => 0,
                ),
            55 =>
                array(
                    'id' => 60,
                    'migration' => '2023_09_21_133017_create_cities_table',
                    'batch' => 0,
                ),
            56 =>
                array(
                    'id' => 61,
                    'migration' => '2023_09_21_133017_create_consultant_categories_table',
                    'batch' => 0,
                ),
            57 =>
                array(
                    'id' => 62,
                    'migration' => '2023_09_21_133017_create_countries_table',
                    'batch' => 0,
                ),
            58 =>
                array(
                    'id' => 63,
                    'migration' => '2023_09_21_133017_create_countries_old_table',
                    'batch' => 0,
                ),
            59 =>
                array(
                    'id' => 64,
                    'migration' => '2023_09_21_133017_create_currencies_table',
                    'batch' => 0,
                ),
            60 =>
                array(
                    'id' => 65,
                    'migration' => '2023_09_21_133017_create_documents_table',
                    'batch' => 0,
                ),
            61 =>
                array(
                    'id' => 66,
                    'migration' => '2023_09_21_133017_create_education_details_table',
                    'batch' => 0,
                ),
            62 =>
                array(
                    'id' => 67,
                    'migration' => '2023_09_21_133017_create_freelancer_accounts_table',
                    'batch' => 0,
                ),
            63 =>
                array(
                    'id' => 68,
                    'migration' => '2023_09_21_133017_create_freelancer_services_table',
                    'batch' => 0,
                ),
            64 =>
                array(
                    'id' => 69,
                    'migration' => '2023_09_21_133017_create_freelancer_services_packages_table',
                    'batch' => 0,
                ),
            65 =>
                array(
                    'id' => 70,
                    'migration' => '2023_09_21_133017_create_hire_invitations_table',
                    'batch' => 0,
                ),
            66 =>
                array(
                    'id' => 71,
                    'migration' => '2023_09_21_133017_create_languages_table',
                    'batch' => 0,
                ),
            67 =>
                array(
                    'id' => 72,
                    'migration' => '2023_09_21_133017_create_milestone_payments_table',
                    'batch' => 0,
                ),
            68 =>
                array(
                    'id' => 73,
                    'migration' => '2023_09_21_133017_create_model_has_permissions_table',
                    'batch' => 0,
                ),
            69 =>
                array(
                    'id' => 74,
                    'migration' => '2023_09_21_133017_create_model_has_roles_table',
                    'batch' => 0,
                ),
            70 =>
                array(
                    'id' => 75,
                    'migration' => '2023_09_21_133017_create_notifications_table',
                    'batch' => 0,
                ),
            71 =>
                array(
                    'id' => 76,
                    'migration' => '2023_09_21_133017_create_package_payments_table',
                    'batch' => 0,
                ),
            72 =>
                array(
                    'id' => 77,
                    'migration' => '2023_09_21_133017_create_packages_table',
                    'batch' => 0,
                ),
            73 =>
                array(
                    'id' => 78,
                    'migration' => '2023_09_21_133017_create_page_optimizations_table',
                    'batch' => 0,
                ),
            74 =>
                array(
                    'id' => 79,
                    'migration' => '2023_09_21_133017_create_pages_table',
                    'batch' => 0,
                ),
            75 =>
                array(
                    'id' => 80,
                    'migration' => '2023_09_21_133017_create_parent_skills_table',
                    'batch' => 0,
                ),
            76 =>
                array(
                    'id' => 81,
                    'migration' => '2023_09_21_133017_create_password_resets_table',
                    'batch' => 0,
                ),
            77 =>
                array(
                    'id' => 82,
                    'migration' => '2023_09_21_133017_create_pay_to_freelancers_table',
                    'batch' => 0,
                ),
            78 =>
                array(
                    'id' => 83,
                    'migration' => '2023_09_21_133017_create_permissions_table',
                    'batch' => 0,
                ),
            79 =>
                array(
                    'id' => 84,
                    'migration' => '2023_09_21_133017_create_personal_access_tokens_table',
                    'batch' => 0,
                ),
            80 =>
                array(
                    'id' => 85,
                    'migration' => '2023_09_21_133017_create_portfolios_table',
                    'batch' => 0,
                ),
            81 =>
                array(
                    'id' => 86,
                    'migration' => '2023_09_21_133017_create_project_bids_table',
                    'batch' => 0,
                ),
            82 =>
                array(
                    'id' => 87,
                    'migration' => '2023_09_21_133017_create_project_categories_table',
                    'batch' => 0,
                ),
            83 =>
                array(
                    'id' => 88,
                    'migration' => '2023_09_21_133017_create_project_users_table',
                    'batch' => 0,
                ),
            84 =>
                array(
                    'id' => 89,
                    'migration' => '2023_09_21_133017_create_projects_table',
                    'batch' => 0,
                ),
            85 =>
                array(
                    'id' => 90,
                    'migration' => '2023_09_21_133017_create_reviews_table',
                    'batch' => 0,
                ),
            86 =>
                array(
                    'id' => 91,
                    'migration' => '2023_09_21_133017_create_role_has_permissions_table',
                    'batch' => 0,
                ),
            87 =>
                array(
                    'id' => 92,
                    'migration' => '2023_09_21_133017_create_roles_table',
                    'batch' => 0,
                ),
            88 =>
                array(
                    'id' => 93,
                    'migration' => '2023_09_21_133017_create_scholarship_categories_table',
                    'batch' => 0,
                ),
            89 =>
                array(
                    'id' => 94,
                    'migration' => '2023_09_21_133017_create_scholarship_cities_table',
                    'batch' => 0,
                ),
            90 =>
                array(
                    'id' => 95,
                    'migration' => '2023_09_21_133017_create_scholarship_countries_table',
                    'batch' => 0,
                ),
            91 =>
                array(
                    'id' => 96,
                    'migration' => '2023_09_21_133017_create_scholarship_field_studies_table',
                    'batch' => 0,
                ),
            92 =>
                array(
                    'id' => 97,
                    'migration' => '2023_09_21_133017_create_scholarship_levels_table',
                    'batch' => 0,
                ),
            93 =>
                array(
                    'id' => 98,
                    'migration' => '2023_09_21_133017_create_scholarship_qualifications_table',
                    'batch' => 0,
                ),
            94 =>
                array(
                    'id' => 99,
                    'migration' => '2023_09_21_133017_create_scholarship_universities_table',
                    'batch' => 0,
                ),
            95 =>
                array(
                    'id' => 100,
                    'migration' => '2023_09_21_133017_create_scholarship_who_can_applies_table',
                    'batch' => 0,
                ),
            96 =>
                array(
                    'id' => 101,
                    'migration' => '2023_09_21_133017_create_scholarships_table',
                    'batch' => 0,
                ),
            97 =>
                array(
                    'id' => 102,
                    'migration' => '2023_09_21_133017_create_scholarships_old_table',
                    'batch' => 0,
                ),
            98 =>
                array(
                    'id' => 103,
                    'migration' => '2023_09_21_133017_create_seminar_dates_table',
                    'batch' => 0,
                ),
            99 =>
                array(
                    'id' => 104,
                    'migration' => '2023_09_21_133017_create_seminar_instructors_table',
                    'batch' => 0,
                ),
            100 =>
                array(
                    'id' => 105,
                    'migration' => '2023_09_21_133017_create_seminar_modes_table',
                    'batch' => 0,
                ),
            101 =>
                array(
                    'id' => 106,
                    'migration' => '2023_09_21_133017_create_seminar_software_table',
                    'batch' => 0,
                ),
            102 =>
                array(
                    'id' => 107,
                    'migration' => '2023_09_21_133017_create_seminars_table',
                    'batch' => 0,
                ),
            103 =>
                array(
                    'id' => 108,
                    'migration' => '2023_09_21_133017_create_service_payments_table',
                    'batch' => 0,
                ),
            104 =>
                array(
                    'id' => 109,
                    'migration' => '2023_09_21_133017_create_site_pages_table',
                    'batch' => 0,
                ),
            105 =>
                array(
                    'id' => 110,
                    'migration' => '2023_09_21_133017_create_skills_table',
                    'batch' => 0,
                ),
            106 =>
                array(
                    'id' => 111,
                    'migration' => '2023_09_21_133017_create_staff_table',
                    'batch' => 0,
                ),
            107 =>
                array(
                    'id' => 112,
                    'migration' => '2023_09_21_133017_create_subscribers_table',
                    'batch' => 0,
                ),
            108 =>
                array(
                    'id' => 113,
                    'migration' => '2023_09_21_133017_create_system_configurations_table',
                    'batch' => 0,
                ),
            109 =>
                array(
                    'id' => 114,
                    'migration' => '2023_09_21_133017_create_transactions_table',
                    'batch' => 0,
                ),
            110 =>
                array(
                    'id' => 115,
                    'migration' => '2023_09_21_133017_create_translations_table',
                    'batch' => 0,
                ),
            111 =>
                array(
                    'id' => 116,
                    'migration' => '2023_09_21_133017_create_uploads_table',
                    'batch' => 0,
                ),
            112 =>
                array(
                    'id' => 117,
                    'migration' => '2023_09_21_133017_create_user_badges_table',
                    'batch' => 0,
                ),
            113 =>
                array(
                    'id' => 118,
                    'migration' => '2023_09_21_133017_create_user_packages_table',
                    'batch' => 0,
                ),
            114 =>
                array(
                    'id' => 119,
                    'migration' => '2023_09_21_133017_create_user_profiles_table',
                    'batch' => 0,
                ),
            115 =>
                array(
                    'id' => 120,
                    'migration' => '2023_09_21_133017_create_user_roles_table',
                    'batch' => 0,
                ),
            116 =>
                array(
                    'id' => 121,
                    'migration' => '2023_09_21_133017_create_users_table',
                    'batch' => 0,
                ),
            117 =>
                array(
                    'id' => 122,
                    'migration' => '2023_09_21_133017_create_verifications_table',
                    'batch' => 0,
                ),
            118 =>
                array(
                    'id' => 123,
                    'migration' => '2023_09_21_133017_create_wallets_table',
                    'batch' => 0,
                ),
            119 =>
                array(
                    'id' => 124,
                    'migration' => '2023_09_21_133017_create_work_experiences_table',
                    'batch' => 0,
                ),
            120 =>
                array(
                    'id' => 125,
                    'migration' => '2023_09_21_133020_add_foreign_keys_to_addresses_table',
                    'batch' => 0,
                ),
            121 =>
                array(
                    'id' => 126,
                    'migration' => '2023_09_21_133020_add_foreign_keys_to_chat_threads_table',
                    'batch' => 0,
                ),
            122 =>
                array(
                    'id' => 127,
                    'migration' => '2023_09_21_133020_add_foreign_keys_to_chats_table',
                    'batch' => 0,
                ),
            123 =>
                array(
                    'id' => 128,
                    'migration' => '2023_09_21_133020_add_foreign_keys_to_documents_table',
                    'batch' => 0,
                ),
            124 =>
                array(
                    'id' => 129,
                    'migration' => '2023_09_21_133020_add_foreign_keys_to_model_has_permissions_table',
                    'batch' => 0,
                ),
            125 =>
                array(
                    'id' => 130,
                    'migration' => '2023_09_21_133020_add_foreign_keys_to_model_has_roles_table',
                    'batch' => 0,
                ),
            126 =>
                array(
                    'id' => 131,
                    'migration' => '2023_09_21_133020_add_foreign_keys_to_portfolios_table',
                    'batch' => 0,
                ),
            127 =>
                array(
                    'id' => 132,
                    'migration' => '2023_09_21_133020_add_foreign_keys_to_project_bids_table',
                    'batch' => 0,
                ),
            128 =>
                array(
                    'id' => 133,
                    'migration' => '2023_09_21_133020_add_foreign_keys_to_project_users_table',
                    'batch' => 0,
                ),
            129 =>
                array(
                    'id' => 134,
                    'migration' => '2023_09_21_133020_add_foreign_keys_to_projects_table',
                    'batch' => 0,
                ),
            130 =>
                array(
                    'id' => 135,
                    'migration' => '2023_09_21_133020_add_foreign_keys_to_role_has_permissions_table',
                    'batch' => 0,
                ),
            131 =>
                array(
                    'id' => 136,
                    'migration' => '2023_09_21_133020_add_foreign_keys_to_seminar_dates_table',
                    'batch' => 0,
                ),
            132 =>
                array(
                    'id' => 137,
                    'migration' => '2023_09_21_133020_add_foreign_keys_to_seminar_instructors_table',
                    'batch' => 0,
                ),
            133 =>
                array(
                    'id' => 138,
                    'migration' => '2023_09_21_133020_add_foreign_keys_to_seminars_table',
                    'batch' => 0,
                ),
            134 =>
                array(
                    'id' => 139,
                    'migration' => '2023_09_21_133020_add_foreign_keys_to_transactions_table',
                    'batch' => 0,
                ),
        ));
    }
}
