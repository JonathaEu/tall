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
        Schema::create('respostas_checklist', function (Blueprint $table) {
            $table->ulid('id')->primary()->unique();
            $table->foreignUlid('envio_checklist_id')->references('id')->on('envios_checklist');
            $table->foreignUlid('pergunta_checklist_id')->references('id')->on('perguntas_checklists');
            $table->string('resposta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('respostas_checklist');
    }
};
