<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecialTrainingDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stats_special_training_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('statistic_id');

            $table->integer('number_of_children_current_year');
            $table->integer('number_of_children_enrolled_previous_year');
            $table->integer('number_of_children_completed_previous_year');
            $table->enum('special_training_conductor', [1,2,3,4,5,6]);
            $table->enum('place_of_training', [1,2,3]);
            $table->enum('type_of_training', [1,2,3]);
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
        Schema::drop('stats_special_training_details');
    }
}
