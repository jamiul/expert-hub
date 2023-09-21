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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->string('notification_type', 100);
            $table->bigInteger('sender_id')->default(0);
            $table->bigInteger('receiver_id')->default(0);
            $table->text('message')->nullable();
            $table->text('link')->nullable();
            $table->timestamps();
            $table->string('showing_panel')->nullable();
            $table->tinyInteger('seen_by_receiver')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notifications');
    }
};
