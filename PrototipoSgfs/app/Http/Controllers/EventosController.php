<?php

namespace App\Http\Controllers;

use App\eventos;
use App\eventos_servicios;
use App\servicios;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos=eventos::all();
        return view('Admin.Evento.index',compact('eventos'));
    }
    public function listar(){
        $eventos=eventos::all();
        return DataTables::of($eventos)
        ->addColumn('editar', function ($eventos) {
            return '<a class="btn btn-outline-dark" href="/producto/'.$eventos->id.'/edit" >Editar</a>';
        })
        ->editColumn('imagen',function ($eventos){
            return "<img src='/uploads/".$eventos->imagen."' width='100px'  >";
        })
        ->addColumn('Reporte',function ($eventos){
            return '<a class="btn btn-outline-dark" href="/evento/'.$eventos->id.'/reporte">Reporte</a>';
        })
        ->rawColumns(['editar','imagen','Reporte'])
        ->make(true);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $eventos=eventos::all();
        $servicios=servicios::all();
        return view('Admin.Evento.create',compact('eventos','servicios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(eventos::$rules);
        $input=$request->all();
        try{
            $image=null;
            if($request->imagen!=null){
                $image=$input["nombre"].time().'.'.$request->imagen->extension();
                $request->imagen->move(public_path('uploads'),$image);
            }
            $evento=eventos::create([
                "nombre"=>$input["nombre"],
                "descripcion"=>$input["descripcion"],
                "imagen"=>$image,
                "estado"=>$input["estado"]
            ]);
            $request->session()->flash('flash_message',"Se registro el evento satisfatoriamente");
            return redirect('/adminEventos');
        }catch(Exception $e){
            $request->session()->flash('flash_message',$e->getMessage());

        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function show(eventos $eventos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function edit(eventos $eventos)
    {
        $eventos=eventos::find($eventos);
        return view('/eventos/editar',["eventos"=>$eventos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, eventos $eventos)
    {
        $request->validate(eventos::$rules);
        $input=$request->all();
        try{
            $evento=eventos::find($input["id"]);

            if($request->image == $input["imagen"]){
                Storage::delete(['uploads/', $input["imagen"]]);
                $imagen= $input["nombre"].time().'.'.$request->imagen->extension();
                $request->imagen->move(public_path('uploads'),$imagen);
            }
            if($evento==null){
                $request->session()->flash('flash_message', "No se encontro el evento");
            }
            $evento->update([
                "nombre"=>$input["nombre"],
                "descripcion"=>$input["descripcion"],
                "estado"=>$input["estado"],
                "imagen"=>$imagen
            ]);
            $request->session()->flash('flash_message','Se actualizo los datos correctamente');
            return redirect('/adminEvento');
        }catch(Exception $e){
            $request->session()->flash('flash_message', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function destroy(eventos $eventos)
    {
        //
    }
}
