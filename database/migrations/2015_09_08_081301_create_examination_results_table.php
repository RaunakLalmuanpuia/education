<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExaminationResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examination_results', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('statistic_id');

            $table->smallInteger('enrollment_cl45_b_g')->unsigned();
            $table->smallInteger('enrollment_cl45_g_g')->unsigned();
            $table->smallInteger('appeared_cl45_b_g')->unsigned();
            $table->smallInteger('appeared_cl45_g_g')->unsigned();
            $table->smallInteger('passed_cl45_b_g')->unsigned();
            $table->smallInteger('passed_cl45_g_g')->unsigned();
            $table->smallInteger('passed_with_above_60_cl45_b_g')->unsigned();
            $table->smallInteger('passed_with_above_60_cl45_g_g')->unsigned();

            $table->smallInteger('enrollment_cl78_b_g')->unsigned();
            $table->smallInteger('enrollment_cl78_g_g')->unsigned();
            $table->smallInteger('appeared_cl78_b_g')->unsigned();
            $table->smallInteger('appeared_cl78_g_g')->unsigned();
            $table->smallInteger('passed_cl78_b_g')->unsigned();
            $table->smallInteger('passed_cl78_g_g')->unsigned();
            $table->smallInteger('passed_with_above_60_cl78_b_g')->unsigned();
            $table->smallInteger('passed_with_above_60_cl78_g_g')->unsigned();

            $table->smallInteger('enrollment_cl45_b_sc')->unsigned();
            $table->smallInteger('enrollment_cl45_g_sc')->unsigned();
            $table->smallInteger('appeared_cl45_b_sc')->unsigned();
            $table->smallInteger('appeared_cl45_g_sc')->unsigned();
            $table->smallInteger('passed_cl45_b_sc')->unsigned();
            $table->smallInteger('passed_cl45_g_sc')->unsigned();
            $table->smallInteger('passed_with_above_60_cl45_b_sc')->unsigned();
            $table->smallInteger('passed_with_above_60_cl45_g_sc')->unsigned();

            $table->smallInteger('enrollment_cl78_b_sc')->unsigned();
            $table->smallInteger('enrollment_cl78_g_sc')->unsigned();
            $table->smallInteger('appeared_cl78_b_sc')->unsigned();
            $table->smallInteger('appeared_cl78_g_sc')->unsigned();
            $table->smallInteger('passed_cl78_b_sc')->unsigned();
            $table->smallInteger('passed_cl78_g_sc')->unsigned();
            $table->smallInteger('passed_with_above_60_cl78_b_sc')->unsigned();
            $table->smallInteger('passed_with_above_60_cl78_g_sc')->unsigned();

            $table->smallInteger('enrollment_cl45_b_st')->unsigned();
            $table->smallInteger('enrollment_cl45_g_st')->unsigned();
            $table->smallInteger('appeared_cl45_b_st')->unsigned();
            $table->smallInteger('appeared_cl45_g_st')->unsigned();
            $table->smallInteger('passed_cl45_b_st')->unsigned();
            $table->smallInteger('passed_cl45_g_st')->unsigned();
            $table->smallInteger('passed_with_above_60_cl45_b_st')->unsigned();
            $table->smallInteger('passed_with_above_60_cl45_g_st')->unsigned();

            $table->smallInteger('enrollment_cl78_b_st')->unsigned();
            $table->smallInteger('enrollment_cl78_g_st')->unsigned();
            $table->smallInteger('appeared_cl78_b_st')->unsigned();
            $table->smallInteger('appeared_cl78_g_st')->unsigned();
            $table->smallInteger('passed_cl78_b_st')->unsigned();
            $table->smallInteger('passed_cl78_g_st')->unsigned();
            $table->smallInteger('passed_with_above_60_cl78_b_st')->unsigned();
            $table->smallInteger('passed_with_above_60_cl78_g_st')->unsigned();

            $table->smallInteger('enrollment_cl45_b_obc')->unsigned();
            $table->smallInteger('enrollment_cl45_g_obc')->unsigned();
            $table->smallInteger('appeared_cl45_b_obc')->unsigned();
            $table->smallInteger('appeared_cl45_g_obc')->unsigned();
            $table->smallInteger('passed_cl45_b_obc')->unsigned();
            $table->smallInteger('passed_cl45_g_obc')->unsigned();
            $table->smallInteger('passed_with_above_60_cl45_b_obc')->unsigned();
            $table->smallInteger('passed_with_above_60_cl45_g_obc')->unsigned();

            $table->smallInteger('enrollment_cl78_b_obc')->unsigned();
            $table->smallInteger('enrollment_cl78_g_obc')->unsigned();
            $table->smallInteger('appeared_cl78_b_obc')->unsigned();
            $table->smallInteger('appeared_cl78_g_obc')->unsigned();
            $table->smallInteger('passed_cl78_b_obc')->unsigned();
            $table->smallInteger('passed_cl78_g_obc')->unsigned();
            $table->smallInteger('passed_with_above_60_cl78_b_obc')->unsigned();
            $table->smallInteger('passed_with_above_60_cl78_g_obc')->unsigned();

            $table->smallInteger('enrollment_cl45_b_total')->unsigned();
            $table->smallInteger('enrollment_cl45_g_total')->unsigned();
            $table->smallInteger('appeared_cl45_b_total')->unsigned();
            $table->smallInteger('appeared_cl45_g_total')->unsigned();
            $table->smallInteger('passed_cl45_b_total')->unsigned();
            $table->smallInteger('passed_cl45_g_total')->unsigned();
            $table->smallInteger('passed_with_above_60_cl45_b_total')->unsigned();
            $table->smallInteger('passed_with_above_60_cl45_g_total')->unsigned();

            $table->smallInteger('enrollment_cl78_b_total')->unsigned();
            $table->smallInteger('enrollment_cl78_g_total')->unsigned();
            $table->smallInteger('appeared_cl78_b_total')->unsigned();
            $table->smallInteger('appeared_cl78_g_total')->unsigned();
            $table->smallInteger('passed_cl78_b_total')->unsigned();
            $table->smallInteger('passed_cl78_g_total')->unsigned();
            $table->smallInteger('passed_with_above_60_cl78_b_total')->unsigned();
            $table->smallInteger('passed_with_above_60_cl78_g_total')->unsigned();


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
        Schema::drop('examination_results');
    }
}
