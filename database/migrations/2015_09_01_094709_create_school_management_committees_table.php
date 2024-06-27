<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolManagementCommitteesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stats_school_management_committees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('statistic_id');

            $table->tinyInteger('number_of_members_smc_male');
            $table->tinyInteger('number_of_pta_representatives_male');
            $table->tinyInteger('number_of_local_authority_representatives_male');
            $table->tinyInteger('number_of_members_smc_female');
            $table->tinyInteger('number_of_pta_representatives_female');
            $table->tinyInteger('number_of_local_authority_representatives_female');

            /**
             * SECONDARY AND HIGHER SECONDARY
             */
            $table->tinyInteger('educationally_backward_representatives_male')->nullable();
            $table->tinyInteger('educationally_backward_representatives_female')->nullable();
            $table->tinyInteger('number_of_women_group_representative_female')->nullable();
            $table->tinyInteger('sc_st_members_male')->nullable();
            $table->tinyInteger('sc_st_members_female')->nullable();
            $table->tinyInteger('nominee_of_deo_male')->nullable();
            $table->tinyInteger('nominee_of_deo_female')->nullable();
            $table->tinyInteger('member_from_aad_male')->nullable();
            $table->tinyInteger('member_from_aad_female')->nullable();
            $table->tinyInteger('subject_experts_male')->nullable();
            $table->tinyInteger('subject_experts_female')->nullable();
            $table->tinyInteger('teachers_male')->nullable();
            $table->tinyInteger('teachers_female')->nullable();
            $table->tinyInteger('vice_as_member_male')->nullable();
            $table->tinyInteger('vice_as_member_female')->nullable();
            $table->tinyInteger('chairperson_male')->nullable();
            $table->tinyInteger('chairperson_female')->nullable();

            /**
             * END SECONDARY AND HIGHER SECONDARY
             */

            $table->tinyInteger('number_of_meetings');
            $table->boolean('smc_prepare_plan');
            $table->boolean('account_maintained_for_smc');
            $table->string('bank_name')->nullable();
            $table->string('branch')->nullable();
            $table->string('account_number')->nullable();
            $table->string('account_name')->nullable();
            $table->string('ifsc_code')->nullable();

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
        Schema::drop('stats_school_management_committees');
    }
}
