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
        Schema::create('client_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transaction_id');
            $table->foreignId('milestone_id')->nullable();
            $table->foreignId('client_id');
            $table->foreignId('expert_id')->nullable();
            $table->string('type')->nullable();
            $table->text('description')->nullable();
            $table->double('amount')->nullable();
            $table->string('charge_type')->nullable();
            $table->integer('parent')->nullable();
            $table->boolean('status');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_transactions');
    }
};
