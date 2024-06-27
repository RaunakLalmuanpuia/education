<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnrollmentByReligiousMinoritiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollment_by_religious_minorities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('statistic_id');

            $table->smallInteger('ppb_muslim')->unsigned();
            $table->smallInteger('ppg_muslim')->unsigned();
            $table->smallInteger('ppb_christians')->unsigned();
            $table->smallInteger('ppg_christians')->unsigned();
            $table->smallInteger('ppb_sikhs')->unsigned();
            $table->smallInteger('ppg_sikhs')->unsigned();
            $table->smallInteger('ppb_buddhist')->unsigned();
            $table->smallInteger('ppg_buddhist')->unsigned();
            $table->smallInteger('ppb_parsi')->unsigned();
            $table->smallInteger('ppg_parsi')->unsigned();
            $table->smallInteger('ppb_jain')->unsigned();
            $table->smallInteger('ppg_jain')->unsigned();
            $table->smallInteger('ppb_others')->unsigned();
            $table->smallInteger('ppg_others')->unsigned();
            
            $table->smallInteger('c1b_muslim')->unsigned();
            $table->smallInteger('c1g_muslim')->unsigned();
            $table->smallInteger('c1b_christians')->unsigned();
            $table->smallInteger('c1g_christians')->unsigned();
            $table->smallInteger('c1b_sikhs')->unsigned();
            $table->smallInteger('c1g_sikhs')->unsigned();
            $table->smallInteger('c1b_buddhist')->unsigned();
            $table->smallInteger('c1g_buddhist')->unsigned();
            $table->smallInteger('c1b_parsi')->unsigned();
            $table->smallInteger('c1g_parsi')->unsigned();
            $table->smallInteger('c1b_jain')->unsigned();
            $table->smallInteger('c1g_jain')->unsigned();
            $table->smallInteger('c1b_others')->unsigned();
            $table->smallInteger('c1g_others')->unsigned();
            
            $table->smallInteger('c2b_muslim')->unsigned();
            $table->smallInteger('c2g_muslim')->unsigned();
            $table->smallInteger('c2b_christians')->unsigned();
            $table->smallInteger('c2g_christians')->unsigned();
            $table->smallInteger('c2b_sikhs')->unsigned();
            $table->smallInteger('c2g_sikhs')->unsigned();
            $table->smallInteger('c2b_buddhist')->unsigned();
            $table->smallInteger('c2g_buddhist')->unsigned();
            $table->smallInteger('c2b_parsi')->unsigned();
            $table->smallInteger('c2g_parsi')->unsigned();
            $table->smallInteger('c2b_jain')->unsigned();
            $table->smallInteger('c2g_jain')->unsigned();
            $table->smallInteger('c2b_others')->unsigned();
            $table->smallInteger('c2g_others')->unsigned();
            
            $table->smallInteger('c3b_muslim')->unsigned();
            $table->smallInteger('c3g_muslim')->unsigned();
            $table->smallInteger('c3b_christians')->unsigned();
            $table->smallInteger('c3g_christians')->unsigned();
            $table->smallInteger('c3b_sikhs')->unsigned();
            $table->smallInteger('c3g_sikhs')->unsigned();
            $table->smallInteger('c3b_buddhist')->unsigned();
            $table->smallInteger('c3g_buddhist')->unsigned();
            $table->smallInteger('c3b_parsi')->unsigned();
            $table->smallInteger('c3g_parsi')->unsigned();
            $table->smallInteger('c3b_jain')->unsigned();
            $table->smallInteger('c3g_jain')->unsigned();
            $table->smallInteger('c3b_others')->unsigned();
            $table->smallInteger('c3g_others')->unsigned();
            
            $table->smallInteger('c4b_muslim')->unsigned();
            $table->smallInteger('c4g_muslim')->unsigned();
            $table->smallInteger('c4b_christians')->unsigned();
            $table->smallInteger('c4g_christians')->unsigned();
            $table->smallInteger('c4b_sikhs')->unsigned();
            $table->smallInteger('c4g_sikhs')->unsigned();
            $table->smallInteger('c4b_buddhist')->unsigned();
            $table->smallInteger('c4g_buddhist')->unsigned();
            $table->smallInteger('c4b_parsi')->unsigned();
            $table->smallInteger('c4g_parsi')->unsigned();
            $table->smallInteger('c4b_jain')->unsigned();
            $table->smallInteger('c4g_jain')->unsigned();
            $table->smallInteger('c4b_others')->unsigned();
            $table->smallInteger('c4g_others')->unsigned();
            
            $table->smallInteger('c5b_muslim')->unsigned();
            $table->smallInteger('c5g_muslim')->unsigned();
            $table->smallInteger('c5b_christians')->unsigned();
            $table->smallInteger('c5g_christians')->unsigned();
            $table->smallInteger('c5b_sikhs')->unsigned();
            $table->smallInteger('c5g_sikhs')->unsigned();
            $table->smallInteger('c5b_buddhist')->unsigned();
            $table->smallInteger('c5g_buddhist')->unsigned();
            $table->smallInteger('c5b_parsi')->unsigned();
            $table->smallInteger('c5g_parsi')->unsigned();
            $table->smallInteger('c5b_jain')->unsigned();
            $table->smallInteger('c5g_jain')->unsigned();
            $table->smallInteger('c5b_others')->unsigned();
            $table->smallInteger('c5g_others')->unsigned();
            
            $table->smallInteger('c6b_muslim')->unsigned();
            $table->smallInteger('c6g_muslim')->unsigned();
            $table->smallInteger('c6b_christians')->unsigned();
            $table->smallInteger('c6g_christians')->unsigned();
            $table->smallInteger('c6b_sikhs')->unsigned();
            $table->smallInteger('c6g_sikhs')->unsigned();
            $table->smallInteger('c6b_buddhist')->unsigned();
            $table->smallInteger('c6g_buddhist')->unsigned();
            $table->smallInteger('c6b_parsi')->unsigned();
            $table->smallInteger('c6g_parsi')->unsigned();
            $table->smallInteger('c6b_jain')->unsigned();
            $table->smallInteger('c6g_jain')->unsigned();
            $table->smallInteger('c6b_others')->unsigned();
            $table->smallInteger('c6g_others')->unsigned();
            
            $table->smallInteger('c7b_muslim')->unsigned();
            $table->smallInteger('c7g_muslim')->unsigned();
            $table->smallInteger('c7b_christians')->unsigned();
            $table->smallInteger('c7g_christians')->unsigned();
            $table->smallInteger('c7b_sikhs')->unsigned();
            $table->smallInteger('c7g_sikhs')->unsigned();
            $table->smallInteger('c7b_buddhist')->unsigned();
            $table->smallInteger('c7g_buddhist')->unsigned();
            $table->smallInteger('c7b_parsi')->unsigned();
            $table->smallInteger('c7g_parsi')->unsigned();
            $table->smallInteger('c7b_jain')->unsigned();
            $table->smallInteger('c7g_jain')->unsigned();
            $table->smallInteger('c7b_others')->unsigned();
            $table->smallInteger('c7g_others')->unsigned();
            
            $table->smallInteger('c8b_muslim')->unsigned();
            $table->smallInteger('c8g_muslim')->unsigned();
            $table->smallInteger('c8b_christians')->unsigned();
            $table->smallInteger('c8g_christians')->unsigned();
            $table->smallInteger('c8b_sikhs')->unsigned();
            $table->smallInteger('c8g_sikhs')->unsigned();
            $table->smallInteger('c8b_buddhist')->unsigned();
            $table->smallInteger('c8g_buddhist')->unsigned();
            $table->smallInteger('c8b_parsi')->unsigned();
            $table->smallInteger('c8g_parsi')->unsigned();
            $table->smallInteger('c8b_jain')->unsigned();
            $table->smallInteger('c8g_jain')->unsigned();
            $table->smallInteger('c8b_others')->unsigned();
            $table->smallInteger('c8g_others')->unsigned();
            
            $table->smallInteger('c9b_muslim')->unsigned();
            $table->smallInteger('c9g_muslim')->unsigned();
            $table->smallInteger('c9b_christians')->unsigned();
            $table->smallInteger('c9g_christians')->unsigned();
            $table->smallInteger('c9b_sikhs')->unsigned();
            $table->smallInteger('c9g_sikhs')->unsigned();
            $table->smallInteger('c9b_buddhist')->unsigned();
            $table->smallInteger('c9g_buddhist')->unsigned();
            $table->smallInteger('c9b_parsi')->unsigned();
            $table->smallInteger('c9g_parsi')->unsigned();
            $table->smallInteger('c9b_jain')->unsigned();
            $table->smallInteger('c9g_jain')->unsigned();
            $table->smallInteger('c9b_others')->unsigned();
            $table->smallInteger('c9g_others')->unsigned();
            
            $table->smallInteger('c10b_muslim')->unsigned();
            $table->smallInteger('c10g_muslim')->unsigned();
            $table->smallInteger('c10b_christians')->unsigned();
            $table->smallInteger('c10g_christians')->unsigned();
            $table->smallInteger('c10b_sikhs')->unsigned();
            $table->smallInteger('c10g_sikhs')->unsigned();
            $table->smallInteger('c10b_buddhist')->unsigned();
            $table->smallInteger('c10g_buddhist')->unsigned();
            $table->smallInteger('c10b_parsi')->unsigned();
            $table->smallInteger('c10g_parsi')->unsigned();
            $table->smallInteger('c10b_jain')->unsigned();
            $table->smallInteger('c10g_jain')->unsigned();
            $table->smallInteger('c10b_others')->unsigned();
            $table->smallInteger('c10g_others')->unsigned();
            
            $table->smallInteger('c11b_muslim')->unsigned();
            $table->smallInteger('c11g_muslim')->unsigned();
            $table->smallInteger('c11b_christians')->unsigned();
            $table->smallInteger('c11g_christians')->unsigned();
            $table->smallInteger('c11b_sikhs')->unsigned();
            $table->smallInteger('c11g_sikhs')->unsigned();
            $table->smallInteger('c11b_buddhist')->unsigned();
            $table->smallInteger('c11g_buddhist')->unsigned();
            $table->smallInteger('c11b_parsi')->unsigned();
            $table->smallInteger('c11g_parsi')->unsigned();
            $table->smallInteger('c11b_jain')->unsigned();
            $table->smallInteger('c11g_jain')->unsigned();
            $table->smallInteger('c11b_others')->unsigned();
            $table->smallInteger('c11g_others')->unsigned();
            
            $table->smallInteger('c12b_muslim')->unsigned();
            $table->smallInteger('c12g_muslim')->unsigned();
            $table->smallInteger('c12b_christians')->unsigned();
            $table->smallInteger('c12g_christians')->unsigned();
            $table->smallInteger('c12b_sikhs')->unsigned();
            $table->smallInteger('c12g_sikhs')->unsigned();
            $table->smallInteger('c12b_buddhist')->unsigned();
            $table->smallInteger('c12g_buddhist')->unsigned();
            $table->smallInteger('c12b_parsi')->unsigned();
            $table->smallInteger('c12g_parsi')->unsigned();
            $table->smallInteger('c12b_jain')->unsigned();
            $table->smallInteger('c12g_jain')->unsigned();
            $table->smallInteger('c12b_others')->unsigned();
            $table->smallInteger('c12g_others')->unsigned();

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
        Schema::drop('enrollment_by_religious_minorities');
    }
}
