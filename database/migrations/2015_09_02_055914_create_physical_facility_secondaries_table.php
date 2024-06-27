<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhysicalFacilitySecondariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('physical_facility_secondaries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('statistic_id');

            $table->enum('boys_hostel', [1,2]);
            $table->tinyInteger('boys_hosteller');
            $table->enum('girls_hostel', [1,2]);
            $table->tinyInteger('girls_hosteller');
            $table->enum('separate_room_for_vice_principal', [1,2]);
            $table->enum('separate_common_room_for_girls', [1,2]);
            $table->enum('staffroom', [1,2]);
            $table->enum('ict_lab', [1,2]);
            $table->enum('computer_room', [1,2]);
            $table->enum('co_curricular_room', [1,2]);
            $table->enum('staff_quarter', [1,2]);
            $table->enum('integrated_science_lab', [1,2])->nullable();
            $table->enum('library_room', [1,2]);

            $table->enum('physics_lab', [1,2])->nullable();
            $table->enum('physics_lab_condition', [1,2,3,4])->nullable();
            $table->enum('chemistry_lab', [1,2])->nullable();
            $table->enum('chemistry_lab_condition', [1,2,3,4])->nullable();
            $table->enum('biology_lab', [1,2])->nullable();
            $table->enum('biology_lab_condition', [1,2,3,4])->nullable();
            $table->enum('computer_lab', [1,2])->nullable();
            $table->enum('computer_lab_condition', [1,2,3,4])->nullable();
            $table->enum('math_lab', [1,2])->nullable();
            $table->enum('math_lab_condition', [1,2,3,4])->nullable();
            $table->enum('language_lab', [1,2])->nullable();
            $table->enum('language_lab_condition', [1,2,3,4])->nullable();
            $table->enum('geography_lab', [1,2])->nullable();
            $table->enum('geography_lab_condition', [1,2,3,4])->nullable();
            $table->enum('home_science_lab', [1,2])->nullable();
            $table->enum('home_science_lab_condition', [1,2,3,4])->nullable();
            $table->enum('psychology_lab', [1,2])->nullable();
            $table->enum('psychology_lab_condition', [1,2,3,4])->nullable();

            $table->enum('av_pa_system', [1,2]);
            $table->enum('lcd_projector', [1,2]);
            $table->enum('fire_extinguisher', [1,2]);
            $table->enum('internet_connection', [1,2]);
            $table->enum('rain_water_harvesting', [1,2]);
            $table->enum('science_kit', [1,2]);
            $table->enum('math_kit', [1,2]);


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
        Schema::drop('physical_facility_secondaries');
    }
}
