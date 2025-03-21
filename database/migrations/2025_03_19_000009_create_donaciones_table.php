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
        Schema::create('donaciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fundacion_id')->constrained('fundacions')->onDelete('cascade');
            $table->date('fecha');
            $table->bigInteger('cantidad');
            $table->foreignId('fk_id_cliente')->constrained('clientes')->onDelete('cascade');
            $table->timestamps();
            $table->primary(['id','fundacion_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donaciones');
    }
};
