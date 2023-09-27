<?php

namespace Database\Seeders;

use App\Models\Experts;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExpertsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run()
    {
        DB::table('experts')->delete();

        $feed = public_path("experts.csv");

        // Read the CSV and return as an array
        $data = array_map('str_getcsv', file($feed));

        $parentExperts = array_shift($data);

        // add parent id to experts table
        foreach ($parentExperts as $parent) {
            $parent = Experts::create([
                'name' => $parent,
                'parent_id' => null,
            ]);
        }

        // add child experts with parent id
        foreach ($data as $row) {
            foreach ($row as $key => $name) {
                if (!empty($name)) {
                    Experts::create([
                        'name' => $name,
                        'parent_id' => $key + 1, // Use $key as the parent_id
                    ]);
                }
            }
        }
    }
}
