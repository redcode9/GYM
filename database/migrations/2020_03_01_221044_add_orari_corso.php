<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOrariCorso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Corso', function (Blueprint $table) {
            $table->longText('orari')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('Corso', 'orari')) {
            Schema::table('Corso', function (Blueprint $table) {
                $table->dropColumn('orari');
            });
        }
    }
}
