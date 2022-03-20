<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
	    $table->string('Passaport_client')->primary();
	    $table->string('Nom i cognoms');
	    $table->integer('Edat');
	    $table->integer('Telefon');
	    $table->string('Adreça');
	    $table->string('Ciutat');
	    $table->string('Pais');
	    $table->string('Email');
        $table->enum('Tipus de tajeta', ['Debit', 'Credit']);
	    $table->integer('Numero de tajeta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
