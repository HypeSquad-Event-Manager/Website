<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserBios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_bios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('userid');
            $table->string('username');
            $table->string('discrim');
            $table->string('avatar');
            $table->string('sexuality');
            $table->string('dob');
            $table->string('description');
            $table->string('gender');
            $table->string('status');
            $table->string('email');
            $table->string('occupation');
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
        Schema::dropIfExists('user_bios');
    }
}
