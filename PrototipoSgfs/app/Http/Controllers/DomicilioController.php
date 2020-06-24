<?php

namespace App\Http\Controllers;

use App\domicilio;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Laracasts\Flash\Flash;

class DomicilioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.Domicilio.index');
    }
    public function listar(){
        $domicilio=domicilio::all();
        return DataTables::of($domicilio)
            ->addColumn('editar', function ($domicilio) {
                return '<a class="btn btn-outline-dark" href="/domicilio/'.$domicilio->id.'/edit" >Editar</a>';
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
        return view('Admin.Domicilio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(domicilio::$rules);
        $input= $request->all();

        try{
            domicilio::create([
                "Ciudad"=>$input["Ciudad"],
                "Direccion"=>$input["Direccion"],
                "Estado"=>$input["Estado"],
            ]);
            Flash::success("Se registro el domicilio");
            return redirect("/domicilio");
        }catch(\Exception $e){
            Flash::error($e->getMessage());
            return redirect("/domicilio");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\domicilio  $domicilio
     * @return \Illuminate\Http\Response
     */
    public function show(domicilio $domicilio)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\domicilio  $domicilio
     * @return \Illuminate\Http\Response
     */
    public function edit(domicilio $domicilio)
    {
        $domicilio=domicilio::find($domicilio->id);
        return view('Admin.Domicilio.edit',['domicilio'=>$domicilio],compact('domicilio'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\domicilio  $domicilio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $request->validate(domicilio::$rules);
        $input= $request->all();
        try{
        $domicilio=domicilio::find($input["id"]);

        if($domicilio==null){
            Flash::error("No se encontro el domicilio");
        }
            $domicilio->update([
                "Ciudad"=>$input["Ciudad"],
                "Direccion"=>$input["Direccion"],
                "Estado"=>$input["Estado"],
            ]);
            Flash::success("Se modifico el domicilio");
            return redirect("/domicilio");


        }catch(\Exception $e){
            Flash::error($e->getMessage());
            return redirect("/domicilio");
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\domicilio  $domicilio
     * @return \Illuminate\Http\Response
     */
    public function destroy(domicilio $domicilio)
    {
        //
    }
}
