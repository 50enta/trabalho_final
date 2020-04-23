<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItensDoPacotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itens_do_pacotes', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('apagado')->default('0');

            $table->integer('itens_material_id')->unsigned()->nullable();
            $table->foreign('itens_material_id')->references('id')->on('itens_materials');
            $table->integer('pacote_eventos_id')->unsigned()->nullable();
            $table->foreign('pacote_eventos_id')->references('id')->on('pacote_eventos');
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
        Schema::dropIfExists('itens_do_pacotes');
    }
}
