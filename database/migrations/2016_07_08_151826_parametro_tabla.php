<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ParametroTabla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('parametro')){
          Schema::create('parametro',function(Blueprint $table){
            $table->string('id_parametro',255);
            $table->string('campo',50);
            $table->string('valor',50);
            $table->string('descripcion',500);
            $table->timestamps();

            $table->primary('id_parametro');

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
        Schema::dropIfExists('parametro');
    }
}
