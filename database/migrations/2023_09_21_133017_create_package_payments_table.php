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
        Schema::create('package_payments', function (Blueprint $table) {
            $table->id();
            $table->integer('package_id');
            $table->string('package_type', 50)->nullable();
            $table->unsignedBigInteger('user_id');
            $table->double('amount', 8, 2);
            $table->string('payment_type', 200);
            $table->string('payment_method', 200);
            $table->longText('payment_details')->nullable();
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
        Schema::dropIfExists('package_payments');
    }
};
