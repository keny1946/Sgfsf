<?php

namespace App\Http\Controllers;

use App\insumos;
use Illuminate\Http\Request;

class InsumosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['insumos']=Insumos::paginate(3);

        return view('Admin.Insumos.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Insumos.create');
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
            'Nombre'=>'required|string|max:100',
            'Valor'=>'required|string|max:100',
            'Descripcion'=>'required|string|max:100',
            'Estado'=>'required|string|max:100',
            'Foto'=>'required|max:100000'
//Hablar con hector para esta validacion: |mimes:jpg,png,jpeg
        ];
        $Mensaje=["required"=>'Este campo es obligatorio'];

        $this->validate($request,$campos,$Mensaje);

        $datosInsumo=request()->all();
        $datosInsumo['Foto']=$request->file('Foto')->store('uploads','public');



        Insumos::insert($datosInsumo);

        //return response()->json($datosInsumo);
        return redirect('/insumos')->with('Mensaje','Insumo agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\insumos  $insumos
     * @return \Illuminate\Http\Response
     */
    public function show(insumos $insumos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\insumos  $insumos
     * @return \Illuminate\Http\Response
     */
    public function edit(insumos $insumos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\insumos  $insumos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campos=[
            'Nombre'=>'required|string|max:100',
            'Valor'=>'required|string|max:100',
            'Descripcion'=>'required|string|max:100',
            'Estado'=>'required|string|max:100',

        ];

        if($request->hasFile('Foto')){

            $campos+=['Foto'=>'required|max:10000|mimes:jpg,png,jpeg'];

        }

        $Mensaje=["required"=>'Este campo es obligatorio'];

        $this->validate($request,$campos,$Mensaje);



        $datosInsumo=request()->except(['_token','_method']);

        if($request->hasFile('Foto')){

            $insumo= Insumos::findOrFail($id);

            Storage::delete('public/'.$insumo->Foto);

            $datosInsumo['Foto']=$request->file('Foto')->store('uploads','public');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\insumos  $insumos
     * @return \Illuminate\Http\Response
     */
    public function destroy(insumos $insumos)
    {
        //
    }
}
