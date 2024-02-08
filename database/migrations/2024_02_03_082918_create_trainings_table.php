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
        Schema::create('trainings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('expert_id');
            $table->string('title');
            $table->decimal('fee')->nullable();
            $table->foreignId('country_id')->nullable();
            $table->foreignId('state_id')->nullable();
            $table->string('time_zone')->nullable();
            $table->string('mode')->nullable();
            $table->string('link')->nullable();
            $table->foreignId('language_id')->nullable();
            $table->foreignId('expertise_id')->nullable();
            $table->longText('summary')->nullable();
            $table->longText('outline')->nullable();
            $table->longText('outcomes')->nullable();
            $table->longText('assesments')->nullable();
            $table->longText('activities')->nullable();
            $table->longText('resources')->nullable();
            $table->longText('prescribed_materials')->nullable();
            $table->longText('recommended_reading')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('start_time')->nullable();
            $table->string('end_time')->nullable();
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
        Schema::dropIfExists('trainings');
    }
};
