<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommunityPolls extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 200);
            $table->string('year', 10);
            $table->string('date', 100);
            $table->string('genre', 200);
            $table->string('director', 200);
            $table->mediumText('plot');
            $table->string('poster', 500);
            //$table->unsignedInteger('poll_id');
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
        Schema::dropIfExists('polls');

        Schema::dropIfExists('questions');

        Schema::dropIfExists('answers');
    }
}
