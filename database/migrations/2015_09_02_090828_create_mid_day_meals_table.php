<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMidDayMealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mid_day_meals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('statistic_id');

            $table->enum('status', [1,2,3]);
            $table->enum('status_of_kitchen_shed', [0,1,2,3,4])->nullable();
            $table->enum('source_of_mdm', [1,2,3,4,5,6,7])->nullable();

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
        Schema::drop('mid_day_meals');
    }
}
