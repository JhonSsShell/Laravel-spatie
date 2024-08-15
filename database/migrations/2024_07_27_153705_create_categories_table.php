<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Crear la migracion de la base de datos
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string("name", 100);
            $table->timestamps();
        });
    }

    /**
     * Revertir si existe la tabla
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
