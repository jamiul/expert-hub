<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PageOptimizationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_optimizations')->delete();


    }
}
