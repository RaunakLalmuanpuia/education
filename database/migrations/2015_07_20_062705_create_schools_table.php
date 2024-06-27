<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('name');
            $table->enum('rural_urban', [1,2]);
            $table->string('habitation_code');
            $table->string('village_code');
            $table->string('district_code');
            $table->string('cluster_code');
            $table->string('educational_block_code');
            $table->string('pincode', 6);
            $table->string('panchayat_code');
            $table->integer('crc_id');
            $table->string('cd_block_name');
            $table->string('constituency_code');
            $table->string('municipality_code')->nullable();
            $table->string('city_code')->nullable();
            $table->string('head_phone_number_landline')->nullable();
            $table->string('head_phone_number_mobile');
            $table->string('respondent_phone_number_landline')->nullable();
            $table->string('respondent_phone_number_mobile')->nullable();
            $table->string('website')->nullable();
            $table->string('email')->nullable();
            $table->integer('school_category_id');
            $table->string('lowest_class',2);
            $table->enum('type_of_school_elementary', [1,2,3]);
            $table->enum('type_of_school_secondary', [1,2,3]);
            $table->enum('type_of_school_higher_secondary', [1,2,3]);
            $table->integer('management_id_elementary')->nullable();
            $table->integer('management_id_secondary')->nullable();
            $table->integer('management_id_higher_secondary')->nullable();
            $table->integer('distance_primary_to_upper_primary')->nullable();
            $table->integer('distance_upper_primary_to_secondary')->nullable();
            $table->boolean('approachable_by_all_weather_road');
            $table->string('established_year', 4);
            $table->string('year_of_recognition_elementary', 4)->nullable();
            $table->string('year_of_recognition_secondary', 4)->nullable();
            $table->string('year_of_recognition_higher_secondary', 4)->nullable();
            $table->string('year_of_uprade_primary_to_upper_primary', 4)->nullable();
            $table->string('year_of_uprade_upper_primary_to_secondary', 4)->nullable();
            $table->string('year_of_uprade_secondary_to_higher_secondary', 4)->nullable();
            $table->boolean('is_cswn');
            $table->boolean('is_shift_school');
            $table->boolean('is_primary_residential');
            $table->boolean('is_upper_primary_residential');
            $table->boolean('is_secondary_residential');
            $table->boolean('is_higher_secondary_residential');
            $table->integer('type_of_residential_id')->nullable();
            // $table->integer('medium_of_instruction_1_id'); //MANY TO MANY
            $table->integer('affiliation_board_id'); 
            $table->string('latitude'); 
            $table->string('longitude');

            $table->enum('pre_primary_available', [1,2]);
            $table->enum('anganwadi_available', [1,2]);

            $table->timestamps();
        });

        // Schema::table('schools',function($table){
            
        //     $table->foreign('habitation_code')->references('code')->on('habitations');
        //     $table->foreign('vilage_code')->references('code')->on('vilages');
        //     $table->foreign('district_code')->references('code')->on('districts');
        //     $table->foreign('cluster_code')->references('code')->on('clusters');
        //     $table->foreign('educational_block_code')->references('code')->on('educational_blocks');
        //     $table->foreign('panchayat_code')->references('code')->on('panchayats');

        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('schools');
    }
}
