<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vols', function (Blueprint $table) {
	    $table->string('codi_unic', 6)->primary();;
	    $table->integer('codi_model');
	    $table->string('ciutatOrigen');
	    $table->string('ciutatDesti');
	    $table->string('TerminalOrigen');
	    $table->string('terminalDesti');
	    $table->date('DataSortida');
	    $table->date('DataArribada');
	    $table->enum('Classe', ['Turista','Bussines','Primera']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vols');
    }
}
