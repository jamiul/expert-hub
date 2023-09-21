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
        Schema::create('addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('addressable_id');
            $table->char('addressable_type', 50)->nullable();
            $table->string('street')->nullable();
            $table->bigInteger('city_id')->nullable();
            $table->char('postal_code', 50)->nullable();
            $table->char('phone', 50)->nullable();
            $table->unsignedBigInteger('country_id')->nullable()->index('addresses_country_id_foreign');
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
        Schema::dropIfExists('addresses');
    }
};
