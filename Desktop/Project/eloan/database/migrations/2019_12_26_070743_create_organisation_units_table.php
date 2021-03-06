<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganisationUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organisation_units', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('orgUnitCode');
            $table->string('orgUnitName');
            $table->unsignedBigInteger('orgGroup_id');
            $table->foreign('orgGroup_id')->references('id')->on('organisation_groups');
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
        Schema::dropIfExists('organisation_units');
    }
}
