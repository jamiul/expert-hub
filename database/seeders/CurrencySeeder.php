<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $feed = database_path('data/currencies.csv');
        $data = array_map('str_getcsv', file($feed));

        $currencies = [];
        foreach ($data as $country) {
            $currencies[] = [
                'name' => $country[0],
                'symbol' => $country[1],
                'code' => $country[2],
            ];
        }

        DB::table('currencies')->insert($currencies);
    }
}
