<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIscrittoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Iscritto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('cf',16);
            $table->string('cellulare',20)->nullable();
            $table->string('email',255)->nullable();
            $table->string('citta',255);
            $table->string('provincia',3);
            $table->string('cap',10);
            $table->string('indirizzo',255);
            $table->date('ass_rilascio')->nullable();
            $table->date('ass_scad')->nullable();
            $table->string('ass_num',20)->nullable();
            $table->date('cert_med_rilascio')->nullable();
            $table->date('cert_med_scadenza')->nullable();
            $table->text('note');
            $table->bigInteger('gestore')->unsigned();
            $table->foreign('gestore')->on('users')->references('id')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Iscritto');
    }
}
