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
        Schema::table('scholarships', function (Blueprint $table) {
            $table->string('study_area')->nullable()->after('slug');
            $table->string('student_type')->nullable()->after('study_area');
            $table->string('scholarship_type')->nullable()->after('student_type');
            $table->string('value')->nullable()->after('scholarship_type');
            $table->string('find_supervisor')->nullable()->after('value');
            $table->string('application_process')->nullable()->after('find_supervisor');
            $table->string('inquiry_institution')->nullable()->after('application_process');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('scholarships', function (Blueprint $table) {
            $table->dropColumn('study_area');
            $table->dropColumn('student_type');
            $table->dropColumn('value');
            $table->dropColumn('find_supervisor');
            $table->dropColumn('application_process');
            $table->dropColumn('inquiry_institution');
        });
    }
};
