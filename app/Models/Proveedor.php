<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;


    protected $fillable = ['direccion', 'email', 'nombre', 'telefono'];

    protected $primaryKey = 'id_proveedor';
    
}
