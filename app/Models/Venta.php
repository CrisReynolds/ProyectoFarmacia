<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $fillable = [
        'cliente_id',
        'user_id',
        'forma_pago',
        'pago',
        'fecha',
    ];
    public function scopeDetalle($query){
        return $query
                    ->join('users','users.id','ventas.user_id')
                    ->join('clientes','clientes.id','ventas.cliente_id')
                    ->select('ventas.id','users.id as userId','users.username','clientes.nombre','clientes.apellido','ventas.forma_pago','ventas.pago','ventas.fecha');
    }
}
