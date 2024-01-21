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
        Schema::create('expert_payouts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('payout_id')->nullable();
            $table->integer('amount')->nullable();
            $table->date('arrival_date')->nullable();
            $table->string('balance_transaction')->nullable();
            $table->string('currency')->nullable();
            $table->string('description')->nullable();
            $table->string('destination_id')->nullable();
            $table->string('method')->nullable();
            $table->string('type')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expert_payouts');
    }
};
