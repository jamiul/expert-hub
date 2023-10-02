<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CountryFlagSeederUpdate extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        //UPDATE `countries` SET photo = CONCAT(LOWER(code),'.png')
        DB::table( 'countries' )
          ->update( [ 'photo' => DB::raw( "CONCAT(LOWER(code),'.png')" ) ] );
    }
}
