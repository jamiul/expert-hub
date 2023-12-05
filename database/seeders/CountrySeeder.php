<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $feed = database_path('data/countries.csv');
        $data = array_map('str_getcsv', file($feed));

        $countries = [];
        foreach($data as $country){
            $countries[] = [
                'code' => $country[0],
                'name' => $country[1],
            ];
        }
        
        DB::table('countries')->insert($countries);
    }
}
