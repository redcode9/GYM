<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransazioneEstTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TransazioneEst', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('importo');
            $table->text('note')->nullable();
            $table->bigInteger('esterno')->unsigned();
            $table->foreign('esterno')->on('esterno')->references('id')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TransazioneEst');
    }
}
