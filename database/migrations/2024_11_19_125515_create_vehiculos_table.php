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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('marca'); // Marca del vehículo
            $table->string('modelo'); // Modelo del vehículo
            $table->integer('anio'); // Año de fabricación
            $table->string('color'); // Color del vehículo
            $table->string('tipo'); // Tipo de vehículo (sedán, SUV, camión, etc.)
            $table->string('numero_motor')->nullable(); // Número de motor (opcional)
            $table->integer('kilometraje')->default(0); // Kilometraje actual
            $table->date('fecha_registro');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculos');
    }
};
