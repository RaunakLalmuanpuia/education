<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSecondaryResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secondary_results', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('statistic_id');

            $table->smallInteger('appeared_g_b')->unsigned();
            $table->smallInteger('appeared_g_g')->unsigned();
            $table->smallInteger('appeared_sc_b')->unsigned();
            $table->smallInteger('appeared_sc_g')->unsigned();
            $table->smallInteger('appeared_st_b')->unsigned();
            $table->smallInteger('appeared_st_g')->unsigned();
            $table->smallInteger('appeared_obc_b')->unsigned();
            $table->smallInteger('appeared_obc_g')->unsigned();

            $table->smallInteger('passed_g_b')->unsigned();
            $table->smallInteger('passed_g_g')->unsigned();
            $table->smallInteger('passed_sc_b')->unsigned();
            $table->smallInteger('passed_sc_g')->unsigned();
            $table->smallInteger('passed_st_b')->unsigned();
            $table->smallInteger('passed_st_g')->unsigned();
            $table->smallInteger('passed_obc_b')->unsigned();
            $table->smallInteger('passed_obc_g')->unsigned();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('secondary_results');
    }
}
