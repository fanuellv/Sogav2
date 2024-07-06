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
        Schema::table('mensagems', function (Blueprint $table) {
            $table->timestamps(); // Adiciona as colunas 'created_at' e 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mensagems', function (Blueprint $table) {
            $table->dropTimestamps(); // Remove as colunas 'created_at' e 'updated_at'
        });
    }
};
