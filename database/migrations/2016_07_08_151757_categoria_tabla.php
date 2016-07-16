<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CategoriaTabla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('categoria')){
          Schema::create('categoria',function(Blueprint $table){
            $table->string('id_categoria',255);
            $table->string('nombre', 50);
            $table->boolean('estado');
            $table->timestamps();
            $table->primary('id_categoria');
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
        Schema::dropIfExists('categoria');
    }
}
