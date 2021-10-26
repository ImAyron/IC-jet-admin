<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operacaos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tag_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('antena_id');
            $table->unsignedBigInteger('tipo');
            $table->unsignedBigInteger('quantidade');
            $table->datetime('data_hora');


            
            $table->foreign('tag_id')->references('id')->on('tags');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('antena_id')->references('id')->on('antenas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operacaos');
    }
}
