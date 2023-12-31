<?php

namespace Database\Seeders;

use App\Models\AboutApart;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutApartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $feed = database_path('data/aboutApart.csv');
        $data = array_map('str_getcsv', file($feed));
        $keys = array_shift($data);
        //Add label to each value
        $keyedData = array_map(function ($values) use ($keys) {
            return array_combine($keys, $values);
        }, $data);

        foreach ($keyedData as $apart) {
            $apart_id = DB::table('about_aparts')->insertGetId([
                'about_us_id' => $apart['about_us_id'],
                'set_title' => $apart['set_title'],
                'description' => $apart['description'],
                'icon' => $apart['icon'],
                'type' => $apart['type'],
                'active' => 1,
            ]);

            $imagePath = database_path('/data/about/' . $apart['icon']);
            $aboutApart = AboutApart::find($apart_id);
            $aboutApart->addMedia($imagePath)
                ->preservingOriginal()
                ->usingName($apart['icon'])
                ->toMediaCollection('icon');
        }
    }
}
