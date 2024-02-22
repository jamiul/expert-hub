<?php

namespace Database\Seeders;

use App\Enums\Scholarship\FundType;
use App\Enums\Scholarship\StudentType;
use App\Enums\Scholarship\StudyLevel;
use App\Models\Country;
use App\Models\Expertise;
use App\Models\Scholarship;
use App\Models\StudyField;
use App\Models\University;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ScholarshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Scholarship::truncate();
        $feed = database_path('data/scholarships.csv');
        $data = array_map('str_getcsv', file($feed));
        $keys = array_shift($data);
        //Add label to each value
        $keyedData = array_map(function ($values) use ($keys) {
            return array_combine($keys, $values);
        }, $data);

        $universityLookup = University::pluck('id', 'name')->toArray();
        $countryLookup = Country::pluck('id', 'name')->toArray();
        foreach ($keyedData as $scholarship) {
            $university = University::where('name', trim($scholarship['organization']))->first();
            $logo = $university ? $university->logo : null;
            $scholarshipData = [
                'title' => trim($scholarship['scholarships_title']),
                'organization' => trim($scholarship['organization']),
                'logo' => $logo,
                'summary' => trim($scholarship['summary']),
                'link' => trim($scholarship['scholarships_link']),
                'supervisor_link' =>  $scholarship['find_supervisor_link'] ?? null,
                'country_id' => $countryLookup[trim($scholarship['country'])] ?? null,
            ];
            $scholarship_id = DB::table('scholarships')->insertGetId($scholarshipData);

            $scholarshipFundData = [];
            foreach(explode(',', $scholarship['fund_type']) as $scholarshipFund){
                $fundType = FundType::tryFrom(trim($scholarshipFund));
                if($fundType){
                    $scholarshipFundData[] = [
                        'scholarship_id' => $scholarship_id,
                        'name' => $fundType->value,
                    ];
                }
            }
            DB::table('scholarship_fund_types')->insert($scholarshipFundData);
        }
    }
}
