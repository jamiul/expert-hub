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
        Schema::table('seminar_instructors', function (Blueprint $table) {
            $table->foreign(['seminar_id'])->references(['id'])->on('seminars')->onUpdate('NO ACTION')->onDelete('SET NULL');
            $table->foreign(['user_id'])->references(['id'])->on('users')->onUpdate('NO ACTION')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('seminar_instructors', function (Blueprint $table) {
            $table->dropForeign('seminar_instructors_seminar_id_foreign');
            $table->dropForeign('seminar_instructors_user_id_foreign');
        });
    }
};
