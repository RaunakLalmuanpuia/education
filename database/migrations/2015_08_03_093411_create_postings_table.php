<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('school_id');
            $table->string('place_of_post')->nullable();
            $table->integer('teacher_id');
            $table->integer('type_of_teacher_id');
            $table->integer('nature_of_appointment_id');
            $table->integer('subject_of_appointment_id');
            $table->date('date');

            $table->integer('classes_taught_id');
            $table->boolean('status');
            $table->boolean('current_post');
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
        Schema::drop('postings');
    }
}
