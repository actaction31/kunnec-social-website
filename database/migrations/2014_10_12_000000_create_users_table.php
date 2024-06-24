<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name')->comment("First Name");
            $table->string('last_name')->comment("Last Name");
            $table->string('username')->unique()->comment("UserID");
            $table->string('dob')->comment("Day of birthday, format:YYYY-mm-dd");
            $table->tinyInteger('gender')->comment("Gender, 0: female, 1: male");
            $table->tinyInteger('plan')->comment("User Membership");
            $table->tinyInteger('role')->comment("user's Role. 0=> normal user, 1=> Admin");
            $table->integer('city')->unsigned()->comment("Unsigned Integer. User's city Id in City table");
            $table->integer('state')->unsigned()->comment("Unsigned Integer. User's state Id in state table");
            $table->integer('country')->unsigned()->comment("Unsigned Integer. User's country Id in country table");
            $table->string('email')->unique()->comment("user's email unique identifier for user");
            $table->string('image')->comment("user Image Path");
            $table->timestamp('email_verified_at')->nullable()->comment("user email verification status");
            $table->string('password')->comment("user's password encrypted by hash");
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
