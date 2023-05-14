<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    //cuando tiene muchos campos(atributos)
    //los sgts no se asignan masivamente    
    protected $guarded =['id','created_at','updated_at'];

    protected $primaryKey = 'id';

    //Relacion uno a uno inverso
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
