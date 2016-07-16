<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CuentaTabla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('cuenta')){
          Schema::create('cuenta',function(Blueprint $table){
          $table->string('id_cuenta',255);
          $table->integer('saldo');
          $table->date('fecha_creacion');
          $table->string('numero_cuenta',50);
          $table->boolean('estado');
          $table->string('id_usuario',255);
          $table->timestamps();


          $table->primary('id_cuenta');
          $table->foreign('id_usuario')->references('id_usuario')->on('usuario')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('cuenta');
    }
}
