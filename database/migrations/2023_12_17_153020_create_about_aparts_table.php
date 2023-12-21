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
        Schema::create('about_aparts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('about_us_id');
            $table->string('set_title')->nullable();
            $table->longText('description')->nullable();
            $table->string('icon')->nullable();
            $table->string('type')->nullable();
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
        Schema::dropIfExists('about_aparts');
    }
};
