<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSecondaryParticularsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secondary_particulars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('statistic_id');

            $table->integer('number_of_instructional_days_secondary');
            $table->integer('number_of_instructional_days_higher_secondary');
            $table->integer('school_hour_per_day_secondary');
            $table->integer('school_hour_per_day_higher_secondary');
            $table->integer('teacher_working_hour_per_day_secondary');
            $table->integer('teacher_working_hour_per_day_higher_secondary');

            $table->enum('sbc_consituted', [1,2,3]);
            $table->enum('ac_consituted', [1,2]);
            $table->enum('pta_consituted', [1,2]);
            $table->tinyInteger('pta_meetings');

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
        Schema::drop('secondary_particulars');
    }
}
