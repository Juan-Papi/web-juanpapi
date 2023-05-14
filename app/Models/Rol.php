<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;
    
    protected $fillable = [ 'nombre'];
    protected $primaryKey = 'id';
    // relacion de uno muhcos inversas
    public function usurs(){
        return $this->belongsTo(User::class);
    }
}
