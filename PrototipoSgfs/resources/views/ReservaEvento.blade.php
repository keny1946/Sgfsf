@extends('layouts.navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de Compra</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    @section('navbar')
        @if(count($errors)>0)
            <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </ul>
             </div>
         @endif
         <br>
         <br>
        <div class="container-fluid">
            <form  method="POST" action="/eventos/{{$eventos->id}}/registrar" role="form" accept-charset="UTF-8">
            <div id="box">
                <div class="container">
                    <div class="row">
                    <div class="col-8">
                            {{ csrf_field() }}
                        <h1 class="text-center">{{$eventos->nombre}}</h1>
                        <hr>
                        <p>{{$eventos->descripcion}}</p>
                        <label for="inputEmail4">Valor total</label>
                        <input type="text" id="valor"  name="valor" class="form-control {{$errors->has('valor')?'is-invalid':''}}" value="0" readonly>
                            <label for="">Descripcion de lo que desea</label>
                            <textarea name="descripcion" id="descripcion" class="form-control"></textarea>
                            <label for="">Fecha del evento</label>
                            <br>
                            <input type="date" id="fecha" name="fecha">
                            <br>
                            <br>
                        <input type="submit" class="btn btn-outline-dark btn-block" data-dismiss="modal" value="Hacer Reserva"  />


                    </div>
                    <div class="col-4">

                        <h1 class="text-center">Servicios que desea</h1>
                        <hr>
                        <select name="servicios" id="servicios" onchange="colocarPrecio()">
                        <option value="">--Seleccionar servicio--</option>
                        @foreach ($servicios as $item)
                            <option precio="{{$item->Valor}}" value="{{$item->id}}">{{$item->Nombre}}</option>
                        @endforeach
                        </select>
                        <br>
                            <label for="">Valor</label>
                            <input type="text" id="precio" name="precio" class="form-control" value="0" disabled readonly>
                            <br>
                        <button onclick="agregarServicio()" type="button" class="btn btn-outline-dark" >Agregar servicio</button>
                        <br>
                        <br>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Valor</th>
                                </tr>
                            </thead>
                            <tbody id="tbl_servicios">

                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
            </div>
        </div>
    <br>
    <br>
    <br>


    <script>
        function colocarPrecio(){
            let precio=$("#servicios option:selected").attr("precio");
            $("#precio").val(precio);
        }
        function agregarServicio(){
            let idServicio = $("#servicios option:selected").val();
            let nombreServicio = $("#servicios option:selected").text();
            let precio = $("#precio").val();
            $("#tbl_servicios").append(`
            <tr id="tr-${idServicio}">
                <td>
                    ${idServicio}
                </td>
                <td>
                    <input type="hidden" id="idServicio[]" name="idServicio[]" value="${idServicio}"/>
                    ${nombreServicio}
                </td>
                <td>
                    ${precio}
                </td>
                <td>
                    <button type="button" class="btn btn-outline-dark" onclick="eliminar_servicio(${idServicio},${parseInt(precio)})">X</button>
                </td>
            </tr>
            `);
            let valor = $("#valor").val();
            $("#valor").val(parseInt(valor)+parseInt(precio));
        }
        function eliminar_servicio(id,precio) {
            $("#tr-"+id).remove();
            let valor =$("#valor").val();
            $("#valor").val(parseInt(valor)-parseInt(precio));
        }
    </script>
    </form>
     @endsection
</body>
</html>
