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
        Schema::create('milestone_payments', function (Blueprint $table) {
            $table->id();
            $table->integer('project_id');
            $table->integer('client_user_id');
            $table->integer('freelancer_user_id');
            $table->double('amount', 8, 2);
            $table->text('message')->nullable();
            $table->integer('paid_status')->default(0);
            $table->integer('client_seen')->default(0);
            $table->double('admin_profit', 8, 2)->default(0);
            $table->double('freelancer_profit', 8, 2)->default(0);
            $table->text('payment_details')->nullable();
            $table->string('payment_method')->nullable();
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
        Schema::dropIfExists('milestone_payments');
    }
};
