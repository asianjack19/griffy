<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('userID');
            $table->string('userName');
            
            
            $table->string('password');
            $table->string('profilePicture')->nullable();
            $table->string('gender');
            $table->date('dob');
            $table->string('studyStatus');
            $table->string('email');
            $table->float('gpa')->nullable();
        

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
