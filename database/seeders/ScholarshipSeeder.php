<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Expertise;
use App\Models\Scholarship;
use App\Models\University;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            $scholarshipData = [
                'title' => trim($scholarship['scholarships_title']),
                'link' => trim($scholarship['scholarships_link']),
                'university_id' => $universityLookup[trim($scholarship['university'])] ?? null,
                'country_id' => $countryLookup[trim($scholarship['country'])] ?? null,
                'student_type' => trim($scholarship['student_type']),
                'automatic_consideration' => $scholarship['automatic_consideration']  == 'FALSE' ? 0 : 1,
                'deadline' => empty($scholarship['deadline']) ? null : Carbon::createFromFormat('d-m-Y',$scholarship['deadline']),
            ];
            $scholarship_id = DB::table('scholarships')->insertGetId($scholarshipData);
            
            $studyLevelData = [];
            foreach(explode(',', $scholarship['study_level']) as $studyLevel){
                $studyLevelData[] =[
                    'scholarship_id' => $scholarship_id,
                    'study_level' => trim($studyLevel),
                ];
            }
            DB::table('scholarship_eligibilities')->insert($studyLevelData);

            $scholarshipFundData = [];
            foreach(explode(',', $scholarship['fund_type']) as $scholarshipFund){
                $scholarshipFundData[] =[
                    'scholarship_id' => $scholarship_id,
                    'fund_type' => trim($scholarshipFund),
                ];
            }
            DB::table('scholarship_funds')->insert($scholarshipFundData);

            $scholarshipAreaData = [];
            $expertiseLookup = Expertise::expertise()->isParent()->pluck('id', 'name')->toArray();
            if($scholarship['study_area'] == 'All'){
                $expertises = $expertiseLookup;
                foreach ($expertises as $expertise) {
                    $scholarshipAreaData[] = [
                        'scholarship_id' => $scholarship_id,
                        'expertise_id' => $expertise,
                    ];
                }
            }else{
                foreach (explode(',', $scholarship['study_area']) as $scholarshipArea) {
                    $expertiseId = $expertiseLookup[trim($scholarshipArea)] ?? null;
                    if($expertiseId){
                        $scholarshipAreaData[] = [
                            'scholarship_id' => $scholarship_id,
                            'expertise_id' => $expertiseId,
                        ];
                    }
                }
            }
            DB::table('scholarship_area')->insert($scholarshipAreaData);
        }
    }
}
