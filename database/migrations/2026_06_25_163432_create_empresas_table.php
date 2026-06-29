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
        Schema::create('empresas', function (Blueprint $table) {
            $table->ulid('id')->primary()->unique();
            $table->string('razao_social');
            $table->string('cnpj');
            $table->string('nome_fantasia');
            $table->enum('status', ['ativo', 'inadimplente', 'trial', 'cancelado']);
            $table->string('subdominio');
            $table->string('email')->unique()->nullable();
            $table->string('telefone')->nullable();
            $table->string('cep');
            $table->string('lougradouro');
            $table->integer('numero_edificio');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            $table->string('icone')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
