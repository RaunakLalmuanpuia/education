<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradeOneAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grade_one_admissions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('statistic_id');
            $table->enum('gender', ['girls', 'boys']);
            $table->tinyInteger('age_group_lt5');
            $table->tinyInteger('age_group_5');
            $table->tinyInteger('age_group_6');
            $table->tinyInteger('age_group_7');
            $table->tinyInteger('age_group_gt7');

            $table->tinyInteger('total_admitted');
            $table->tinyInteger('preschool_in_same_school');
            $table->tinyInteger('preschool_in_other_school');
            $table->tinyInteger('preschool_in_anganwadi');
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
        Schema::drop('grade_one_admissions');
    }
}
