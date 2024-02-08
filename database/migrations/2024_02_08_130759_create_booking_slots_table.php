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
        Schema::create('booking_slots', function (Blueprint $table) {
            $table->id();
            $table->foreignId('eoi_id')->nullable();
            $table->foreignId('offer_id')->nullable();
            $table->foreignId('consultation_booking_id')->nullable();
            $table->string('title');
            $table->dateTime('consultation_time')->nullable();
            $table->date('due_date')->nullable();
            $table->decimal('amount');
            $table->dateTime('declined_at')->nullable();
            $table->dateTime('approved_at')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('booking_slots');
    }
};
