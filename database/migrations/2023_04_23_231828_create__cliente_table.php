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
        Schema::create('_cliente', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('nombre');
            $table->integer('telefono');
            $table->string('direccion');
            $table->date('fecha_nacimiento');
            $table->char('genero', 1);
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
        Schema::dropIfExists('_cliente');
    }
};
