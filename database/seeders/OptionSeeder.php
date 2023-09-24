<?php

namespace Database\Seeders;

use App\Enums\OptionGroupEnum;
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
                'group' => OptionGroupEnum::BudgetAUD,
                'label' => 'Basic ($2 - 8 AUD per hour)',
                'value' => 'Basic ($2 - 8 AUD per hour)',
            ],
            [
                'group' => OptionGroupEnum::BudgetAUD,
                'label' => 'Moderate ($8 - 15 AUD per hour)',
                'value' => 'Moderate ($8 - 15 AUD per hour)',
            ],
            [
                'group' => OptionGroupEnum::BudgetAUD,
                'label' => 'Standard ($15 - 25 AUD per hour)',
                'value' => 'Standard ($15 - 25 AUD per hour)',
            ],
            [
                'group' => OptionGroupEnum::BudgetAUD,
                'label' => 'Skilled ($25 - 50 AUD per hour)',
                'value' => 'Skilled ($25 - 50 AUD per hour)',
            ],
            [
                'group' => OptionGroupEnum::BudgetAUD,
                'label' => 'Expert ($50+ AUD per hour)',
                'value' => 'Expert ($50+ AUD per hour)',
            ],
            [
                'group' => OptionGroupEnum::BudgetUSD,
                'label' => 'Basic ($2 - 8 USD per hour)',
                'value' => 'Basic ($2 - 8 USD per hour)',
            ],
            [
                'group' => OptionGroupEnum::BudgetUSD,
                'label' => 'Moderate ($8 - 15 USD per hour)',
                'value' => 'Moderate ($8 - 15 USD per hour)',
            ],
            [
                'group' => OptionGroupEnum::BudgetUSD,
                'label' => 'Standard ($15 - 25 USD per hour)',
                'value' => 'Standard ($15 - 25 USD per hour)',
            ],
            [
                'group' => OptionGroupEnum::BudgetUSD,
                'label' => 'Skilled ($25 - 50 USD per hour)',
                'value' => 'Skilled ($25 - 50 USD per hour)',
            ],
            [
                'group' => OptionGroupEnum::BudgetUSD,
                'label' => 'Expert ($50+ USD per hour)',
                'value' => 'Expert ($50+ USD per hour)',
            ],
        ]);
    }
}
