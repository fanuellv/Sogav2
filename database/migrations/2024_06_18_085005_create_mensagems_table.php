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
        Schema::create('mensagems', function (Blueprint $table) {
            $table->id(); // Cria uma coluna 'id' do tipo bigint auto-incrementada
            $table->date('data');
            $table->string('texto');
            $table->foreignId('usuario_id1')->constrained('users')->onDelete('cascade');
            $table->foreignId('usuario_id2')->constrained('users')->onDelete('cascade');
        });

        Schema::enableForeignKeyConstraints();
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mensagems');
    }
};
