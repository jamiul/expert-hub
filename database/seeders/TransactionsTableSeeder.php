<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class TransactionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->delete();


    }
}