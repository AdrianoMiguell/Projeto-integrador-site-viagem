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
            $table->string('titulo', 100);
            $table->string('subtitulo_manha', 100)->default('Manhã');
            $table->string('manha', 1000);
            $table->string('subtitulo_tarde', 100)->default('Tarde');
            $table->string('tarde', 1000);
            $table->string('subtitulo_noite', 100)->default('Noite');
            $table->string('noite', 1000);
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
