<?php

namespace Database\Seeders;

use App\Enums\ProjectStatus;
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
        Project::truncate();

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
                'budget_start_amount' => $project['budget_start_amount'],
                'budget_end_amount' => $project['budget_end_amount'],
                'status' => ProjectStatus::Published,
            ];
        }

        DB::table('projects')->insert($projects);
    }
}
