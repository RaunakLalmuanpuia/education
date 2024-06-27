<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticularsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('particulars', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('statistic_id');

            $table->integer('pre_primary_students'); 
            $table->integer('pre_primary_teachers');
            $table->integer('anganwadi_students'); 
            $table->integer('anganwadi_teachers'); 

            $table->integer('academic_inspections');
            $table->integer('crc_coordinator_visits');
            $table->integer('block_level_officer_visits');

            $table->tinyInteger('sanctioned_post_for_primary');
            $table->tinyInteger('sanctioned_post_for_upper_primary');
            $table->tinyInteger('sanctioned_post_for_secondary');
            $table->tinyInteger('sanctioned_post_for_higher_secondary');
            
            $table->tinyInteger('number_of_staff_for_primary');
            $table->tinyInteger('number_of_staff_for_upper_primary');
            $table->tinyInteger('number_of_staff_for_secondary');
            $table->tinyInteger('number_of_staff_for_higher_secondary');

            $table->tinyInteger('number_of_contract_teachers_for_primary');
            $table->tinyInteger('number_of_contract_teachers_for_upper_primary');
            $table->tinyInteger('number_of_contract_teachers_for_secondary');
            $table->tinyInteger('number_of_contract_teachers_for_higher_secondary');

            $table->tinyInteger('number_of_part_time_teachers_for_primary')->default(0);
            $table->tinyInteger('number_of_part_time_teachers_for_upper_primary')->default(0);
            $table->tinyInteger('number_of_part_time_teachers_for_secondary')->default(0);
            $table->tinyInteger('number_of_part_time_teachers_for_higher_secondary')->default(0);

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
        Schema::drop('particulars');
    }
}
