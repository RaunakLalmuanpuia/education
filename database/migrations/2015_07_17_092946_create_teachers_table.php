<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('directorate_teacher_id')->nullable();
            $table->string('name');
            $table->integer('gender_id');
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->integer('marital_status_id')->nullable();
            $table->string('spouse_name')->nullable();

            $table->string('phone_number')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('email')->nullable();
            $table->string('present_address')->nullable();
            $table->string('permanent_address')->nullable();

            $table->string('epic_number')->nullable();
            $table->string('blood_group','5')->nullable();

            $table->date('date_of_birth')->nullable();
            $table->integer('social_category_id')->nullable();
            $table->integer('disability_id')->nullable();

            $table->integer('qualification_id')->nullable();
            $table->integer('math_science_upto_id')->nullable();
            $table->integer('english_language_upto_id')->nullable();
            $table->integer('social_upto_id')->nullable();
            $table->integer('professional_qualification_id')->default(1);
            $table->string('professional_qualification_year', 4)->nullable();
            $table->enum('trained_for_cwsn', [1,2])->nullable();

            $table->integer('current_nature_of_appointment_id')->nullable(); //for easier querying
            $table->text('photo')->nullable();

            $table->enum('status', ['active','inactive','extended'])->nullable();

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
        Schema::drop('teachers');
    }
}
