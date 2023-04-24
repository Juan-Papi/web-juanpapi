<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleCompra extends Model
{
    use HasFactory;
    protected $fillable = ['descripcion', 'total', 'fecha', 'precio_unitario', 'cantidad'];
    protected $primaryKey = 'id';
    public function nota_compra()
    {
        return $this->belongsTo(NotaCompra::class);
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}
