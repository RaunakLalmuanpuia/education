<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnrollmentAndRepeaterByStreamHigherSecondariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollment_and_repeater_by_stream_higher_secondaries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('statistic_id');

            $table->smallInteger('arts_g_enrollment_11_b')->unsigned();
            $table->smallInteger('arts_g_enrollment_11_g')->unsigned();
            $table->smallInteger('arts_g_enrollment_12_b')->unsigned();
            $table->smallInteger('arts_g_enrollment_12_g')->unsigned();
            $table->smallInteger('arts_sc_enrollment_11_b')->unsigned();
            $table->smallInteger('arts_sc_enrollment_11_g')->unsigned();
            $table->smallInteger('arts_sc_enrollment_12_b')->unsigned();
            $table->smallInteger('arts_sc_enrollment_12_g')->unsigned();
            $table->smallInteger('arts_st_enrollment_11_b')->unsigned();
            $table->smallInteger('arts_st_enrollment_11_g')->unsigned();
            $table->smallInteger('arts_st_enrollment_12_b')->unsigned();
            $table->smallInteger('arts_st_enrollment_12_g')->unsigned();
            $table->smallInteger('arts_obc_enrollment_11_b')->unsigned();
            $table->smallInteger('arts_obc_enrollment_11_g')->unsigned();
            $table->smallInteger('arts_obc_enrollment_12_b')->unsigned();
            $table->smallInteger('arts_obc_enrollment_12_g')->unsigned();

            $table->smallInteger('arts_g_repeaters_11_b')->unsigned();
            $table->smallInteger('arts_g_repeaters_11_g')->unsigned();
            $table->smallInteger('arts_g_repeaters_12_b')->unsigned();
            $table->smallInteger('arts_g_repeaters_12_g')->unsigned();
            $table->smallInteger('arts_sc_repeaters_11_b')->unsigned();
            $table->smallInteger('arts_sc_repeaters_11_g')->unsigned();
            $table->smallInteger('arts_sc_repeaters_12_b')->unsigned();
            $table->smallInteger('arts_sc_repeaters_12_g')->unsigned();
            $table->smallInteger('arts_st_repeaters_11_b')->unsigned();
            $table->smallInteger('arts_st_repeaters_11_g')->unsigned();
            $table->smallInteger('arts_st_repeaters_12_b')->unsigned();
            $table->smallInteger('arts_st_repeaters_12_g')->unsigned();
            $table->smallInteger('arts_obc_repeaters_11_b')->unsigned();
            $table->smallInteger('arts_obc_repeaters_11_g')->unsigned();
            $table->smallInteger('arts_obc_repeaters_12_b')->unsigned();
            $table->smallInteger('arts_obc_repeaters_12_g')->unsigned();

            $table->smallInteger('science_g_enrollment_11_b')->unsigned();
            $table->smallInteger('science_g_enrollment_11_g')->unsigned();
            $table->smallInteger('science_g_enrollment_12_b')->unsigned();
            $table->smallInteger('science_g_enrollment_12_g')->unsigned();
            $table->smallInteger('science_sc_enrollment_11_b')->unsigned();
            $table->smallInteger('science_sc_enrollment_11_g')->unsigned();
            $table->smallInteger('science_sc_enrollment_12_b')->unsigned();
            $table->smallInteger('science_sc_enrollment_12_g')->unsigned();
            $table->smallInteger('science_st_enrollment_11_b')->unsigned();
            $table->smallInteger('science_st_enrollment_11_g')->unsigned();
            $table->smallInteger('science_st_enrollment_12_b')->unsigned();
            $table->smallInteger('science_st_enrollment_12_g')->unsigned();
            $table->smallInteger('science_obc_enrollment_11_b')->unsigned();
            $table->smallInteger('science_obc_enrollment_11_g')->unsigned();
            $table->smallInteger('science_obc_enrollment_12_b')->unsigned();
            $table->smallInteger('science_obc_enrollment_12_g')->unsigned();

            $table->smallInteger('science_g_repeaters_11_b')->unsigned();
            $table->smallInteger('science_g_repeaters_11_g')->unsigned();
            $table->smallInteger('science_g_repeaters_12_b')->unsigned();
            $table->smallInteger('science_g_repeaters_12_g')->unsigned();
            $table->smallInteger('science_sc_repeaters_11_b')->unsigned();
            $table->smallInteger('science_sc_repeaters_11_g')->unsigned();
            $table->smallInteger('science_sc_repeaters_12_b')->unsigned();
            $table->smallInteger('science_sc_repeaters_12_g')->unsigned();
            $table->smallInteger('science_st_repeaters_11_b')->unsigned();
            $table->smallInteger('science_st_repeaters_11_g')->unsigned();
            $table->smallInteger('science_st_repeaters_12_b')->unsigned();
            $table->smallInteger('science_st_repeaters_12_g')->unsigned();
            $table->smallInteger('science_obc_repeaters_11_b')->unsigned();
            $table->smallInteger('science_obc_repeaters_11_g')->unsigned();
            $table->smallInteger('science_obc_repeaters_12_b')->unsigned();
            $table->smallInteger('science_obc_repeaters_12_g')->unsigned();

            $table->smallInteger('commerce_g_enrollment_11_b')->unsigned();
            $table->smallInteger('commerce_g_enrollment_11_g')->unsigned();
            $table->smallInteger('commerce_g_enrollment_12_b')->unsigned();
            $table->smallInteger('commerce_g_enrollment_12_g')->unsigned();
            $table->smallInteger('commerce_sc_enrollment_11_b')->unsigned();
            $table->smallInteger('commerce_sc_enrollment_11_g')->unsigned();
            $table->smallInteger('commerce_sc_enrollment_12_b')->unsigned();
            $table->smallInteger('commerce_sc_enrollment_12_g')->unsigned();
            $table->smallInteger('commerce_st_enrollment_11_b')->unsigned();
            $table->smallInteger('commerce_st_enrollment_11_g')->unsigned();
            $table->smallInteger('commerce_st_enrollment_12_b')->unsigned();
            $table->smallInteger('commerce_st_enrollment_12_g')->unsigned();
            $table->smallInteger('commerce_obc_enrollment_11_b')->unsigned();
            $table->smallInteger('commerce_obc_enrollment_11_g')->unsigned();
            $table->smallInteger('commerce_obc_enrollment_12_b')->unsigned();
            $table->smallInteger('commerce_obc_enrollment_12_g')->unsigned();

            $table->smallInteger('commerce_g_repeaters_11_b')->unsigned();
            $table->smallInteger('commerce_g_repeaters_11_g')->unsigned();
            $table->smallInteger('commerce_g_repeaters_12_b')->unsigned();
            $table->smallInteger('commerce_g_repeaters_12_g')->unsigned();
            $table->smallInteger('commerce_sc_repeaters_11_b')->unsigned();
            $table->smallInteger('commerce_sc_repeaters_11_g')->unsigned();
            $table->smallInteger('commerce_sc_repeaters_12_b')->unsigned();
            $table->smallInteger('commerce_sc_repeaters_12_g')->unsigned();
            $table->smallInteger('commerce_st_repeaters_11_b')->unsigned();
            $table->smallInteger('commerce_st_repeaters_11_g')->unsigned();
            $table->smallInteger('commerce_st_repeaters_12_b')->unsigned();
            $table->smallInteger('commerce_st_repeaters_12_g')->unsigned();
            $table->smallInteger('commerce_obc_repeaters_11_b')->unsigned();
            $table->smallInteger('commerce_obc_repeaters_11_g')->unsigned();
            $table->smallInteger('commerce_obc_repeaters_12_b')->unsigned();
            $table->smallInteger('commerce_obc_repeaters_12_g')->unsigned();

            $table->smallInteger('vocational_g_enrollment_11_b')->unsigned();
            $table->smallInteger('vocational_g_enrollment_11_g')->unsigned();
            $table->smallInteger('vocational_g_enrollment_12_b')->unsigned();
            $table->smallInteger('vocational_g_enrollment_12_g')->unsigned();
            $table->smallInteger('vocational_sc_enrollment_11_b')->unsigned();
            $table->smallInteger('vocational_sc_enrollment_11_g')->unsigned();
            $table->smallInteger('vocational_sc_enrollment_12_b')->unsigned();
            $table->smallInteger('vocational_sc_enrollment_12_g')->unsigned();
            $table->smallInteger('vocational_st_enrollment_11_b')->unsigned();
            $table->smallInteger('vocational_st_enrollment_11_g')->unsigned();
            $table->smallInteger('vocational_st_enrollment_12_b')->unsigned();
            $table->smallInteger('vocational_st_enrollment_12_g')->unsigned();
            $table->smallInteger('vocational_obc_enrollment_11_b')->unsigned();
            $table->smallInteger('vocational_obc_enrollment_11_g')->unsigned();
            $table->smallInteger('vocational_obc_enrollment_12_b')->unsigned();
            $table->smallInteger('vocational_obc_enrollment_12_g')->unsigned();

            $table->smallInteger('vocational_g_repeaters_11_b')->unsigned();
            $table->smallInteger('vocational_g_repeaters_11_g')->unsigned();
            $table->smallInteger('vocational_g_repeaters_12_b')->unsigned();
            $table->smallInteger('vocational_g_repeaters_12_g')->unsigned();
            $table->smallInteger('vocational_sc_repeaters_11_b')->unsigned();
            $table->smallInteger('vocational_sc_repeaters_11_g')->unsigned();
            $table->smallInteger('vocational_sc_repeaters_12_b')->unsigned();
            $table->smallInteger('vocational_sc_repeaters_12_g')->unsigned();
            $table->smallInteger('vocational_st_repeaters_11_b')->unsigned();
            $table->smallInteger('vocational_st_repeaters_11_g')->unsigned();
            $table->smallInteger('vocational_st_repeaters_12_b')->unsigned();
            $table->smallInteger('vocational_st_repeaters_12_g')->unsigned();
            $table->smallInteger('vocational_obc_repeaters_11_b')->unsigned();
            $table->smallInteger('vocational_obc_repeaters_11_g')->unsigned();
            $table->smallInteger('vocational_obc_repeaters_12_b')->unsigned();
            $table->smallInteger('vocational_obc_repeaters_12_g')->unsigned();

            $table->smallInteger('other_g_enrollment_11_b')->unsigned();
            $table->smallInteger('other_g_enrollment_11_g')->unsigned();
            $table->smallInteger('other_g_enrollment_12_b')->unsigned();
            $table->smallInteger('other_g_enrollment_12_g')->unsigned();
            $table->smallInteger('other_sc_enrollment_11_b')->unsigned();
            $table->smallInteger('other_sc_enrollment_11_g')->unsigned();
            $table->smallInteger('other_sc_enrollment_12_b')->unsigned();
            $table->smallInteger('other_sc_enrollment_12_g')->unsigned();
            $table->smallInteger('other_st_enrollment_11_b')->unsigned();
            $table->smallInteger('other_st_enrollment_11_g')->unsigned();
            $table->smallInteger('other_st_enrollment_12_b')->unsigned();
            $table->smallInteger('other_st_enrollment_12_g')->unsigned();
            $table->smallInteger('other_obc_enrollment_11_b')->unsigned();
            $table->smallInteger('other_obc_enrollment_11_g')->unsigned();
            $table->smallInteger('other_obc_enrollment_12_b')->unsigned();
            $table->smallInteger('other_obc_enrollment_12_g')->unsigned();

            $table->smallInteger('other_g_repeaters_11_b')->unsigned();
            $table->smallInteger('other_g_repeaters_11_g')->unsigned();
            $table->smallInteger('other_g_repeaters_12_b')->unsigned();
            $table->smallInteger('other_g_repeaters_12_g')->unsigned();
            $table->smallInteger('other_sc_repeaters_11_b')->unsigned();
            $table->smallInteger('other_sc_repeaters_11_g')->unsigned();
            $table->smallInteger('other_sc_repeaters_12_b')->unsigned();
            $table->smallInteger('other_sc_repeaters_12_g')->unsigned();
            $table->smallInteger('other_st_repeaters_11_b')->unsigned();
            $table->smallInteger('other_st_repeaters_11_g')->unsigned();
            $table->smallInteger('other_st_repeaters_12_b')->unsigned();
            $table->smallInteger('other_st_repeaters_12_g')->unsigned();
            $table->smallInteger('other_obc_repeaters_11_b')->unsigned();
            $table->smallInteger('other_obc_repeaters_11_g')->unsigned();
            $table->smallInteger('other_obc_repeaters_12_b')->unsigned();
            $table->smallInteger('other_obc_repeaters_12_g')->unsigned();


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
        Schema::drop('enrollment_and_repeater_by_stream_higher_secondaries');
    }
}
