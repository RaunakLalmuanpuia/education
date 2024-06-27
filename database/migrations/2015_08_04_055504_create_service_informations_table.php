<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_informations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('teacher_id');
            $table->date('date_of_appointment')->nullable();
            $table->date('date_of_joining')->nullable();
            $table->date('date_of_confirmation')->nullable();
            $table->integer('gpf_prefix_id')->nullable();
            $table->string('gpf_suffix')->nullable();
            $table->string('new_pension_scheme_number')->nullable();
            $table->integer('pension_type_id')->nullable();
            $table->integer('appointing_authority_id')->nullable();
            $table->integer('rank_in_recruitment')->nullable();
            $table->enum('grade', ['None', 'Senior', 'Selection'])->nullable();
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
        Schema::drop('service_informations');
    }
}
