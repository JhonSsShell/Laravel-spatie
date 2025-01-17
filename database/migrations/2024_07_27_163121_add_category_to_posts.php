<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Crear migracion a la base de datos
     */
    public function up(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->unsignedBigInteger("category_id")->nullable()->after("user_id");
            $table->foreign("category_id")->references("id")->on("categories") ;
        });
    }

    /**
     * Revertir si exite la tabla en la base de datos
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('category_id');
        });
    }
};
