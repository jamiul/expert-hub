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
        Schema::create('profile_experiences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profile_id');
            $table->string('title');
            $table->longText('description');
            $table->string('institute');
            $table->string('address');
            $table->string('start_year');
            $table->string('end_year');
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
        Schema::dropIfExists('profile_experiences');
    }
};
