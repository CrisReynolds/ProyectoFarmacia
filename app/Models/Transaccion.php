<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaccion extends Model
{
    use HasFactory;
    protected $fillable = [
        'producto_id',
        'cantidad',
        'precio',
        'venta_id',
    ];
    public function scopeDetalle($query,$id){
        return $query
                    ->join('productos','productos.id','transaccions.producto_id')
                    ->join('categorias','categorias.id','productos.categoria_id')
                    ->select('categorias.tipo','productos.descripcion','productos.imagen','transaccions.cantidad','transaccions.precio')
                    ->where('transaccions.venta_id',$id)
                    ->get();
    }
}
