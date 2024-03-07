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
        Schema::create('facturas', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedInteger('id_cliente');
            $table->unsignedInteger('id_obra');
            $table->date('fecha_emision');
            $table->decimal('monto', 10, 2);
            $table->string('estado_pago', 50);
            $table->decimal('retencion', 5, 2)->nullable();
            $table->text('pie_factura')->nullable();
            $table->timestamps();

            $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->foreign('id_obra')->references('id')->on('obras');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturas');
    }
};
