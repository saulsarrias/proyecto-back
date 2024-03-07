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
        Schema::create('partes_trabajo', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedInteger('id_user');
            $table->unsignedInteger('id_obra');
            $table->date('fecha_parte');
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_obra')->references('id')->on('obras');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partes_trabajo');
    }
};
