<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuaris', function (Blueprint $table) {
	    $table->string('nom');
	    $table->string('cognoms');
	    $table->string('email');
	    $table->primary('email');
	    $table->string('contrasenya');
	    $table->boolean('tipus');
	    $table->date('HoraEntrada');
	    $table->date('HoraSortida');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuaris');
    }
}
