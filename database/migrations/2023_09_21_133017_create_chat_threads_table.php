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
        Schema::create('chat_threads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('thread_code', 50);
            $table->unsignedBigInteger('sender_user_id')->index('chat_threads_sender_user_id_foreign');
            $table->unsignedBigInteger('receiver_user_id')->index('chat_threads_receiver_user_id_foreign');
            $table->boolean('active')->default(true);
            $table->integer('interview')->default(1);
            $table->integer('blocked_by_user')->nullable();
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
        Schema::dropIfExists('chat_threads');
    }
};
