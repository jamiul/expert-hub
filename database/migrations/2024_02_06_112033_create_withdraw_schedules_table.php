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
        Schema::create('withdraw_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('expert_withdrawal_id');
            $table->string('preferred_payment_schedule');
            $table->double('balance_reach')->nullable();
            $table->double('minimum_reserve')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('withdraw_schedules');
    }
};
