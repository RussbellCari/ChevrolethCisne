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
        Schema::create('nota_ventas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_id'); // Relación con clientes
            $table->unsignedBigInteger('vehiculo_id')->nullable(); // Relación opcional con vehículos
            $table->unsignedBigInteger('vehiculocliente_id')->nullable(); // Relación opcional con vehiculocliente
            $table->unsignedBigInteger('repuesto_id')->nullable(); // Relación opcional con repuestos
            $table->unsignedBigInteger('mantenimiento_id')->nullable(); // Relación opcional con mantenimiento
            $table->date('fecha_emision');
            $table->decimal('subtotal', 10, 2);
            $table->decimal('impuestos', 10, 2);
            $table->decimal('total', 10, 2);
            $table->enum('metodo_pago', ['efectivo', 'tarjeta', 'transferencia', 'otros']); // Campo para el método de pago
            $table->text('detalles')->nullable();

            // Definición de las claves foráneas
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
            $table->foreign('vehiculo_id')->references('id')->on('vehiculos')->onDelete('cascade');
            $table->foreign('vehiculocliente_id')->references('id')->on('vehiculocliente')->onDelete('cascade');
            $table->foreign('repuesto_id')->references('id')->on('repuestos')->onDelete('cascade');
            $table->foreign('mantenimiento_id')->references('id')->on('mantenimiento')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nota_ventas');
    }
};
