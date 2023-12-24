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
        Schema::create('scholarships', function (Blueprint $table) {
            $table->id();
            $table->string('title', 500);
            $table->string('link');
            $table->foreignId('university_id')->nullable();
            $table->foreignId('country_id')->nullable();
            $table->string('student_type')->nullable(); //App\Enums\Scholarship\StudentType
            $table->boolean('automatic_consideration')->default(0);
            $table->date('deadline')->nullable();
            $table->boolean('active')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scholarships');
    }
};
