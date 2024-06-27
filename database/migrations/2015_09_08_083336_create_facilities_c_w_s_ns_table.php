<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacilitiesCWSNsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facilities_c_w_s_ns', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('statistic_id');

            $table->smallInteger('brail_book_elementary_b');
            $table->smallInteger('brail_book_elementary_g');
            $table->smallInteger('brail_book_secondary_b');
            $table->smallInteger('brail_book_secondary_g');
            $table->smallInteger('brail_book_higher_secondary_b');
            $table->smallInteger('brail_book_higher_secondary_g');

            $table->smallInteger('brail_kit_elementary_b');
            $table->smallInteger('brail_kit_elementary_g');
            $table->smallInteger('brail_kit_secondary_b');
            $table->smallInteger('brail_kit_secondary_g');
            $table->smallInteger('brail_kit_higher_secondary_b');
            $table->smallInteger('brail_kit_higher_secondary_g');

            $table->smallInteger('low_vision_kit_elementary_b');
            $table->smallInteger('low_vision_kit_elementary_g');
            $table->smallInteger('low_vision_kit_secondary_b');
            $table->smallInteger('low_vision_kit_secondary_g');
            $table->smallInteger('low_vision_kit_higher_secondary_b');
            $table->smallInteger('low_vision_kit_higher_secondary_g');

            $table->smallInteger('hearing_aid_elementary_b');
            $table->smallInteger('hearing_aid_elementary_g');
            $table->smallInteger('hearing_aid_secondary_b');
            $table->smallInteger('hearing_aid_secondary_g');
            $table->smallInteger('hearing_aid_higher_secondary_b');
            $table->smallInteger('hearing_aid_higher_secondary_g');

            $table->smallInteger('braces_elementary_b');
            $table->smallInteger('braces_elementary_g');
            $table->smallInteger('braces_secondary_b');
            $table->smallInteger('braces_secondary_g');
            $table->smallInteger('braces_higher_secondary_b');
            $table->smallInteger('braces_higher_secondary_g');

            $table->smallInteger('crutches_elementary_b');
            $table->smallInteger('crutches_elementary_g');
            $table->smallInteger('crutches_secondary_b');
            $table->smallInteger('crutches_secondary_g');
            $table->smallInteger('crutches_higher_secondary_b');
            $table->smallInteger('crutches_higher_secondary_g');

            $table->smallInteger('wheelchair_elementary_b');
            $table->smallInteger('wheelchair_elementary_g');
            $table->smallInteger('wheelchair_secondary_b');
            $table->smallInteger('wheelchair_secondary_g');
            $table->smallInteger('wheelchair_higher_secondary_b');
            $table->smallInteger('wheelchair_higher_secondary_g');

            $table->smallInteger('tricycle_elementary_b');
            $table->smallInteger('tricycle_elementary_g');
            $table->smallInteger('tricycle_secondary_b');
            $table->smallInteger('tricycle_secondary_g');
            $table->smallInteger('tricycle_higher_secondary_b');
            $table->smallInteger('tricycle_higher_secondary_g');

            $table->smallInteger('caliper_elementary_b');
            $table->smallInteger('caliper_elementary_g');
            $table->smallInteger('caliper_secondary_b');
            $table->smallInteger('caliper_secondary_g');
            $table->smallInteger('caliper_higher_secondary_b');
            $table->smallInteger('caliper_higher_secondary_g');

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
        Schema::drop('facilities_c_w_s_ns');
    }
}
