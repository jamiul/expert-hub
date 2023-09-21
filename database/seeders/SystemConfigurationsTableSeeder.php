<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class SystemConfigurationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('system_configurations')->delete();

        DB::table('system_configurations')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'type' => 'symbol_format',
                    'value' => '1',
                    'created_at' => '2020-07-22 17:12:22',
                    'updated_at' => '2020-07-22 14:35:32',
                ),
            1 =>
                array(
                    'id' => 2,
                    'type' => 'system_default_currency',
                    'value' => '3',
                    'created_at' => '2019-12-08 12:03:10',
                    'updated_at' => '2023-04-04 18:25:28',
                ),
            2 =>
                array(
                    'id' => 3,
                    'type' => 'no_of_decimals',
                    'value' => '0',
                    'created_at' => '2019-12-12 14:04:43',
                    'updated_at' => '2023-04-05 05:45:28',
                ),
            3 =>
                array(
                    'id' => 4,
                    'type' => 'project_approval',
                    'value' => '0',
                    'created_at' => '2019-12-19 17:52:55',
                    'updated_at' => '2020-05-16 15:58:02',
                ),
            4 =>
                array(
                    'id' => 5,
                    'type' => 'paypal_activation_checkbox',
                    'value' => '1',
                    'created_at' => '2019-12-25 09:26:37',
                    'updated_at' => '2019-12-25 09:26:37',
                ),
            5 =>
                array(
                    'id' => 6,
                    'type' => 'paypal_sandbox_checkbox',
                    'value' => '1',
                    'created_at' => '2019-12-25 09:26:37',
                    'updated_at' => '2019-12-25 09:26:37',
                ),
            6 =>
                array(
                    'id' => 7,
                    'type' => 'stripe_activation_checkbox',
                    'value' => '1',
                    'created_at' => '2019-12-25 09:26:37',
                    'updated_at' => '2020-05-11 04:45:14',
                ),
            7 =>
                array(
                    'id' => 8,
                    'type' => 'google_login_activation_checkbox',
                    'value' => '1',
                    'created_at' => '2019-12-25 09:26:47',
                    'updated_at' => '2023-04-07 01:07:44',
                ),
            8 =>
                array(
                    'id' => 9,
                    'type' => 'google_analytics_activation_checkbox',
                    'value' => '1',
                    'created_at' => '2019-12-25 09:26:47',
                    'updated_at' => '2020-07-25 10:45:13',
                ),
            9 =>
                array(
                    'id' => 10,
                    'type' => 'facebook_login_activation_checkbox',
                    'value' => '1',
                    'created_at' => '2019-12-25 09:26:47',
                    'updated_at' => '2023-04-10 02:20:06',
                ),
            10 =>
                array(
                    'id' => 11,
                    'type' => 'facebook_chat_activation_checkbox',
                    'value' => '1',
                    'created_at' => '2019-12-25 09:26:47',
                    'updated_at' => '2020-07-25 10:45:05',
                ),
            11 =>
                array(
                    'id' => 12,
                    'type' => 'site_name',
                    'value' => 'ConsultantEdu ',
                    'created_at' => '2019-12-25 09:36:16',
                    'updated_at' => '2023-05-24 05:00:59',
                ),
            12 =>
                array(
                    'id' => 13,
                    'type' => 'site_motto',
                    'value' => '',
                    'created_at' => '2019-12-25 09:36:16',
                    'updated_at' => '2023-05-26 14:21:43',
                ),
            13 =>
                array(
                    'id' => 14,
                    'type' => 'site_address',
                    'value' => 'In ut dolore adipisc',
                    'created_at' => '2019-12-25 09:36:16',
                    'updated_at' => '2020-02-27 10:09:12',
                ),
            14 =>
                array(
                    'id' => 15,
                    'type' => 'site_phone',
                    'value' => '+1 (918) 126-5336',
                    'created_at' => '2019-12-25 09:36:16',
                    'updated_at' => '2020-02-27 10:09:12',
                ),
            15 =>
                array(
                    'id' => 16,
                    'type' => 'site_email',
                    'value' => 'fovub@mailinator.net',
                    'created_at' => '2019-12-25 09:36:16',
                    'updated_at' => '2020-02-27 10:09:12',
                ),
            16 =>
                array(
                    'id' => 17,
                    'type' => 'freelancer_policy',
                    'value' => 'Copyright laws can vary from one country to the next; thus, it is vitally important that you acknowledge the diï¬€erences in the laws no matter where your staï¬€ members are located.SPELL OUT COMPLIANCE PROCEDURESâ€¦â€¦including whom employees should contact within your organization with copyright questions. Explain how employees can determine if they need copyright permission and how to obtain permissions from rightsholders (publishers and authors).INFORM EMPLOYEES ABOUT THE USE OF YOUR ORGANIZATIONâ€™S OWN COPYRIGHTED MATERIALSFor example: How should employees handle the issue of works for hire with contractors and other non-employees who produce work for your organization? When is it okay to distribute your organizationâ€™s own materials?ADVISE EMPLOYEES ON THE PROPER HANDLING OF INFRINGEMENTEncourage employees to do the right thing, and to follow speciï¬c procedures when they witness instances of copyright infringement within your organization. Also, identify procedures for how employees should handle infringement of your companyâ€™s own works that they discover online or in the marketplace.&nbsp;Once you have developed your policy, be sure to formally introduce these guidelines to employees and issue periodic reminders. You may also consider including copyright compliance in your new employee orientation as well as in trainingfor existing staff.',
                    'created_at' => '2019-12-29 12:24:20',
                    'updated_at' => '2019-12-29 06:59:18',
                ),
            17 =>
                array(
                    'id' => 18,
                    'type' => 'client_policy',
                    'value' => '6 Tips for Creating an Effective Copyright PolicyDemonstrate respect for the copyrights of others and reduce the risk of infringementEach day employees share copyrighted content with one another in emails, in sales presentations, in response to clients and business partners and in many other ways â€” itâ€™s just the normal course of doing business. But in the rush to get things done, even well-intentioned employees may unknowingly share copyrighted material without permission to do so, exposing your organization to the risk of copyright infringement.By developing a corporate copyright policy, you can provide clear guidelines to employees around the use of published materials and demonstrate your companyâ€™s commitment to respecting the copyrights of others. Here are six steps to help you craft a policy that meets your companyâ€™s needs and decreases your infringement risk.SOLICIT INPUT FROM&nbsp;COPYRIGHT EXPERTSâ€¦â€¦in your organization who may have suggestions for issues to address in your policy. Outside of library/information services, legal and compliance staï¬€,you might expand the group to include Marketing and Corporate Communications. For example, should you address the subject of clientsâ€™ or business partnersâ€™ requests for information? And what about guidance for Marketing and Sales teams on the use of images or video content in sales materials?PROVIDE INFORMATION ON COPYRIGHT LAWYour colleagues may lack even a basic understanding of copyright law and how it aï¬€ects them. Provide foundational information on copyright law in your policy. Refer to the Copyright Basics section on copyright.com to get started. You can also make it easy for employees to get up-to-speed by including a link to the informative and fun Copyright Basics video from Copyright Clearance Center.ADDRESS GLOBAL COPYRIGHT ISSUESIf your organization employs workers in multiple countries, provide information to ensure that employees share content responsibly both domestically and across borders. Copyright laws can vary from one country to the next; thus, it is vitally important that you acknowledge the diï¬€erences in the laws no matter where your staï¬€ members are located.SPELL OUT COMPLIANCE PROCEDURESâ€¦â€¦including whom employees should contact within your organization with copyright questions. Explain how employees can determine if they need copyright permission and how to obtain permissions from rightsholders (publishers and authors).INFORM EMPLOYEES ABOUT THE USE OF YOUR ORGANIZATIONâ€™S OWN COPYRIGHTED MATERIALSFor example: How should employees handle the issue of works for hire with contractors and other non-employees who produce work for your organization? When is it okay to distribute your organizationâ€™s own materials?ADVISE EMPLOYEES ON THE PROPER HANDLING OF INFRINGEMENTEncourage employees to do the right thing, and to follow speciï¬c procedures when they witness instances of copyright infringement within your organization. Also, identify procedures for how employees should handle infringement of your companyâ€™s own works that they discover online or in the marketplace.&nbsp;Once you have developed your policy, be sure to formally introduce these guidelines to employees and issue periodic reminders. You may also consider including copyright compliance in your new employee orientation as well as in trainingfor existing staff.',
                    'created_at' => '2019-12-29 12:24:40',
                    'updated_at' => '2019-12-29 06:58:56',
                ),
            18 =>
                array(
                    'id' => 19,
                    'type' => 'privacy_policy',
                    'value' => '<p><b>6 Tips for Creating an Effective Copyright</b></p><p>PolicyDemonstrate respect for the copyrights of others and reduce the risk of infringementEach day employees share copyrighted content with one another in emails, in sales presentations, in response to clients and business partners and in many other ways â€” itâ€™s just the normal course of doing business.</p><p>But in the rush to get things done, even well-intentioned employees may unknowingly share copyrighted material without permission to do so, exposing your organization to the risk of copyright infringement.By developing a corporate copyright policy, you can provide clear guidelines to employees around the use of published materials and demonstrate your companyâ€™s commitment to respecting the copyrights of others. Here are six steps to help you craft a policy that meets your companyâ€™s needs and decreases your infringement risk.SOLICIT INPUT FROM&nbsp;COPYRIGHT EXPERTSâ€¦â€¦in your organization who may have suggestions for issues to address in your policy. Outside of library/information services, legal and compliance staï¬€,you might expand the group to include Marketing and Corporate Communications. For example, should you address the subject of clientsâ€™ or business partnersâ€™ requests for information? And what about guidance for Marketing and Sales teams on the use of images or video content in sales materials?PROVIDE INFORMATION ON COPYRIGHT LAWYour colleagues may lack even a basic understanding of copyright law and how it aï¬€ects them. Provide foundational information on copyright law in your policy. Refer to the Copyright Basics section on copyright.com to get started. You can also make it easy for employees to get up-to-speed by including a link to the informative and fun Copyright Basics video from Copyright Clearance Center.ADDRESS GLOBAL COPYRIGHT ISSUESIf your organization employs workers in multiple countries, provide information to ensure that employees share content responsibly both domestically and across borders. Copyright laws can vary from one country to the next; thus, it is vitally important that you acknowledge the diï¬€erences in the laws no matter where your staï¬€ members are located.SPELL OUT COMPLIANCE PROCEDURESâ€¦â€¦including whom employees should contact within your organization with copyright questions. Explain how employees can determine if they need copyright permission and how to obtain permissions from rightsholders (publishers and authors).INFORM EMPLOYEES ABOUT THE USE OF YOUR ORGANIZATIONâ€™S OWN COPYRIGHTED MATERIALSFor example: How should employees handle the issue of works for hire with contractors and other non-employees who produce work for your organization?</p><p>When is it okay to distribute your organizationâ€™s own materials?ADVISE EMPLOYEES ON THE PROPER HANDLING OF INFRINGEMENTEncourage employees to do the right thing, and to follow speciï¬c procedures when they witness instances of copyright infringement within your organization. Also, identify procedures for how employees should handle infringement of your companyâ€™s own works that they discover online or in the marketplace.&nbsp;Once you have developed your policy, be sure to formally introduce these guidelines to employees and issue periodic reminders. You may also consider including copyright compliance in your new employee orientation as well as in trainingfor existing staff.<br></p>',
                    'created_at' => '2019-12-29 12:25:00',
                    'updated_at' => '2020-03-11 09:24:02',
                ),
            19 =>
                array(
                    'id' => 20,
                    'type' => 'conditions_copyright_policy',
                    'value' => '<header class="entry-header" style="box-sizing: inherit; font-family: &quot;Myriad W01&quot;, myriad-pro, &quot;Myriad Pro&quot;, &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, sans-serif; font-size: 18px;"><h1 class="entry-title page-title" style="box-sizing: inherit; border: 0px; font-family: inherit; font-size: 3.9rem; font-style: inherit; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(64, 64, 64); line-height: 39px;"><span style="font-family: inherit; font-size: 2.6rem; font-style: inherit;">Demonstrate respect for the copyrights of others and reduce the risk of infringement</span><br></h1></header><div class="entry-content" style="box-sizing: inherit; border: 0px; font-family: &quot;Myriad W01&quot;, myriad-pro, &quot;Myriad Pro&quot;, &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, sans-serif; font-size: 18px; margin: 1.5em 0px 0px; outline: 0px; padding: 0px; vertical-align: baseline;"><p style="box-sizing: inherit; border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline;">Each day employees share copyrighted content with one another in emails, in sales presentations, in response to clients and business partners and in many other ways â€” itâ€™s just the normal course of doing business. But in the rush to get things done, even well-intentioned employees may unknowingly share copyrighted material without permission to do so, exposing your organization to the risk of copyright infringement.</p><p style="box-sizing: inherit; border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline;">By developing a corporate copyright policy, you can provide clear guidelines to employees around the use of published materials and demonstrate your companyâ€™s commitment to respecting the copyrights of others. Here are six steps to help you craft a policy that meets your companyâ€™s needs and decreases your infringement risk.</p><h2 style="box-sizing: inherit; border: 0px; font-family: inherit; font-size: 2.6rem; font-style: inherit; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(64, 64, 64); line-height: normal;">SOLICIT INPUT FROM&nbsp;COPYRIGHT EXPERTSâ€¦</h2><p style="box-sizing: inherit; border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline;">â€¦in your organization who may have suggestions for issues to address in your policy. Outside of library/information services, legal and compliance staï¬€,<br style="box-sizing: inherit;">you might expand the group to include Marketing and Corporate Communications. For example, should you address the subject of clientsâ€™ or business partnersâ€™ requests for information? And what about guidance for Marketing and Sales teams on the use of images or video content in sales materials?</p><h2 style="box-sizing: inherit; border: 0px; font-family: inherit; font-size: 2.6rem; font-style: inherit; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(64, 64, 64); line-height: normal;">PROVIDE INFORMATION ON COPYRIGHT LAW</h2><p style="box-sizing: inherit; border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline;">Your colleagues may lack even a basic understanding of copyright law and how it aï¬€ects them. Provide foundational information on copyright law in your policy. Refer to the Copyright Basics section on copyright.com to get started. You can also make it easy for employees to get up-to-speed by including a link to the informative and fun Copyright Basics video from Copyright Clearance Center.</p><h2 style="box-sizing: inherit; border: 0px; font-family: inherit; font-size: 2.6rem; font-style: inherit; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(64, 64, 64); line-height: normal;">ADDRESS GLOBAL COPYRIGHT ISSUES</h2><p style="box-sizing: inherit; border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline;">If your organization employs workers in multiple countries, provide information to ensure that employees share content responsibly both domestically and across borders. Copyright laws can vary from one country to the next; thus, it is vitally important that you acknowledge the diï¬€erences in the laws no matter where your staï¬€ members are located.</p><h2 style="box-sizing: inherit; border: 0px; font-family: inherit; font-size: 2.6rem; font-style: inherit; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(64, 64, 64); line-height: normal;">SPELL OUT COMPLIANCE PROCEDURESâ€¦</h2><p style="box-sizing: inherit; border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline;">â€¦including whom employees should contact within your organization with copyright questions. Explain how employees can determine if they need copyright permission and how to obtain permissions from rightsholders (publishers and authors).</p><h2 style="box-sizing: inherit; border: 0px; font-family: inherit; font-size: 2.6rem; font-style: inherit; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(64, 64, 64); line-height: normal;">INFORM EMPLOYEES ABOUT THE USE OF YOUR ORGANIZATIONâ€™S OWN COPYRIGHTED MATERIALS</h2><p style="box-sizing: inherit; border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline;">For example: How should employees handle the issue of works for hire with contractors and other non-employees who produce work for your organization? When is it okay to distribute your organizationâ€™s own materials?</p><h2 style="box-sizing: inherit; border: 0px; font-family: inherit; font-size: 2.6rem; font-style: inherit; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(64, 64, 64); line-height: normal;">ADVISE EMPLOYEES ON THE PROPER HANDLING OF INFRINGEMENT</h2><p style="box-sizing: inherit; border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline;">Encourage employees to do the right thing, and to follow speciï¬c procedures when they witness instances of copyright infringement within your organization. Also, identify procedures for how employees should handle infringement of your companyâ€™s own works that they discover online or in the marketplace.&nbsp;Once you have developed your policy, be sure to formally introduce these guidelines to employees and issue periodic reminders. You may also consider including copyright compliance in your new employee orientation as well as in training<br style="box-sizing: inherit;">for existing staff.</p></div>',
                    'created_at' => '2019-12-29 12:25:25',
                    'updated_at' => '2020-03-11 09:32:59',
                ),
            20 =>
                array(
                    'id' => 21,
                    'type' => 'refund_policy',
                    'value' => NULL,
                    'created_at' => '2019-12-29 12:25:42',
                    'updated_at' => '2019-12-29 12:25:42',
                ),
            21 =>
                array(
                    'id' => 22,
                    'type' => 'stripe_sandbox_checkbox',
                    'value' => '1',
                    'created_at' => '2020-02-23 07:39:29',
                    'updated_at' => '2020-05-11 04:48:27',
                ),
            22 =>
                array(
                    'id' => 23,
                    'type' => 'paystack_activation_checkbox',
                    'value' => '0',
                    'created_at' => '2020-02-23 08:05:30',
                    'updated_at' => '2023-04-06 12:22:38',
                ),
            23 =>
                array(
                    'id' => 24,
                    'type' => 'fb_pixel_activation_checkbox',
                    'value' => '1',
                    'created_at' => '2020-02-27 08:25:00',
                    'updated_at' => '2020-07-25 10:44:59',
                ),
            24 =>
                array(
                    'id' => 25,
                    'type' => 'facebook_link_of_site',
                    'value' => '',
                    'created_at' => '2020-02-27 10:53:37',
                    'updated_at' => '2020-02-27 10:53:37',
                ),
            25 =>
                array(
                    'id' => 26,
                    'type' => 'youtube_link_of_site',
                    'value' => '',
                    'created_at' => '2020-02-27 10:53:37',
                    'updated_at' => '2020-02-27 10:53:37',
                ),
            26 =>
                array(
                    'id' => 27,
                    'type' => 'support_ticket_addon',
                    'value' => '1',
                    'created_at' => '2020-03-04 16:48:36',
                    'updated_at' => '2020-03-04 16:48:36',
                ),
            27 =>
                array(
                    'id' => 28,
                    'type' => 'min_withdraw_amount',
                    'value' => '15',
                    'created_at' => '2020-03-11 16:20:30',
                    'updated_at' => '2020-03-11 10:36:00',
                ),
            28 =>
                array(
                    'id' => 29,
                    'type' => 'paypal_charge',
                    'value' => '0',
                    'created_at' => '2020-03-11 16:20:45',
                    'updated_at' => '2020-03-11 10:36:45',
                ),
            29 =>
                array(
                    'id' => 30,
                    'type' => 'bank_charge',
                    'value' => '0',
                    'created_at' => '2020-03-11 16:20:55',
                    'updated_at' => '2020-03-11 10:37:12',
                ),
            30 =>
                array(
                    'id' => 31,
                    'type' => 'slider_section_title',
                    'value' => 'Hire expert consultants for any scholarships, online from anywhere',
                    'created_at' => '2020-05-04 17:59:56',
                    'updated_at' => '2023-04-05 07:31:02',
                ),
            31 =>
                array(
                    'id' => 32,
                    'type' => 'slider_section_subtitle',
                    'value' => '<font face="Montserrat, sans-serif" color="#1b1b28"><span style="font-size: 20px;">Millions of students use consultant to turn their ideas into reality.</span></font>',
                    'created_at' => '2020-05-04 17:59:56',
                    'updated_at' => '2023-04-05 08:38:31',
                ),
            32 =>
                array(
                    'id' => 33,
                    'type' => 'sliders',
                    'value' => '42',
                    'created_at' => '2020-05-04 16:34:01',
                    'updated_at' => '2023-04-14 05:51:49',
                ),
            33 =>
                array(
                    'id' => 34,
                    'type' => 'client_logos',
                    'value' => '99,20,21,22,23,24,15,18,19,17,16,14',
                    'created_at' => '2020-05-04 17:37:58',
                    'updated_at' => '2023-04-06 10:14:10',
                ),
            34 =>
                array(
                    'id' => 35,
                    'type' => 'client_logo_show',
                    'value' => 'on',
                    'created_at' => '2020-05-04 17:43:42',
                    'updated_at' => '2020-05-04 17:45:32',
                ),
            35 =>
                array(
                    'id' => 36,
                    'type' => 'how_it_works_title',
                    'value' => 'How it Works',
                    'created_at' => '2020-05-04 17:43:42',
                    'updated_at' => '2022-11-21 13:37:53',
                ),
            36 =>
                array(
                    'id' => 37,
                    'type' => 'how_it_works_subtitle',
                    'value' => 'It\'s easy. Simply post a job you need completed and receive competitive bids from consultants within minutes.',
                    'created_at' => '2020-05-04 17:43:42',
                    'updated_at' => '2023-04-05 08:10:10',
                ),
            37 =>
                array(
                    'id' => 38,
                    'type' => 'how_it_works_description_1',
                    'value' => '<p>								<b>Post a job</b></p><p><font color="#636363">Tell us about your project. We connects you with top consultants around the world.</font>							</p>',
                    'created_at' => '2020-05-04 17:43:42',
                    'updated_at' => '2023-04-05 08:15:18',
                ),
            38 =>
                array(
                    'id' => 39,
                    'type' => 'how_it_works_description_2',
                    'value' => '<p>								<b>Connect with consultants<span open="" sans",="" arial,="" sans-serif;="" font-size:="" 14px;="" text-align:="" justify;"=""><br></span></b></p><p><font color="#636363">Get bids from consultants. Interview, chat with consultants and hire the best one.</font>							</p>',
                    'created_at' => '2020-05-04 17:43:42',
                    'updated_at' => '2023-04-05 08:15:18',
                ),
            39 =>
                array(
                    'id' => 40,
                    'type' => 'how_it_works_description_3',
                    'value' => '<p>								<span style="font-weight: bolder; margin: 0px; padding: 0px; font-family: " open="" sans",="" arial,="" sans-serif;="" font-size:="" 14px;="" text-align:="" justify;"="">Get your project done<br></span></p><p><font color="#636363">Pay consultants via milestone payments & complete your project</font>							</p>',
                    'created_at' => '2020-05-04 17:43:42',
                    'updated_at' => '2023-04-14 06:43:02',
                ),
            40 =>
                array(
                    'id' => 41,
                    'type' => 'how_it_works_show',
                    'value' => 'on',
                    'created_at' => '2020-05-04 18:10:42',
                    'updated_at' => '2020-05-04 18:10:42',
                ),
            41 =>
                array(
                    'id' => 42,
                    'type' => 'how_it_works_banner_1',
                    'value' => '43',
                    'created_at' => '2020-05-04 18:10:42',
                    'updated_at' => '2023-04-14 06:43:02',
                ),
            42 =>
                array(
                    'id' => 43,
                    'type' => 'how_it_works_banner_2',
                    'value' => '45',
                    'created_at' => '2020-05-04 18:10:42',
                    'updated_at' => '2023-04-14 06:43:02',
                ),
            43 =>
                array(
                    'id' => 44,
                    'type' => 'how_it_works_banner_3',
                    'value' => '44',
                    'created_at' => '2020-05-04 18:10:42',
                    'updated_at' => '2023-04-14 06:43:02',
                ),
            44 =>
                array(
                    'id' => 45,
                    'type' => 'latest_project_title',
                    'value' => 'Browse Latest Project',
                    'created_at' => '2020-05-04 18:10:42',
                    'updated_at' => '2020-05-04 18:52:33',
                ),
            45 =>
                array(
                    'id' => 46,
                    'type' => 'latest_project_subtitle',
                    'value' => 'Browse jobs posted on Scholarships Australia, or jump right in and create a free profile to find the work that you love to do',
                    'created_at' => '2020-05-04 18:10:42',
                    'updated_at' => '2023-04-14 05:26:49',
                ),
            46 =>
                array(
                    'id' => 47,
                    'type' => 'latest_project_show',
                    'value' => 'on',
                    'created_at' => '2020-05-04 18:52:33',
                    'updated_at' => '2020-05-04 18:52:33',
                ),
            47 =>
                array(
                    'id' => 48,
                    'type' => 'featured_category_title',
                    'value' => 'Featured Categories',
                    'created_at' => '2020-05-04 18:10:42',
                    'updated_at' => '2022-11-21 13:41:19',
                ),
            48 =>
                array(
                    'id' => 49,
                    'type' => 'featured_category_subtitle',
                    'value' => 'We have expert consultants in the below categories',
                    'created_at' => '2020-05-04 18:10:42',
                    'updated_at' => '2023-04-05 08:18:02',
                ),
            49 =>
                array(
                    'id' => 50,
                    'type' => 'featured_category_show',
                    'value' => 'on',
                    'created_at' => '2020-05-04 19:04:01',
                    'updated_at' => '2020-05-04 19:04:01',
                ),
            50 =>
                array(
                    'id' => 51,
                    'type' => 'featured_category_list',
                    'value' => '["16","15","14","13","12","11","10","9"]',
                    'created_at' => '2020-05-04 19:04:01',
                    'updated_at' => '2023-05-24 05:02:24',
                ),
            51 =>
                array(
                    'id' => 52,
                    'type' => 'featured_category_left_banner',
                    'value' => NULL,
                    'created_at' => '2020-05-04 19:04:01',
                    'updated_at' => '2023-04-14 06:15:22',
                ),
            52 =>
                array(
                    'id' => 53,
                    'type' => 'featured_category_right_banner',
                    'value' => NULL,
                    'created_at' => '2020-05-04 19:04:01',
                    'updated_at' => '2023-04-14 06:15:22',
                ),
            53 =>
                array(
                    'id' => 54,
                    'type' => 'cta_section_title',
                    'value' => 'Ready to get started?',
                    'created_at' => '2020-05-04 19:04:01',
                    'updated_at' => '2020-05-04 19:04:01',
                ),
            54 =>
                array(
                    'id' => 55,
                    'type' => 'cta_section_subtitle',
                    'value' => 'Join Us',
                    'created_at' => '2020-05-04 19:04:01',
                    'updated_at' => '2020-05-04 19:04:01',
                ),
            55 =>
                array(
                    'id' => 56,
                    'type' => 'meta_title',
                    'value' => 'FreelancerEdu',
                    'created_at' => '2020-05-04 19:04:01',
                    'updated_at' => '2023-05-24 04:59:37',
                ),
            56 =>
                array(
                    'id' => 57,
                    'type' => 'meta_description',
                    'value' => 'FreelancerEdu is a educational consultancy platform. Our consultants will assist you to submit a competitive scholarship application that stands out.',
                    'created_at' => '2020-05-04 19:04:01',
                    'updated_at' => '2023-05-24 04:59:37',
                ),
            57 =>
                array(
                    'id' => 58,
                    'type' => 'meta_keywords',
                    'value' => 'FreelancerEdu, Australia',
                    'created_at' => '2020-05-04 19:04:01',
                    'updated_at' => '2023-05-26 14:23:25',
                ),
            58 =>
                array(
                    'id' => 59,
                    'type' => 'meta_image',
                    'value' => '85',
                    'created_at' => '2020-05-04 19:23:06',
                    'updated_at' => '2023-05-24 04:59:37',
                ),
            59 =>
                array(
                    'id' => 60,
                    'type' => 'cta_section_show',
                    'value' => 'on',
                    'created_at' => '2020-05-04 19:23:06',
                    'updated_at' => '2020-05-05 08:10:59',
                ),
            60 =>
                array(
                    'id' => 61,
                    'type' => 'sslcommerz_activation_checkbox',
                    'value' => '0',
                    'created_at' => '2020-05-11 10:09:54',
                    'updated_at' => '2023-04-06 12:21:50',
                ),
            61 =>
                array(
                    'id' => 62,
                    'type' => 'sslcommerz_sandbox_checkbox',
                    'value' => '1',
                    'created_at' => '2020-05-11 10:09:54',
                    'updated_at' => '2020-07-22 11:55:34',
                ),
            62 =>
                array(
                    'id' => 63,
                    'type' => 'instamojo_activation_checkbox',
                    'value' => '0',
                    'created_at' => '2020-05-11 10:55:22',
                    'updated_at' => '2023-04-06 12:22:30',
                ),
            63 =>
                array(
                    'id' => 64,
                    'type' => 'instamojo_sandbox_checkbox',
                    'value' => '1',
                    'created_at' => '2020-05-11 05:02:33',
                    'updated_at' => '2020-05-11 05:14:39',
                ),
            64 =>
                array(
                    'id' => 65,
                    'type' => 'voguepay_activation_checkbox',
                    'value' => '0',
                    'created_at' => '2020-05-11 11:04:34',
                    'updated_at' => '2020-05-11 05:21:01',
                ),
            65 =>
                array(
                    'id' => 66,
                    'type' => 'voguepay_sandbox_checkbox',
                    'value' => '1',
                    'created_at' => '2020-05-11 11:05:22',
                    'updated_at' => '2020-05-11 05:20:51',
                ),
            66 =>
                array(
                    'id' => 67,
                    'type' => 'paytm_activation_checkbox',
                    'value' => '0',
                    'created_at' => '2020-05-11 11:26:58',
                    'updated_at' => '2023-04-06 12:21:42',
                ),
            67 =>
                array(
                    'id' => 68,
                    'type' => '',
                    'value' => '0',
                    'created_at' => '2020-05-11 05:33:25',
                    'updated_at' => '2020-05-11 05:33:25',
                ),
            68 =>
                array(
                    'id' => 69,
                    'type' => 'paytm_sandbox_checkbox',
                    'value' => '0',
                    'created_at' => '2020-05-11 05:35:08',
                    'updated_at' => '2020-05-11 05:35:08',
                ),
            69 =>
                array(
                    'id' => 70,
                    'type' => 'slider_section_show',
                    'value' => 'on',
                    'created_at' => '2020-06-06 13:06:24',
                    'updated_at' => '2020-06-06 07:07:34',
                ),
            70 =>
                array(
                    'id' => 71,
                    'type' => 'header_logo',
                    'value' => '171',
                    'created_at' => '2020-07-12 10:46:24',
                    'updated_at' => '2023-07-28 13:59:38',
                ),
            71 =>
                array(
                    'id' => 72,
                    'type' => 'header_stikcy',
                    'value' => 'on',
                    'created_at' => '2020-07-12 10:46:35',
                    'updated_at' => '2023-04-14 06:30:15',
                ),
            72 =>
                array(
                    'id' => 73,
                    'type' => 'footer_logo',
                    'value' => NULL,
                    'created_at' => '2020-07-12 11:01:41',
                    'updated_at' => '2023-05-26 00:50:44',
                ),
            73 =>
                array(
                    'id' => 74,
                    'type' => 'about_description_footer',
                    'value' => NULL,
                    'created_at' => '2020-07-12 17:38:23',
                    'updated_at' => '2023-05-26 00:50:44',
                ),
            74 =>
                array(
                    'id' => 75,
                    'type' => 'widget_one',
                    'value' => 'For Clients',
                    'created_at' => '2020-07-12 11:53:48',
                    'updated_at' => '2023-05-26 00:54:32',
                ),
            75 =>
                array(
                    'id' => 76,
                    'type' => 'widget_one_labels',
                    'value' => '["View Projects","Consultants","Services","All Categories","Packages","Profile"]',
                    'created_at' => '2020-07-12 11:53:48',
                    'updated_at' => '2023-05-26 01:12:44',
                ),
            76 =>
                array(
                    'id' => 77,
                    'type' => 'widget_one_links',
                    'value' => '["#","#","#","#","#","#"]',
                    'created_at' => '2020-07-12 11:53:48',
                    'updated_at' => '2023-05-26 01:12:44',
                ),
            77 =>
                array(
                    'id' => 81,
                    'type' => 'widget_two',
                    'value' => 'For Consultants',
                    'created_at' => '2020-07-12 11:53:48',
                    'updated_at' => '2023-05-26 00:58:44',
                ),
            78 =>
                array(
                    'id' => 82,
                    'type' => 'widget_two_labels',
                    'value' => '["Profile","All Services","Following Clients","Packages","Trust, Safety & Security","Contact Us"]',
                    'created_at' => '2020-07-12 11:53:48',
                    'updated_at' => '2023-05-26 01:10:42',
                ),
            79 =>
                array(
                    'id' => 83,
                    'type' => 'widget_two_links',
                    'value' => '["#","#","#","#","#","#"]',
                    'created_at' => '2020-07-12 11:53:48',
                    'updated_at' => '2023-04-05 07:24:49',
                ),
            80 =>
                array(
                    'id' => 84,
                    'type' => 'social_widget_title',
                    'value' => 'Follow Us',
                    'created_at' => '2020-07-12 12:03:39',
                    'updated_at' => '2023-05-26 00:48:04',
                ),
            81 =>
                array(
                    'id' => 85,
                    'type' => 'facebook_link',
                    'value' => '#',
                    'created_at' => '2020-07-12 12:05:52',
                    'updated_at' => '2020-08-07 14:31:01',
                ),
            82 =>
                array(
                    'id' => 86,
                    'type' => 'twitter_link',
                    'value' => '#',
                    'created_at' => '2020-07-12 12:05:52',
                    'updated_at' => '2023-04-05 06:50:13',
                ),
            83 =>
                array(
                    'id' => 87,
                    'type' => 'instagram_link',
                    'value' => '#',
                    'created_at' => '2020-07-12 12:05:52',
                    'updated_at' => '2023-04-05 06:50:13',
                ),
            84 =>
                array(
                    'id' => 88,
                    'type' => 'youtube_link',
                    'value' => '#',
                    'created_at' => '2020-07-12 12:05:52',
                    'updated_at' => '2023-04-05 06:50:13',
                ),
            85 =>
                array(
                    'id' => 89,
                    'type' => 'linkedin_link',
                    'value' => '#',
                    'created_at' => '2020-07-12 12:05:52',
                    'updated_at' => '2023-04-05 06:50:13',
                ),
            86 =>
                array(
                    'id' => 90,
                    'type' => 'language_switcher',
                    'value' => 'on',
                    'created_at' => '2020-07-12 18:21:15',
                    'updated_at' => '2023-04-05 06:57:34',
                ),
            87 =>
                array(
                    'id' => 91,
                    'type' => 'copyright_text',
                    'value' => '<p>© 2023 ConsultantEdu Pvt Limited</p>',
                    'created_at' => '2020-07-12 18:24:08',
                    'updated_at' => '2023-07-28 12:22:12',
                ),
            88 =>
                array(
                    'id' => 93,
                    'type' => 'twitter_login_activation_checkbox',
                    'value' => '1',
                    'created_at' => '2020-07-25 10:38:20',
                    'updated_at' => '2023-04-10 02:20:13',
                ),
            89 =>
                array(
                    'id' => 97,
                    'type' => 'linkedin_login_activation_checkbox',
                    'value' => '1',
                    'created_at' => '2020-07-25 16:43:44',
                    'updated_at' => '2023-04-10 02:20:20',
                ),
            90 =>
                array(
                    'id' => 98,
                    'type' => 'system_timezone',
                    'value' => 'Pacific/Honolulu',
                    'created_at' => '2020-07-26 09:43:25',
                    'updated_at' => '2020-07-26 09:57:36',
                ),
            91 =>
                array(
                    'id' => 99,
                    'type' => 'system_logo_white',
                    'value' => '85',
                    'created_at' => '2020-07-26 09:57:07',
                    'updated_at' => '2023-05-24 05:00:59',
                ),
            92 =>
                array(
                    'id' => 100,
                    'type' => 'system_logo_black',
                    'value' => '82',
                    'created_at' => '2020-07-26 09:57:07',
                    'updated_at' => '2023-06-21 14:36:48',
                ),
            93 =>
                array(
                    'id' => 101,
                    'type' => 'admin_login_background',
                    'value' => '91',
                    'created_at' => '2020-07-26 09:57:07',
                    'updated_at' => '2020-07-26 09:57:36',
                ),
            94 =>
                array(
                    'id' => 102,
                    'type' => 'timezone',
                    'value' => 'Australia/Sydney',
                    'created_at' => '2020-07-26 10:00:22',
                    'updated_at' => '2023-04-04 19:15:03',
                ),
            95 =>
                array(
                    'id' => 103,
                    'type' => 'website_name',
                    'value' => 'ConsultantEdu',
                    'created_at' => '2020-07-26 17:00:47',
                    'updated_at' => '2023-07-28 13:40:20',
                ),
            96 =>
                array(
                    'id' => 104,
                    'type' => 'base_color',
                    'value' => '#58b38d',
                    'created_at' => '2020-07-26 17:07:19',
                    'updated_at' => '2023-04-05 07:08:40',
                ),
            97 =>
                array(
                    'id' => 105,
                    'type' => 'site_icon',
                    'value' => '105',
                    'created_at' => '2020-07-27 16:29:08',
                    'updated_at' => '2023-05-26 01:22:30',
                ),
            98 =>
                array(
                    'id' => 106,
                    'type' => 'base_hov_color',
                    'value' => '#58b38d',
                    'created_at' => '2020-07-27 16:29:08',
                    'updated_at' => '2023-04-05 07:08:40',
                ),
            99 =>
                array(
                    'id' => 107,
                    'type' => 'current_version',
                    'value' => '1.0.0',
                    'created_at' => '2023-03-25 18:53:33',
                    'updated_at' => '2023-03-25 18:53:33',
                ),
            100 =>
                array(
                    'id' => 108,
                    'type' => 'service_section_show',
                    'value' => 'on',
                    'created_at' => '2022-06-06 07:06:44',
                    'updated_at' => '2023-04-13 09:29:34',
                ),
            101 =>
                array(
                    'id' => 109,
                    'type' => 'blog_section_show',
                    'value' => 'on',
                    'created_at' => '2022-06-06 07:06:44',
                    'updated_at' => '2023-04-13 09:29:54',
                ),
            102 =>
                array(
                    'id' => 110,
                    'type' => 'show_website_popup',
                    'value' => '',
                    'created_at' => '2022-06-06 07:06:44',
                    'updated_at' => '2022-06-06 07:06:44',
                ),
            103 =>
                array(
                    'id' => 111,
                    'type' => 'email_verification',
                    'value' => '',
                    'created_at' => '2022-06-06 07:07:12',
                    'updated_at' => '2022-06-06 07:07:12',
                ),
            104 =>
                array(
                    'id' => 112,
                    'type' => 'maintenance_mode',
                    'value' => '',
                    'created_at' => '2022-06-06 07:07:12',
                    'updated_at' => '2022-06-06 07:07:12',
                ),
            105 =>
                array(
                    'id' => 113,
                    'type' => 'website_popup_content',
                    'value' => '',
                    'created_at' => '2022-06-06 07:08:36',
                    'updated_at' => '2022-06-06 07:08:36',
                ),
            106 =>
                array(
                    'id' => 114,
                    'type' => 'show_subscribe_form',
                    'value' => '',
                    'created_at' => '2022-06-06 07:08:36',
                    'updated_at' => '2022-06-06 07:08:36',
                ),
            107 =>
                array(
                    'id' => 115,
                    'type' => 'service_section_show',
                    'value' => 'off',
                    'created_at' => '2022-06-06 13:09:01',
                    'updated_at' => '2022-06-06 13:09:01',
                ),
            108 =>
                array(
                    'id' => 116,
                    'type' => 'service_section_title',
                    'value' => 'Our Services',
                    'created_at' => '2022-06-06 13:09:01',
                    'updated_at' => '2022-06-06 13:09:01',
                ),
            109 =>
                array(
                    'id' => 117,
                    'type' => 'max_service_show_homepage',
                    'value' => '8',
                    'created_at' => '2022-06-06 13:09:01',
                    'updated_at' => '2023-05-26 00:37:53',
                ),
            110 =>
                array(
                    'id' => 118,
                    'type' => 'blog_section_title',
                    'value' => 'Scholarships Australia Blog',
                    'created_at' => '2022-06-06 07:09:07',
                    'updated_at' => '2023-04-14 05:30:38',
                ),
            111 =>
                array(
                    'id' => 119,
                    'type' => 'max_blog_show_homepage',
                    'value' => '4',
                    'created_at' => '2022-06-06 07:09:07',
                    'updated_at' => '2023-04-14 05:30:38',
                ),
            112 =>
                array(
                    'id' => 120,
                    'type' => 'cta_section_banner',
                    'value' => '40',
                    'created_at' => '2022-11-21 18:48:22',
                    'updated_at' => '2023-04-14 05:30:25',
                ),
            113 =>
                array(
                    'id' => 121,
                    'type' => 'cta_section_title_client',
                    'value' => 'Ready to Get Started',
                    'created_at' => '2022-11-21 18:48:22',
                    'updated_at' => '2022-11-21 18:48:22',
                ),
            114 =>
                array(
                    'id' => 122,
                    'type' => 'cta_section_subtitle_client',
                    'value' => 'You can post a project, select from premade projects or contact your favorite consultants through Scholarships Australia platform.<br><br>It is easy & your payment is secured.',
                    'created_at' => '2022-11-21 18:48:22',
                    'updated_at' => '2023-04-05 08:20:03',
                ),
            115 =>
                array(
                    'id' => 123,
                    'type' => 'cta_section_title_freelancer',
                    'value' => 'Ready to Get Started',
                    'created_at' => '2022-11-21 18:48:22',
                    'updated_at' => '2022-11-21 18:48:22',
                ),
            116 =>
                array(
                    'id' => 124,
                    'type' => 'cta_section_subtitle_freelancer',
                    'value' => 'You can bid a project, select from premade projects or contact your client through Scholarships Australia platform.<br><br>It iss easy & your payment is secured.',
                    'created_at' => '2022-11-21 18:48:22',
                    'updated_at' => '2023-04-05 08:20:03',
                ),
            117 =>
                array(
                    'id' => 125,
                    'type' => 'paystack_sandbox_checkbox',
                    'value' => '0',
                    'created_at' => '2022-11-21 18:48:22',
                    'updated_at' => '2022-11-21 18:48:22',
                ),
            118 =>
                array(
                    'id' => 126,
                    'type' => 'service_section_subtitle',
                    'value' => 'Choose from our premade packages by our consultants',
                    'created_at' => '2022-11-21 18:48:22',
                    'updated_at' => '2023-04-05 08:18:35',
                ),
            119 =>
                array(
                    'id' => 127,
                    'type' => 'blog_section_subtitle',
                    'value' => 'Read experiences, Tips & tricks for beginners, Success Story & more',
                    'created_at' => '2022-11-21 18:48:22',
                    'updated_at' => '2022-11-21 18:48:22',
                ),
            120 =>
                array(
                    'id' => 128,
                    'type' => 'widget_three',
                    'value' => 'Company',
                    'created_at' => '2022-11-21 18:48:22',
                    'updated_at' => '2023-05-26 00:55:53',
                ),
            121 =>
                array(
                    'id' => 129,
                    'type' => 'widget_three_labels',
                    'value' => '["About Us","Leadership","Investor Relations","Investor Relations","Why Scholarships Australia","Trust, Safety & Security","Contact Us"]',
                    'created_at' => '2022-11-21 18:48:22',
                    'updated_at' => '2023-05-26 01:14:30',
                ),
            122 =>
                array(
                    'id' => 130,
                    'type' => 'widget_three_links',
                    'value' => '["http:\\/\\/","http:\\/\\/","http:\\/\\/","http:\\/\\/","http:\\/\\/","http:\\/\\/",null]',
                    'created_at' => '2022-11-21 18:48:22',
                    'updated_at' => '2023-05-26 01:14:30',
                ),
            123 =>
                array(
                    'id' => 131,
                    'type' => 'widget_four',
                    'value' => 'Resources',
                    'created_at' => '2022-11-21 18:48:22',
                    'updated_at' => '2023-05-26 00:56:05',
                ),
            124 =>
                array(
                    'id' => 132,
                    'type' => 'widget_four_labels',
                    'value' => '["Help & Support","Success Stories","ConsultantEdu Reviews","Resources","Blog","Community"]',
                    'created_at' => '2022-11-21 18:48:22',
                    'updated_at' => '2023-07-28 12:21:44',
                ),
            125 =>
                array(
                    'id' => 133,
                    'type' => 'widget_four_links',
                    'value' => '["http:\\/\\/","http:\\/\\/","http:\\/\\/","http:\\/\\/",null,null]',
                    'created_at' => '2022-11-21 18:48:22',
                    'updated_at' => '2023-05-26 01:16:32',
                ),
            126 =>
                array(
                    'id' => 134,
                    'type' => 'app_link_android',
                    'value' => 'http://',
                    'created_at' => '2022-11-21 18:48:22',
                    'updated_at' => '2022-11-21 18:48:22',
                ),
            127 =>
                array(
                    'id' => 135,
                    'type' => 'app_link_apple',
                    'value' => 'http://',
                    'created_at' => '2022-11-21 18:48:22',
                    'updated_at' => '2022-11-21 18:48:22',
                ),
            128 =>
                array(
                    'id' => 136,
                    'type' => 'app_link_section_show',
                    'value' => 'on',
                    'created_at' => '2022-11-21 18:48:22',
                    'updated_at' => '2022-11-21 18:48:22',
                ),
            129 =>
                array(
                    'id' => 137,
                    'type' => 'disable_image_optimization',
                    'value' => '0',
                    'created_at' => '2022-11-21 18:48:22',
                    'updated_at' => '2022-11-21 18:48:22',
                ),
            130 =>
                array(
                    'id' => 138,
                    'type' => 'flutterwave_activation_checkbox',
                    'value' => '0',
                    'created_at' => '2023-02-23 08:05:30',
                    'updated_at' => '2023-04-06 12:22:44',
                ),
            131 =>
                array(
                    'id' => 139,
                    'type' => 'google_recaptcha_activation_checkbox',
                    'value' => '',
                    'created_at' => '2023-04-05 05:16:25',
                    'updated_at' => '2023-04-05 05:16:25',
                ),
            132 =>
                array(
                    'id' => 140,
                    'type' => 'fb_comment_activation_checkbox',
                    'value' => '',
                    'created_at' => '2023-04-05 05:16:25',
                    'updated_at' => '2023-04-05 05:16:25',
                ),
            133 =>
                array(
                    'id' => 141,
                    'type' => 'refund_percentage_on_project_cancellation',
                    'value' => '',
                    'created_at' => '2023-04-05 05:16:26',
                    'updated_at' => '2023-04-05 05:16:26',
                ),
            134 =>
                array(
                    'id' => 142,
                    'type' => 'refund_percentage_on_service_cancellation',
                    'value' => '',
                    'created_at' => '2023-04-05 05:16:26',
                    'updated_at' => '2023-04-05 05:16:26',
                ),
            135 =>
                array(
                    'id' => 143,
                    'type' => 'flutterwave_sandbox_checkbox',
                    'value' => '0',
                    'created_at' => '2023-04-06 12:22:44',
                    'updated_at' => '2023-04-06 12:22:44',
                ),
        ));
    }
}
