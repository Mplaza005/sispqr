<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePqrsdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pqrsds', function (Blueprint $table) {
            
            $table->id();
            
            //Datos Cliente
            $table->unsignedBigInteger('idCliente')->nullable();
            $table->string('correoElectronico')->nullable();
            //datos pqrsd
            $table->enum('esAnonima', ['TRUE','FALSE'])->nullable();
            $table->enum('tipoPqrsd', ['peticion','queja','reclamo','solicitud','denuncia'])->nullable();
            $table->enum('tipoPersona', ['natural','juridica','apoderado','ninos_ninas_adolecentes'])->nullable();
            $table->text('descripcion')->nullable();
            $table->string('urlPdf')->nullable();
            $table->enum('estado', ['enviado','enProceso','resuelto'])->nullable();
            //
            $table->timestamps();
            //llaves foraneas    
            $table->foreign('idCliente')->references('id')->on('clientes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pqrsds');
    }
}
