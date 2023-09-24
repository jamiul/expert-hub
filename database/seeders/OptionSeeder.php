<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('options')->insert([
            [
                'group' => 'budget_aud',
                'label' => 'Basic ($2 - 8 AUD per hour)',
                'value' => 'Basic ($2 - 8 AUD per hour)',
            ],
            [
                'group' => 'budget_aud',
                'label' => 'Moderate ($8 - 15 AUD per hour)',
                'value' => 'Moderate ($8 - 15 AUD per hour)',
            ],
            [
                'group' => 'budget_aud',
                'label' => 'Standard ($15 - 25 AUD per hour)',
                'value' => 'Standard ($15 - 25 AUD per hour)',
            ],
            [
                'group' => 'budget_aud',
                'label' => 'Skilled ($25 - 50 AUD per hour)',
                'value' => 'Skilled ($25 - 50 AUD per hour)',
            ],
            [
                'group' => 'budget_aud',
                'label' => 'Expert ($50+ AUD per hour)',
                'value' => 'Expert ($50+ AUD per hour)',
            ],
            [
                'group' => 'budget_usd',
                'label' => 'Basic ($2 - 8 USD per hour)',
                'value' => 'Basic ($2 - 8 USD per hour)',
            ],
            [
                'group' => 'budget_usd',
                'label' => 'Moderate ($8 - 15 USD per hour)',
                'value' => 'Moderate ($8 - 15 USD per hour)',
            ],
            [
                'group' => 'budget_usd',
                'label' => 'Standard ($15 - 25 USD per hour)',
                'value' => 'Standard ($15 - 25 USD per hour)',
            ],
            [
                'group' => 'budget_usd',
                'label' => 'Skilled ($25 - 50 USD per hour)',
                'value' => 'Skilled ($25 - 50 USD per hour)',
            ],
            [
                'group' => 'budget_usd',
                'label' => 'Expert ($50+ USD per hour)',
                'value' => 'Expert ($50+ USD per hour)',
            ],
        ]);
    }
}
