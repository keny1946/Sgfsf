<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use PDF;
use Yajra\DataTables\Facades\DataTables;

class ClienteController2 extends Controller
{
    public function index(){
        return view('Admin.Cliente.index');
    }
    public function listar(){
        $User=User::all();
        return DataTables::of($User)
        ->editColumn('Estado',function ($User){
            return '<a class="btn btn-outline-dark" href="/cliente/'.$User->id.'/Estado">Estado</a>';
        })
        ->rawColumns(['Estado'])
            ->make(true);
    }


    public function cambiarEstado($id){
        $cliente=User::find($id);
        if($cliente->estado=="inactivo"){
            $cliente->update([
                "estado"=>"activo"
            ]);
        }else{
            $cliente->update([
                "estado"=>"inactivo"
            ]);
        }
        session()->flash("flash_message","Se ha cambiado el estado satisfatoriamente");
        return view('Admin.Cliente.index');
    }
}
