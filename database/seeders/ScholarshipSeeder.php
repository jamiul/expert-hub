<?php

namespace Database\Seeders;

use App\Models\Expertise;
use App\Models\Scholarship;
use App\Models\University;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScholarshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $feed = database_path('data/scholarships.csv');
        $data = array_map('str_getcsv', file($feed));
        $keys = array_shift($data);
        //Add label to each value
        $keyedData = array_map(function ($values) use ($keys) {
            return array_combine($keys, $values);
        }, $data);

        $universityLookup = University::pluck('id', 'name')->toArray();
        foreach ($keyedData as $scholarship) {
            $scholarshipData = [
                'title' => $scholarship['title'],
                'link' => $scholarship['link'],
                'university_id' => $universityLookup[$scholarship['university']],
                'student_type' => $scholarship['student_type'],
                'supervisor_link' => $scholarship['supervisor_link'],
                'application_process_link' => $scholarship['application_process_link'],
                'automatic_consideration' => $scholarship['automatic_consideration']  == 'FALSE' ? 0 : 1,
                'deadline' => empty($scholarship['deadline']) ? null : $scholarship['deadline'],
                'currency' => $scholarship['currency'],
                'value' => empty($scholarship['value']) ? null : $scholarship['value'],
            ];
            $scholarship_id = DB::table('scholarships')->insertGetId($scholarshipData);
            
            $studyLevelData = [];
            foreach(explode(',', $scholarship['study_level']) as $studyLevel){
                $studyLevelData[] =[
                    'scholarship_id' => $scholarship_id,
                    'study_level' => $studyLevel,
                ];
            }
            DB::table('scholarship_eligibilities')->insert($studyLevelData);

            $scholarshipFundData = [];
            foreach(explode(',', $scholarship['fund_type']) as $scholarshipFund){
                $scholarshipFundData[] =[
                    'scholarship_id' => $scholarship_id,
                    'fund_type' => $scholarshipFund,
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
                    $expertiseId = $expertiseLookup[$scholarshipArea];
                    $scholarshipAreaData[] = [
                        'scholarship_id' => $scholarship_id,
                        'expertise_id' => $expertiseId,
                    ];
                }
            }
            DB::table('scholarship_area')->insert($scholarshipAreaData);
        }
    }
}
