<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $parentSkillsArray = [
            [
                "id" => 48,
                "name" => "Course Accreditation Specialists",
                "parent_id" => null,
            ],
            ["id" => 49, "name" => "Program Design", "parent_id" => null],
            ["id" => 50, "name" => "Curriculum Experts", "parent_id" => null],
            ["id" => 51, "name" => "LMS Experts", "parent_id" => null],
            ["id" => 52, "name" => "Industry Experts", "parent_id" => null],
            ["id" => 53, "name" => "Finance Experts", "parent_id" => null],
            ["id" => 54, "name" => "Policy Experts", "parent_id" => null],
            ["id" => 55, "name" => "Project Managers", "parent_id" => null],
            ["id" => 56, "name" => "Research and Analysis", "parent_id" => null],
            ["id" => 57, "name" => "Writing and Editing", "parent_id" => null],
            ["id" => 58, "name" => "Scholarships Advisors", "parent_id" => null],
            [
                "id" => 59,
                "name" => "International Education Experts",
                "parent_id" => null,
            ],
        ];

        $childSkillsArray = [
            ["name" => "Accreditation Documentation", "parent_id" => 48],
            ["name" => "Accreditation Process", "parent_id" => 48],
            ["name" => "Accreditation Renewal", "parent_id" => 48],
            ["name" => "Accreditation Reporting", "parent_id" => 48],
            ["name" => "Accreditation Review", "parent_id" => 48],
            ["name" => "Accreditation Standards", "parent_id" => 48],
            ["name" => "Auditing Procedures", "parent_id" => 48],
            ["name" => "Compliance Assessment", "parent_id" => 48],
            ["name" => "Continuous Improvement", "parent_id" => 48],
            ["name" => "Data Analysis", "parent_id" => 48],
            ["name" => "Documentation Management", "parent_id" => 48],
            ["name" => "Educational Standards", "parent_id" => 48],
            ["name" => "Evaluation Metrics", "parent_id" => 48],
            ["name" => "External Review", "parent_id" => 48],
            ["name" => "Policy Adherence", "parent_id" => 48],
            ["name" => "Process Improvement", "parent_id" => 48],
            ["name" => "Program Evaluation", "parent_id" => 48],
            ["name" => "Quality Assurance", "parent_id" => 48],
            ["name" => "Regulatory Compliance", "parent_id" => 48],
            ["name" => "Stakeholder Communication", "parent_id" => 48],
            ["name" => "Uni Computer Science Tutor", "parent_id" => 48],
            ["name" => "Educational Expertise", "parent_id" => 49],
            ["name" => "Curriculum Development", "parent_id" => 49],
            ["name" => "Instructional Design", "parent_id" => 49],
            ["name" => "Subject Matter Expertise", "parent_id" => 49],
            ["name" => "Problem-Based Learning Expertise", "parent_id" => 49],
            ["name" => "Assessment and Evaluation", "parent_id" => 49],
            ["name" => "Quality Assurance", "parent_id" => 49],
            ["name" => "Project Management", "parent_id" => 49],
            ["name" => "Strategic Planning", "parent_id" => 49],
            ["name" => "Communication Skills", "parent_id" => 49],
            ["name" => "Data Analysis", "parent_id" => 49],
            ["name" => "Technological Proficiency", "parent_id" => 49],
            ["name" => "Innovation and Creativity", "parent_id" => 49],
            ["name" => "Problem Solving", "parent_id" => 49],
            ["name" => "Ethical and Legal Considerations", "parent_id" => 49],
            ["name" => "Budgeting and Resource Management", "parent_id" => 49],
            ["name" => "Stakeholder Engagement", "parent_id" => 49],
            ["name" => "Cross-functional Collaboration", "parent_id" => 49],
            ["name" => "Evaluation and Feedback Integration", "parent_id" => 49],
            ["name" => "Risk Management", "parent_id" => 49],
            ["name" => "Curriculum Development", "parent_id" => 50],
            ["name" => "Instructional Design", "parent_id" => 50],
            ["name" => "Assessment and Evaluation", "parent_id" => 50],
            ["name" => "Subject Matter Expertise", "parent_id" => 50],
            ["name" => "Educational Research", "parent_id" => 50],
            ["name" => "Learning Objectives", "parent_id" => 50],
            ["name" => "Quality Assurance", "parent_id" => 50],
            ["name" => "Data Analysis", "parent_id" => 50],
            ["name" => "Stakeholder Collaboration", "parent_id" => 50],
            ["name" => "Strategic Planning", "parent_id" => 50],
            ["name" => "Instructional Materials", "parent_id" => 50],
            ["name" => "Technology Integration", "parent_id" => 50],
            ["name" => "Project Management", "parent_id" => 50],
            ["name" => "Assessment Methods", "parent_id" => 50],
            ["name" => "Curriculum Alignment", "parent_id" => 50],
            ["name" => "Educational Trends", "parent_id" => 50],
            ["name" => "Budget Management", "parent_id" => 50],
            ["name" => "Communication Skills", "parent_id" => 50],
            ["name" => "Continuous Improvement", "parent_id" => 50],
            ["name" => "Ethical Compliance", "parent_id" => 50],
            ["name" => "Supervisors Communications", "parent_id" => 51],
            ["name" => "LMS Development", "parent_id" => 51],
            ["name" => "UX/UI Design", "parent_id" => 51],
            ["name" => "Content Creation", "parent_id" => 51],
            ["name" => "Data Analysis", "parent_id" => 51],
            ["name" => "System Administration", "parent_id" => 51],
            ["name" => "Technical Writing", "parent_id" => 51],
            ["name" => "Quality Assurance", "parent_id" => 51],
            ["name" => "Mobile App Integration", "parent_id" => 51],
            ["name" => "Database Management", "parent_id" => 51],
            ["name" => "Project Management", "parent_id" => 51],
            ["name" => "Front-end Development", "parent_id" => 51],
            ["name" => "Back-end Development", "parent_id" => 51],
            ["name" => "Integration Specialist", "parent_id" => 51],
            ["name" => "Software Engineering", "parent_id" => 51],
            ["name" => "Graphic Design", "parent_id" => 51],
            ["name" => "Training Coordination", "parent_id" => 51],
            ["name" => "Full-stack Development", "parent_id" => 51],
            ["name" => "Data Management", "parent_id" => 51],
            ["name" => "LMS Administration", "parent_id" => 51],
            ["name" => "Industry-Specific Knowledge", "parent_id" => 52],
            ["name" => "Market Analysis", "parent_id" => 52],
            ["name" => "Trend Analysis", "parent_id" => 52],
            ["name" => "Competitive Analysis", "parent_id" => 52],
            ["name" => "Regulatory Compliance", "parent_id" => 52],
            ["name" => "Problem Solving", "parent_id" => 52],
            ["name" => "Innovation", "parent_id" => 52],
            ["name" => "Project Management", "parent_id" => 52],
            ["name" => "Financial Analysis", "parent_id" => 52],
            ["name" => "Strategic Planning", "parent_id" => 52],
            ["name" => "Budgeting and Forecasting", "parent_id" => 53],
            ["name" => "Financial Analysis", "parent_id" => 53],
            ["name" => "Risk Assessment and Management", "parent_id" => 53],
            ["name" => "Cash Flow Management", "parent_id" => 53],
            ["name" => "Investment Analysis", "parent_id" => 53],
            ["name" => "Financial Reporting", "parent_id" => 53],
            ["name" => "Cost Control", "parent_id" => 53],
            ["name" => "Tax Planning", "parent_id" => 53],
            ["name" => "Auditing", "parent_id" => 53],
            ["name" => "Compliance and Regulatory Knowledge", "parent_id" => 53],
            ["name" => "Financial Modelling", "parent_id" => 53],
            ["name" => "Strategic Financial Planning", "parent_id" => 53],
            ["name" => "Asset Management", "parent_id" => 53],
            ["name" => "Financial Software Proficiency", "parent_id" => 53],
            ["name" => "Data Analysis", "parent_id" => 53],
            ["name" => "Decision-Making", "parent_id" => 53],
            ["name" => "Accounting Principles", "parent_id" => 53],
            ["name" => "Negotiation Skills", "parent_id" => 53],
            ["name" => "Capital Allocation", "parent_id" => 53],
            ["name" => "Financial Leadership", "parent_id" => 53],
            ["name" => "Policy Analysis", "parent_id" => 54],
            ["name" => "Research and Data Analysis", "parent_id" => 54],
            ["name" => "Legal and Regulatory Compliance", "parent_id" => 54],
            ["name" => "Policy Development", "parent_id" => 54],
            ["name" => "Stakeholder Engagement", "parent_id" => 54],
            ["name" => "Public Speaking and Communication", "parent_id" => 54],
            ["name" => "Writing and Report Preparation", "parent_id" => 54],
            ["name" => "Problem Solving", "parent_id" => 54],
            ["name" => "Strategic Planning", "parent_id" => 54],
            ["name" => "Risk Assessment", "parent_id" => 54],
            ["name" => "Program Evaluation", "parent_id" => 54],
            ["name" => "Negotiation and Diplomacy", "parent_id" => 54],
            ["name" => "Ethical Decision-Making", "parent_id" => 54],
            ["name" => "Economic Analysis", "parent_id" => 54],
            ["name" => "Interdisciplinary Collaboration", "parent_id" => 54],
            ["name" => "Advocacy", "parent_id" => 54],
            ["name" => "Conflict Resolution", "parent_id" => 54],
            ["name" => "Policy Implementation", "parent_id" => 54],
            ["name" => "Project Planning", "parent_id" => 55],
            ["name" => "Time Management", "parent_id" => 55],
            ["name" => "Task Prioritization", "parent_id" => 55],
            ["name" => "Budget Management", "parent_id" => 55],
            ["name" => "Risk Assessment and Mitigation", "parent_id" => 55],
            ["name" => "Communication", "parent_id" => 55],
            ["name" => "Leadership", "parent_id" => 55],
            ["name" => "Team Collaboration", "parent_id" => 55],
            ["name" => "Stakeholder Management", "parent_id" => 55],
            ["name" => "Conflict Resolution", "parent_id" => 55],
            ["name" => "Problem-Solving", "parent_id" => 55],
            ["name" => "Decision-Making", "parent_id" => 55],
            ["name" => "Scope Management", "parent_id" => 55],
            ["name" => "Quality Control", "parent_id" => 55],
            ["name" => "Resource Allocation", "parent_id" => 55],
            ["name" => "Change Management", "parent_id" => 55],
            ["name" => "Documentation", "parent_id" => 55],
            ["name" => "Reporting and Analytics", "parent_id" => 55],
            ["name" => "Agile or Waterfall Methodologies", "parent_id" => 55],
            ["name" => "Technical Proficiency", "parent_id" => 55],
            ["name" => "Law research", "parent_id" => 56],
            ["name" => "Medical research", "parent_id" => 56],
            ["name" => "Research writing", "parent_id" => 56],
            ["name" => "Data Analysis", "parent_id" => 56],
            ["name" => "Research Methodology", "parent_id" => 56],
            ["name" => "Needs Assessment", "parent_id" => 56],
            ["name" => "Evaluation Techniques", "parent_id" => 56],
            ["name" => "Quantitative Research", "parent_id" => 56],
            ["name" => "Qualitative Research", "parent_id" => 56],
            ["name" => "Statistical Analysis", "parent_id" => 56],
            ["name" => "Literature Review", "parent_id" => 56],
            ["name" => "Survey Design", "parent_id" => 56],
            ["name" => "Data Interpretation", "parent_id" => 56],
            ["name" => "Trend Analysis", "parent_id" => 56],
            ["name" => "Market Research", "parent_id" => 56],
            ["name" => "Competitive Analysis", "parent_id" => 56],
            ["name" => "Critical Thinking", "parent_id" => 56],
            ["name" => "Problem Solving", "parent_id" => 56],
            ["name" => "Root Cause Analysis", "parent_id" => 56],
            ["name" => "Hypothesis Testing", "parent_id" => 56],
            ["name" => "Experimental Design", "parent_id" => 56],
            ["name" => "Data Visualisation", "parent_id" => 56],
            ["name" => "Synthesis of Findings", "parent_id" => 56],
            ["name" => "Academic Formatting", "parent_id" => 57],
            ["name" => "Citation Specialist", "parent_id" => 57],
            ["name" => "Copywriter", "parent_id" => 57],
            ["name" => "Data Interpretation", "parent_id" => 57],
            ["name" => "Ethical Writing", "parent_id" => 57],
            ["name" => "Grammar and Syntax", "parent_id" => 57],
            ["name" => "Grant Proposal Writing", "parent_id" => 57],
            ["name" => "Journal Article Editing", "parent_id" => 57],
            ["name" => "Legal Writer", "parent_id" => 57],
            ["name" => "Literature Review", "parent_id" => 57],
            ["name" => "Manuscript Editing", "parent_id" => 57],
            ["name" => "Paraphrasing", "parent_id" => 57],
            ["name" => "Proofreading", "parent_id" => 57],
            ["name" => "Research Proposal Editing", "parent_id" => 57],
            ["name" => "Research Skills", "parent_id" => 57],
            ["name" => "Technical Writing", "parent_id" => 57],
            ["name" => "Thesis/Dissertation Editing", "parent_id" => 57],
            ["name" => "Style Guide Adherence", "parent_id" => 57],
            ["name" => "Creative Writing", "parent_id" => 57],
            ["name" => "Content Creation", "parent_id" => 57],
            ["name" => "Academic Counselling", "parent_id" => 58],
            ["name" => "Financial Aid Knowledge", "parent_id" => 58],
            ["name" => "Grant Writing", "parent_id" => 58],
            ["name" => "Interview Preparation", "parent_id" => 58],
            ["name" => "Needs Assessment", "parent_id" => 58],
            ["name" => "Program Evaluation", "parent_id" => 58],
            ["name" => "Proposal Writing Guidance", "parent_id" => 58],
            ["name" => "Research Funding Analyst", "parent_id" => 58],
            ["name" => "Research Grant Assistance", "parent_id" => 58],
            ["name" => "Research Skills", "parent_id" => 58],
            ["name" => "Scholarship Application Assistance", "parent_id" => 58],
            ["name" => "Scholarship Application Reviewer", "parent_id" => 58],
            ["name" => "Scholarship Search Strategies", "parent_id" => 58],
            ["name" => "Student Advocacy", "parent_id" => 58],
            ["name" => "Supervisors Communications Specialist", "parent_id" => 58],
            ["name" => "Test Preparation", "parent_id" => 58],
            ["name" => "Cross-Cultural Communication", "parent_id" => 59],
            ["name" => "Global Curriculum Development", "parent_id" => 59],
            ["name" => "Language Proficiency", "parent_id" => 59],
            ["name" => "Intercultural Competence", "parent_id" => 59],
            ["name" => "Educational Policy Analysis", "parent_id" => 59],
            ["name" => "International Partnerships", "parent_id" => 59],
            ["name" => "International Student Services", "parent_id" => 59],
            ["name" => "Global Program Management", "parent_id" => 59],
            ["name" => "Multilingual Instructional Design", "parent_id" => 59],
            ["name" => "International Assessment Strategies", "parent_id" => 59],
            ["name" => "International Mobility Programs", "parent_id" => 59],
            ["name" => "International Recruitment Strategies", "parent_id" => 59],
            ["name" => "Global Education Trends", "parent_id" => 59],
            ["name" => "International Policy Advocacy", "parent_id" => 59],
            ["name" => "Cultural Sensitivity Training", "parent_id" => 59],
            ["name" => "International Research Collaboration", "parent_id" => 59],
            ["name" => "International Accreditation Processes", "parent_id" => 59],
        ];

        DB::table('skills')->delete();
        DB::table('parent_skills')->delete();

        Schema::table('skills', function (Blueprint $table) {
            $table->renameColumn('parent_skill_id', 'parent_id');
        });

        Schema::table('skills', function (Blueprint $table) {
            $table->unsignedBigInteger('parent_id')->nullable(true)->change();
        });

        DB::table('skills')->insert($parentSkillsArray);
        DB::table('skills')->insert($childSkillsArray);

        Schema::dropIfExists('parent_skills');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('skills', function (Blueprint $table) {
            //
        });
    }
};