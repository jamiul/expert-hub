<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\University;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Str;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        University::truncate();
        $feed = database_path('data/universities.csv');
        $data = array_map('str_getcsv', file($feed));

        $universities = [];
        $countryLookup = Country::pluck('id', 'name')->toArray();
        foreach ($data as $university) {
            if(isset($countryLookup[$university[0]])){
                $universities[] = [
                    'country_id' => $countryLookup[$university[0]],
                    'name' => $university[1],
                ];
            }
        }

        DB::table('universities')->insert($universities);
        $australianUniversities = University::where('country_id', $countryLookup['Australia'])->get();
        foreach($australianUniversities as $university){
            $logoFileName = Str::snake($university->name) . '.png';
            $imagePath = database_path('/data/university-logos/australia/' . $logoFileName);
            if(file_exists($imagePath)){
                $university->addMedia($imagePath)
                    ->preservingOriginal()
                    ->usingName($logoFileName)
                    ->toMediaCollection('logo');
            }
        } 
    }
}
