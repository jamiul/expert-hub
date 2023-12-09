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
            $table->foreignId('profile_id')->constrained();
            $table->string('title');
            $table->string('slug');
            $table->longText('description');
            $table->string('type'); //App\Enums\ProjectType
            $table->foreignId('currency_id');
            $table->decimal('budget_start_amount', 10, 2);
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
