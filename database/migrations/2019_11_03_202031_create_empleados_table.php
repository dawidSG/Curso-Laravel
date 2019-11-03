<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('dni');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('otros_telefonos');
            $table->string('imagen');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->time('cant_horas_diarias');
            $table->bigInteger('id_cargo');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::statement('ALTER TABLE empleados ADD foto LONGBLOB');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
