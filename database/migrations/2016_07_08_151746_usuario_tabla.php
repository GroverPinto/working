<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsuarioTabla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('usuario')) {

          Schema::create('usuario',function(Blueprint $table){
            $table->string('id_usuario',255);
            $table->string('paterno', 30);
            $table->string('materno', 30);
            $table->string('nombres', 50);
            $table->string('email', 255);
            $table->string('contrasena', 255);
            $table->integer('celular');
            $table->string('ubicacion', 255);
            $table->boolean('estado');
            $table->timestamps();
            $table->primary('id_usuario');
          });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
