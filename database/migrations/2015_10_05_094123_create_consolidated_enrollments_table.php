<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsolidatedEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consolidated_enrollments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('school_id');
            $table->integer('year');
            $table->integer('cpp_g');
            $table->integer('cpp_b');
            $table->integer('c1_b');
            $table->integer('c1_g');
            $table->integer('c2_b');
            $table->integer('c2_g');
            $table->integer('c3_b');
            $table->integer('c3_g');
            $table->integer('c4_b');
            $table->integer('c4_g');
            $table->integer('c5_b');
            $table->integer('c5_g');
            $table->integer('c6_b');
            $table->integer('c6_g');
            $table->integer('c7_b');
            $table->integer('c7_g');
            $table->integer('c8_b');
            $table->integer('c8_g');
            $table->integer('c9_b');
            $table->integer('c9_g');
            $table->integer('c10_b');
            $table->integer('c10_g');
            $table->integer('c11_b');
            $table->integer('c11_g');
            $table->integer('c12_b');
            $table->integer('c12_g');
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
        Schema::drop('consolidated_enrollments');
    }
}
