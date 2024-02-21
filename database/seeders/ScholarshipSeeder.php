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
            $studentType = StudentType::tryFrom(trim($scholarship['student_type']));
            $scholarshipData = [
                'title' => trim($scholarship['scholarships_title']),
                'link' => trim($scholarship['scholarships_link']),
                'supervisor_link' =>  $scholarship['find_supervisor_link'] ?? null,
                'university_id' => $universityLookup[trim($scholarship['university'])] ?? null,
                'country_id' => $countryLookup[trim($scholarship['country'])] ?? null,
                'student_type' => $studentType ? $studentType->value : null,
                // 'automatic_consideration' => $scholarship['automatic_consideration']  == 'FALSE' ? 0 : 1,
                // 'deadline' => empty($scholarship['deadline']) ? null : Carbon::createFromFormat('d-m-Y',$scholarship['deadline']),
            ];
            $scholarship_id = DB::table('scholarships')->insertGetId($scholarshipData);
            
            $studyLevelData = [];
            foreach(explode(',', $scholarship['study_level']) as $studyLevel){
                $studyLevel = StudyLevel::tryFrom(trim($studyLevel));
                if($studyLevel){
                    $studyLevelData[] = [
                        'scholarship_id' => $scholarship_id,
                        'name' => $studyLevel->value,
                    ];
                }
            }
            DB::table('scholarship_study_levels')->insert($studyLevelData);

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

            $scholarshipAreaData = [];
            $studyAreaLookup = StudyField::pluck('id', 'name')->toArray();
            if($scholarship['study_area'] == 'All'){
                $studyAreas = $studyAreaLookup;
                foreach ($studyAreas as $studyArea) {
                    $scholarshipAreaData[] = [
                        'scholarship_id' => $scholarship_id,
                        'study_field_id' => $studyArea,
                    ];
                }
            }else{
                foreach (explode(',', $scholarship['study_area']) as $scholarshipArea) {
                    $studyAreaId = $studyAreaLookup[trim($scholarshipArea)] ?? null;
                    if($studyAreaId){
                        $scholarshipAreaData[] = [
                            'scholarship_id' => $scholarship_id,
                            'study_field_id' => $studyAreaId,
                        ];
                    }
                }
            }
            DB::table('scholarship_study_area')->insert($scholarshipAreaData);
        }
    }
}
