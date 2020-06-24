<?php

namespace App\Http\Controllers;

use App\servicios;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('Admin.Servicios.index');

    }
    public function listar()
    {
        $servicios=servicios::all();
        return DataTables::of($servicios)
            ->addColumn('editar', function ($servicios) {
                return '<a class="btn btn-outline-dark" href="/servicios/'.$servicios->id.'/edit" >Editar</a>';
            })
            ->rawColumns(['editar'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Servicios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(servicios::$rules);
        $input= $request->all();
        try{
            servicios::create([
                "Nombre"=>$input["Nombre"],
                "Descripcion"=>$input["Descripcion"],
                "Valor"=>$input["Valor"],
                "Estado"=>$input["Estado"],
            ]);
            $request->session()->flash('flash_message', "Se registro correctamente");
            return redirect("/servicios");
        }catch(\Exception $e){
            $request->session()->flash('flash_message',$e->getMessage() );
            return redirect("/servicios");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function show(servicios $servicios)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function edit(servicios $servicios)
    {
        $servicios=Servicios::find($servicios->id);
        return view('Admin.Servicios.edit',['servicios'=>$servicios], compact('servicios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(servicios::$rules);
        $input= $request->all();
        try{
        $servicios=servicios::find($id);

        if($servicios==null){
            $request->session()->flash('flash_message', "Se mofico correctamente");
        }
            $servicios->update([
                "Nombre"=>$input["Nombre"],
                "Descripcion"=>$input["Descripcion"],
                "Valor"=>$input["Valor"],
                "Estado"=>$input["Estado"],
            ]);
            $request->session()->flash('flash_message', "Se mofico correctamente");
            return redirect("/servicios");


        }catch(\Exception $e){
            $request->session()->flash('flash_message',$e->getMessage() );
            return redirect("/servicios");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function destroy(servicios $servicios)
    {
        //
    }
}
