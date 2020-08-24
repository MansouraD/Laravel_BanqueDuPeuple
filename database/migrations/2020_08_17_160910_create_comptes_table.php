<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComptesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comptes', function (Blueprint $table) {
            $table->increments('idc');
            $table->integer('idce')->unsigned();
            $table->foreign('idce')->references('idce')->on('clients_entreprises');
            $table->integer('idcp')->unsigned();
            $table->foreign('idcp')->references('idcp')->on('clients_particuliers');
            $table->string('type_compte');
            $table->integer('numero_agence');
            $table->integer('numero_compte');
            $table->integer('cle_rib');
            $table->integer('frais_ouverture');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comptes');
    }
}
