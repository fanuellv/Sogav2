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
        Schema::disableForeignKeyConstraints();

        // Suas migrações aqui

        Schema::enableForeignKeyConstraints();

        Schema::create('amizades', function (Blueprint $table) {
            $table->id(); // Cria uma coluna 'id' do tipo bigint auto-incrementada
            $table->date('data_inicio'); // Coluna para armazenar a data de início da amizade
            $table->foreignId('usuario1_id')->constrained('users')->onDelete('cascade'); // Chave estrangeira para o primeiro usuário
            $table->foreignId('usuario2_id')->constrained('users')->onDelete('cascade'); // Chave estrangeira para o segundo usuário
            $table->enum('status', ['aceito', 'rejeitado', 'espera']); // Coluna para armazenar o estado da amizade
            $table->unique(['usuario1_id', 'usuario2_id']); // Garante que a combinação de usuários seja única
            $table->timestamps(); // Colunas para created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('amizades');
    }
};
