@extends('layouts.navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de Compra</title>
</head>
<body>
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
            <div id="box">
                <div class="container">
                    <div class="row" id="compra">
                        <div class="col-4">
                            <div class="img-fluid">
                                <img src="{{asset('uploads/'.$producto->imagen)}}" class="rounded mx-auto d-block" alt="" width="100%"/>
                            </div>
                        </div>
                        <div class="col-8">
                        <form method="POST" action="/producto/{{$producto->id}}/store" role="form">
                            {{ csrf_field() }}
                            <h1 class="text-center">{{$producto->nombreProducto}}</h1>
                            <br>
                            <br>
                            <h4>{{$producto->descripcion}}</h4>
                            <br>
                            <h4>Direccion de envio :
                                <p>
                                    {{Auth()->user()->Domicilio}}
                                </p>
                            </h4>
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Descripcion del Pedido</label>
                              <input rows="3" type="text" name="descripcion" id="descripcion"  class="form-control {{$errors->has('descripcion')?'is-invalid':''}}" value="{{old('descripcion')}}" >
                                {!! $errors->first('descripcion','<div class="invalid-feedback">:message</div>')  !!}
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Cantidad</label>
                              <input rows="3" type="number" name="cantidad" id="cantidad"   class="form-control {{$errors->has('cantidad')?'is-invalid':''}}" value="{{old('cantidad')}}" >
                              <input type="hidden" name="cantidadPro" id="cantidadPro" value="{{$producto->cantidad}}">
                                {!! $errors->first('cantidad','<div class="invalid-feedback">:message</div>')  !!}
                            </div>
                            <input type="submit" class="btn btn-outline-dark btn-block" value="Realizar pedido" >
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <br>
    <br>
    <br>

    @endsection
</body>
</html>
