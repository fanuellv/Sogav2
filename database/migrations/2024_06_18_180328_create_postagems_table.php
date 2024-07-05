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

        Schema::create('postagems', function (Blueprint $table) {
            $table->id(); // Cria uma coluna 'id' do tipo bigint auto-incrementada
            $table->string('texto',1050)->nullable();
            $table->string('imagem')->nullable();
            $table->foreignId('curtida_id')->nullable()->constrained('curtidas')->onDelete('cascade');
            $table->foreignId('comentario_id')->nullable()->constrained('comentarios')->onDelete('cascade');
            $table->foreignId('usuario_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
        
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postagems');
    }
};
