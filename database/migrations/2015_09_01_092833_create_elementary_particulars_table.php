<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElementaryParticularsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stats_elementary_particulars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('statistic_id');

            $table->integer('school_development_grant_receipt');
            $table->integer('school_maintenance_grant_receipt');
            $table->integer('teachers_grant_receipt');
            $table->integer('school_development_grant_expenditure');
            $table->integer('school_maintenance_grant_expenditure');
            $table->integer('teachers_grant_expenditure');

            $table->integer('number_of_instructional_days_primary');
            $table->integer('number_of_instructional_days_upper_primary');
            $table->integer('school_hour_per_day_primary');
            $table->integer('school_hour_per_day_upper_primary');
            $table->integer('teacher_working_hour_per_day_primary');
            $table->integer('teacher_working_hour_per_day_upper_primary');

            $table->boolean('cce_implemented')->default(0);
            $table->enum('cumulative_record_maintained', [0,1,2])->default(0);
            $table->enum('cumulative_record_shared_with_parents', [0,1,2])->default(0);

            $table->integer('number_of_children_enrolled_under_quota');
            $table->integer('number_of_children_continuing_under_quota');

            $table->tinyInteger('academic_session_start_month');
            
            $table->enum('textbook_received', [1,2]);
            $table->date('textbook_received_on');
            $table->enum('complete_textbook_received', [1,2,3]);
            $table->enum('tle_available', [1,2,3]);
            $table->enum('equipment_available', [1,2,3]);

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
        Schema::drop('stats_elementary_particulars');
    }
}
