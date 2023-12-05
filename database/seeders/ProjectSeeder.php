<?php

namespace Database\Seeders;

use App\Enums\ProjectStatus;
use App\Models\Expertise;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $feed = database_path('data/projects.csv');
        $data = array_map('str_getcsv', file($feed));
        $keys = array_shift($data);
        //Add label to each value
        $keyedData = array_map(function ($values) use ($keys) {
            return array_combine($keys, $values);
        }, $data);

        $projects = [];
        $client = User::client()->first();
        foreach ($keyedData as $project) {
            $projects[] = [
                'user_id' => $client->id,
                'title' => $project['title'],
                'slug' => Str::slug($project['title']) . now(),
                'description' => $project['description'],
                'type' => $project['type'],
                'currency_id' => 1,
                'budget_start_amount' => intval($project['budget_start_amount']),
                'budget_end_amount' => intval($project['budget_end_amount']),
                'status' => ProjectStatus::Published,
            ];
            $projectSkills[] = $project['skills'];
        }

        DB::table('projects')->insert($projects);
        $projectSkillsArray = [];
        foreach($projectSkills as $key => $skills){
            $skillArray = explode(',', $skills);
            foreach($skillArray as $skill){
                $expertise = Expertise::where('name', $skill)->first();
                if($expertise){
                    $projectSkillsArray[] = [
                        'project_id' => $key + 1,
                        'expertise_id' => $expertise->id,
                    ];
                }
            }
        }
        DB::table('project_skill')->insert($projectSkillsArray);
    }
}
