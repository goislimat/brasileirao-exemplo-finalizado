<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChampionshipTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('championship_teams', function (Blueprint $table) {
            $table->integer('team_id')->unsigned();
            $table->foreign('team_id')->references('id')->on('teams');
            $table->integer('championship_id')->unsigned();
            $table->foreign('championship_id')->references('id')->on('championships');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('championship_teams');
    }
}
