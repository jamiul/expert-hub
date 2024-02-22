<?php

namespace Database\Seeders;

use App\Enums\ProfileStatus;
use App\Enums\ProfileType;
use App\Models\Country;
use App\Models\Education;
use App\Models\Expertise;
use App\Models\ExpertKYC;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();
        $feed = database_path('data/users.csv');
        $data = array_map('str_getcsv', file($feed));
        $keys = array_shift($data);
        //Add label to each value
        $keyedData = array_map(function ($values) use ($keys) {
            return array_combine($keys, $values);
        }, $data);
        $countryLookup = Country::pluck('id','name')->toArray();
        foreach($keyedData as $user){
            $userData = [
                'active_profile' => $user['type'],
                'title' => $user['title'],
                'first_name' => $user['last_name'],
                'last_name' => $user['last_name'],
                'username' => Str::uuid(),
                'email' => $user['email'],
                'email_verified_at' => now(),
                'password' => Hash::make($user['password']),
                'country_id' => $countryLookup[$user['country']],
            ];
            $user_id = DB::table('users')->insertGetId($userData);
            $profile_id = DB::table('profiles')->insertGetId([
                'user_id' => $user_id,
                'type' => $user['type'],
                'status' => ProfileStatus::Draft->name,
            ]);
            if ($user['type'] == ProfileType::Client->value) {
                $profile = Profile::find($profile_id);
                $profile->update([
                    'current_job_title' => 'Director',
                    'current_job_organization' => 'Sydney Islamic Business School',
                    'current_job_sector' => 'Education',
                ]);
                if ($user['image']) {
                    $imagePath = database_path('/data/users/' . $user['image']);
                    $imageName = $user['image'];
                } else {
                    $imagePath = database_path('/data/users/dummy-user.png');
                    $imageName = 'dummy-user.png';
                }
                $profile->addMedia($imagePath)
                    ->preservingOriginal()
                    ->usingName($imageName)
                    ->toMediaCollection('picture');
            }
            if($user['type'] == ProfileType::Expert->value){
                $profile = Profile::find($profile_id);
                if($user['image']){
                    $imagePath = database_path('/data/users/' . $user['image']);
                    $imageName = $user['image'];
                }else{
                    $imagePath = database_path('/data/users/dummy-user.png');
                    $imageName = 'dummy-user.png';
                }
                $profile->addMedia($imagePath)
                    ->preservingOriginal()
                    ->usingName($imageName)
                    ->toMediaCollection('picture');
                $profile->update([
                    'expert_category_id' => $user['category'],
                    'expertise_id' => $user['expertise'],
                    'biography' => $user['biography'],
                    'hourly_rate' => fake()->randomElement([50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150, 160, 170, 180, 190, 200]),
                ]);
                $profile->expertises()->attach(Expertise::inRandomOrder()->skill()->isChild()->limit(9)->pluck('id')->toArray());
                ExpertKYC::create([
                    'user_id' => $user_id,
                    'status'  => 1
                ]);
                $profile->education()->create([
                    'institution' => 'Western Sydney University',
                    'degree' => 'Doctor of Engineering (DEng)',
                    'field' => 'Engineering',
                    'start_year' => '2005',
                    'end_year' => '2009',
                ]);
                $profile->experiences()->create([
                    'title' => 'Professor',
                    'institute' => 'Western Sydney University',
                    'address' => 'Sydney, Australia',
                    'start_year' => '2012',
                    'end_year' => '2020',
                ]);
                $profile->languages()->attach(15, ['proficiency' => 'Conversational']);
            }
        }
    }
}
