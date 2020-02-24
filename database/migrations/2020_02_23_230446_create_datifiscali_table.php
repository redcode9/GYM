<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatifiscaliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Dati_fiscali', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tipo_doc',20)->nullable();
            $table->string('descrizione',50)->nullable();
            $table->date('data_iscriz');
            $table->string('pagamento',20);
            $table->bigInteger('socio')->unsigned();
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
        Schema::dropIfExists('Dati_fiscali');
    }
}
