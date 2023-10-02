<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livro', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('autor');
            $table->string('qtd_paginas');
            $table->text('sinopse');
            $table->text('isbn');
            $table->date('data_emprestimo');
            $table->date('data_devolucao')->nullablle();
            $table->boolean('disponibilidade');
            $table->foreignId('genero_id');
            $table->timestamps();

            $table->foreign('genero_id')->references('id')->on('genero');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livro');
    }
}
