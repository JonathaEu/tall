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
        Schema::create('telas', function (Blueprint $table) {
            $table->ulid('id')->primary()->unique();
            $table->foreignUlid('modulo_id')->nullable()->constrained();
            $table->foreignUlid('permission_id')->nullable()->constrained();
            $table->string('nome');
            $table->string('modulo_tela_rota');
            $table->string('icone');
            $table->integer('ordenacao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('telas');
    }
};
