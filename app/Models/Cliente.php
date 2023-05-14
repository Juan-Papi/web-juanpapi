<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = ['email', 'nombre','nro_telefono', 'fecha_nacimiento', 'genero', 'fecha_registro', 'tipo', 'apellido', ];

    protected $primaryKey = 'id';

    //uno a muchos inversa
    public function user()
    {
     return $this->belongsTo(User::class);
    }
}
