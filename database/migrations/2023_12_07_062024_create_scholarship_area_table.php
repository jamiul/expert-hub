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
        Schema::create('scholarship_area', function (Blueprint $table) {
            $table->id();
            $table->foreignId('scholarship_id')->constrained()->cascadeOnDelete();
            $table->foreignId('expertise_id')->constrained()->cascadeOnDelete();
            $table->boolean('active')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scholarship_area');
    }
};
