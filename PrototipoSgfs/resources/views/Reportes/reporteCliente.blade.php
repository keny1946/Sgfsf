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
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Domicilio</th>
                        <th scope="col">email</th>
                        <th scope="col">telefono</th>
                        <th scope="col">estado</th>
                      </tr>
                    </thead>
                    @foreach ($cliente as $cliente)
                    <tbody>
                        <td scope="row">{{$cliente->nombre}}</td>
                        <td>{{$cliente->apellido}}</td>
                        <td>{{$cliente->Domicilio}}</td>
                        <td>{{$cliente->email}}</td>
                        <td>{{$cliente->telefono}}</td>
                        <td>{{$cliente->estado}}</td>
                    </tbody>
                    @endforeach
                  </table>
            </div>
        </div>
    </div>


    @endsection
