<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;
    
    protected $fillable = [ 'nombre'];
    protected $primaryKey = 'id';
    
    // relacion de uno muchos inversa
    public function users(){
        return $this->belongsTo(User::class);
    }
}
