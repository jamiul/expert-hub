<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class ExpertAccountsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('expert_accounts')->delete();
    }
}
