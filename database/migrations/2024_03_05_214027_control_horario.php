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
        Schema::create('control_horario', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('id_user');
            $table->dateTime('Fecha_Hora_Entrada');
            $table->dateTime('Fecha_Hora_Salida');
            $table->foreign('id_user')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
