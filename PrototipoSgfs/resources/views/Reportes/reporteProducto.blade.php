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
                        <th scope="col">Nombre Producto</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Cantidad</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($producto as $producto)
                        <tr scope="row">{{$producto->id}}</tr>
                        <tr>{{$producto->nombreProducto}}</tr>
                        <tr>{{$producto->valor}}</tr>
                        <tr>{{$producto->descripcion}}</tr>
                        <tr>{{$producto->estado}}</tr>
                        <tr>{{$producto->cantidad}}</tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>

    @endsection
