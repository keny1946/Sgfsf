@extends('layouts.Admin.appD');
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Producto</title>
</head>

<body>
    @section('navegacion')
        <main class="page-content">
            @if(count($errors)>0)
                <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            </ul>
                 </div>
             @endif
             @if(Session::has('flash_message'))
       <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
@endif
            <div class="container-fluid">
                <form method="POST" enctype="multipart/form-data" action="/producto/{{$producto->id}}/update" role="form">
                <div id="box">
                    <div class="container">
                        <div class="row">
                            <form method="POST" enctype="multipart/form-data" action="/producto/{{$producto->id}}/update" role="form">
                                <div class="col-6">
                                    {{ csrf_field() }}
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Nombre Producto</label>
                                            <input type="text" id="nombreProducto" name="nombreProducto" class="form-control {{$errors->has('nombreProducto')?'is-invalid':''}}" value="{{$producto->nombreProducto}}" onkeypress="return soloLetras(event)" >
                                            {!! $errors->first('nombreProducto','<div class="invalid-feedback">:message</div>')  !!}
                                          </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4">Valor</label>
                                          <input type="text" id="valor"  name="valor" class="form-control {{$errors->has('valor')?'is-invalid':''}}" value="{{$producto->valor}}">
                                            {!! $errors->first('valor','<div class="invalid-feedback">:message</div>')  !!}
                                          </div>

                                          <div class="form-group col-md-6">
                                            <label for="inputState">Estado</label>
                                            <select id="estado" name="estado" class="form-control">
                                                <option value="activo" name="tipodocumento">Activo</option>
                                                <option value="inactivo" name="tipodocumento">Inactivo</option>
                                            </select>
                                        </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4">Descripcion</label>
                                            <input rows="3" type="text" id="descripcion" name="descripcion" class="form-control {{$errors->has('descripcion')?'is-invalid':''}}" value="{{$producto->descripcion}}" onkeypress="return soloLetras(event)">
                                            {!! $errors->first('descripcion','<div class="invalid-feedback">:message</div>')  !!}
                                          </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4">Cantidad</label>
                                            <input type="text" id="cantidad" name="cantidad" class="form-control {{$errors->has('cantidad')?'is-invalid':''}}" value="{{$producto->cantidad}}">
                                            {!! $errors->first('cantidad','<div class="invalid-feedback">:message</div>')  !!}
                                          </div>
                                        <div class="form-group col-md-6">
                                        <label for="inputEmail4">Imagen</label>
                                        <input type="file" id="imagen" name="imagen" class="form-control-file {{$errors->has('imagen')?'is-invalid':''}}" value="{{$producto->imagen}}">
                                        {!! $errors->first('imagen','<div class="invalid-feedback">:message</div>')  !!}
                                      </div>

                                    <input type="submit" class="btn btn-outline-dark btn-block" value="Registrar">
                                </div>
                            </div>
                            <div class="col-6">
                                <h3 class="text-center">Insumos</h3>
                                <label>Nombre</label>
                                <select name="insumos" id="insumos" class="form-control" onchange="colocar_precio()">
                                    <option>--Seleccionar insumo--</option>
                                    @foreach ($insumo as $item)
                                        <option precio="{{$item->Valor}}" value="{{$item->id}}">{{$item->Nombre}}</option>
                                    @endforeach
                                </select>
                                <br>
                                <label>Valor</label>
                                <input id="precio" class="form-control" name="" value="0" readonly disabled>
                                <br>
                                <button onclick="agregar_insumo()" type="button" class="btn btn-outline-dark float-right">Agregar</button>
                                <br>
                                <br>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Valor</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbl_insumos">

                                    </tbody>
                                </table>
                            </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </main>
    @endsection
    <script>
        function colocar_precio(){
            let precio = $("#insumos option:selected").attr("precio");
            $("#precio").val(precio);
        }

        function agregar_insumo(){
            let insumo_id = $("#insumos option:selected").val();
            let insumo_text = $("#insumos option:selected").text();
            let precio = $("#precio").val();
            $("#tbl_insumos").append(`
                <tr id="tr-${insumo_id}">
                    <td>
                        <input type="hidden" id="insumo_id[]" name="insumo_id[]" value="${insumo_id}" >
                        ${insumo_text}
                    </td>
                    <td>
                        ${precio}
                    </td>
                    <td>
                        <button type="button" class="btn btn-outline-dark" onclick="eliminar_insumo(${insumo_id},${precio})">X</button>
                    </td>
                </tr>
            `);
        }
        function eliminar_insumo(id,precio){
            $("#tr-"+id).remove();

        }
    </script>
    <script>

    </script>
</body>
</html>
