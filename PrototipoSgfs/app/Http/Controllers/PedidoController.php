<?php

namespace App\Http\Controllers;

use App\pedido;
use App\domicilio;
use App\producto;
use App\User;
use PDF;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedido=pedido::all();
        $cliente=User::all();
        $domicilio=domicilio::all();
        $producto=producto::all();
        return view('Admin.Pedido.index',compact('pedido','cliente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function info(pedido $pedido)
    {
        return view('Admin.Pedido.show');
    }
    public function listar(){

        $pedido=pedido::select("pedido.*","users.nombre","producto.nombreProducto")
        ->join("users","pedido.IdCliente","=","users.id")
        ->join("producto","pedido.IdProducto","=","producto.id")
        ->get();
        return DataTables::of($pedido)
        ->editColumn('reporte',function ($pedido){
            return '<a class="btn btn-outline-dark" href="/pedido/'.$pedido->id.'/reporte">Reporte</a>';
        })
        ->rawColumns(['reporte'])
        ->make(true);
    }
    public function reporte($id){
        $pedido=pedido::select("pedido.*","producto.nombreProducto","producto.valor","producto.descripcion","users.nombre","users.apellido","users.email","users.telefono")
        ->join("users","pedido.IdCliente","=","users.id")
        ->join("producto","pedido.IdProducto","=","producto.id")
        ->where("pedido.id","=",$id)
        ->get();
        $pdf = PDF::loadView('Reportes.pedidoCliente',$pedido);
        return $pdf->download('pedido.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show(pedido $pedido, User $cliente,producto $producto,domicilio $domicilio )
    {
        $pedido=pedido::find($pedido->id);
        $cliente=User::find($cliente->id);
        $domicilio=domicilio::find($producto->id);
        $producto=producto::find($domicilio->id);
        return view('Admin.Pedido.edit',['pedido'=>$pedido,'cliente'=>$cliente,'domicilio'=>$domicilio,'producto'=>$producto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pedido $pedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(pedido $pedido)
    {
        //
    }
}
