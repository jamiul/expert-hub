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
        Schema::table('project_bids', function (Blueprint $table) {
            $table->foreign(['bid_by_user_id'])->references(['id'])->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['project_id'])->references(['id'])->on('projects')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('project_bids', function (Blueprint $table) {
            $table->dropForeign('project_bids_bid_by_user_id_foreign');
            $table->dropForeign('project_bids_project_id_foreign');
        });
    }
};
