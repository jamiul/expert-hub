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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('type')->index(); //App\Enums\ProfileType
            $table->foreignId('expert_category_id')->nullable();
            $table->foreignId('expertise_id')->nullable();
            $table->string('stripe_acct_id')->nullable();
            $table->string('stripe_client_id')->nullable();
            $table->decimal('hourly_rate')->nullable();
            $table->longText('biography')->nullable();
            $table->string('current_job_title')->nullable();
            $table->string('current_job_organization')->nullable();
            $table->string('current_job_sector')->nullable();
            $table->decimal('balance', 12,2)->default(0);
            $table->decimal('escrow_balance', 12,2)->default(0);
            $table->string('currency')->default('AUD');
            $table->string('timezone')->default('Australia/Sydney');
            $table->string('status'); //App\Enums\ProfileStatus
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
        Schema::dropIfExists('profiles');
    }
};
