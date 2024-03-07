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
        Schema::create('lineas_factura', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('id_factura');
            $table->string('concepto', 255);
            $table->decimal('base_unitaria', 10, 2);
            $table->decimal('precio', 10, 2);
            $table->decimal('iva', 5, 2);
            $table->timestamps();

            $table->foreign('id_factura')->references('id')->on('facturas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lineas_factura');
    }
};
