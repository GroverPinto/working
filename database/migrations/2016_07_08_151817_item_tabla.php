<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ItemTabla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('item')){
          Schema::create('item',function(Blueprint $table){
            $table->string('id_item',255);
            $table->string('titulo',500);
            $table->string('descripcion',800);
            $table->integer('costo');
            $table->string('imagen',1000);
            $table->boolean('negociable');
            $table->boolean('estado');
            $table->string('id_categoria',255);
            $table->timestamps();

            $table->primary('id_item');
            $table->foreign('id_categoria')->references('id_categoria')->on('categoria')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('item');
    }
}
