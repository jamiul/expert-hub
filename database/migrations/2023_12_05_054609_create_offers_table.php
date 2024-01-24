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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('eoi_id');
            $table->foreignId('client_id');
            $table->foreignId('expert_id');
            $table->string('contract_title');
            $table->string('contract_type');
            $table->decimal('amount');
            $table->text('message')->nullable();
            $table->boolean('is_milestone')->default(0);
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
        Schema::dropIfExists('offers');
    }
};
