<?php

namespace App\Http\Controllers;

use App\insumos;
use App\producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Laracasts\Flash\Flash;
use Yajra\DataTables\Facades\DataTables;

class InsumosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $insumos=insumos::all();
        return view('Admin.Insumos.index',compact('insumos'));
    }
    public function listar()
    {
        $insumos=insumos::all();
        return DataTables::of($insumos)
            ->addColumn('editar', function ($insumos) {
                return '<a class="btn btn-outline-dark" href="/insumos/'.$insumos->id.'/edit" >Editar</a>';
            })
            ->editColumn('Foto',function ($insumos){
                return "<img src='/uploads/".$insumos->Foto."' width='100px'  >";
            })
            ->rawColumns(['editar','Foto'])
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
        return view('Admin.Insumos.create',compact('producto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(insumos::$rules);
        $input=$request->all();

        try{
            $foto=null;
            if($request->$foto != null){
                $foto = $input["Nombre"].time().'.'.$request->Foto->extension();
                $request->Foto->move(public_path('uploads'),$foto);
            }
            insumos::create([
                'Nombre'=>$input['Nombre'],
                'Valor'=>$input['Valor'],
                'Descripcion'=>$input['Descripcion'],
                'cantidad'=>$input['cantidad'],
                'Estado'=>$input['Estado'],
                'Foto'=>$input['Foto']
            ]);
            $request->session()->flash('flash_message', "Se registro correctamente");
            return redirect('/insumos');
        }catch(\Exception $e){
            $request->session()->flash('flash_message', $e->getMessage());
            return redirect('/insumos');
        }
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
    public function edit(insumos $insumos,$id)
    {
        $insumos=insumos::find($insumos->id);
        return view('Admin.Insumos.edit',['insumos'=>$insumos],compact('insumos'));
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
        $request->validate(insumos::$rules);
        $input=$request->all();
        try{
            $insumos=insumos::find($input["id"]);
            if($insumos==null){
                Flash::error("No se encontro el producto");
            }
            $insumos->update([
                'Nombre'=>$input['Nombre'],
                'Valor'=>$input['Valor'],
                'Descripcion'=>$input['Descripcion'],
                'Estado'=>$input['Estado'],
                'Foto'=>$input['Foto']
            ]);
            Flash::success("Se modifico correctamente");
            return redirect('/insumos');
        }catch(\Exception $e){
            Flash::error($e->getMessage());
            return redirect('/insumos');
        }
    }
    public function ingresoInsumos(request $request){
        $input=$request->all();
        $insumos=insumos::find($input["insumos"]);
        if($input["cantidad"]>0){
            $insumos->update([
                "cantidad"=>$insumos->cantidad+$input["cantidad"],
                "Estado"=>"activo"
            ]);
        }else{
            $request->session()->flash('flash_message', "La cantidad debe de ser mayor a cero");
        }
        return redirect('/insumos');
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
