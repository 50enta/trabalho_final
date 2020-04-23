<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacoteEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacote_eventos', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('apagado')->default('0');
            $table->string('descricao');
            $table->integer('inter_inferior')->nullable(); // numero convidados
            $table->integer('inter_superior')->nullable(); // numero convidados
            $table->double('precoTotal');
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
        Schema::dropIfExists('pacote_eventos');
    }
}
