<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeminarDatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seminar_dates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('seminar_id')->nullable();
            $table->foreign('seminar_id')->references('id')->on('seminars');
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
}
