<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItensMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itens_materials', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('apagado')->default('0');
            $table->string('descricao');
            $table->string('formato')->nullable();
            $table->string('cor')->nullable();
            $table->integer('capacidade')->nullable();
            $table->integer('quantidade');

            $table->integer('categoria_itens_id')->unsigned();
            $table->foreign('categoria_itens_id')->references('id')->on('categoria_itens');
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
        Schema::dropIfExists('itens_materials');
    }
}
