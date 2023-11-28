<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'EduExHub Admin',
                'user_type' => 'admin',
                'email' => 'admin@eduexhub.com',
                'password' => bcrypt('consultantEdu*#360')
            ],
            [
                'name' => 'Mr. Client',
                'user_type' => 'client',
                'user_name' => 'mr-client',
                'email' => 'client@gmail.com',
                'password' => bcrypt('client123')
            ],
            [
                'name' => 'Mr. Expert',
                'user_type' => 'expert',
                'user_name' => 'mr-expert',
                'email' => 'expert@gmail.com',
                'password' => bcrypt('expert123')
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }

        $feed = database_path("/data/users.csv");

        // Read the CSV and return as an array
        $data = array_map('str_getcsv', file($feed));
        $header = array_shift($data);

        foreach ($data as $key => $row) {

            User::create([
                'user_type' => $row[0] ?? null,
                'name' => $row[2] . ' ' . $row[3],
                'user_name' => $row[4] ?? '',
                'email' => $row[5] ?? null,
                'password' => bcrypt('eduexhub123')
            ]);
        }

    }
}
