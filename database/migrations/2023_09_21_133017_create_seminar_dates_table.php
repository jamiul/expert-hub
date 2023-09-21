<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seminar_dates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('seminar_id')->nullable()->index('seminar_dates_seminar_id_foreign');
            $table->timestamp('seminar_date')->nullable();
            $table->longText('descriptions')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seminar_dates');
    }
};
