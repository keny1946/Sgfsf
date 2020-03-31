<?php

namespace App\Http\Controllers;

use App\empleados;
use App\tipodocumento;
use Illuminate\Http\Request;

class empleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados=Empleados::all();
        return view('Admin.Empleado',compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empleados = Empleados::all();
        $tipodocumento = Tipodocumento::all();
        return view('Admin.CrearEmpleado',compact('empleados','tipodocumento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipodocumento = Tipodocumento::all();
        $data=[
            'nombres' => 'required|string',
            'apellidos' => 'required|string',
            'idtipodocumento'=>'required',
            'nrodocumento'  => 'required||min:10',
            'telefono'=>'required||min:10',
            'email' => 'required||email',
            'clave' => 'required'
        ];
        $mensaje=["required"=>'El :attribute es requerido'];
        $this->validate($request,$data,$mensaje);
        $empleados=request()->except('_token');
        empleados::insert($empleados);
        return redirect('/empleado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function show(empleados $empleados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function edit(empleados $empleados)
    {
        $tipodocumento=tipodocumento::all();
        $empleados=Empleados::find($empleados->id);
        return view('Admin.EditarEmpleado',['empleados'=>$empleados],compact('empleados','tipodocumento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $empleados=request()->except(['_token','_method']);
        empleados::where('id','=',$id)->update($empleados);
        return redirect('/empleado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        empleados::destroy($id);
        return redirect('/empleado');
    }
}
