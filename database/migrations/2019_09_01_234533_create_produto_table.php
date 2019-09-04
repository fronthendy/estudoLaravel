<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('descricao');
            $table->string('imagem');
            $table->float('preco');
            $table->unsignedBigInteger('fk_categoria');
            $table->unsignedBigInteger('fk_editora');
            $table->unsignedBigInteger('fk_autor');
            $table->timestamps();

            $table->foreign('fk_categoria')->references('id')->on('categoria');
            $table->foreign('fk_editora')->references('id')->on('editora');
            $table->foreign('fk_autor')->references('id')->on('autor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produto');
    }
}
