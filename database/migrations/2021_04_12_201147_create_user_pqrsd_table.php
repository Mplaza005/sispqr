<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPqrsdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_pqrsd', function (Blueprint $table) {
            $table->id();
            $table->text('idCliente')->nullable();
            $table->text('idPqrsd')->nullable();
            $table->text('idUser')->nullable();
            $table->text('correo')->nullable();
            $table->text('descEstado')->nullable();
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
        Schema::dropIfExists('user_pqrsd');
    }
}
