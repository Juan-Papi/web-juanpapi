<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = ['descripcion', 'precio'];

    protected $primaryKey = 'id';

    // relacion de mucho a mucho 
    public function notaCompras(){
        return $this->belongsToMany(NotaCompra::class);
    }

}
