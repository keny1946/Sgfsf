@extends('layouts.route')
@section('route')
    <br>
    <br>
    <br>
    @foreach ($pedido as $pedido)
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">{{$pedido->nombreProducto}}</h1>
                <hr>
                <label class="font-weight-bold">Descripcion</label>
                <label class="text-left">{{$pedido->descripcion}}</label>
                <br>
                <label class="font-weight-bold">Valor</label>
                <label class="text-left">{{$pedido->valor}}</label>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Informacion del cliente</h1>
                <hr>
                <label class="font-weight-bold">Nombre completo</label>
                <label class="text-left">{{$pedido->nombre}} {{$pedido->apellido}}</label>
                <br>
                <label class="font-weight-bold">Direccion</label>
                <br>
                <label class="text-left">{{$pedido->Domicilio}}</label>
                <br>
                <label class="font-weight-bold">Correo Electronico</label>
                <label class="text-left">{{$pedido->email}}</label>
                <br>
                <label class="font-weight-bold">Telefono</label>
                <label class="text-left">{{$pedido->telefono}}</label>
            </div>
        </div>
    </div>
    @endforeach

    @endsection
