@extends('layouts.Admin.appD')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Servicios</title>
</head>
<body>
    @section('navegacion')
    <main class="page-content">
        <div class="container-fluid">
    <div id="box">
        <div class="container">
            <div class="row">
                <div class="col-12">
                        <h3 class="text-center">Servicios</h3>
                        <input type="text" class="form-control" placeholder="Buscar">
                        <br>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <button class="btn"><img id="icon" src="https://i.ya-webdesign.com/images/buscar-imagenes-png-4.png" /></button>
                    </div>
                    <div class="col-4">
                    <a href="{{url('servicios/create')}}"><button class="btn btn-outline-dark">Registrar</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Estado</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>

                        <tbody>
                            @foreach($servicios as $servicio)
                                <tr>
                                <td>{{$servicio->id}}</td>
                                <td>{{$servicio->Nombre}}</td>
                                <td>{{$servicio->Descripcion}}</td>
                                <td>{{$servicio->Valor}}</td>
                                <td>{{$servicio->Estado}}</td>
                                <td>
                                <a class="btn btn-light" href="/servicios/{{$servicio->id}}/edit">Editar</a>

                                </td>
                                </tr>
                                @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    </main>
    @endsection
</body>
</html>
