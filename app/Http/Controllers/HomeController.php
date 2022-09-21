<?php

namespace App\Http\Controllers;

use App\Models\usuarios;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $users = usuarios::all();
        return view("index",["usuarios"=>$users]);
    }
    public function store(Request $request){
        $usuario = new usuarios();
        $usuario->nombre = $request->name;
        $usuario->apellido =$request->apellido;
        $usuario->edad  = $request -> edad;
        $usuario->save();
        
        return redirect("/");
    }
    public function destroy($id){
        $usuario = usuarios::destroy($id);
        return redirect("/");
    }
    public function update(Request $request){
        $usuario = usuarios::find($request->id);
        $usuario -> nombre = $request->name;
        $usuario -> apellido = $request->apellido;
        $usuario -> edad = $request->edad;

        $usuario -> update();

        return redirect("/");

    }
    public function usuarios(){
        return usuarios::all();
    }
}
