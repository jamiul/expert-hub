<?php

namespace Database\Seeders;

use App\Models\Expertise;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExpertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)
            ->has(
                Profile::factory()
                ->hasAttached(Expertise::skill()->isChild()->limit(5)->get())
                ->count(1)
            )
            ->create();
    }
}
