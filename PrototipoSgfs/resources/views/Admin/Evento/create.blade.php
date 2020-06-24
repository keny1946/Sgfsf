@extends('layouts.Admin.appD');
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Evento</title>
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
                            <form method="POST" enctype="multipart/form-data" action="{{route('eventos.store')}}" role="form">

                                    {{ csrf_field() }}
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Nombre del evento</label>
                                            <input type="text" id="nombre" name="nombre" class="form-control {{$errors->has('nombre')?'is-invalid':''}}" value="{{old('nombre')}}" onkeypress="return soloLetras(event)">
                                            {!! $errors->first('nombre','<div class="invalid-feedback">:message</div>')  !!}
                                          </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4">Descripcion</label>
                                            <input type="text" id="descripcion" name="descripcion" class="form-control {{$errors->has('descripcion')?'is-invalid':''}}" value="{{old('descripcion')}}" >
                                            {!! $errors->first('descripcion','<div class="invalid-feedback">:message</div>')  !!}
                                          </div>

                                          <div class="form-group col-md-6">
                                            <label for="inputState">Estado</label>
                                            <select id="estado" name="estado" class="form-control">
                                                <option value="activo">Activo</option>
                                                <option value="inactivo">Inactivo</option>
                                            </select>
                                        </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4">Imagen</label>
                                            <input type="file" class="form-control {{ $errors->has('imagen')?'is-invalid':''}}" name="imagen" id="imagen" value="">
                                            {!! $errors->first('imagen','<div class="invalid-feedback">:message</div>')  !!}
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

