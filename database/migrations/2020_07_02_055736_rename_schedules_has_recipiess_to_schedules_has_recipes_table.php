<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameSchedulesHasRecipiessToSchedulesHasRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('schedules_has_recipes', function (Blueprint $table) {
            Schema::rename('schedules_has_recipies', 'schedules_has_recipes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('schedules_has_recipes', function (Blueprint $table) {
            Schema::rename('schedules_has_recipes', 'schedules_has_recipies');
        });
    }
}
