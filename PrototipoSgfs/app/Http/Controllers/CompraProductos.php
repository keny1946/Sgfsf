<?php

namespace App\Http\Controllers;

use App\producto;
use App\pedido;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Input\Input;

class CompraProductos extends Controller
{
    protected $redirectTo = '/producto';
    public function __construct(){

    }
    public function index(){
        $producto=producto::all();
        return view('productos',compact('producto'));
    }
    public function PedirProducto($id){

        if (Auth::check()){
            if(Auth::user()->id > 0){
                $user=User::all();
                $producto=producto::find($id);
                return view('FormularioCompra',['producto'=>$producto],compact('producto','user'));
            }

         }else{
            return view('auth.login');
         }



    }
    public function GuardarProducto(request $request, producto $producto){

        $producto=producto::find($producto->id);
        $request->validate(["cantidad"=>"required"]);
        if($producto->cantidad>=$request["cantidad"]){
            pedido::create([
                'descripcion'=> $request['descripcion'],
                'IdCliente'=> Auth::user()->id,
                'IdProducto'=> $producto->id
            ]);
            $producto->update(["cantidad"=>$producto->cantidad-$request["cantidad"]]);
            if($producto->cantidad==0){
                $producto->update(["estado"=>"inactivo"]);
            }
            return redirect('/producto')->with('Mensaje','Pedido realizado correctamente');
        }else{
            return redirect('/producto')->with('Mensaje','La cantidad no debe de ser mayor a '.$request["cantidadPro"]);
        }

    }

}
