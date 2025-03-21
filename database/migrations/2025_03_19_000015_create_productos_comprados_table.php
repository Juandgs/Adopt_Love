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
        Schema::create('productos_comprados', function (Blueprint $table) {
            $table->foreignId('fk_id_productos')->constrained('productos')->onDelete('cascade');
            $table->foreignId('fk_id_cliente')->constrained('clientes')->onDelete('cascade');
            $table->integer('cantidad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos_comprados');
    }
};
