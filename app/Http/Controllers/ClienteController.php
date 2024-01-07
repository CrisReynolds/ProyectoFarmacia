<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateClienteRequest;

class ClienteController extends Controller
{
    public function index()
    {
        return response()->json(Cliente::get());
    }

    public function store(StoreClienteRequest $request)
    {
        Cliente::create($request->all());
        return $this->index();
    }
    public function update(UpdateClienteRequest $request, Cliente $cliente)
    {
        $cliente = Cliente::find($cliente['id']);
        if($cliente)
            $cliente->update($request->all());
        return $this->index();
    }

    public function destroy(Cliente $cliente)
    {
        $cliente = Cliente::find($cliente['id']);
        if($cliente)
            $cliente->delete();
        return $this->index();
    }
    public function show($id){
        return response()->json(Cliente::find($id));
    }
}
