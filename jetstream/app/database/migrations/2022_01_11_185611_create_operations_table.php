<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Auth;


class CreateOperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('operations', function (Blueprint $table) {
            if (Auth::check()) {
                $nome = Auth::user()->id;
                
            }
            else{
                $nome='Deslogado';    
            }
            $table->foreignId('antena_id')->constrained();    
            $table->foreignId('tag_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->id();
            $table->text('operations');
            $table->text('tipo');
            $table->text('antena');
            $table->text('funcionario')->default($nome);
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
        Schema::dropIfExists('operations');
    }
}
