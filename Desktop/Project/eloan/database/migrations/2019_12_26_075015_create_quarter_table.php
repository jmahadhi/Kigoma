<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuarterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quarter', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('quarterCode');
            $table->string('quarterName');
            $table->date('startDate');
            $table->date('endDate');
            $table->unsignedBigInteger('fyId');
            $table->foreign('fyId')->references('id')->on('financial_year');
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
        Schema::dropIfExists('quarter');
    }
}
