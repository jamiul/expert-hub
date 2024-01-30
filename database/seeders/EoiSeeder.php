<?php

namespace Database\Seeders;

use App\Enums\EoiStatus;
use App\Enums\MilestoneStatus;
use App\Models\Eoi;
use App\Models\Milestone;
use App\Models\Profile;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EoiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Eoi::truncate();
        $projects = Project::inRandomOrder()->limit(5)->get();
        $expert = Profile::expert()->first();
        foreach($projects as $project){
            $eoi = Eoi::create([
                'project_id' => $project->id,
                'expert_id' => $expert->id,
                'amount' => $project->budget_start_amount,
                'duration' => fake()->randomElement(['15 Days', '30 Days', '90 Days', '180 Days']),
                'cover_letter' => fake()->paragraph(),
                'status' => EoiStatus::Submitted,
            ]);

            Milestone::create([
                'eoi_id' => $eoi->id,
                'title' => $project->title,
                'due_date' => now(),
                'amount' => $eoi->amount,
                'status' => MilestoneStatus::Pending,
            ]);
        }
    }
}
