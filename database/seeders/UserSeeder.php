<?php

namespace Database\Seeders;

use App\Enums\ProfileStatus;
use App\Enums\UserType;
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
                'type' => $user['type'],
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
            DB::table('profiles')->insert([
                'user_id' => $user_id,
                'status' => ProfileStatus::Draft->name,
            ]);
        }
    }
}
