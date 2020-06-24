<?php

namespace App\Http\Controllers;

use App\insumos;
use App\pedido;
use App\pedidoEvento;
use App\producto;
use App\User;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class ReportesController extends Controller
{
    public function reportePedido($id){
        $pedido=DB::table('pedido')->select("pedido.*","producto.nombreProducto","producto.valor"
        ,"producto.descripcion","users.nombre","users.apellido","users.email","users.telefono","users.Domicilio")
        ->join("users","pedido.IdCliente","=","users.id")
        ->join("producto","pedido.IdProducto","=","producto.id")
        ->where("pedido.id",$id)
        ->get();
        $pdf = PDF::loadView('Reportes.pedidoCliente',['pedido'=>$pedido]);
        return $pdf->download('ReportePedidos.pdf');
    }
    public function reporteCliente(){
        $cliente=User::all();
        $pdf = PDF::loadView('Reportes.reporteCliente',['cliente'=>$cliente]);
        return $pdf->download('ReporteClientes.pdf');
    }
    public function reporteInsumos(){
        $insumos=insumos::all();
        $pdf = PDF::loadView('Reportes.reporteInsumos',['insumos'=>$insumos]);
        return $pdf->download('ReporteInsumos.pdf');
    }
    public function reporteProducto(){
        $producto=producto::all();
        $pdf = PDF::loadView('Reportes.reporteProducto',['producto'=>$producto]);
        return $pdf->download('ReporteProducto.pdf');
    }
    public function reporteEvento($id){
        $pedidoEvento=pedidoEvento::select("pedidoevento.descripcion as descripcionEvento","eventos.nombre","eventos.descripcion","users.*")
        ->join('eventos',"pedidoEvento.idEvento","=","eventos.id")
        ->join('users','pedidoEvento..IdCliente',"=","users.id")
        ->where("pedidoEvento.id",$id)
        ->get();
        $pdf = PDF::loadView('Reportes.reporteEvento',['pedidoEvento'=>$pedidoEvento]);
        return $pdf->download('ReportePedidoEvento.pdf');
    }
}
