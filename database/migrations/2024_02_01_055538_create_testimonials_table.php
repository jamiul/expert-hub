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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contract_id');
            $table->foreignId('client_id');
            $table->foreignId('expert_id');
            $table->foreignId('owner_id');
            $table->longText('feedback')->nullable();
            $table->tinyInteger('recommendation')->nullable();
            $table->tinyInteger('skill')->nullable();
            $table->tinyInteger('availability')->nullable();
            $table->tinyInteger('communication')->nullable();
            $table->tinyInteger('deadlines')->nullable();
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
        Schema::dropIfExists('testimonials');
    }
};
