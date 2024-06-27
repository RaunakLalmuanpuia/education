<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhysicalFacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('physical_facilities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('statistic_id');

            $table->integer('building_status_id');
            
            $table->tinyInteger('classrooms_used_elementary')->default(0);
            $table->tinyInteger('classrooms_under_construction_elementary')->default(0);
            $table->enum('furniture_availability_elementary', [1,2,3]);
            
            $table->tinyInteger('classrooms_used_nine')->default(0);
            $table->tinyInteger('classrooms_under_construction_nine')->default(0);
            $table->enum('furniture_availability_nine', [1,2,3]);
            
            $table->tinyInteger('classrooms_used_ten')->default(0);
            $table->tinyInteger('classrooms_under_construction_ten')->default(0);
            $table->enum('furniture_availability_ten', [1,2,3]);

            $table->tinyInteger('classrooms_used_eleven')->default(0);
            $table->tinyInteger('classrooms_under_construction_eleven')->default(0);
            $table->enum('furniture_availability_eleven', [1,2,3]);

            $table->tinyInteger('classrooms_used_twelve')->default(0);
            $table->tinyInteger('classrooms_under_construction_twelve')->default(0);
            $table->enum('furniture_availability_twelve', [1,2,3]);

            $table->tinyInteger('total_other_rooms');

            $table->tinyInteger('no_of_rooms_elementary_pucca_good');
            $table->tinyInteger('no_of_rooms_elementary_pucca_minor_repair');
            $table->tinyInteger('no_of_rooms_elementary_pucca_major_repair');
            $table->tinyInteger('no_of_rooms_elementary_partial_pucca_good');
            $table->tinyInteger('no_of_rooms_elementary_partial_pucca_minor_repair');
            $table->tinyInteger('no_of_rooms_elementary_partial_pucca_major_repair');
            $table->tinyInteger('no_of_rooms_elementary_kuchcha_good');
            $table->tinyInteger('no_of_rooms_elementary_kuchcha_minor_repair');
            $table->tinyInteger('no_of_rooms_elementary_kuchcha_major_repair');
            $table->tinyInteger('no_of_rooms_elementary_tent_good');
            $table->tinyInteger('no_of_rooms_elementary_tent_minor_repair');
            $table->tinyInteger('no_of_rooms_elementary_tent_major_repair');

            $table->tinyInteger('no_of_rooms_secondary_good');
            $table->tinyInteger('no_of_rooms_secondary_minor_repair');
            $table->tinyInteger('no_of_rooms_secondary_major_repair');
            $table->tinyInteger('no_of_rooms_higher_secondary_good');
            $table->tinyInteger('no_of_rooms_higher_secondary_minor_repair');
            $table->tinyInteger('no_of_rooms_higher_secondary_major_repair');

            $table->enum('land_for_expansion', [1,2]);
            $table->enum('separate_room_for_head', [1,2]);
            $table->tinyInteger('toilet_available_boys');
            $table->tinyInteger('toilet_available_girls');
            $table->tinyInteger('toilet_functional_boys');
            $table->tinyInteger('toilet_functional_girls');
            $table->tinyInteger('toilet_water_available_boys');
            $table->tinyInteger('toilet_water_available_girls');

            $table->enum('hand_washing_available', [1,2]);
            $table->enum('cwsn_friendly_toilet', [1,2]);

            $table->integer('source_of_drinking_water_id');
            $table->enum('source_of_drinking_water_functional', [1,2]);
            $table->enum('electricity', [1,2,3]);

            $table->integer('type_of_boundary_wall_id');

            $table->enum('library_available', [1,2]);
            $table->integer('number_of_books')->nullable();
            $table->enum('librarian_avalable', [1,2])->nullable();
            
            $table->enum('newspaper_subscription_available', [1,2]);
            $table->enum('playground_available',[1,2]);
            $table->enum('land_available_for_playground',[1,2])->nullable();

            $table->tinyInteger('number_of_computers_available');
            $table->tinyInteger('number_of_computers_functional');

            $table->enum('cal_lab_available',[1,2,3]);
            $table->enum('medical_checkup_conducted',[1,2]);
            $table->enum('ramp_needed',[1,2]);
            $table->enum('ramp_available',[1,2])->nullable();
            $table->enum('hand_rails_for_ramp_available',[1,2])->nullable();


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
        Schema::drop('physical_facilities');
    }
}
