<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriaTelefone extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefone', function (Blueprint $table) {
            $table->id();
            $table->foreignId('aluno_id');
            $table->string('nome', 20);
            $table->string('numero', 20);
            $table->timestamps();

            $table->foreign('aluno_id')->references('id')->on('aluno');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('telefone');
    }
}
