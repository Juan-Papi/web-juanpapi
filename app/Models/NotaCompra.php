<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class NotaCompra extends Model
{
    use HasFactory;
    protected $fillable = ['descripcion', 'monto', 'fecha'];

    protected $primaryKey = 'id';
    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // muchos a muchos 
    public function productos(){
        return $this-> belongsToMany(producto::class);
    }
}
