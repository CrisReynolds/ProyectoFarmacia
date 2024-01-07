<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(){
        $categorias= Categoria::get();//select * from categorias
        return response()->json($categorias);
    } //CRUD
    public function destroy($id){
        $categoria=Categoria::find($id);
        if($categoria)
            $categoria->delete();
            return $this->index();
    }
    public function store(Request $request){
        $categoria=Categoria::create($request->all());
        return $this->index();
    }
    public function update(Request $request,$id){
        $categoria=Categoria::find($id);
        if($categoria)
            $categoria->update($request->all());
        return $this->index();
    }
    public function show($id){
        return response()->json(Categoria::find($id));
    }
    public function productos($id){
        $productos=Categoria::Productos($id);
        return response()->json($productos);
    }
}
