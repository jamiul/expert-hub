<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SitePage;

class SitePagesTableSeeder extends Seeder
{
    public function run()
    {
        // Seed the "site_pages" table with sample data
        SitePage::create([
            'id' => '1',
            'title' => 'Default',
            'url' => '/',
            'user_id' => 1            
        ]);
        // Add more records as needed...
    }
}
