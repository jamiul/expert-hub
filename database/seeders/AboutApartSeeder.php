<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutApartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('about_aparts')->insert([
            'about_us_id' => 1,
            'set_title' => 'A Wealth of Expertise',
            'description' => 'EduExHub takes pride in its extensive and diverse network of distinguished academic experts spanning various fields and disciplines.',
            'icon' => 'frontend/img/tab-icon.png',
            'type' => 'client',
            'active' => 1
        ]);
    }
}
