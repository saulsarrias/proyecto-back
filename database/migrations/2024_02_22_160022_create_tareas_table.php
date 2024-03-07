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
        Schema::create('tareas', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('parte_trabajo_id');
            $table->string('descripcion');
            $table->string('personal_asignado');
            $table->decimal('precio_por_hora', 8, 2);
            $table->decimal('horas_trabajadas', 8, 2);
            $table->timestamps();

            $table->foreign('parte_trabajo_id')->references('id')->on('partes_trabajo')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tareas');
    }
};
