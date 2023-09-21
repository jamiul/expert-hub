<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class ProjectBidsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_bids')->delete();

        DB::table('project_bids')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'project_id' => 2,
                    'bid_by_user_id' => 4,
                    'amount' => 600.0,
                    'message' => 'I am working as a career counseling consultant. I will do your career counseling according to your career background and future planning. I also work as a education consultant for higher studies abroad. I will help you in applying for scholarships, email writing to companies/universities, cover letter writing, proposal writing and many more. Please don\'t hesitate to contact me for more details.',
                    'status' => 0,
                    'created_at' => '2023-04-06 17:15:17',
                    'updated_at' => '2023-04-06 17:15:17',
                    'deleted_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 2,
                    'project_id' => 3,
                    'bid_by_user_id' => 8,
                    'amount' => 350.0,
                    'message' => 'I will professionally proofread and edit your dissertation or thesis.

I will work on your custom offer with absolute professionalism. What I offer with this Gig is an in-depth read and edit of your text to carefully comb through for any errors. I have over six years of full-time thesis and dissertation editing experience.

I will give your document the edits it needs to make it shine, ensuring it is as polished as possible.

I offer three packages based on the length of the document.

Here is a brief list of what I offer:

Sentence Structure
Format editing
Grammar
Spelling
Punctuation
Wordiness
Edits for Clarity
Ensuring consistency of style throughout your manuscript.
Copyediting references and completing any missing information (References across all writing styles; APA, HAVARD, MLA).
Ensuring better transition, coherence, organization, logic, flow, etc.


If you have a special request, talk to me. I can turn your script into that dream you imagine it to be!

Thanks!',
                    'status' => 0,
                    'created_at' => '2023-04-06 17:59:27',
                    'updated_at' => '2023-04-06 17:59:27',
                    'deleted_at' => NULL,
                ),
            2 =>
                array(
                    'id' => 3,
                    'project_id' => 2,
                    'bid_by_user_id' => 6,
                    'amount' => 500.0,
                    'message' => 'I can do your project.',
                    'status' => 0,
                    'created_at' => '2023-04-06 18:17:28',
                    'updated_at' => '2023-04-06 18:17:28',
                    'deleted_at' => NULL,
                ),
            3 =>
                array(
                    'id' => 4,
                    'project_id' => 2,
                    'bid_by_user_id' => 8,
                    'amount' => 500.0,
                    'message' => 'I want to work with this project',
                    'status' => 0,
                    'created_at' => '2023-04-13 15:11:44',
                    'updated_at' => '2023-04-13 15:11:44',
                    'deleted_at' => NULL,
                ),
            4 =>
                array(
                    'id' => 5,
                    'project_id' => 8,
                    'bid_by_user_id' => 14,
                    'amount' => 100.0,
                    'message' => 'I am looking forward to work with this project',
                    'status' => 0,
                    'created_at' => '2023-04-15 01:38:20',
                    'updated_at' => '2023-04-15 01:38:20',
                    'deleted_at' => NULL,
                ),
            5 =>
                array(
                    'id' => 6,
                    'project_id' => 12,
                    'bid_by_user_id' => 6,
                    'amount' => 800.0,
                    'message' => 'I know who is the best university. InshaAllah you benefit by me.',
                    'status' => 0,
                    'created_at' => '2023-07-05 13:25:27',
                    'updated_at' => '2023-07-05 13:25:27',
                    'deleted_at' => NULL,
                ),
            6 =>
                array(
                    'id' => 7,
                    'project_id' => 12,
                    'bid_by_user_id' => 6,
                    'amount' => 800.0,
                    'message' => 'I know who is the best university. InshaAllah you benefit by me.',
                    'status' => 0,
                    'created_at' => '2023-07-05 13:27:04',
                    'updated_at' => '2023-07-05 13:27:04',
                    'deleted_at' => NULL,
                ),
            7 =>
                array(
                    'id' => 8,
                    'project_id' => 18,
                    'bid_by_user_id' => 6,
                    'amount' => 200.0,
                    'message' => 'I hope, I can do it perfectly.',
                    'status' => 0,
                    'created_at' => '2023-07-27 14:28:49',
                    'updated_at' => '2023-07-27 14:28:49',
                    'deleted_at' => NULL,
                ),
            8 =>
                array(
                    'id' => 9,
                    'project_id' => 17,
                    'bid_by_user_id' => 6,
                    'amount' => 100.0,
                    'message' => 'I hope I will do this project.',
                    'status' => 0,
                    'created_at' => '2023-08-09 19:52:18',
                    'updated_at' => '2023-08-09 19:52:18',
                    'deleted_at' => NULL,
                ),
            9 =>
                array(
                    'id' => 10,
                    'project_id' => 16,
                    'bid_by_user_id' => 6,
                    'amount' => 50.0,
                    'message' => 'I hope i will do this.',
                    'status' => 0,
                    'created_at' => '2023-08-09 19:55:57',
                    'updated_at' => '2023-08-09 19:55:57',
                    'deleted_at' => NULL,
                ),
        ));
    }
}
