@extends('layouts.route')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <br>
    <br>
    <br>
    @foreach ($pedidoEvento as $pedidoEvento)
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">{{$pedidoEvento->nombre}}</h1>
                <hr>
                <h4>Descripcion del evento</h4>
                <br>
                <label for="">{{$pedidoEvento->descripcion}}</label>
                <br>

                <h1 class="text-center">Cliente</h1>
                <hr>
                 <h5>Nombre del cliente: </h5><label for="">{{$pedidoEvento->name}} {{$pedidoEvento->apellido}}</label>
                <br>
                <h5>Telefono: </h5><label for="">{{$pedidoEvento->telefono}}</label>
                <br>
                <h5>{{__('E-Mail Address')}}</h5><label for="">{{$pedidoEvento->email}}</label>
                <br>
                <h5>Direccion: </h5><label for="">{{$pedidoEvento->domicilio}}</label>
                <br>
                <h3 class="text-center">Descripcion del pedido evento</h3>
                <br>
                <label for="">{{$pedidoEvento->descripcionEvento}}</label>
            </div>
        </div>
    </div>
    @endforeach
</body>
</html>
