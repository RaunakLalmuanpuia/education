<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnrollmentByAgesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollment_by_ages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('statistic_id');

            $table->smallInteger('cl1b_lt5')->unsigned();
            $table->smallInteger('cl1g_lt5')->unsigned();
            $table->smallInteger('cl1b_5')->unsigned();
            $table->smallInteger('cl1g_5')->unsigned();
            $table->smallInteger('cl1b_6')->unsigned();
            $table->smallInteger('cl1g_6')->unsigned();
            $table->smallInteger('cl1b_7')->unsigned();
            $table->smallInteger('cl1g_7')->unsigned();
            $table->smallInteger('cl1b_8')->unsigned();
            $table->smallInteger('cl1g_8')->unsigned();
            $table->smallInteger('cl1b_9')->unsigned();
            $table->smallInteger('cl1g_9')->unsigned();
            $table->smallInteger('cl1b_10')->unsigned();
            $table->smallInteger('cl1g_10')->unsigned();
            $table->smallInteger('cl1b_11')->unsigned();
            $table->smallInteger('cl1g_11')->unsigned();
            $table->smallInteger('cl1b_12')->unsigned();
            $table->smallInteger('cl1g_12')->unsigned();

            $table->smallInteger('cl2b_5')->unsigned();
            $table->smallInteger('cl2g_5')->unsigned();
            $table->smallInteger('cl2b_6')->unsigned();
            $table->smallInteger('cl2g_6')->unsigned();
            $table->smallInteger('cl2b_7')->unsigned();
            $table->smallInteger('cl2g_7')->unsigned();
            $table->smallInteger('cl2b_8')->unsigned();
            $table->smallInteger('cl2g_8')->unsigned();
            $table->smallInteger('cl2b_9')->unsigned();
            $table->smallInteger('cl2g_9')->unsigned();
            $table->smallInteger('cl2b_10')->unsigned();
            $table->smallInteger('cl2g_10')->unsigned();
            $table->smallInteger('cl2b_11')->unsigned();
            $table->smallInteger('cl2g_11')->unsigned();
            $table->smallInteger('cl2b_12')->unsigned();
            $table->smallInteger('cl2g_12')->unsigned();
            $table->smallInteger('cl2b_13')->unsigned();
            $table->smallInteger('cl2g_13')->unsigned();

            $table->smallInteger('cl3b_7')->unsigned();
            $table->smallInteger('cl3g_7')->unsigned();
            $table->smallInteger('cl3b_8')->unsigned();
            $table->smallInteger('cl3g_8')->unsigned();
            $table->smallInteger('cl3b_9')->unsigned();
            $table->smallInteger('cl3g_9')->unsigned();
            $table->smallInteger('cl3b_10')->unsigned();
            $table->smallInteger('cl3g_10')->unsigned();
            $table->smallInteger('cl3b_11')->unsigned();
            $table->smallInteger('cl3g_11')->unsigned();
            $table->smallInteger('cl3b_12')->unsigned();
            $table->smallInteger('cl3g_12')->unsigned();
            $table->smallInteger('cl3b_13')->unsigned();
            $table->smallInteger('cl3g_13')->unsigned();
            $table->smallInteger('cl3b_14')->unsigned();
            $table->smallInteger('cl3g_14')->unsigned();
            $table->smallInteger('cl3b_15')->unsigned();
            $table->smallInteger('cl3g_15')->unsigned();
            $table->smallInteger('cl3b_16')->unsigned();
            $table->smallInteger('cl3g_16')->unsigned();
            $table->smallInteger('cl3b_17')->unsigned();
            $table->smallInteger('cl3g_17')->unsigned();
            $table->smallInteger('cl3b_18')->unsigned();
            $table->smallInteger('cl3g_18')->unsigned();
            $table->smallInteger('cl3b_19')->unsigned();
            $table->smallInteger('cl3g_19')->unsigned();
            $table->smallInteger('cl3b_20')->unsigned();
            $table->smallInteger('cl3g_20')->unsigned();
            $table->smallInteger('cl3b_21')->unsigned();
            $table->smallInteger('cl3g_21')->unsigned();
            $table->smallInteger('cl3b_22')->unsigned();
            $table->smallInteger('cl3g_22')->unsigned();
            $table->smallInteger('cl3b_gt22')->unsigned();
            $table->smallInteger('cl3g_gt22')->unsigned();

            $table->smallInteger('cl4b_8')->unsigned();
            $table->smallInteger('cl4g_8')->unsigned();
            $table->smallInteger('cl4b_9')->unsigned();
            $table->smallInteger('cl4g_9')->unsigned();
            $table->smallInteger('cl4b_10')->unsigned();
            $table->smallInteger('cl4g_10')->unsigned();
            $table->smallInteger('cl4b_11')->unsigned();
            $table->smallInteger('cl4g_11')->unsigned();
            $table->smallInteger('cl4b_12')->unsigned();
            $table->smallInteger('cl4g_12')->unsigned();
            $table->smallInteger('cl4b_13')->unsigned();
            $table->smallInteger('cl4g_13')->unsigned();
            $table->smallInteger('cl4b_14')->unsigned();
            $table->smallInteger('cl4g_14')->unsigned();
            $table->smallInteger('cl4b_15')->unsigned();
            $table->smallInteger('cl4g_15')->unsigned();
            $table->smallInteger('cl4b_16')->unsigned();
            $table->smallInteger('cl4g_16')->unsigned();
            $table->smallInteger('cl4b_17')->unsigned();
            $table->smallInteger('cl4g_17')->unsigned();
            $table->smallInteger('cl4b_18')->unsigned();
            $table->smallInteger('cl4g_18')->unsigned();
            $table->smallInteger('cl4b_19')->unsigned();
            $table->smallInteger('cl4g_19')->unsigned();
            $table->smallInteger('cl4b_20')->unsigned();
            $table->smallInteger('cl4g_20')->unsigned();
            $table->smallInteger('cl4b_21')->unsigned();
            $table->smallInteger('cl4g_21')->unsigned();
            $table->smallInteger('cl4b_22')->unsigned();
            $table->smallInteger('cl4g_22')->unsigned();
            $table->smallInteger('cl4b_gt22')->unsigned();
            $table->smallInteger('cl4g_gt22')->unsigned();

            $table->smallInteger('cl5b_9')->unsigned();
            $table->smallInteger('cl5g_9')->unsigned();
            $table->smallInteger('cl5b_10')->unsigned();
            $table->smallInteger('cl5g_10')->unsigned();
            $table->smallInteger('cl5b_11')->unsigned();
            $table->smallInteger('cl5g_11')->unsigned();
            $table->smallInteger('cl5b_12')->unsigned();
            $table->smallInteger('cl5g_12')->unsigned();
            $table->smallInteger('cl5b_13')->unsigned();
            $table->smallInteger('cl5g_13')->unsigned();
            $table->smallInteger('cl5b_14')->unsigned();
            $table->smallInteger('cl5g_14')->unsigned();
            $table->smallInteger('cl5b_15')->unsigned();
            $table->smallInteger('cl5g_15')->unsigned();
            $table->smallInteger('cl5b_16')->unsigned();
            $table->smallInteger('cl5g_16')->unsigned();
            $table->smallInteger('cl5b_17')->unsigned();
            $table->smallInteger('cl5g_17')->unsigned();
            $table->smallInteger('cl5b_18')->unsigned();
            $table->smallInteger('cl5g_18')->unsigned();
            $table->smallInteger('cl5b_19')->unsigned();
            $table->smallInteger('cl5g_19')->unsigned();
            $table->smallInteger('cl5b_20')->unsigned();
            $table->smallInteger('cl5g_20')->unsigned();
            $table->smallInteger('cl5b_21')->unsigned();
            $table->smallInteger('cl5g_21')->unsigned();
            $table->smallInteger('cl5b_22')->unsigned();
            $table->smallInteger('cl5g_22')->unsigned();
            $table->smallInteger('cl5b_gt22')->unsigned();
            $table->smallInteger('cl5g_gt22')->unsigned();

            $table->smallInteger('cl6b_10')->unsigned();
            $table->smallInteger('cl6g_10')->unsigned();
            $table->smallInteger('cl6b_11')->unsigned();
            $table->smallInteger('cl6g_11')->unsigned();
            $table->smallInteger('cl6b_12')->unsigned();
            $table->smallInteger('cl6g_12')->unsigned();
            $table->smallInteger('cl6b_13')->unsigned();
            $table->smallInteger('cl6g_13')->unsigned();
            $table->smallInteger('cl6b_14')->unsigned();
            $table->smallInteger('cl6g_14')->unsigned();
            $table->smallInteger('cl6b_15')->unsigned();
            $table->smallInteger('cl6g_15')->unsigned();
            $table->smallInteger('cl6b_16')->unsigned();
            $table->smallInteger('cl6g_16')->unsigned();
            $table->smallInteger('cl6b_17')->unsigned();
            $table->smallInteger('cl6g_17')->unsigned();
            $table->smallInteger('cl6b_18')->unsigned();
            $table->smallInteger('cl6g_18')->unsigned();
            $table->smallInteger('cl6b_19')->unsigned();
            $table->smallInteger('cl6g_19')->unsigned();
            $table->smallInteger('cl6b_20')->unsigned();
            $table->smallInteger('cl6g_20')->unsigned();
            $table->smallInteger('cl6b_21')->unsigned();
            $table->smallInteger('cl6g_21')->unsigned();

            $table->smallInteger('cl7b_11')->unsigned();
            $table->smallInteger('cl7g_11')->unsigned();
            $table->smallInteger('cl7b_12')->unsigned();
            $table->smallInteger('cl7g_12')->unsigned();
            $table->smallInteger('cl7b_13')->unsigned();
            $table->smallInteger('cl7g_13')->unsigned();
            $table->smallInteger('cl7b_14')->unsigned();
            $table->smallInteger('cl7g_14')->unsigned();
            $table->smallInteger('cl7b_15')->unsigned();
            $table->smallInteger('cl7g_15')->unsigned();
            $table->smallInteger('cl7b_16')->unsigned();
            $table->smallInteger('cl7g_16')->unsigned();
            $table->smallInteger('cl7b_17')->unsigned();
            $table->smallInteger('cl7g_17')->unsigned();
            $table->smallInteger('cl7b_18')->unsigned();
            $table->smallInteger('cl7g_18')->unsigned();
            $table->smallInteger('cl7b_19')->unsigned();
            $table->smallInteger('cl7g_19')->unsigned();
            $table->smallInteger('cl7b_20')->unsigned();
            $table->smallInteger('cl7g_20')->unsigned();
            $table->smallInteger('cl7b_21')->unsigned();
            $table->smallInteger('cl7g_21')->unsigned();
            $table->smallInteger('cl7b_22')->unsigned();
            $table->smallInteger('cl7g_22')->unsigned();
            $table->smallInteger('cl7b_gt22')->unsigned();
            $table->smallInteger('cl7g_gt22')->unsigned();

            $table->smallInteger('cl8b_12')->unsigned();
            $table->smallInteger('cl8g_12')->unsigned();
            $table->smallInteger('cl8b_13')->unsigned();
            $table->smallInteger('cl8g_13')->unsigned();
            $table->smallInteger('cl8b_14')->unsigned();
            $table->smallInteger('cl8g_14')->unsigned();
            $table->smallInteger('cl8b_15')->unsigned();
            $table->smallInteger('cl8g_15')->unsigned();
            $table->smallInteger('cl8b_16')->unsigned();
            $table->smallInteger('cl8g_16')->unsigned();
            $table->smallInteger('cl8b_17')->unsigned();
            $table->smallInteger('cl8g_17')->unsigned();
            $table->smallInteger('cl8b_18')->unsigned();
            $table->smallInteger('cl8g_18')->unsigned();
            $table->smallInteger('cl8b_19')->unsigned();
            $table->smallInteger('cl8g_19')->unsigned();
            $table->smallInteger('cl8b_20')->unsigned();
            $table->smallInteger('cl8g_20')->unsigned();
            $table->smallInteger('cl8b_21')->unsigned();
            $table->smallInteger('cl8g_21')->unsigned();
            $table->smallInteger('cl8b_22')->unsigned();
            $table->smallInteger('cl8g_22')->unsigned();
            $table->smallInteger('cl8b_gt22')->unsigned();
            $table->smallInteger('cl8g_gt22')->unsigned();

            $table->smallInteger('cl9b_12')->unsigned();
            $table->smallInteger('cl9g_12')->unsigned();
            $table->smallInteger('cl9b_13')->unsigned();
            $table->smallInteger('cl9g_13')->unsigned();
            $table->smallInteger('cl9b_14')->unsigned();
            $table->smallInteger('cl9g_14')->unsigned();
            $table->smallInteger('cl9b_15')->unsigned();
            $table->smallInteger('cl9g_15')->unsigned();
            $table->smallInteger('cl9b_16')->unsigned();
            $table->smallInteger('cl9g_16')->unsigned();
            $table->smallInteger('cl9b_17')->unsigned();
            $table->smallInteger('cl9g_17')->unsigned();
            $table->smallInteger('cl9b_18')->unsigned();
            $table->smallInteger('cl9g_18')->unsigned();
            $table->smallInteger('cl9b_19')->unsigned();
            $table->smallInteger('cl9g_19')->unsigned();
            $table->smallInteger('cl9b_20')->unsigned();
            $table->smallInteger('cl9g_20')->unsigned();
            $table->smallInteger('cl9b_21')->unsigned();
            $table->smallInteger('cl9g_21')->unsigned();
            $table->smallInteger('cl9b_22')->unsigned();
            $table->smallInteger('cl9g_22')->unsigned();
            $table->smallInteger('cl9b_gt22')->unsigned();
            $table->smallInteger('cl9g_gt22')->unsigned();

            $table->smallInteger('cl10b_14')->unsigned();
            $table->smallInteger('cl10g_14')->unsigned();
            $table->smallInteger('cl10b_15')->unsigned();
            $table->smallInteger('cl10g_15')->unsigned();
            $table->smallInteger('cl10b_16')->unsigned();
            $table->smallInteger('cl10g_16')->unsigned();
            $table->smallInteger('cl10b_17')->unsigned();
            $table->smallInteger('cl10g_17')->unsigned();
            $table->smallInteger('cl10b_18')->unsigned();
            $table->smallInteger('cl10g_18')->unsigned();
            $table->smallInteger('cl10b_19')->unsigned();
            $table->smallInteger('cl10g_19')->unsigned();
            $table->smallInteger('cl10b_20')->unsigned();
            $table->smallInteger('cl10g_20')->unsigned();
            $table->smallInteger('cl10b_21')->unsigned();
            $table->smallInteger('cl10g_21')->unsigned();
            $table->smallInteger('cl10b_22')->unsigned();
            $table->smallInteger('cl10g_22')->unsigned();
            $table->smallInteger('cl10b_gt22')->unsigned();
            $table->smallInteger('cl10g_gt22')->unsigned();

            $table->smallInteger('cl11b_14')->unsigned();
            $table->smallInteger('cl11g_14')->unsigned();
            $table->smallInteger('cl11b_15')->unsigned();
            $table->smallInteger('cl11g_15')->unsigned();
            $table->smallInteger('cl11b_16')->unsigned();
            $table->smallInteger('cl11g_16')->unsigned();
            $table->smallInteger('cl11b_17')->unsigned();
            $table->smallInteger('cl11g_17')->unsigned();
            $table->smallInteger('cl11b_18')->unsigned();
            $table->smallInteger('cl11g_18')->unsigned();
            $table->smallInteger('cl11b_19')->unsigned();
            $table->smallInteger('cl11g_19')->unsigned();
            $table->smallInteger('cl11b_20')->unsigned();
            $table->smallInteger('cl11g_20')->unsigned();
            $table->smallInteger('cl11b_21')->unsigned();
            $table->smallInteger('cl11g_21')->unsigned();
            $table->smallInteger('cl11b_22')->unsigned();
            $table->smallInteger('cl11g_22')->unsigned();
            $table->smallInteger('cl11b_gt22')->unsigned();
            $table->smallInteger('cl11g_gt22')->unsigned();

            $table->smallInteger('cl12b_15')->unsigned();
            $table->smallInteger('cl12g_15')->unsigned();
            $table->smallInteger('cl12b_16')->unsigned();
            $table->smallInteger('cl12g_16')->unsigned();
            $table->smallInteger('cl12b_17')->unsigned();
            $table->smallInteger('cl12g_17')->unsigned();
            $table->smallInteger('cl12b_18')->unsigned();
            $table->smallInteger('cl12g_18')->unsigned();
            $table->smallInteger('cl12b_19')->unsigned();
            $table->smallInteger('cl12g_19')->unsigned();
            $table->smallInteger('cl12b_20')->unsigned();
            $table->smallInteger('cl12g_20')->unsigned();
            $table->smallInteger('cl12b_21')->unsigned();
            $table->smallInteger('cl12g_21')->unsigned();
            $table->smallInteger('cl12b_22')->unsigned();
            $table->smallInteger('cl12g_22')->unsigned();
            $table->smallInteger('cl12b_gt22')->unsigned();
            $table->smallInteger('cl12g_gt22')->unsigned();

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
        Schema::drop('enrollment_by_ages');
    }
}
