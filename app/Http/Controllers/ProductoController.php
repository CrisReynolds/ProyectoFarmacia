<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ProductoController extends Controller
{
    public function index(){
        $Productos= Producto::get();//select * from Productos
        return response()->json($Productos);
    } //CRUD
    public function destroy($id){
        $Producto=Producto::find($id);
        if($Producto)
            $Producto->delete();
            return $this->index();
    }
    public function store(Request $request){
        $Producto=Producto::create($request->all());
        return $this->index();
    }
    public function update(Request $request,$id){
        $Producto=Producto::find($id);
        if($Producto)
            $Producto->update($request->all());
        return $this->index();
    }
    public function imageUpload(Request $request){
        $imagen=$request->file('image');
        $path_img='producto';
        $imageName = $path_img.'/'.$imagen->getClientOriginalName();
        try {
            Storage::disk('public')->put($imageName, File::get($imagen));
        }
        catch (\Exception $exception) {
            return response('error',400);
        }
        return response()->json(['image' => $imageName]);
    }
    public function image($nombre){
        try{
            return response()->download(public_path('storage').'/producto/'.$nombre,$nombre);
        }
        catch (\Exception $exception) {
            return response()->json("error",400);
        }
    }
    public function show($id){
        return response()->json(Producto::find($id));
    }
}
