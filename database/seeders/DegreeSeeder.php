<?php

namespace Database\Seeders;

use App\Models\Degree;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DegreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $feed = database_path('data/degrees.csv');
        $data = array_map('str_getcsv', file($feed));

        $degrees = [];
        foreach ($data as $degree) {
            $degrees[] = [
                'name' => $degree[0],
            ];
        }

        DB::table('degrees')->insert($degrees);
    }
}
