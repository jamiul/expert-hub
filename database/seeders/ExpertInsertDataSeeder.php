<?php

namespace Database\Seeders;

use App\Models\Experts;
use Illuminate\Database\Seeder;





class ExpertInsertDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */







    public function run()
    {
        $feed = public_path("expertiseInsert.csv");

        // Read the CSV and return as an array
        $data = array_map('str_getcsv', file($feed));
        $keys = array_shift($data);

        // Initialize parent as null for the first row
        $parent = null;

        foreach ($data as $row) {
            // Create a new expert record for each value in the row
            foreach ($row as $value) {
                if ($parent === null) {
                    // The first value in each row is a parent
                    $parent = Experts::create([
                        'name' => $value,
                        'parent_id' => null,
                    ]);
                } else {
                    // All subsequent values in the row are children
                    Experts::create([
                        'name' => $value,
                        'parent_id' => $parent->id,
                    ]);
                }
            }

            // Reset parent to null for the next row
            $parent = null;
        }
    }

}
