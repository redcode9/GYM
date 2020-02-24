<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorsoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Corso', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome',255);
            $table->float('costo');
            $table->date('data_inizio');
            $table->date('data_fine')->nullable();
            $table->bigInteger('disciplina')->unsigned();
            $table->bigInteger('insegnante')->unsigned();
            $table->foreign('disciplina')->on('disciplina')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('insegnante')->on('socio')->references('id')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Corso');
    }
}
