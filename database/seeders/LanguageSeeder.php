<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Language::truncate();

        $feed = database_path('data/languages.csv');
        $data = array_map('str_getcsv', file($feed));

        $languages = [];
        foreach ($data as $language) {
            $languages[] = [
                'code' => $language[0],
                'name' => $language[1],
            ];
        }

        DB::table('languages')->insert($languages);
    }
}
