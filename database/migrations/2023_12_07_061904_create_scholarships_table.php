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
            $table->foreignId('university_id')->constrained();
            $table->foreignId('country_id')->constrained();
            $table->string('student_type')->nullable(); //phpenum
            $table->string('supervisor_link')->nullable();
            $table->string('application_process_link')->nullable();
            $table->boolean('automatic_consideration')->default(0);
            $table->date('deadline')->nullable();
            $table->string('value')->nullable();
            $table->string('status')->nullable();
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
