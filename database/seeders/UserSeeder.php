<?php

namespace Database\Seeders;

use App\Enums\ProfileStatus;
use App\Enums\ProfileType;
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
                'country_id' => 1,
            ];
            $user_id = DB::table('users')->insertGetId($userData);
            $profile_id = DB::table('profiles')->insertGetId([
                'user_id' => $user_id,
                'type' => $user['type'],
                'status' => ProfileStatus::Draft->name,
            ]);
            if($user['type'] == ProfileType::Expert->value){
                $profile = Profile::find($profile_id);
                $imagePath = database_path('/data/users/'. $user['image']);
                $profile->addMedia($imagePath)
                    ->preservingOriginal()
                    ->usingName($user['image'])
                    ->toMediaCollection('picture');
                $profile->update(['expertise_id' => $user['expertise']]);
            }
        }
    }
}
