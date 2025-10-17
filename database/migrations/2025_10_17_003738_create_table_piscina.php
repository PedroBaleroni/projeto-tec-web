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
        Schema::create('piscina', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->integer('capacidade')->nullable();
            $table->string('agenda')->nullable();
            $table->boolean('ativa')->default(false);
            $table->string('empresa_responsavel');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_piscina');
    }
};
