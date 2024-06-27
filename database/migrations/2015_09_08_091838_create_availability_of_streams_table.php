<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvailabilityOfStreamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('availability_of_streams', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('statistic_id');
            $table->enum('arts', [0,1,2]);
            $table->enum('science', [0,1,2]);
            $table->enum('commerce', [0,1,2]);
            $table->enum('vocational', [0,1,2]);
            $table->enum('other', [0,1,2]);
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
        Schema::drop('availability_of_streams');
    }
}
