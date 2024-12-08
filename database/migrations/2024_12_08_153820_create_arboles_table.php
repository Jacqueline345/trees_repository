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
        Schema::create('arboles', function (Blueprint $table) {
            $table->id();
            $table->string('especie');
            $table->string('nombre_cientifico');
            $table->string('tamaño');
            $table->string('ubicacion_geografica');
            $table->string('estado');
            $table->string('precio');
            $table->string('foto')->nullable();
            $table->timestamp('fecha_actualizada')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arboles');
    }
};
