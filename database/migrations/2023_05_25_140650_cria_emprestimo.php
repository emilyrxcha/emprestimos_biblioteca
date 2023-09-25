<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriaEmprestimo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emprestimo', function (Blueprint $table) {
            $table->foreignId('livro_id');
            $table->foreignId('aluno_id');
            $table->datetime('datahora')->nullable();
            $table->date('data_devolucao')->nullable();
            $table->timestamps();

            $table->foreign('livro_id')->references('id')->on('livro');
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
        Schema::drop('emprestimo');
    }
}
