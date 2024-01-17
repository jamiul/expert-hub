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
        $keys = array_shift($data);
        //Add label to each value
        $keyedData = array_map(function ($values) use ($keys) {
            return array_combine($keys, $values);
        }, $data);
        $universities = [];
        $countryLookup = Country::pluck('id', 'name')->toArray();
        foreach ($keyedData as $university) {
            if(isset($countryLookup[$university['country']])){
                $universityData = [
                    'country_id' => $countryLookup[$university['country']],
                    'name' => $university['university'],
                    'website' => $university['url'],
                ];
                $university_id = DB::table('universities')->insertGetId($universityData);
                $universityModel = University::find($university_id);

                $logoFileName = $university['logo'];
                $imagePath = database_path('/data/university-logos/australia/' . $logoFileName);
                if (file_exists($imagePath)) {
                    $universityModel->addMedia($imagePath)
                        ->preservingOriginal()
                        ->usingName($logoFileName)
                        ->toMediaCollection('logo');
                }
            }
        }
    }
}
