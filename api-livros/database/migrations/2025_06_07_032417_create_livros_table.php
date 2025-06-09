// CÓDIGO CORRETO
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('autor');
            $table->string('editora')->nullable();
            $table->integer('ano_publicacao');
            $table->integer('numero_paginas');
            $table->date('data_aquisicao');
            $table->text('resumo')->nullable();
            $table->timestamps();
        });
    } // <--- O método up() termina aqui

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livros');
    } // <--- O método down() termina aqui
}; // <--- O `return new class` termina aqui com um ponto e vírgula
