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
            $table->bigIncrements('userId');
        
            $table->string('email');
            $table->foreign('email')->references('email')->on('university_details');   
                
            $table->string('password');
            $table->string('username');
            $table->string('profilePicture')->nullable();
            $table->string('gender');
            $table->date('dob');
            $table->string('studyStatus');
            $table->timestamp('email_verified_at')->nullable();
            
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
