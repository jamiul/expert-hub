<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PageOptimization;

class PageOptimizationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PageOptimization::create([
            'id' => '1',
            'page_id' => 1,
            'title' => 'Consultant Edu',
            'keyword' => 'Course Accreditations, Instructional Designer, Curriculum Developer, Subject Matter, Expert, Accreditation Specialist, Education Consultant, Learning Designer, Assessment Coordinator, Quality Assurance Analyst, Content Writer, Researcher',
            'description' => 'Education system',
            'user_id' => 1
        ]);
    }
}
