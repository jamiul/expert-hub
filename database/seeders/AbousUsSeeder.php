<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AbousUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('about_us')->insert([
            'header_title' => 'Welcome to EduExHub',
            'header_subtitle' => NULL,
            'header_image' => 'assets/frontend/img/about-banner.jpg',
            'header_description' => 'Welcome to EduExHub, your premier destination for connecting with top academic experts across a diverse spectrum of fields and disciplines. Whether you represent a higher education institution, a media organisation, or are an individual seeking expert guidance for your academic pursuits, EduExHub is your ultimate resource for empowerment.

            At EduExHub, we proudly provide an extensive and diverse network of distinguished academic professionals, ensuring that you have access to highly qualified experts with specialised knowledge tailored to your unique requirements. Our global platform transcends borders, providing you with an international perspective that proves invaluable when addressing global or cross-cultural educational challenges and opportunities.

            Our comprehensive suite of services caters to a wide spectrum of needs, including but not limited to course accreditations, curriculum development, program design, policy formulation, scholarship advice, and complete educational project management. With our intuitive user interface, you can effortlessly post academic projects, review expressions of interest from our top academic experts, and make informed decisions that align with your project goals. Furthermore, we prioritise security by securely holding payments in escrow until project completion, ensuring satisfaction in every collaboration.',
            'instructor_title' => 'Meet Our Top Instructor for Consultation',
            'instructor_list' => NULL,
            'mission_image' => 'assets/frontend/img/mission-img.jpg',
            'mission_description' => '2U believes in the power of high-quality online education to create a better future for all. Through edX, our online learning platform, we see a world where learners everywhere have access to…

            2U believes in the power of high-quality online education to create a better future for all. Through edX, our online learning platform, we see a world where learners everywhere have access to…2U believes in the power of high-quality online education to create a better future for all. Through edX, our online learning platform, we see a world where learners everywhere have access to…2U believes in the power of high-quality online education to create a better future for all. Through edX, our online learning platform, we see a world where learners everywhere have access to',
            'team_title' => 'Build on Demand Teams for your Education Institution',
            'team_description' => 'Hire in under 48 hours. Scale up or down, no strings attached. We offer flexible engagements from hourly to full-time.Hire in under 48 hours. Scale up or down, no strings attached. We offer flexible engagements from hourly to full-time. Hire in under 48 hours. Scale up or',
            'team_list' => NULL,
            'story_title' => 'Delivering World-Class Learning Outcomes at Scale',
            'story_description' => 'Guided by our founding mission to eliminate the back row in higher education, 2U has spent 15 years advancing the technology and innovation to deliver world-class learning outcomes at scale. In 2021, 2U acquired edX to create a global online learning platform that has delivered life-changing learning experiences to millions of people worldwide.

            Today, under the leadership of 2U Co-Founder and CEO Christopher “Chip” Paucek and edX Founder and 2U Chief Platform Officer Anant Agarwal, edX connects millions of people with affordable, career-relevant learning opportunities.',
            'story_image' => 'assets/frontend/img/story-img.jpg',
        ]);
    }
}
