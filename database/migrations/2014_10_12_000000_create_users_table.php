<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            /* YA SABE QUE ES LLAVE PRIMARIA
            *  INCLUYE TAMBIEN LOS TIPOS
            *  AUDITORIA DE TODO LO QUE VA PASANDO
            *  TIMPESTAMP CREATER PATH FECHA Y HORA CUANDO SE INGRESO
            *  UPDATE AT LA FECHA DE ACTUALIZACION DE ATRIBUTO
            *   FECHA Y HORA EN LA QUE SE ELIMINO EL ATRIBUTO
            *  EJEMPLO, SI SE ELIMINA NO SE REGISTRA FISICAMENTE, SOFT DELETE, NO DE LA BASE 
            *  TIMESTAMP CREA LOS 3 ATRIBUTOS
            *  ID Y TIMESTAMP DEBEN DE IR EN TODAS -> LLAVES PRIMARIAS Y LOS TIMESTAMPS
            *  PLANES DE ESTUDIO, CARRERAS -> CATALOGOS 
            *  EJ. MEDICOS, ENFERMEDADES -> CATALOGOS -> LOS IDERS SIRVEN PARA ESO
            */
            $table->foreignId('role_id')->constrained('roles');
            $table->string('name');
            $table->string('email')->unique(); 
            /* SE COLOCAN LOS CONSTRAINTS*/
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
