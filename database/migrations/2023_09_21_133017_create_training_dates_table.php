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
        Schema::create('training_dates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('training_id')->nullable()->index('training_dates_training_id_foreign');
            $table->timestamp('training_date')->nullable();
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
        Schema::dropIfExists('training_dates');
    }
};
