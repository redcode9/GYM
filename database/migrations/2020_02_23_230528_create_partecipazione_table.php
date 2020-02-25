<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartecipazioneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Partecipazione', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('allievo')->unsigned();
            $table->bigInteger('corso')->unsigned();
            $table->foreign('allievo')->on('socio')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('corso')->on('corso')->references('id')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Partecipazione');
    }
}
