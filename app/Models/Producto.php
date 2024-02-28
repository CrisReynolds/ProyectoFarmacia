<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'descripcion',
        'imagen',
        'cantidad_minima',
        'stock',
        'precio_compra',
        'precio_venta',
        'categoria_id'
    ];
    public function scopeMeses($query,$gestion,$mes){
        $query
            ->join('categorias','categorias.id','productos.categoria_id')
            ->join('transaccions','transaccions.producto_id','productos.id')
            ->join('ventas','ventas.id','transaccions.venta_id')
            ->select(
                DB::raw('concat(categorias.tipo," ",productos.descripcion) as name'),
                DB::raw('count(*) as value')
            )
            ->whereYear('ventas.fecha',$gestion)
            ->whereMonth('ventas.fecha',$mes)
            ->groupBy('productos.id')
            ->groupBy('categorias.tipo')
            ->groupBy('productos.descripcion');
        return $query;
    }
}
