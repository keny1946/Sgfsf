@extends('layouts.Admin.appD')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insumos</title>
</head>
<body>
    @section('navegacion')
    <main class="page-content">
        <div class="container-fluid">
    <div id="box">
        <div class="container">
            <div class="row">
                <div class="col-12">
                        <h3 class="text-center">Insumos</h3>
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
                    <a href="{{route('insumos.create')}}"><button class="btn btn-outline-dark">Registrar</button></a>
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
                            <th>#id</th>
                            <th>Foto</th>
                            <th>Nombre</th>
                            <th>Valor</th>
                            <th>Descripción</th>
                            <th>Estado</th>
                            <th></th>
                          </tr>
                        </thead>

                        <tbody>
                            @foreach($insumos as $insumo)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>
                                <img src="{{asset('storage/'.$insumo->Foto)}}" class="img-thumbnail img-fluid" alt="" width="120">
                                </td>
                                <td>{{$insumo->Nombre}}</td>
                                <td>{{$insumo->Valor}}</td>
                                <td>{{$insumo->Descripcion}}</td>
                                <td>{{$insumo->Estado}}</td>
                                <td>

                                <a href="/insumos/{{$insumo->id}}/edit"><button class="btn btn-outline-dark">Editar</button></a></td>

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
