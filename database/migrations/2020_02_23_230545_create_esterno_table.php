<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEsternoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Esterno', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome',255);
            $table->string('cognome',255);
            $table->char('genere',1);
            $table->string('luogo_nasc',255);
            $table->date('data_nasc');
            $table->enum('tipo',['collaboratore', 'stagista']);
            $table->bigInteger('corso')->unsigned()->nullable();
            $table->bigInteger('tessera')->unsigned()->nullable();
            $table->bigInteger('iscrizione')->unsigned();
            $table->integer('dati_fiscali')->nullable();
            $table->bigInteger('socio')->unsigned()->nullable();
            $table->string('p_iva', 20)->nullable();
            $table->string('altro_ruolo',20)->nullable();
            $table->foreign('corso')->on('corso')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tessera')->on('tessera')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('iscrizione')->on('iscritto')->references('id')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('Esterno');
    }
}
