<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransazioneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Transazione', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('tipo',['Entrata','Uscita']);
            $table->float('importo');
            $table->text('note')->nullable();
            $table->bigInteger('corso')->unsigned();
            $table->bigInteger('socio')->unsigned();
            $table->foreign('corso')->on('corso')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('socio')->on('socio')->references('id')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Transazione');
    }
}
