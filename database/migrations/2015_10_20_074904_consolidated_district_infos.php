<?php
/**
 * This will store the yearly informations of enrollments, results, etc. 
 * for each districts
 */
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConsolidatedDistrictInfos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consolidated_district_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('year',4);
            $table->text('info');
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
        Schema::drop('consolidated_district_infos');
    }
}
