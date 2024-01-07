<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable = [
        'tipo',
        'id'
    ];
    public function scopeProductos($query,$id){
        return $query
                    ->join('productos','categorias.id','productos.categoria_id')
                    ->select('categorias.tipo','productos.descripcion','productos.imagen','productos.stock','productos.precio_venta')
                    ->where('categorias.id',$id)
                    ->get();
    }
}
