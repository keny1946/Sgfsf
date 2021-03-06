@extends('layouts.Admin.appD');
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Empleado</title>
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
                            <form method="POST" action="{{route('Empleado.store')}}" role="form">

                                    {{ csrf_field() }}
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Nombres</label>
                                            <input type="text" id="Nombres" name="Nombres" class="form-control" value="{{old('Nombres')}}" onkeypress="return soloLetras(event)">

                                          </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4">Apellidos</label>
                                            <input type="text" id="Apellidos" name="Apellidos" class="form-control" value="{{old('Apellidos')}}" onkeypress="return soloLetras(event)">
                                          </div>
                                          <div class="form-group col-md-4">
                                            <label for="inputState">Tipo de Documento</label>
                                            <select id="IdTipoDocumento" name="IdTipoDocumento" class="form-control">
                                              @foreach ($tipodocumento as $dato)
                                                <option value="{{$dato->id}}" name="tipodocumento">{{$dato->Nombre}}</option>
                                              @endforeach
                                            </select>
                                          </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputState">Estado</label>
                                            <select id="estado" name="estado" class="form-control">
                                                <option value="activo" name="tipodocumento">Activo</option>
                                                <option value="inactivo" name="tipodocumento">Inactivo</option>
                                            </select>
                                        </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4">NroDocumento</label>
                                            <input type="text" id="NroDocumento" name="NroDocumento" class="form-control" value="{{old('NroDocumento')}}">
                                          </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4">Telefono</label>
                                            <input type="text" id="Telefono" name="Telefono" class="form-control" value="{{old('NroDocumento')}}">
                                          </div>
                                        <div class="form-group col-md-6">
                                        <label for="inputEmail4">Email</label>
                                        <input type="email" id="Email" name="Email" class="form-control" value="{{old('Email')}}">
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="inputPassword4">Contraseña</label>
                                        <input type="password" id="Clave"  name="Clave" class="form-control">
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
