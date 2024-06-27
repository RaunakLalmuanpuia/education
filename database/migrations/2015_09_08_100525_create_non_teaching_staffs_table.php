<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNonTeachingStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('non_teaching_staffs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('statistic_id');

            $table->tinyInteger('accountant_sanctioned')->unsigned();
            $table->tinyInteger('accountant_in_position')->unsigned();
            
            $table->tinyInteger('library_assistant_sanctioned')->unsigned();
            $table->tinyInteger('library_assistant_in_position')->unsigned();
            $table->tinyInteger('lab_assistant_sanctioned')->unsigned();
            $table->tinyInteger('lab_assistant_in_position')->unsigned();
            $table->tinyInteger('udc_sanctioned')->unsigned();
            $table->tinyInteger('udc_in_position')->unsigned();
            $table->tinyInteger('ldc_sanctioned')->unsigned();
            $table->tinyInteger('ldc_in_position')->unsigned();
            $table->tinyInteger('peon_sanctioned')->unsigned();
            $table->tinyInteger('peon_in_position')->unsigned();
            $table->tinyInteger('night_watchman_sanctioned')->unsigned();
            $table->tinyInteger('night_watchman_in_position')->unsigned();

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
        Schema::drop('non_teaching_staffs');
    }
}
