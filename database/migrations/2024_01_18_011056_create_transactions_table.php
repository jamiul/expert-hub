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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->json('reference_id')->nullable();
            $table->string('reference_type')->nullable();
            $table->string('charge_id')->nullable();
            $table->string('payment_intent_id')->nullable();
            $table->string('transfer_id')->nullable();
            $table->string('balance_transaction')->nullable();
            $table->string('object')->nullable();
            $table->integer('amount')->nullable();
            $table->integer('amount_capturable')->nullable();
            $table->integer('amount_captured')->nullable();
            $table->integer('amount_received')->nullable();
            $table->integer('amount_refunded')->nullable();
            $table->integer('amount_reversed')->nullable();
            $table->integer('application_fee_amount')->nullable();
            $table->string('currency')->nullable();
            $table->string('customer_id')->nullable();
            $table->string('description')->nullable();
            $table->string('latest_charge_id')->nullable();
            $table->string('on_behalf_of')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('payment_method_types')->nullable();
            $table->string('transfer_group')->nullable();
            $table->json('metadata')->nullable();
            $table->dateTime('created_time')->nullable();
            $table->dateTime('canceled_at')->nullable();
            $table->string('cancellation_reason')->nullable();
            $table->string('status')->nullable();
            $table->boolean('refunded')->nullable();
            $table->boolean('reversed')->nullable();
            $table->boolean('livemode')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
