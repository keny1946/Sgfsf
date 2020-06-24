@extends('layouts.route')
@section('route')
    <br>
    <br>
    <br>

    <div class="contianer">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre Insumos</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Cantidad</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($insumos as $insumos)
                        <tr scope="row">{{$insumos->id}}</tr>
                        <tr>{{$insumos->Nombre}}</tr>
                        <tr>{{$insumos->Valor}}</tr>
                        <tr>{{$insumos->cantidad}}</tr>
                        <tr>{{$insumos->Descripcion}}</tr>
                        <tr>{{$insumos->Estado}}</tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>


    @endsection
