<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Socio', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('tipo',20)->nullable();
            $table->tinyInteger('verbalizzato')->nullable();
            $table->tinyInteger('fondatore')->nullable();
            $table->bigInteger('iscrizione')->unsigned();
            $table->bigInteger('tessera')->unsigned()->nullable();
            $table->integer('dati_fiscali')->nullable();
            $table->string('nome',20);
            $table->string('cognome',20);
            $table->string('genere',7);
            $table->string('luogo_nasc',30);
            $table->date('data_nasc');
            $table->foreign('iscrizione')->on('iscritto')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tessera')->on('tessera')->references('id')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Socio');
    }
}
