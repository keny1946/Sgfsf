<?php

namespace App\Http\Controllers;

use App\empleados;
use App\tipodocumento;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Laracasts\Flash\Flash;

class empleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.Empleado');
    }
    public function listar()
    {
        $empleados=empleados::select("empleados.*","tipodocumento.Nombre")
        ->join("tipodocumento","empleados.idTipoDocumento","=","tipodocumento.id")
        ->get();
        return DataTables::of($empleados)
            ->addColumn('editar', function ($empleados) {
                return '<a class="btn btn-outline-dark" href="/empleado/'.$empleados->id.'/edit" >Editar</a>';
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
        $request->validate(empleados::$rules);
        $input= $request->all();
        try{
            empleados::create([
                "Nombres"=>$input["Nombres"],
                "Apellidos"=>$input["Apellidos"],
                "NroDocumento"=>$input["NroDocumento"],
                "Email"=>$input["Email"],
                "Telefono"=>$input["Telefono"],
                "Clave"=>$input["Clave"],
                "estado"=>$input["estado"],
                "IdTipoDocumento"=>$input["IdTipoDocumento"],
            ]);
            $request->session()->flash('flash_message', "Se registro correctamente");
            return redirect("/empleado");
        }catch(\Exception $e){
            $request->session()->flash('flash_message',$e->getMessage() );
            return redirect("/empleado");
        }
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
    public function update(Request $request, $id)
    {
        $request->validate(empleados::$rules);
        $input= $request->all();
        try{
        $empleados=empleados::find($id);

        if($empleados==null){
            $request->session()->flash('flash_message', "No se encontro");
        }
            $empleados->update([
                "Nombres"=>$input["Nombres"],
                "Apellidos"=>$input["Apellidos"],
                "NroDocumento"=>$input["NroDocumento"],
                "Email"=>$input["Email"],
                "Telefono"=>$input["Telefono"],
                "Clave"=>$input["Clave"],
                "estado"=>$input["estado"],
                "IdTipoDocumento"=>$input["IdTipoDocumento"],
            ]);
            $request->session()->flash('flash_message', "Se mofico correctamente");
            return redirect("/empleado");


        }catch(\Exception $e){
            $request->session()->flash('flash_message',$e->getMessage() );
            return redirect("/empleado");
        }
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
