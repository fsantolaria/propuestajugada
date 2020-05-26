<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNumerosSorteosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('numeros_sorteos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('operador_id');
            $table->foreign('operador_id')->references('id')->on('operadors');
            $table->unsignedBigInteger('loteria_id');
            $table->string('numero');
            $table->string('sorteo');
            $table->timestamp('fechaAlta');
            $table->timestamp('fechaExpira');
            $table->boolean('estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('numeros_sorteos');
    }
}
