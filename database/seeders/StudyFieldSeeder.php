<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudyFieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $feed = database_path('data/studyFields.csv');
        $data = array_map('str_getcsv', file($feed));

        $studyFields = [];
        foreach ($data as $studyField) {
            $studyFields[] = [
                'name' => $studyField[0],
            ];
        }

        DB::table('study_fields')->insert($studyFields);
    }
}
