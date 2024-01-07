<?php

namespace App\Http\Controllers;

use App\Models\Transaccion;
use App\Http\Requests\StoreTransaccionRequest;
use App\Http\Requests\UpdateTransaccionRequest;

class TransaccionController extends Controller
{
    public function index()
    {
        return response()->json(Transaccion::get());
    }

    public function store(StoreTransaccionRequest $request)
    {
        Transaccion::create($request->all());
        return $this->index();
    }
    public function update(UpdateTransaccionRequest $request, Transaccion $Transaccion)
    {
        $Transaccion = Transaccion::find($Transaccion['id']);
        if($Transaccion)
            $Transaccion->update($request->all());
        return $this->index();
    }

    public function destroy(Transaccion $Transaccion)
    {
        $Transaccion = Transaccion::find($Transaccion['id']);
        if($Transaccion)
            $Transaccion->delete();
        return $this->index();
    }
    public function show($id){
        return response()->json(Transaccion::find($id));
    }
}
