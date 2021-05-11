<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();

            //Datos Cliente
            $table->string('primerNombre')->nullable();
            $table->string('segundoNombre')->nullable();
            $table->string('primerApellido')->nullable();
            $table->string('segundoApellido')->nullable();
            $table->enum('tipoDocumento', ['cedula de Cuidadania', 'cedula de extrangeria','registroCivil','targetaIdentidad'])->nullable();
            $table->string('numeroIdentificacion')->nullable();
            $table->date('fechaNacimiento')->nullable();
            $table->enum('genero', ['masculino', 'femenino','otro'])->nullable();
            $table->char('direccion',255);
            


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
