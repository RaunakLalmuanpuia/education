<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHigherSecondaryResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('higher_secondary_results', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('statistic_id');

            $table->smallInteger('arts_appeared_g_b')->unsigned();
            $table->smallInteger('arts_appeared_g_g')->unsigned();
            $table->smallInteger('arts_appeared_sc_b')->unsigned();
            $table->smallInteger('arts_appeared_sc_g')->unsigned();
            $table->smallInteger('arts_appeared_st_b')->unsigned();
            $table->smallInteger('arts_appeared_st_g')->unsigned();
            $table->smallInteger('arts_appeared_obc_b')->unsigned();
            $table->smallInteger('arts_appeared_obc_g')->unsigned();
            $table->smallInteger('arts_passed_g_b')->unsigned();
            $table->smallInteger('arts_passed_g_g')->unsigned();
            $table->smallInteger('arts_passed_sc_b')->unsigned();
            $table->smallInteger('arts_passed_sc_g')->unsigned();
            $table->smallInteger('arts_passed_st_b')->unsigned();
            $table->smallInteger('arts_passed_st_g')->unsigned();
            $table->smallInteger('arts_passed_obc_b')->unsigned();
            $table->smallInteger('arts_passed_obc_g')->unsigned();

            $table->smallInteger('commerce_appeared_g_b')->unsigned();
            $table->smallInteger('commerce_appeared_g_g')->unsigned();
            $table->smallInteger('commerce_appeared_sc_b')->unsigned();
            $table->smallInteger('commerce_appeared_sc_g')->unsigned();
            $table->smallInteger('commerce_appeared_st_b')->unsigned();
            $table->smallInteger('commerce_appeared_st_g')->unsigned();
            $table->smallInteger('commerce_appeared_obc_b')->unsigned();
            $table->smallInteger('commerce_appeared_obc_g')->unsigned();
            $table->smallInteger('commerce_passed_g_b')->unsigned();
            $table->smallInteger('commerce_passed_g_g')->unsigned();
            $table->smallInteger('commerce_passed_sc_b')->unsigned();
            $table->smallInteger('commerce_passed_sc_g')->unsigned();
            $table->smallInteger('commerce_passed_st_b')->unsigned();
            $table->smallInteger('commerce_passed_st_g')->unsigned();
            $table->smallInteger('commerce_passed_obc_b')->unsigned();
            $table->smallInteger('commerce_passed_obc_g')->unsigned();

            $table->smallInteger('vocational_appeared_g_b')->unsigned();
            $table->smallInteger('vocational_appeared_g_g')->unsigned();
            $table->smallInteger('vocational_appeared_sc_b')->unsigned();
            $table->smallInteger('vocational_appeared_sc_g')->unsigned();
            $table->smallInteger('vocational_appeared_st_b')->unsigned();
            $table->smallInteger('vocational_appeared_st_g')->unsigned();
            $table->smallInteger('vocational_appeared_obc_b')->unsigned();
            $table->smallInteger('vocational_appeared_obc_g')->unsigned();
            $table->smallInteger('vocational_passed_g_b')->unsigned();
            $table->smallInteger('vocational_passed_g_g')->unsigned();
            $table->smallInteger('vocational_passed_sc_b')->unsigned();
            $table->smallInteger('vocational_passed_sc_g')->unsigned();
            $table->smallInteger('vocational_passed_st_b')->unsigned();
            $table->smallInteger('vocational_passed_st_g')->unsigned();
            $table->smallInteger('vocational_passed_obc_b')->unsigned();
            $table->smallInteger('vocational_passed_obc_g')->unsigned();

            $table->smallInteger('other_appeared_g_b')->unsigned();
            $table->smallInteger('other_appeared_g_g')->unsigned();
            $table->smallInteger('other_appeared_sc_b')->unsigned();
            $table->smallInteger('other_appeared_sc_g')->unsigned();
            $table->smallInteger('other_appeared_st_b')->unsigned();
            $table->smallInteger('other_appeared_st_g')->unsigned();
            $table->smallInteger('other_appeared_obc_b')->unsigned();
            $table->smallInteger('other_appeared_obc_g')->unsigned();
            $table->smallInteger('other_passed_g_b')->unsigned();
            $table->smallInteger('other_passed_g_g')->unsigned();
            $table->smallInteger('other_passed_sc_b')->unsigned();
            $table->smallInteger('other_passed_sc_g')->unsigned();
            $table->smallInteger('other_passed_st_b')->unsigned();
            $table->smallInteger('other_passed_st_g')->unsigned();
            $table->smallInteger('other_passed_obc_b')->unsigned();
            $table->smallInteger('other_passed_obc_g')->unsigned();

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
        Schema::drop('higher_secondary_results');
    }
}
