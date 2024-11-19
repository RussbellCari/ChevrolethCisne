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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); // Nombre del cliente
            $table->string('apellido'); // Apellido del cliente
            $table->string('correo')->unique(); // Correo electrónico único del cliente
            $table->string('telefono')->nullable(); // Número de teléfono del cliente
            $table->string('direccion')->nullable(); // Dirección del cliente
            $table->date('fecha_nacimiento')->nullable(); // Fecha de nacimiento del cliente
            $table->enum('tipo_cliente', ['individual', 'empresa']); // Tipo de cliente
            $table->string('identificacion')->unique(); // Número de identificación (DNI, cédula, etc.)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
