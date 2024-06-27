<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSecondaryResultByPercentagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secondary_result_by_percentages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('statistic_id');

            $table->smallInteger('g_b_40');
            $table->smallInteger('g_g_40');
            $table->smallInteger('sc_b_40');
            $table->smallInteger('sc_g_40');
            $table->smallInteger('st_b_40');
            $table->smallInteger('st_g_40');
            $table->smallInteger('obc_b_40');
            $table->smallInteger('obc_g_40');
            
            $table->smallInteger('g_b_41_60');
            $table->smallInteger('g_g_41_60');
            $table->smallInteger('sc_b_41_60');
            $table->smallInteger('sc_g_41_60');
            $table->smallInteger('st_b_41_60');
            $table->smallInteger('st_g_41_60');
            $table->smallInteger('obc_b_41_60');
            $table->smallInteger('obc_g_41_60');
            
            $table->smallInteger('g_b_61_80');
            $table->smallInteger('g_g_61_80');
            $table->smallInteger('sc_b_61_80');
            $table->smallInteger('sc_g_61_80');
            $table->smallInteger('st_b_61_80');
            $table->smallInteger('st_g_61_80');
            $table->smallInteger('obc_b_61_80');
            $table->smallInteger('obc_g_61_80');
            
            $table->smallInteger('g_b_80');
            $table->smallInteger('g_g_80');
            $table->smallInteger('sc_b_80');
            $table->smallInteger('sc_g_80');
            $table->smallInteger('st_b_80');
            $table->smallInteger('st_g_80');
            $table->smallInteger('obc_b_80');
            $table->smallInteger('obc_g_80');

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
        Schema::drop('secondary_result_by_percentages');
    }
}
