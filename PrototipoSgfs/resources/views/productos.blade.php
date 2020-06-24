@extends('layouts.navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    @section('navbar')
    <br>
    <br>
    <br>

    <br>
    <br>
    <br>
    @if(Session::has('Mensaje'))
    <div class="alert alert-primary" role="alert">
        {{Session::get('Mensaje')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="container">
        <div class="row">
                {{csrf_field()}}
                @foreach ($producto as $item)
                <br>
                <br>
                @if ($item->estado=='activo')
                <div class="col-4">
                    <br>
                    <div class="shop-card">
                            <div class="title">
                                {{$item->nombreProducto}}
                            </div>
                            <div class="desc">
                                {{$item->nombreProducto}}
                            </div>
                            <div class="img-fluid">
                                <img src="{{asset('uploads/'.$item->imagen)}}" class="rounded mx-auto d-block" alt="" width="180">
                            </div>
                            <div class="cta">
                            <div class="price">${{$item->valor}}</div>
                            <a href="/producto/{{$item->id}}/compra"><button type="submit" class="btn">Añadir al carro<span class="bg"></span></button></a>


                            </div>
                    </div>
                </div>
                <div class="bg"></div>
                @endif

                <br>
                @endforeach
        </div>
        <br>
        <br>
        <br>
    </div>
    @endsection
</body>
</html>
