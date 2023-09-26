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
        Schema::table('projects', function (Blueprint $table) {
            $table->string('currency')->nullable();
            $table->string('attachments')->nullable();
            $table->string('budget')->nullable();
            $table->text('skills')->nullable()->change();
            $table->text('excerpt')->nullable()->change();
            $table->text('price')->nullable()->change();
            $table->text('hourly_rate')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('currency');
            $table->dropColumn('attachments');
            $table->dropColumn('budget');
        });
    }
};
