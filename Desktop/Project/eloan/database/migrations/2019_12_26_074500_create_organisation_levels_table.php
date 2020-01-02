<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganisationLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organisation_levels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('orgUnitCode');
            $table->string('orgUnitName');
            $table->unsignedBigInteger('orgUnit_id');
            $table->foreign('orgUnit_id')->references('id')->on('organisation_units');
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
        Schema::dropIfExists('organisation_levels');
    }
}
