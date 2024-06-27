<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnrollmentBySocialCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollment_by_social_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('statistic_id');
            $table->smallInteger('ppb_g')->unsigned();
            $table->smallInteger('ppg_g')->unsigned();
            $table->smallInteger('ppb_sc')->unsigned();
            $table->smallInteger('ppg_sc')->unsigned();
            $table->smallInteger('ppb_st')->unsigned();
            $table->smallInteger('ppg_st')->unsigned();
            $table->smallInteger('ppb_obc')->unsigned();
            $table->smallInteger('ppg_obc')->unsigned();
            
            $table->smallInteger('c1b_g')->unsigned();
            $table->smallInteger('c1g_g')->unsigned();
            $table->smallInteger('c1b_sc')->unsigned();
            $table->smallInteger('c1g_sc')->unsigned();
            $table->smallInteger('c1b_st')->unsigned();
            $table->smallInteger('c1g_st')->unsigned();
            $table->smallInteger('c1b_obc')->unsigned();
            $table->smallInteger('c1g_obc')->unsigned();
            
            $table->smallInteger('c2b_g')->unsigned();
            $table->smallInteger('c2g_g')->unsigned();
            $table->smallInteger('c2b_sc')->unsigned();
            $table->smallInteger('c2g_sc')->unsigned();
            $table->smallInteger('c2b_st')->unsigned();
            $table->smallInteger('c2g_st')->unsigned();
            $table->smallInteger('c2b_obc')->unsigned();
            $table->smallInteger('c2g_obc')->unsigned();
            
            $table->smallInteger('c3b_g')->unsigned();
            $table->smallInteger('c3g_g')->unsigned();
            $table->smallInteger('c3b_sc')->unsigned();
            $table->smallInteger('c3g_sc')->unsigned();
            $table->smallInteger('c3b_st')->unsigned();
            $table->smallInteger('c3g_st')->unsigned();
            $table->smallInteger('c3b_obc')->unsigned();
            $table->smallInteger('c3g_obc')->unsigned();
            
            $table->smallInteger('c4b_g')->unsigned();
            $table->smallInteger('c4g_g')->unsigned();
            $table->smallInteger('c4b_sc')->unsigned();
            $table->smallInteger('c4g_sc')->unsigned();
            $table->smallInteger('c4b_st')->unsigned();
            $table->smallInteger('c4g_st')->unsigned();
            $table->smallInteger('c4b_obc')->unsigned();
            $table->smallInteger('c4g_obc')->unsigned();
            
            $table->smallInteger('c5b_g')->unsigned();
            $table->smallInteger('c5g_g')->unsigned();
            $table->smallInteger('c5b_sc')->unsigned();
            $table->smallInteger('c5g_sc')->unsigned();
            $table->smallInteger('c5b_st')->unsigned();
            $table->smallInteger('c5g_st')->unsigned();
            $table->smallInteger('c5b_obc')->unsigned();
            $table->smallInteger('c5g_obc')->unsigned();
            
            $table->smallInteger('c6b_g')->unsigned();
            $table->smallInteger('c6g_g')->unsigned();
            $table->smallInteger('c6b_sc')->unsigned();
            $table->smallInteger('c6g_sc')->unsigned();
            $table->smallInteger('c6b_st')->unsigned();
            $table->smallInteger('c6g_st')->unsigned();
            $table->smallInteger('c6b_obc')->unsigned();
            $table->smallInteger('c6g_obc')->unsigned();
            
            $table->smallInteger('c7b_g')->unsigned();
            $table->smallInteger('c7g_g')->unsigned();
            $table->smallInteger('c7b_sc')->unsigned();
            $table->smallInteger('c7g_sc')->unsigned();
            $table->smallInteger('c7b_st')->unsigned();
            $table->smallInteger('c7g_st')->unsigned();
            $table->smallInteger('c7b_obc')->unsigned();
            $table->smallInteger('c7g_obc')->unsigned();
            
            $table->smallInteger('c8b_g')->unsigned();
            $table->smallInteger('c8g_g')->unsigned();
            $table->smallInteger('c8b_sc')->unsigned();
            $table->smallInteger('c8g_sc')->unsigned();
            $table->smallInteger('c8b_st')->unsigned();
            $table->smallInteger('c8g_st')->unsigned();
            $table->smallInteger('c8b_obc')->unsigned();
            $table->smallInteger('c8g_obc')->unsigned();
            
            $table->smallInteger('c9b_g')->unsigned();
            $table->smallInteger('c9g_g')->unsigned();
            $table->smallInteger('c9b_sc')->unsigned();
            $table->smallInteger('c9g_sc')->unsigned();
            $table->smallInteger('c9b_st')->unsigned();
            $table->smallInteger('c9g_st')->unsigned();
            $table->smallInteger('c9b_obc')->unsigned();
            $table->smallInteger('c9g_obc')->unsigned();
            
            $table->smallInteger('c10b_g')->unsigned();
            $table->smallInteger('c10g_g')->unsigned();
            $table->smallInteger('c10b_sc')->unsigned();
            $table->smallInteger('c10g_sc')->unsigned();
            $table->smallInteger('c10b_st')->unsigned();
            $table->smallInteger('c10g_st')->unsigned();
            $table->smallInteger('c10b_obc')->unsigned();
            $table->smallInteger('c10g_obc')->unsigned();
            
            $table->smallInteger('c11b_g')->unsigned();
            $table->smallInteger('c11g_g')->unsigned();
            $table->smallInteger('c11b_sc')->unsigned();
            $table->smallInteger('c11g_sc')->unsigned();
            $table->smallInteger('c11b_st')->unsigned();
            $table->smallInteger('c11g_st')->unsigned();
            $table->smallInteger('c11b_obc')->unsigned();
            $table->smallInteger('c11g_obc')->unsigned();
            
            $table->smallInteger('c12b_g')->unsigned();
            $table->smallInteger('c12g_g')->unsigned();
            $table->smallInteger('c12b_sc')->unsigned();
            $table->smallInteger('c12g_sc')->unsigned();
            $table->smallInteger('c12b_st')->unsigned();
            $table->smallInteger('c12g_st')->unsigned();
            $table->smallInteger('c12b_obc')->unsigned();
            $table->smallInteger('c12g_obc')->unsigned();

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
        Schema::drop('enrollment_by_social_categories');
    }
}
