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
        Schema::table('trainings', function (Blueprint $table) {
            $table->unsignedBigInteger('skill_id')->nullable()->after('project_category_id')->index('trainings_skill_id_foreign');
            
            $table->foreign(['skill_id'])->references(['id'])->on('skills')->onUpdate('NO ACTION')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trainings', function (Blueprint $table) {
            $table->dropForeign('project_category_id');
            $table->dropColumn('skill_id');
        });
    }
};
