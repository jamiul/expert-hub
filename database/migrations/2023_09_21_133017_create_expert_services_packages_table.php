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
        Schema::create('expert_services_packages', function (Blueprint $table) {
            $table->id();
            $table->string('service_type', 20);
            $table->bigInteger('service_price');
            $table->integer('delivery_time');
            $table->string('revision_limit')->nullable();
            $table->text('feature_description')->nullable();
            $table->integer('service_id');
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
        Schema::dropIfExists('expert_services_packages');
    }
};
