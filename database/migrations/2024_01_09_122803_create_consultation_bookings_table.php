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
        Schema::create('consultation_bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('consultation_id');
            // $table->morphs('contract_type'); //@TODO
            $table->foreignId('client_id');
            // $table->foreignId('expert_id');
            $table->decimal('amount');
            $table->decimal('escrow_amount')->nullable();
            $table->text('message')->nullable();
            $table->string('status');
            $table->string('reason')->nullable();
            $table->tinyInteger('score')->nullable();
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
        Schema::dropIfExists('consultation_bookings');
    }
};
