<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GAME', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');//->unique();
            //$table->timestamps();
        });

        Schema::create('GAMER', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_name');
        });

        
        Schema::create('GAME_OVER', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('game_id')->unsigned();
            $table->integer('gamer_id')->unsigned();
            $table->integer('score');
            $table->date('start_date');
            $table->date('finish_date')->nullable($value = true)->default(null);
        });

        Schema::table('GAME_OVER', function ($table) {
            $table->foreign('game_id')->references('id')->on('GAME');
            $table->foreign('gamer_id')->references('id')->on('GAMER');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('GAME');
        Schema::drop('GAMER');
        Schema::drop('GAME_OVER');
    }
}
