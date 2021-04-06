<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->bigIncrements('likeID');
            $table->timestamps();
            $table->unsignedBigInteger('userID');
            $table->foreign('userID')->references('userID')->on('users');
            $table->unsignedBigInteger('postID');
            $table->foreign('postID')->references('postID')->on('posts');
            $table->boolean('like');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('likes');
    }
}
