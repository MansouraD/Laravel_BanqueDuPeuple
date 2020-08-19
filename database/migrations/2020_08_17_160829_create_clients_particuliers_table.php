<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsParticuliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients_particuliers', function (Blueprint $table) {
            $table->increments('idcp');
            $table->string('nom');
            $table->string('prenom');
            $table->date('date_de_naissance');
            $table->integer('cni');
            $table->string('adresse');
            $table->string('telephone');
            $table->string('mail');
            $table->string('profession');
            $table->integer('statut');
            $table->integer('salaire');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients_particuliers');
    }
}
