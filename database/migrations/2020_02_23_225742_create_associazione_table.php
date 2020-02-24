<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssociazioneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Associazione', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('nome',255);
            $table->string('citta',255);
            $table->string('provincia',3);
            $table->string('indirizzo',255);
            $table->string('cap',10);
            $table->string('telefono',20);
            $table->string('iban',27);
            $table->integer('p_iva');
            $table->float('importo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Associazione');
    }
}
