<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacilitiesPrimariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facilities_primaries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('statistic_id');

            $table->smallInteger('free_textbook_b_g')->unsigned();
            $table->smallInteger('free_textbook_g_g')->unsigned();
            $table->smallInteger('free_textbook_b_sc')->unsigned();
            $table->smallInteger('free_textbook_g_sc')->unsigned();
            $table->smallInteger('free_textbook_b_st')->unsigned();
            $table->smallInteger('free_textbook_g_st')->unsigned();
            $table->smallInteger('free_textbook_b_obc')->unsigned();
            $table->smallInteger('free_textbook_g_obc')->unsigned();
            $table->smallInteger('free_textbook_b_total')->unsigned();
            $table->smallInteger('free_textbook_g_total')->unsigned();
            $table->smallInteger('free_textbook_b_muslim_minority')->unsigned();
            $table->smallInteger('free_textbook_g_muslim_minority')->unsigned();

            $table->smallInteger('free_uniforms_b_g')->unsigned();
            $table->smallInteger('free_uniforms_g_g')->unsigned();
            $table->smallInteger('free_uniforms_b_sc')->unsigned();
            $table->smallInteger('free_uniforms_g_sc')->unsigned();
            $table->smallInteger('free_uniforms_b_st')->unsigned();
            $table->smallInteger('free_uniforms_g_st')->unsigned();
            $table->smallInteger('free_uniforms_b_obc')->unsigned();
            $table->smallInteger('free_uniforms_g_obc')->unsigned();
            $table->smallInteger('free_uniforms_b_total')->unsigned();
            $table->smallInteger('free_uniforms_g_total')->unsigned();
            $table->smallInteger('free_uniforms_b_muslim_minority')->unsigned();
            $table->smallInteger('free_uniforms_g_muslim_minority')->unsigned();

            $table->smallInteger('free_state_defined_incentives_b_g')->unsigned();
            $table->smallInteger('free_state_defined_incentives_g_g')->unsigned();
            $table->smallInteger('free_state_defined_incentives_b_sc')->unsigned();
            $table->smallInteger('free_state_defined_incentives_g_sc')->unsigned();
            $table->smallInteger('free_state_defined_incentives_b_st')->unsigned();
            $table->smallInteger('free_state_defined_incentives_g_st')->unsigned();
            $table->smallInteger('free_state_defined_incentives_b_obc')->unsigned();
            $table->smallInteger('free_state_defined_incentives_g_obc')->unsigned();
            $table->smallInteger('free_state_defined_incentives_b_total')->unsigned();
            $table->smallInteger('free_state_defined_incentives_g_total')->unsigned();
            $table->smallInteger('free_state_defined_incentives_b_muslim_minority')->unsigned();
            $table->smallInteger('free_state_defined_incentives_g_muslim_minority')->unsigned();

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
        Schema::drop('facilities_primaries');
    }
}
