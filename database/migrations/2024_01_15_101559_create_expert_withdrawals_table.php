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
        Schema::create('expert_withdrawals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('source_type')->nullable();
            $table->string('bank_id')->nullable();
            $table->string('account_holder_name')->nullable();
            $table->string('account_holder_type')->nullable();
            $table->string('account_type')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('country')->nullable();
            $table->string('currency')->nullable();
            $table->string('fingerprint')->nullable();
            $table->string('last4')->nullable();
            $table->string('routing_number')->nullable();
            $table->boolean('is_default')->default(1);
            $table->string('status');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expert_withdrawals');
    }
};
