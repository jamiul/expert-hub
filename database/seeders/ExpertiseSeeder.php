<?php

namespace Database\Seeders;

use App\Models\Expertise;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExpertiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $expertise = database_path('data/expertise.csv');
        $skillset = database_path('data/skillset.csv');

        foreach([$expertise, $skillset] as $feed){
            // Read the CSV and return as an array
            $data = array_map('str_getcsv', file($feed));
            $parentExperts = array_shift($data);

            // add parent id to experts table
            $parents = [];
            foreach ($parentExperts as $parent) {
                $parents[] = [
                    'name' => $parent,
                    'parent_id' => null,
                ];
            }
            DB::table('expertises')->insert($parents);

            // add child experts with parent id
            $childs = [];
            foreach ($data as $row) {
                foreach ($row as $key => $name) {
                    if (!empty($name)) {
                        $childs[] = [
                            'name' => $name,
                            'parent_id' => $key + 1, // Use $key as the parent_id
                        ];
                    }
                }
            }
            DB::table('expertises')->insert($childs);
        }
    }
}
