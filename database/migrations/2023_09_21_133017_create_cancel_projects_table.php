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
        Schema::create('cancel_projects', function (Blueprint $table) {
            $table->id();
            $table->integer('project_id');
            $table->integer('requested_user_id');
            $table->longText('reason')->nullable();
            $table->integer('viewed')->default(0);
            $table->decimal('refund_percentage', 10)->nullable();
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
        Schema::dropIfExists('cancel_projects');
    }
};
