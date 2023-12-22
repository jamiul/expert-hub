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
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string('header_subtitle')->nullable();
            $table->string('header_image')->nullable();
            $table->string('area_title')->nullable();
            $table->string('area_subtitle')->nullable();
            $table->longText('area_description')->nullable();
            $table->string('instructor_title')->nullable();
            $table->string('instructor_subtitle')->nullable();
            $table->text('instructor_list')->nullable();
            $table->string('mission_title')->nullable();
            $table->string('mission_subtitle')->nullable();
            $table->longText('mission_description')->nullable();
            $table->string('mission_image')->nullable();
            $table->string('apart_title')->nullable();
            $table->longText('apart_subtitle')->nullable();
            $table->string('team_title')->nullable();
            $table->string('team_subtitle')->nullable();
            $table->longText('team_description')->nullable();
            $table->text('team_list')->nullable();
            $table->string('story_title')->nullable();
            $table->string('story_subtitle')->nullable();
            $table->longText('story_description')->nullable();
            $table->string('story_image')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};
