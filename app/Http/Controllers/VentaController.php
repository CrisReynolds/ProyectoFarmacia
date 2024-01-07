<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Http\Requests\StoreVentaRequest;
use App\Http\Requests\UpdateVentaRequest;
use App\Models\Transaccion;

class VentaController extends Controller
{
    public function index()
    {
        return response()->json(Venta::get());
    }

    public function store(StoreVentaRequest $request)
    {
        Venta::create($request->all());
        return $this->index();
    }
    public function update(UpdateVentaRequest $request, Venta $Venta)
    {
        $Venta = Venta::find($Venta['id']);
        if($Venta)
            $Venta->update($request->all());
        return $this->index();
    }

    public function destroy(Venta $Venta)
    {
        $Venta = Venta::find($Venta['id']);
        if($Venta)
            $Venta->delete();
        return $this->index();
    }
    public function show($id){
        return response()->json(Venta::find($id));
    }
    public function detalle($fecha,$userId,$clienteId){
        $detalle=Venta::Detalle();
        if($fecha!=0)
            $detalle=$detalle->where('ventas.fecha',$fecha);
        if($userId!=0)
            $detalle=$detalle->where('users.id',$userId);
        if($clienteId!=0)
            $detalle=$detalle->where('clientes.id',$clienteId);
        $detalle=$detalle->get();
        $i=0;
        foreach($detalle as $item){
            $id=$item->id;
            $detalle[$i]->transacciones=Transaccion::Detalle($id);
            $i++;
        }
        return response()->json($detalle);
    }
}
