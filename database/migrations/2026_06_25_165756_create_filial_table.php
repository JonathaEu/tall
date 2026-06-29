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
        Schema::create('filial', function (Blueprint $table) {
            $table->ulid('id')->primary()->unique();
            $table->foreignUlid('empresa_id')->constrained();
            $table->string('nome');
            $table->string('cnpj');
            $table->boolean('status');
            $table->string('email')->unique()->nullable();
            $table->string('telefone')->nullable();
            $table->string('cep');
            $table->string('lougradouro');
            $table->integer('numero_edificio');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('icone')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filial');
    }
};
