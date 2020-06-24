@extends('layouts.Admin.appD');
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Domicilios</title>
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
                                <form method="POST" action="{{route('domicilio.update',$domicilio->id)}} " >
                                    @method('PATCH')
                                  {{csrf_field()}}
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Ciudad</label>
                                        <input type="text" id="Ciudad" name="Ciudad" placeholder="{{$domicilio->Ciudad}}" value="{{$domicilio->Ciudad}}" class="form-control" {{old('Ciudad')}} onkeypress="return soloLetras(event)">
                                          </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4">Direccion</label>
                                          <input type="text" id="Direccion" placeholder="{{$domicilio->Direccion}}" value="{{$domicilio->Direccion}}" name="Direccion" class="form-control" {{old('Direccion')}}>
                                          </div>
                                          <div class="form-group col-md-6">
                                            <select id="estado" name="estado" class="form-control">
                                                <label for="inputState">Estado</label>
                                                <option value="activo" name="tipodocumento">Activo</option>
                                                <option value="inactivo" name="tipodocumento">Inactivo</option>
                                            </select>
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
