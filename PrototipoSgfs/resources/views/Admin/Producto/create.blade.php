@extends('layouts.Admin.appD');
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Producto</title>
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
                <form method="POST" enctype="multipart/form-data" action="{{route('producto.store')}}" role="form">
                <div id="box">
                    <div class="container">
                        <div class="row">

                            <form method="POST" enctype="multipart/form-data" action="{{route('producto.store')}}" role="form">
                                <div class="col-6">
                                    {{ csrf_field() }}
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Nombre Producto</label>
                                            <input type="text" id="nombreProducto" name="nombreProducto" class="form-control {{$errors->has('nombreProducto')?'is-invalid':''}}" value="{{old('nombreProducto')}}" onkeypress="return soloLetras(event)" >
                                            {!! $errors->first('nombreProducto','<div class="invalid-feedback">:message</div>')  !!}
                                          </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4">Valor total</label>
                                            <input type="text" id="valorT"  name="valorT" class="form-control {{$errors->has('valor')?'is-invalid':''}}" value="0" disabled>
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
                                            <input rows="3" type="text" id="descripcion" name="descripcion" class="form-control {{$errors->has('descripcion')?'is-invalid':''}}" value="{{old('descripcion')}}" onkeypress="return soloLetras(event)">
                                            {!! $errors->first('descripcion','<div class="invalid-feedback">:message</div>')  !!}
                                          </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4">Cantidad</label>
                                            <input type="text" id="cantidad" name="cantidad" class="form-control {{$errors->has('cantidad')?'is-invalid':''}}" value="{{old('cantidad')}}">
                                            {!! $errors->first('cantidad','<div class="invalid-feedback">:message</div>')  !!}
                                          </div>
                                        <div class="form-group col-md-6">
                                        <label for="inputEmail4">Imagen</label>
                                        <input type="file" id="imagen" name="imagen" class="form-control-file {{$errors->has('imagen')?'is-invalid':''}}" value="{{old('imagen')}}">
                                        {!! $errors->first('imagen','<div class="invalid-feedback">:message</div>')  !!}
                                      </div>

                                    <input type="submit" class="btn btn-outline-dark btn-block" value="Registrar">
                                </div>
                            </div>
                            <div class="col-6">
                                <h3 class="text-center">Insumos</h3>
                                <br>
                                <label>Nombre</label>
                                <select name="insumos" id="insumos" class="form-control" onchange="colocar_precio()">
                                    <option>--Seleccionar insumo--</option>
                                    @foreach ($insumo as $item)
                                        @if($item->Estado=="inactivo")
                                        @else
                                <option precio="{{$item->Valor}}" cantInsumos="{{$item->cantidad}}" value="{{$item->id}}">{{$item->Nombre}}</option>
                                        @endif
                                    @endforeach
                                </select>
                                <br>
                                <label>Valor</label>
                                <input id="precio" name="precio" class="form-control" name="" readonly disabled>
                                <label>Cantidad</label>
                                <input id="cantidadInsumo" name="cantidadInsumo" class="form-control" name="" value="0"  >
                                <br>
                                <button onclick="agregar_insumo()" type="button" class="btn btn-outline-dark float-right">Agregar</button>
                                <br>
                                <br>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Valor</th>
                                            <th>Cantidad</th>
                                            <th>Sub total</th>
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
            let CantidadInsumos=$("#insumos option:selected").attr("cantInsumos");
            let cantidad = $("#cantidadInsumo").val();
            let precio = $("#precio").val();
            if(cantidad>0){
                if(parseInt(CantidadInsumos)<parseInt(cantidad)){
                 alert("La cantidad no puede ser mayor a los insumos existentes")

                }else{
                    $("#tbl_insumos").append(`
                        <tr id="tr-${insumo_id}">
                        <td>
                            ${insumo_id}
                        </td>
                    <td>
                        <input type="hidden" id="insumo_id[]" name="insumo_id[]" value="${insumo_id}" >
                        <input type="hidden" id="cantidades[]" name="cantidades[]" value="${cantidad}" >
                        ${insumo_text}
                    </td>
                    <td>
                        ${precio}
                    </td>
                    <td>
                        ${cantidad}
                    </td>
                    <td>
                        ${parseInt(cantidad)*parseInt(precio)}
                    </td>
                    <td>
                        <button type="button" class="btn btn-outline-dark" onclick="eliminar_insumo(${insumo_id},${parseInt(cantidad)*parseInt(precio)})">X</button>
                    </td>
                </tr>
            `);
            let valorTotal=$("#valorT").val();
            $("#valorT").val(parseInt(valorTotal)+parseInt(cantidad)*parseInt(precio));
                }
            }else{
                alert("La cantidad debe de ser mayor a cero");
            }

        }

        function eliminar_insumo(id,subtotal){
            $("#tr-"+id).remove();
            let valorTotal=$("#valorT").val();
            $("#valorT").val(parseInt(valorTotal)-parceInt(subtotal));
        }
    </script>
    <script>

    </script>
</body>
</html>
