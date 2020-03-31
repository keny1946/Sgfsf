<?php

namespace App\Http\Controllers;

use App\servicios;
use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['servicios']=Servicios::paginate(5);

        return view('Admin.Servicios.index', $datos);
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
        $campos=[
            'Nombre' => 'required|string|max:50',
            'Descripcion' => 'required|string|max:254',
            'Valor' => 'required',
            'estado'=>'required'
        ];
        $Mensaje=["required"=>'El :attribute es requerido'];
        $this->validate($request,$campos,$Mensaje);

        $datosServicio=request()->except('_token');
        Servicios::insert($datosServicio);

        //return response()->json($datosServicio);
        return redirect('/servicios')->with('Mensaje','Servicio agregado con exito');
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
        $datosServicio=request()->except(['_token','_method']);
        Servicios::where('id','=',$id)->update($datosServicio);

        //$servicio=Servicios::findOrFail($id);
        //return view('servicios.edit', compact('servicio'));
        return redirect('/servicios')->with('Mensaje','Servicio modificado con exito');
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
