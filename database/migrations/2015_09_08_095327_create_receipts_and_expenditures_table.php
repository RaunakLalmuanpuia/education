<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceiptsAndExpendituresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipts_and_expenditures', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('statistic_id');

            $table->integer('civil_works_received');
            $table->integer('civil_works_utilized');
            $table->integer('civil_works_spillover');

            $table->integer('annual_school_grant_received');
            $table->integer('annual_school_grant_utilized');
            $table->integer('annual_school_grant_spillover');

            $table->integer('minor_repair_received');
            $table->integer('minor_repair_utilized');
            $table->integer('minor_repair_spillover');

            $table->integer('repair_lab_equipment_received');
            $table->integer('repair_lab_equipment_utilized');
            $table->integer('repair_lab_equipment_spillover');

            $table->integer('purchase_of_books_received');
            $table->integer('purchase_of_books_utilized');
            $table->integer('purchase_of_books_spillover');

            $table->integer('water_grant_received');
            $table->integer('water_grant_utilized');
            $table->integer('water_grant_spillover');

            $table->integer('other_received');
            $table->integer('other_utilized');
            $table->integer('other_spillover');
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
        Schema::drop('receipts_and_expenditures');
    }
}
