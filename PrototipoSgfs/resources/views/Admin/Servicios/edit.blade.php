@extends('layouts.Admin.appD');
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Servicios</title>
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
                            <form method="POST" action="/servicios/{{$servicios->id}}/update" role="form">
                                @method('PATCH')
                                    {{ csrf_field() }}
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Nombre</label>
                                            <input type="text" name="Nombre" id="Nombre" class="form-control {{$errors->has('Nombre') ? 'is-invalid':''}}" value="{{$servicios->Nombre}}">
                                            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>')!!}
                                          </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4">Descripcion</label>
                                            <input type="text" id="Descripcion" name="Descripcion" class="form-control {{$errors->has('Descripcion') ? 'is-invalid':''}}" value="{{$servicios->Descripcion}}">
                                          </div>

                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4">Valor</label>
                                            <input type="text" id="Valor" name="Valor" class="form-control {{$errors->has('Valor') ? 'is-invalid':''}}" value="{{$servicios->Valor}}">
                                          </div>
                                          <div class="form-group col-md-6">
                                            <select id="estado" name="estado" class="form-control">
                                                <option>--Seleccione el estado--</option>
                                                <option value="activo" name="tipodocumento">Activo</option>
                                                <option value="inactivo" name="tipodocumento">Inactivo</option>
                                            </select>
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
