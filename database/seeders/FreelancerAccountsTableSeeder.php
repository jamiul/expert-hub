<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class FreelancerAccountsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('freelancer_accounts')->delete();


    }
}
