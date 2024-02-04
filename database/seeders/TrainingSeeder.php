<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Expertise;
use App\Models\Language;
use App\Models\State;
use App\Models\Training;
use App\Models\TrainingInstructor;
use App\Models\TrainingPartner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class TrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Training::truncate();
        $summary = 'This two-day online course introduces participants to the state-of-the-art of partial least squares structural equation modeling (PLS-SEM) using the SmartPLS 4 software. PLS is a composite-based approach to SEM. Compared to other SEM techniques, PLS-SEM allows researchers to estimate very complex models with many constructs and indicators. Furthermore, the method allows estimating reflectively and formatively specified constructs and generally offers much flexibility in terms of data requirements.
Several review studies substantiate that PLS-SEM has become a standard method in various research fields, including higher education (Ghasemy et al. 2020 | Higher Education), human resource management (Ringle et al., 2018 | International Journal of Human Resource Management), hospitality management (Ali et al., 2018 | International Journal of Contemporary Hospitality Management), information systems research (Hair et al., 2017 | Industrial Management & Data Systems), Management Accounting (Nitzl, 2016 | Journal of Accounting Literature), international business (Richter et al., 2016 | International Marketing Review), tourism (do Valle and Assaker, 2016 | Journal of Travel Research), psychology (Willaby et al., 2015 | Personality and Individual Differences), supply chain management (Kaufmann and Gaeckler, 2015 | Journal of Purchasing and Supply Management), family business (Sarstedt et al., 2014 | Journal of Family Business Strategy), operations management (Peng and Lai, 2012 | Journal of Operations Management), strategic management (Hair et al., 2012 | Long Range Planning), marketing (Sarstedt et al., 2022 | Psychology & Marketing), management information systems (Ringle et al., 2012 | MIS Quarterly), accounting (Lee et al., 2011 | International Journal of Accounting Information Systems), software engineering (Russo & Stol, 2021 | ACM Computing Surveys), and international marketing (Henseler et al., 2009 | Advances in International Marketing).
The first day of the course provides a profound introduction to latent variable models and PLS-SEM. Participants will learn the foundations of PLS-SEM and how to apply it by means of the SmartPLS 4 software. The second day will cover the evaluation of the measurement and structural models, including recent developments in model evaluation. The instructors will make use of several examples and hands-on exercises using the SmartPLS 4 software.';
        $feed = database_path('data/trainings.csv');
        $data = array_map('str_getcsv', file($feed));
        $keys = array_shift($data);
        //Add label to each value
        $keyedData = array_map(function ($values) use ($keys) {
            return array_combine($keys, $values);
        }, $data);
        $countryLookup = Country::pluck('id', 'name')->toArray();
        $stateLookup = State::pluck('id', 'name')->toArray();
        $languageLookup = Language::pluck('id', 'name')->toArray();
        $categoryLookup = Expertise::expertise()->isParent()->pluck('id', 'name')->toArray();
        foreach($keyedData as $data){
            $trainingData = [
                'title' => $data['title'],
                'fee' => $data['fee'],
                'country_id' => isset($countryLookup[$data['country']]) ? $countryLookup[$data['country']] : null,
                'state_id' => isset($stateLookup[$data['state']]) ? $stateLookup[$data['state']] : null,
                'time_zone' => null,
                'mode' => $data['mode'],
                'link' => $data['link'],
                'language_id' => isset($languageLookup[$data['language']]) ? $languageLookup[$data['language']] : null,
                'expertise_id' => isset($categoryLookup[$data['category']]) ? $categoryLookup[$data['category']] : null,
                'summary' => $summary,
                'outline' => $summary,
                'outcomes' => $summary,
                'assesments' => $summary,
                'activities' => $summary,
                'resources' => $summary,
                'prescribed_materials' => $summary,
                'recommended_reading' => $summary,
                'start_date' => Carbon::parse($data['start_date']),
                'end_date' => Carbon::parse($data['end_date']),
                'start_time' => $data['start_time'],
                'end_time' => $data['end_time'],
                'status' => 'Active',
            ];
            $training_id = DB::table('trainings')->insertGetId($trainingData);
            $training = Training::find($training_id);
            $training->instructors()->sync([2,3]);
            $training->partners()->sync([2,3]);
        }
    }
}
