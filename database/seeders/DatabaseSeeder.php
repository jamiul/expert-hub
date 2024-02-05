<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ExpertiseSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(StateSeeder::class);
        $this->call(LanguageSeeder::class);
        $this->call(CurrencySeeder::class);
        $this->call(UniversitySeeder::class);
        $this->call(DegreeSeeder::class);
        $this->call(TitleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(EoiSeeder::class);
        $this->call(ScholarshipSeeder::class);
        $this->call(TrainingSeeder::class);
        $this->call(AboutUsSeeder::class);
        $this->call(AboutApartSeeder::class);
    }
}
