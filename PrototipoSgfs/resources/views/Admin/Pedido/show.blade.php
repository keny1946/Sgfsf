@extends('layouts.Admin.appD');
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descripcion Pedido</title>
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
            <div class="container-fluid">
                <div id="box">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                            <form method="POST" action="/pedido" role="form">

                                    {{ csrf_field() }}
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="disabledTextInput">Nombre Cliente</label>
                                        <input type="text" id="nombreProducto" disabled placeholder="{{$cliente->name}}" name="nombreProducto" class="form-control {{$errors->has('nombreProducto')?'is-invalid':''}}" value="{{old('nombreProducto')}}" >
                                          </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4">Apellido Cliente</label>
                                          <input type="text" id="valor" disabled name="valor" placeholder="{{$cliente->apellido}}" class="form-control {{$errors->has('valor')?'is-invalid':''}}" value="{{old('valor')}}">
                                            {!! $errors->first('valor','<div class="invalid-feedback">:message</div>')  !!}
                                          </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4">Producto</label>
                                          <input rows="3" type="text"  disabled id="descripcion" placeholder="{{$producto->nombreProducto}}" name="descripcion" class="form-control {{$errors->has('descripcion')?'is-invalid':''}}" value="{{old('descripcion')}}">
                                            {!! $errors->first('descripcion','<div class="invalid-feedback">:message</div>')  !!}
                                          </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4">Descripcion</label>
                                          <input rows="3" type="text" disabled id="descripcion" placeholder="{{$producto->descripcion}}" name="descripcion" class="form-control {{$errors->has('descripcion')?'is-invalid':''}}" value="{{old('descripcion')}}">
                                            {!! $errors->first('descripcion','<div class="invalid-feedback">:message</div>')  !!}
                                          </div>
                                          <div class="form-group col-md-6">
                                            <img src="{{asset('storage/'.$producto->imagen)}}" class="img-thumbnail img-fluid" alt="" width="120">
                                            {!! $errors->first('cantidad','<div class="invalid-feedback">:message</div>')  !!}
                                          </div>

                                    </div>
                                    <input type="submit" class="btn btn-outline-dark btn-block" value="Registrar">
                                  </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    @endsection
</body>
</html>
