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
            $table->string('type')->default('bank_account');
            $table->string('country')->nullable();
            $table->string('account_holder_type')->default('individual');
            $table->string('account_holder_name')->nullable();
            $table->string('account_type')->default('savings');
            $table->integer('routing_number')->nullable();
            $table->integer('account_number')->nullable();
            $table->string('currency')->nullable();
            $table->boolean('default')->default(1);
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
