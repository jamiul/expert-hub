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
        Schema::create('service_payments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('service_package_id');
            $table->string('service_package_type', 20);
            $table->bigInteger('user_id');
            $table->bigInteger('service_owner_id');
            $table->decimal('amount', 10, 0);
            $table->string('payment_type', 20)->default('service_payment');
            $table->decimal('admin_profit');
            $table->decimal('freelancer_profit');
            $table->string('payment_method', 200);
            $table->text('payment_details')->nullable();
            $table->tinyInteger('cancel_status')->default(0);
            $table->tinyInteger('cancel_requested')->default(0);
            $table->decimal('refund_percentage', 10)->nullable();
            $table->text('cancel_reason')->nullable();
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
        Schema::dropIfExists('service_payments');
    }
};
