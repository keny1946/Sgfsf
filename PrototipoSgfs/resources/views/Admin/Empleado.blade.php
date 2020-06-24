@extends('layouts.Admin.appD')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empleado</title>
</head>
<body>
    @section('navegacion')
    <main class="page-content">
        <div class="container-fluid">
           @if(Session::has('flash_message'))
       <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
@endif
    <div id="box">
        <div class="container">
            <div class="row">
                <div class="col-12">
                        <h3 class="text-center">Empleado</h3>
                        <input type="text" class="form-control" placeholder="Buscar">
                        <br>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <button class="btn"><img id="icon" src="https://i.ya-webdesign.com/images/buscar-imagenes-png-4.png" /></button>
                    </div>
                    <div class="col-4">
                    <a href="{{route('Empleado.create')}}"><button class="btn btn-outline-dark">Registrar</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table id="tbl_empleado" class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Id#</th>
                            <th scope="col">Tipo Documento</th>
                            <th scope="col">Numero Documento</th>
                            <th scope="col">Nombres</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Estado</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>

                        <tbody>

                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
    <script src="/js/datatables.min.js"></script>
    <script>
           $("#tbl_empleado").DataTable({
        processing: true,
        serverSide: true,
        ajax: '/empleado/listar',
        columns: [
            {data: 'id', name: 'id'},
            {data: 'Nombre', name: 'Nombre'},
            {data: 'NroDocumento', name: 'NroDocumento'},
            {data: 'Nombres', name: 'Nombres'},
            {data: 'Apellidos', name: 'Apellidos'},
            {data: 'Email', name: 'Email'},
            {data: 'Telefono', name: 'Telefono'},
            {data: 'estado', name: 'estado'},
            {data: 'editar', name: 'editar', orderable: false, searchable: false}
        ]
    });
    </script>
    @endsection
</body>
</html>
