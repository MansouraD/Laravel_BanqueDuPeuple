<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients_entreprises', function (Blueprint $table) {
           $table->increments('idce');
           $table->string('statut');
           $table->string('denomination');
           $table->string('ninea');
           $table->string('adresse');
           $table->float('telephone');
           $table->string('mail');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients_entreprises');
    }
}
