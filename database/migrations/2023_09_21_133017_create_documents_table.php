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
        Schema::create('documents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->index('documents_user_id_foreign');
            $table->unsignedBigInteger('documentable_id');
            $table->char('documentable_type', 50);
            $table->string('name')->nullable();
            $table->string('obscure')->nullable();
            $table->string('path')->nullable();
            $table->char('format', 10);
            $table->double('size', 8, 2);
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
        Schema::dropIfExists('documents');
    }
};
