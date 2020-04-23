<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicosDoPacotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicos_do_pacotes', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('apagado')->default('0');

            $table->integer('servicos_id')->unsigned()->nullable();
            $table->foreign('servicos_id')->references('id')->on('servicos');
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
        Schema::dropIfExists('servicos_do_pacotes');
    }
}
