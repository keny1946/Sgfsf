<?php

namespace App\Http\Controllers;

use App\pedidoEvento;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AdminPedidoEventoController extends Controller
{
    public function index(){
        return view('Admin.pedidoEvento.pedidoEvento');
    }
    public function listar(){
        $pedido=pedidoEvento::select("pedidoevento.*","users.nombre","eventos.nombre as evento","servicios.Nombre")
        ->join("users","pedidoevento.idCliente","=","users.id")
        ->join("eventos","pedidoevento.idEvento","=","eventos.id")
        ->join("servicios","pedidoevento.idServicio","=","servicios.id")
        ->get();
        return DataTables::of($pedido)
            ->editColumn('reporte',function ($pedido){
                return '<a class="btn btn-outline-dark" href="/evento/'.$pedido->id.'/reporte">Reporte</a>';
            })
            ->rawColumns(['reporte'])
            ->make(true);

    }
}
