<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniversityDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('university_details', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->float('gpa');
            $table->string('major');
            $table->unsignedBigInteger('universityID');
            $table->foreign('universityID')->references('universityID')->on('universities');
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
        Schema::dropIfExists('university_details');
    }
}
