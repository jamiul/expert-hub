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
        Schema::table('trainings', function (Blueprint $table) {
            $table->foreign(['created_by'])->references(['id'])->on('users')->onUpdate('NO ACTION')->onDelete('SET NULL');
            $table->foreign(['deleted_by'])->references(['id'])->on('users')->onUpdate('NO ACTION')->onDelete('SET NULL');
            $table->foreign(['language_id'])->references(['id'])->on('languages')->onUpdate('NO ACTION')->onDelete('SET NULL');
            $table->foreign(['project_category_id'])->references(['id'])->on('project_categories')->onUpdate('NO ACTION')->onDelete('SET NULL');
            $table->foreign(['training_mode_id'])->references(['id'])->on('training_modes')->onUpdate('NO ACTION')->onDelete('SET NULL');
            $table->foreign(['training_software_id'])->references(['id'])->on('training_software')->onUpdate('NO ACTION')->onDelete('SET NULL');
            $table->foreign(['updated_by'])->references(['id'])->on('users')->onUpdate('NO ACTION')->onDelete('SET NULL');
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
        Schema::table('trainings', function (Blueprint $table) {
            $table->dropForeign('trainings_created_by_foreign');
            $table->dropForeign('trainings_deleted_by_foreign');
            $table->dropForeign('trainings_language_id_foreign');
            $table->dropForeign('trainings_project_category_id_foreign');
            $table->dropForeign('trainings_training_mode_id_foreign');
            $table->dropForeign('trainings_training_software_id_foreign');
            $table->dropForeign('trainings_updated_by_foreign');
            $table->dropForeign('trainings_user_id_foreign');
        });
    }
};
