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
            $table->string('partner_institute')->nullable()->after('project_category_id');
            $table->unsignedBigInteger('country_id')->nullable()->after('partner_institute')->index('trainings_country_id_foreign');
            
            $table->foreign(['country_id'])->references(['id'])->on('countries')->onUpdate('NO ACTION')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trainings', function (Blueprint $table) {
            $table->dropColumn('partner_institute');
            $table->dropForeign('trainings_country_id_foreign');
            $table->dropColumn('country_id');
        });
    }
};
