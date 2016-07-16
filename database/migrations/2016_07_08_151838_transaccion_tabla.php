<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TransaccionTabla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('transaccion')){
          Schema::create('transaccion',function(Blueprint $table){
            $table->string('id_transaccion',255);
            $table->string('cuenta_origen',255);
            $table->string('cuenta_destino',255);
            $table->integer('monto');
            $table->date('fecha_operacion');
            $table->string('id_item',255);
            $table->string('id_cuenta',255);
            $table->timestamps();

            $table->primary('id_transaccion');
            $table->foreign('id_item')->references('id_item')->on('item')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_cuenta')->references('id_cuenta')->on('cuenta')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('transaccion');
    }
}
