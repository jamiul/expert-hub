<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $feed = database_path('data/titles.csv');
        $data = array_map('str_getcsv', file($feed));

        $titles = [];
        foreach ($data as $title) {
            $titles[] = [
                'name' => $title[0],
            ];
        }

        DB::table('titles')->insert($titles);
    }
}
