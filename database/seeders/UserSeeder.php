<?php

namespace Database\Seeders;

use App\Enums\ProfileStatus;
use App\Enums\ProfileType;
use App\Models\Country;
use App\Models\Expertise;
use App\Models\ExpertKYC;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
                'first_name' => $user['first_name'],
                'last_name' => $user['last_name'],
                'username' => $user['first_name'] . '-' . $user['last_name'],
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
                    'current_role' => 'Director',
                    'current_organization' => 'Sydney Islamic Business School',
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
            }
        }
    }
}
