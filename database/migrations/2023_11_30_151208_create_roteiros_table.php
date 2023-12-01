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
        Schema::create('roteiros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('subtitulo_manha')->default('Manhã');
            $table->string('manha');
            $table->string('subtitulo_tarde')->default('Tarde');
            $table->string('tarde');
            $table->string('subtitulo_noite')->default('Noite');
            $table->string('noite');
            $table->foreignId('viagem_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roteiros');
    }
};
