<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Http\Requests\StoreVentaRequest;
use App\Http\Requests\UpdateVentaRequest;

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
}
