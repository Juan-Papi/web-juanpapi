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
        Schema::create('_personal', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email')->unique();
            $table->integer('nro_telefono');
            $table->string('cargo');
            $table->string('estado');
            $table->date('fecha_contrato');
            $table->date('finalizacion_contrato');
            $table->date('fecha_nacimiento');
            $table->char('genero', 1);
            $table->string('nro_casa');
            $table->string('calle');
            $table->string('ciudad');
            $table->string('distrito');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_personal');
    }
};
