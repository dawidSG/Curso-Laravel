<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('razon_social');
            $table->string('pin');
            $table->string('direccion');
            $table->string('localidad');
            $table->string('provincia');
            $table->string('CP');
            $table->string('telefonos');
            $table->string('email');
            $table->timestamps();
        });

        DB::statement('ALTER TABLE empresas ADD logo LONGBLOB');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}
