<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class AddonsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('addons')->delete();
    }
}
