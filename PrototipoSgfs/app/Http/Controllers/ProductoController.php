<?php

namespace App\Http\Controllers;
use App\producto;
use App\insumos;
use App\producto_insumo;
use Laracasts\Flash\Flash;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;
use Yajra\DataTables\DataTables;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producto=producto::all();
        return view('Admin.Producto.index',compact("producto"));

    }

    public function listar(){
        $producto=producto::all();
        return DataTables::of($producto)
            ->addColumn('editar', function ($producto) {
                return '<a class="btn btn-outline-dark" href="/producto/'.$producto->id.'/edit" >Editar</a>';
            })
            ->editColumn('imagen',function ($producto){
                return "<img src='/uploads/".$producto->imagen."' width='100px'  >";
            })
            ->rawColumns(['editar','imagen'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $producto=producto::all();
        $insumo=insumos::all();
        return view('Admin.Producto.create',compact('producto','insumo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(Producto::$rules);
        $input= $request->all();


            $imagen=null;
            if($request->imagen != null){
                $imagen = $input["nombreProducto"].time().'.'.$request->imagen->extension();
                $request->imagen->move(public_path('uploads'),$imagen);
            }
            $producto=producto::create([
                "nombreProducto"=>$input["nombreProducto"],
                "valor"=>$this->calcularPrecio($input["insumo_id"],$input["cantidades"]),
                "descripcion"=>$input["descripcion"],
                "estado"=>$input["estado"],
                "cantidad"=>$input["cantidad"],
                "imagen"=>$imagen
            ]);
            foreach($input["insumo_id"] as $key=>$value){
                producto_insumo::create([
                    "IdInsumos"=>$value,
                    "IdProducto"=>$producto->id,
                    "Cantidad"=>$input["cantidades"][$key],
                ]);

                $ins=insumos::find($value);
                    $ins->update(["cantidad"=>$ins->cantidad-$input["cantidades"][$key]]);
                    if($ins->cantidad==0){
                        $ins->update(["Estado"=>"inactivo"]);
                    }
                    $request->session()->flash('flash_message', "Se registro correctamente");
                    return redirect("/Adminproducto");


            }




    }
    public function ingresoProducto(request $request){
        $input=$request->all();
        $producto=producto::find($input["producto"]);
        if($input["cantidad"]>0){
            $producto->update([
                "cantidad"=>$producto->cantidad+$input["cantidad"],
                "estado"=>"activo"
            ]);
        }else{
            $request->session()->flash('flash_message', "La cantidad debe de ser mayor a cero");
        }
        return redirect('/Adminproducto');
    }
    public function calcularPrecio($insumos,$cantidades){
        $precio=0;
        foreach($insumos as $key=> $value){
            $insumo=insumos::find($value);
            $precio += ($insumo->Valor * $cantidades[$key]);
        }
        return $precio;
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(producto $producto)
    {
        $producto=producto::find($producto->id);
        $insumo=insumos::all();
        $pro=$producto->IdInsumos;
        if($producto==null){
            session()->flash('flash_message', "No se encontro el producto");
        }else{
            return view('Admin.Producto.edit',['producto'=>$producto],compact('producto','insumo','pro'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(Producto::$rules);
        $input= $request->all();
        try{
        $producto=producto::find($input["id"]);

            if($request->imagen == $input["imagen"]){
                Storage::delete(['uploads/'. $input["imagen"]]);
                $imagen = $input["nombreProducto"].time().'.'.$request->imagen->extension();
                $request->imagen->move(public_path('uploads'),$imagen);
            }
        if($producto==null){
            $request->session()->flash('flash_message', "No se encontro el producto");
        }
        foreach($input["insumo_id"] as $key=>$value){
            $variable=$value;
        }
            $producto->update([
                "nombreProducto"=>$input["nombreProducto"],
                "valor"=>$input["valor"],
                "descripcion"=>$input["descripcion"],
                "estado"=>$input["estado"],
                "cantidad"=>$input["cantidad"],
                "imagen"=>$imagen,
                "IdInsumos"=>$variable
            ]);
            $request->session()->flash('flash_message', "Se modifico correctamente");
            return redirect("/Adminproducto");


        }catch(\Exception $e){
            Flash::error($e->getMessage());
            return redirect("/Adminproducto");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(producto $producto)
    {
        //
    }
}
