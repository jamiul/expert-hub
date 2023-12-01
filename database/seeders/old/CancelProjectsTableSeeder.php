<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class CancelProjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('cancel_projects')->delete();


    }
}
