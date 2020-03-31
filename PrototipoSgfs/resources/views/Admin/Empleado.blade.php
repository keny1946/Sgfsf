@extends('layouts.Admin.appD')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empleado</title>
</head>
<body>
    @section('navegacion')
    <main class="page-content">
        <div class="container-fluid">
    <div id="box">
        <div class="container">
            <div class="row">
                <div class="col-12">
                        <h3 class="text-center">Empleado</h3>
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
                    <a href="{{route('Empleado.create')}}"><button class="btn btn-outline-dark">Registrar</button></a>
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
                            <th scope="col">Id#</th>
                            <th scope="col">Nombres</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Numero Documento</th>
                            <th scope="col">Tipo Documento</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Estado</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>

                        <tbody>
                            @foreach ($empleados as $dato)
                            <tr>
                            <th scope="row">{{$dato->id}}</th>
                            <td>{{$dato->Nombres}}</td>
                            <td>{{$dato->Apellidos}}</td>
                            <td>{{$dato->NroDocumento}}</td>
                            <td>{{$dato->idTipoDocumento}}</td>
                            <td>{{$dato->Email}}</td>
                            <td>{{$dato->Telefono}}</td>
                            <td>{{$dato->estado}}</td>
                                <td>
                                <a href="/empleado/{{$dato->id}}/edit"><button class="btn btn-outline-dark">Editar</button></a></td>
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
