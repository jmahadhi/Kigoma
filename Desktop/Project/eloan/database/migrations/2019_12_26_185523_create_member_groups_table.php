<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_groups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mg_code');
            $table->string('mg_name');
            $table->date('regDate');
            $table->boolean('verifedStatus');
            $table->unsignedBigInteger('orgLevel_id');
            $table->unsignedBigInteger('loan_id');

            $table->foreign('orgLevel_id')->references('id')->on('organisation_levels');
            $table->foreign('loan_id')->references('id')->on('loans');
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
        Schema::dropIfExists('member_groups');
    }
}
