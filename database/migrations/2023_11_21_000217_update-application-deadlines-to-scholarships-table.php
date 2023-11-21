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
        Schema::dropIfExists('application_deadlines');

        Schema::table('scholarships', function (Blueprint $table) {
            $table->timestamp('start_date')->nullable()->after('inquiry_institution');
            $table->timestamp('end_date')->nullable()->after('start_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('application_deadlines', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('scholarship_id')->nullable()->index('application_deadlines_scholarship_id_foreign');
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign(['scholarship_id'])->references(['id'])->on('scholarships')->onUpdate('NO ACTION')->onDelete('SET NULL');
        });

        Schema::table('scholarships', function (Blueprint $table) {
            $table->dropColumn(['start_date', 'end_date']);
        });
    }
};
