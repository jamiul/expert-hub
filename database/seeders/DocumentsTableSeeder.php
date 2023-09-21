<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class DocumentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('documents')->delete();


    }
}
