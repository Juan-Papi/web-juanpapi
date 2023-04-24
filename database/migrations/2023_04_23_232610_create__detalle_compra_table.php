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
        Schema::create('_detalle_compra', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->decimal('total', 10, 2);
            $table->date('fecha');
            $table->decimal('precio_unitario', 10, 2);
            $table->integer('cantidad');
          
            $table->unsignedBigInteger('nota_compra_id');
            $table->foreign('nota_compra_id')->references('id')->on('_nota_compra')->onDelete('cascade');


            $table->unsignedBigInteger('producto_id');
            $table->foreign('producto_id')->references('id')->on('_producto')->onDelete('cascade');

            $table->timestamps();
    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_detalle_compra');
    }
};
