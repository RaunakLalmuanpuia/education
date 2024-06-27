<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnrollmentByMediumOfInstructionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollment_by_medium_of_instructions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('statistic_id');
            $table->integer('medium_of_instruction_id');

            $table->smallInteger('cl1b');
            $table->smallInteger('cl1g');
            $table->smallInteger('cl2b');
            $table->smallInteger('cl2g');
            $table->smallInteger('cl3b');
            $table->smallInteger('cl3g');
            $table->smallInteger('cl4b');
            $table->smallInteger('cl4g');
            $table->smallInteger('cl5b');
            $table->smallInteger('cl5g');
            $table->smallInteger('cl6b');
            $table->smallInteger('cl6g');
            $table->smallInteger('cl7b');
            $table->smallInteger('cl7g');
            $table->smallInteger('cl8b');
            $table->smallInteger('cl8g');
            $table->smallInteger('cl9b');
            $table->smallInteger('cl9g');
            $table->smallInteger('cl10b');
            $table->smallInteger('cl10g');
            $table->smallInteger('cl11b');
            $table->smallInteger('cl11g');
            $table->smallInteger('cl12b');
            $table->smallInteger('cl12g');

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
        Schema::drop('enrollment_by_medium_of_instructions');
    }
}
