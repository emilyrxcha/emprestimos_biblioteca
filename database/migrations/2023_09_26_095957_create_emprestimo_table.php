<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmprestimoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emprestimo', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('livro_id');
            $table->foreignId('usuario_id');
            $table->datetime('datahora')->nullable();
            $table->date('data_devolucao')->nullable();
            $table->timestamps();

            $table->foreign('livro_id')->references('id')->on('livro');
            $table->foreign('usuario_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emprestimo');
    }
}
