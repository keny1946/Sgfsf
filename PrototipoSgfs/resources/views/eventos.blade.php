@extends('layouts.navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eventos</title>
</head>
<body>
    @section('navbar')
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <img/>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($eventos as $item)
            <div class="col-4">
                <div class="card">
                    <img src="{{asset('uploads/'.$item->imagen)}}" alt="Denim Jeans" style="width:100%">
                    <h1>{{$item->nombre}}</h1>
                    <p>{{$item->descripcion}}</p>
                    <a href="/eventos/{{$item->id}}/reserva"><button>Reservar</button></a>
                  </div>
            </div>
            @endforeach
        </div>
    </div>

    @endsection
</body>
</html>
