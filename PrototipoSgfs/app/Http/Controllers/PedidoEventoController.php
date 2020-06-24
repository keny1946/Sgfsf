<?php

namespace App\Http\Controllers;

use App\eventos;
use App\pedido;
use App\pedidoEvento;
use App\servicios;
use App\User;
use Exception;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class PedidoEventoController extends Controller
{
    public function index(){
        $eventos=eventos::all();
        return view('eventos',compact('eventos'));

    }
    public function verEvento($id){
        if (Auth::check()){
            if(Auth::user()->id > 0){
                $user=User::all();
                $eventos=eventos::find($id);
                $servicios=servicios::all();
                return view('ReservaEvento',compact('eventos','servicios','user'));
            }

         }else{
            return view('auth.login');
         }
    }
    public function store(Request $request,$id){
        $evento=eventos::find($id);
        $request->validate(pedidoEvento::$rules);
        $pedido=pedidoEvento::all();
            $input=$request->all();
        foreach($input["idServicio"] as $key=>$value){
            $servicios=$value;
        }
        $date = Carbon::now()->toDateTimeString();
        foreach($pedido->fecha as $value){
            if($input["fecha"]==$value){
                $boleano=true;
            }
        }
        if($input["fecha"]<=$date ){
            $request->session()->flash('flash_message','La fecha no puede ser menor o igual a la actual');
            return view('ReservaEvento');
        }elseif($boleano==true){

            $request->session()->flash('flash_message','La fecha digita ya se encuentra disponible');
            return view('ReservaEvento');
        }else{
            $pedido=pedidoEvento::create([
                'idCliente'=>Auth::user()->id,
                'idEvento'=>$evento->id,
                'idServicio'=>$servicios,
                'descripcion'=>$input["descripcion"],
                'valor'=>$input["valor"],
                'fecha'=>$input["fecha"]
            ]);
            return redirect('/Eventos')->with('message','Se realizo la reserva');
        }



    }

}
