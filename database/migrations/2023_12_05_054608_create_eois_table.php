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
        Schema::create('eois', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id');
            $table->foreignId('expert_id');
            $table->decimal('amount');
            $table->text('message');
            $table->string('status');
            $table->boolean('is_milestone')->default(0);
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
        Schema::dropIfExists('eois');
    }
};
