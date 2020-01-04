<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstName');
            $table->string('middleName');
            $table->string('lastName');
            $table->integer('phoneNumber');
            $table->integer('age');
            $table->boolean('disabeStatus');
            $table->unsignedBigInteger('memberGroup_id');
            $table->unsignedBigInteger('memberGroupCat_id');

            $table->foreign('memberGroup_id')->references('id')->on('member_groups');
            $table->foreign('memberGroupCat_id')->references('id')->on('member_group_cats');
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
        Schema::dropIfExists('member_details');
    }
}
