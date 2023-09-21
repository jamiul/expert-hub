<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class SitePagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('site_pages')->delete();


    }
}
