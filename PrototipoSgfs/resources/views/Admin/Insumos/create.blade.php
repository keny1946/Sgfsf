@extends('layouts.Admin.appD');
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Insumo</title>
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
                            <form method="POST" enctype="multipart/form-data" action="{{route('insumos.store')}}" role="form">

                                    {{ csrf_field() }}
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Nombre</label>
                                            <input type="text" id="Nombre" name="Nombre" class="form-control {{$errors->has('Nombre')?'is-invalid':''}}" value="{{old('Nombres')}}" onkeypress="return soloLetras(event)">
                                            {!! $errors->first('Nombre','<div class="invalid-feedback">:message</div>')  !!}
                                          </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4">Descripcion</label>
                                            <input type="text" id="Descripcion" name="Descripcion" class="form-control {{$errors->has('Nombre')?'is-invalid':''}}" value="{{old('Descripcion')}}" onkeypress="return soloLetras(event)">
                                            {!! $errors->first('Descripcion','<div class="invalid-feedback">:message</div>')  !!}
                                          </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4">Cantidad</label>
                                            <input type="number" id="cantidad" name="cantidad" class="form-control {{$errors->has('cantidad')?'is-invalid':''}}" value="{{old('Cantidad')}}" >
                                            {!! $errors->first('cantidad','<div class="invalid-feedback">:message</div>')  !!}
                                          </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4">Valor</label>
                                            <input type="text" id="Valor" name="Valor" class="form-control {{$errors->has('Valor')?'is-invalid':''}}" value="{{old('Valor')}}">
                                            {!! $errors->first('Valor','<div class="invalid-feedback">:message</div>')  !!}
                                          </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputState">Estado</label>
                                            <select id="Estado" name="Estado" class="form-control">
                                                <option value="activo" name="tipodocumento">Activo</option>
                                                <option value="inactivo" name="tipodocumento">Inactivo</option>
                                            </select>
                                        </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4">Foto</label>
                                            <input type="file" class="form-control {{ $errors->has('Foto')?'is-invalid':''}}" name="Foto" id="Foto" value="">
                                            {!! $errors->first('Foto','<div class="invalid-feedback">:message</div>')  !!}
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
