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
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Cria uma coluna 'id' do tipo bigint auto-incrementada
            $table->string('name');
            $table->string('numero')->unique();
            $table->string('password');
            $table->date('dataNascimento');
            $table->string('biografia');
            $table->string('fotoPerfil')->nullable(); // Campo para a foto de perfil
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
