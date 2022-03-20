<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
        $table->string('Passaport_client');
        $table->foreign('Passaport_client')->references('Passaport_client')->on('clients');
	    $table->string('codi_unic');
	    $table->foreign('codi_unic')->references('codi_unic')->on('vols');
	    $table->string('localitzador');
	    $table->string('NumAsiento');
	    $table->boolean('EquipatgeMa');
	    $table->boolean('EquipatgeCabina');
	    $table->integer('QuantitatEquipatge');
	    $table->enum('asseguranca', ['Franquícia fins a 1000 Euros', 'Franquíca fins 500 Euros', 'Sense franquícia']);
	    $table->integer('PreuVol');
	    $table->enum('Checking', ['on-line', 'mostrador', 'quiosc']);
        $table->primary(['Passaport_client', 'codi_unic']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas');
    }
}
