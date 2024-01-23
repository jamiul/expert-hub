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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profile_id');
            $table->foreignId('expertise_id')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->longText('description')->nullable();
            $table->string('type')->nullable(); //App\Enums\ProjectType
            $table->foreignId('currency_id')->nullable();
            $table->decimal('budget_start_amount', 10, 2)->nullable();
            $table->decimal('budget_end_amount', 10, 2)->nullable();
            $table->string('status'); //App\Enums\ProjectStatus
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
        Schema::dropIfExists('projects');
    }
};
