<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $feed = database_path('data/states.csv');
        $data = array_map('str_getcsv', file($feed));
        $keys = array_shift($data);
        //Add label to each value
        $keyedData = array_map(function ($values) use ($keys) {
            return array_combine($keys, $values);
        }, $data);
        $countryLookup = Country::pluck('id', 'name')->toArray();
        $states = [];
        foreach ($keyedData as $state) {
            $states[] = [
                'country_id' => $countryLookup[$state['country']],
                'code' => $state['code'],
                'name' => $state['state_name'],
            ];
        }

        DB::table('states')->insert($states);
    }
}
