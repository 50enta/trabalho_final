<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagemEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagem_eventos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image');
            $table->boolean('apagado')->default('0');

            $table->integer('evento_id')->unsigned();
            $table->foreign('evento_id')->references('id')->on('eventos');
            $table->integer('categoria_imagens_id')->unsigned();
            $table->foreign('categoria_imagens_id')->references('id')->on('categoria_imagens');
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
        Schema::dropIfExists('imagem_eventos');
    }
}
