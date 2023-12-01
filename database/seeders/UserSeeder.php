<?php

namespace Database\Seeders;

use App\Enums\UserType;
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
        $users = [
            [
                'user_type' => UserType::Client,
                'title' => 'Mr',
                'first_name' => 'John',
                'last_name' => 'Doe',
                'username' => 'john-doe',
                'email' => 'john@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('12345678'),
                'country_id' => 1,
            ],
        ];

        DB::table('users')->insert([
            ['email' => 'picard@example.com', 'votes' => 0],
            ['email' => 'janeway@example.com', 'votes' => 0],
        ]);
    }
}
