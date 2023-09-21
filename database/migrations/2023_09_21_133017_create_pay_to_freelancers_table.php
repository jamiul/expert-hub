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
        Schema::create('pay_to_freelancers', function (Blueprint $table) {
            $table->id();
            $table->integer('paid_by')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->double('paid_amount', 8, 2)->default(0);
            $table->string('payment_method', 200)->nullable();
            $table->string('reciept')->nullable();
            $table->double('requested_amount', 8, 2)->default(0);
            $table->mediumText('descriptions')->nullable();
            $table->integer('paid_status')->default(0);
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
        Schema::dropIfExists('pay_to_freelancers');
    }
};
