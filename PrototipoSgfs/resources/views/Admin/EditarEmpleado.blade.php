@extends('layouts.Admin.appD');
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Empleado</title>
</head>
@if ($errors->any())
  <div class="alert alert-danger" role="alert">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
  </div>
@endif
<body>
    @section('navegacion')
        <main class="page-content">
            <div class="container-fluid">
                <div id="box">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">



                                <form method="POST" action="{{route('Empleado.update',$empleados->id)}} " >
                                    @method('PATCH')
                                  {{csrf_field()}}
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Nombres</label>
                                        <input type="text" id="nombres" name="nombres" placeholder="{{$empleados->Nombres}}" value="{{$empleados->Nombres}}" class="form-control" {{old('Nombres')}}>
                                          </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4">Apellidos</label>
                                          <input type="text" id="apellidos" placeholder="{{$empleados->Apellidos}}" value="{{$empleados->Apellidos}}" name="apellidos" class="form-control" {{old('Apellidos')}}>
                                          </div>
                                          <div class="form-group col-md-4">
                                            <label for="inputState">Tipo de Documento</label>
                                            <select id="idtipodocumento" name="idtipodocumento" class="form-control">
                                                <option>--Seleccione--</option>
                                              @foreach ($tipodocumento as $dato)
                                                <option value="{{$dato->id}}" name="tipodocumento">{{$dato->Nombre}}</option>
                                              @endforeach
                                            </select>
                                          </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4">NroDocumento</label>
                                          <input type="text" id="nrodocumento" name="nrodocumento" value="{{$empleados->NroDocumento}}" placeholder="{{$empleados->NroDocumento}}" class="form-control" {{old('NroDocumento')}}>
                                          </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4">Telefono</label>
                                          <input type="text" id="telefono" name="telefono" class="form-control" value="{{$empleados->Telefono}}" placeholder="{{$empleados->Telefono}}" {{old('NroDocumento')}}>
                                          </div>
                                          <div class="form-group col-md-6">
                                            <select id="estado" name="estado" class="form-control">
                                                <option>--Seleccione el estado--</option>
                                                <option value="activo" name="tipodocumento">Activo</option>
                                                <option value="inactivo" name="tipodocumento">Inactivo</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                        <label for="inputEmail4">Email</label>
                                        <input type="email" id="email" name="email" class="form-control" value="{{$empleados->Email}}" placeholder="{{$empleados->Email}}" {{old('Email')}}>
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="inputPassword4">Contraseña</label>
                                      <input type="password" id="clave" name="clave" class="form-control" value="{{$empleados->Clave}}" placeholder="{{$empleados->Clave}}" {{old('Contraseña')}}>
                                      </div>

                                    </div>
                                    <button type="submit" class="btn btn-outline-dark btn-block">Registrar</button>
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
