<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PersonalAccessTokensTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('personal_access_tokens')->delete();


    }
}
